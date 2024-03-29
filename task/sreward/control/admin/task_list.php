<?php
defined ( 'ADMIN_KEKE' ) or exit ( 'Access Denied' );
$task_config = unserialize ( $model_info ['config'] );
$model_list = $kekezu->_model_list;
$task_status = sreward_task_class::get_task_status ();
$table_obj = keke_table_class::get_instance ( 'witkey_task' );
$wh = "model_id={$model_info['model_id']}";
$page and $page=intval ( $page ) or $page = 1;
$page_size and $page_size = intval($page_size) or $page_size=10;
$url_str = "index.php?do=model&model_id=1&view=list&w[task_id]={$w['task_id']}&w[task_title]={$w['task_title']}&w[task_status]={$w['task_status']}&ord[0]={$ord['0']}&ord[1]={$ord['1']}&page=$page&page_size=$page_size";
$w[task_id] and $wh .= " and task_id = " . intval($w['task_id']);
$w[task_title] and $wh .= " and task_title like '%".$w['task_title']."%'";
if($w[task_status]){
	$wh .= " and task_status = " .intval($w['task_status']);
}else{
	if($w[task_status]==='0'){
		$wh .= " and task_status = " .intval($w['task_status']);
	}
}
$ord[0]&&$ord[1] and $wh .= " order by {$ord['0']} {$ord['1']}" or $wh .= " order by task_id desc ";
$table_arr = $table_obj->get_grid ( $wh, $url_str, $page, $page_size, null, 1, 'ajax_dom');
$task_arr = $table_arr['data'];
$pages = $table_arr['pages'];
if($task_id){
	$task_audit_arr = get_task_info($task_id);
	$start_time = date("Y-m-d H:i:s",$task_audit_arr['start_time']);
	$end_time = date("Y-m-d H:i:s",$task_audit_arr['end_time']);
	$url = "<a href =\"$_K[siteurl]/index.php?do=task&task_id=$task_audit_arr[task_id]\" target=\"_blank\" >" . $task_audit_arr[task_title]. "</a>";
}
switch ($ac) {
	case "del" : 
		$res = keke_task_config::task_del($task_id);
		kekezu::admin_show_msg($_lang['operate_notice'],$url_str,2,$_lang['delete_success'],'success');
		break;
	case "pass" : 
		$res =keke_task_config::task_audit_pass ( $task_id );
		$v_arr = array($_lang['username']=>"{$task_audit_arr['username']}",$_lang['task_link']=>$url,$_lang['start_time']=>$start_time,$_lang['end_time']=>$end_time,$_lang['task_id']=>"#".$task_id);
		keke_shop_class::notify_user($task_audit_arr['uid'], $task_audit_arr['username'], 'task_auth_success', $_lang['task_auth_success'],$v_arr);
		kekezu::admin_show_msg($_lang['operate_notice'],$url_str,2,$_lang['examine_successfully'],'success');
		break;
	case "nopass" : 
		$res =keke_task_config::task_audit_nopass ( $task_id );
		$v_arr = array($_lang['username']=>"{$task_audit_arr['username']}",$_lang['task_title']=>$url,$_lang['web_name']=>"$kekezu->_sys_config['website_name']");
		keke_shop_class::notify_user($task_audit_arr['uid'], $task_audit_arr['username'], 'task_auth_fail', $_lang['task_auth_fail'],$v_arr); 
		kekezu::admin_show_msg($_lang['operate_notice'],$url_str,2,$_lang['operate_success'],'success');
		break;
	case "freeze" : 
		$res =keke_task_config::task_freeze ( $task_id );
		kekezu::admin_show_msg($_lang['operate_notice'],$url_str,2,$_lang['task_frooze_successfully'],'success');
		break;
	case "unfreeze" : 
		$res =keke_task_config::task_unfreeze ( $task_id );
		kekezu::admin_show_msg($_lang['operate_notice'],$url_str,2,$_lang['task_unfrooze_successfully'],'success');
		break;
	case "recommend":
		$res = keke_task_config::task_recommend($task_id);
		kekezu::admin_show_msg($_lang['operate_notice'],$url_str,2,$_lang['task_recommend_successfully'],'success');
		break;
	case "unrecommend":
		$res = keke_task_config::task_unrecommend($task_id);
		kekezu::admin_show_msg($_lang['operate_notice'],$url_str,2,$_lang['task_unrecommend_successfully'],'success');
		break;
	case "refund":
		$task_info = db_factory::get_one(" select * from ".TABLEPRE."witkey_task where task_id='$task_id'");
		$task_obj = new sreward_task_class($task_info);
		$task_obj->dispose_task_return();
		break;
}
if ($sbt_action==$_lang['mulit_delete']&&!empty($ckb)) {
	keke_task_config::task_del($ckb);
	kekezu::admin_show_msg($_lang['operate_notice'],$url_str,2,$_lang['mulit_delete_success'],'success');
}
if ($sbt_action==$_lang['mulit_pass']&&!empty($ckb)) {
	keke_task_config::task_audit_pass($ckb);
	kekezu::admin_show_msg($_lang['operate_notice'],$url_str,2,$_lang['mulit_pass_success'],'success');
}
if ($sbt_action==$_lang['mulit_freeze']&&!empty($ckb)) {
	keke_task_config::task_freeze($ckb);
	kekezu::admin_show_msg($_lang['operate_notice'],$url_str,2,$_lang['mulit_freeze_success'],'success');
}
if ($sbt_action==$_lang['mulit_unfreeze']&&!empty($ckb)) {
	keke_task_config::task_unfreeze($ckb);
	kekezu::admin_show_msg($_lang['operate_notice'],$url_str,2,$_lang['mulit_unfreeze_success'],'success') or kekezu::admin_show_msg($_lang['operate_notice'],$url_str,2,$_lang['mulit_unfreeze_fail'],"warning");
}
function get_task_info($task_id){
	$task_obj = new Keke_witkey_task_class();
	$task_obj->setWhere("task_id = $task_id");
	$task_info = $task_obj->query_keke_witkey_task();
	$task_info = $task_info['0'];
	return $task_info;
}
require $kekezu->_tpl_obj->template ( 'task/' . $model_info ['model_dir'] . '/control/admin/tpl/task_' . $view );