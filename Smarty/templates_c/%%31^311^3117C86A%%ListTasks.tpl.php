<?php /* Smarty version 2.6.18, created on 2013-01-24 03:40:03
         compiled from com_vtiger_workflow/ListTasks.tpl */ ?>

<table class="tableHeading" width="100%" border="0" cellspacing="0" cellpadding="5">
	<tr>
		<td class="big" nowrap="nowrap">
			<strong><?php echo $this->_tpl_vars['MOD']['LBL_TASKS']; ?>
</strong>
		</td>
		<td class="small" align="right">
			<input type="button" class="crmButton create small" value="<?php echo $this->_tpl_vars['MOD']['LBL_NEW_TASK_BUTTON_LABEL']; ?>
" id='new_task' style="display:none;" />
		</td>
	</tr>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'com_vtiger_workflow/TaskSummaryList.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>