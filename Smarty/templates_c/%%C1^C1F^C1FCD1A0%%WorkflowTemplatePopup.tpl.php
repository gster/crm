<?php /* Smarty version 2.6.18, created on 2013-01-24 03:40:03
         compiled from com_vtiger_workflow/WorkflowTemplatePopup.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'com_vtiger_workflow/WorkflowTemplatePopup.tpl', 20, false),)), $this); ?>

<div id="new_template_popup" class='layerPopup' style="display:none;">
	<table width="100%" cellspacing="0" cellpadding="5" border="0" class="layerHeadingULine">
		<tr>
			<td width="60%" align="left" class="layerPopupHeading">
				<?php echo $this->_tpl_vars['MOD']['LBL_NEW_TEMPLATE']; ?>

			</td>
			<td width="40%" align="right">
				<a href="javascript:void(0);" id="new_template_popup_close">
					<img border="0" align="middle" src="<?php echo vtiger_imageurl('close.gif', $this->_tpl_vars['THEME']); ?>
"/>
				</a>
			</td>
		</tr>
	</table>

	<form action="index.php" method="get" accept-charset="utf-8" onsubmit="VtigerJS_DialogBox.block();">
	<div class="popup_content">
		<table width="100%" cellspacing="0" cellpadding="5" border="0" class="small">
		<tr align="left">
			<td width="40px" nowrap="nowrap"><font color="red">*</font> <?php echo $this->_tpl_vars['APP']['LBL_TITLE']; ?>
</td>
			<td><input type="text" name="title" class='detailedViewTextBox'></td>
		</tr>
		</table>
		<input type="hidden" name="module_name" value="<?php echo $this->_tpl_vars['workflow']->moduleName; ?>
">
		<input type="hidden" name="save_type" value="new" id="save_type_new">
		<input type="hidden" name="module" value="<?php echo $this->_tpl_vars['module']->name; ?>
" id="save_module">
		<input type="hidden" name="action" value="savetemplate" id="save_action">
		<input type="hidden" name="return_url" value="<?php echo $this->_tpl_vars['newTaskReturnUrl']; ?>
" id="save_return_url">
		<input type="hidden" name="workflow_id" value="<?php echo $this->_tpl_vars['workflow']->id; ?>
">

		<table width="100%" cellspacing="0" cellpadding="5" border="0" class="layerPopupTransport">
		<tr><td align="center">
			<input type="submit" class="crmButton small save" value="<?php echo $this->_tpl_vars['APP']['LBL_CREATE_BUTTON_LABEL']; ?>
" name="save" id='new_template_popup_save'/>
			<input type="button" class="crmButton small cancel" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
 " name="cancel" id='new_template_popup_cancel'/>
		</td></tr>
		</table>
	</div>
	</form>
</div>