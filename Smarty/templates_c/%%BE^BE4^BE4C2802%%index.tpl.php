<?php /* Smarty version 2.6.18, created on 2013-01-24 11:18:57
         compiled from modules/MailManager/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'modules/MailManager/index.tpl', 40, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'Buttons_List1.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type='text/javascript' src='include/js/json.js'></script>
<script type='text/javascript' src='include/ckeditor/ckeditor.js'></script>

<script type='text/javascript' src='modules/MailManager/resources/jquery-1.6.2.min.js'></script>
<script type='text/javascript' src='modules/MailManager/resources/jquery-ui-1.8.16.custom.min.js'></script>
<script type='text/javascript'>
	jQuery.noConflict();
</script>

<script type='text/javascript' src='modules/MailManager/resources/jquery.tokeninput.js'></script>
<link rel='stylesheet' type='text/css' href='modules/MailManager/resources/token-input-facebook.css'>

<script type='text/javascript' src='modules/MailManager/MailManager.js'></script>

<link href="modules/MailManager/third-party/AjaxUpload/fileuploader.css" rel="stylesheet" type="text/css">
<script src="modules/MailManager/third-party/AjaxUpload/fileuploader.js" type="text/javascript"></script>
<script src="modules/MailManager/MailManagerUploadFile.js" type="text/javascript"></script>

<script type='text/javascript'>
var MailManageri18nInfo = {};
<?php $_from = $this->_tpl_vars['MOD']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i18nKey'] => $this->_tpl_vars['i18nValue']):
?>
	<?php if (strpos ( $this->_tpl_vars['i18nKey'] , 'JSLBL_' ) === 0): ?>
		MailManageri18nInfo['<?php echo $this->_tpl_vars['i18nKey']; ?>
'] = '<?php echo $this->_tpl_vars['i18nValue']; ?>
';
	<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
</script>

<table border=0 cellspacing=0 cellpadding=0 width=98%>
<tr>
	<td valign=top align=right width='8px'><img src='<?php echo vtiger_imageurl('showPanelTopLeft.gif', $this->_tpl_vars['THEME']); ?>
' ></td>
	<td class='showPanelBg' valign='top' >

		<div id='_progress_' style='float: right; display: none; position: absolute; right: 35px; font-weight: bold;'>
		<span id='_progressmsg_'>...</span><img src="<?php echo vtiger_imageurl('vtbusy.gif', $this->_tpl_vars['THEME']); ?>
" border='0' align='absmiddle'></div>

		<div style='padding: 20px 5px 20px 20px; min-height: 300px;' id='_mailmanagermaindiv_'>
			<table width="100%" cellpadding=0 cellspacing=0 align=left>
			<tr valign=top>
				<td nowrap="nowrap" width="15%">
					<div id="_quicklinks_mainuidiv_"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/MailManager/Mainui.QuickLinks.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
					<div id='_folderprogress_' style='float: right; display: none; position: absolute;left: 30px; font-weight: bold;'>
						<span><?php echo $this->_tpl_vars['MOD']['JSLBL_LOADING_FOLDERS']; ?>
</span><img src="<?php echo vtiger_imageurl('vtbusy.gif', $this->_tpl_vars['THEME']); ?>
" border='0' align='absmiddle'>
					</div>
					<div id="_mainfolderdiv_" >
					</div>
				</td>
				<td width="85%">
					<span id="_messagediv_"><?php if ($this->_tpl_vars['ERROR']): ?><p><?php echo $this->_tpl_vars['ERROR']; ?>
</p><?php endif; ?></span>
						<div id="_contentdiv_"></div>
						<div id="_contentdiv2_"></div>
						<div id="_settingsdiv_"></div>
						<div id="_relationpopupdiv_" style="display:none;position:absolute;width:800px;z-index:80000;"></div>
						<div id="_replydiv_" style="display:none;">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/MailManager/Mail.Send.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						</div>
						<div id="replycontentdiv" style="display:none;">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/MailManager/Mail.Send.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						</div>
				</td>
			</tr>
			</table>
		</div>
		<div id = '__vtiger__'></div>
	</td>
	<td valign=top align=right width='8px'><img src='<?php echo vtiger_imageurl('showPanelTopRight.gif', $this->_tpl_vars['THEME']); ?>
'></td>
</tr>
</table>

<script type='text/javascript'>
<?php echo '
	Event.observe(window, \'load\', MailManager.mainui);
'; ?>

</script>
<input type="hidden" name="module" value="MailManager">