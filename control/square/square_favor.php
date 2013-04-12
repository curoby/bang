<?php	defined ( 'IN_KEKE' ) or exit ( 'Access Denied' );
$page_title='广场-我的收藏'.'- '.$_K['html_title'];
kekezu::check_login();
$favor_obj = keke_table_class::get_instance('witkey_free_favor');
$url = "index.php?do=square&view=favor&pagesize=$pagesize&page=$page&type=$type";
$where = " 1 = 1  ";
$pagesize = 10;
$page or $page = 1 ;
$sql = "SELECT * FROM `%switkey_free_favor` 
 		 where  ";
if(isset($type)&&$type == 'task'){
	$where.= " and uid = ".$uid." and obj_type = 'free_task'";
}elseif (isset($type)&&$type == 'service'){
	$where.= " and uid = ".$uid." and obj_type = 'free_service'";
}else{
	$where.= " and uid = ".$uid;
}
$where .=" order by on_time desc";
$sql = sprintf($sql,TABLEPRE,TABLEPRE);
$count = db_factory::execute($sql.$where);
$pages = $kekezu->_page_obj->getPages($count, $pagesize, $page, $url);
$favor_arr = db_factory::query($sql.$where.$pages['where']);
$op_arr = array(
			'pub' => '发布',
			'buy' => '购买'
		);
$obj_arr = array(
		'free_service' => '出售',
		'service' => '出售',
		'free_task' => '需求',
		'task' => '需求',
);
if(isset($action)&&$action=="add_favor"){
	if(check_if_favor($obj_id, $obj_type)){
		kekezu::echojson('已经收藏过了，请勿重新收藏',0,'');
	}else{
		if($obj_type=='free_service'){
			$obj_info = db_factory::get_one(sprintf("select * from %switkey_free_service where service_id=%d",TABLEPRE,$obj_id));
			$fds['obj_title']=$obj_info['service_title'];
		}elseif($obj_type=='free_task'){
			$obj_info = db_factory::get_one(sprintf("select * from %switkey_free_task where task_id=%d",TABLEPRE,$obj_id));
			$fds['obj_title']=$obj_info['task_title'];
		}
		$fds['obj_id'] = $obj_id;
		$fds['obj_type'] = $obj_type;
		$fds['uid'] = $uid;
		$fds['username'] = $username;
		$fds['on_time'] = time();
		$res = $favor_obj->save($fds);
		if($obj_type=='free_task'){
			db_factory::execute(sprintf("update %switkey_free_task set focus_num = ifnull(focus_num,0)+1 where task_id=%d",TABLEPRE,$obj_id));
			kekezu::update_weibo_data($obj_info['task_id'],$fds['obj_type'],'free_task',$obj_info['task_title'],$obj_info['uid'],$obj_info['username'],intval($obj_info['leave_num']),intval($obj_info['focus_num'])+1,intval($obj_info['work_num']),'focus',0,$uid,$username);
		}elseif($obj_type=='free_service'){
			db_factory::execute(sprintf("update %switkey_free_service set focus_num = ifnull(focus_num,0)+1 where service_id=%d",TABLEPRE,$obj_id));
			kekezu::update_weibo_data($obj_info['service_id'],$fds['obj_type'],'free_service',$obj_info['service_title'],$obj_info['uid'],$obj_info['username'],intval($obj_info['leave_num']),intval($obj_info['focus_num'])+1,intval($obj_info['work_num']),'focus',0,$uid,$username);
		}
		$res and kekezu::echojson('收藏成功',1,'') or kekezu::echojson('收藏失败',0,'');
	}
}
if(isset($action)&&$action=="del_favor"){
	$res =  $favor_obj->del('favor_id', $del_favor_id);
	db_factory::execute(sprintf("update %switkey_weibo set focus_num = focus_num -1  where obj_id = '%d' and obj_type = '%s'",TABLEPRE,$obj_id,$obj_type));
	$res and kekezu::echojson($del_favor_id,1,'') or kekezu::echojson('',0,''); 
}
function check_if_favor($id,$type){
	global $uid;
	$res = db_factory::get_one(sprintf("select favor_id  from %switkey_free_favor where obj_id = '%d' and obj_type ='%s' and uid= %d;",TABLEPRE,$id,$type,$uid));
	if($res){
		return TRUE;
	}else{
		return FALSE;
	}
}
require keke_tpl_class::template ( "tpl/" . $_K ['template'] . "/" . $do . "/" .$do."_". $view );