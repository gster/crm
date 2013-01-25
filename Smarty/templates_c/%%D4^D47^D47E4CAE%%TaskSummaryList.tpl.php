<?php /* Smarty version 2.6.18, created on 2013-01-24 03:40:03
         compiled from com_vtiger_workflow/TaskSummaryList.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'to_html', 'com_vtiger_workflow/TaskSummaryList.tpl', 26, false),array('modifier', 'getTranslatedString', 'com_vtiger_workflow/TaskSummaryList.tpl', 30, false),array('modifier', 'vtiger_imageurl', 'com_vtiger_workflow/TaskSummaryList.tpl', 32, false),)), $this); ?>

<table class="listTable" width="100%" border="0" cellspacing="1" cellpadding="5" id='expressionlist'>
	<tr>
		<td class="colHeader small" width="70%">
			<?php echo $this->_tpl_vars['MOD']['LBL_TASK']; ?>

		</td>
		<td class="colHeader small" width="15%">
			<?php echo $this->_tpl_vars['MOD']['LBL_STATUS']; ?>

		</td>
		<td class="colHeader small" width="15%">
			<?php echo $this->_tpl_vars['MOD']['LBL_LIST_TOOLS']; ?>

		</td>
	</tr>
	<?php $_from = $this->_tpl_vars['tasks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['task']):
?>
	<tr>
		<td class="listTableRow small"><?php echo to_html($this->_tpl_vars['task']->summary); ?>
</td>
		<td class="listTableRow small"><?php if ($this->_tpl_vars['task']->active): ?>Active<?php else: ?>Inactive<?php endif; ?></td>
		<td class="listTableRow small">
			<a href="<?php echo $this->_tpl_vars['module']->editTaskUrl($this->_tpl_vars['task']->id); ?>
">
				<img border="0" title="<?php echo getTranslatedString('LBL_EDIT_BUTTON', $this->_tpl_vars['MODULE']); ?>
" alt="<?php echo getTranslatedString('LBL_EDIT_BUTTON', $this->_tpl_vars['MODULE']); ?>
" \
					style="cursor: pointer;" id="expressionlist_editlink_<?php echo $this->_tpl_vars['task']->id; ?>
" \
					src="<?php echo vtiger_imageurl('editfield.gif', $this->_tpl_vars['THEME']); ?>
"/>
			</a>
			<a href="<?php echo $this->_tpl_vars['module']->deleteTaskUrl($this->_tpl_vars['task']->id); ?>
" onclick="return confirm('<?php echo $this->_tpl_vars['APP']['SURE_TO_DELETE']; ?>
');">
				<img border="0" title="<?php echo getTranslatedString('LBL_DELETE_BUTTON', $this->_tpl_vars['MODULE']); ?>
" alt="<?php echo getTranslatedString('LBL_DELETE_BUTTON', $this->_tpl_vars['MODULE']); ?>
"\
					src="<?php echo vtiger_imageurl('delete.gif', $this->_tpl_vars['THEME']); ?>
" \
					style="cursor: pointer;" id="expressionlist_deletelink_<?php echo $this->_tpl_vars['task']->id; ?>
"/>
			</a>
		</td>
	</tr>
	<?php endforeach; endif; unset($_from); ?>
</table>