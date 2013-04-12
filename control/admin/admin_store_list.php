<?php	defined ( 'ADMIN_KEKE' ) or exit ( 'Access Denied' );
kekezu::admin_check_role (170);
$table_obj = keke_table_class::get_instance ( 'witkey_shop' );
$shop_obj = new Keke_witkey_shop_class (); 
intval ( $page ) or $page = 1;
intval ( $wh ['page_size'] ) or $wh ['page_size'] = 10;
$url = "index.php?do=$do&view=$view&txt_username=$txt_username&txt_shop_id=$txt_shop_id&page=$page&w[ord][0]={$w['ord']['0']}&w[ord][1]={$w['ord']['1']}&wh[page_size]={$wh['page_size']}";
$status_arr = array("0"=>"´ýÉóºË","1"=>"¿ªÆô","2"=>"ÉóºË²»Í¨¹ý","3"=>"¹Ø±Õ");
switch ($ac) {
	case "del" : 
		$res = $table_obj->del('shop_id', $shop_id);
	    kekezu::admin_show_msg('²Ù×÷ÌáÊ¾',$url,3,'É¾³ý³É¹¦£¡','success');
		break;
	case "pass" : 
		$shop_info = db_factory::get_one(sprintf("select * from %switkey_shop where shop_id=%d",TABLEPRE,$shop_id));
		$shop_obj->setWhere("shop_id=".$shop_id);
		$shop_obj->setShop_status(1);
		$shop_obj->edit_keke_witkey_shop();
		$notice_url = "<a href=\"" . $_K ['siteurl'] . "/index.php?do=space&member_id=" . $shop_info['uid'] . "\">" . $shop_info['shop_name']. "</a>";
		$v_arr = array($_lang['username']=>"{$shop_info['username']}",'µêÆÌÃû³Æ'=>$notice_url);
		keke_shop_class::notify_user($shop_info['uid'], $shop_info['username'], 'shop_auth_success', 'µêÆÌÉóºËÍ¨¹ý',$v_arr);
		kekezu::admin_show_msg($_lang['operate_notice'],$url,2,$_lang['examine_successfully'],'success');
		break;
	case "nopass" : 
		$shop_info = db_factory::get_one(sprintf("select * from %switkey_shop where shop_id=%d",TABLEPRE,$shop_id));
		$shop_obj->setWhere("shop_id=".$shop_id);
		$shop_obj->setShop_status(2);
		$shop_obj->edit_keke_witkey_shop();
		$v_arr = array($_lang['username']=>"{$shop_info['username']}",'µêÆÌÃû³Æ'=>$shop_info['shop_name']);
		keke_shop_class::notify_user($shop_info['uid'], $shop_info['username'], 'shop_auth_fail', $_lang['task_auth_fail'],$v_arr); 
		kekezu::admin_show_msg($_lang['operate_notice'],$url,2,$_lang['operate_success'],'success');
		break;
	case "close" : 
		$shop_info = db_factory::get_one(sprintf("select * from %switkey_shop where shop_id=%d",TABLEPRE,$shop_id));
		$shop_obj->setWhere("shop_id=".$shop_id);
		$shop_obj->setShop_status(3);
		$shop_obj->edit_keke_witkey_shop();
		$v_arr = array($_lang['username']=>"{$shop_info['username']}",'µêÆÌÃû³Æ'=>$shop_info['shop_name']);
		keke_shop_class::notify_user($shop_info['uid'], $shop_info['username'], 'shop_close', 'µêÆÌ¹Ø±Õ',$v_arr);
		kekezu::admin_show_msg($_lang['operate_notice'],$url,2,$_lang['operate_success'],'success');
		break;
	case "open" : 
		$shop_info = db_factory::get_one(sprintf("select * from %switkey_shop where shop_id=%d",TABLEPRE,$shop_id));
		$shop_obj->setWhere("shop_id=".$shop_id);
		$shop_obj->setShop_status(1);
		$shop_obj->edit_keke_witkey_shop();
		$notice_url = "<a href=\"" . $_K ['siteurl'] . "/index.php?do=space&member_id=" . $shop_info['uid'] . "\">" . $shop_info['shop_name']. "</a>";
		$v_arr = array($_lang['username']=>"{$shop_info['username']}",'µêÆÌÃû³Æ'=>$notice_url);
		keke_shop_class::notify_user($shop_info['uid'], $shop_info['username'], 'shop_open', 'µêÆÌ¿ªÆô',$v_arr);
		kekezu::admin_show_msg($_lang['operate_notice'],$url,2,$_lang['operate_success'],'success');
		break;
}
if ($sbt_action && is_array ( $ckb )) {
	$ids = implode ( ',', $ckb );
	$sql = sprintf ( "select shop_id,uid,username from %switkey_shop where shop_id in (%s)", TABLEPRE, $ids );
	$shop_arr = db_factory::query ( $sql );
	switch ($sbt_action) {
		case $_lang['mulit_delete'] : 
			$table_obj->del ( 'shop_id', $ckb );
			kekezu::admin_show_msg ( $_lang['operate_success'], 'index.php?do=store&view=list', 3, $_lang['mulit_operate_success'], 'success' );
			break;
		case $_lang['mulit_pass'] : 
			$sql = sprintf ( "update  %switkey_shop set shop_status=1 where shop_id in (%s)", TABLEPRE, $ids );
			db_factory::execute ( $sql ); 
			foreach ( $shop_arr as $v ) { 
				 $notice_url = "<a href=\"" . $_K ['siteurl'] . "/index.php?do=space&member_id=" . $v['uid'] . "\">" . $v['shop_name']. "</a>";
		         $v_arr = array($_lang['username']=>"{$v['username']}",'µêÆÌÃû³Æ'=>$notice_url);
		         keke_shop_class::notify_user($shop_info['uid'], $shop_info['username'], 'shop_auth_success', 'µêÆÌÉóºËÍ¨¹ý',$v_arr);
			}
			kekezu::admin_show_msg ( $_lang['operate_success'], 'index.php?do=store&view=list', 3, $_lang['mulit_open_operate_success'], 'success' );
			break;
	}
}
	$where = " 1 = 1";
	empty ( $txt_shop_id ) or $where .= " and shop_id =" . intval ( $txt_shop_id );
	empty ( $txt_name ) or $where .= " and username like '%$txt_name%'";
	$w[ord][1]&&$w[ord][0] and $where .= " order by {$w['ord']['0']} {$w['ord']['1']}" or $where .= " order by shop_id desc ";
	$d = $table_obj->get_grid($where, $url,$page,$wh['page_size'],null,1,'ajax_dom');
	$shop_data = $d ['data'];
	$pages = $d ['pages'];
require $template_obj->template ( 'control/admin/tpl/admin_' . $do . '_' . $view );