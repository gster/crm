<?php /* Smarty version 2.6.18, created on 2013-01-21 13:33:10
         compiled from modules/Import/Import_Step2.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'getTranslatedString', 'modules/Import/Import_Step2.tpl', 15, false),)), $this); ?>

<table width="100%" cellspacing="0" cellpadding="5">
	<tr>
		<td class="heading2"><?php echo getTranslatedString('LBL_IMPORT_STEP_2', $this->_tpl_vars['MODULE']); ?>
:</td>
		<td class="big"><?php echo getTranslatedString('LBL_IMPORT_STEP_2_DESCRIPTION', $this->_tpl_vars['MODULE']); ?>
</td>
		<td>&nbsp;</td>
	</tr>
	<tr id="file_type_container">
		<td>&nbsp;</td>
		<td><span><?php echo getTranslatedString('LBL_FILE_TYPE', $this->_tpl_vars['MODULE']); ?>
</span></td>
		<td>
			<select name="type" id="type" class="small" onchange="ImportJs.handleFileTypeChange();">
				<?php $_from = $this->_tpl_vars['SUPPORTED_FILE_TYPES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_FILE_TYPE']):
?>
				<option value="<?php echo $this->_tpl_vars['_FILE_TYPE']; ?>
"><?php echo getTranslatedString($this->_tpl_vars['_FILE_TYPE'], $this->_tpl_vars['MODULE']); ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
			</select>
		</td>
	</tr>
	<tr id="file_encoding_container">
		<td>&nbsp;</td>
		<td><span><?php echo getTranslatedString('LBL_CHARACTER_ENCODING', $this->_tpl_vars['MODULE']); ?>
</span></td>
		<td>
			<select name="file_encoding" id="file_encoding" class="small">
				<?php $_from = $this->_tpl_vars['SUPPORTED_FILE_ENCODING']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_FILE_ENCODING'] => $this->_tpl_vars['_FILE_ENCODING_LABEL']):
?>
				<option value="<?php echo $this->_tpl_vars['_FILE_ENCODING']; ?>
"><?php echo getTranslatedString($this->_tpl_vars['_FILE_ENCODING_LABEL'], $this->_tpl_vars['MODULE']); ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
			</select>
		</td>
	</tr>
	<tr id="delimiter_container">
		<td>&nbsp;</td>
		<td><span><?php echo getTranslatedString('LBL_DELIMITER', $this->_tpl_vars['MODULE']); ?>
</span></td>
		<td>
			<select name="delimiter" id="delimiter" class="small">
				<?php $_from = $this->_tpl_vars['SUPPORTED_DELIMITERS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_DELIMITER'] => $this->_tpl_vars['_DELIMITER_LABEL']):
?>
				<option value="<?php echo $this->_tpl_vars['_DELIMITER']; ?>
"><?php echo getTranslatedString($this->_tpl_vars['_DELIMITER_LABEL'], $this->_tpl_vars['MODULE']); ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
			</select>
		</td>
	</tr>
	<tr id="has_header_container">
		<td>&nbsp;</td>
		<td><span><?php echo getTranslatedString('LBL_HAS_HEADER', $this->_tpl_vars['MODULE']); ?>
</span></td>
		<td><input type="checkbox" class="small" id="has_header" name="has_header" checked /></td>
	</tr>
</table>