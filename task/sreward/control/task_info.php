<?php
defined ( 'IN_KEKE' ) or exit ( 'Access Denied' );
$nav_active_index = 'task';
$basic_url = "index.php?do=task&task_id=$task_id"; 
$task_obj = sreward_task_class::get_instance ( $task_info );
$task_info= $task_obj->_task_info;
$cover_id = $task_obj->_task_info['task_cash_coverage'];
$cover_cash = kekezu::get_cash_cove('',true);
$sub_task_user_level =$g_info = $task_obj->_g_userinfo;
$task_config =$task_obj->_task_config;
$model_id = $task_obj->_model_id;
$task_status = $task_obj->_task_status;
$indus_arr = $kekezu->_indus_c_arr; 
$indus_p_arr = $kekezu->_indus_p_arr; 
$status_arr = $task_obj->_task_status_arr; 
$time_desc = $task_obj->get_task_timedesc (); 
$stage_desc = $task_obj->get_task_stage_desc (); 
$related_task = $task_obj->get_task_related ();
$delay_rule = $task_obj->_delay_rule;
$delay_total = sizeof($delay_rule);
$delay_count=intval($task_info['is_delay']);
$process_can = $task_obj->process_can (); 
$process_desc = $task_obj->process_desc (); 
$task_obj->plus_view_num();
$time_obj =new  sreward_time_class();
$trust_mode=$task_obj->_trust_mode;
$time_obj->validtaskstatus();
$show_payitem = $task_obj->show_payitem();
$browing_history = $task_obj->browing_history($task_id,$task_info['task_cash']."Ԫ",$task_info['task_title']);
if($task_config['reg_vote_limit'] > 0){
	$reg_vote_time = $task_config['reg_vote_limit']*60*60;
	$reg_time = $user_info['reg_time'];
	$curr_time = time();
	$can_vote = ($curr_time - $reg_time)-$reg_vote_time;
}
if($task_config['task_rate'] > 0){
	$cash = $task_info['task_cash'] * ( 1 - $task_config['task_rate']/100 ) ;
}else{
	$cash = $task_info['task_cash'];
}
switch ($op) {
	case "reqedit" : 
		if($task_info['ext_desc']){
		$title = $_lang['edit_supply_demand'];
		}else{
		$title =$_lang['supply_demand'];
		}		
		if ($sbt_edit) {
			$task_obj->set_task_reqedit ( $tar_content );
		} else{
			$ext_desc = $task_info ['ext_desc'];
			require keke_tpl_class::template ( 'task/task_reqedit' );
		}
		die ();
		break;
	case "taskdelay" : 
		$title = $_lang['task_delay'];
		if($sbt_edit){
			$delay_cash = keke_curren_class::convert($delay_cash,0,true);
			$task_obj->set_task_delay($delay_day, $delay_cash);
		}else{
			$min_cash = intval($task_config['min_delay_cash']);
			$max_day  = intval($task_config['max_delay']);
			$this_min_cash = intval($delay_rule[$delay_count]['defer_rate']*$task_info['task_cash']/100);
			$min_cash>$this_min_cash and $real_min = $min_cash or $real_min = $this_min_cash;
			$credit_allow =  intval($kekezu->_sys_config ['credit_is_allow']);
			require keke_tpl_class::template("task/task_delay");
		}
		die();
		break;
	case "work_hand" : 
		$title = $_lang['hand_work'];
		if($sbt_edit){
			$task_obj->work_hand ( $tar_content, $file_ids,$workhide);
		}else{
			$workhide_exists = keke_payitem_class::payitem_exists($uid,'workhide','work');
			$have_workhide = $task_obj->check_work_hide();
			require keke_tpl_class::template ( 'task/reward_work' );
		}
		die();
		break;
	case "work_choose" : 
		$work_status = $task_obj->get_work_status();
		$title = 'ѡ��'.$work_status[$to_status];
		if($sbt_edit){
			$task_obj->work_choose ( $work_id, $to_status);
		}else{
			$work_info = $task_obj->get_task_work($work_id,'');
			require keke_tpl_class::template ( 'task/work_choose' );
		}
		die();
		break;
	case "work_vote" : 
		$task_obj->set_task_vote($work_id,'','json');
		break;
	case "report" : 
		$transname = keke_report_class::get_transrights_name($type);
		if($obj == 'task'){
			$report_reason = keke_report_class::get_report_task_reason();
		}elseif ($obj == 'work'){
			$report_reason = keke_report_class::get_report_work_reason();
		}
		if($sbt_edit){
			$task_obj->set_report ( $obj, $obj_id, $to_uid,$to_username, $type, $file_url, $tar_content,$slt_reason);
		}else{
			require keke_tpl_class::template("report");
		}
			die();
		break;
	case "mark" : 
		$title = $_lang['each_mark'];
		$model_code = $task_obj->_model_code;
		require S_ROOT.'control/mark.php';
		die();
		break;
	case "work_del":
		$task_obj->del_work($work_id,'','json');
		break;
	case "comment" : 
		switch ($obj_type) {
			case "task" :
				break;
			case "work" :
				$tar_content and $task_obj->set_work_comment ( $obj_type, $obj_id, $tar_content, $p_id, '', 'json' );
				break;
		}
		break;
}
switch ($view) {
	case "work" :
		$search_condit = $task_obj->get_search_condit();
		$date_prv = date("Y-m-d",time());
		$work_status = $task_obj->get_work_status ();
		intval ( $page ) and $p ['page'] = intval ( $page ) or $p ['page']='1';
		intval ( $page_size ) and $p ['page_size'] = intval ( $page_size ) or $p['page_size']='10';
		$p['url'] = $basic_url."&view=work&page_size=".$p ['page_size']."&page=".$p ['page'];
		if($st){
			$p['url'] .="&st=".$st;
		}
		if($ut){
			$p['url'] .="&ut=".$ut;
		}
		$p ['anchor'] = '';
		$w['work_id'] = $work_id;
		$w['work_status'] = $st;
		$w['user_type']   = $ut;
		$work_arr = $task_obj->get_work_info ($w, " work_id asc ", $p ); 
		$pages = $work_arr ['pages'];
		$work_info = $work_arr ['work_info'];
		$mark      = $work_arr['mark'];
		$agree_id  = intval($task_obj->_agree_id);
		$has_new  = $task_obj->has_new_comment($p ['page'],$p ['page_size']);
		break;
	case "comment" :
		$comment_obj = keke_comment_class::get_instance('task'); 
		$url = $basic_url."&view=comment";
		intval($page) or $page = 1;
		$comment_arr = $comment_obj->get_comment_list($task_id, $url, $page); 
		$comment_data = $comment_arr['data'];
		$comment_page = $comment_arr['pages'];
		$reply_arr = $comment_obj->get_reply_info($task_id);
	    switch ($op){
	    	case "reply": 
	    		$comment_arr = array("obj_id"=>$task_id,"origin_id"=>$task_id,"obj_type"=>"task","p_id"=>$pid,
	    		 "uid"=>$uid, "username"=>$username,"content"=>$content,"on_time"=>time()); 
	    		$res = $comment_obj->save_comment($comment_arr,$task_id,1);
	    		if($res!=3&&$res!=2){
	    			$v1 =  $comment_obj->get_comment_info($res);
	    			$tmp ='replay_comment';
	    			require keke_tpl_class::template ( "task/task_comment_reply" );
	    		}else{
	    			echo $res;
	    		}
	    		die();
	    		break;
	    	case "add": 
	    		$comment_arr = array("obj_id"=>$task_id,"origin_id"=>$task_id,"obj_type"=>"task",
	    		"uid"=>$uid, "username"=>$username,"content"=>$content,"on_time"=>time());
	    		$res = $comment_obj->save_comment($comment_arr,$task_id); 
	    		if($res!=3&&$res!=2){
	    			$v = $comment_obj->get_comment_info($res);
	    			$tmp ='pub_comment';
	    			require keke_tpl_class::template ( "task/task_comment_reply" );
	    		}else{
	    			echo $res;
	    		}
	    		die();
	    		break;
	    	case "del": 
	    		$comment_info = $comment_obj->get_comment_info($comment_id);
	    		if( $uid ==ADMIN_UID||$user_info['group_id']==7){
	    			$res = $comment_obj->del_comment($comment_id,$task_id,$comment_info['p_id']);
	    		}else{
	    			kekezu::keke_show_msg("", $_lang['not_priv'],"error","json");
	    		}
	    		$res and kekezu::keke_show_msg("", $_lang['delete_success'],"","json") or kekezu::keke_show_msg("",$_lang['system_is_busy'],"error","json");
	    		break;	
	    } 
		break;
	case "mark":
		$mark_count = $task_obj->get_mark_count();
		intval ( $page ) and $p ['page'] = intval ( $page ) or $p ['page']='1';
		intval ( $page_size ) and $p ['page_size'] = intval ( $page_size ) or $p['page_size']='10';
		$p['url'] = $basic_url."&view=mark&page_size=".$p ['page_size']."&page=".$p ['page'];
		$p ['anchor'] = '';
		$w['model_code'] = $model_code;
		$w['origin_id']   = $task_id;
		$w['mark_status'] = $st;
		$w['mark_type'] = $ut;
		$mark_arr = keke_user_mark_class::get_mark_info($w,$p,' mark_id desc ',"mark_status>0");
		$mark_info = $mark_arr['mark_info'];
		$pages     = $mark_arr['pages'];
		break;
	default :
		$task_file = $task_obj->get_task_file (); 
		$kekezu->init_prom();
		$can_prom = $kekezu->_prom_obj->is_meet_requirement ( "bid_task", $task_id );
		if($task_info['task_status']==8){
			$list_work = db_factory::query(' select a.uid,a.username,b.seller_level from '.TABLEPRE.'witkey_task_work a left join '.TABLEPRE.'witkey_space b on a.uid = b.uid  where a.task_id='.intval($task_id).' and a.work_status = 4');
		}
		if($task_info['task_status']==2&&$task_info['uid']==$uid){
			$item_list= keke_payitem_class::get_payitem_config ( 'employer', null, null, 'item_id' );
		}
}
function bidcash(){
	return ;
}
if($task_info['r_task_id']){
require keke_tpl_class::template ( "task_info");
}else{
require keke_tpl_class::template ( "task/" . $model_info ['model_code'] . "/tpl/" . $_K ['template'] . "/task_info" );
}
