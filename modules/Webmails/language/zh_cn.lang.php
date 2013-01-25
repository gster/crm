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
'LBL_MODULE_NAME'=>'WebMail',
'LBL_MODULE_TITLE'=>'WebMail: 首页',
  'LBL_SEARCH_FORM_TITLE' => '查找Email',
  'LBL_LIST_FORM_TITLE' => 'Email列表',
  'LBL_NEW_FORM_TITLE' => '追踪Email',

 'LBL_LIST_SUBJECT' => '主题',
  'LBL_LIST_CONTACT' => '联系人',
  'LBL_LIST_RELATED_TO' => '相关对象',
  'LBL_LIST_DATE' => '发送日期',
  'LBL_LIST_TIME' => '发送时间',
  'LBL_MOVE_TO' => '移动',
  'LBL_DELETE' => '删除',

  'ERR_DELETE_RECORD' => '必须指定记录编号才能删除客户.',
'LBL_DATE_SENT' => '发送日期：',
  'LBL_SUBJECT' => '主题：',
  'LBL_DATE_AND_TIME' => '发送日期与时间：',
  'LBL_DATE' => '发送日期：',
  'LBL_TIME' => '发送时间：',
  'LBL_BODY' => '内容：',
  'LBL_CONTACT_NAME' => '联系人：',
  'LBL_EMAIL' => 'Email：',
  'LBL_COLON' => '：',
  'LBL_TO' => '收件人：',
  'LBL_CHK_MAIL' => '检查邮件',
 'LBL_COMPOSE' => '撰写',
  'LBL_SETTINGS' => '设置',
  'LBL_EMAIL_FOLDERS' => '邮件文件夹',
  'LBL_INBOX' => '收件箱',
  'LBL_SENT_MAILS' => '发送备份',
  'LBL_TRASH' => '垃圾箱',
  'LBL_JUNK_MAILS' => '垃圾邮件',
  'LBL_TO_LEADS' => '潜在客户',
  'LBL_TO_CONTACTS' => '联系人',
  'LBL_TO_ACCOUNTS' => '客户',
'LBL_MY_MAILS' => '我的邮件',
  'LBL_QUAL_CONTACT' => '处理过的邮件（联系人）',
  'LBL_MAILS' => '邮件',
  'LBL_QUALIFY_BUTTON' => '转换',
  'LBL_REPLY_BUTTON' => '回复',
  'LBL_FORWARD_BUTTON' => '转发',
  'LBL_DOWNLOAD_ATTCH_BUTTON' => '下载附件',
  'LBL_FROM' => '发件人：',
  'LBL_CC' => '抄送：',
  'LBL_REPLY_TO_SENDER' => '回复发送人',
  'LBL_REPLY_ALL' => '全部回复',
  'LBL_SHOW_HIDDEN' => '显示隐藏',
  'LBL_EXPUNGE_MAILBOX' => '删除信件',

  'NTC_REMOVE_INVITEE' => '您确定要从信件中移除这个收件人？',
  'LBL_INVITEE' => '收件人',

// Added Fields
// Contacts-SubPanelViewContactsAndUsers.php
'LBL_BULK_MAILS' => '批量邮件',
  'LBL_ATTACHMENT' => '附件',
'LBL_UPLOAD' => '上传',
  'LBL_FILE_NAME' => '文件名',
  'LBL_SEND' => '发送',

  'LBL_EMAIL_TEMPLATES' => 'Email模版',
  'LBL_TEMPLATE_NAME' => '模版名称',
  'LBL_DESCRIPTION' => '描述',
  'LBL_EMAIL_TEMPLATES_LIST' => 'Email模版列表',
  'LBL_EMAIL_INFORMATION' => 'Email信息',




//for v4 release added
'LBL_NEW_LEAD' => '新增潜在客户',
  'LBL_LEAD_TITLE' => '潜在客户',

  'LBL_NEW_PRODUCT' => '新增产品',
  'LBL_PRODUCT_TITLE' => '产品',
  'LBL_NEW_CONTACT' => '新增联系人',
  'LBL_CONTACT_TITLE' => '联系人',
  'LBL_NEW_ACCOUNT' => '新增客户',
  'LBL_ACCOUNT_TITLE' => '客户',

// Added vtiger_fields after vtiger4 - Beta
 'LBL_USER_TITLE' => '用户',
  'LBL_NEW_USER' => '新增用户',

// Added for 4 GA
 'LBL_TOOL_FORM_TITLE' => '邮件工具',
//Added for 4GA
 'Date & Time Sent' => '发送日期与时间',
  'Sales Enity Module' => '销售实体模块',
  'Activtiy Type' => '活动类型',
  'Related To' => '相关对象',
  'Assigned To' => '负责人',
  'Subject' => '主题',
  'Attachment' => '附件',
  'Description' => '描述',
  'Time Start' => '发送时间',
  'Created Time' => '创建时间',
  'Modified Time' => '修改时间',

'MESSAGE_CHECK_MAIL_SERVER_NAME' => '请检查邮件服务器名称',
  'MESSAGE_CHECK_MAIL_ID' => '请检查邮件编号',
  'MESSAGE_MAIL_HAS_SENT_TO_USERS' => '邮件已经发送到以下用户：',
  'MESSAGE_MAIL_HAS_SENT_TO_CONTACTS' => '邮件已经发送到以下联系人：',
  'MESSAGE_MAIL_ID_IS_INCORRECT' => 'Email地址不对,请检查Email地址...',
  'MESSAGE_ADD_USER_OR_CONTACT' => '请添加用户或联系人...',
  'MESSAGE_MAIL_SENT_SUCCESSFULLY' => '邮件发送成功！',

// Added for web mail post 4.0.1 release
  'LBL_FETCH_WEBMAIL' => '获取WebMail',
//Added for 4.2 Release -- CustomView
 'LBL_ALL' => '全部',
  'MESSAGE_CONTACT_NOT_WANT_MAIL' => '这个联系人不希望收到邮件打扰。',
  'LBL_WEBMAILS_TITLE' => '网页邮件',
  'LBL_EMAILS_TITLE' => '电子邮件',
  'LBL_MAIL_CONNECT_ERROR_INFO' => '邮件服务器联机失败！<br> 检查我的账号->邮件服务器列表 -> 账号列表',
// Added for 5.0.3 release
'LBL_MAIL_CONNECT_ERROR'=>'WebMail 邮件服务器连接失败，请检查接收邮件服务器的配置:',
'IN_REPLY_TO_THE_MESSAGE' => '回复发出的信息 ',
'LBL_CLICK_HERE' => '点击这里 ',
'LBL_GOTO_EMAILS_MODULE' => ' 转到 E-Mail 模块',
'LBL_NO_EMAILS'=>'文件夹没有邮件',
'LBL_MOVE_TO'=>'转移...',
'LBL_DEL'=>'删除 ',
'LABEL_FROM'=>'来自',
'LBL_INFO'=>'信息',
'LABEL_DATE'=>'日期',
'LBL_NO_IFRAMES_SUPPORTED'=>'没有隐藏支持',
'LBL_EMAIL_ATTACHMENTS'=>'邮件附件:',
'LBL_ALLMAILS'=>'邮件',
'LBL_TO_USERS'=>'至用户',
'LBL_TO_GROUPS'=>'至部门',
'SUBJECT' => '提交',
'BODY' => '正文',
'TO' => 'To:',
'CC' => '抄送:',
'BCC' => '密件抄送:',
'FROM' => '来自:',
'IN'=>'in',
'ADD_FOLDER' => '添加文件夹[X]',
//Added for 5.0.3
'LBL_LOADING_IMAGE' => '请稍候。。。',
'LBL_ENABLE_IMAP_SUPPORT' => '请在PHP里开通IMAP模块',
'LBL_CONFIGURE_MAIL_SETTINGS'=>'请配置你的邮件设置',
// Added/Updated for vtiger CRM 5.0.4
'LBL_CONFIGURE_MAIL_SETTINGS'=>'请配置您的邮件设置',
'LBL_PLEASE'=>'请',
'LBL_HERE'=>'Here',

// Added after 5.0.4 GA
'LBL_FULL_EMAIL_VIEW'=>'完整的电子邮件显示', 
'LBL_MESSAGE'=>'信息', 
'LBL_MESSAGES'=>'信息',

'LBL_NO_ATTACHMENTS'=>'没有文件可下载', 
'LBL_THERE_ARE'=>'有 ', 
'LBL_ATTACHMENTS_TO_CHOOSE'=>' 附件（S）选择',
'LBL_ATTACHMENTS'=>'附件', 

'LBL_LIST_COUNT'=>'显示',

'LBL_INSTEAD_OF_WEBMAILS_USE' => '替代web mail, 请点击这里使用',
'LBL_PLEASE_CLICK_HERE_TO_GO_TO' => '请点击这里前往 ',
);
?>