<?php /* Smarty version 2.6.18, created on 2013-01-21 13:33:10
         compiled from modules/Import/Import_Step3.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'getTranslatedString', 'modules/Import/Import_Step3.tpl', 17, false),)), $this); ?>

<table width="100%" cellspacing="0" cellpadding="5">
	<tr>
		<td class="heading2" width="10%">
			<input type="checkbox" class="small" id="auto_merge" name="auto_merge" onclick="ImportJs.toogleMergeConfiguration();" />
			<?php echo getTranslatedString('LBL_IMPORT_STEP_3', $this->_tpl_vars['MODULE']); ?>
:
		</td>
		<td>
			<span class="big"><?php echo getTranslatedString('LBL_IMPORT_STEP_3_DESCRIPTION', $this->_tpl_vars['MODULE']); ?>
</span>
			<span class="small">( <?php echo getTranslatedString('LBL_IMPORT_STEP_3_DESCRIPTION_DETAILED', $this->_tpl_vars['MODULE']); ?>
 )</span>
		</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>
			<table width="100%" cellspacing="0" cellpadding="5" id="duplicates_merge_configuration" style="display:none;">
				<tr>
					<td>
						<span class="small"><?php echo getTranslatedString('LBL_SPECIFY_MERGE_TYPE', $this->_tpl_vars['MODULE']); ?>
</span>&nbsp;&nbsp;
						<select name="merge_type" id="merge_type" class="small">
							<?php $_from = $this->_tpl_vars['AUTO_MERGE_TYPES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_MERGE_TYPE'] => $this->_tpl_vars['_MERGE_TYPE_LABEL']):
?>
							<option value="<?php echo $this->_tpl_vars['_MERGE_TYPE']; ?>
"><?php echo getTranslatedString($this->_tpl_vars['_MERGE_TYPE_LABEL'], $this->_tpl_vars['MODULE']); ?>
</option>
							<?php endforeach; endif; unset($_from); ?>
						</select>
					</td>
				</tr>
				<tr>
					<td class="small"><?php echo getTranslatedString('LBL_SELECT_MERGE_FIELDS', $this->_tpl_vars['MODULE']); ?>
</td>
				</tr>
				<tr>
					<td>
						<table class="calDayHour" cellpadding="5" cellspacing="0">
							<tr>
								<td><b><?php echo getTranslatedString('LBL_AVAILABLE_FIELDS', $this->_tpl_vars['MODULE']); ?>
</b></td>
								<td></td>
								<td><b><?php echo getTranslatedString('LBL_SELECTED_FIELDS', $this->_tpl_vars['MODULE']); ?>
</b></td>
							</tr>
							<tr>
								<td>
									<select id="available_fields" multiple size="10" name="available_fields" class="txtBox" style="width: 100%">
										<?php $_from = $this->_tpl_vars['AVAILABLE_FIELDS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_FIELD_NAME'] => $this->_tpl_vars['_FIELD_INFO']):
?>
										<option value="<?php echo $this->_tpl_vars['_FIELD_NAME']; ?>
"><?php echo getTranslatedString($this->_tpl_vars['_FIELD_INFO']->getFieldLabelKey(), $this->_tpl_vars['FOR_MODULE']); ?>
</option>
										<?php endforeach; endif; unset($_from); ?>
									</select>
								</td>
								<td width="6%">
									<div align="center">
										<input type="button" name="Button" value="&nbsp;&rsaquo;&rsaquo;&nbsp;" onClick="copySelectedOptions('available_fields', 'selected_merge_fields')" class="crmButton small" /><br /><br />
										<input type="button" name="Button1" value="&nbsp;&lsaquo;&lsaquo;&nbsp;" onClick="removeSelectedOptions('selected_merge_fields')" class="crmButton small" /><br /><br />
									</div>
								</td>
								<td>
									<input type="hidden" id="merge_fields" size="10" name="merge_fields" value="" />
									<select id="selected_merge_fields" size="10" name="selected_merge_fields" multiple class="txtBox" style="width: 100%">
										<?php $_from = $this->_tpl_vars['ENTITY_FIELDS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_FIELD_NAME'] => $this->_tpl_vars['_FIELD_INFO']):
?>
										<option value="<?php echo $this->_tpl_vars['_FIELD_NAME']; ?>
"><?php echo getTranslatedString($this->_tpl_vars['_FIELD_INFO']->getFieldLabelKey(), $this->_tpl_vars['FOR_MODULE']); ?>
</option>
										<?php endforeach; endif; unset($_from); ?>
									</select>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>