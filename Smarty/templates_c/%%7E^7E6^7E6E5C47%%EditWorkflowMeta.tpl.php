<?php /* Smarty version 2.6.18, created on 2013-01-24 03:40:03
         compiled from com_vtiger_workflow/EditWorkflowMeta.tpl */ ?>

<table class="listTableTopButtons" width="100%" border="0" cellspacing="0" cellpadding="5">
	<tr>
		<td class="small">
			<input type="hidden" name="module_name" value="<?php echo $this->_tpl_vars['workflow']->moduleName; ?>
" id="save_modulename">
			<input type="hidden" name="save_type" value="<?php echo $this->_tpl_vars['saveType']; ?>
" id="save_savetype">
			<?php if ($this->_tpl_vars['saveType'] == 'edit'): ?>
			<input type="hidden" name="workflow_id" value="<?php echo $this->_tpl_vars['workflow']->id; ?>
">
			<?php endif; ?>
			<input type="hidden" name="conditions" value="" id="save_conditions_json"/>
			<input type="hidden" name="action" value="saveworkflow" id="some_name">
			<input type="hidden" name="module" value="<?php echo $this->_tpl_vars['module']->name; ?>
" id="some_name">
			<span id="status_message"></span>
		</td>
	</tr>
</table>