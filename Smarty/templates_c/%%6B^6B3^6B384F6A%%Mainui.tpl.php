<?php /* Smarty version 2.6.18, created on 2013-01-24 11:18:58
         compiled from modules/MailManager/Mainui.tpl */ ?>
<br>
<div id='mm_selected_folder'></div>
<div id="_folderdiv_"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/MailManager/Folder.List.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
<input type="hidden" name="refresh_timeout" id="refresh_timeout" value="<?php echo $this->_tpl_vars['MAILBOX']->refreshTimeOut(); ?>
"/>