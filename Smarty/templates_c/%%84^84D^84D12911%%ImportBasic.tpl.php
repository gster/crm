<?php /* Smarty version 2.6.18, created on 2013-01-21 13:33:10
         compiled from modules/Import/ImportBasic.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'getTranslatedString', 'modules/Import/ImportBasic.tpl', 25, false),)), $this); ?>
<script language="JavaScript" type="text/javascript" src="modules/MailManager/resources/jquery-1.6.2.min.js"></script>
<script type="text/javascript" charset="utf-8">
	jQuery.noConflict();
</script>
<script language="JavaScript" type="text/javascript" src="modules/Import/resources/Import.js"></script>

<form onsubmit="VtigerJS_DialogBox.block();" action="index.php" enctype="multipart/form-data" method="POST" name="importBasic">
	<input type="hidden" name="module" value="<?php echo $this->_tpl_vars['FOR_MODULE']; ?>
" />
	<input type="hidden" name="action" value="Import" />
	<input type="hidden" name="mode" value="upload_and_parse" />
	<table style="width:80%;margin-left:auto;margin-right:auto;margin-top:10px;" cellpadding="5" cellspacing="12" class="searchUIBasic">
		<tr>
			<td class="heading2" align="left" colspan="2">
				<?php echo getTranslatedString('LBL_IMPORT', $this->_tpl_vars['MODULE']); ?>
 <?php echo getTranslatedString($this->_tpl_vars['FOR_MODULE'], $this->_tpl_vars['FOR_MODULE']); ?>

			</td>
		</tr>
		<?php if ($this->_tpl_vars['ERROR_MESSAGE'] != ''): ?>
		<tr>
			<td class="style1" align="left" colspan="2">
				<?php echo $this->_tpl_vars['ERROR_MESSAGE']; ?>

			</td>
		</tr>
		<?php endif; ?>
		<tr>
			<td class="leftFormBorder1" width="60%" valign="top">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'modules/Import/Import_Step1.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</td>
			<td class="leftFormBorder1" width="40%" valign="top">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'modules/Import/Import_Step2.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</td>
		</tr>
		<tr>
			<td class="leftFormBorder1" colspan="2" valign="top">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'modules/Import/Import_Step3.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</td>
		</tr>
		<tr>
			<td align="right" colspan="2">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'modules/Import/Import_Basic_Buttons.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</td>
		</tr>
	</table>
</form>