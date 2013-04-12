<?php keke_tpl_class::checkrefresh('tpl/default/register', '1365694404' );?><?php if($_K['inajax']) { ?>
     <?php if(!isset($ajaxmenu)) { ?>
<h3 class="flb"><em><?php echo $title;?></em><span><a href="javascript:;" class="flbc" onClick="hideWindow('<?php echo $handlekey?>');" title="close"><?php echo $_lang['close'];?></a></span></h3>
<?php } ?>
<?php } else { ?>
<!DOCTYPE HTML>
<!--[if lt IE 7]> <html dir="ltr" lang="zh-cn" id="ie6"> <![endif]-->
<!--[if IE 7]>    <html dir="ltr" lang="zh-cn" id="ie7"> <![endif]-->
<!--[if IE 8]>    <html dir="ltr" lang="zh-cn" id="ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html dir="ltr" lang="zh-cn"> <!--<![endif]-->
<head>
<meta charset="<?php echo $_K['charset'];?>">
<title><?php echo $page_title;?></title>
<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE,chrome=1">
<meta name="keywords" content="<?php echo $page_keyword;?>">
<meta name="description" content="<?php echo $page_description;?>">
<meta name="generator" content="<?php echo $_lang['keke_pub'];?> <?php echo KEKE_VERSION;?>" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style” content=black" /> 
<meta name="author" content="kekezu" />
<meta name="copyright" content="<?php echo $basic_config['copyright'];?>" />
<link rel="shortcut icon" href="favicon.ico" />
<link rel="apple-touch-icon" href="favicon.ico"/>
<script type="text/javascript">
var SITEURL= "<?php echo $_K['siteurl'];?>",
    SKIN_PATH = '<?php echo SKIN_PATH;?>',
LANG       = '<?php echo $language;?>',
    INDEX      = '<?php echo $do;?>',
    CHARSET    = "<?php echo $_K['charset'];?>";
</script>
<link href="resource/css/reset.css" rel="stylesheet" charset="utf-8">
<!--公用样式-->
<link href="resource/css/base.css" rel="stylesheet" charset="utf-8">
<!--布局样式-->

<link rel="stylesheet" media="all" href="resource/css/layout/960.min.css" charset="utf-8">


<!--box样式-->
<link href="resource/css/box.css" rel="stylesheet" charset="utf-8">

<link href="resource/css/animate.css" rel="stylesheet" charset="utf-8">
<link href="<?php echo SKIN_PATH;?>/css/common.css" rel="stylesheet" charset="utf-8">
<link href="<?php echo SKIN_PATH;?>/theme/<?php echo $_K['theme'];?>/css/<?php echo $_K['theme'];?>_style.css" rel="stylesheet" charset="utf-8">
<link href="resource/js/jqplugins/tipsy/tipsy.css" rel="stylesheet">
<link href="resource/css/button/stylesheets/css3buttons.css" rel="stylesheet" charset="utf-8">
<!--[if lt IE 9]>
<script src="resource/js/system/html5.js" type="text/javascript"></script>
<![endif]-->


<!--jQuery1.4.4库-->
<script src="resource/js/jquery.js" type="text/javascript"></script>
<script src="lang/<?php echo $language;?>/script/lang.js" type="text/javascript"></script>
<script src="resource/js/system/keke.js" type="text/javascript"></script>
<script src="resource/js/in.js" type="text/javascript"></script>
<script type="text/javascript">
 //js异步加载预定义
 	In.add('mouseDelay',{path:"resource/js/jqplugins/jQuery.mouseDelay.js",type:'js'});
In.add('waypoints',{path:"resource/js/jqplugins/waypoints/waypoints.min.js",type:'js'});
In.add('custom',{path:"resource/js/system/custom.js",type:'js',rely:['waypoints']});
 	In.add('form',{path:"resource/js/system/form_and_validation.js",type:'js'});
In.add('print',{path:"resource/js/jqplugins/jquery.print.js",type:'js'});
In.add('task',{path:"resource/js/system/task.js",type:'js'});
 	In.add('calendar',{path:"resource/js/system/script_calendar.js",type:'js'}); 
In.add('xheditor',{path:"resource/js/xheditor/xheditor.js",type:'js'});  
 	In.add('script_city',{path:"resource/js/system/script_city.js",type:'js'}); 
In.add('lavalamp',{path:"resource/js/jqplugins/lavalamp/jquery.lavalamp-1.3.5.min.js",type:'js'});
In.add('tipsy',{path:"resource/js/jqplugins/tipsy/jquery.tipsy.js",type:'js'});
In.add('autoIMG',{path:"resource/js/jqplugins/autoimg/jQuery.autoIMG.min.js",type:'js'});
 	In.add('slides',{path:"resource/js/jqplugins/slides.min.jquery.js",type:'js'});
In.add('ajaxfileupload',{path:"resource/js/system/ajaxfileupload.js",type:'js'});
In.add('header_top',{path:"resource/js/system/header_top.js",type:'js',rely:['mouseDelay']}); 
In.add('lazy',{path:"resource/js/system/lazy.js",type:'js'});
In.add('pcas',{path:"resource/js/system/PCASClass.js",type:'js'});
  		

</script>



</head>
    <body id="<?php echo $do;?>">

<div class="<?php echo $_K['theme'];?>_style" id="wrapper">

        <div id="append_parent">
        </div>
        <div id="ajaxwaitid">
        	<div>
        	<img src="<?php echo SKIN_PATH;?>/theme/<?php echo $_K['theme'];?>/img/system/loading.gif" alt="loading"/>
<?php echo $_lang['request_processing'];?>
</div>
</div>
 
<!--无刷新临时替换层-->
        <div id="noflushwarper">
        	<div id="noflushwarper_sub"></div>
        </div>
 	
<!--body start-->


<!--顶部广告位 start-->
<div class="t_c site_messages">
<?php keke_loaddata_class::ad_show('GLOBAL_TOP_BANNER','register','') ?>
</div>
<!--顶部广告位-->




    <!--头部 start-->
    <header class="header" id="pageTop">
        <div class="container_24 clearfix">
        	<!--logo start-->
            <hgroup class="grid_7 logo">
             	 <h1><a href="index.php">
             	 	<?php if(isset($custom_logo)) { ?>
<img src="<?php echo $basic_config['web_logo'];?>"
<?php } else { ?>
<img src="<?php echo SKIN_PATH;?>/theme/<?php echo $_K['theme'];?>/img/style/<?php echo $basic_config['web_logo'];?>"
<?php } ?>
 title="<?php echo $_K['html_title'];?>" alt="<?php echo $_K['html_title'];?>"></a></h1>
            </hgroup>
            <!--logo end-->
            
            <div id="search" class="grid_12 m_h">
            	
            	<?php if($task_open||$shop_open) { ?>

            	<!--主搜索 start-->
                <div class="search clearfix po_re">
                    <!--搜索框和选项 start-->
                    <form action="" method="post" id="frm_search" class="clearfix fl_l">
                    <div class="search_box">
                        <div class="fl_l search_selcecter">
                        	<div id="search_select" class="search_options">
                        	<?php if($task_open) { ?>
                           		 <a href="javascript:void(0);" class="selected" rel="task_list"><span><?php echo $_lang['task'];?></span>▼</a>
                            <?php } elseif(!$task_open&&$shop_open) { ?>
 <a href="javascript:void(0);" class="selected" rel="shop_list"><span><?php echo $_lang['goods'];?></span>▼</a>
                            <?php } ?>
<?php if($task_open) { ?>
   		 <a href="javascript:void(0);" class="hidden"   rel="task_list"><?php echo $_lang['task'];?></a>
<?php } ?>
<?php if($shop_open) { ?>
                           	 	<a href="javascript:void(0);" class="hidden"   rel="shop_list"><?php echo $_lang['goods'];?></a>
 <?php } ?>
                            </div>
                        </div>
<input type="text" name="search_key" onkeydown="search_keydown(event);" id="search_key" class="fl_l search_input txt_input togg c999"
 value="<?php echo $_lang['input'];?><?php if($task_open) { ?><?php echo $_lang['task'];?><?php } ?><?php if($task_open&&$shop_open) { ?>/<?php } ?><?php if($shop_open) { ?><?php echo $_lang['goods'];?><?php } ?>" 
   x-webkit-speech x-webkit-grammar="bUIltin:search" lang="zh-CN">
                    </div>
</form>
                    <!--搜索框和选项 end-->
                    <!--搜索提交 start-->
                    <div class="fl_l header_btn">
                    	<button class="search_btn" id="search_btn" type="button" onclick="topSearch();"><span class="icon magnifier"></span><?php echo $_lang['search'];?></button>
                    </div>
                    <!--搜索提交 end-->
                </div>
                <!--主搜索 end-->
<?php } else { ?>
&nbsp;
<?php } ?>

            </div>
            


          
            	<!--用户登录注册 start-->
            	<div class="user_box clearfix grid_5">
                	<!--注册登录按钮 start-->
                  	<ul id="login_sub" class="user_login <?php if($uid) { ?>hidden<?php } ?>">
                        <li><a href="index.php?do=register" class="m_h"><?php echo $_lang['free_register'];?></a></li>
                        <li><a href="index.php?do=login"><?php echo $_lang['login'];?></a></li>
                    </ul>
                    <!--注册登录按钮 end--> 
<div class="clear"></div>




                    <!--登录成功 start-->
                    <div id="logined" class="<?php if(!$uid) { ?>hidden<?php } ?>">
                    	<!--用户登录后内容 start-->
                        <ul class="user_logined clearfix">
                            <li id="avatar">
                            	<a href="index.php?do=user" title="<?php echo $username;?>" rel="user_menu">
                            		<?php echo  keke_user_class::get_user_pic($uid,'small') ?>
                                    <span class="user_named m_h"><?php echo $username;?></span>
                            	</a>
<!--用户登录后导航菜单 start-->
                    <div id="user_menu" class="user_nav_pop grid_5 alpha omega hidden m_h">
                        <ul class="nav_list clearfix">
                                    	<li class="clearfix"><a href="index.php?do=user&view=finance&op=detail" title="<?php echo $_lang['money'];?> | <?php echo CREDIT_NAME;?>" id="money"> <div class="icon16 cur-yen reverse"></div><?php  echo keke_curren_class::output(floatval($user_info['balance']),-1);  ?>| <?php  echo keke_curren_class::output(floatval($user_info['credit']),-1);  ?></a></li>
                                        <?php if($task_open) { ?>
<li class="clearfix"><a href="index.php?do=release" title="<?php echo $_lang['pub_task'];?>" class="selected" ><div class="icon16 doc-new reverse"></div><?php echo $_lang['pub_task'];?></a></li>
<?php } ?>
<?php if($shop_open) { ?>
<li class="clearfix"><a href="index.php?do=shop_release" title="<?php echo $_lang['pub_goods'];?>" class="selected"><div class="icon16 doc-new reverse"></div><?php echo $_lang['pub_goods'];?></a></li>
<?php } ?>
<li class="clearfix <?php if($uid ==ADMIN_UID || $user_info['group_id']>0) { ?><?php } else { ?>hidden<?php } ?>" id="manage_center"><a href="control/admin/index.php" title="<?php echo $_lang['manage_center'];?>" ><div class="icon16 key reverse"></div><?php echo $_lang['manage_center'];?></a></li>
<li class="clearfix"><a href="index.php?do=user&view=index" title="<?php echo $_lang['user_center'];?>"><div class="icon16 cog reverse"></div><?php echo $_lang['user_center'];?></a></li>
<?php if($space_config==1) { ?>
<li class="clearfix"><a href="<?php echo kekezu::build_space_url($uid); ?>" title="<?php echo $_lang['my_space'];?>" id="space"><div class="icon16 compass reverse"></div><?php echo $_lang['my_space'];?></a></li>
<?php } ?>
<!--<li class="clearfix"><a href="index.php?do=user&view=message" title="<?php echo $_lang['website_msg'];?>"><div class="icon16 mail reverse"></div><?php echo $_lang['website_msg'];?></a></li>-->
<li class="clearfix"><a onclick="showWindow('out','index.php?do=logout');return false;" title="<?php echo $_lang['logout'];?>" href="index.php?do=logout"><?php echo $_lang['logout'];?></a></li>
                         </ul>
                    </div>
                    <!--用户登录后导航菜单 end-->
</li>
                            <li class="line m_h"></li>
                            <li class="logout m_h"><a title="<?php echo $_lang['website_msg'];?>" href="index.php?do=user&view=message"><?php echo $_lang['website_msg'];?></a></li>
                            <li class="clear"></li>
                        </ul>
                        <!--用户登录后内容 end-->


                    </div>
                    <!--登录成功 end-->
                    
                    
                    <div class="clear"></div>
                </div>
                <!--用户登录注册 end-->
      
            <!--移动端菜单-->
<div class="m_ctrl">
<a class="icon32 zoom reverse" href="#" rel="search"></a>
            <a class="icon32 align-just reverse" href="#" rel="nav"></a>
</div>
            <!--移动端菜单 end-->

            

        </div>
    </header>
    <!--头部 end-->
        <!--tool_E-->
 <nav id="nav" class="nav m_h">
        <div class="container_24" >
        	<div class="menu grid_24 clearfix">
                <ul class="clearfix">
                	<?php if(is_array($nav_arr)) { foreach($nav_arr as $k => $v) { ?>
                   		<li>
                   			<a href="<?php echo $v['nav_url'];?>" <?php if(isset($nav_active_index) && $v['nav_style']==$nav_active_index) { ?>class="selected"<?php } ?> <?php if($v['newwindow']) { ?>target="_blank"<?php } ?>>
                   			<span><?php echo $v['nav_title'];?></span></a>
</li>
<li class="line"></li>
<?php } } ?>
                </ul>
                <!---->
                  <div class="operate po_ab">
                    	<a href="index.php?do=help" target="_blank" title="<?php echo $_lang['help_center'];?>">
                        	<span class="icon16 help reverse"></span>
<?php echo $_lang['help_center'];?>
                        </a>
                   </div>
                <!---->
</div>
                <div class="clear"></div>
        </div>
    </nav>
    <div class="clear"></div>
<?php } ?><!--页面样式	-->
<div class="wrapper">
<div class="container_24">
    	<section class="clearfix section">
        	<div class="box model green ">
        		<div class="inner">
            		<header class="box_header clearfix ">
            			<div class="grid_5 alpha omega">
            				<h1 class="box_title"><span><?php echo $_lang['register'];?></span> Register</h1>
</div>
<div class="grid_18">
<nav class="box_nav clearfix">
<ul> 
                					<li><a href="index.php?do=login&ac_type=reg"><?php echo $_lang['has_account_now_to_login'];?></a></li>
</ul>
</nav>
</div>
</header>
        			<div class="box_detail clearfix po_re box pt_10 pl_5">
            			<div class="grid_17">
                		<!--from表单 start-->
                			<div class="form_box clearfix border_n">
                    			<form action="index.php?do=register" method="post" id="register_frm" name="register_frm">
                        			<input type="hidden" name="formhash" id="formhash" value="<?php echo FORMHASH;?>">
                        			<input type="hidden" name="hdn_refer" id="hdn_refer" value="<?php echo $_K['refer'];?>">
<input type="hidden" name="handlekey" value="register_frm1"><!--账号-->
                        			<div class="rowElem clearfix po_re">
                            			<label class="grid_4">
                                			<?php echo $_lang['account'];?>
                            			</label>
                            			<div class="fl_l ">
                                			<input type="text" class="txt txt_input" autocomplete="off" name="txt_account" id="txt_account" limit="required:true;len:2-20;type:string;general:true" msg="<?php echo $_lang['username_input_error'];?>" ajax="index.php?do=register&check_username=" title="<?php echo $_lang['please_input_register_account'];?>" msgArea="login_account_msg" style="width:200px;" />
                            				<span class="msg" id="login_account_msg"><i></i></span>
</div>

                        			</div>

                        		<!--end 账号--><!--密码-->
                        			<div class="rowElem clearfix po_re">
                            			<label class="grid_4">
                                			<?php echo $_lang['password'];?>
                            			</label>
                            			<div class="fl_l  ">
                                			<input class="txt_input" onKeyup="pwStrength(this.value)" style="width:200px;" type="password" name="pwd_password" id="pwd_password" maxlength="20" limit="required:true;len:6-20" msg="<?php echo $_lang['password_input_error'];?>" title="<?php echo $_lang['please_input_register_pw'];?>" msgArea="password_msg"/>
                            				<span class="msg" id="password_msg"></span>
</div>

                        			<div class="clear"></div>
<!--密码强度-->

<div class="prefix_4">
                            		 	<div id="pwdStrength" class=" msg pw_strength">
                                		<div class="pw_letter">
                                			<span class="selected"><?php echo $_lang['weak'];?></span>
<span><?php echo $_lang['general'];?></span>
<span><?php echo $_lang['better'];?></span>
</div>
                           			 	</div>

</div>
                        			</div>
<!--强度end-->
                        			<div class="rowElem clearfix po_re">
                            			<label class="grid_4">
                                			<?php echo $_lang['confirm_password'];?>
                            			</label>
                            			<div class="fl_l">
                                			<input class="txt_input" style="width:200px;" type="password" name="pwd_password2" id="pwd_password2" maxlength="20" limit="required:true;equals:pwd_password" msg="<?php echo $_lang['repeat_password_error'];?>" title="<?php echo $_lang['input_pw_agian'];?>" msgArea="password2_msg"/>
                            				<span class="msg" id="password2_msg"></span>
</div>

                        			</div> 
                        		<!--end 密码-->
<!--邮箱-->
                        			<div class="rowElem clearfix po_re">
                            			<label class="grid_4">
                                			<?php echo $_lang['email'];?>
                            			</label>
                            			<div class="fl_l">
                                			<input class="txt_input" style="width:200px;" autocomplete="off" type="text" class="txt" name="txt_email" id="txt_email"limit="type:email;required:true;len:6-50" msg="<?php echo $_lang['email_error'];?>" title="<?php echo $_lang['email_format'];?>" ajax="index.php?do=register&check_email=" msgArea="email_msg"/>
                            				<span class="" id="email_msg"></span>
</div>

                        			</div>
                        	<!--end 邮箱-->					

<!--验证码-->
                        			<div class="rowElem clearfix po_re">
                            			<label class="grid_4">
                                			<?php echo $_lang['auth_code'];?>
                            			</label>
                            			<div class="grid_8 alpha omega po_re" >
                                			<input style="width:65px;" class="fl_l txt_input" name="txt_code" type="text" 
size="8" id="txt_code" limit="required:true;len:4" msg="<?php echo $_lang['auth_code_error'];?>"msgArea="secode_msg"
ajax="index.php?do=ajax&view=code&txt_code=" >
 			<div id="show_secode_menu_content" class="hidden secode_box">
 				<img id="secode_img" src="secode_show.php?sid=" onclick="document.getElementById('secode_img').src='secode_show.php?sid='+Math.random(); return false;">
 				<a class="font14" href="#" onclick="document.getElementById('secode_img').src='secode_show.php?sid='+Math.random(); return false;"><?php echo $_lang['change_a_group'];?></a>
<span class="" id="secode_msg"></span>
</div>
 	        <a id="show_secode" href='index.php?do=ajax&view=menu&ajax=show_secode'></a>
                            				
</div>
                            			
                        			</div>						
                        	<!--end 验证码-->

                        <div class="mt_20 prefix_4 ml_5">
                            <button type="submit" class="button" onclick="return user_register();">
                                <span class="clock icon"></span>
                                <?php echo $_lang['register'];?>
                            </button>
                        </div>

                        <p class="mt_20 prefix_4 ml_5">
                            <input  name="inputtext" type="checkbox" checked="checked" id="inputtext" limit="required:true"
msg="<?php echo $_lang['you_should_agree_agreement'];?>" msgArea="login_msg"/> &nbsp;<?php echo $_lang['i_has_read_and_accpet'];?><a  class="agreement_link" href="" target="_blank"><?php echo $_lang['register_agreement'];?></a><?php echo $_lang['and_copyright_notice'];?>
                        	<span id="login_msg"></span>
</p>
                    </form>
<div class="agreement_part clearfix" style="display:none;">
<p><?php keke_loaddata_class::readtag('注册协议') ?></p>
</div>
                </div>
            </div>
            <div class="grid_6 omega border_l_c">
                    <div class="pad10">

                     <div class=" pl_20">
                        <span><?php echo $_lang['from_cooperation_website_login'];?></span>
<?php if(is_array($api_open)) { foreach($api_open as $k => $v) { ?>
<?php if($weibo_list[$k.'_app_id']) { ?>
 <div class="mt_10">
<a href="index.php?do=oauth_login&type=<?php echo $k;?>" alt="<?php echo $api_name[$k]['name'];?>" title="<?php echo $api_name[$k]['name'];?>">
<img src="resource/img/ico/<?php echo $k;?>_t.gif" alt="<?php echo $api_name[$k]['name'];?>" title="<?php echo $api_name[$k]['name'];?>">
</a>
<a href="index.php?do=oauth_login&type=<?php echo $k;?>" class="ml_5"><?php echo $api_name[$k]['name'];?><?php echo $_lang['login'];?></a>
</div>
                   <?php } ?>			
<?php } } ?>
                    </div>
                </div>
            </div>
        				</div>
</div>
</div>
        </section>
        <div id="login_msg">
        </div>
        <div class="clear">
        </div>
    </div>
</div>
<script type="text/javascript">
   In('form');
    //注册
    function user_register(){
var i = checkForm(document.getElementById("register_frm"));
        if (i) {
 showWindow('register_frm1', 'register_frm', 'post',0,{cover:1});
         }else{
      		return false;
 }
    }
$("#txt_code").focus(function(){
$("#show_secode_menu_content").removeClass("hidden");
});
$(".agreement_link").toggle(function(){
$(".agreement_part").show();
},function(){
$(".agreement_part").hide();
});
function checkStrong(sPW){
//if (sPW.length < 3){
//Modes=1;
//}else{
var pwLength = 	sPW.length;
  var patEn = /[a-zA-Z]/;
  var patnum = /[0-9]/;
  var speChar = /[`~!@#$\^&\*\(\)=\|{}':;',\/\?\[\]\.<>]/;
  var isEn = patEn.test(sPW);
  var isNum = patnum.test(sPW);
  var isSpe = speChar.test(sPW);
  Modes = getStrong(isEn,isNum,isSpe,pwLength);

//}
 return Modes; 
}

function getStrong (isEn,isNum,isSpe,pwLength){
if (isEn && isNum && isSpe && (pwLength>6)){
var setModes = 3;
}else{
var setModes = 2;
if((isEn && isNum)||(isNum && isSpe)||(isEn&&isSpe)){
var setModes = 2;
}else{
var setModes = 1;
}
}
return setModes;
}

function pwStrength(pwd){ 
  if (pwd==null||pwd==""){ 
  	S_level = 0;
  } else{ 
  S_level=checkStrong(pwd); 
  $("#pwdStrength span:lt("+S_level+")").addClass('selected');
  $("#pwdStrength span:gt("+(S_level-1)+")").removeClass('selected'); 
  } 

}

</script>
<?php if(!isset($inajax)) { ?>

<!--页脚 satrt-->
<footer class="footer clearfix">
<!--网站链接以及语言栏 关注我们 搜索 start-->






            <!--网站版权声明 start-->
            <section class="site_copyright clearfix">
            	<div class="container_24 clearfix ">
            		
            		
                    	 	<dl>
<dt>
                    	 		<?php echo $_lang['company'];?><?php echo $basic_config['company'];?><span class="pad10"><?php echo $_lang['address'];?><?php echo $basic_config['address'];?></span><?php echo $_lang['contact_phone'];?><?php echo $basic_config['phone'];?>
</dt>
<dd>
                    	 	<?php echo P_NAME;?><?php echo KEKE_VERSION;?> <?php echo $basic_config['copyright'];?><a href="http://icp.valu.cn/" target="_blank"><?php echo $basic_config['filing'];?></a>
<?php if(KEKE_DEBUG) { ?>
<span>
Querys: <?php echo db_factory::create()->get_query_num() ?>
 &nbsp;
Times:<?php echo kekezu::execute_time() ?>
</span>			
<?php } ?>
</dd>  
                    	 	</dl>
 <div class="clear"></div>


<!--语言栏 关注我们 搜索 start-->

                    <div class="site_attach clearfix">
<?php if($attent_api_open) { ?>

                        	<div class="social">
                            	<?php echo $_lang['about_us_'];?>
                            	
                                <?php if(is_array($attent_api_open)) { foreach($attent_api_open as $k => $v) { ?>
<?php if($attent_list[$k]['v']) { ?>

<?php $i = explode("_", $k);$i = $i['0'];$j=($attent_list[$k]); ?> 
<a href="index.php?do=wb&focus=<?php echo $j?>&wb_type=<?php echo $i?>"><img src="resource/img/ico/<?php echo $i;?>_t.gif" title="<?php echo $attent_list[$k]?>"></a> 

<?php } ?>
<?php } } ?>

                            </div>
     
<?php } ?>

                        <div class="lan_box">
                            <form action="" method="post" id="lan_bottom">
                                <div class="clearfix">
                                     <label><?php echo $_lang['language'];?></label>
                                     <select id="lan" name="lan" style="width:100px" onchange="setLang(this)">
  <?php if(is_array($lang_list)) { foreach($lang_list as $k => $v) { ?>
    <option value="<?php echo $k;?>" c="<?php echo $curr_list[$k]['0'];?>" <?php if($k==$language) { ?>selected<?php } ?>><?php echo $v;?></option>
  <?php } } ?>
                                     </select>
                                
                           
                               
                                     <label> <?php echo $_lang['currency'];?><?php echo $_lang['zh_mh'];?></label>
                                     <select  style="width:100px" onchange="setCurr(this.value,1);">
  <?php if(is_array($f_c_list)) { foreach($f_c_list as $k => $v) { ?>
    <option value="<?php echo $k;?>" id="<?php echo $k;?>" <?php if($currency==$k) { ?>selected<?php } ?>><?php echo $v['title'];?></option>
  <?php } } ?>
                                     </select>
                                 </div>
                            </form>
</div>	
                        

</div>

                  
                    <!--语言栏 关注我们 搜索 end-->


                </div>
   				<div class="clearfix"><?php echo htmlspecialchars_decode($basic_config['stats_code']) ?></div>
            </section>
            <!--网站版权声明 end-->
            
            <!--返回顶部 start-->

        	<a class="top animated hidden" href="javascript:void(0);" title="<?php echo $_lang['return_top'];?>"><em>&diams;</em>Top</a>
              
            <!--返回顶部 end-->
    </footer>
    <!--页脚 end-->
</div>
<?php if($uid) { ?>
<?php kekezu::update_oltime($uid,$username) ?>
<?php } ?>
<script type="text/javascript">
var uid='<?php echo $uid;?>';
var xyq = "<?php echo $xyq = session_id(); ?>";
<?php if($exec_time_traver) { ?>
$(function(){
   $.get('js.php?op=time&r='+Math.random());	
})
<?php } ?>
 //js异步加载
In('header_top','custom','lavalamp','tipsy','autoIMG','slides');




</script>

<!--[if IE 6]></div><![endif]-->
<!--[if IE 7]></div><![endif]-->
<!--[if IE 8]></div><![endif]-->
</body>
</html>
<?php } ?>
<?php keke_tpl_class::ob_out();?>