<?php /* Smarty version 2.6.18, created on 2013-01-24 03:40:09
         compiled from com_vtiger_workflow/taskforms/VTEmailTask.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'getTranslatedString', 'com_vtiger_workflow/taskforms/VTEmailTask.tpl', 9, false),array('modifier', 'vtiger_imageurl', 'com_vtiger_workflow/taskforms/VTEmailTask.tpl', 11, false),)), $this); ?>
<script src="modules/com_vtiger_workflow/resources/vtigerwebservices.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
var moduleName = '<?php echo $this->_tpl_vars['entityName']; ?>
';
</script>
<script src="modules/com_vtiger_workflow/resources/emailtaskscript.js" type="text/javascript" charset="utf-8"></script>

<table border="0" cellpadding="5" cellspacing="0" width="100%" class="small">
	<tr>
		<td class='dvtCellLabel' align="right" width=15% nowrap="nowrap"><b><font color=red>*</font> <?php echo getTranslatedString('LBL_EMAIL_RECIPIENT', $this->_tpl_vars['MODULE']); ?>
</b></td>
		<td class='dvtCellInfo'><input type="text" name="recepient" value="<?php echo $this->_tpl_vars['task']->recepient; ?>
" id="save_recepient" class="form_input" style='width: 250px;'>
			<span id="task-emailfields-busyicon"><b><?php echo $this->_tpl_vars['MOD']['LBL_LOADING']; ?>
</b><img src="<?php echo vtiger_imageurl('vtbusy.gif', $this->_tpl_vars['THEME']); ?>
" border="0"></span>
			<select id="task-emailfields" class="small" style="display: none;"><option value=''><?php echo $this->_tpl_vars['MOD']['LBL_SELECT_OPTION_DOTDOTDOT']; ?>
</option></select></td>
	</tr>
	<tr>
		<td class='dvtCellLabel' align="right" width=15% nowrap="nowrap"><b> <?php echo getTranslatedString('LBL_EMAIL_CC', $this->_tpl_vars['MODULE']); ?>
</b></td>
		<td class='dvtCellInfo'><input type="text" name="emailcc" value="<?php echo $this->_tpl_vars['task']->emailcc; ?>
" id="save_emailcc" class="form_input" style='width: 250px;'>
			<span id="task-emailfieldscc-busyicon"><b><?php echo $this->_tpl_vars['MOD']['LBL_LOADING']; ?>
</b><img src="<?php echo vtiger_imageurl('vtbusy.gif', $this->_tpl_vars['THEME']); ?>
" border="0"></span>
			<select id="task-emailfieldscc" class="small" style="display: none;"><option value=''><?php echo $this->_tpl_vars['MOD']['LBL_SELECT_OPTION_DOTDOTDOT']; ?>
</option></select></td>
	</tr>
	<tr>
		<td class='dvtCellLabel' align="right" width=15% nowrap="nowrap"><b> <?php echo getTranslatedString('LBL_EMAIL_BCC', $this->_tpl_vars['MODULE']); ?>
</b></td>
		<td class='dvtCellInfo'><input type="text" name="emailbcc" value="<?php echo $this->_tpl_vars['task']->emailbcc; ?>
" id="save_emailbcc" class="form_input" style='width: 250px;'>
			<span id="task-emailfieldsbcc-busyicon"><b><?php echo $this->_tpl_vars['MOD']['LBL_LOADING']; ?>
</b><img src="<?php echo vtiger_imageurl('vtbusy.gif', $this->_tpl_vars['THEME']); ?>
" border="0"></span>
			<select id="task-emailfieldsbcc" class="small" style="display: none;"><option value=''><?php echo $this->_tpl_vars['MOD']['LBL_SELECT_OPTION_DOTDOTDOT']; ?>
</option></select></td>
	</tr>
	<tr>
		<td class='dvtCellLabel' align="right" width=15% nowrap="nowrap"><b><font color=red>*</font> <?php echo getTranslatedString('LBL_EMAIL_SUBJECT', $this->_tpl_vars['MODULE']); ?>
</b></td>
		<td class='dvtCellInfo'><input type="text" name="subject" value="<?php echo $this->_tpl_vars['task']->subject; ?>
" id="save_subject" class="form_input" style='width: 350px;'>
			<span id="task-subjectfields-busyicon"><b><?php echo $this->_tpl_vars['MOD']['LBL_LOADING']; ?>
</b><img src="<?php echo vtiger_imageurl('vtbusy.gif', $this->_tpl_vars['THEME']); ?>
" border="0"></span>
			<select id="task-subjectfields" class="small" style="display: none;"><option value=''><?php echo $this->_tpl_vars['MOD']['LBL_SELECT_OPTION_DOTDOTDOT']; ?>
</option></select></td>
	</tr>
</table>

<table border="0" cellpadding="0" cellspacing="0" width="100%" class="small">
	<tr>
		<td style='padding-top: 10px;'>
			<span id="task-fieldnames-busyicon"><b><?php echo $this->_tpl_vars['MOD']['LBL_LOADING']; ?>
</b><img src="<?php echo vtiger_imageurl('vtbusy.gif', $this->_tpl_vars['THEME']); ?>
" border="0"></span>
			<select id='task-fieldnames' class="small" style="display: none;"><option value=''><?php echo $this->_tpl_vars['MOD']['LBL_SELECT_OPTION_DOTDOTDOT']; ?>
</option></select>
		</td>
			
		<td>&nbsp</td>
		<td style='padding-top: 10px;'>
			<b><?php echo $this->_tpl_vars['MOD']['LBL_SELECT']; ?>
&nbsp</b>	
		</td>
		<td style='padding-top: 10px;'>
			<select class="small" id="task_timefields">
					<option value="">Select Meta Variables</option>
					<?php $_from = $this->_tpl_vars['META_VARIABLES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['META_LABEL'] => $this->_tpl_vars['META_VALUE']):
?>
					<option value="<?php echo $this->_tpl_vars['META_VALUE']; ?>
"><?php echo getTranslatedString($this->_tpl_vars['META_LABEL'], $this->_tpl_vars['MODULE_NAME']); ?>
</option>
					<?php endforeach; endif; unset($_from); ?>
			</select>	
		</td>
		<td align="right" style='padding-top: 10px;'>
			<span class="helpmessagebox" style="font-style: italic;"><?php echo $this->_tpl_vars['MOD']['LBL_WORKFLOW_NOTE_CRON_CONFIG']; ?>
</span>
		</td> 
	</tr>
</table>	
<table>
	<tr>
		<td>&nbsp</td>
	</tr>	
	<tr>
		<td><b><?php echo $this->_tpl_vars['MOD']['LBL_MESSAGE']; ?>
:</b></td>	
	</tr>
</table>
<script type="text/javascript" src="include/ckeditor/ckeditor.js"></script>
<p  style="border:1px solid black;">
	<textarea  style="width:90%;height:200px;" name="content" rows="55" cols="40" id="save_content" class="detailedViewTextBox"> <?php echo $this->_tpl_vars['task']->content; ?>
 </textarea>
</p>
<script type="text/javascript" defer="1">
	var textAreaName = 'save_content';
	CKEDITOR.replace( textAreaName,	{
		extraPlugins : 'uicolor',
		uiColor: '#dfdff1'
	} ) ;
	var oCKeditor = CKEDITOR.instances[textAreaName];
</script> 