<?php	defined ( 'ADMIN_KEKE' ) or exit ( 'Access Denied' );
kekezu::admin_check_role ( 82 );
$suggest_obj = new keke_table_class ( 'witkey_proposal' );
$proposal_obj = new Keke_witkey_proposal_class();
$suggest_type_arr = array('1'=>'�ҵĽ���','2'=>'�ҵ�����');
$suggest_status_arr = array('1'=>'���ظ�','2'=>'�ѻظ�');
$url = "index.php?do=$do&view=$view&suggest_id=$suggest_id";
if($suggest_id){
	$suggest_info = db_factory::get_one(sprintf("select * from %switkey_proposal where p_id = '%d'",TABLEPRE,$suggest_id));
	$user_info = kekezu::get_user_info ( $suggest_info ['uid'] );
	if ($sbt_op){
		$proposal_obj->setWhere('p_id = '.$suggestid);
		$proposal_obj->setOp_content(kekezu::escape($op_result['process_result']));
		$proposal_obj->setOp_time(time());
		$proposal_obj->setPro_status(2);
		$proposal_obj->setOp_uid($_SESSION['uid']);
		$proposal_obj->setOp_username($_SESSION['username']);
		$res_id = $proposal_obj->edit_keke_witkey_proposal();
		$v_arr = array ('�û���' => $suggest_username,'������'=>$suggestid,'�ظ�����'=>kekezu::escape($op_result['process_result']), $_lang['website_name'] => $kekezu->_sys_config['website_name'] );
		keke_shop_class::notify_user ( $suggest_uid, $suggest_username, 'suggest_reply', '�����', $v_arr );
		$res_id and kekezu::admin_show_msg ($_lang['operate_notice'], $url, "2", '�ظ��ɹ�','success') or kekezu::admin_show_msg ( $_lang['operate_notice'], $url, "2",'�ظ�ʧ��', 'warning' );
	}
}
require $template_obj->template ( 'control/admin/tpl/admin_user_suggest_reply' );