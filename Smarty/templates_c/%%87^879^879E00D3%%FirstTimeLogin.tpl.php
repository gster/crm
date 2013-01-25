<?php /* Smarty version 2.6.18, created on 2013-01-21 06:16:45
         compiled from Home/FirstTimeLogin.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'Home/FirstTimeLogin.tpl', 17, false),)), $this); ?>
<div id="vtigerHelpWelcomePopupLay" style="display:none;width:700px;box-shadow: 5px 8px 10px #777777;" class="vtigerHelpWelcomePopupLay">
	<table class="layerHeadingULine hdrTabBg" width="100%" cellpadding="5" cellspacing="0" width="100%" border="0" >
	<tr valign="top">
		<td class="genHeaderSmall">
			Getting started
		</td>
		<td align="right">
			<a href="javascript:;" onclick='$("vtigerHelpWelcomePopupLay").style.display="none";VtigerJS_DialogBox.unblock();'><img src="<?php echo vtiger_imageurl('help_close_black.png', $this->_tpl_vars['THEME']); ?>
" border="0" align="absmiddle" width="13px" heigth="13px" style="padding-right:2px;"></a>
		</td>
	</tr>
	</table>
	<table width="100%" cellpadding="5" cellspacing="0" border="0">
	<tr>
		<td colspan="2">
			<div id="vtigerHelpWelcomePopupContent" class="vtigerHelpPopupLay">
				<img src="<?php echo vtiger_imageurl('vtbusy.gif', $this->_tpl_vars['THEME']); ?>
">
			</div>
		</td>
	</table>
        <div id="vtigerHelpWelcomeGTranslateEl"></div>
</div>

<?php echo '
<script type="text/javascript">
Event.observe(window, \'load\', function(){
	if (typeof vtiger_help_welcome == \'function\') {
		vtiger_help_welcome($(\'vtigerHelpWelcomePopupLay\'), $(\'vtigerHelpWelcomePopupContent\'));
	}
});
</script>
'; ?>
