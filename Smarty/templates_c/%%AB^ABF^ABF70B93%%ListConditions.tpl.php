<?php /* Smarty version 2.6.18, created on 2013-01-24 03:40:03
         compiled from com_vtiger_workflow/ListConditions.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'com_vtiger_workflow/ListConditions.tpl', 19, false),)), $this); ?>

<table class="tableHeading" width="100%" border="0" cellspacing="0" cellpadding="5">
	<tr>
		<td class="big" nowrap="nowrap">
			<strong><?php echo $this->_tpl_vars['MOD']['LBL_CONDITIONS']; ?>
</strong>
		</td>
		<td class="small" align="right">
			<span id="workflow_loading" style="display:none">
			  <b><?php echo $this->_tpl_vars['MOD']['LBL_LOADING']; ?>
</b><img src="<?php echo vtiger_imageurl('vtbusy.gif', $this->_tpl_vars['THEME']); ?>
" border="0">
			</span>
			<input type="button" class="crmButton create small"
				value="<?php echo $this->_tpl_vars['MOD']['LBL_NEW_CONDITION_GROUP_BUTTON_LABEL']; ?>
" id="save_conditions_add" style='display: none;'/>
		</td>
	</tr>
</table>
<br>
<div id="save_conditions"></div>
<br>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "com_vtiger_workflow/FieldExpressions.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>