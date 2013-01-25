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
// Mike Crowe Mod --------------------------------------------------------added for general search
  'LBL_GENERAL_INFORMATION' => '一般信息',

  'LBL_MODULE_NAME' => '邮件',
  'LBL_MODULE_TITLE' => '邮件: 首页',
  'LBL_SEARCH_FORM_TITLE' => '查找邮件',
  'LBL_LIST_FORM_TITLE' => '邮件列表',
  'LBL_NEW_FORM_TITLE' => '发送邮件',

  'LBL_LIST_SUBJECT' => '标题',
  'LBL_LIST_CONTACT' => '联系人',
  'LBL_LIST_RELATED_TO' => '关联于',
  'LBL_LIST_DATE' => '发送日期',
  'LBL_LIST_TIME' => '发送时间',

 'ERR_DELETE_RECORD' => '必须指定客户编号才能删除.',
  'LBL_DATE_SENT' => '发送日期：',
  'LBL_DATE_AND_TIME' => '发送日期与时间：',
  'LBL_DATE' => '发送日期：',
  'LBL_TIME' => '发送时间：',
  'LBL_SUBJECT' => '标题：',
 'LBL_BODY' => '邮件内容：',
  'LBL_CONTACT_NAME' => ' 联系人姓名: ',
  'LBL_EMAIL' => 'Email：',
  'LBL_DETAILVIEW_EMAIL' => 'E-Mail',
'LBL_COLON'=>':',
  'LBL_CHK_MAIL' => '检查邮件',
'LBL_COMPOSE'=>'撰写新邮件',
//Single change for 5.0.3
'LBL_SETTINGS'=>'邮件服务器设置',
'LBL_EMAIL_FOLDERS'=>'邮件文件夹',
'LBL_INBOX' => '收件箱',
'LBL_SENT_MAILS'=>'邮件备份',
'LBL_TRASH' => '垃圾桶',
  'LBL_JUNK_MAILS' => '垃圾邮件',
  'LBL_TO_LEADS' => '潜在客户',
  'LBL_TO_CONTACTS' => '联系人',
  'LBL_TO_ACCOUNTS' => '客户',
  'LBL_MY_MAILS' => '我的WebMail',
'LBL_QUAL_CONTACT' => '已转换邮件（转为联系人）',
  'LBL_MAILS' => '邮件',
'LBL_QUALIFY_BUTTON' => '转换',
  'LBL_REPLY_BUTTON' => '回复',
  'LBL_FORWARD_BUTTON' => '转发',
  'LBL_DOWNLOAD_ATTCH_BUTTON' => '下载附件',
  'LBL_FROM' => '发件人：',
  'LBL_CC' => '抄送：',
  'LBL_BCC' => '秘密抄送：',

  'NTC_REMOVE_INVITEE' => '您确定要把此人从收件人中删除吗？',
'LBL_INVITEE'=>'受邀者',

// Added Fields
// Contacts-SubPanelViewContactsAndUsers.php
  'LBL_BULK_MAILS' => '群发邮件',
  'LBL_ATTACHMENT' => '附件',
  'LBL_UPLOAD' => '上传',
  'LBL_FILE_NAME' => '文件名称',
  'LBL_SEND' => '发送',

  'LBL_EMAIL_TEMPLATES' => 'Email模版',
  'LBL_TEMPLATE_NAME' => '模版名称',
  'LBL_DESCRIPTION' => '说明',
  'LBL_EMAIL_TEMPLATES_LIST' => '模版列表',
  'LBL_EMAIL_INFORMATION' => '邮件信息',




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
 'LBL_TOOL_FORM_TITLE' => '邮件编辑器',
//Added for 4GA
  'Date & Time Sent' => '发送日期与时间',
  'Sales Enity Module' => '销售实体模块',
'Related To' => '关联于',
  'Assigned To' => '负责人',
  'Subject' => '标题',
  'Attachment' => '附件',
  'Description' => '描述',
  'Time Start' => '开始时间',
  'Created Time' => '创建时间',
  'Modified Time' => '修改时间',

 'MESSAGE_CHECK_MAIL_SERVER_NAME' => '请检查邮件服务器名称...',
  'MESSAGE_CHECK_MAIL_ID' => '请检查邮件地址',
  'MESSAGE_MAIL_HAS_SENT_TO_USERS' => '邮件已经发送给以下用户：',
  'MESSAGE_MAIL_HAS_SENT_TO_CONTACTS' => '邮件已经发送给以下联系人：',
  'MESSAGE_MAIL_ID_IS_INCORRECT' => '邮件地址不正确. 请检查这封邮件的地址...',
  'MESSAGE_ADD_USER_OR_CONTACT' => '请添加其它用户或联系人...',
  'MESSAGE_MAIL_SENT_SUCCESSFULLY' => ' 邮件发送成功！',

// Added for web mail post 4.0.1 release
  'LBL_FETCH_WEBMAIL' => '获取WebMail',
//Added for 4.2 Release -- CustomView
'LBL_ALL' => '全部',
  'MESSAGE_CONTACT_NOT_WANT_MAIL' => '这个联系人不想收到邮件。',
  'LBL_WEBMAILS_TITLE' => 'WebMail',
  'LBL_EMAILS_TITLE' => 'Emails',
  'LBL_MAIL_CONNECT_ERROR_INFO' => '连接邮件服务器时发生错误，检查我的账号=>邮件服务器列表=>邮件账号',
  'LBL_ALLMAILS' => '所有邮件',
  'LBL_TO_USERS' => '用户',
  'LBL_TO' => '收件人：',
  'LBL_IN_SUBJECT' => '标题',
  'LBL_IN_SENDER' => '发件人',
  'LBL_IN_SUBJECT_OR_SENDER' => '标题或发件人',
  'SELECT_EMAIL' => '请选择Email',
  'Sender' => '发件人',
  'LBL_CONFIGURE_MAIL_SETTINGS' => '您的接收邮件服务器还没设置',
  'LBL_MAILSELECT_INFO' => '请选择要发送的邮件',
 'LBL_MAILSELECT_INFO1' => '下面的邮件与已选记录有关',
  'LBL_MAILSELECT_INFO2' => '选择接收邮件的Email',
 'LBL_MULTIPLE' => '多选',
  'LBL_COMPOSE_EMAIL' => '撰写新邮件',
  'LBL_VTIGER_EMAIL_CLIENT'=>'vtiger WebMail客户',

//Added for 5.0.3
'TITLE_VTIGERCRM_MAIL'=>'vtigerCRM 邮件',
'TITLE_COMPOSE_MAIL'=>'撰写新邮件',

'MESSAGE_MAIL_COULD_NOT_BE_SEND'=>'邮件不能发送到被邀请的用户.',
'MESSAGE_PLEASE_CHECK_ASSIGNED_USER_EMAILID'=>'请检查受邀用户的电子邮件id...',
'MESSAGE_PLEASE_CHECK_THE_FROM_MAILID'=>'请检查电子邮件id',
'MESSAGE_MAIL_COULD_NOT_BE_SEND_TO_THIS_EMAILID'=>'邮件不能发送到这电子邮件id',
'PLEASE_CHECK_THIS_EMAILID'=>'请检查这邮件id...',
'LBL_CC_EMAIL_ERROR'=>'您的CC邮件ID不正确',
'LBL_BCC_EMAIL_ERROR'=>'您的BCC邮件ID不正确',
'LBL_NO_RCPTS_EMAIL_ERROR'=>'没有指定对象',
'LBL_CONF_MAILSERVER_ERROR'=>'请设置您外部的邮件服务器 ---> 外出的服务器链接',
'LBL_VTIGER_EMAIL_CLIENT'=>'vtiger WebMail 客户',
'LBL_MAILSELECT_INFO3'=>'您不能查看已选记录的邮件ID.',
'LBL_NO_RECORDS' => '没有记录',
//Added  for script alerts
'FEATURE_AVAILABLE_INFO' => '这个功能只支持Microsoft Internet Explorer 5.5+或更高!',
'DOWNLOAD_CONFIRAMATION' => '您想要下载文件 ?',
'LBL_PLEASE_ATTACH' => '请再尝试附上一个有效的文件',
'LBL_KINDLY_UPLOAD' => '请配置在php.ini中的upload_tmp_dir变量文件。',
'LBL_EXCEED_MAX' => '抱歉, 上传的文件超出最大值极限。请尝试一个小文件 ',
'LBL_BYTES' => ' 字节',
'LBL_CHECK_USER_MAILID' => '请检查当前用户的电邮ID是否正确',

// Added/Updated for vtiger CRM 5.0.4
'Activity Type'=>'任务类型',
'LBL_MAILSELECT_INFO'=>'请选择接收邮件的Email',
'LBL_NO_RECORDS' => '未找到任何记录',
'LBL_PRINT_EMAIL'=> '打印',
);

?>
