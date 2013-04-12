<?php
defined ( "ADMIN_KEKE" ) or exit ( "Access denied!" );
$path = S_ROOT.'/keke_client/keke/config.php';
include $path;
kekezu::admin_check_role ( 133 );
$op or $op='config';
if ( $op=='config' ) {
	$data = file_get_contents($path);
	if ($submit){
		$res = preg_replace(array(
		"/application\'] = (\d)*(\s)*/",
		"/auto_commit\'] = (\d)*(\s)*/",
		"/log\'] = '(\w)*(\s)*'/",
		"/keke_app_id\'] = '(\w)*(\s)*'/",
		"/keke_app_secret\'] = '(\w)*(\s)*'/",
		), array(
		"application'] = ".intval($application),
		"auto_commit'] = ".intval($auto_commit),
		"log'] = '$log'",
		"keke_app_id'] = '$keke_id'",
		"keke_app_secret'] = '$keke_secret'",
		), $data);
		if(file_put_contents($path, $res)){
			$plug_info = $kekezu->_plug_arr[keke];
			db_factory::execute(sprintf("update %switkey_plug set status=%d where plug_code='keke'",TABLEPRE,intval ( $application )));
			db_factory::execute(sprintf("update %switkey_resource_submenu set status=%d where submenu_id=%d",TABLEPRE,intval ( $application ),$plug_info['submenu_id']));
			kekezu::admin_show_msg('ÅäÖÃ³É¹¦', '', 3);
		}
	}
}
require $template_obj->template ( "control/admin/tpl/admin_keke_account_config" );