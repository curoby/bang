<?php defined ( 'IN_KEKE' ) or exit ( 'Access Denied' );
$_K['is_rewrite']=0;
$url_info = keke_search_class::get_analytic_url($path);
$page_title = $kekezu->_indus_p_arr[$url_info[A]][indus_name].$model_list[$url_info[C]][model_name].'服务商' . '-' . $_K ['html_title'];
$page_keyword = $kekezu->_indus_p_arr[$url_info[A]][indus_name].$model_list[$url_info[C]][model_name].'服务商' . '-' .$kekezu->_sys_config['seo_keyword'];
$page_description = $kekezu->_indus_p_arr[$url_info[A]][indus_name].$model_list[$url_info[C]][model_name].'服务商' . '-' .$kekezu->_sys_config['seo_desc'];
$nav_active_index = 'seller_list';
keke_lang_class::package_init ( "shop_list" );
keke_lang_class::loadlang ( $do );
$dynamic_arr = kekezu::get_feed(" feedtype='pub_service' ", "feed_time desc", 10); 
$website_url = "index.php?" . $_SERVER ['QUERY_STRING'];
$indus_all_arr = $kekezu->_indus_arr;
$where_arr = get_where_arr();
$sql = "select a.*,b.seller_level,b.skill_ids,b.residency,b.indus_id,b.indus_pid,b.seller_total_num,b.seller_good_num,
		if(b.seller_total_num>0,b.seller_good_num/b.seller_total_num,0) as good_rate
		from " . TABLEPRE . "witkey_shop as a left join ".TABLEPRE."witkey_space b 
		on a.uid = b.uid  where 1=1 "; 
$count_sql = "select  count(shop_id) as c 
		from " . TABLEPRE . "witkey_shop as a left join ".TABLEPRE."witkey_space b 
		on a.uid = b.uid  where 1=1 "; 
$where = get_where ( $path );
unset($indus_id); 
$url = "index.php?do=$do&page_size=$page_size&path=$path";
$page_size = intval ( $page_size ) ? intval ( $page_size ) : 20;
$count = db_factory::get_count($count_sql . $where );
$page = $page ? $page : 1;
$pages = $kekezu->_page_obj->getPages ( $count, $page_size, $page, $url );
$where .= $pages ['where'];  
$auth_html_sql = sprintf('select a.`auth_code`,a.`auth_title`,a.`auth_small_ico`,'
		.' a.`auth_small_n_ico`,a.`auth_open`,a.`listorder`,b.`auth_status`,b.`uid` from %switkey_auth_item a '
		.' left join %switkey_auth_record b on a.`auth_code`=b.`auth_code`  order by a.`listorder` ',TABLEPRE,TABLEPRE);
$rs_rz = db_factory::query($auth_html_sql);
$seller_aid = keke_user_mark_class::get_user_aid ( 1, '2', null, '1' );
$star_show_sql = sprintf('select `uid`,`aid`,`aid_star` from %switkey_mark where mark_type=2 and mark_status > 0',TABLEPRE);
$rs_star = db_factory::query($star_show_sql);
$aid_config = keke_user_mark_class::get_mark_aid ( 2 ); 
$service_arr = db_factory::query ( $sql . $where );
$check_arr = keke_search_class::get_path_url( $where_arr, $path );
$check_url_arr = $check_arr ['url'];
$check_all = $check_arr ['all'];
$select_arr = $check_arr['selected'];
$cookie_arr = unserialize ( $_COOKIE ['shop_save_cookie'] );
$cookie_arr = str_replace("&hid_save_cookie=1", "", $cookie_arr);
($hid_save_cookie||$path=='H2') and  keke_search_class::save_cookie($cookie_arr, $website_url, $select_arr,$hid_save_cookie,$search_key,'shop_save_cookie');
if ($hid_del_cookie) {
	$res = setcookie ( 'shop_save_cookie', '' );
	$res and kekezu::echojson ( '', 1 );
	die();
} 
function star_show($uid){
	global $rs_star,$aid_config;
	foreach($rs_star as $key=> $value){
		if($uid==$value['uid']){
			$aid_arr[] = $value;
		}
	}
	$aid_info = array ();
	$si = sizeof ( $aid_arr );
	foreach ( $aid_config as $k => $v ) {
		if($aid_arr){
			for($i = 0; $i < $si; $i ++) {
				$aid_arr [$i] ['aid'] and $aid = explode ( ",", $aid_arr [$i] ['aid'] ) or $aid = array (); 
				$aid_arr [$i] ['aid_star'] and $star = explode ( ",", $aid_arr [$i] ['aid_star'] ) or $star = array (); 
				$aid&&$star and $aid_s = array_combine ( $aid, $star ); 
				$aid_info [$k] ['aid_name'] = $v ['aid_name']; 
				$aid_info [$k] ['star'] += floatval($aid_s [$k] ); 
				$aid_info [$k] ['count'] += 1; 
			}
		}else{
			$aid_info [$k] ['aid_name'] = $v ['aid_name']; 
			$aid_info [$k] ['star']     = 0; 
			$aid_info [$k] ['count']    = 0; 
		}
	}
	return keke_user_mark_class::consider_star ( $aid_info );
}
function rz_show($uid){
	global $rs_rz,$_lang;
	$img_list='';
	$first = $_lang['certification_status'].'：';
	foreach ( $rs_rz as $c ) {
		if(empty($c['uid'])||empty($c['auth_status'])||$c['uid']!=$uid||$c ['auth_open']==false)
		{
		}else{
			$str = '';
			$str .= '<img src="';
			$str .= $c['auth_status'] ? $c ['auth_small_ico'] : $c ['auth_small_n_ico'];
			$str .= '" align="absmiddle" title="' . $c ['auth_title'];
			$str .= $c['auth_status'] ? $_lang['has_pass'] : $_lang['not_pass'];
			$str .= '">&nbsp;';
			$img_list .= $str;
		}
	}
	if($img_list)
	 $img_list =$first.$img_list;
	return $img_list;
}
function get_where($path) {
	global $task_cash_arr, $search_key,$ord,$indus_id;
	$url_info = keke_search_class::get_analytic_url($path);
	$indus_id and $where .=sprintf(" and b.indus_id = %d",$indus_id);
	$url_info ['A'] and $where .= sprintf ( " and b.indus_pid = %d", $url_info ['A'] ); 
	$url_info ['C'] and $where .= sprintf ( " and a.shop_type = %d", $url_info ['C'] ); 
	$ord == 1 and $where .=" order by if(b.seller_total_num>0,b.seller_good_num/b.seller_total_num,0) asc";		
	$ord ==2 and $where .=" order by if(b.seller_total_num>0,b.seller_good_num/b.seller_total_num,0) desc";	
	$ord or $where .= " order by a.shop_id desc"; 
	return $where;
} 
function get_where_arr(){
	global $search_key,$_lang;
	$where_arr = array (
		"A" => kekezu::get_industry(0), 
		"C" => array (
			"1" => array ("name" => $_lang['person_store'] ),  
			"2" => array ("name" => $_lang['enterprise_store'] ) ), 
		);
	return $where_arr;
}
require $kekezu->_tpl_obj->template ( $do );