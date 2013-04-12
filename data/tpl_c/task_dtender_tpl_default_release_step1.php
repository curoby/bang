<?php keke_tpl_class::checkrefresh('task/dtender/tpl/default/release_step1', '1365694720' );?> <!--  帮助 start -->
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
 <!--左边部分-->


 <!--from表单 start-->
   		<div class="form_box clearfix box border_n">
      		<!-- <div class="form_tip">
        		<h5 class="font14b t_c" style="color:#7caf22"><?php echo $model_info['model_name'];?><?php echo $_lang['task_process'];?></h5>
<div class="min_step all_8 step_orange mb_10 ml_30">
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
<span><?php echo $_lang['hosted_reward'];?></span>
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
      		</div> -->
  		<form action="<?php echo $basic_url;?>" method="post" name="frm_step1" id="frm_step1">
  			<input type="hidden" name="step1" value="step1"> 
  			<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
<input type="hidden" name="txt_task_cash" value="<?php echo $task_config['deposit'];?>">
<input type="hidden" name="min" value="<?php echo $min?>" id="min">
        <input type="hidden" name="max" value="<?php if($release_info['max']) { ?><?php echo $release_info['max'];?><?php } else { ?><?php echo $max;?><?php } ?>" id="max">	
        		<div class="rowElem clearfix po_re">
          			<label class="grid_8"><strong><?php echo $_lang['budget'];?><?php echo $_lang['zh_mh'];?></strong></label>
           			<div class="grid_12">
           			<select name="task_cash_cove" id="task_cash_cove"  limit="required:truet;ype:int"  msg="<?php echo $_lang['budegt_msg'];?>" title="<?php echo $_lang['budget_title'];?>" msgArea="span_cash_cove" style="width:190px;">
       				<option value=""><?php echo $_lang['please_choose'];?></option>
<?php if(is_array($cash_cove)) { foreach($cash_cove as $v) { ?>
<option value="<?php echo $v['cash_rule_id'];?>" <?php if($release_info['task_cash_cove']==$v['cash_rule_id']) { ?> selected="selected" <?php } ?> ><?php echo $v['cove_desc'];?></option>
<?php } } ?>
</select>
<span class="ml_5">元</span>
<span id="span_cash_cove"  class="ml_5"></span>			
           			</div>
        		</div>
              <div class="rowElem clearfix">
              <label class="grid_8"><strong>竞标截止日期<?php echo $_lang['zh_mh'];?></strong></label>
              <div class="grid_12">
       
               <input name="txt_task_day"   onclick="showcalendar(event, this, 0)" size="30" value="<?php if($release_info['txt_task_day']) { ?><?php echo $release_info['txt_task_day']?><?php } else { ?><?php echo $max?><?php } ?>" type="text" id="txt_task_day" title="<?php echo $_lang['task_round_title'];?>:<?php echo $min_day?><?php echo $_lang['day'];?>,<?php echo $_lang['max_day'];?><?php echo $max?> " msgArea="span_task_day" onkeyup="clearstr(this)"
   	limit="required:true;type:date;than:min;less:max" msg="<?php echo $_lang['task_round_msg'];?>" max="<?php echo $default_max_day;?>"/><!--between:<?php echo $task_config['min_day'];?>-<?php echo $default_max_day;?>-->
            	<span class="ml_5">年-月-日</span>
 <span id="span_task_day"  class="ml_5"></span>
 
</div>
        </div>
        		<div class="rowElem clearfix">
           			<label class="grid_8"><strong><?php echo $_lang['cash_assign'];?><?php echo $_lang['zh_mh'];?></strong></label>
             		<div class="grid_6"><strong><?php echo $_lang['single_reward'];?></strong></div>
        		</div>
     		</form>
   		 </div>
<!--from表单 end-->
    	<div class="step_button"> <button type="submit" name="is_submit" onclick="stepCheck_ext();" class="big button"><?php echo $_lang['next_step'];?></button></div>

<!--end 左边部分-->

<!--右边部分-->
<!-- <div class="grid_7 alpha omega">
<div class=" prefix_1 suffix_1 pt_20">
    	<h3 class="font14b"><?php echo $_lang['what'];?><?php echo $model_info['model_name'];?>？ </h3>
        <p><!--{eval echo kekezu::filter_input(<?php echo $model_info['model_desc']?>)}</p>
    </div>
</div> -->
<!--end 右边部分-->
<script type="text/javascript">
In('calendar');
function stepCheck_ext(){
var slt_val = $("#task_cash_cove").val(); 
if(!slt_val){
$("#span_cash_cove").addClass("msg msg_error").html("<i></i><span><?php echo $_lang['choose_block'];?></span>");	return false;		
}else{
$("#span_cash_cove").removeClass("msg msg_error").html(" ");
}
stepCheck();		
}
</script>
 
<?php keke_tpl_class::ob_out();?>