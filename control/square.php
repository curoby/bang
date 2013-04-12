<?php defined ( 'IN_KEKE' ) or exit ( 'Access Denied' );
$views = array (
		'index',
		'goods',
		'goods_detail',
		'demand',
		'favor',
		'manuscript',
		'message',
		'task_detail',
		'focus' 
);
in_array ( $view, $views ) and $view or $view = 'index';
keke_lang_class::package_init($do);
keke_lang_class::loadlang($do."_".$view);
$nav_active_index = "square";
if (! $plug_arr [square] [status]) {
	kekezu::show_msg ( $_lang ['operate_notice'], "index.php?do=index.php", '3', '此插件未开启', 'alert_error' );
}
if (isset ( $op ) && $op == 'denounce') {
	$denounce_obj = new Keke_witkey_free_denounce_class ();
	if ($sbt_edit) {
		if (CHARSET == 'gbk') {
			$from_type = kekezu::utftogbk ( $from_type );
			$to_username = kekezu::utftogbk ( $to_username );
			$reason = kekezu::utftogbk ( $reason );
			$obj_content = kekezu::utftogbk ( $obj_content );
		}
		if (check_if_denounce ( $obj_id, $uid, $from_type )) {
			kekezu::echojson ( '请勿重复举报', '0', '' );
		} else {
			$denounce_obj->setObj_id ( $obj_id );
			$denounce_obj->setFrom_type ( kekezu::escape ( $from_type ) );
			$denounce_obj->setUid ( $uid );
			$denounce_obj->setUsername ( $username );
			$denounce_obj->setTo_uid ( $to_uid );
			$denounce_obj->setTo_username ( $to_username );
			$denounce_obj->setReason ( kekezu::escape ( $reason ) );
			$denounce_obj->setContent ( kekezu::escape ( $obj_content ) );
			$denounce_obj->setOn_time ( time () );
			$res = $denounce_obj->create_keke_witkey_free_denounce ();
			$res and kekezu::echojson ( '提交成功，感谢您的举报！', 1, '' ) or kekezu::echojson ( '提交举报失败！', 0, '' );
		}
	} else {
		if (CHARSET == 'gbk') {
			$to_username = kekezu::utftogbk ( $to_username );
			$obj_content = kekezu::utftogbk ( $obj_content );
		}
		$title = '举报';
		require keke_tpl_class::template ( "denounce" );
	}
	die ();
}
function check_if_denounce($obj_id, $uid, $from_type) {
	$res = db_factory::get_one ( sprintf ( "select denounce_id from %switkey_free_denounce where obj_id = '%d' and uid = '%d' and from_type = '%s'", TABLEPRE, $obj_id, $uid, $from_type ) );
	if ($res) {
		return TRUE;
	} else {
		return FALSE;
	}
}
$model_info = kekezu::get_table_data ( '*', 'witkey_model', 'model_status=1', '', '', '', 'model_code' );
$cash_cove = $kekezu->get_cash_cove ( '', true );
$bulletin_arr = db_factory::query ( sprintf ( "select art_id,art_title,listorder,is_recommend,pub_time from %switkey_article where cat_type='bulletin' order by is_recommend desc, listorder asc, pub_time desc limit 0,4", TABLEPRE ) );
$task_count = db_factory::get_count ( sprintf ( "select count(task_id) from %switkey_task where uid=%d ", TABLEPRE, $uid ) );
$task_free_count = db_factory::get_count ( sprintf ( "select count(task_id) from %switkey_free_task where uid=%d", TABLEPRE, $uid ) );
$t_count = $task_count + $task_free_count;
$service_count = db_factory::get_count ( sprintf ( "select count(service_id) from %switkey_service where uid=%d", TABLEPRE, $uid ) );
$servoce_free_count = db_factory::get_count ( sprintf ( "select count(service_id) from %switkey_free_service where uid = %d", TABLEPRE, $uid ) );
$s_count = $service_count + $servoce_free_count;
require S_ROOT . '/control/' . $do . '/' . $do . '_' . $view . '.php';
 