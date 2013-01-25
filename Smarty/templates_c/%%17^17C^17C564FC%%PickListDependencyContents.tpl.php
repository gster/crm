<?php /* Smarty version 2.6.18, created on 2013-01-21 13:45:09
         compiled from modules/PickList/PickListDependencyContents.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'getTranslatedString', 'modules/PickList/PickListDependencyContents.tpl', 17, false),array('modifier', 'count', 'modules/PickList/PickListDependencyContents.tpl', 40, false),array('modifier', 'htmlentities', 'modules/PickList/PickListDependencyContents.tpl', 120, false),array('modifier', 'addslashes', 'modules/PickList/PickListDependencyContents.tpl', 120, false),array('modifier', 'array_search', 'modules/PickList/PickListDependencyContents.tpl', 140, false),array('modifier', 'decode_html', 'modules/PickList/PickListDependencyContents.tpl', 141, false),array('modifier', 'in_array', 'modules/PickList/PickListDependencyContents.tpl', 143, false),)), $this); ?>

<div id="pickListContents">	
	<table border=0 cellspacing=0 cellpadding=5 width=100% class="tableHeading">
		<tr>
			<td class="small cellLabel" width="20%" nowrap>
				<strong><?php echo $this->_tpl_vars['APP']['LBL_MODULE']; ?>
 : </strong>&nbsp; <?php echo getTranslatedString($this->_tpl_vars['MODULE'], $this->_tpl_vars['MODULE']); ?>

			</td>
			<td class="small cellLabel" width="30%">
				<b><?php echo $this->_tpl_vars['MOD_PICKLIST']['LBL_SOURCE_FIELD']; ?>
</b>
				<select name="sourcefield" id="sourcefield" class="small" <?php if ($this->_tpl_vars['DEPENDENCY_MAP']['sourcefield'] != ''): ?> disabled <?php endif; ?>>
					<?php $_from = $this->_tpl_vars['ALL_LISTS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fld_nam'] => $this->_tpl_vars['fld_lbl']):
?>
						<option value="<?php echo $this->_tpl_vars['fld_nam']; ?>
"	<?php if ($this->_tpl_vars['DEPENDENCY_MAP'] != '' && $this->_tpl_vars['DEPENDENCY_MAP']['sourcefield'] == $this->_tpl_vars['fld_nam']): ?> selected <?php endif; ?>>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['fld_lbl'])) ? $this->_run_mod_handler('getTranslatedString', true, $_tmp, $this->_tpl_vars['MODULE']) : getTranslatedString($_tmp, $this->_tpl_vars['MODULE'])); ?>

						</option>
					<?php endforeach; endif; unset($_from); ?>
				</select>
			</td>
			<td class="small cellLabel" width="30%">
				<b><?php echo $this->_tpl_vars['MOD_PICKLIST']['LBL_TARGET_FIELD']; ?>
</b>&nbsp;
				<select name="targetfield" id="targetfield" class="small" <?php if ($this->_tpl_vars['DEPENDENCY_MAP']['sourcefield'] != ''): ?> disabled <?php endif; ?>>
					<?php $_from = $this->_tpl_vars['ALL_LISTS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fld_nam'] => $this->_tpl_vars['fld_lbl']):
?>
						<option value="<?php echo $this->_tpl_vars['fld_nam']; ?>
"	<?php if ($this->_tpl_vars['DEPENDENCY_MAP'] != '' && $this->_tpl_vars['DEPENDENCY_MAP']['targetfield'] == $this->_tpl_vars['fld_nam']): ?> selected <?php endif; ?>>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['fld_lbl'])) ? $this->_run_mod_handler('getTranslatedString', true, $_tmp, $this->_tpl_vars['MODULE']) : getTranslatedString($_tmp, $this->_tpl_vars['MODULE'])); ?>

						</option>
					<?php endforeach; endif; unset($_from); ?>
				</select>
			</td>
			<td nowrap align="right" class="small cellLabel">
				<?php if ($this->_tpl_vars['DEPENDENCY_MAP'] != '' && count($this->_tpl_vars['DEPENDENCY_MAP']) > 0): ?>
				<input type="submit" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" name="save" class="crmButton small save" onclick="saveDependency('<?php echo $this->_tpl_vars['MODULE']; ?>
');" />
				<?php else: ?>
				<input type="submit" value="<?php echo $this->_tpl_vars['APP']['LBL_NEXT_BUTTON_LABEL']; ?>
" name="next" class="crmButton small save" onclick="editNewDependencyPicklist('<?php echo $this->_tpl_vars['MODULE']; ?>
');" />
				<?php endif; ?>
		 		<input type="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" name="cancel" class="crmButton small cancel" onclick="location.href='index.php?module=PickList&action=PickListDependencySetup&parenttab=Settings&moduleName=<?php echo $this->_tpl_vars['MODULE']; ?>
';" />
		 	</td>
		</tr>

		<?php if ($this->_tpl_vars['DEPENDENCY_MAP'] != '' && count($this->_tpl_vars['DEPENDENCY_MAP']) > 0): ?>
		<tr class="small cellLabel">
			<td align="left" colspan="3">
				<ul>
					<li><?php echo $this->_tpl_vars['MOD_PICKLIST']['LBL_CONFIGURE_DEPENDENCY_HELP_1']; ?>
.</li>
					<li><?php echo $this->_tpl_vars['MOD_PICKLIST']['LBL_CONFIGURE_DEPENDENCY_HELP_2']; ?>
.</li>
					<li><?php echo $this->_tpl_vars['MOD_PICKLIST']['LBL_CONFIGURE_DEPENDENCY_HELP_3']; ?>

						<span class="selectedCellIndex"><?php echo $this->_tpl_vars['MOD_PICKLIST']['LBL_SELECTED_VALUES']; ?>
</span>
					</li>
				</ul>
			</td>
			<td align="right" valign="top">
				<input type="button" class="small create" onclick="show('sourceValuesSelectionDiv');placeAtCenter($('sourceValuesSelectionDiv'));"
					    value="<?php echo getTranslatedString('LBL_BUTTON_SELECTED_SOURCE_VALUES', $this->_tpl_vars['PICKLIST_MODULE']); ?>
"
						title="<?php echo getTranslatedString('LBL_BUTTON_SELECTED_SOURCE_VALUES', $this->_tpl_vars['PICKLIST_MODULE']); ?>
"/>

				<div style="display:none;position:absolute;" id="sourceValuesSelectionDiv">
					<div class="layerPopup" style="position:relative; display:block; padding:10px">
						<table cellspacing="0" cellpadding="5" border="0" class="layerHeadingULine" width="100%">
							<tr>
								<td nowrap="" align="left" class="layerPopupHeading warning">
									<?php echo $this->_tpl_vars['MOD_PICKLIST']['LBL_SELECTED_SOURCE_VALUES_MSG']; ?>

								</td>
							</tr>
						</table>
						<table cellspacing="0" cellpadding="5" border="0" class="small" width="100%">
							<tr>
							<?php $_from = $this->_tpl_vars['SOURCE_VALUES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sourceValuesLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sourceValuesLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['SOURCE_INDEX'] => $this->_tpl_vars['SOURCE_VALUE']):
        $this->_foreach['sourceValuesLoop']['iteration']++;
?>
								<?php if (($this->_foreach['sourceValuesLoop']['iteration']-1) % 4 == 0): ?>
									</tr><tr>
								<?php endif; ?>
								<td class="small" width="25%">
									<input type="checkbox" name="selectedSourceValues" id="sourceValue<?php echo $this->_tpl_vars['SOURCE_INDEX']; ?>
"
										   value="<?php echo $this->_tpl_vars['DEPENDENCY_MAP']['sourcefield']; ?>
<?php echo $this->_tpl_vars['SOURCE_INDEX']; ?>
" />
									<?php echo getTranslatedString($this->_tpl_vars['SOURCE_VALUE'], $this->_tpl_vars['MODULE']); ?>

								</td>
							<?php endforeach; endif; unset($_from); ?>
							</tr>
							<tr>
								<td valign="top" colspan="4" align="center">
									<input type="button" value="<?php echo $this->_tpl_vars['APP']['LBL_APPLY_BUTTON_LABEL']; ?>
" name="apply" class="crmButton small edit" onclick="loadMappingForSelectedValues(); fnhide('sourceValuesSelectionDiv');">
									<input type="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" name="cancel" class="crmButton small cancel" onclick="fnhide('sourceValuesSelectionDiv');">
								</td>
							</tr>
						</table>
					</div>
				</div>
			</td>
		</tr>
	</table>
	
	<br />
	<table class="listTable" cellpadding="5" cellspacing="0" align="center">
		<tbody id="valueMapping">
			<tr>
				<td class="tableHeading big warning fixedHeight18px"><?php echo ((is_array($_tmp=$this->_tpl_vars['ALL_LISTS'][$this->_tpl_vars['DEPENDENCY_MAP']['sourcefield']])) ? $this->_run_mod_handler('getTranslatedString', true, $_tmp, $this->_tpl_vars['MODULE']) : getTranslatedString($_tmp, $this->_tpl_vars['MODULE'])); ?>
</td>
				<?php $_from = $this->_tpl_vars['SOURCE_VALUES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['SOURCE_INDEX'] => $this->_tpl_vars['SOURCE_VALUE']):
?>
					<td class="tableHeading big fixedHeight18px <?php echo $this->_tpl_vars['DEPENDENCY_MAP']['sourcefield']; ?>
<?php echo $this->_tpl_vars['SOURCE_INDEX']; ?>
 picklistValueMapping"
						style="display:none;">
						<input type="hidden" id="<?php echo $this->_tpl_vars['DEPENDENCY_MAP']['sourcefield']; ?>
<?php echo $this->_tpl_vars['SOURCE_INDEX']; ?>
" value="<?php echo $this->_tpl_vars['SOURCE_INDEX']; ?>
" />
						<?php echo getTranslatedString($this->_tpl_vars['SOURCE_VALUE'], $this->_tpl_vars['MODULE']); ?>

					</td>
				<?php endforeach; endif; unset($_from); ?>
			</tr>
			<?php $_from = $this->_tpl_vars['TARGET_VALUES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['targetValuesLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['targetValuesLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['TARGET_INDEX'] => $this->_tpl_vars['TARGET_VALUE']):
        $this->_foreach['targetValuesLoop']['iteration']++;
?>
				<tr>
				<?php if (($this->_foreach['targetValuesLoop']['iteration']-1) == 0): ?>
					<td class="tableHeading big warning" rowspan="<?php echo count($this->_tpl_vars['TARGET_VALUES']); ?>
" valign="top">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['ALL_LISTS'][$this->_tpl_vars['DEPENDENCY_MAP']['targetfield']])) ? $this->_run_mod_handler('getTranslatedString', true, $_tmp, $this->_tpl_vars['MODULE']) : getTranslatedString($_tmp, $this->_tpl_vars['MODULE'])); ?>
</td>
				<?php endif; ?>
				<?php $_from = $this->_tpl_vars['SOURCE_VALUES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['SOURCE_INDEX'] => $this->_tpl_vars['SOURCE_VALUE']):
?>
					<td	id='mapping<?php echo $this->_tpl_vars['DEPENDENCY_MAP']['sourcefield']; ?>
<?php echo $this->_tpl_vars['SOURCE_INDEX']; ?>
' onmouseover="handleCellMouseOver(event, this, '<?php echo $this->_tpl_vars['DEPENDENCY_MAP']['sourcefield']; ?>
<?php echo addslashes(htmlentities($this->_tpl_vars['SOURCE_INDEX'])); ?>
');"
						onmousedown="handleCellMouseDown(event, this);"
						onmouseup="handleCellMouseUp(event, this);" 
						class="selectedCell <?php echo $this->_tpl_vars['DEPENDENCY_MAP']['sourcefield']; ?>
<?php echo $this->_tpl_vars['SOURCE_INDEX']; ?>
 picklistValueMapping"
						style="display:none;">
						<input type="hidden" name="valueMapping<?php echo $this->_tpl_vars['SOURCE_INDEX']; ?>
" id="valueMapping<?php echo $this->_tpl_vars['SOURCE_INDEX']; ?>
" value="<?php echo $this->_tpl_vars['TARGET_VALUE']; ?>
" />
						<?php echo getTranslatedString($this->_tpl_vars['TARGET_VALUE'], $this->_tpl_vars['MODULE']); ?>

				</td>
				<?php endforeach; endif; unset($_from); ?>
				</tr>
			<?php endforeach; endif; unset($_from); ?>
			<tr>
			</tr>
		</tbody>
	</table>
	<script type="text/javascript">
	<?php if (count($this->_tpl_vars['DEPENDENCY_MAP']['valuemapping']) > 0): ?>
		<?php $_from = $this->_tpl_vars['DEPENDENCY_MAP']['valuemapping']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['MAPPING_COUNT'] => $this->_tpl_vars['MAPPING_DATA']):
?>
			<?php $this->assign('sourceValue', $this->_tpl_vars['MAPPING_DATA']['sourcevalue']); ?>
			<?php $this->assign('targetValues', $this->_tpl_vars['MAPPING_DATA']['targetvalues']); ?>
			<?php $this->assign('sourceIndex', array_search($this->_tpl_vars['sourceValue'], $this->_tpl_vars['SOURCE_VALUES'])); ?>
			selectSourceValue("<?php echo addslashes(decode_html($this->_tpl_vars['sourceIndex'])); ?>
");
			<?php $_from = $this->_tpl_vars['TARGET_VALUES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['TARGET_VALUE']):
?>
				<?php if (in_array($this->_tpl_vars['TARGET_VALUE'], $this->_tpl_vars['targetValues']) != '1'): ?>
					unselectTargetValue('<?php echo addslashes(decode_html($this->_tpl_vars['sourceIndex'])); ?>
', '<?php echo $this->_tpl_vars['TARGET_VALUE']; ?>
');
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
		<?php endforeach; endif; unset($_from); ?>
	<?php else: ?>
		<?php $_from = $this->_tpl_vars['SOURCE_VALUES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['SOURCE_INDEX'] => $this->_tpl_vars['SOURCE_VALUE']):
?>
			selectSourceValue("<?php echo addslashes($this->_tpl_vars['SOURCE_VALUE']); ?>
");
		<?php endforeach; endif; unset($_from); ?>
	<?php endif; ?>
	loadMappingForSelectedValues();
	</script>
	<?php endif; ?>
</div>