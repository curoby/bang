<?php keke_tpl_class::checkrefresh('task/sreward/tpl/default/release_step2', '1365694734' );?><!--内容部分-->
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

    <div class="pad10">
        <!--from表单 start-->
        <div class="form_box clearfix box border_n">
         <form action="<?php echo $basic_url;?>" method="post" name="frm_step2" id="frm_step2">
  	<input type="hidden" name="step2" value="step2">
  	<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">

                <div class="rowElem clearfix">
                    <label class="grid_7">
                        <strong><?php echo $_lang['industry'];?><?php echo $_lang['zh_mh'];?></strong>
                    </label>
                   <div class="grid_16">
                    <select name="indus_pid" id="indus_pid" title="<?php echo $_lang['select_industry'];?>"  onchange="showTaskIndus(this.value)" limit = "required:true;between:5-10" msg = '<?php echo $_lang['industry_no_choose'];?>' msgArea="span_indus">
                            <option value=""><?php echo $_lang['select_industry'];?></option>
                      		<?php if(is_array($indus_p_arr)) { foreach($indus_p_arr as $v) { ?>
 <option value="<?php echo $v['indus_id'];?>" <?php if($release_info['indus_pid']==$v['indus_id']) { ?>selected<?php } ?>><?php echo $v['indus_name'];?></option>
<?php } } ?> 
</select>
 
                    <span  id="reload_indus">
                        <select name="indus_id" id="indus_id"  limit = "required:true;between:5-10" msg='<?php echo $_lang['industry_z_no_choose'];?>' title='<?php echo $_lang['choose_part'];?>' msgArea="span_indus"><span id="span_indus"></span>
                            <option value=""><?php echo $_lang['choose_part'];?></option>
<?php if($release_info['indus_id']) { ?>
<?php if(is_array($indus_arr)) { foreach($indus_arr as $k => $v) { ?>
                           		 <option value="<?php echo $v['indus_id'];?>" <?php if($release_info['indus_id']==$v['indus_id']) { ?>selected<?php } ?>><?php echo $v['indus_name'];?></option>
<?php } } ?>
<?php } ?>
                        </select>
                    </span>
<span class="cc00 ml_5 mr_5">*</span>
<span id="span_indus"></span>
</div>
                </div>
                <div class="rowElem  clearfix">
                            <label class="grid_7">
                                <strong><?php echo $_lang['title'];?><?php echo $_lang['zh_mh'];?></strong>
                            </label>
                            <div class="grid_16">
                                <input name="txt_title" id="txt_title" type="text" value="<?php echo kekezu::escape($release_info['txt_title']) ?>" title="<?php echo $_lang['txt_title'];?>" size="34" msgArea="span_title"
                                limit="required:true;len:5-50" msg="<?php echo $_lang['msg_title'];?>" maxlength="50" style="width:375px" class="mr_5"/>
<span class="cc00 mr_5">*</span>
                                <span id="span_title"><?php echo $_lang['span_title'];?></span>
                            </div>
                            
                    </div>
               
<div class="rowElem clearfix">
                    <label class="grid_7">
                        <strong><?php echo $_lang['need'];?><?php echo $_lang['zh_mh'];?></strong>
                    </label>
                    <div class="grid_10 ">
                        <textarea style="width:100%" rows="12" name="tar_content" title="<?php echo $_lang['textarea_title'];?>" id="tar_content" msgArea="msg_content" 
class="xheditor {tools:'Bold,Fontface,FontColor,Italic,Underline,Strikethrough,Align,List,Outdent,Indent,Link,Unlink,Table',skin:'nostyle'}"><?php echo kekezu::escape($release_info['tar_content']) ?></textarea>
                       
<script type="text/javascript" src="resource/js/xheditor/xheditor.js"></script>
<script type="text/javascript">
 $(function(){
 	editor = $("#tar_content").xheditor();
 })
</script>
                    </div>
<div class="grid_6">
<span class="cc00 mr_5">*</span>
<span id="msg_content"></span>
</div>
                </div>
               
<div class="rowElem clearfix lit_form mb_10 border_n ">
                            <label class="grid_7">
                                <strong><?php echo $_lang['upload'];?><?php echo $_lang['zh_mh'];?></strong>
                            </label>
                            <!--上传内容-->
                            <div class="grid_16 po_re">
                                <input type="file" class="file" name="upload" id="upload">
                                <div class="po_ab" style="left:150px;top:5px;">
                                    <span style="line-height:15px;" class="ws_prewrap mr_20">最多可添加5个附件</span>
                                    <a href="javascript:void();" class="file_type" title="<ol class='t_l'><li><?php echo $_lang['upload_title'];?><?php echo $basic_config['max_size'];?>M.</li><li><?php echo $_lang['upload_style'];?> <?php echo $ext_show;?></li></ol>">无法上传?</a>
                                </div>
                                    <input type="hidden" name="file_ids" id="file_ids">
                            </div> 
                           
                            <script type="text/javascript">
                                    $(function(){
                                        uploadify({
                                                auto:true,
                                                size:"<?php echo $basic_config['max_size'];?>MB",
                                                exts:'<?php echo $ext_types;?>',
                                                limit:5}
                                            );
                                    })
                            </script>
                            <script src="resource/js/uploadify/jquery.uploadify-3.1.min.js" type="text/javascript"></script>
<link href="resource/js/uploadify/uploadify.css" rel="stylesheet">
                            <!--end 上传内容-->
                    </div> 
              
 <div class="rowElem clearfix">
                    <label class="grid_7">
                        <strong><?php echo $_lang['contact'];?><?php echo $_lang['zh_mh'];?></strong>
                    </label>
                    <div class="grid_16">
                        <input name="txt_mobile" id="contact_mobile" type="text" value="<?php if($release_info['txt_mobile']) { ?><?php echo $release_info['txt_mobile']?><?php } else { ?><?php echo $user_info['mobile']?><?php } ?>" 
 title="<?php echo $_lang['mobile_title'];?>" size="34" msgArea="span_mobile"
limit="required:true;type:mobileCn" msg="<?php echo $_lang['mobile_msg'];?>" maxlength="50"  class="mr_5"/>
                       <span class="cc00" id="span_mobile">*</span>
                    </div>
                     
                </div>			
            </form>
        </div><!--from表单 end-->
        <div class="step_button">
            <button type="submit" name="is_submit" onclick="stepCheck();" class="big button"><?php echo $_lang['next_step'];?></button>
            <span class="block"><input type="checkbox" name="agreement" id="agreement" checked>
                <label>
                    <?php echo $_lang['agree'];?>《<a href="" target="_blank" class="agreement_link"><?php echo $_lang['agreement'];?></a>》
                </label>
            </span>
        </div>
    </div>
<div class="agreement_part clearfix" style="display:none;">
  <p><?php keke_loaddata_class::readtag('任务发布协议') ?></p>
</div>

<!--end 内容部分-->
<?php keke_tpl_class::ob_out();?>