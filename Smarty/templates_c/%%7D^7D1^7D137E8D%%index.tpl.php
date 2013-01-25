<?php /* Smarty version 2.6.18, created on 2013-01-21 09:57:29
         compiled from modules/ConfigEditor/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'modules/ConfigEditor/index.tpl', 144, false),)), $this); ?>
<?php echo '
<style type="text/css">
.detailedViewTextBoxThisOn {
	background-color:#FFFFDD;
	border:1px solid #BABABA;
	color:#000000;
	font-family:Arial,Helvetica,sans-serif;
	font-size:11px;
	padding-left:5px;
	width:20%;
}

.detailedViewTextBoxThis {
	background-color:#FFFFFF;
	border:1px solid #BABABA;
	color:#000000;
	font-family:Arial,Helvetica,sans-serif;
	font-size:11px;
	padding-left:5px;
	width:20%;
}
</style>
	<script type="text/javascript">
		function msg()
		{
			alert("invalid entry");
			exit;
		}

		function trim(str)
		{
			while (str.substring(0,1) == \' \') // check for white spaces from beginning
			{
				str = str.substring(1, str.length);
			}
			while (str.substring(str.length-1, str.length) == \' \') // check white space from end
			{
				str = str.substring(0,str.length-1);
			}
			return str;
		}

		function valid(name) {
			var reg = /^([A-Za-z0-9_\\-\\.])+\\@([A-Za-z0-9_\\-\\.])+\\.([A-Za-z]{2,4})$/;
			var id=document.getElementById(\'key_HELPDESK_SUPPORT_EMAIL_ID\');
			var name = document.getElementById(\'key_HELPDESK_SUPPORT_NAME\');
			var size = document.getElementById(\'key_upload_maxsize\');
			var maxEntries = document.getElementById(\'key_list_max_entries_per_page\');
			var history1 = document.getElementById(\'key_history_max_viewed\');
			var maxtext = document.getElementById(\'key_listview_max_textlength\');
			var reg1 = /^([0-9]*)$/;
			name.value = trim(name.value);
			if ((name.value).indexOf("\\"") != -1 || (name.value).indexOf("\'") != -1 || (name.value).indexOf(";") != -1){
						var invalidSupportName = document.getElementById(\'invalidSupportName\').value;
						document.getElementById(\'msg_HELPDESK_SUPPORT_NAME\').innerHTML = invalidSupportName;
						name.focus();
						return false;
			}

			maxEntries.value = trim(maxEntries.value);
			size.value = trim(size.value);
			history1.value = trim(history1.value);
			maxtext.value = trim(maxtext.value);
			var uploadSize = document.getElementById(\'uploadSize\').value;
			var invalidEmail = document.getElementById(\'invalidEmail\').value;
			var emptyName = document.getElementById(\'emptyName\').value;
			var maxListEntries= document.getElementById(\'maxListEntries\').value;
			var maxHistory= document.getElementById(\'maxHistory\').value;
			var maxTextLength= document.getElementById(\'maxTextLength\').value;
			if(reg.test(id.value) == false){
				document.getElementById(\'msg_HELPDESK_SUPPORT_EMAIL_ID\').innerHTML = invalidEmail;
				id.focus();
				return false;
			}else if(name.value == \'\'){
				document.getElementById(\'msg_HELPDESK_SUPPORT_NAME\').innerHTML = emptyName;
				name.focus();
				return false;
			}else if((reg1.test(size.value) == false) || (size.value <= 0) || (size.value > 5) || (size.value == NaN)){
				document.getElementById(\'msg_upload_maxsize\').innerHTML =uploadSize;
				size.focus();
				return false;
			}else if((reg1.test(maxEntries.value) == false)||(maxEntries.value <= 0) || (maxEntries.value>100)){
				document.getElementById(\'msg_list_max_entries_per_page\').innerHTML=maxListEntries;
				maxEntries.focus();
				return false;
			}else if((reg1.test(history1.value) == false)||(history1.value <= 0) || (history1.value > 5)){
				document.getElementById(\'msg_history_max_viewed\').innerHTML=maxHistory;
				history1.focus();
				return false;
			}else if((reg1.test(maxtext.value) == false) || (maxtext.value < 0) || (maxtext.value > 100) || (maxtext.value === "")){
				document.getElementById(\'msg_listview_max_textlength\').innerHTML=maxTextLength;
				maxtext.focus();
				return false;
			}
			return true;
		}


	</script>
'; ?>

<script language="JavaScript" type="text/javascript" src="modules/<?php echo $this->_tpl_vars['MODULE']; ?>
/<?php echo $this->_tpl_vars['MODULE']; ?>
.js"></script>
<body onload="replaceUploadSize();">
<input type="hidden" value="<?php echo $this->_tpl_vars['MOD']['LBL_MAX_UPLOAD_SIZE_MSG']; ?>
" id="uploadSize"></input>
<input type="hidden" value="<?php echo $this->_tpl_vars['MOD']['LBL_INVALID_EMAIL_MSG']; ?>
" id="invalidEmail"></input>
<input type="hidden" value="<?php echo $this->_tpl_vars['MOD']['LBL_RESTRICTED_CHARACTERS']; ?>
" id="invalidSupportName"></input>
<input type="hidden" value="<?php echo $this->_tpl_vars['MOD']['LBL_MAX_LISTVIEW_ENTRIES_MSG']; ?>
" id="maxListEntries"></input>
<input type="hidden" value="<?php echo $this->_tpl_vars['MOD']['LBL_MAX_HISTORY_VIEWED_MSG']; ?>
" id="maxHistory"></input>
<input type="hidden" value="<?php echo $this->_tpl_vars['MOD']['LBL_MAX_TEXTLENGTH_LISTVIEW_MSG']; ?>
" id="maxTextLength"></input>
<input type="hidden" value="<?php echo $this->_tpl_vars['MOD']['LBL_EMPTY_NAME_MSG']; ?>
" id="emptyName"></input>
<input type="hidden" value="<?php echo $this->_tpl_vars['MOD']['LBL_HELP_INFO']; ?>
" id="helpInfo"></input>

<table cellspacing="0" cellpadding="2" border="0" width="100%" class="level2Bg">
	<tbody>
		<tr>
			<td>
				<table cellspacing="0" cellpadding="0" border="0">
					<tbody>
						<tr>
							<td nowrap="" class="level2SelTab"><a href="index.php?module=Settings&amp;action=index&amp;parenttab=Settings">Settings</a></td>
							<td nowrap="" class="level2SelTab"><a href="index.php?module=Settings&amp;action=ModuleManager&amp;parenttab=Settings">Module Manager</a></td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>

<table border=0 cellspacing=0 cellpadding=0 width=98% align=center>
	<tr>
		<td>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td valign=top align=right width=8><img src="<?php echo vtiger_imageurl('showPanelTopLeft.gif', $this->_tpl_vars['THEME']); ?>
"></td>
		<td class="showPanelBg" valign="top" width="100%" >

			<div style="padding: 20px;">
				<form onsubmit="VtigerJS_DialogBox.block();" action="index.php" method="POST" name="EditView">
					<div align="center">
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "SetMenu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						<table cellspacing="0" cellpadding="5" border="0" width="100%" class="settingsSelUITopLine">
							<tbody>
								<tr>
									<td width="50" valign="top" rowspan="2"><img height="48" border="0" width="48" title="Users" alt="Users" src="themes/images/migrate.gif"></td>
									<td valign="bottom" class="heading2"><b><a href="index.php?module=Settings&amp;action=index&amp;parenttab=Settings"><?php echo $this->_tpl_vars['MOD']['LBL_SETTINGS']; ?>
</a> &gt; <?php echo $this->_tpl_vars['MOD']['LBL_CONFIG_EDITOR']; ?>
 </b></td>
								</tr>
								<tr>
									<td valign="top"class="small"><?php echo $this->_tpl_vars['MOD']['LBL_CONFIG_EDIT']; ?>
</td>
								</tr>
							</tbody>
						</table>
						<br>
						<br>
						<table width="95%" cellspacing="0" cellpadding="0" border="0" class="small" align="center">
							<tr>
								<td>
									<table width="100%" cellspacing="0" cellpadding="3" border="0" class="small">
									<tr>
										<td nowrap="" style="width: 10px;" class="dvtTabCache">&nbsp;</td>
										<td width="75" nowrap="" align="center" class="dvtSelectedCell" style="width: 15%;"><b><?php echo $this->_tpl_vars['MOD']['LBL_CONFIG_FILE']; ?>
</b></td>
										<td nowrap="" align="center" style="width: 100px;" class="dvtTabCache">
										<?php if ($this->_tpl_vars['WARNING']): ?>
										<div style='background-color: #FFFABF; padding: 2px; margin: 0 0 2px 0; border: 1px solid yellow'>
										<b style='color: red'><?php echo $this->_tpl_vars['WARNING']; ?>
</b>
										<?php endif; ?>&nbsp;
										</td>
										<td nowrap="" style="width: 65%;" class="dvtTabCache">&nbsp;</td>
									</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td valign="top" align="left">
									<div id="basicTab">
										<table border=0 cellspacing=0 cellpadding=3 width=100% class="dvtContentSpace">
											<tr>
												<td align="left" style="padding:10px;">
													<table border=0 cellspacing=0 cellpadding=5 width=100% class="small">
														<tr>
															<td colspan=2>
																<div align="center">
																	<input type='submit' class="crmbutton small save" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_LABEL']; ?>
" onclick="if(valid(this)){return true;}else{return false;}">
																	<input type='button' class="crmbutton small cancel" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" onclick="location.href='index.php?module=Settings&action=index&parenttab=Settings'">

																	<input type='hidden' name='module' value='ConfigEditor'>
																	<input type='hidden' name='action' value='ConfigEditorAjax'>
																	<input type='hidden' name='file' value='index'>
																	<input type='hidden' name='type' value='save'>

																</div>
															</td>
														</tr>
														<?php if ($this->_tpl_vars['CONFIGREADER']): ?>
														<tr>
															<td class="detailedViewHeader" colspan="2">
																<?php echo $this->_tpl_vars['MOD']['LBL_CONFIG_EDIT_CAUTION_INFO']; ?>
<b><?php echo $this->_tpl_vars['MOD']['LBL_DOUBLE_CHECK_INFO']; ?>
</b>
															</td>
														</tr>
														<?php endif; ?>

														<?php $_from = $this->_tpl_vars['CONFIGREADER']->getAll(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['CONFIGLINE']):
?>
															<?php if ($this->_tpl_vars['CONFIGLINE']->isViewable() || $this->_tpl_vars['CONFIGLINE']->isEditable()): ?>

																<?php $this->assign('VARMETA', $this->_tpl_vars['CONFIGLINE']->meta()); ?>

																<tr bgcolor=white valign=center style="height:25px;">
																	<td class="dvtCellLabel" width="15%">
																		<?php if ($this->_tpl_vars['VARMETA']['label']): ?>
																			<?php if ($this->_tpl_vars['VARMETA']['label'] == 'Helpdesk Support Email-Id'): ?>
																				<?php echo $this->_tpl_vars['VARMETA']['label']; ?>
 <img border="0" src="themes/images/help_icon.gif" onclick="vtlib_field_help_show_this(this, '<?php echo $this->_tpl_vars['CONFIGLINE']->variableName(); ?>
' );" style="cursor: pointer;">
																			<?php else: ?>
																				<?php echo $this->_tpl_vars['VARMETA']['label']; ?>

																			<?php endif; ?>
																		<?php else: ?>
																			<?php echo $this->_tpl_vars['CONFIGLINE']->variableName(); ?>

																		<?php endif; ?>
																	</td>
																	<td class="dvtCellInfo">
																		<?php if ($this->_tpl_vars['CONFIGLINE']->isEditable()): ?>
																			<?php if ($this->_tpl_vars['VARMETA']['values']): ?>
																				<select class="small" name="key_<?php echo $this->_tpl_vars['CONFIGLINE']->variableName(); ?>
" id="key_<?php echo $this->_tpl_vars['CONFIGLINE']->variableName(); ?>
">
																				<?php $_from = $this->_tpl_vars['VARMETA']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['VARVALUEOPTIONKEY'] => $this->_tpl_vars['VARVALUEOPTION']):
?>
																					<option value="<?php echo $this->_tpl_vars['VARVALUEOPTIONKEY']; ?>
" <?php if ($this->_tpl_vars['CONFIGLINE']->variableValue() == $this->_tpl_vars['VARVALUEOPTIONKEY']): ?>selected=true<?php endif; ?>><?php echo $this->_tpl_vars['VARVALUEOPTION']; ?>
</option>
																				<?php endforeach; endif; unset($_from); ?>
																				</select>
																			<?php else: ?>
																				<b><span class="warning" id="msg_<?php echo $this->_tpl_vars['CONFIGLINE']->variableName(); ?>
"></span></b>
																				<?php if ($this->_tpl_vars['CONFIGLINE']->variableName() == 'upload_maxsize'): ?>
																				<input size="2" type="text" name="key_<?php echo $this->_tpl_vars['CONFIGLINE']->variableName(); ?>
" id="key_<?php echo $this->_tpl_vars['CONFIGLINE']->variableName(); ?>
" value="<?php echo $this->_tpl_vars['CONFIGLINE']->variableValue(); ?>
"  onblur="class='detailedViewTextBoxThis'" onfocus="class='detailedViewTextBoxThisOn'" class="detailedViewTextBoxThis" >     <?php echo $this->_tpl_vars['MOD']['LBL_MB']; ?>

																				<?php else: ?>
																						<input type="text" name="key_<?php echo $this->_tpl_vars['CONFIGLINE']->variableName(); ?>
" id="key_<?php echo $this->_tpl_vars['CONFIGLINE']->variableName(); ?>
" value="<?php echo $this->_tpl_vars['CONFIGLINE']->variableValue(); ?>
"  onblur="this.className='detailedViewTextBox'" onfocus="this.className='detailedViewTextBoxOn'" class="detailedViewTextBox" >
																				<?php endif; ?>
																			<?php endif; ?>
																		<?php else: ?>
																			<?php echo $this->_tpl_vars['CONFIGLINE']->variableValue(); ?>

																		<?php endif; ?>
																	</td>
																</tr>
															<?php endif; ?>
														<?php endforeach; endif; unset($_from); ?>
													</table>

													<tr>
														<td colspan=2>
															<div align="center">
																<input type='submit' class="crmbutton small save" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_LABEL']; ?>
" onclick="if(valid(this)){return true;}else{return false;}">
																<input type='button' class="crmbutton small cancel" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" onclick="location.href='index.php?module=Settings&action=index&parenttab=Settings'">

																<input type='hidden' name='module' value='ConfigEditor'>
																<input type='hidden' name='action' value='ConfigEditorAjax'>
																<input type='hidden' name='file' value='index'>
																<input type='hidden' name='type' value='save'>
															</div>
														</td>
													</tr>
												</td>
											</tr>
										</table>
									</div>
								</td>
							</tr>
						</table>
					</div>
				</form>
			</div>
		</td>
		<td valign=top align=right><img src="<?php echo vtiger_imageurl('showPanelTopRight.gif', $this->_tpl_vars['THEME']); ?>
"></td>
	</tr>
</table>
</body>