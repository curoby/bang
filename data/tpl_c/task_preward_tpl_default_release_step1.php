<?php keke_tpl_class::checkrefresh('task/preward/tpl/default/release_step1', '1365694716' );?> <!--��߲���-->
 <!--  ���� start -->
    <div class="help_center" >
     	
     	<div id="help_center" class="help_detail hidden">
     		<h3><?php echo $_lang['what'];?><?php echo $model_info['model_name'];?>��</h3>
        <p><?php echo kekezu::filter_input($model_info['model_desc']) ?></p>
      	</div>
  
      	<div class="help_down ">
<a href="#" class="action_show">����˵��<span class="arrow_b"></span></a>
</div>
</div>
 <!--  ���� end -->

  
  <!--from�� start-->
   <div class="form_box clearfix box border_n">
      <!-- <div class="form_tip">
        <h5 class="font14b t_c" style="color:#7caf22"><?php echo $model_info['model_name'];?><?php echo $_lang['task_process'];?></h5>
       <!--�Ƽ�����-single-->
<!-- <div class="min_step all_6 step_orange mb_10 ml_30">
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
<input type="hidden" name="min" value="<?php echo $min?>" id="min">
<input type="hidden" name="max" value="<?php if($release_info['max']) { ?><?php echo $release_info['max'];?><?php } else { ?><?php echo $default_max_day;?><?php } ?>" id="max">
  	<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
        <div class="rowElem clearfix po_re">
          <label class="grid_8"><strong><?php echo $_lang['budget'];?><?php echo $_lang['zh_mh'];?></strong></label>
           <div class="grid_13">
              <input class="" name="txt_task_cash" value="<?php if($release_info['txt_task_cash']) { ?><?php echo $release_info['txt_task_cash']?><?php } else { ?><?php echo $task_config['min_cash']?><?php } ?>" type="text" id="txt_task_cash" msgArea="span_task_cash"  title="<?php echo $_lang['mtask_cash_title'];?><?php echo $task_config['min_cash'];?><?php echo $_lang['yuan'];?>" onkeyup="clearstr(this)"
    limit="required:true;type:int;between:<?php echo $task_config['min_cash'];?>-" msg="<?php echo $_lang['mtask_cash_msg'];?><?php echo $task_config['min_cash'];?><?php echo $_lang['yuan'];?>" onblur="getMaxDday(this.value)"/> 
<span class="ml_5 "><?php echo $_lang['yuan'];?></span>
<span id="span_task_cash" class="ml_5"></span>
           </div>
        </div>

      <div class="rowElem clearfix po_re">
          <label class="grid_8"><strong><?php echo $_lang['task_round'];?><?php echo $_lang['zh_mh'];?></strong></label>
            <div class="grid_13">
       
               <input name="txt_task_day"   onclick="showcalendar(event, this, 0)" size="20" value="<?php if($release_info['txt_task_day']) { ?><?php echo $release_info['txt_task_day']?><?php } else { ?><?php echo $default_max_day?><?php } ?>" type="text" id="txt_task_day" title="<?php echo $_lang['task_round_title'];?>:<?php echo $task_config['min_day'];?><?php echo $_lang['day'];?>,<?php echo $_lang['max_day'];?><?php echo $max_day?>" msgArea="span_task_day" onkeyup="clearstr(this)"
   	limit="required:true;type:date;than:min;less:max" msg="<?php echo $_lang['task_round_msg'];?>" max=""  min_day="<?php echo $task_config['min_day']?>"/> 
            	<span class="ml_5">��-��-��</span>
 <span id="span_task_day"  class="ml_5"></span>
 
</div>
        </div>

<div class="rowElem clearfix po_re">
           <label class="grid_8"><strong><?php echo $_lang['need_work'];?><?php echo $_lang['zh_mh'];?></strong></label>
             <div class="grid_13">
             	<input name="txt_work_count" value="<?php if($release_info['txt_work_count']) { ?><?php echo $release_info['txt_work_count']?><?php } else { ?>1<?php } ?>" type="text" id="txt_work_count" title="<?php echo $_lang['need_work_title'];?><?php echo $_lang['zh_mh'];?>1" msgArea="span_work_count" onkeyup="clearstr(this)"
   	limit="required:true;type:int;between:1-" msg="<?php echo $_lang['need_work_msg'];?>"/>
<span class="ml_5 "><?php echo $_lang['ge'];?></span>
            	<span id="span_work_count"  class="ml_5"></span>
             </div>
        </div>
        <div class="rowElem clearfix po_re">
           <label class="grid_8"><strong><?php echo $_lang['single_cash'];?><?php echo $_lang['zh_mh'];?></strong></label>
             <div class="grid_13">
             	<input name="txt_single_cash" value="{if <?php echo $release_info['txt_single_cash']?>}{/if}" type="text" id="txt_single_cash" title="<?php echo $_lang['single_cash_title'];?>" msgArea="span_single_cash"
limit="required:true;type:float" msg="<?php echo $_lang['single_cash_msg'];?>" readonly="readonly"/>
<span class="ml_5"><?php echo $_lang['yuan'];?></span>
<span id="span_single_cash"  class="ml_5"></span>
             </div>
        </div>
     </form>
    </div>
    <!--from�� end-->
    <div class="step_button"> <button type="submit" name="is_submit" onclick="stepCheck();" class="big button"><?php echo $_lang['next_step'];?></button></div>
   

<!--end ��߲���-->
<!--�ұ߲���-->
  <!-- <div class="grid_7 omega alpha">
     <div class=" prefix_1 suffix_1 pt_20">
       <h3 class="font14b"><?php echo $_lang['what'];?><?php echo $model_info['model_name'];?>�� </h3>
         <p>{eval echo kekezu::filter_input(<?php echo $model_info['model_desc']?>)}</p>
     </div>
    </div>-->
<!--end �ұ߲���-->
<script type="text/javascript">
$(function(){
check_single_cash();	
$("#txt_task_cash").keyup(function(){
check_single_cash();
});	
$("#txt_work_count").keyup(function(){
check_single_cash();
})
})

function check_single_cash(){
var totle_cash = Number($("#txt_task_cash").val())+0;
var work_count = Number($("#txt_work_count").val())+0;
var single_cash = 0;
if(work_count){
single_cash = parseFloat(totle_cash/work_count);
single_cash = formatnumber(single_cash,2);			
}
$("#txt_single_cash").val(single_cash);
}

function formatnumber(value,num){
var a,b,c,i
a = value.toString();
b = a.indexOf('.');
c = a.length;
if(b!=-1){
if(num>0){
a = a.substring(0,b+num+1);
for (i=c;i<=b+num;i++){
a = a + "0";
}				
}else{
a = a + ".";
for (i=1;i<=num;i++){
a = a + "0";
}				
}
}		
return Number(a);
}
</script>
<script type="text/javascript" >
In('calendar');
</script>
<?php keke_tpl_class::ob_out();?>