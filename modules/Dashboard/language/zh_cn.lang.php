<?php
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Public License Version 1.1.2
 * ("License"); You may not use this file except in compliance with the
 * License. You may obtain a copy of the License at http://www.sugarcrm.com/SPL
 * Software distributed under the License is distributed on an  "AS IS"  basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License for
 * the specific language governing rights and limitations under the License.
 * The Original Code is:  SugarCRM Open Source
 * The Initial Developer of the Original Code is SugarCRM, Inc.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.;
 * All Rights Reserved.
 * Contributor(s): ______________________________________.
 ********************************************************************************/
 
$mod_strings = Array(
'LBL_SALES_STAGE_FORM_TITLE' => '销售阶段分布',
  'LBL_SALES_STAGE_FORM_DESC' => '显示选择的销售阶段、用户累计销售机会金额在指定期间內预测要结案.',
  'LBL_MONTH_BY_OUTCOME' => '按月对外销售机会统计',
  'LBL_MONTH_BY_OUTCOME_DESC' => '显示选择的用户于指定期间的对外按月累计销售机会，对外指的是根据销售阶段判断优劣.',
  'LBL_LEAD_SOURCE_FORM_TITLE' => '潜在客户来源分布',
  'LBL_LEAD_SOURCE_FORM_DESC' => '显示选择的用户潜在客户来源的累计销售机会金额.',
  'LBL_LEAD_SOURCE_BY_OUTCOME' => '由潜在客户来源显示所有对外销售机会',
  'LBL_LEAD_SOURCE_BY_OUTCOME_DESC' => '显示选择的潜在客户来源于指定期间的对外按月累计销售机会，对外指的是根据销售阶段判断优劣.',
  'LBL_PIPELINE_FORM_TITLE_DESC' => '显示预期在指定期间结案的销售机会金额.',
 'LBL_DATE_RANGE' => '日期范围从',
  'LBL_DATE_RANGE_TO' => '到',
  'ERR_NO_OPPS' => '请新增销售机会，然后才能看到销售机会图.',
  'LBL_TOTAL_PIPELINE' => '总数 ',
  'LBL_ALL_OPPORTUNITIES' => '销售机会金额',
'LBL_OPP_SIZE' => '预算在1万元以下的销售机会',
  'LBL_OPP_SIZE_VALUE' => '1K',
'NTC_NO_LEGENDS' => '无',
  'LBL_LEAD_SOURCE_OTHER' => '其它',
  'LBL_EDIT' => '编辑',
  'LBL_REFRESH' => '更新',
  'LBL_CREATED_ON' => '最后执行 ',
  'LBL_OPPS_IN_STAGE' => '销售机会的销售阶段',
  'LBL_OPPS_IN_LEAD_SOURCE' => '销售机会的潜在客户来源',
  'LBL_OPPS_OUTCOME' => '销售机会的支出',
  'LBL_USERS' => '用户：',
  'LBL_SALES_STAGES' => '销售阶段：',
  'LBL_LEAD_SOURCES' => '潜在客户来源：',
'LBL_DATE_START' => '开始日期：',
'LBL_DATE_END' => '结束日期：',
//Added for 5.0 
 'LBL_NO_PERMISSION' => '您没有权限查看这个模块的统计图',
  'LBL_NO_PERMISSION_FIELD' => '您没有权限查看这个模块/字段的统计图',

  'leadsource' => '潜在客户来源统计图',
  'leadstatus' => '潜在客户状态统计图',
  'leadindustry' => '潜在客户行业统计图',
  'salesbyleadsource' => '按潜在客户来源显示业绩',
  'salesbyaccount' => '按客户显示业绩',
  'salesbyuser' => '按用户显示业绩',
  'salesbyteam' => '按团队显示业绩',
  'accountindustry' => '按产业显示客户',
  'productcategory' => '按类别显示产品',
  'productbyqtyinstock' => '按库存数量显示产品',
  'productbypo' => '按采购订单显示产品',
  'productbyquotes' => '按报价单显示产品',
  'productbyinvoice' => '按发货单显示产品',
  'sobyaccounts' => '按客户显示销售订单',
  'sobystatus' => '按状态显示销售订单',
  'pobystatus' => '按状态显示采购订单',
  'quotesbyaccounts' => '按客户显示报价单',
  'quotesbystage' => '按销售阶段显示报价单',
  'invoicebyacnts' => '按公司显示发货单',
  'invoicebystatus' => '按状态显示发货单',
  'ticketsbystatus' => '按状态显示故障单',
  'ticketsbypriority' => '按优先级显示故障单',
  'ticketsbycategory' => '按类别显示故障单',
  'ticketsbyuser' => '按用户显示故障单',
  'ticketsbyteam' => '按团队显示故障单',
  'ticketsbyproduct' => '按产品显示故障单',
  'contactbycampaign' => '按营销活动显示联系人',
  'ticketsbyaccount' => '按客户显示故障单',
  'ticketsbycontact' => '按联系人显示故障单',

'LBL_DASHBRD_HOME'=>'统计图表',
  'LBL_HORZ_BAR_CHART' => '水平柱状图',
  'LBL_VERT_BAR_CHART' => '垂直柱状图',
'LBL_PIE_CHART'=>'饼图',
  'LBL_NO_DATA' => '没有可用数据',
'DashboardHome'=>'统计图表',
  'GRIDVIEW' => '网格视图',
  'NORMALVIEW' => '正常视图',
  'VIEWCHART' => '查看图表',
  
'LBL_DASHBOARD' => '统计图',

// Added/Updated for vtiger CRM 5.0.4
"Approved"=>"已审批",
"Created"=>"已创建",
"Cancelled"=>"已取消",
"Delivered"=>"已发送",
"Received Shipment"=>"已到货",
"Sent"=>"已寄送",
"Credit Invoice"=>"抵扣发票",
"Paid"=>"已付款",
"Un Assigned"=>"未分配",
"Cold Call"=>"陌生拜访",
"Existing Customer"=>"老客户",
"Self Generated"=>"自动产生",
"Employee"=>"员工",
"Partner"=>"合作伙伴",
"Public Relations"=>"公共关系",
"Direct Mail"=>"邮件营销",
"Conference"=>"研讨会",
"Trade Show"=>"贸易展览",
"Web Site"=>"网站",
"Word of mouth"=>"口碑",
"Other"=>"其他",
"--None--"=>"无",
"Attempted to Contact"=>"尝试接触",
"Cold"=>"关系冷淡",
"Contact in Future"=>"即将联系",
"Contacted"=>"联系中",
"Hot"=>"熟络",
"Junk Lead"=>"没有潜在价值",
"Lost Lead"=>"丢失的潜在客户",
"Not Contacted"=>"没有联系",
"Pre Qualified"=>"基本合格",
"Qualified"=>"合格",
"Warm"=>"很好",
"Apparel"=>"服装",
"Banking"=>"银行",
"Biotechnology"=>"生物",
"Chemicals"=>"化工",
"Communications"=>"交通",
"Construction"=>"建筑",
"Consulting"=>"咨询",
"Education"=>"教育",
"Electronics"=>"电子",
"Energy"=>"能源",
"Engineering"=>"工程",
"Entertainment"=>"娱乐",
"Environmental"=>"环保",
"Finance"=>"金融",
"Food &amp; Beverage"=>"饮食",
"Government"=>"政府",
"Healthcare"=>"保健",
"Hospitality"=>"医院",
"Insurance"=>"保险",
"Machinery"=>"机械",
"Manufacturing"=>"制造业",
"Media"=>"媒体",
"Not For Profit"=>"非盈利机构",
"Recreation"=>"休闲",
"Retail"=>"零售",
"Shipping"=>"航运",
"Technology"=>"科技",
"Telecommunications"=>"电信",
"Transportation"=>"运输",
"Utilities"=>"公共事业",
"Hardware"=>"硬件",
"Software"=>"软件",
"CRM Applications"=>"CRM 应用",
"Open"=>"打开",
"In Progress"=>"处理中",
"Wait For Response"=>"等待回应",
"Closed"=>"关闭",
"Low"=>"低",
"Normal"=>"一般",
"High"=>"高",
"Urgent"=>"紧急",
"Big Problem"=>"大问题",
"Small Problem"=>"小问题",
"Other Problem"=>"其他问题",
"Accepted"=>"已接受",
"Rejected"=>"已拒绝",
'Prospecting'=>'初期沟通',
'Qualification'=>'立项评估',
'Needs Analysis'=>'需求分析',
'Value Proposition'=>'方案制订',
'Id. Decision Makers' => '辨识决策者',
'Perception Analysis' => '感性分析',
'Proposal/Price Quote'=>'投标/报价',
'Negotiation/Review'=>'谈判/回顾',
'Closed Won'=>'成功结案',
'Closed Lost'=>'失败结案',


);

?>
