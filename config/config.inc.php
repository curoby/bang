<?php
define('ADMIN_UID','1');
define ( 'DBHOST', 'localhost');
define ( 'DBNAME', 'bang');
define ( 'DBUSER', 'root');
define ( 'DBPASS', 'dmt');
define('DBCHARSET','gbk');
define('CHARSET', 'gbk');
define('DBTYPE','mysql');
define ( 'TABLEPRE', 'bang_'); 
define('ENCODE_KEY','keke'); 
define('GZIP',TRUE ); 
define("IS_REWRITE", 0 ); 
define('IMGDIR','resource/img/'); 
define('KEKE_DEBUG', 0);    
define("TPL_CACHE",1);   
define('IS_CACHE',1);
define('CACHE_TYPE', 'file');  
define('COOKIE_DOMAIN',''); 
define ( 'COOKIE_PATH', '/bang/'); 
define('COOKIE_PRE', 'kekeWitkey' );  
define('COOKIE_TTL', 0 ); 
define('SESSION_MODULE','files');
define('SYS_START_TIME', time());
$_K['cache_config'] = array(0=>array("host"=>"192.168.1.77","port"=>"11211"));
function_exists ( 'date_default_timezone_set' ) and date_default_timezone_set ( 'PRC' );
$___y = date ( 'Y' );
$___m = date ( 'm' );
$___d = date ( 'd' );
define ( 'UPLOAD_RULE', "$___y/$___m/$___d/" );
