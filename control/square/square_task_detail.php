<?php	defined ( 'IN_KEKE' ) or exit ( 'Access Denied' );
$page_title='�㳡-���������ϸ'.'- '.$_K['html_title'];
$task_id  and $task_info = db_factory::get_one(sprintf("select * from %switkey_free_task where task_id=%d",TABLEPRE,intval($task_id)));
if(!$task_info){
	kekezu::show_msg ( $_lang ['friendly_notice'], 'index.php?do=square', 2, '���ݲ�����','alert_error' );
}else{
	$task_info = db_factory::get_one(sprintf("select * from %switkey_free_task where task_id=%d",TABLEPRE,intval($task_id)));
	$task_info['task_file'] and $task_file = db_factory::query(sprintf("select * from %switkey_file where file_id in (%s)",TABLEPRE,$task_info['task_file']));
	$task_info['task_pic'] and $task_pic = db_factory::query(sprintf("select * from %switkey_file where file_id in (%s)",TABLEPRE,$task_info['task_pic']));
	$wiki_info = kekezu::get_user_info($task_info['uid']);
	//�Ƿ����ղ�
	$uid and $is_favor = db_factory::get_one(sprintf("select favor_id  from %switkey_free_favor where obj_id = '%d' and obj_type ='free_task' and uid= %d;",TABLEPRE,$task_id,$uid));
	/*����*/
	$sina_app_id = $kekezu->_sys_config['sina_app_id'];
	$sohu_app_id = $kekezu->_sys_config['sohu_app_id'];
	$share_title = $task_info['task_title'];
	strtolower(CHARSET)=='gbk' and $utitle = urlencode(kekezu::gbktoutf($share_title)) or $utitle = urlencode($share_title);
	/**���Ҹ�������**/
	$buyer_aid = keke_user_mark_class::get_user_aid ( $wiki_info['uid'], '1', null, '1' );
	$level        = unserialize($wiki_info['buyer_level']);
	//���ͺ�����
	$good_rate  = get_witkey_good_rate($wiki_info);

	//�����б�
	$comment_obj = keke_comment_class::get_instance('free_task');
	
	$url = "index.php?do=square&view=task_detail&task_id=$task_id";
	intval($page) or $page = 1;
	$comment_arr = $comment_obj->get_free_comment_list($task_id, $url, $page);
	$comment_data = $comment_arr['data'];
	$comment_page = $comment_arr['pages'];
	$comment_count = count($comment_data);
	$reply_arr = $comment_obj->get_free_reply_info($task_id);
	//var_dump($_SESSION['square_leave_count']);
	switch ($op){
		case "reply": //�ظ�����
			$comment_arr = array("obj_id"=>$task_id,"origin_id"=>$task_id,"obj_type"=>"free_task","p_id"=>$pid,
			"uid"=>$uid, "username"=>$username,"content"=>$content,"on_time"=>time(),"status"=>1);
			$res = $comment_obj->save_free_comment($comment_arr,$task_id,1);
			if($res!=3&&$res!=2&&$res!=5){
				$v1 =  $comment_obj->get_free_comment_info($res);
				$tmp ='replay_free_comment';
				require keke_tpl_class::template ( "task/task_comment_reply" );
			}else{
				echo $res;
			}
			die();
			break;
		case "add": //�������
			$comment_arr = array("obj_id"=>$task_id,"origin_id"=>$task_id,"obj_type"=>"free_task","p_id"=>0,
			"uid"=>$uid, "username"=>$username,"content"=>$content,"on_time"=>time(),"status"=>1);
			$res = $comment_obj->save_free_comment($comment_arr,$task_id);
			if($res!=3&&$res!=2){
				$v = $comment_obj->get_free_comment_info($res);
				$tmp ='pub_free_comment';
				//����Ͷ����
				db_factory::execute(sprintf("update %switkey_free_task set leave_num = ifnull(leave_num,0)+1 where task_id=%d",TABLEPRE,$task_id));
				//�����ɹ���Ҫ����΢������
				kekezu::update_weibo_data($task_id,'free_task','free_task',$task_info['task_title'],$task_info[uid],$task_info[username],intval($task_info[leave_num])+1,intval($task_info[focus_num]),intval($task_info[work_num]),'leave',0,$uid,$username);
				
				require keke_tpl_class::template ( "task/task_comment_reply" );
			}else{
				echo $res;
			}
			die();
			break;
		case "comment_del":
			$comment_info = $comment_obj->get_free_comment_info($comment_id);
			//var_dump($comment_info);die();
			if( $uid == $comment_info[uid]){
				//ɾ������
				$res = $comment_obj->del_free_comment($comment_id,$task_id,$comment_info['p_id']);
			}
// 			else{
// 				kekezu::keke_show_msg("", $_lang['not_priv'],"error","json");
// 			}
			$res and kekezu::keke_show_msg("", $_lang['delete_success'],"","json") or kekezu::keke_show_msg("",$_lang['system_is_busy'],"error","json");
			break;
	}
	
}
function get_witkey_good_rate($user_info){
	$st = $user_info['seller_total_num'];
	return $st?(number_format($user_info['seller_good_num']/$st,2)*100).'%':'0%';
}
require keke_tpl_class::template ( "tpl/" . $_K ['template'] . "/" . $do . "/" .$do."_". $view );