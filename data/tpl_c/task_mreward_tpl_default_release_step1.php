<?php keke_tpl_class::checkrefresh('task/mreward/tpl/default/release_step1', '1365694718' );?> <!--左边部分-->


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
<form action="<?php echo $basic_url;?>" method="post" name="frm_step1" id="frm_step1">
  		<input type="hidden" name="step1" value="step1">
<input type="hidden" name="min" value="<?php echo $min?>" id="min">
<input type="hidden" name="max" value="<?php if($release_info['max']) { ?><?php echo $release_info['max'];?><?php } else { ?><?php echo $default_max_day;?><?php } ?>" id="max">
  		<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
        	<div class="rowElem clearfix po_re">
          		<label class="grid_8"><strong><?php echo $_lang['reward_cash'];?><?php echo $_lang['zh_mh'];?></strong></label>
           		<div class="grid_13 alpha">
              	<input name="txt_task_cash" value="<?php if($release_info['txt_task_cash']) { ?><?php echo $release_info['txt_task_cash']?><?php } else { ?><?php echo $task_config['min_cash']?><?php } ?>" type="text" size="25" id="txt_task_cash" msgArea="span_task_cash"  title="<?php echo $_lang['mtask_cash_title'];?><?php echo $task_config['min_cash'];?><?php echo $_lang['yuan'];?>" onkeyup="clearstr(this)"
    	limit="required:true;type:int;between:<?php echo $task_config['min_cash'];?>-" msg="<?php echo $_lang['mtask_cash_msg'];?><?php echo $task_config['min_cash'];?><?php echo $_lang['yuan'];?>" onblur="getMaxDday(this.value)"/>
          	 	<span class="ml_5"><?php echo $_lang['yuan'];?></span>
 	<div id="span_task_cash" class="ml_5"></div>
   		</div>
          	</div>
<div class="clearfix po_re">
        <div class="rowElem clearfix">
        	<label class="grid_8 "><strong><?php echo $_lang['prize_1'];?><?php echo $_lang['zh_mh'];?></strong></label>
        	<div class="grid_13 alpha"><!--title="<?php echo $_lang['prize_num_title'];?>"-->
   	   			<input class="" name="txt_prize1_num" value="<?php if($release_info['txt_prize1_num']) { ?><?php echo $release_info['txt_prize1_num']?><?php } ?>" type="text" size="3" id="txt_prize1_num" msgArea="span_prize1_cash"   onkeyup="clearstr(this)" limit="required:true;type:int;between:1-" msg="<?php echo $_lang['prize_no_empty'];?>" />
<span class="ml_5 mr_5"><?php echo $_lang['split_cash'];?></span>
          	    <input class="" name="txt_prize1_cash" value="<?php if($release_info['txt_prize1_cash']) { ?><?php echo $release_info['txt_prize1_cash']?><?php } ?>" type="text" size="8" id="txt_prize1_cash" msgArea="span_prize1_cash"  title="<?php echo $_lang['prize_cash_title'];?>" onkeyup="clearstr(this)" limit="required:true;type:int;between:0-" msg="<?php echo $_lang['prize_no_empty'];?>" />
<span class=" ml_5 mr_5"><?php echo $_lang['yuan'];?></span>
<div id="span_prize1_cash"></div>
</div>
</div>

<div class="rowElem clearfix"  id="prize_2" <?php if(!$release_info['txt_prize2_num']) { ?>style="display:none"<?php } ?>>
        	<label class="grid_8"><strong><?php echo $_lang['prize_2'];?><?php echo $_lang['zh_mh'];?></strong></label>
           	<div class="grid_13 alpha">
   	   			<input class="" name="txt_prize2_num" value="<?php if($release_info['txt_prize2_num']) { ?><?php echo $release_info['txt_prize2_num']?><?php } ?>" type="text" size="3" id="txt_prize2_num" msgArea="span_prize2_cash"   onkeyup="clearstr(this)"
   			 limit="required:true;type:int;between:1-" msg="<?php echo $_lang['prize_no_empty'];?>" >
 <span class=" ml_5 mr_5"><?php echo $_lang['split_cash'];?></span>
          		<input class="" name="txt_prize2_cash" value="<?php if($release_info['txt_prize2_cash']) { ?><?php echo $release_info['txt_prize2_cash']?><?php } ?>" type="text" size="8" id="txt_prize2_cash" msgArea="span_prize2_cash"  title="<?php echo $_lang['prize_cash_title'];?>" onkeyup="clearstr(this)"
    	limit="required:true;type:int;between:0-" msg="<?php echo $_lang['prize_no_empty'];?>" />
<span class=" ml_5"><?php echo $_lang['yuan'];?></span>
<div id="span_prize2_cash"></div>
</div>
</div>
<div class="rowElem clearfix"  id="prize_3" <?php echo $release_info['txt_prize3_num']?>style="display:none"{/if}>
        	<label class="grid_8"><strong><?php echo $_lang['prize_3'];?><?php echo $_lang['zh_mh'];?></strong></label>
           	<div class="grid_13 alpha">
   	   			<input class="" name="txt_prize3_num" value="<?php if($release_info['txt_prize3_num']) { ?><?php echo $release_info['txt_prize3_num']?><?php } ?>" type="text" size="3" id="txt_prize3_num" msgArea="span_prize3_cash"   onkeyup="clearstr(this)"
   			 limit="required:true;type:int;between:1-" msg="<?php echo $_lang['prize_no_empty'];?>" />
<span class="ml_5 mr_5"><?php echo $_lang['split_cash'];?></span>
          		<input class="" name="txt_prize3_cash" value="<?php if($release_info['txt_prize3_cash']) { ?><?php echo $release_info['txt_prize3_cash']?><?php } ?>" type="text" size="8" id="txt_prize3_cash" msgArea="span_prize3_cash"  title="<?php echo $_lang['prize_cash_title'];?>" onkeyup="clearstr(this)"
    	limit="required:true;type:int;between:0-" msg="<?php echo $_lang['prize_no_empty'];?>"/>
<span class="ml_5"><?php echo $_lang['yuan'];?></span>
<div id="span_prize3_cash"></div>
</div>
</div>

<div class="rowElem clearfix po_re">
        	
<div class="grid_12 prefix_8">
<a class="button" name="add_prize"  id="add_prize" onclick="add();"><?php echo $_lang['add_prize'];?></a>
<a class="button" name="del_prize"  id="del_prize" onclick="del();"><?php echo $_lang['del_prize'];?></a>
</div>
</div>

</div>	

      <div class="rowElem clearfix po_re">
          <label class="grid_8"><strong><?php echo $_lang['task_round'];?><?php echo $_lang['zh_mh'];?></strong></label>
            <div class="grid_16 alpha">       
               <input name="txt_task_day"   onclick="showcalendar(event, this, 0)" size="25" value="<?php if($release_info['txt_task_day']) { ?><?php echo $release_info['txt_task_day']?><?php } else { ?><?php echo $default_max_day?><?php } ?>" type="text" id="txt_task_day" title="<?php echo $_lang['task_round_title'];?>:<?php echo $task_config['min_day'];?>,<?php echo $_lang['max_day'];?><?php echo $max_day?> <?php echo $_lang['day'];?>" msgArea="span_task_day" onkeyup="clearstr(this)"
   	limit="required:true;type:date;than:min;less:max" msg="<?php echo $_lang['task_round_msg'];?>" max=""    min_day = "<?php echo $task_config['min_day']?>" class="mr_5"/>             	
<span class="ml_5">年-月-日</span>
 <span id="span_task_day"></span>
 <div class="clear"></div>				 
</div>
        </div>


        <div class="rowElem clearfix po_re">
           <label class="grid_8"><strong><?php echo $_lang['cash_assign'];?><?php echo $_lang['zh_mh'];?></strong></label>
             <div class="grid_12"><strong><?php echo $_lang['m_reward'];?></strong></div>
        </div>
     </form>
    </div>
    <!--from表单 end-->
    <div class="step_button"> <button type="submit" name="is_submit" onclick="stepCheck_ext();" class="big button"><?php echo $_lang['next_step'];?></button></div>
   

<!--end 左边部分-->
<!--右边部分-->
  <!--  <div class="grid_7 omega alpha">
     	<div class=" prefix_1 suffix_1 pt_20">
       		<h3 class="font14b"><?php echo $_lang['what'];?><?php echo $model_info['model_name'];?>？ </h3>
         <p><?php echo kekezu::filter_input($model_info[model_desc]) ?><!--</p>
     	</div>
    </div> -->
<script type="text/javascript"> 
$(function(){
$("#txt_prize1_cash,#txt_prize1_num,#txt_prize2_cash,#txt_prize2_num,#txt_prize3_cash,#txt_prize3_num").keyup(function(){
$("#check_cash").removeClass("valid_error").html(" ");
})
})
function add(){
if($("#prize_2").is(":hidden")){ 
$("#prize_2").show();
}else{
$("#prize_3").show();
} 
} 
function del(){
if ($("#prize_3").is(":visible")) {
$("#prize_3").hide();
$("#txt_prize3_num").val('');
$("#txt_prize3_cash").val('');
}
else {
$("#prize_2").hide();
$("#txt_prize2_num").val('');
$("#txt_prize2_cash").val('');
}
}	
function stepCheck_ext(){ 	

var prize_1_price = Number($("#txt_prize1_cash").val()); 
var total_prize =prize_1_price ;
if($("#prize_2").is(":hidden")){
//$("#prize_2").remove();  
}	 
if($("#prize_3").is(":hidden")){
//$("#prize_3").remove();  
}	 

if ($("#prize_2").is(":visible")) {
var prize_2_price = Number($("#txt_prize2_cash").val()); 
total_prize += prize_2_price;
}
 
if ($("#prize_3").is(":visible")) { 
var prize_3_price = Number($("#txt_prize3_cash").val()); 
total_prize +=prize_3_price;
}

var total_cash = $("#txt_task_cash").val();

if(total_prize != total_cash){
//$("#txt_prize1_cash").focus();
$("#span_prize2_cash").removeClass("msg msg_ok");
$("#span_prize3_cash").removeClass("msg msg_ok");
$("#span_prize1_cash").removeClass("msg msg_ok").addClass("msg msg_error").html("<i></i><span><?php echo $_lang['no_equal'];?></span>");			
return false;
}else{
$("#span_prize1_cash").removeClass("msg msg_error").html(" ");			
}
stepCheck();
}


</script>
<!--end 右边部分-->
<script type="text/javascript" >
In('calendar'); 
</script>
<?php keke_tpl_class::ob_out();?>