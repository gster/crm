<?php /* Smarty version 2.6.18, created on 2013-01-24 03:40:03
         compiled from com_vtiger_workflow/EditWorkflowTriggerTypes.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageURL', 'com_vtiger_workflow/EditWorkflowTriggerTypes.tpl', 19, false),)), $this); ?>

<table class="tableHeading" width="100%" border="0" cellspacing="0" cellpadding="5">
	<tr>
		<td class="big" nowrap="nowrap">
			<strong><?php echo $this->_tpl_vars['MOD']['LBL_WHEN_TO_RUN_WORKFLOW']; ?>
</strong>
		</td>
		<td width="5%" align="right">
			<a href="<?php echo $this->_tpl_vars['WORKFLOW_TRIGGER_TYPES_HELP_LINK']; ?>
" target="_blank" style="cursor:pointer;">
				<img border="0" title="" alt="" src="<?php echo vtiger_imageURL('help_icon.gif', $this->_tpl_vars['THEME']); ?>
" />
			</a>
		</td>
	</tr>
</table>
<?php if ($this->_tpl_vars['workflow']->executionConditionAsLabel() == 'MANUAL'): ?>
	<?php $this->assign('DISABLE_TYPE_CHANGE', 'disabled'); ?>
<?php else: ?>
	<?php $this->assign('DISABLE_TYPE_CHANGE', ""); ?>
<?php endif; ?>
<table border="0" >
	<tr><td><input type="radio" name="execution_condition" value="ON_FIRST_SAVE"
		<?php if ($this->_tpl_vars['workflow']->executionConditionAsLabel() == 'ON_FIRST_SAVE'): ?>checked<?php endif; ?> <?php echo $this->_tpl_vars['DISABLE_TYPE_CHANGE']; ?>
 /></td>
		<td><?php echo $this->_tpl_vars['MOD']['LBL_ONLY_ON_FIRST_SAVE']; ?>
.</td></tr>
	<tr><td><input type="radio" name="execution_condition" value="ONCE"
		<?php if ($this->_tpl_vars['workflow']->executionConditionAsLabel() == 'ONCE'): ?>checked<?php endif; ?> <?php echo $this->_tpl_vars['DISABLE_TYPE_CHANGE']; ?>
 /></td>
		<td><?php echo $this->_tpl_vars['MOD']['LBL_UNTIL_FIRST_TIME_CONDITION_TRUE']; ?>
.</td></tr>
	<tr><td><input type="radio" name="execution_condition" value="ON_EVERY_SAVE"
		<?php if ($this->_tpl_vars['workflow']->executionConditionAsLabel() == 'ON_EVERY_SAVE'): ?>checked<?php endif; ?> <?php echo $this->_tpl_vars['DISABLE_TYPE_CHANGE']; ?>
/></td>
		<td><?php echo $this->_tpl_vars['MOD']['LBL_EVERYTIME_RECORD_SAVED']; ?>
.</td></tr>
	<tr><td><input type="radio" name="execution_condition" value="ON_MODIFY"
		<?php if ($this->_tpl_vars['workflow']->executionConditionAsLabel() == 'ON_MODIFY'): ?>checked<?php endif; ?> <?php echo $this->_tpl_vars['DISABLE_TYPE_CHANGE']; ?>
/></td>
		<td><?php echo $this->_tpl_vars['MOD']['LBL_ON_MODIFY']; ?>
.</td></tr>
	<tr><td><input type="radio" name="execution_condition" value="MANUAL"
		<?php if ($this->_tpl_vars['workflow']->executionConditionAsLabel() == 'MANUAL'): ?>checked<?php endif; ?> disabled /></td>
		<td><?php echo $this->_tpl_vars['MOD']['LBL_MANUAL']; ?>
.</td></tr>
</table>