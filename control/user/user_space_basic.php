<?php	defined ( 'IN_KEKE' ) or exit ( 'Access Denied' );
$record_obj = new Keke_witkey_auth_record_class();
if (isset($formhash)&&kekezu::submitcheck($formhash)){
	$shop_obj = keke_table_class::get_instance ( "witkey_shop" );
	$conf ['uid'] = $uid;
	$conf ['username'] = kekezu::escape($username);
	$conf ['shop_name'] = kekezu::escape($shop_name);
	$conf ['shop_type'] = kekezu::escape($shop_type);
	$conf['on_time'] = time();
	intval($shop_info['shop_id']) or $conf['shop_background'] = $file_temp;
	$shop_slogans and $conf ['shop_slogans'] = kekezu::escape($shop_slogans);
 	$sql = sprintf("select shop_id from %switkey_shop where uid=%d ",TABLEPRE,$uid); 
	$shop_info = db_factory::query($sql);
	$pk['shop_id'] = $shop_info['0']['shop_id']; 
	$res = $shop_obj->save ($conf, $pk );
	if($shop_info){
		$msg = '�޸ĳɹ���';
	}else{
		$msg = '�ύ�ɹ����ȴ���̨��ˣ�';
	}
	kekezu::show_msg ( $_lang['system prompt'], "index.php?do=user&view=setting&op=space", '2', $msg, 'alert_right' ) ;
}
require keke_tpl_class::template ( "user/" . $do . "_" . $op . "_" . $opp );