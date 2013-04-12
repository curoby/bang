<?php	defined ( 'IN_KEKE' ) or exit('Access Denied');
$ops = array ('pub', 'task', 'shop','credit');
if($task_open==0){
	unset($ops[1]);
}
if($shop_open==0){
	unset($ops[2]);
}
$ops = array_merge($ops);
in_array($op,$ops) or $op =$ops[1];
$sub_nav = array(
	array ("pub" => array ($_lang['pub_task'], "doc-new" )),
	array ("task" => array ($_lang['my_task'], "doc-lines-stright" ), 
	 		"shop" => array ($_lang['goods_trans'], "box" )),
	array ("credit" => array ($_lang['credit_grade'], "cert" ))
		);
if($task_open==0){
	unset($sub_nav[0],$sub_nav[1]['task']);
}
if($shop_open==0){
	unset($sub_nav[1]['shop']);
}
$model_list=kekezu::get_table_data ( '*', 'witkey_model', " model_type = '$op' and model_status=1", 'model_id asc ', '', '', 'model_id', 3600 );
$model_fds = array_keys($model_list);
$model_id or $model_id = intval($model_fds['0']);
switch ($op){
	case "pub":
		 header("Location:index.php?do=release");
		break;
	case "task":
		require 'user_'.$view.'_'.$op.'.php';	
		break;
	case "credit":
		require 'user_credit.php';
		break;
	case "shop": 
		$role = 2;
		require 'user_finance_order.php';
		break;
}
