<?php /* Smarty version 2.6.18, created on 2013-01-21 13:33:10
         compiled from modules/Import/Import_Step1.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'getTranslatedString', 'modules/Import/Import_Step1.tpl', 15, false),)), $this); ?>

<table width="100%" cellspacing="0" cellpadding="5">
	<tr>
		<td class="heading2"><?php echo getTranslatedString('LBL_IMPORT_STEP_1', $this->_tpl_vars['MODULE']); ?>
:</td>
		<td class="big"><?php echo getTranslatedString('LBL_IMPORT_STEP_1_DESCRIPTION', $this->_tpl_vars['MODULE']); ?>
</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>
			<input type="hidden" name="type" value="csv" />
			<input type="hidden" name="is_scheduled" value="1" />
			<input type="file" name="import_file" id="import_file" class="small" size="60" onchange="ImportJs.checkFileType()"/>
			<!-- input type="hidden" name="userfile_hidden" value=""/ -->
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td class="small"><?php echo getTranslatedString('LBL_IMPORT_SUPPORTED_FILE_TYPES', $this->_tpl_vars['MODULE']); ?>
</td>
	</tr>
</table>