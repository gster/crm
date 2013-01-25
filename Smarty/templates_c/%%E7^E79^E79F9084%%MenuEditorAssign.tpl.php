<?php /* Smarty version 2.6.18, created on 2013-01-21 06:54:23
         compiled from Settings/MenuEditorAssign.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'getTranslatedString', 'Settings/MenuEditorAssign.tpl', 16, false),array('modifier', 'vtiger_imageurl', 'Settings/MenuEditorAssign.tpl', 38, false),)), $this); ?>
<div style="position:relative;display: block;" id="orgLay" class="layerPopup">
	<table border="0" cellpadding="5" cellspacing="0" class="layerHeadingULine" align="center">
		<tr>
			<td align="left">
				<span class="layerPopupHeading" nowrap><?php echo getTranslatedString('LBL_MENUS_TO_SHOW'); ?>
</span>
				<br>
				<span class="small"><?php echo getTranslatedString('LBL_MENUS_TO_SHOW_DESCRIPTION'); ?>
</span>
			</td>
		</tr>
	</table>

	<table border="0" cellspacing="0" cellpadding="5" width="100%" id="assignPicklistTable" align="center">
	<tbody>
		<tr>
			<td width="auto;">
				<b><?php echo $this->_tpl_vars['MOD']['LBL_ALL_MODULES']; ?>
</b>
				<select multiple id="availList" name="availList" class="small crmFormList" style="overflow:auto; height: 150px;width:200px;border:1px solid #666666;font-family:Arial, Helvetica, sans-serif;font-size:11px;" >
					<?php $_from = $this->_tpl_vars['ALLMENUS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['pname'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['pname']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['number'] => $this->_tpl_vars['menus']):
        $this->_foreach['pname']['iteration']++;
?>
                                        <?php $this->assign('modulelabel', $this->_tpl_vars['menus'][0]); ?>
                                        <?php $this->assign('modulename', getTranslatedString($this->_tpl_vars['menus'][1], $this->_tpl_vars['menus'][0])); ?>
                                        <?php $this->assign('tabid', $this->_tpl_vars['menus'][2]); ?>
						<option value="<?php echo $this->_tpl_vars['tabid']; ?>
"><?php echo $this->_tpl_vars['modulename']; ?>
</option>
                                        <?php endforeach; endif; unset($_from); ?>
				</select>
			</td>
			<td align="center" width="25px;">
				<img border="0" title="right" alt="Move Right" onclick="copySelectedOptions('availList','selectedColumns');" style="cursor: pointer" src="<?php echo vtiger_imageurl('arrow_right.png', $this->_tpl_vars['THEME']); ?>
"/>
				<img border="0" title="left" alt="Remove" onclick="removeSelectedOptions('selectedColumns');" style="cursor: pointer" src="<?php echo vtiger_imageurl('arrow_left.png', $this->_tpl_vars['THEME']); ?>
"/>
			</td>
			<td width="auto;">
				<b><?php echo $this->_tpl_vars['MOD']['LBL_SELECTED_MODULES']; ?>
</b>
				<select multiple id="selectedColumns" name="selectedColumns" class="small crmFormList" style="overflow:auto; height: 150px;width:200px;border:1px solid #666666;font-family:Arial, Helvetica, sans-serif;font-size:11px;" size="11">
					<?php $_from = $this->_tpl_vars['ASSIGNED_VALUES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['pname'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['pname']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['number'] => $this->_tpl_vars['menus']):
        $this->_foreach['pname']['iteration']++;
?>
                                        <?php $this->assign('modulelabel', $this->_tpl_vars['menus'][0]); ?>
                                        <?php $this->assign('modulename', getTranslatedString($this->_tpl_vars['menus'][1], $this->_tpl_vars['menus'][0])); ?>
                                        <?php $this->assign('tabid', $this->_tpl_vars['menus'][2]); ?>
						<option value="<?php echo $this->_tpl_vars['tabid']; ?>
"><?php echo $this->_tpl_vars['modulename']; ?>
</option>
                                    <?php endforeach; endif; unset($_from); ?>
                               </select>
			</td>
			<td align="center">
				<img border="0" title="up" alt="Move Up" onclick="MenuEditorJs.moveUp();" style="cursor: pointer" src="<?php echo vtiger_imageurl('arrow_up.png', $this->_tpl_vars['THEME']); ?>
"/>
				<img border="0" title="down" alt="Move Down" onclick="MenuEditorJs.moveDown();" style="cursor: pointer" src="<?php echo vtiger_imageurl('arrow_down.png', $this->_tpl_vars['THEME']); ?>
"/>
			</td>
		</tr>
		<tr>

			<td colspan="3" valign="top" align="center" nowrap>
				<input type="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" name="save" class="crmButton small edit" onclick="MenuEditorJs.saveAssignedValues();">
				<input type="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" name="cancel" onclick="window.history.back()" class="crmButton small cancel" >
			</td>
		</tr>
	</tbody>
	</table>
</div>