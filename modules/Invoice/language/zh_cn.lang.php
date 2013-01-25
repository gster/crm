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
  'LBL_MODULE_NAME' => '发货单',
  'LBL_SO_MODULE_NAME' => '发货单',
  'LBL_RELATED_PRODUCTS' => '系列产品',
  'LBL_MODULE_TITLE' => '发货单：首页',
  'LBL_SEARCH_FORM_TITLE' => '查找发货单',
  'LBL_LIST_FORM_TITLE' => '发货单列表',
  'LBL_LIST_SO_FORM_TITLE' => '销售订单列表',
  'LBL_NEW_FORM_TITLE' => '新增发货单',
  'LBL_NEW_FORM_SO_TITLE' => '新增销售订单',
  'LBL_MEMBER_ORG_FORM_TITLE' => '所属单位',

'LBL_LIST_ACCOUNT_NAME' => '客户名称',
  'LBL_LIST_CITY' => '城市',
  'LBL_LIST_WEBSITE' => '网站',
  'LBL_LIST_STATE' => '省份',
  'LBL_LIST_PHONE' => '电话',
  'LBL_LIST_EMAIL_ADDRESS' => 'Email地址',
  'LBL_LIST_CONTACT_NAME' => '联系人姓名',

//DON'T CONVERT THESE THEY ARE MAPPINGS
'db_name' => 'LBL_LIST_ACCOUNT_NAME',
'db_website' => 'LBL_LIST_WEBSITE',
'db_billing_address_city' => 'LBL_LIST_CITY',

//END DON'T CONVERT

 'LBL_ACCOUNT' => '客户：',
  'LBL_ACCOUNT_NAME' => '客户名称：',
  'LBL_PHONE' => '电话：',
  'LBL_WEBSITE' => '网站：',
  'LBL_FAX' => '传真：',
  'LBL_TICKER_SYMBOL' => '股票代码：',
  'LBL_OTHER_PHONE' => '其它电话：',
  'LBL_ANY_PHONE' => '其它电话：',
  'LBL_MEMBER_OF' => '上级单位：',
  'LBL_EMAIL' => 'Email：',
 'LBL_EMPLOYEES' => '员工数：',
  'LBL_OTHER_EMAIL_ADDRESS' => '其它Email：',
  'LBL_ANY_EMAIL' => '其它Email：',
  'LBL_OWNERSHIP' => '所有制：',
  'LBL_RATING' => '评价：',
  'LBL_INDUSTRY' => '行业：',
  'LBL_SIC_CODE' => '行业编码：',
  'LBL_TYPE' => '类型：',
  'LBL_ANNUAL_REVENUE' => '年营业额：',
  'LBL_ADDRESS_INFORMATION' => '地址信息',
  'LBL_Quote_INFORMATION' => '客户信息',
  'LBL_CUSTOM_INFORMATION' => '自定义信息',
  'LBL_BILLING_ADDRESS' => '付款地址：',
  'LBL_SHIPPING_ADDRESS' => '收货地址：',
  'LBL_ANY_ADDRESS' => '任一地址：',
 'LBL_CITY' => '城市：',
  'LBL_STATE' => '省份：',
  'LBL_POSTAL_CODE' => '邮政编码：',
  'LBL_COUNTRY' => '国家：',
 'LBL_DESCRIPTION_INFORMATION' => '详细信息',
  'LBL_DESCRIPTION' => '描述：',
  'LBL_TERMS_INFORMATION' => '条款与条件',
  'NTC_COPY_BILLING_ADDRESS' => '复制付款地址到收货地址',
  'NTC_COPY_SHIPPING_ADDRESS' => '复制收货地址到付款地址',
  'NTC_REMOVE_MEMBER_ORG_CONFIRMATION' => '您确定要删除这条记录吗？',
  'LBL_DUPLICATE' => '可能有重复的客户',
  'MSG_DUPLICATE' => '创建这个客户可能与现有的数据重复。你可以选择客户列表中的客户复制创建新的记录，以继承它相关的数据。',

 'LBL_INVITEE' => '联系人',
  'ERR_DELETE_RECORD' => '删除这个客户必须指定这个客户的记录编号。',
  'LBL_SELECT_ACCOUNT' => '选择客户',
  'LBL_GENERAL_INFORMATION' => '一般信息',

//for v4 release added
 'LBL_NEW_POTENTIAL' => '新增销售机会',
  'LBL_POTENTIAL_TITLE' => '销售机会',

 'LBL_NEW_TASK' => '新增任务',
  'LBL_TASK_TITLE' => '任务',
  'LBL_NEW_CALL' => '新增电话',
  'LBL_CALL_TITLE' => '电话',
  'LBL_NEW_MEETING' => '新增会议',
  'LBL_MEETING_TITLE' => '会议',
  'LBL_NEW_EMAIL' => '撰写新邮件',
  'LBL_EMAIL_TITLE' => '邮件',
  'LBL_NEW_CONTACT' => '新增联系人',
  'LBL_CONTACT_TITLE' => '联系人',

//Added vtiger_fields after RC1 - Release
 'LBL_ALL' => '全部',
  'LBL_PROSPECT' => '潜在客户',
  'LBL_INVESTOR' => '投资商',
  'LBL_RESELLER' => '经销商',
  'LBL_PARTNER' => '合作伙伴',

// Added for 4GA
  'LBL_TOOL_FORM_TITLE' => '客户工具',
//Added for 4GA
'Subject' => '标题',
  'Quote Name' => '报价单名称',
  'Vendor Name' => '供应商名称',
  'Invoice Terms' => '发货单条款',
 'Contact Name' => '联系人姓名',//to include contact name vtiger_field in Invoice
 'Invoice Date' => '开发货单日期',
'Sub Total' => '小计',
'Issued Date' => '发布日期',
  'Due Date' => '交付日期',
  'Carrier' => '物流公司',
  'Type' => '类型',
  'Sales Tax' => '销售税',
  'Sales Commission' => '销售佣金',
  'Excise Duty' => '营业税',
  'Total' => '合计 ',
  'Product Name' => '产品名称',
 'Assigned To' => '负责人',
  'Billing Address' => '付款地址',
  'Shipping Address' => '收货地址',
'Billing City' => '付款城市',
  'Billing State' => '付款省份',
  'Billing Code' => '付款邮政编码',
  'Billing Country' => '付款国家',
  'Billing Po Box' => '付款邮政信箱',
'Shipping Po Box' => '收货邮政信箱',
'Shipping City' => '收货城市',
  'Shipping State' => '收货省份',
'Shipping Code' => '收货邮政编码',
  'Shipping Country' => '收货国家',
'City' => '城市',
  'State' => '省份',
  'Code' => '邮政编码',
  'Country' => '国家',
  'Created Time' => '创建时间',
  'Modified Time' => '修改时间',
  'Description' => '描述',
  'Potential Name' => '销售机会名称',
  'Customer No' => '客户编号',
  'Sales Order' => '销售订单',
  'Notes' => '备忘录',
  'Pending' => '等待',
  'Account Name' => '客户名称',
  'Terms & Conditions' => '条款与条件',
//Quote Info
 'LBL_INVOICE_INFORMATION' => '发货单信息',
  'LBL_INVOICE' => '发货单：',
  'LBL_SO_INFORMATION' => '销售订单信息',
  'LBL_SO' => '销售订单：',

//Added in release 4.2
 'LBL_SUBJECT' => '主题：',
  'LBL_SALES_ORDER' => '销售订单：',
  'Invoice Id' => '发货单编号',
  'LBL_MY_TOP_INVOICE' => '未处理的发货单',
  'LBL_INVOICE_NAME' => '发货单名称：',
  'Purchase Order' => '采购订单',
  'Status' => '状态',
  'Id' => '发货单编号',
  'Invoice' => '发货单',

//Added for existing Picklist Entries
'AutoCreated'=>'自动创建', 
  'Created' => '已创建',
  'Approved' => '已审批',
  'Sent' => '已寄送',
  'Credit Invoice' => '抵扣发票',
  'Paid' => '已付款',
//Added to Custom Invoice Number
'Invoice No'=>'发货单编号',
'Adjustment'=>'调整',
//Added for Reports (5.0.4)
'Tax Type'=>'税的类型',
'Discount Percent'=>'折扣百分比',
'Discount Amount'=>'折扣金额',
'Terms & Conditions'=>'条款与条件',
'No'=>'编号',
'Date'=>'日期',

// Added affter 5.0.4 GA
//Added for Documents module
'Documents'=>'文档',
'SINGLE_Invoice'=>'发货单',
'Invoice ID'=>'发货单 ID',
);

?>
