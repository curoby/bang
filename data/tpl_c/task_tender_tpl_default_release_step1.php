<?php keke_tpl_class::checkrefresh('task/tender/tpl/default/release_step1', '1365694719' );?> <!--左边部分-->
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

 <!--from表单 start-->
   <div class="form_box clearfix box border_n">
     <!--  <div class="form_tip">
        <h5 class="font14b t_c" style="color:#7caf22"><?php echo $model_info['model_name'];?><?php echo $_lang['task_process'];?></h5>
        <!--单人悬赏-single
<div class="min_step all_7 step_orange mb_10 ml_30">
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
<span><?php echo $_lang['start_complete'];?></span>
</li>

<li>
<div class="icon"></div>
<span><?php echo $_lang['confirm_complete'];?></span>
</li>

<li class="last">
<div class="icon"></div>
<span><?php echo $_lang['task_over'];?></span>
</li>

</ul>
</div>
      </div> -->
      
  <form action="<?php echo $basic_url;?>" method="post" name="frm_step1" id="frm_step1">
  	<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
<input type="hidden" name="step1" value="1">
<input type="hidden" name="min" value="<?php echo $min?>" id="min">
<input type="hidden" name="max" value="<?php if($release_info['max']) { ?><?php echo $release_info['max'];?><?php } else { ?><?php echo $max;?><?php } ?>" id="max">


        <div class="rowElem clearfix po_re">
          <label class="grid_8"><strong><?php echo $_lang['budget'];?><?php echo $_lang['zh_mh'];?></strong></label>
           <div class="grid_12">
           	<select name="task_cash_cove" id="task_cash_cove" title="<?php echo $_lang['choose_plan_area'];?>" style="width:190px;" >
           		<option value=""><?php echo $_lang['please_choose'];?></option>
<?php if(is_array($cove_arr)) { foreach($cove_arr as $k => $v) { ?>
<option value="<?php echo $v['cash_rule_id']?>" <?php if($release_info['task_cash_cove']==$v['cash_rule_id']) { ?>selected<?php } ?>><?php echo $v['cove_desc'];?></option>	
<?php } } ?>	
           	</select>
           	<span class="ml_5">元</span>
<div id="span_task_cove"  class="ml_5"></div>
           </div>
        </div>

           <div class="rowElem clearfix">
          <label class="grid_8"><strong><?php echo $_lang['task_round'];?><?php echo $_lang['zh_mh'];?></strong></label>
            <div class="grid_12">
       
               <input name="txt_task_day"   onclick="showcalendar(event, this, 0)" size="30" value="<?php if($release_info['txt_task_day']) { ?><?php echo $release_info['txt_task_day']?><?php } else { ?><?php echo $max?><?php } ?>" type="text" id="txt_task_day" title="<?php echo $_lang['task_round_title'];?>:<?php echo $min_day?><?php echo $_lang['day'];?>,<?php echo $_lang['max_day'];?><?php echo $max?> " msgArea="span_task_day" onkeyup="clearstr(this)"
   	limit="required:true;type:date;than:min;less:max" msg="<?php echo $_lang['task_round_msg'];?>" max="<?php echo $default_max_day;?>"/><!--between:<?php echo $task_config['min_day'];?>-<?php echo $default_max_day;?>-->
            	<span class="ml_5">年-月-日</span>
 <span id="span_task_day"  class="ml_5"></span>
 
</div>
        </div>

        <div class="rowElem clearfix ">
           <label class="grid_8"><strong><?php echo $_lang['cash_assign'];?><?php echo $_lang['zh_mh'];?></strong></label>
             <div class="grid_6">
         		    <strong><?php echo $_lang['single_reward'];?></strong>
             </div>
        </div>


     </form>
    </div>
    <!--from表单 end-->
    <div class="step_button"> <button type="submit" name="is_submit" onclick="stepCheck_ext();" class="big button"><?php echo $_lang['next_step'];?></button></div>
  
 
<!--end 左边部分-->
<!--右边部分-->
  <!--  <div class="grid_7 omega alpha">
     <div class=" prefix_1 suffix_1 pt_20">
       <h3 class="font14b"><?php echo $_lang['what'];?><?php echo $model_info['model_name'];?> </h3>
         <p><!--{eval echo kekezu::filter_input(<?php echo $model_info['model_desc']?>)}</p>
     </div>
    </div> -->


<script type="text/javascript">
    
 In('calendar')
//钱的区间检查	
function stepCheck_ext(){		
var slt_val = $("#task_cash_cove").val(); 
if(!slt_val){
$("#span_task_cove").addClass("msg msg_error").html("<i></i><span><?php echo $_lang['choose_block'];?></span>");return false;

//showDialog('<?php echo $_lang['choose_block'];?>', 'alert', '<?php echo $_lang['friendly_notice'];?>','document.getElementById("task_cash_cove").focus()',0); return false;
}else{
$("#span_task_cove").removeClass("msg_error").html(" ");
}
stepCheck();
}

</script>
<!--end 右边部分-->
<?php keke_tpl_class::ob_out();?>