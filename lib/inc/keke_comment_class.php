<?php

/**
 * @copyright keke-tech
 * @author lj
 * @version v 2.0
 * 2012-1-15上午11:52:51
 */
class keke_comment_class {
	
	protected $_comment_obj;
	protected $_free_comment_obj;
	protected $_comment_type;
	
	public static function get_instance($comment_type) {
		return new keke_comment_class ( $comment_type );
	}
	function __construct($comment_type) {
		global $kekezu;
		$this->_comment_obj = keke_table_class::get_instance ( "witkey_comment" );
		$this->_free_comment_obj = keke_table_class::get_instance("witkey_free_message");
		$this->_comment_type = $comment_type;
	} 
	/**
	 * 
	 * 获取留言信息
	 * @param int $comment_id
	 */
	function get_comment_info($comment_id){ 
		$comment_info = $this->_comment_obj->get_table_info('comment_id', $comment_id);
		return $comment_info;
	}
	/**
	 *
	 * 获取广场留言信息
	 * @param int $comment_id
	 */
	function get_free_comment_info($comment_id){
		$comment_info = $this->_free_comment_obj->get_table_info('comment_id', $comment_id);
		return $comment_info;
	}
	/**
	 * 
	 * 获取广场留言列表（带分页）
	 * @param int $obj_id   
	 * @param string $url
	 * @param int $page
	 */
	function get_free_comment_list($obj_id,$url, $page){
		$comment_arr = $this->_free_comment_obj->get_grid ( "obj_id='$obj_id' and obj_type='".$this->_comment_type."' and p_id=0 order by comment_id desc", $url, $page,10,null,1,'comment_page');
	 	//var_dump("obj_id='$obj_id' and obj_type='".$this->_comment_type."' and p_id=0 order by comment_id desc");
		return $comment_arr;
	}
	/**
	 *
	 * 获取留言列表（带分页）
	 * @param int $obj_id
	 * @param string $url
	 * @param int $page
	 */
	function get_comment_list($obj_id,$url, $page){
		$comment_arr = $this->_comment_obj->get_grid ( "obj_id='$obj_id' and obj_type='".$this->_comment_type."' and p_id=0 order by comment_id desc", $url, $page,10,null,1,'comment_page');
		return $comment_arr;
	}
	/**
	 * 
	 * 获取评论列表
	 * @param int $obj_id
	 */
	function get_reply_info($obj_id){
		$reply_arr = kekezu::get_table_data("*","witkey_comment","obj_type='".$this->_comment_type."' and obj_id='$obj_id' and p_id>0"," on_time desc");
		return $reply_arr; 
	}
	/**
	 *
	 * 获取广场评论列表
	 * @param int $obj_id
	 */
	function get_free_reply_info($obj_id){
		$reply_arr = kekezu::get_table_data("*","witkey_free_message","obj_type='".$this->_comment_type."' and obj_id='$obj_id' and p_id>0"," on_time desc");
		return $reply_arr;
	}
	/**
	 * 
	 * 写入留言和回复留言
	 * @param array $comment_arr   ---留言信息的键值对数组
	 * @param int $is_reply		---- 为true代表添加新留言，false代表留言回复
	 *
	 */
	function save_comment($comment_arr,$obj_id,$is_reply=false){
		global $_lang,$kekezu,$uid,$username;
		//类别，时间（分钟），次数
		$r = kekezu::check_session('task_leave',2,4);
		if($r==false){
			return 5;
			die();
		}
		strtolower ( CHARSET ) == 'gbk' and $comment_arr ['content'] = kekezu::utftogbk ( kekezu::escape($comment_arr ['content']) );
		if(kekezu::k_match(array($kekezu->_sys_config['ban_content']),$comment_arr['content'])){
			return 3;
			die();
		}
		$comment_id = $this->_comment_obj->save($comment_arr);
		$model_list = $kekezu->_model_list;
		if(!$is_reply){
		
			if($this->_comment_type=='task'){
				$res = db_factory::execute(sprintf(" update %switkey_task set leave_num =ifnull(leave_num,0)+1 where task_id='%d'",TABLEPRE,$obj_id));
				$obj_info = db_factory::get_one(sprintf("select * from %switkey_task where task_id=%d",TABLEPRE,$obj_id));
				if($obj_info['task_cash_coverage']){
					$cash = $obj_info['task_cash_coverage'];
				}else{
					$cash = $obj_info['task_cash'];
				}
				//发表成功得要更新微博数据
				kekezu::update_weibo_data($obj_id,'task',$model_list[$obj_info['model_id']]['model_code'],$obj_info['task_title'],$obj_info['uid'],$obj_info['username'],$obj_info['leave_num'],$obj_info['focus_num'],$obj_info['work_num'],'leave',$cash,$uid,$username);
			}elseif($this->_comment_type=='service'){
				$res = db_factory::execute(sprintf(" update %switkey_service set leave_num =ifnull(leave_num,0)+1 where service_id='%d'",TABLEPRE,$obj_id));
				$obj_info = db_factory::get_one(sprintf("select * from %switkey_service where service_id=%d",TABLEPRE,$obj_id));
				//发表成功得要更新微博数据
				kekezu::update_weibo_data($obj_id,'service',$model_list[$obj_info['model_id']]['model_code'],$obj_info['title'],$obj_info['uid'],$obj_info['username'],$obj_info['leave_num'],$obj_info['focus_num'],$obj_info['work_num'],'leave',$obj_info['price'],$uid,$username);
			}
		}
		return $comment_id;
			
	} 
	/**
	 *
	 * 写入广场留言留言和回复广场留言留言
	 * @param array $comment_arr   ---留言信息的键值对数组
	 * @param int $is_reply		---- 为true代表添加新留言，false代表留言回复
	 *
	 */
	function save_free_comment($comment_arr,$obj_id,$is_reply=false){
		global $_lang,$kekezu;
		//类别，时间（分钟），次数
		$r = kekezu::check_session('square_leave',2,4);
		if($r==false){
			return 5;
			die();
		}
		strtolower ( CHARSET ) == 'gbk' and $comment_arr ['content'] = kekezu::utftogbk ( kekezu::escape($comment_arr ['content']) );
		if(kekezu::k_match(array($kekezu->_sys_config['ban_content']),$comment_arr['content'])){
			return 3;
			die();
		}
		$comment_id = $this->_free_comment_obj->save($comment_arr);
		if(!$is_reply){
	
			if($this->_comment_type=='task'){
				$res = db_factory::execute(sprintf(" update %switkey_free_task set leave_num =ifnull(leave_num,0)+1 where task_id='%d'",TABLEPRE,$obj_id));
			}elseif($this->_comment_type=='service'){
				$res = db_factory::execute(sprintf(" update %switkey_free_service set leave_num =ifnull(leave_num,0)+1 where service_id='%d'",TABLEPRE,$obj_id));
			}
	
		}
		return $comment_id;
			
	}
	/**
	 * 
	 * 留言删除
	 * @param unknown_type $comment_id
	 */
	function del_comment($comment_id,$obj_id,$is_reply=false){
		$res =  db_factory::execute(sprintf("delete from %switkey_comment where comment_id='%d' or p_id='%d'",TABLEPRE,$comment_id,$comment_id));
		if(!$is_reply){
			if($this->_comment_type=='task'){
			$res and 	$res = db_factory::execute(sprintf(" update %switkey_task set leave_num =ifnull(leave_num,0)-1 where task_id='%d'",TABLEPRE,$obj_id));
			}elseif($this->_comment_type=='service'){
			$res and $res = db_factory::execute(sprintf(" update %switkey_service set leave_num =ifnull(leave_num,0)-1 where service_id='%d'",TABLEPRE,$obj_id));
			}
			
		}
		return $res;
	}
	
/**
	 * 
	 *广场 留言删除
	 * @param unknown_type $comment_id
	 */
	function del_free_comment($comment_id,$obj_id,$is_reply=false){
		//var_dump($comment_id,$obj_id);die();
		$res =  db_factory::execute(sprintf("update %switkey_free_message set status=0 where comment_id='%d'",TABLEPRE,$comment_id));
// 		if(!$is_reply){
// 			if($this->_comment_type=='free_task'){
// 			$res and 	$res = db_factory::execute(sprintf(" update %switkey_free_task set leave_num =ifnull(leave_num,0)-1 where task_id='%d'",TABLEPRE,$obj_id));
// 			}elseif($this->_comment_type=='free_service'){
// 			$res and $res = db_factory::execute(sprintf(" update %switkey_free_service set leave_num =ifnull(leave_num,0)-1 where service_id='%d'",TABLEPRE,$obj_id));
// 			}
		$res and kekezu::echojson('',1,'') or kekezu::echojson('',0,'');	
// 		}
// 		return $res;
	}
	

}