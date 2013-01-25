<?php /* Smarty version 2.6.18, created on 2013-01-24 03:40:03
         compiled from com_vtiger_workflow/EditWorkflowBasicInfo.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'getTranslatedString', 'com_vtiger_workflow/EditWorkflowBasicInfo.tpl', 34, false),)), $this); ?>

<table class="tableHeading" width="100%" border="0" cellspacing="0" cellpadding="5">
	<tr>
		<td class="big" nowrap="nowrap">
			<strong><?php echo $this->_tpl_vars['MOD']['LBL_SUMMARY']; ?>
</strong>
		</td>
		<td align="right">
			<?php if ($this->_tpl_vars['saveType'] == 'edit'): ?>
			<input type="button" class="crmButton create small" value="<?php echo $this->_tpl_vars['MOD']['LBL_NEW_TEMPLATE']; ?>
" id="new_template"/>
			<?php endif; ?>
			<input type="submit" id="save_submit" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_LABEL']; ?>
" class="crmButton small save" style="display:none;">
			<input type="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" class="crmButton small cancel"
				onclick="window.location.href='index.php?module=com_vtiger_workflow&action=workflowlist&parenttab=Settings'">
		</td>
	</tr>
</table>
<table border="0" cellpadding="5" cellspacing="0" width="100%">
	<tr>
		<td class="dvtCellLabel" align=right width=20%><b><span style='color:red;'>*</span> <?php echo $this->_tpl_vars['APP']['LBL_UPD_DESC']; ?>
</b></td>
		<td class="dvtCellInfo" align="left"><input type="text" class="detailedViewTextBox" name="description" id="save_description" value="<?php echo $this->_tpl_vars['workflow']->description; ?>
"></td>
	</tr>
	<tr>
		<td class="dvtCellLabel" align=right width=20%><b><?php echo $this->_tpl_vars['APP']['LBL_MODULE']; ?>
</b></td>
		<td class="dvtCellInfo" align="left"><?php echo getTranslatedString($this->_tpl_vars['workflow']->moduleName, $this->_tpl_vars['workflow']->moduleName); ?>
</td>
	</tr>
</table>