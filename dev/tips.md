#数据库修改
##行业下拉菜单自定义；数据库中 vtiger_industry 表选项；翻译在/var/www/crm/modules/Accounts/language/中有对应
##vtiger_role表中，可更改组织角色的根节点名称Organisation为中文
##vtiger_profile表编辑默认权限名称
##修改系统中的默认报表：数据库vtiger_reportfolder及vtiger_report表
--------------------------
#文件修改
##index.php:最后修改footer内容
##/var/www/crm/Smarty/templates更改布局及样式：
###login.tpl:login页面
###Header.tpl:更改logo， 修改图标下拉菜单的烂设计；等等；=>modules/vtiger/header.php获取值 
###Button_list.tpl和Buttou_list1.tpl修改按钮，禁止chat按钮：修改config.inc.php
##全文搜索出错的问题：./include/utils/SearchUtils.php，line1091，在like后增加关键词‘binary’即可。http://www.ossez.com/thread-22704-1-1.html
##可以修改 themes\×××\style.css 文件的字体定义来使vTiger使用微软雅黑作为中文字体显示。font-family: Tahoma,'Microsoft Yahei','Simsun';




