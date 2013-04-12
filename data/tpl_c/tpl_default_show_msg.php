<?php keke_tpl_class::checkrefresh('tpl/default/show_msg', '1365694411' );?><?php if(isset($r['inajax'])) { ?>
<script src="resource/js/jquery.js"></script>
<script src="resource/js/system/keke.js"></script>
<h3 class="flb"><em><?php echo $title;?></em><span><a href="javascript:;" class="flbc" onClick="hideWindow('<?php echo $r['handlekey']?>');" title="close"><?php echo $_lang['close'];?></a></span></h3>
     	<div class="c altw"><div <?php if($msgtype=='info') { ?> class="alert_info" <?php } else { ?> class="<?php echo $msgtype;?>"<?php } ?>><p><?php echo $content?></p></div></div>
<p class="o pns">
<?php if($time<1) { ?>
<button class="pn pnc" value="true" onclick="<?php if($url) { ?>window.location.href ='<?php echo $url?>';return false;<?php } else { ?>hideWindow('<?php echo $r['handlekey']?>');<?php } ?>" id="fwin_dialog_submit"><strong><?php echo $_lang['confirm'];?></strong></button>
<?php } else { ?>
<button class="pn" onclick="hideWindow('<?php echo $r['handlekey']?>');" id="fwin_dialog_submit"><strong><?php echo $_lang['jumping'];?></strong></button>
<?php } ?>
</p>
<script type="text/javascript">
//clearTimeout();
var t = parseInt("<?php echo $time?>")*1000;
var u =encodeURI("<?php echo $url?>");
if(t>0&&u){
    setTimeout(function(){
window.location.href=u;
},t);		 
}
</script>
<?php } else { ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_K['charset'];?>">
<!--<meta http-equiv="refresh" content="<?php echo $time?>;url=<?php echo $url?>">-->
<title><?php echo $_lang['jump_notice'];?></title>
<link href="resource/css/animate.css" rel="stylesheet" type="text/css">
<link href="<?php echo $_K['siteurl'];?>/resource/css/base.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_K['siteurl'];?>/resource/css/buttons.css" rel="stylesheet" type="text/css" />
<script src="resource/js/jquery.js" type="text/javascript"></script>
</head>

<body>

    <div class="systips animated">
        <div class="systips_detail <?php echo $type;?>">
            	<div class="tip_icon">&nbsp;</div>
                <div class="tip_title"><?php echo $title;?> <?php echo $_lang['page_jumping'];?></div>
                <div class="tip_messages"><?php echo $content;?><span id="time"><?php echo $time?></span> <?php echo $_lang['seconds_auto_jump'];?></div>
                <div class="tip_help"><?php echo $_lang['no_jump_please_click'];?><a href="<?php echo $url;?>" class="button"><span class="icon rightarrow">&nbsp;</span><?php echo $_lang['here'];?></a></div>
            
        </div>
    </div>

<script type='text/javascript'>
window.onload=function(){
setInterval(show_time, 1000);
}
function show_time(){
var u =encodeURI("<?php echo $url?>");
var time = document.getElementById("time").innerHTML;
time = parseInt(time);
if (time > 0)
{
time -= 1; 
}
document.getElementById("time").innerHTML = time;
if(time==0&&u){
document.location.href = u;
}
}
$(function(){
$('.systips').addClass('bounceIn');
})


</script>
</body>
</html>
<?php } ?><?php keke_tpl_class::ob_out();?>