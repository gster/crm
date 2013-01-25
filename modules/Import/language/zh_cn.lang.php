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
	'Import' => '导入',
	'LBL_IMPORT_STEP_1' => '阶段 1',
	'LBL_IMPORT_STEP_2' => '阶段 2',
	'LBL_IMPORT_STEP_3' => '阶段 3',
	'LBL_IMPORT_STEP_4' => '阶段 4',
	'LBL_IMPORT_STEP_1_DESCRIPTION' => '选择文件',
	'LBL_IMPORT_STEP_2_DESCRIPTION' => '指定格式',
	'LBL_IMPORT_STEP_3_DESCRIPTION' => '重复记录处理',
	'LBL_IMPORT_STEP_4_DESCRIPTION' => '将列映射为模块字段',
	'Skip' => '跳过',
	'Overwrite' => '覆盖',
	'Merge' => '合并',
	'LBL_IMPORT_SUPPORTED_FILE_TYPES' => '支持文件类型(s): .CSV, .VCF',
	'LBL_IMPORT_STEP_3_DESCRIPTION_DETAILED' => '选择此选项以启用并设置重复项的合并准则',
	'LBL_CHARACTER_ENCODING' => '字符编码',
	'LBL_DELIMITER' => '分隔符',
	'LBL_HAS_HEADER' => '有header',
	'LBL_SPECIFY_MERGE_TYPE' => '选择应如何处理重复的记录',
	'LBL_SELECT_MERGE_FIELDS' => '选择匹配的字段来找到重复的记录',
	'LBL_AVAILABLE_FIELDS' => '可用字段',
	'LBL_SELECTED_FIELDS' => '字段匹配',
	'GBK' => 'GBK',
	'UTF-8' => 'UTF-8',
	'comma' => ', (逗号)',
	'semicolon' => '; (分号)',
	'LBL_USE_SAVED_MAPPING' => '使用保存的映射表',
	'LBL_SAVE_AS_CUSTOM_MAPPING' => '另存为自定义映射表',
	'LBL_FILE_COLUMN_HEADER' => 'Header',
	'LBL_ROW_1' => 'Row 1',
	'LBL_CRM_FIELDS' => 'CRM 字段',
	'LBL_DEFAULT_VALUE' => '默认值',
	'LBL_IMPORT_BUTTON_LABEL' => '导入',
	'LBL_TOTAL_RECORDS_IMPORTED' => '导入的记录总数',
	'LBL_TOTAL_RECORDS_FAILED' => '失败记录总数',
	'LBL_NUMBER_OF_RECORDS_CREATED' => '创建记录数字',
	'LBL_NUMBER_OF_RECORDS_UPDATED' => '覆盖记录数字',
	'LBL_NUMBER_OF_RECORDS_SKIPPED' => '跳过记录数字',
	'LBL_UNDO_LAST_IMPORT' => '撤销上次导入',
	'LBL_VIEW_LAST_IMPORTED_RECORDS' => '上次导入的记录',
	'LBL_IMPORT_MORE' => '导入更多的',
	'LBL_FINISH_BUTTON_LABEL' => '完成',
	'LBL_RESULT' => '结果',
	'ERR_FILE_DOESNT_EXIST' => "文件不存在",
	'ERR_CANT_OPEN_FILE' => "无法打开文件进行读取",
	'ERR_UNIMPORTED_RECORDS_IN_QUEUE' => '用户撤销了队列中导入的记录',
	'ERR_FILE_READ_FAILED' => '文件读取失败',
	'LBL_IMPORT_SCHEDULED' => '导入计划',
	'LBL_SCHEDULED_IMPORT_DETAILS' => '您已指定导入计划，一旦导入完成，你会收到一封电子邮件， <br>
										请确保发送服务器和您的电子邮件地址被配置为接收电子邮件通知',
	'ERR_DETAILS_BELOW' => '详细列出以下',
	'LBL_ERROR' => '错误',
	'LBL_OK_BUTTON_LABEL' => 'OK',
	'TOTAL_RECORDS' => '记录总数',
	'LBL_NUMBER_OF_RECORDS_DELETED' => '删除的记录数',
	'LBL_NUMBER_OF_RECORDS_MERGED' => '合并记录的数目',
	'LBL_TOTAL_RECORDS' => '记录总数',
	'LBL_UNDO_RESULT' => '撤消导入结果',
	'LBL_LAST_IMPORTED_RECORDS' => '上次导入的记录',
	'LBL_NO_ROWS_FOUND' => '没有行发现',
	'ERR_UNIMPORTED_RECORDS_EXIST' => '导入队列中还有的一些unimported记录，阻止导入更多的数据 <br>
										清除数据以清理和开始重新导入',
	'ERR_FAILED_TO_LOCK_MODULE' => '锁定模块失败，请稍后重新导入',
	'LBL_RUNNING' => '运行中',
	'LBL_CLEAR_DATA' => '清除数据',
	'ERR_MODULE_IMPORT_LOCKED' => '现在不允许您导入此模块，另外一个导入进程正在运行，请稍后再试',
	'LBL_MODULE_NAME' => '模块',
	'LBL_USER_NAME' => '用户',
	'LBL_LOCKED_TIME' => '锁定时间',
	'LBL_CANCEL_IMPORT' => '撤销导入',
	'ERR_IMPORT_INTERRUPTED' => '目前导入已中断，请稍后再试',

	'LBL_INVALID_FILE' => '无效文件',
	'LBL_FILE_TYPE' => '文件类型',
	'csv' => 'CSV',
	'vcf' => 'VCard',
	
/*****************5.3.0以前版本	
 'LBL_IMPORT_MODULE_NO_DIRECTORY' => '文件夹 ',
  'LBL_IMPORT_MODULE_NO_DIRECTORY_END' => ' 不存在或是无法写入',
  'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => '文件上传失败，请再重试',
  'LBL_IMPORT_MODULE_ERROR_LARGE_FILE' => '文件太大，大小上限：',
  'LBL_IMPORT_MODULE_ERROR_LARGE_FILE_END' => '字节，在 config.php 中调整 $upload_maxsize的参数',
 'LBL_MODULE_NAME' => '导入',
  'LBL_TRY_AGAIN' => '重试',
  'LBL_ERROR' => '错误：',
  'ERR_MULTIPLE' => '多个字段使用同样的字段名称.',
  'ERR_MISSING_REQUIRED_FIELDS' => '必填字段为空：',
  'ERR_SELECT_FULL_NAME' => '当姓或名被选择时，您就不能再选全名.',
  'ERR_SELECT_FILE' => '选择要上传的文件.',
  'LBL_SELECT_FILE' => '选择文件：',
  'LBL_CUSTOM' => '自定义',
  'LBL_DONT_MAP' => '--  不要映射该字段 --',
  'LBL_STEP_1_TITLE' => '步骤 1 of 4： 选择数据来源',
 'LBL_WHAT_IS' => '请紧选择资料来源：',
  'LBL_MICROSOFT_OUTLOOK' => 'Microsoft Outlook',
  'LBL_ACT' => 'Act!',
  'LBL_SALESFORCE' => 'Salesforce.com',
  'LBL_MY_SAVED' => '我所保存的来源：',
  'LBL_PUBLISH' => '发布',
  'LBL_DELETE' => '删除',
  'LBL_PUBLISHED_SOURCES' => '发布的来源：',
  'LBL_UNPUBLISH' => '不发布',
  'LBL_NEXT' => '下一步',
  'LBL_BACK' => '上一步',
  'LBL_STEP_2_TITLE' => '步骤 2 of 4： 上传导入的文件',
  'LBL_HAS_HEADER' => '字段标题：',

'LBL_NUM_1'=>'1.',
'LBL_NUM_2'=>'2.',
'LBL_NUM_3'=>'3.',
'LBL_NUM_4'=>'4.',
'LBL_NUM_5'=>'5.',
'LBL_NUM_6'=>'6.',
'LBL_NUM_7'=>'7.',
'LBL_NUM_8'=>'8.',
'LBL_NUM_9'=>'9.',
'LBL_NUM_10'=>'10.',
'LBL_NUM_11'=>'11.',
'LBL_NUM_12'=>'12.',
'LBL_NOW_CHOOSE' => '选择要导入的文件：',
  'LBL_IMPORT_OUTLOOK_TITLE' => 'Microsoft Outlook 98 与 2000可以将资料导出成 <b>逗号分隔文件</b> ，可以将它导入系统。要从Outlook导出资料，请透过下面步驟：',
  'LBL_OUTLOOK_NUM_1' => '打开 <b>Outlook</b>',
  'LBL_OUTLOOK_NUM_2' => '选择 <b>文件</b> 选单，接着选择 <b>导入与导出 ...</b>',
  'LBL_OUTLOOK_NUM_3' => '选择 <b>导出成文件</b> 后点击下一步',
  'LBL_OUTLOOK_NUM_4' => '选择 <b>逗号分隔文件 (Windows)</b> 后点击<b>下一步</b>.。<br> 注意：系统也许会提示您安裝导出元件<br>  ',
  'LBL_OUTLOOK_NUM_5' => '选择 <b>联系人</b> 文件夹后点击 <b>下一步</b>，如果您将联系人信息保存在多个文件夹，您可以选择不同的项目。',
  'LBL_OUTLOOK_NUM_6' => '选择文件名称后点击 <b>下一步</b>',
  'LBL_OUTLOOK_NUM_7' => '点击 <b>完成</b>',
  'LBL_IMPORT_ACT_TITLE' => 'Act! 可以将资料导出成逗号分隔格式，您可以将这个格式的资料导入本系统。要将 Act! 的资料导出，请参考下面步骤：',
  'LBL_ACT_NUM_1' => '启动 <b>ACT!</b>',
  'LBL_ACT_NUM_2' => '选择 <b>文件</b> 选单中的 <b>D数据交换</b> 项目，接着选择 <b>Export...</b>',
  'LBL_ACT_NUM_3' => '选择文件类型 <b>Text-Delimited</b>',
  'LBL_ACT_NUM_4' => '选择导出资料存放的文件名称与位置，然后点击 <b>下一步</b>',
  'LBL_ACT_NUM_5' => '选择 <b>仅限联系人记录</b>',
  'LBL_ACT_NUM_6' => '点击 <b>选项...</b> 按钮 ',
  'LBL_ACT_NUM_7' => '选择 <b>逗号</b> 作为字段分隔符',
  'LBL_ACT_NUM_8' => '选择 <b>Yes, 导出字段名称</b> 接着点击 <b>OK</b>',
  'LBL_ACT_NUM_9' => '点击 <b>下一步</b>',
  'LBL_ACT_NUM_10' => '选择 <b>全部记录</b> 接着点击 <b>完成</b>',
  'LBL_IMPORT_SF_TITLE' => 'Salesforce.com 可以将资料导出成逗号分隔格式，您可以将这个格式的资料导入本系统。要将 Salesforce.com 的资料导出，请参考下面步骤：',
  'LBL_SF_NUM_1' => '启动浏览器，连接到 http://www.salesforce.com，然后透过您注册的信箱与密码登入',
  'LBL_SF_NUM_2' => '在顶层清单中，点击 <b>导出</b> ',
  'LBL_SF_NUM_3' => '导出客户:</b> 点击连接 <b>活跃客户</b> <br><b>导出联系人:</b> 点击连接 <b>邮件列表</b>',
  'LBL_SF_NUM_4' => '<b>步骤 1： 选择报表类型</b>, 选择 <b>表格式报表</b>点击 <b>下一步</b>',
  'LBL_SF_NUM_5' => '<b>步骤 2： 选择报表栏目</b>, 选择你要导出的栏目并点击 <b>下一步</b>',
  'LBL_SF_NUM_6' => '<b>步骤 3： 选择需要总结的信息</b>, 点击 <b>下一步</b>',
  'LBL_SF_NUM_7' => '<b>步骤 4： 定义报表条件</b>, 在 <b>开始日期</b>下方, 选择足够的日期范围值. 您可以输出相关客户的信息利用更多的进阶选项. 当您完成, 点选 <b>报表</b>',
  'LBL_SF_NUM_8' => '<b>步骤 5： 选择报表条件</b>, 在 <b>开始日期</b>下方, 选择足够的日期范围. 您您可以输出公司相关的信息利用更多的进阶选项. 当您完成后, 点击 <b>报表</b>',
  'LBL_SF_NUM_9' => '报表将产生, 并且该页面会显示 <b>报表执行状态： complete.</b> 现在点击 <b>输出到Excel电子表格</b>',
  'LBL_SF_NUM_10' => '在 <b>输出报表：</b>, 从 <b>输出文件格式：</b>, 选择 <b>逗号分隔符.csv</b>. 点击 <b>导出</b>.',
  'LBL_SF_NUM_11' => '将会弹出对话窗口让您可以储存输出文件.',
  'LBL_IMPORT_CUSTOM_TITLE' => '很多应用程序可以以CSV文件格式导出数据。大致步骤如下:',
  'LBL_CUSTOM_NUM_1' => '执行应用程序并且打开数据文件',
  'LBL_CUSTOM_NUM_2' => '选择 <b>另存为...</b> 或 <b>导出...</b> 菜单',
  'LBL_CUSTOM_NUM_3' => '以CSV文件格式保存',

  'LBL_STEP_3_TITLE' => '步骤 3 of 4： 确认导入字段',
  'LBL_STEP_1' => '步骤 1 of 3：',
  'LBL_STEP_1_TITLE'=>'选择 .CSV 文件',
  'LBL_STEP_1_TEXT' => ' vtiger CRM 支持从 .csv ( <b>逗号分隔数据</b> ) 文件导入数据，请选择指定的文件后点选继续按钮。<br/><b>注意:请在执行导入前，首先确保导入文件的编码为：GBK 或 UTF-8</b>',

  'LBL_SELECT_FIELDS_TO_MAP' => '在下面的列表中，选择导入文件中包含的字段，完成后点击 <b>立即导入</b>：',

  'LBL_DATABASE_FIELD' => '数据库字段',
  'LBL_HEADER_ROW' => '字段标题',
  'LBL_ROW' => '列',
  'LBL_SAVE_AS_CUSTOM' => '保存为自定义字段映射表：',
  'LBL_CONTACTS_NOTE_1' => '必须指定姓名或全名',
  'LBL_CONTACTS_NOTE_2' => '如果指定了全名，英文名与姓名段则会忽略',
  'LBL_CONTACTS_NOTE_3' => '如果指定了全名，该字段中的资料会自动被切割成英文名与姓名两个个字段',
  'LBL_CONTACTS_NOTE_4' => '地址2与地址3 字段在导入数据库时会与主要地址字段合并',
  'LBL_ACCOUNTS_NOTE_1' => '必须指定客户名称',
  'LBL_ACCOUNTS_NOTE_2' => '当要写入数据库时，地址 2与地址3字段在导入数据库时会与主要地址字段合并.',
  'LBL_POTENTIALS_NOTE_1' => '潜在客户名称, 客户名称, 完成日期, 和销售阶段为必填项',
  'LBL_OPPORTUNITIES_NOTE_1' => '销售机会名称, 客户名称, 完成日期, 和销售阶段为必填项。.',
  'LBL_LEADS_NOTE_1' => '必须指定姓名',
  'LBL_LEADS_NOTE_2' => '必须指定公司名称',
  'LBL_IMPORT_NOW' => '现在导入',
  'LBL_' => '',
  'LBL_CANNOT_OPEN' => '无法读取要导入的文件',
  'LBL_NOT_SAME_NUMBER' => '在您指定的文件中每行的字段数量不一致',
  'LBL_NO_LINES' => '在您导入的文件中没有数据',
  'LBL_FILE_ALREADY_BEEN_OR' => '您所指定导入的文件已经处理过或不存在',
  'LBL_SUCCESS' => '成功：',
  'LBL_SUCCESSFULLY' => '导入成功',
  'LBL_LAST_IMPORT_UNDONE' => '你上次的导入已取消',
  'LBL_NO_IMPORT_TO_UNDO' => '没有导入的数据可供还原.',
  'LBL_FAIL' => '错误：',
  'LBL_RECORDS_SKIPPED' => '这条记录略过，因为缺漏必要字段值',
  'LBL_IDS_EXISTED_OR_LONGER' => '这条记录略过，因为ID重复或长度超过36字符',
  'LBL_RESULTS' => '结果',
  'LBL_IMPORT_MORE' => '导入更多...',
  'LBL_FINISHED' => '已完成',
  'LBL_UNDO_LAST_IMPORT' => '恢复上次导入',

  'LBL_SUCCESS_1' => '成功导入的记录数量：',
  'LBL_SKIPPED_1' => '略过的记录数量（可能缺少必填字段）：',

//Added for patch2 - Products Import Notes
  'LBL_PRODUCTS_NOTE_1' => '必须指定产品名称',
  'LBL_PRODUCTS_NOTE_2' => '在导入前请先确认一个字段是否被指定两次',

//Added for version 5
  'LBL_FILE_LOCATION' => '请选择要导入的CSV文件：',
  'LBL_STEP_2_3' => '步骤 2 of 3：',
  'LBL_LIST_MAPPING' => '字段映射',
  'LBL_STEP_2_MSG' => '下面数据表显示导入的数据',
  'LBL_STEP_2_MSG1' => '与其它细节。',
  'LBL_STEP_2_TXT' => '请在下拉框中选择与标题列对应的CRM系统字段',
  'LBL_USE_SAVED_MAPPING' => '使用字段映射表：',
  'LBL_MAPPING' => 'CRM系统字段',
  'LBL_HEADERS' => '导入字段：',
  'LBL_ERROR_MULTIPLE' => '同一个字段被映射两次，请检查已映射字段。',
  'LBL_STEP_3_3' => '步骤 3 of 3 ：',
  'LBL_MAPPING_RESULTS' => '映射结果',
  'LBL_LAST_IMPORTED' => '最新导入的',
//Added for sript alerts
'PLEASE_CHECK_MAPPING' => "' 映射一次以上。请检查映射.",
'MAP_MANDATORY_FIELD' => '映射必填字段 "',
'ENTER_SAVEMAP_NAME' => '请输入要保存的映射名',

//Added for 5.0.3
'to'=>'to',
'of'=>'of',
'are_imported_succesfully'=>'导入成功',

// Added after 5.0.4 GA

//added for duplicate handling 
'LBL_LAST_IMPORT'=>'最后一次导入',
'Select_Criteria_For_Duplicate' => '选择重复记录的处理规则',
'Manual_Merging' => '手动合并',
'Auto_Merging' => '自动合并',
'Ignore_Duplicate' => '忽略重复的记录',
'Overwrite_Duplicate' => '覆盖重复的记录',
'Duplicate_Records_Skipped_Info' => '记录重复时，跳过: ',
'Duplicate_Records_Overwrite_Info' => '记录重复时，覆盖: ',
'LBL_STEP_4_4'=>'步骤4 of 4 : ',
'LBL_STEP_3_4'=>'步骤3 of 4 :',
'LBL_STEP_2_4'=>'步骤2 of 4 :',
'LBL_STEP_1_4'=>'步骤1 of 4 : ',

'LBL_DELIMITER' => '分隔符:',
'LBL_FORMAT' => '格式:',
'LBL_MAX_FILE_SIZE' => ' 是允许的最大大小',

'LBL_MERGE_FIELDS_DUPLICATE' => '合并重复的进口记录中的字段',
'Customer Portal Login Details' => '客户门户登录详细信息',    
);

/*$mod_list_strings = Array(
	"id"=>"Contact ID"
	,"first_name"=>"First Name"
	,"last_name"=>"Last Name"
	,"salutation"=>"Salutation"
	,"lead_source"=>"Lead Source"
	,"birthdate"=>"Lead Source"
	,"do_not_call"=>"Do Not Call"
	,"email_opt_out"=>"Email Opt Out"
	,"primary_address_street_2"=>"Primary Address Street 2"
	,"primary_address_street_3"=>"Primary Address Street 3"
	,"alt_address_street_2"=>"Other Address Street 2"
	,"alt_address_street_3"=>"Other Address Street 3"
	,"full_name"=>"Full Name"
	,"account_name"=>"Account Name"
	,"account_id"=>"Account ID"
	,"title"=>"Title"
	,"department"=>"Department"
	,"birthdate"=>"Birthdate"
	,"do_not_call"=>"Do Not Call"
	,"phone_home"=>"Phone (Home)"
	,"phone_mobile"=>"Phone (Mobile)"
	,"phone_work"=>"Phone (Work)"
	,"phone_other"=>"Phone (Other)"
	,"phone_fax"=>"Fax"
	,"email1"=>"Email"
	,"email2"=>"Email (Other)"
	,"yahoo_id"=>"Yahoo! ID"
	,"assistant"=>"Assistant"
	,"assistant_phone"=>"Assistant Phone"
	,"primary_address_street"=>"Primary Address Street"
	,"primary_address_city"=>"Primary Address City"
	,"primary_address_state"=>"Primary Address State"
	,"primary_address_postalcode"=>"Primary Address Postalcode"
	,"primary_address_country"=>"Primary Address Country"
	,"alt_address_street"=>"Other Address Street"
	,"alt_address_city"=>"Other Address City"
	,"alt_address_state"=>"Other Address State"
	,"alt_address_postalcode"=>"Other Address Postalcode"
	,"alt_address_country"=>"Other Address Country"
	,"description"=>"Description"

	),*/
$mod_list_strings = Array(
'contacts_import_fields' => Array(
	//"id"=>"Contact ID"
	"firstname"=>"英文名"
	,"lastname"=>"姓名"
	,"salutationtype"=>"称谓"
	,"leadsource"=>"潜在客户来源"
	,"birthday"=>"出生日期"
	,"donotcall"=>"拒绝电话打扰"
	,"emailoptout"=>"拒绝邮件打扰"
	//,"primary_address_street_2"=>"Primary Address Street 2"
	//,"primary_address_street_3"=>"Primary Address Street 3"
	//,"alt_address_street_2"=>"Other Address Street 2"
	//,"alt_address_street_3"=>"Other Address Street 3"
	//,"full_name"=>"Full Name"
	//,"account_name"=>"Account Name"
	 ,'account_id' => '客户ID'
    ,'title' => '职务'
    ,'department' => '部门'
	//,"birthdate"=>"Birthdate"
	//,"do_not_call"=>"Do Not Call"
	,"homephone"=>"电话（家庭）"
	,"mobile"=>"电话 (手机)"
	,"phone"=>"电话 (工作)"
	,"otherphone"=>"电话 (其他)"
	,"fax"=>"传真"
	,"email"=>"Email"
	,"otheremail"=>"Email (其他)"
	,"yahooid"=>"Yahoo! ID"
	,"assistant"=>"助理"
	,"assistantphone"=>"助理电话"
	,"mailingstreet"=>"邮寄地址(邮寄地址)"
	,"mailingpobox"=>"邮寄地址(邮政信箱)"
	,"mailingcity"=>"邮寄地址(城市)"
	,"mailingstate"=>"邮寄地址(省份)"
	,"mailingzip"=>"邮寄地址(邮政编码)"
	,"mailingcountry"=>"邮寄地址(国家)"
	,"otherstreet"=>"其它地址(邮寄地址)"
	,"otherpobox"=>"其它地址(邮政信箱)"
	,"othercity"=>"其它地址(城市)"
	,"otherstate"=>"其它地址(省份)"
	,"otherzip"=>"其它地址(邮政编码)"
	,"othercountry"=>"其它地址(国家)"
	,"description"=>"描述"
	,"assigned_user_id"=>"负责人"
	),

'accounts_import_fields' => Array(
	//"id"=>"Account ID",
	"accountname"=>"客户名称",
	"website"=>"网站",
	"industry"=>"行业",
	"accounttype"=>"类型",
	"tickersymbol"=>"股票代码",
	"parent_name"=>"上级单位",
	"employees"=>"员工数",
	"ownership"=>"所有制",
	"phone"=>"电话",
	"fax"=>"传真",
	"otherphone"=>"其他电话",
	"email1"=>"Email",
	"email2"=>"其他Email",
	"rating"=>"评价",
	"siccode"=>"行业编码",
	"annual_revenue"=>"年营业额",
	"bill_street"=>"付款地址(邮寄地址)",
	//"billing_address_street_2"=>"Billing Address Street 2",
	//"billing_address_street_3"=>"Billing Address Street 3",
	//"billing_address_street_4"=>"Billing Address Street 4",
	"bill_pobox"=>"付款地址(邮政信箱)",
	"bill_city"=>"付款地址(城市)",
	"bill_state"=>"付款地址(省份)",
	"bill_code"=>"付款地址(邮政编码)",
	"bill_country"=>"付款地址(国家)",
	"ship_street"=>"收货地址(邮寄地址)",
	//"shipping_address_street_2"=>"Shipping Address Street 2",
	//"shipping_address_street_3"=>"Shipping Address Street 3",
	//"shipping_address_street_4"=>"Shipping Address Street 4",
	"ship_pobox"=>"收货地址(邮政信箱)",
	"ship_city"=>"收货地址(城市)",
	"ship_state"=>"收货地址(省份)",
	"ship_code"=>"收货地址(邮政编码)",
	"ship_country"=>"收货地址(国家)",
	"description"=>"描述",
	"assigned_user_id"=>"负责人"
	),

'potentials_import_fields' => Array(
		//"id"=>"Account ID"
		 "potentialname"=>"销售机会名称"
		, "account_id"=>"客户名称"
		, "opportunity_type"=>"销售机会类型"
		, "leadsource"=>"潜在客户来源"
		, "amount"=>"金额"
		, "closingdate"=>"完成日期"
		, "nextstep"=>"下一步"
		, "sales_stage"=>"销售阶段"
		, "probability"=>"可能性"
		, "description"=>"描述"
		,"assigned_user_id"=>"负责人"
	),


'leads_import_fields' => Array(
		"salutationtype"=>"称谓",
		"firstname"=>"英文名",
		"phone"=>"电话",
		"lastname"=>"姓名",
		"mobile"=>"手机",
		"company"=>"公司",
		"fax"=>"传真",
		"designation"=>"职位",
		"email"=>"Email",
		"leadsource"=>"潜在客户来源",
		"website"=>"网站",
		"industry"=>"行业",
		"leadstatus"=>"潜在客户状态",
		"annualrevenue"=>"年营业额",
		"rating"=>"评价",
		"noofemployees"=>"没有雇员",
		"assigned_user_id"=>"负责人",
		"yahooid"=>"Yahoo Id",		
		"lane"=>"街道巷号",
		"pobox"=>"邮政信箱",
		"code"=>"邮政编码",
		"city"=>"城市",
		"country"=>"国家",
		"state"=>"省份",
		"description"=>"描述",
		"assigned_user_id"=>"负责人"
    ),
 
 'products_import_fields' => Array(
    'productname' => '产品名称',
    'productcode' => '产品代码',
    'productcategory' => '产品类别',
    'manufacturer' => '制造商',
    'product_description' => '产品介绍',
    'qty_per_unit' => '数量/单位',
    'unit_price' => '单价',
    'weight' => '重量',
    'pack_size' => '包装大小',
    'start_date' => '开始日期',
    'expiry_date' => '过期日期',
    'cost_factor' => '成本因子',
    'commissionmethod' => '佣金计算方式',
    'discontinued' => '停售',
    'commissionrate' => '佣金率',
    'sales_start_date' => '开始销售日期',
    'sales_end_date' => '停止销售日期',
    'usageunit' => '使用单位',
    'serialno' => '序列号',
    'currency' => '货币',
    'reorderlevel' => '安全库存',
    'website' => '网站',
	 'taxclass' => '税别',
    'mfr_part_no' => '制造商部件编号',
    'vendor_part_no' => '供应商部件编号',
    'qtyinstock' => '库存数量',
    'productsheet' => '产品表',
    'qtyindemand' => '需求数量',
    'glacct' => '会计科目',
    'assigned_user_id' => '负责人'
    ),
//Pavani...adding list of import fields for helpdesk and vendors
'helpdesk_import_fields' => Array(
        "ticketid"=>"故障单ID",
        "priority"=>"优先级",
        "severity"=>"严重程度",
        "status"=>"状态",
        "category"=>"类别",
        "title"=>"标题",
        "description"=>"描述",
        "solution"=>"解决方案"
        ),

'vendors_import_fields' => Array(
        "vendorid"=>"供应商Id",
        "vendorname"=>"供应商名字",
        "phone"=>"电话",
        "email"=>"Email",
        "website"=>"网站",
        "category"=>"类别",
        "street"=>"邮寄地址",
        "city"=>"城市",
        "state"=>"省份",
        "pobox"=>"邮政信箱",
        "postalcode"=>"邮政编码",
        "country"=>"国家",
        "description"=>"描述"
        )
//Pavani...end list
);

?>
