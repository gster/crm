<?php /* Smarty version 2.6.18, created on 2013-01-24 11:46:04
         compiled from modules/Vtiger/CustomFieldList.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'modules/Vtiger/CustomFieldList.tpl', 107, false),array('modifier', 'getTranslatedString', 'modules/Vtiger/CustomFieldList.tpl', 121, false),array('modifier', 'vtlib_getModuleTemplate', 'modules/Vtiger/CustomFieldList.tpl', 133, false),)), $this); ?>
<script language="JavaScript" type="text/javascript" src="include/js/customview.js"></script>
<script language="javascript">
<?php echo '

function confirmAction(msg){
	return confirm(msg);
}

function deleteForm(formname,address){
	var status=confirmAction(alert_arr["SURE_TO_DELETE_CUSTOM_MAP"]);
	if(!status){
		return false;
	}
	submitForm(formname, address);
		return true;
}

function submitForm(formName,action){
		document.forms[formName].action=action;
		document.forms[formName].submit();
	}
var gselected_fieldtype = \'\';
function getCustomFieldList(customField)
{
	var modulename = customField.options[customField.options.selectedIndex].value;
	var modulelabel = customField.options[customField.options.selectedIndex].text;
	$(\'module_info\').innerHTML = \'{$MOD.LBL_CUSTOM_FILED_IN} "\'+modulelabel+\'" {$APP.LBL_MODULE}\';
	new Ajax.Request(
		\'index.php\',
		{queue: {position: \'end\', scope: \'command\'},
			method: \'post\',
			postBody: \'module=Settings&action=SettingsAjax&file=CustomFieldList&fld_module=\'+modulename+\'&parenttab=Settings&ajax=true\',
			onComplete: function(response) {
				$("cfList").innerHTML=response.responseText;
			}
		}
	);	
}

function deleteCustomField(id, fld_module, colName, uitype)
{
	  if(confirm(alert_arr.ARE_YOU_SURE))
        {
                document.form.action="index.php?module=Settings&action=DeleteCustomField&fld_module="+fld_module+"&fld_id="+id+"&colName="+colName+"&uitype="+uitype
                document.form.submit()
        }
}

function getCreateCustomFieldForm(customField,id,tabid,ui)
{
	var modulename = customField;
    //To handle Events and Todo\'s separately while adding Custom fields
    var activitytype = \'\';
    var activityobj = document.getElementsByName(\'activitytype\');
    if (activityobj != null) {
    	for(var i=0; i<activityobj.length; i++) {
    		if (activityobj[i].checked == true)
    			activitytype = activityobj[i].value;
    	}
    }
	new Ajax.Request(
		\'index.php\',
		{queue: {position: \'end\', scope: \'command\'},
			method: \'post\',
			postBody: \'module=Settings&action=SettingsAjax&file=CreateCustomField&fld_module=\'+customField+\'&parenttab=Settings&ajax=true&fieldid=\'+id+\'&tabid=\'+tabid+\'&uitype=\'+ui+\'&activity_type=\'+activitytype,
			onComplete: function(response) {
				$("createcf").innerHTML=response.responseText;
				gselected_fieldtype = \'\';
			}
		}
	);

}
function makeFieldSelected(oField,fieldid,blockid)
{
    if(gselected_fieldtype != \'\')
	{
		$(gselected_fieldtype).className = \'customMnu\';
	}
	oField.className = \'customMnuSelected\';	
	gselected_fieldtype = oField.id;	
	selFieldType(fieldid,\'\',\'\',blockid)
	document.getElementById(\'selectedfieldtype_\'+blockid).value = fieldid;
}
function CustomFieldMapping()
{
        document.form.action="index.php?module=Settings&action=LeadCustomFieldMapping";
        document.form.submit();
}
var gselected_fieldtype = \'\';
'; ?>

</script>
<div id="createcf" style="display:block;position:absolute;width:500px;"></div>
<br>
<table align="center" border="0" cellpadding="0" cellspacing="0" width="98%">
<tbody><tr>
        <td valign="top"><img src="<?php echo vtiger_imageurl('showPanelTopLeft.gif', $this->_tpl_vars['THEME']); ?>
"></td>
        <td class="showPanelBg" style="padding: 10px;" valign="top" width="100%">
        <br>

	<div align=center>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'SetMenu.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<!-- DISPLAY -->
			<?php if ($this->_tpl_vars['MODE'] != 'edit'): ?>
			<b><font color=red><?php echo $this->_tpl_vars['DUPLICATE_ERROR']; ?>
 </font></b>
			<?php endif; ?>
			
				<table class="settingsSelUITopLine" border="0" cellpadding="5" cellspacing="0" width="100%" >
					<tbody>
						<tr align="left">
							<td rowspan="2" valign="top" width="50"><img src="<?php echo vtiger_imageurl('custom.gif', $this->_tpl_vars['THEME']); ?>
" alt="<?php echo $this->_tpl_vars['MOD']['LBL_USERS']; ?>
" title="<?php echo $this->_tpl_vars['MOD']['LBL_USERS']; ?>
" border="0" height="48" width="48" onmouseover="tooltip.tip(this,'<?php echo getTranslatedString('LBL_FIELD_SETTINGS', $this->_tpl_vars['MODULE']); ?>
');" onmouseout="tooltip.untip(true);"></td>
							<td class="heading2" valign="bottom"><b><a href="index.php?module=Settings&action=ModuleManager&parenttab=Settings"><?php echo $this->_tpl_vars['MOD']['VTLIB_LBL_MODULE_MANAGER']; ?>
</a> &gt; <a href="index.php?module=Settings&action=ModuleManager&module_settings=true&formodule=<?php echo $this->_tpl_vars['MODULE']; ?>
&parenttab=Settings"><?php echo $this->_tpl_vars['MODULE']; ?>
</a> &gt; <?php echo getTranslatedString('LBL_FIELD_SETTINGS', $this->_tpl_vars['MODULE']); ?>
</b></td>
						</tr>
					</tbody>
				</table>
				
				<br>
				<table border="0" cellpadding="10" cellspacing="0" width="100%">
				<tbody><tr>
				<td>
				<?php if ($this->_tpl_vars['MODULE'] == 'Leads'): ?>
				<div id="cfList">
                                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => vtlib_getModuleTemplate('Leads', 'LeadsCustomEntries.tpl'), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </div>	
                <?php else: ?>
                <div id="cfList">
                                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => vtlib_getModuleTemplate('Vtiger', 'CustomFieldEntries.tpl'), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </div>	
                <?php endif; ?>
            <table border="0" cellpadding="5" cellspacing="0" width="100%">
			<tr>

		  	<td class="small" align="right" nowrap="nowrap"><a href="#top"><?php echo $this->_tpl_vars['MOD']['LBL_SCROLL']; ?>
</a></td>
			</tr>
			</table>
			</td>
			</tr>
			</table>
		<!-- End of Display -->
		</div>
		</td>
        </tr>
        <tr>
        <td valign="top"><img src="<?php echo vtiger_imageurl('showPanelTopRight.gif', $this->_tpl_vars['THEME']); ?>
"></td>
        </tr>
</tbody>
</table>
<br>