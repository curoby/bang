<?php
/**
 * 单人悬赏任务配置页语言包
 * 数组键的定义:
 * 单词与单词之间必须用下划线来连接,首字母必须用小写，适用于所有的lang数组；
 * @version kppw2.0
 * @author xl
 */
$lang = array(
/*task_config.php*/
	'edit_successfully'=>'修改成功!',
	'edit_fail'=>'修改失败！',
	'edit_rights_config_successfully'=>'权限配置修改成功',
	'edit_single_reward_task'=>'修改了单人悬赏任务的',
/*task_control.htm*/
	'task_conmission_tactic'=>'任务佣金策略',
	'task_auditing_cash_set'=>'任务审核金额设定',
	'txt_task_auditing_cash_msg'=>'填写正确任务审核金额',
	'txt_task_auditing_cash_title'=>'任务审核金额允许小数',
	'task_cash_notice'=>'(大于这个金额的任务不需要审核，否则需要管理员审核)',
	'set_task_min_cash'=>'任务最小金额设定',
	'task_min_cash_msg'=>'任务最小金额填写错误',
	'task_min_cash_title'=>'任务最小金额为可以含小数',
	'task_min_cash_notice'=>'(任务的最小金额为大于零正整数)',
	'task_deduct_rate'=>'任务提成比例',
	'task_deduct_rate_msg'=>'任务提成比例值为正整数，长度：1-3',
	'task_deduct_rate_title'=>'任务提成比例值为正整数,0-100',
	'deduct_rate_from_fail_task'=>'任务失败返金抽成比例',
	'fail_task_deduct_rate_msg'=>'任务失败返金提成比例值为正整数，长度：1-3',
	'fail_task_deduct_rate_title'=>'任务失败返金提成比例值为正整数,0-100',
	'task_automate_choose'=>'任务自动选稿',
	'task_automate_choose_msg'=>'请填写分配人数',
	'task_automate_choose_title'=>'请填写平分人数!',
	'task_automate_choose_notice'=>'(设置前x人中标平分佣金,不填写则默认关闭)',
	'deal_fail_task'=>'任务失败处理',
	'return_cash'=>'返还现金',
	'return_credit'=>'返还代金券',
	'deal_fail_task_notice'=>'(扣除拥金后的钱)',
	'set_task_time_rule'=>'任务时间规则设定',
	'time_rule'=>'时间规则',
	'check_min_cash_rule'=>'请仔细填写规则允许最小金额',
	'yuan_over'=>'元以上',
	'time_rule_day_msg'=>'天数必须为大于1的整数',
	'time_rule_day_title'=>'请仔细填写天数，不得少于1天',
	'hand_work_time_limit'=>'交稿间隔',
	'hand_work_time_limit_msg'=>'交稿间隔时间输入不对',
	'hand_work_time_limit_title'=>'输入交稿间隔时间',
	'minutes'=>'分钟',
	'delete_rule'=>'删除规则',
	'add_rule'=>'添加规则',
	'task_public_time'=>'任务公示期时间',
	'task_public_time_msg'=>'公示期时间不对,长度:1',
	'task_public_time_title'=>'任务公示期最小时间为1天',
	'task_public_time_notice'=>'天（最小值为1天）',
	'task_min_day'=>'任务最少天数',
	'task_min_day_msg'=>'任务最小时间不对,最少1天',
	'task_min_day_title'=>'任务最小时间为1天',
	'task_vote_time'=>'任务投票期时间',
	'task_vote_time_msg'=>'投票期时间不对,长度:1',
	'task_vote_time_title'=>'任务投票期最小时间为1天',
	'task_vote_time_notice'=>'天（任务没有定稿时，通过投票决定，不得少于1天）',
	'limit_new_register_user_vote_time'=>'新注册用户投票时间限制:',
	'new_register_user_vote_time_msg'=>'新注册用户投票时间限制时间不对',
	'new_register_user_vote_time_title'=>'可以对新注册用户不做投票时间限制',
	'new_register_user_vote_time_notice'=>'小时（0为不作限制）',
	'set_choose_time'=>'选稿时间设置',
	'choose_time_msg'=>'选稿时间输入有误',
	'choose_time_title'=>'任务选稿时间最少为1天，最多20天',
	'choose_time_notice'=>'天(任务选稿时间最少为1天，最多20天)',
	'choose_in_doing'=>'进行中选稿',
	'set_delay_rule'=>'延期规则设定',
	'delay_min_cash'=>'延期最小金额',
	'delay_min_cash_msg'=>'每次延期金额最少金额填写错误',
	'delay_min_cash_title'=>'任务延期最少金额为1元',
	'limit_delay_day'=>'延期天数限制',
	'delay_day_msg'=>'每次最大延期天数不正确',
	'delay_day_title'=>'任务最大延期天数不得小于2天',
	'max_delay'=>'最大延期',
	'set_delay'=>'延期设置',
	'affect_extent_price'=>'影响力价格:',
	'affect_extent_rule'=>'影响力区间规则:',
	'effect_rule_day_msg'=>'影响力对应金额不得为空',
	'effect_rule_day_title'=>'请仔细填写影响力金额。',
	'delay_rule_notice'=>'不低于悬赏总金额的',
	'delay_rule_msg'=>'比例填写错误',
	'delay_rule_title'=>'任务延期比例为0-100',
	'set_deliver'=>'交付设定',
	'sign_default_agreement_time'=>'协议默认签署时间',
	'confirm_default_agreement_time'=>'协议默认确认时间',
	'default_agreement_time_notice'=>'超过此期限未签署协议的默认为已签署',
	'confrim_agreement_time_notice'=>'超过此期限未完成的协议自动结算。',
	'set_task_comment'=>'任务评论设置',
	'if_public'=>'是否公开',
	'if_public_checkbox'=>'(勾选则评论在任务进行中隐藏，任务结束公开)',
	'save_config'=>'保存设置',
	'task_choose_days'=>'任务选稿天数:',
	'fans_extent_price'=>'粉丝区间价格:',
	'fans_extent_rule'=>'粉丝区间规则:',

/*task_priv.htm*/
	'project_name'=>'项目名称',
	'user_status'=>'用户身份',
	'limit_count'=>'次数限制',
/*task_config.htm*/
	'if_change_model_status'=>'是否为私有模型',
	'model_status_notice'=>'(私有模型不会出现在发布任务的选择列表上)',
	'bind_industry'=>'指定行业',
	'choose_industry'=>'选择行业',
	'choose_industry_nitice'=>'(如果指定行业后,则任务的行业类型将是这里指定行业类型；如果不指定行业，则任务类型将是系统指定的所有行业类型.)',
	'model_synopsis'=>'模型简介',
	'model_synopsis_notice'=>'(限50字节)',
	'model_description'=>'模型描述',
	'edit_time_last_time'=>'上次修改时间',
	'no_delete_the_first_rule'=>'第一条规则不能被删除!',
	'add_cash_rul_day_msg'=>'天数不能为空! 天数的长度1-2',
	' persist '=>'持续',
	'task_min_cash_show'=>'任务最小金额不正确，长度2-5',
	'add_adjourn_rul_msg'=>'百分比不能为空！',

);