<?php keke_tpl_class::checkrefresh('task/sreward/tpl/default/release_step1', '1365694713' );?> <!--左边部分-->
 <!--  帮助 start -->
    <div class="help_center" >
     	
     	<div id="help_center" class="help_detail hidden">
     		<h3><?php echo $_lang['what'];?><?php echo $model_info['model_name'];?>？</h3>
        <p><?php echo kekezu::filter_input($model_info['model_desc']) ?></p>
      	</div>
  
      	<div class="help_down ">
<a href="#" class="action_show">任务说明<span class="arrow_b"></span></a>
</div>
</div>
 <!--  帮助 end -->
 <!--提示信息-->
   <!-- <div class="messages m_infor">
     <span class="icon16">info</span><?php echo $model_info['model_intro'];?>
       <a href="javascript:;" class="close">&times;</a>
   </div> -->
   
  <!--end 提示信息-->
  <!--from表单 start-->
   <div class="form_box clearfix border_n">
   <!--  <div class="form_tip">
        <h5 class="font14b t_c" style="color:#7caf22"><?php echo $model_info['model_name'];?><?php echo $_lang['task_process'];?></h5>-->
        <!--单人悬赏-single-->
 <!--<div class="min_step all_8 step_orange mb_10 ml_30">
<ul class="clearfix">
<li class>
<div class="icon"></div>
<span><?php echo $_lang['release'];?></span>
</li>

<li>
<div class="icon"></div>
<span><?php echo $_lang['audit'];?></span>
</li>

<li>
<div class="icon"></div>
<span><?php echo $_lang['submit_work'];?></span>
</li>

<li>
<div class="icon"></div>
<span><?php echo $_lang['choos_work'];?></span>
</li>

<li>
<div class="icon"></div>
<span><?php echo $_lang['publicing'];?></span>
</li>

<li>
<div class="icon"></div>
<span><?php echo $_lang['delivering'];?></span>
</li>

<li>
<div class="icon"></div>
<span><?php echo $_lang['user_mark'];?></span>
</li>

<li class="last">
<div class="icon"></div>
<span><?php echo $_lang['task_over'];?></span>
</li>

</ul>
</div>
      </div>-->
     
 
  <form action="<?php echo $basic_url;?>" method="post" name="frm_step1" id="frm_step1">
  	<input type="hidden" name="step1" value="step1">
<input type="hidden" name="min" value="<?php echo $min?>" id="min">
<input type="hidden" name="max" value="<?php if($release_info['max']) { ?><?php echo $release_info['max'];?><?php } else { ?><?php echo $default_max_day;?><?php } ?>" id="max">
  	<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">

       <div class="rowElem clearfix">
          <label class="grid_8"><strong><?php echo $_lang['budget'];?><?php echo $_lang['zh_mh'];?></strong></label>
           <div class="grid_12">
              <input name="txt_task_cash" size="30" value="<?php if($release_info['txt_task_cash']) { ?><?php echo $release_info['txt_task_cash']?><?php } else { ?><?php echo $task_config['min_cash']?><?php } ?>" type="text" id="txt_task_cash" msgArea="span_task_cash"  title="<?php echo $_lang['mtask_cash_title'];?><?php echo $task_config['min_cash'];?><?php echo $_lang['yuan'];?>" onkeyup="clearstr(this)"
    limit="required:true;type:float;between:<?php echo $task_config['min_cash'];?>-" msg="<?php echo $_lang['mtask_cash_msg'];?><?php echo $task_config['min_cash'];?><?php echo $_lang['yuan'];?>" onblur="getMaxDday(this.value)" />
<span class="ml_5"><?php echo $_lang['yuan'];?></span>
<span id="span_task_cash" class="ml_5"></span>
           </div>
        </div>

        <div class="rowElem clearfix">
          <label class="grid_8"><strong><?php echo $_lang['task_round'];?><?php echo $_lang['zh_mh'];?></strong></label>
            <div class="grid_12">

<input name="txt_task_day" onclick="showcalendar(event, this, 0)"
size="30"
value="<?php if($release_info['txt_task_day']) { ?><?php echo $release_info['txt_task_day']?><?php } elseif($default_max_day) { ?><?php echo $default_max_day?><?php } else { ?><?php echo $min?><?php } ?>"
type="text" id="txt_task_day" min_day="<?php echo $task_config['min_day']?>"
title="<?php echo $_lang['task_round_title'];?>:<?php echo $task_config['min_day'];?><?php echo $_lang['day'];?>,<?php echo $_lang['max_day'];?><?php if($release_info['max']) { ?><?php echo $release_info['max'];?><?php } elseif($max_day) { ?><?php } else { ?><?php echo $default_max_day?><?php } ?>"
msgArea="span_task_day" onkeyup="clearstr(this)"
limit="required:true;type:date;than:min;less:max"
msg="<?php echo $_lang['task_round_msg'];?>" max="" /><span class="ml_5">年-月-日</span> <span id="span_task_day" class="ml_5"></span>

</div>
        </div>
<div class="rowElem clearfix po_re">
           <label class="grid_8"><strong><?php echo $_lang['cash_assign'];?><?php echo $_lang['zh_mh'];?></strong></label>
             <div class="grid_6"><strong><?php echo $_lang['single_reward'];?></strong></div>
        </div>
     </form>
    </div>
    <!--from表单 end-->
    <div class="step_button"> <button type="submit" name="is_submit" onclick="stepCheck();" class="big button"><?php echo $_lang['next_step'];?></button></div>
   
 
<!--end 左边部分-->

   
<script type="text/javascript">
In('calendar');
</script><?php keke_tpl_class::ob_out();?>