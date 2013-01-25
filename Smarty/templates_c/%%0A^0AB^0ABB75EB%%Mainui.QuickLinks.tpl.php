<?php /* Smarty version 2.6.18, created on 2013-01-24 11:18:57
         compiled from modules/MailManager/Mainui.QuickLinks.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'getTranslatedString', 'modules/MailManager/Mainui.QuickLinks.tpl', 11, false),array('modifier', 'vtiger_imageurl', 'modules/MailManager/Mainui.QuickLinks.tpl', 25, false),)), $this); ?>
<table cellpadding=0 cellspacing=0 border=0 class="small" width="98%">
<tr>
	<td class="txtGreen" style="padding-left: 5px;"><strong><?php echo getTranslatedString('LBL_Mailbox'); ?>
</strong></td>
</tr>
<tr>
	<td style="padding-left: 5px;" class="dvtContentSpace">
	<table cellpadding=2 cellspacing=0 border=0 class="small" width="100%">

		<?php if ($this->_tpl_vars['MAILBOX'] && $this->_tpl_vars['MAILBOX']->exists()): ?>
		<tr>
			<td>
                <input type=hidden name="mm_selected_folder" id="mm_selected_folder">
                <input type="hidden" name="_folder" id="mailbox_folder">
			</td>
		</tr>
		<tr>
			<td nowrap="nowrap"><img src="<?php echo vtiger_imageurl('compose.gif', $this->_tpl_vars['THEME']); ?>
" border='0'></td>
			<td><a href="#Compose" id="_mailfolder_mm_compose" onclick="MailManager.mail_compose();"><?php echo getTranslatedString('LBL_Compose'); ?>
</a></td>
		</tr>
		<tr>
			<td nowrap="nowrap"><img src="<?php echo vtiger_imageurl('reload.gif', $this->_tpl_vars['THEME']); ?>
" border='0'/></td>
			<td><a href='#Reload' id="_mailfolder_mm_reload" onclick="MailManager.reload_now();"><?php echo getTranslatedString('LBL_Refresh'); ?>
</a></td>
		</tr>
		<?php endif; ?>

		<tr>
			<td nowrap="nowrap"><img align="absbottom" src="<?php echo vtiger_imageurl('settings_top.gif', $this->_tpl_vars['THEME']); ?>
" border='0'/></td>
			<td><a href='#Settings' id="_mailfolder_mm_settings" onclick="MailManager.open_settings();"><?php echo getTranslatedString('JSLBL_Settings'); ?>
</a></td>
		</tr>
		<tr>
			<td width="5px" nowrap="nowrap"><img src="<?php echo vtiger_imageurl('mymail.gif', $this->_tpl_vars['THEME']); ?>
" border='0'/></td>
            <td><a href="#Drafts" id="_mailfolder_mm_drafts" onclick="MailManager.folder_drafts();"><?php echo getTranslatedString('LBL_Drafts'); ?>
</a></td>
		</tr>
	</table>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "SentMailFolders.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</td>
</tr>
</table>