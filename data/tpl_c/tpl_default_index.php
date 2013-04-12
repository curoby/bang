<?php keke_tpl_class::checkrefresh('tpl/default/index', '1365693717' );?><?php if($_K['inajax']) { ?>
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
<?php keke_loaddata_class::ad_show('GLOBAL_TOP_BANNER','index','') ?>
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
<?php } ?>
<script type="text/javascript" src="resource/js/jqplugins/slides.min.jquery.js"></script>
<script type="text/javascript" src="resource/js/jqplugins/easySlider1.5.js"></script>
<script type="text/javascript" src="<?php echo $style_path;?>/js/index.js"></script>
 <!--内容区 satrt-->
  <div class="wrapper clearfix">
    <div class="container_24 clearfix"> 
   <div class="pt_10"></div>


<div class="grid_18 mb_10">
   <div class="box default clearfix">
     <div class="inner">
      <!--切换广告 start-->
       <div class="banner po_re">
         <div id="slides">
          <!--图片内容区域 start-->
              <div class="slides_container">
                   <?php keke_loaddata_class::ad_show('HOME_TOP_SLIDE','index','1') ?>
              </div>
          <!--图片内容区域 end-->

         </div>
       </div>
      <!--切换广告 end-->
     </div>
    </div>
</div>


  <div class="grid_6 mb_10  clearfix">

    <div class="box model">
      <div class="inner post">
          <table>
            <tbody>
              <tr>
                <td>
                   <h2>海量服务商提交稿件，任您选！</h2>
                    <p><a href="index.php?do=release" class="submit block mar10">发布任务</a></p>
                    <p><?php echo $page_title;?></p>
                </td>
              </tr>
            </tbody>
          </table>
             
      </div>
  <!--公告 start-->
  <div class="inner notice">
  <!--公告头部 start-->
  <header class="box_header clearfix">
          	<nav class="box_nav">
               <ul class="ov_hide block clearfix">
                  <li id="ul_plac_1" onclick="swaptab('plac','backLava','',3,1)"><a href="javascript:void(0);" title="<?php echo $_lang['website_bulletin'];?>"><?php echo $_lang['website_bulletin'];?></a></li>
                  <li id="ul_plac_2" onclick="swaptab('plac','backLava','',3,2,{ajax:1,url:'index.php?ajax=bid_notice'})"><a href="javascript:void(0);" title="<?php echo $_lang['bid_announcement'];?>"><?php echo $_lang['bid_announcement'];?></a></li>
                  <li id="ul_plac_3" onclick="swaptab('plac','backLava','',3,3,{ajax:1,url:'index.php?ajax=withdraw'})"><a href="javascript:void(0);" title="<?php echo $_lang['carry_announcement'];?>"><?php echo $_lang['carry_announcement'];?></a></li>
                  <!--<li id="ul_plac_4" onclick="swaptab('plac','backLava','',4,4,{ajax:1,url:'index.php?ajax=safe'})"><a href="javascript:void(0);" title="<?php echo $_lang['safe'];?>"><?php echo $_lang['safe'];?></a></li>-->
               </ul>
            </nav>
      </header>
  <!--公告头部 end-->
 <!--公告detail内容 start-->
         <article class="box_detail" id="div_plac_1">
           <ul>
              <?php if(is_array($bulletin_arr)) { foreach($bulletin_arr as $v) { ?>
<li><a href="index.php?do=single&art_id=<?php echo $v['art_id'];?>"><?php echo $v['art_title'];?></a></li>
 <?php } } ?>
           </ul>
         </article>
        <article class="box_detail hidden" id="div_plac_2">
          
        </article>
        <article class="box_detail hidden" id="div_plac_3">
          
        </article>

  </div>
   <!--公告 end-->
    </div>
   
                
  <div class="clear"></div>
                
  
  </div>
   
     
     <div class="clear"></div>
      <?php if($task_open) { ?>
          <!-- {ad_show(HOME_CENTAL_ONE,首页_中部一栏广告)} -->
      <div class="grid_24 mb_10">
        <div class="box model blue">
          <!--任务列表 start-->
           <div class="task clearfix">
            <!--头部 start-->
             <header class="box_header clearfix">
               <div class="grid_4 alpha">
                 <!--标题 start-->
                  <h1 class="box_title"><span><?php echo $_lang['task'];?></span>Task</h1>
                 <!--标题 end-->
               </div>
                 <!--按钮区域 start-->
                   <div class="btns">
                      <a href="index.php?do=release" class="button primary"><span class="plus icon"></span><?php echo $_lang['pub_task'];?></a><a href="index.php?do=task_list" class="button"><span class="rightarrow icon"></span><?php echo $_lang['into_task_hall'];?></a>
                   </div>
                 <!--按钮区域 end-->
            </header>
          <!--头部 end-->
          <!--任务推荐-->

<article class="box_detail clearfix">
<div class="grid_5 alpha">
               <div class="category">
                   <ul class="indus_list">
                       <?php if(is_array($final_task)) { foreach($final_task as $k => $v) { ?>
                       <?php if($is<20||($is==20&&$s==21)) { ?>
                       <li>
                           <a href="index.php?do=task_list&path=A<?php echo $v['indus_id']?>" target="_blank"><?php echo $v['indus_name']?></a>
                           <div class="s_nav hidden">
                           		<div class="indus">
                               <?php if(is_array($indus_c_arr)) { foreach($indus_c_arr as $k1 => $v1) { ?>
                               <?php if($k==$v1['indus_pid']) { ?>
                               
                                   <a href="index.php?do=task_list&path=A<?php echo $v1['indus_pid'];?>&indus_id=<?php echo $v1['indus_id'];?>"><?php echo $v1['indus_name']?></a>
                               
                               <?php } ?> 
                               <?php } } ?>
   </div>
   <div class="recommend">
   <h3>分类任务推荐</h3>
   <ul>
   <?php if($task_array[$k]) { ?>
   	<?php if(is_array($task_array[$k])) { foreach($task_array[$k] as $k2 => $v2) { ?>
<?php if($k2<5) { ?>
   	<li><a href="index.php?do=task&task_id=<?php echo $v2['task_id']?>"><strong class="money">
   		   <?php if(!$v2['task_cash_coverage']) { ?>
      							           <?php  echo keke_curren_class::output(floatval($v2['task_cash']),-1);  ?>
      						               <?php } else { ?>
      							           <?php echo $cur_info['symbol_left'];?><?php echo keke_curren_class::output($cash_coverage[$v2['task_cash_coverage']]['start_cove'],0,true) ?> ~ <?php echo keke_curren_class::output($cash_coverage[$v2['task_cash_coverage']]['end_cove'],0,true) ?><?php echo $cur_info['symbol_right'];?>
      						              <?php } ?>
         </strong> <?php echo $v2['task_title']?></a></li>
<?php } ?>
<?php } } ?>
   <?php } else { ?>
   暂无推荐任务
   <?php } ?>
   </ul>
   </div>	
                           </div>
                       </li>
                       <?php } ?>
                       <?php } } ?>
                     </ul>
                      <p class="all_list"><a href="index.php?do=task" target="_blank" class="button"><?php echo $_lang['more_category_of_task'];?>&gt;&gt;</a></p>
                           
                   
               </div>
           </div>
   
<div class="grid_19 alpha omega ">

           <!--顶部推荐3条任务内容 start-->
           
  
             <!--列表 start-->
 
               <ul class=" tops clearfix">
                 <?php if(is_array($task_recomm_3)) { foreach($task_recomm_3 as $v) { ?>
       <li class="col3">
                      <!--单条内容 start-->
                       <div class="item">
                         <!--任务金额 start-->
                           <strong class="money">
                            	<?php if(!$v['task_cash_coverage']) { ?>
<?php  echo keke_curren_class::output(floatval($v['task_cash']),-1);  ?>
<?php } else { ?>
<?php echo $cur_info['symbol_left'];?><?php echo keke_curren_class::output($cash_coverage[$v['task_cash_coverage']]['start_cove'],0,true) ?> ~ <?php echo keke_curren_class::output($cash_coverage[$v['task_cash_coverage']]['end_cove'],0,true) ?><?php echo $cur_info['symbol_right'];?>
<?php } ?>
            			</strong>
                         <!--任务金额 end-->
                         <!--任务标题 start-->
                         <h2 class="task_title"><a href="index.php?do=task&task_id=<?php echo $v['task_id'];?>" title="<?php echo $v['task_title'];?>" target="_blank"><?php echo $v['task_title'];?></a></h2>
                         <!--任务标题 end-->
                         <!--任务发布者 start-->
                         <span class="publisher"><a href="<?php echo kekezu::build_space_url($v['uid']); ?>" title="<?php echo $v['username'];?>" target="_blank"><?php echo $v['username'];?></a></span>
                         <!--任务发布者 end-->
                         <!--任务模型 start-->
                         <span class="task_mode"><?php echo $mode_list[$v['model_id']]['model_name'];?></span>
                         <!--任务模型 end-->
                        
                      </div>
                    <!--单条内容 end-->
                   </li>
   
                   <li class="line"></li>
        <?php } } ?>
               </ul>
   
  
               <!--列表 end-->
    
   
        <!--顶部推荐3条任务内容 end-->
                        
      <!--detail内容 start-->

         <!--列表内容 33条 start-->
           <ul class="small_list clearfix">
             <?php if(is_array($recomm_task)) { foreach($recomm_task as $v) { ?>
             <li class="col3 clearfix">
             <!--单条内容 start-->
                <div class="item clearfix">
                	<a href="index.php?do=task&task_id=<?php echo $v['task_id'];?>" title="<?php echo $v['task_title'];?>" target="_blank">&nbsp;
                   
        <!--任务标题 start-->
                   <strong class="money">
                  	 
      						<?php if(!$v['task_cash_coverage']) { ?>
      							<?php  echo keke_curren_class::output(floatval($v['task_cash']),-1);  ?>
      						<?php } else { ?>
      							<?php echo $cur_info['symbol_left'];?><?php echo keke_curren_class::output($cash_coverage[$v['task_cash_coverage']]['start_cove'],0,true) ?> ~ <?php echo keke_curren_class::output($cash_coverage[$v['task_cash_coverage']]['end_cove'],0,true) ?><?php echo $cur_info['symbol_right'];?>
      						<?php } ?>
                  </strong>
      <!--任务金额 start-->
                  <?php echo $v['task_title'];?>
                  <!--任务金额 end-->
  
                   <!--任务标题 end-->
        </a>

                 </div>
              <!--单条内容 end-->
              </li>
  		        <?php } } ?>
        </ul>
       <!--列表内容 33条 end-->

  
</div>
<!--任务推荐 end-->


   </div>
   </article> 

  </div>
 </div>
  <?php } ?>
  <?php if($shop_open) { ?>
 		 <?php keke_loaddata_class::ad_show('HOME_CENTAL_TWO','index','首页_中部二栏广告') ?>
  	<div class="grid_24 mb_10">
       <div class="box model purple">
       <!--商城内容 start-->
         <div class="shop">
           <!--头部 satrt-->
             <header class="box_header clearfix">
               <div class="grid_4 alpha">
                 <!--商城标题 start-->
                  <h1 class="box_title"><span><?php echo $_lang['shop'];?></span>Shop</h1>
                 <!--商城标题 end-->
               </div>

                <div>
                <!--商城按钮 start-->
                    <div class="btns">
                      <a href="index.php?do=shop_release" class="button primary"><span class="plus icon"></span><?php echo $_lang['pub_goods'];?></a><a href="index.php?do=shop_list" class="button"><span class="rightarrow icon"></span><?php echo $_lang['enter_shop'];?></a>
                    </div>
                <!--商城按钮 end-->
                </div>
               <div class="clear"></div>
          </header>
          <!--头部 end-->
           
   
   
    <article class="box_detail clearfix" >

           <div class="grid_5 alpha omega">
               <div class="category">
                   <ul class="indus_list">
                       <?php $is=0;$s=sizeof($final_shop);$load=array(); ?>
   <?php if(is_array($final_shop)) { foreach($final_shop as $k => $v) { ?>
                       <?php if($is<21||($is==21&&$s==22)) { ?>
                       <li>
                           <a href="index.php?do=shop_list&path=A<?php echo $v['indus_id']?>" target="_blank"><?php echo $v['indus_name']?></a>
                           <div class="s_nav hidden">
                           		<div class="indus">
                               <?php if(is_array($indus_c_arr)) { foreach($indus_c_arr as $k1 => $v1) { ?>
                               <?php if($k==$v1['indus_pid']) { ?>
                                   <a href="index.php?do=shop_list&path=A<?php echo $v1['indus_pid'];?>&indus_id=<?php echo $v1['indus_id'];?>"><?php echo $v1['indus_name']?></a>
                               <?php } ?> 
                               <?php } } ?>
  </div>
   <div class="recommend">
   <h3>分类商品推荐</h3>
   <ul>
   	<?php if($service_array[$k]) { ?>
  <?php if(is_array($service_array[$k])) { foreach($service_array[$k] as $k2 => $v2) { ?>
<?php if($k2<5) { ?>
   	<li><a href="index.php?do=service&sid=<?php echo $v2['service_id'];?>"><strong class="money"><?php  echo keke_curren_class::output(floatval($v2[price]),-1);  ?>/<?php echo $v2['unite_price'];?></strong> <?php echo $v2['title']?></a></li>
   	<?php } ?>
<?php } } ?>
<?php } else { ?>
   暂无推荐商品
<?php } ?>
 
   </ul>
   </div>
                           </div>
                       </li>
           <?php } ?> 
                       <?php } } ?>
   </ul> 
                       <p class="all_list">
                           <a href="index.php?do=shop" target="_blank" class="button"><?php echo $_lang['more_category_of_shop'];?>&gt;&gt;</a>
                       </p>
                       
                      
               </div>
           </div>   

                
         <!--detail内容 start-->
 <?php if($recomm_service) { ?>

             <!--商城列表 12条 start-->
             <ul class="small_list clearfix">
                 <!--第一条商品 start--><!--第一条商品 end-->
  <?php if(is_array($range)) { foreach($range as $v) { ?>
                 <li class="item clearfix">
                     <?php if($recomm_service[$v]) { ?>
 	<a href="index.php?do=service&sid=<?php echo $recomm_service[$v]['service_id'];?>" title="<?php echo $recomm_service[$v]['title'];?>">
 	
 	<img src="<?php echo keke_shop_class::output_pics($recomm_service[$v]['pic'],210,1); ?>" alt="<?php echo $recomm_service[$v]['title'];?>" onerror="this.src='<?php echo $style_path;?>/img/shop/shop_default.gif'">
 <span class="shop_item_info">
 	<strong class="money"><?php  echo keke_curren_class::output(floatval($recomm_service[$v][price]),-1);  ?>/<?php echo $recomm_service[$v]['unite_price'];?></strong>
                     	<strong class="title">
                             <?php echo $recomm_service[$v]['title'];?>
                         </strong>
                         
 </span>
 </a>
                     <?php } else { ?>
 	<a href="javascript:void(0);" title="<?php echo $_lang['now_no_goods'];?>"><img name="lazyImg" src="<?php echo keke_shop_class::output_pics($recomm_service[$v]['pic'],210,1); ?>" onerror="this.src='<?php echo $style_path;?>/img/shop/shop_default.gif'" alt="<?php echo $_lang['now_no_goods'];?>"></a>
 <?php } ?>
                 </li>
                 <?php } } ?>
             </ul>
             <!--商城列表 26条 end-->

 <?php } ?>
            
                 <?php if($top_s_4) { ?>
                 <ul class="tops clearfix">
                     <?php if(is_array($top_s_4)) { foreach($top_s_4 as $k => $v) { ?>
                     <li class="clearfix">
                         <div class="item">
                             <div class=" fl_l mr_10">
                                 <a href="<?php echo kekezu::build_space_url($v['uid']); ?>" title="<?php echo $v['username'];?>"><?php echo  keke_user_class::get_user_pic($v['uid'],'small') ?></a>
                             </div>
                             <div class="shoper_info">
                                 <ul>
                                     <li>
                                         <a href="<?php echo kekezu::build_space_url($v['uid']); ?>" class="font14" title="<?php echo $v['shop_name'];?>"><strong><?php echo kekezu::cutstr($v['shop_name'],20); ?></strong></a>
                                     </li>
                                     <li>
                                         <?php echo $_lang['praise_rate'];?><?php echo $_lang['zh_mh'];?><span class="cc00"><?php if($v['seller_total_num']) { ?><?php echo number_format($v[seller_good_num]*100/$v[seller_total_num],2) ?><?php } else { ?>0<?php } ?>%</span>
                                     </li>
                                     <li>
                                         <?php echo $_lang['industry'];?><?php echo $_lang['zh_mh'];?><span><?php echo $indus_p_arr[$v['indus_pid']]['indus_name'];?> | <?php echo $indus_c_arr[$v['indus_id']]['indus_name'];?> </span>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </li>
                     <?php } } ?>
                 </ul>
                 <?php } ?>
            

</article>
           <!--detail内容 end-->
     
        <!--商城内容 end-->
     </div>
    </div>
  </div>
  <?php } ?>
  
  
  

  <!--首页_中部三栏广告 start-->
  	<?php keke_loaddata_class::ad_show('HOME_CENTAL_THREE','index','首页_中部三栏广告') ?>
  <!--首页_中部三栏广告 end-->
  
  
 
            
     <div class="grid_16 mb_10 m_h">
      <div class="box model yellow">
       <div class="inner">
        <!--案例  start-->
          <div class="case">
            <!--头部 start-->
           <header class="box_header clearfix">
             <div class="grid_5 alpha omega">
               <h1 class="box_title"><span><?php echo $_lang['success_case'];?></span>Case</h1>
             </div>
 <div class="btns">
                    <a href="index.php?do=case" class="button" title="<?php echo $_lang['more_information'];?>"><?php echo $_lang['more_information'];?>&raquo;</a>
              </div>
           </header>
         <!--头部 end-->
         <!--detail内容 start-->
         <article class="box_detail no_bottom clearfix">
            <!--列表内容 start-->
              <ul class="small_list  clearfix">
                 <!--头条 start-->
  <?php if(is_array($case_list)) { foreach($case_list as $k => $v) { ?>
 
                    <li class="first">
                        <div class="main_img">
                       		<a <?php if($v['obj_type']=='task') { ?>href="index.php?do=task&task_id=<?php echo $v['obj_id']?>" <?php } else { ?> href="index.php?do=service&sid=<?php echo $v['obj_id']?>"<?php } ?> title="<?php echo $v['case_title'];?>">
                       			
                      				<img  src="<?php if(file_exists($v['case_img'])) { ?><?php echo $v['case_img'];?><?php } else { ?><?php echo $style_path;?>/img/shop/shop_default.gif<?php } ?>" alt="<?php echo $v['case_title'];?>"/>
  
                       		</a>
            </div>
                        <div class="main_title clearfix">
                        	 <a <?php if($v['obj_type']=='task') { ?>href="index.php?do=task&task_id=<?php echo $v['obj_id']?>" <?php } else { ?> href="index.php?do=service&sid=<?php echo $v['obj_id']?>"<?php } ?>>
                        		<span class="cc00 mr_10"><?php  echo keke_curren_class::output(floatval($v['case_price']),-1);  ?></span><?php echo $v['case_title'];?>
             </a>
            </div>
                    </li>
 <?php } } ?>
                 
            </ul>

           <!--列表内容 end-->
         <div class="clear"></div>
       </article>
      <!--detail内容 end-->
   </div>
   <!--案例 end-->
  </div>
 </div>
</div>
    <div class="grid_8 mb_10 m_h">
    <div class="box model rose">
      <div class="inner">
        <!--新闻资讯 start-->
          <div class="news">
           <header class="box_header clearfix">
             <div class="grid_5 alpha omega">
               <!--标题 start-->
                <h1 class="box_title"><span><?php echo $_lang['information'];?></span>News</h1>
               <!--标题 end-->
             </div>
           
               <div class="btns">
               	<a href="index.php?do=article" class="button" title="<?php echo $_lang['more_information'];?>"><?php echo $_lang['more_information'];?>&raquo;</a>
               </div>
             </header>
                          
             <!--detail内容 start-->
            <article class="box_detail no_bottom clearfix" id="div_news_1">
               <!--列表内容 start-->
                <ul class="small_list clearfix">
                  <?php if(is_array($news_list)) { foreach($news_list as $k => $v) { ?>
          			<?php if($k==0) { ?>
                  <li>
                    <!--头条图片 start-->
                       <div class="main_img">
                          <a href="index.php?do=article&view=article_info&art_id=<?php echo $v['art_id'];?>" title="<?php echo $v['art_title'];?>">
                            <img name="lazyImg" src="<?php if(file_exists($v['art_pic'])) { ?><?php echo $v['art_pic']?><?php } else { ?><?php echo $style_path;?>/img/style/new_default.gif<?php } ?>" alt="<?php echo $v['art_title'];?>" title="<?php echo $v['art_title'];?>"/>
              </a>
                       </div>
                    <!--头条图片 end-->
                    <!--头条标题 start-->
                     <div class="main_title clearfix">
                       <a href="index.php?do=article&view=article_info&art_id=<?php echo $v['art_id'];?>" title="<?php echo $v['art_title'];?>"><?php echo $v['art_title'];?></a>
                      <span class="date"><?php if($v['pub_time']){echo date('Y-m-d',$v['pub_time']); } ?></span>
                     </div>
                  </li>
          <?php } else { ?>
                 <li>
                     <div class="item">
                         <a href="index.php?do=article&view=article_info&art_id=<?php echo $v['art_id'];?>" title="<?php echo $v['art_title'];?>"><?php echo $v['art_title'];?></a>
                            <span class="date"><?php if($v['pub_time']){echo date('Y-m-d',$v['pub_time']); } ?></span>
                     </div>
                     <div class="clear"></div>
                 </li>
           <?php } ?>
         <?php } } ?>
                 
                </ul>

               <!--列表内容 end-->

            </article>
           <!--detail内容 end-->
         </div>
       <!--新闻资讯 end-->
      </div>
      </div>
     </div>    
     <div class="clear"></div>      
     <div class="box default m_h">
    <div class="inner">
  <!--  网站统计 start -->
    <div class="site_stats po_re">

      <div id="slider" class="box_detail">
    <!--   注册用户 start -->
       <ul>
          <li>
            <p>
              <span><?php echo $_lang['register_user_number'];?></span><span><strong class="num goup" ><?php echo $register;?></strong></span>
            </p>
    <!--  任务统计 start -->
      <?php if($task_open) { ?>
          <p>
            <span><?php echo $_lang['task_order_money'];?></span><span><strong class="num godown" ><?php echo $task_in;?></strong></span>
          </p>
          <p>
            <span><?php echo $_lang['task_number'];?></span><span><strong class="num goup" ><?php echo $task_count;?></strong></span>
          </p>
       <?php } ?>
      <!-- 任务统计 end -->
    </li>
     <!--    认证统计 start -->
     <li>
        <p>
          <span><?php echo $_lang['auth_statistics_number'];?></span><span><strong class="num gouspan" ><?php echo $all_auth;?></strong></span>
        </p>
 
      <!-- 认证统计 end -->
    <!--  商城统计 start -->
        <?php if($shop_open) { ?>
          <p>
            <span><?php echo $_lang['shop_order_money'];?> </span><span><strong class="num  godown " ><?php echo $service_in;?></strong></span>
          </p>
          <span><?php echo $_lang['goods_number'];?> </span><span><strong class="num godown " ><?php echo $service_count;?></strong></span>
       <?php } ?>
     </li>
        </ul>
   <!--    商城统计 end -->
    </div>
   <!--  网站统计 end -->
     </div>
    </div>
  </div>
  
    <div class="clear"></div>      
  
  <!--首页_中部四栏广告 start-->
 		 <?php keke_loaddata_class::ad_show('HOME_CENTAL_FOUR','index','首页_中部四栏广告') ?>
  <!--首页_中部四栏广告end-->
  <div class="clear"></div>
   </div>
 </div>

<div class="comment clearfix ">
<div class="container_24 ">
<span class="icon16 spechbubble-2 mt_5 mr_5"></span><?php echo $_lang['I_have_comments_or_suggestions_now'];?><a href="javascript:void(0);" title="<?php echo $_lang['feedback'];?>" onclick="suggest()"><?php echo $_lang['submit'];?></a>！</div>
</div>
 	 
<!--网站地址 start-->
 <div class="sitemap clearfix m_h">
 	
    <div class="container_24 clearfix">
    	
    <!--推荐分类-->
<?php if($task_open||$shop_open) { ?>

                <dl>
                    <dt><?php echo $_lang['recommend_cate'];?></dt>
                      <dd>
                           <ul>
                           	<?php $i=0; ?>
                            <?php if(is_array($indus_p_arr)) { foreach($indus_p_arr as $k => $v) { ?>
<?php if($v['is_recommend']==1 and $i<5) { ?>
  <?php $i++; ?>
            	<li><a href="index.php?do=task_list&path=A<?php echo $k;?>"  target="_blank"><?php echo $v['indus_name'];?></a></li>
<?php } ?>
<?php } } ?>
                           </ul>
                      </dd>
                </dl>

 <?php } ?>
<!--任务大厅-->
<?php if($task_open) { ?>
    
       <dl>
         <dt><?php echo $_lang['task_hall'];?></dt>
            <dd>
             <ul>
                <li><a href="index.php?do=release" target="_blank"><?php echo $_lang['pub_task'];?></a></li>
<li><a href="index.php?do=task_list" target="_blank"><?php echo $_lang['join_work'];?></a></li>
<li><a href="index.php?do=task_list" target="_blank"><?php echo $_lang['task_hall'];?></a></li>
<li><a href="index.php?do=task_map" target="_blank"><?php echo $_lang['task_map'];?></a></li> 
              </ul>
             </dd>
        </dl>
  
  <?php } ?>
  <!--威客商城-->
  <?php if($shop_open) { ?>
    
         <dl>
            <dt><?php echo $_lang['witkey_shop'];?></dt>
              <dd>
                 <ul>
                 	<li><a href="index.php?do=shop_release" target="_blank"><?php echo $_lang['pub_goods'];?></a></li>
<li><a href="index.php?do=shop_release&model_id=7" target="_blank"><?php echo $_lang['create_service'];?></a></li>
    <?php if(is_array($link_task)) { foreach($link_task as $v) { ?>
<?php if($v['model_type']=='shop'&&$v['model_status']=='1') { ?>
                      <li><a href="index.php?do=shop_list&path=C<?php echo $v['model_id'];?>" target="_blank"><?php echo $v['model_name'];?></a></li>
<?php } ?>
 <?php } } ?>
 
                 </ul>
                </dd>
         </dl>
   
 <?php } ?>
 <!--资讯中心-->
   
        <dl>
           <dt><?php echo $_lang['news_center'];?></dt>
              <dd>
                  <ul>
<?php if(is_array($link_news)) { foreach($link_news as $k => $v) { ?>
       		 <li><a href="index.php?do=article" target="_blank"><span><?php echo $v['cat_name'];?></span></a></li>
<?php } } ?>
                  </ul>
              </dd>
        </dl>
   
 <!--关于网站-->

<dl>
    	<dt><?php echo $_lang['about_website'];?></dt>
        <dd>
        	<ul>
        		<?php if(is_array($link_about)) { foreach($link_about as $v) { ?>
                  	  <li><a href="index.php?do=single&art_id=<?php echo $v['art_id'];?>" target="_blank" title="<?php echo $v['art_title'];?>"><?php echo $v['art_title'];?></a></li>
<?php } } ?>
            </ul>
        </dd>
    </dl>

 <!--帮助中心-->
    
    	<dl>
        	<dt><?php echo $_lang['help_center'];?></dt>
            <dd>
            	<ul>
    	<?php if(is_array($link_help)) { foreach($link_help as $k => $v) { ?>
       		 <li><a href="index.php?do=help&fpid=<?php echo $v['art_cat_id'];?>" target="_blank"><span><?php echo $v['cat_name'];?></span></a></li>
<?php } } ?>
                </ul>
            </dd>
        </dl>
   
</div> 

</div>
<!--网站地址 end-->

 <?php if(!isset($footer_load) ) { ?>
<section class="site_links clearfix m_h">
 <div class="container_24 ">
 	  
      <div class="links">
    	<dl>
        	<dt><?php echo $_lang['friend_link'];?></dt>
            <dd>
            	<ul class="clearfix">
            		
    	<?php if(is_array($flink)) { foreach($flink as $k => $v) { ?>
       		 <li><a href="<?php echo $v['link_url'];?>" target="_blank"><span><?php echo $v['link_name'];?></span></a></li>
<?php } } ?>
                </ul>
            </dd>
        </dl>
    </div>
   
</div>
</section>
 <!--网站链接以及语言栏 关注我们 搜索 end-->
<?php } ?>


<!--内容区 end-->


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