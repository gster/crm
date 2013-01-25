<?php /* Smarty version 2.6.18, created on 2013-01-21 13:36:58
         compiled from modules/PickList/AssignPicklistValues.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'modules/PickList/AssignPicklistValues.tpl', 31, false),)), $this); ?>
<div style="position:relative;display: block;" id="orgLay" class="layerPopup">
	<table border="0" cellpadding="5" cellspacing="0" class="layerHeadingULine">
		<tr>
			<td class="layerPopupHeading" align="left" width="40%" nowrap><?php echo $this->_tpl_vars['MOD']['ASSIGN_PICKLIST_VALUES']; ?>
 - <?php echo $this->_tpl_vars['FIELDLABEL']; ?>
</td>
		</tr>
	</table>

	<table border="0" cellspacing="0" cellpadding="5" width="100%" id="assignPicklistTable">
	<tbody>
		<tr>	
			<td width="auto;">	
				<b><?php echo $this->_tpl_vars['MOD']['LBL_PICKLIST_VALUES']; ?>
</b>
				<select multiple id="availList" name="availList" class="small crmFormList" style="overflow:auto; height: 150px;width:200px;border:1px solid #666666;font-family:Arial, Helvetica, sans-serif;font-size:11px;">
					<?php $_from = $this->_tpl_vars['PICKVAL']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pick_key'] => $this->_tpl_vars['pick_val']):
?>
						<option value="<?php echo $this->_tpl_vars['pick_key']; ?>
"><?php echo $this->_tpl_vars['pick_val']; ?>
</option>
					<?php endforeach; endif; unset($_from); ?>
				</select>
			</td>
			<td align="center" width="25px;">
				<img border="0" title="right" alt="Move Right" onclick="moveRight();" style="cursor: pointer" src="<?php echo vtiger_imageurl('arrow_right.png', $this->_tpl_vars['THEME']); ?>
"/>
				<img border="0" title="left" alt="Remove" onclick="removeValue();" style="cursor: pointer" src="<?php echo vtiger_imageurl('arrow_left.png', $this->_tpl_vars['THEME']); ?>
"/>
			</td>
			<td width="auto;">
				<b><?php echo $this->_tpl_vars['MOD']['LBL_PICKLIST_VALUES_ASSIGNED_TO']; ?>
 <?php echo $this->_tpl_vars['ROLENAME']; ?>
</b>
				<select multiple id="selectedColumns" name="selectedColumns" class="small crmFormList" style="overflow:auto; height: 150px;width:200px;border:1px solid #666666;font-family:Arial, Helvetica, sans-serif;font-size:11px;">
					<?php $_from = $this->_tpl_vars['ASSIGNED_VALUES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['val']):
?>
						<option value="<?php echo $this->_tpl_vars['key']; ?>
"><?php echo $this->_tpl_vars['val']; ?>
</option>
					<?php endforeach; endif; unset($_from); ?>
        	    </select>
			</td>
			<td align="center">
				<img border="0" title="up" alt="Move Up" onclick="moveUp();" style="cursor: pointer" src="<?php echo vtiger_imageurl('arrow_up.png', $this->_tpl_vars['THEME']); ?>
"/>
				<img border="0" title="down" alt="Move Down" onclick="moveDown();" style="cursor: pointer" src="<?php echo vtiger_imageurl('arrow_down.png', $this->_tpl_vars['THEME']); ?>
"/>
			</td>
		</tr>
		<tr>
			<td>
				<a href='javascript:;' onclick="showRoleSelectDiv('<?php echo $this->_tpl_vars['ROLEID']; ?>
')" id="addRolesLink">
					<b><?php echo $this->_tpl_vars['MOD']['LBL_ADD_TO_OTHER_ROLES']; ?>
</b>
				</a>
			</td>
			<td colspan="3" valign="top" align="center" nowrap>
				<input type="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" name="save" class="crmButton small edit" onclick="saveAssignedValues('<?php echo $this->_tpl_vars['MODULE']; ?>
','<?php echo $this->_tpl_vars['FIELDNAME']; ?>
','<?php echo $this->_tpl_vars['ROLEID']; ?>
');">
				<input type="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" name="cancel" class="crmButton small cancel" onclick="fnhide('actiondiv');">
			</td>			
		</tr>
	</tbody>
	</table>
</div>