<?php	defined ( 'ADMIN_KEKE' ) or exit ( 'Access Denied' );
kekezu::admin_check_role(169);
$url = "index.php?do=$do&view=$view";
$config = $kekezu->_sys_config;
if($submit){
	$config_basic_obj = new Keke_witkey_basic_config_class ();
	$config_basic_obj->setWhere ( "k = 'shop_is_open'" );
	$config_basic_obj->setV ($shop_is_open);
	$config_basic_obj->edit_keke_witkey_basic_config ();
	kekezu::admin_show_msg ( '�ύ�ɹ�', $url, 3, '�ύ�ɹ�', 'success' );
}
require $template_obj->template ( 'control/admin/tpl/admin_' . $do . '_' . $view );