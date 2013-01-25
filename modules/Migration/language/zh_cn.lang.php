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
 'LBL_MIGRATE_INFO' => '输入升级数据，从 <b><i> 来源版本 </i></b> 升级到 <b><i> 最新版本的vtigerCRM </i></b>',
  'LBL_CURRENT_VT_MYSQL_EXIST'=>'目前vtiger的Mysql数据库存在于',
  'LBL_THIS_MACHINE' => '本机',
  'LBL_DIFFERENT_MACHINE' => '不同机器',
  'LBL_CURRENT_VT_MYSQL_PATH' => '目前 vtiger 的Mysql数据库路径',
  'LBL_SOURCE_VT_MYSQL_DUMPFILE' => 'vtiger <b>来源版本</b> 的Mysql数据库导出的文件名称',
  'LBL_NOTE_TITLE' => '备注：',
 'LBL_NOTES_LIST1' => '如果目前的Mysql数据库是在本机，请输入Mysql数据库的路径或者Mysql数据库导出的文件。',
  'LBL_NOTES_LIST2' => '如果目前的Mysql数据库是在别的机器上，请输入Mysql数据库导出的文件的路径。',
  'LBL_NOTES_DUMP_PROCESS' => '如果需要导出Mysql数据库，请在<b>mysql/bin</b>目录下执行以下命令
			   <br><b>mysqldump --user="mysql_username"  --password="mysql-password" -h "hostname"  --port="mysql_port" "database_name" > dump_filename</b>
			   <br>在导出的文件的开始添加 <b>SET FOREIGN_KEY_CHECKS = 0;</b>
			   <br>在导出的文件的结尾添加 <b>SET FOREIGN_KEY_CHECKS = 1;</b>',
 'LBL_NOTES_LIST3' => '提供Mysql的路径类，就像是 <b>/home/crm/vtigerCRM4_5/mysql</b>',
  'LBL_NOTES_LIST4' => '提供导出的Mysql数据库的文件路径，就象是 <b>/home/fullpath/4_2_dump.txt</b>',

 'LBL_CURRENT_MYSQL_PATH_FOUND' => '目前Mysql的安装路径已经找到。。',
  'LBL_SOURCE_HOST_NAME' => '来源主机名称：',
  'LBL_SOURCE_MYSQL_PORT_NO' => '来源Mysql端口：',
  'LBL_SOURCE_MYSQL_USER_NAME' => '来源Mysql用户名：',
  'LBL_SOURCE_MYSQL_PASSWORD' => '来源Mysql密码：',
  'LBL_SOURCE_DB_NAME' => '来源Mysql数据库名称：',
  'LBL_MIGRATE' => '升级到最新版本',
//Added after 5 Beta 
'LBL_UPGRADE_VTIGER' => '升级 vtiger CRM 数据库',
  'LBL_UPGRADE_FROM_VTIGER_423' => '将数据库从 vtiger CRM 4.2.3 升级到 5.0.0',
  'LBL_SETTINGS' => '设置',
  'LBL_STEP' => '步骤',
  'LBL_SELECT_SOURCE' => '选择来源',
 'LBL_STEP1_DESC' => '升级数据库之前，您必须指定旧数据的保存格式',
  'LBL_RADIO_BUTTON1_TEXT' => '我有访问 vtiger CRM 数据库系统的权限',
  'LBL_RADIO_BUTTON1_DESC' => '这个选项需要您具有数据库服务器的地址和数据库访问权限。本地和远程机器均支持这种访问方法。需要帮助请参考相关文档。',
  'LBL_RADIO_BUTTON2_TEXT' => '我具有访问vtiger CRM数据库存档的权限',
  'LBL_RADIO_BUTTON2_DESC' => '这个选项需要数据库备份文件必须存在本机。您不能从其它机器访问这个备份文件。 需要帮助请参考相关文档。',
  'LBL_RADIO_BUTTON3_TEXT' => '我有4.2.3数据库文件',
  'LBL_RADIO_BUTTON3_DESC' => '这个选项需要vtiger CRM 4.2.3数据库系统的详细信息，包括mysql服务器ID，用户名，密码。您不能远程访问数据。',

'LBL_HOST_DB_ACCESS_DETAILS' => '数据库主机访问权限信息',
  'LBL_MYSQL_HOST_NAME_IP' => 'MySQL 主机名或IP地址：',
  'LBL_MYSQL_PORT' => 'MySQL 端口：',
  'LBL_MYSQL_USER_NAME' => 'MySQL 用户名：',
  'LBL_MYSQL_PASSWORD' => 'MySQL 密码：',
  'LBL_DB_NAME' => '数据库名称：',

 'LBL_LOCATE_DB_DUMP_FILE' => '指定数据库导出文件的位置',
  'LBL_DUMP_FILE_LOCATION' => '数据库导出文件的位置 :',

'LBL_RADIO_BUTTON3_PROCESS'=>'<font color="red">请不要指定4.2.3数据库的信息。这个选项将直接更改指定的数据库。</font>
<br>强烈建议执行一下步骤。
<br>1. 备份4.2.3的数据库
<br>2. 在vtiger 5.0数据库所在的机器上创建新数据库。
<br>3. 把4.2.3的备份文件导入到新数据库里。
<br>现在指定数据库的访问权限详细信息。升级将更改新数据库，以满足vtiger 5.0的数据库结构。
然后您就可以在config.inc.php里指定新数据库，例如, $dbconfig[\'db_name\'] = \'new db name\';',
  'LBL_ENTER_MYSQL_SERVER_PATH' => '输入 MySQL 服务器路径',
'LBL_SERVER_PATH_DESC' => 'MySQL的路径就像是 <b>/home/5beta/vtigerCRM5_beta/mysql/bin</b>(Linux) 或 <b>c:\Program Files\mysql\bin</b>(windows)',
  'LBL_MYSQL_SERVER_PATH' => 'MySQL 服务器路径：',
  'LBL_MIGRATE_BUTTON' => '升级',
  'LBL_CANCEL_BUTTON' => '取消',
'LBL_UPGRADE_FROM_VTIGER_5X' => '升级 vtiger CRM 5.x 数据库到下一个版本',
  'LBL_PATCH_OR_MIGRATION' => '您必须指定来源数据库的版本（修补程序更新或是转换）',
//Added for java script alerts
'ENTER_SOURCE_HOST' => '请输入源主机名称',
'ENTER_SOURCE_MYSQL_PORT' => '请输入源主机MYSQL名称',
'ENTER_SOURCE_MYSQL_USER' => '请输入mysql的用户名',
'ENTER_SOURCE_DATABASE' => '请输入数据库密码',
'ENTER_SOURCE_MYSQL_DUMP' => '请输入有效的mysql转储文件',
'ENTER_HOST' => '请输入主机名称',
'ENTER_MYSQL_PORT' => '请输入mysql的端口号',
'ENTER_MYSQL_USER' => '请输入mysql的用户名',
'ENTER_DATABASE' => '请输入数据库名',
'SELECT_ANYONE_OPTION' => '请选择其中的任何一个选项',
'ENTER_CORRECT_MYSQL_PATH' => '请输入正确的mysql路径',

);






?>
