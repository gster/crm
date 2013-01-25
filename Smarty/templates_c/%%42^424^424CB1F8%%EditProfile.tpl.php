<?php /* Smarty version 2.6.18, created on 2013-01-21 14:48:30
         compiled from EditProfile.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'EditProfile.tpl', 27, false),array('modifier', 'getTranslatedString', 'EditProfile.tpl', 170, false),)), $this); ?>
<?php echo '
<style>
.showTable{
	display:inline-table;
}
.hideTable{
	display:none;
}
</style>
'; ?>

<script language="JAVASCRIPT" type="text/javascript" src="include/js/smoothscroll.js"></script>

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
				<form action="index.php" method="post" name="profileform" id="form" onsubmit="VtigerJS_DialogBox.block();">
				<input type="hidden" name="module" value="Users">		
				<input type="hidden" name="parenttab" value="Settings">
				<input type="hidden" name="action" value="<?php echo $this->_tpl_vars['ACTION']; ?>
">		
				<input type="hidden" name="mode" value="<?php echo $this->_tpl_vars['MODE']; ?>
">	
				<input type="hidden" name="profileid" value="<?php echo $this->_tpl_vars['PROFILEID']; ?>
">
				<input type="hidden" name="profile_name" value="<?php echo $this->_tpl_vars['PROFILE_NAME']; ?>
">
				<input type="hidden" name="profile_description" value="<?php echo $this->_tpl_vars['PROFILE_DESCRIPTION']; ?>
">
				<input type="hidden" name="parent_profile" value="<?php echo $this->_tpl_vars['PARENTPROFILEID']; ?>
">
				<input type="hidden" name="radio_button" value="<?php echo $this->_tpl_vars['RADIOBUTTON']; ?>
">	
				<input type="hidden" name="return_action" value="<?php echo $this->_tpl_vars['RETURN_ACTION']; ?>
">	

				<table class="settingsSelUITopLine" border="0" cellpadding="5" cellspacing="0" width="100%">
				<tbody><tr>
					<td rowspan="2" valign="top" width="50"><img src="<?php echo vtiger_imageurl('ico-profile.gif', $this->_tpl_vars['THEME']); ?>
" alt="<?php echo $this->_tpl_vars['MOD']['LBL_PROFILES']; ?>
" title="<?php echo $this->_tpl_vars['MOD']['LBL_PROFILES']; ?>
" border="0" height="48" width="48"></td>
					<td class="heading2" valign="bottom"><b><a href="index.php?module=Settings&action=index&parenttab=Settings"><?php echo $this->_tpl_vars['MOD']['LBL_SETTINGS']; ?>
</a> > <a href="index.php?module=Settings&action=ListProfiles&parenttab=Settings"><?php echo $this->_tpl_vars['CMOD']['LBL_PROFILE_PRIVILEGES']; ?>
</a> &gt; <?php echo $this->_tpl_vars['CMOD']['LBL_VIEWING']; ?>
 &quot;<?php echo $this->_tpl_vars['PROFILE_NAME']; ?>
&quot;</b></td>
				</tr>
				<tr>
					<td class="small" valign="top"><?php echo $this->_tpl_vars['CMOD']['LBL_PROFILE_MESG']; ?>
 &quot;<?php echo $this->_tpl_vars['PROFILE_NAME']; ?>
&quot; </td>
				</tr>
				</tbody></table>
				
				
				<table border="0" cellpadding="10" cellspacing="0" width="100%">
				<tbody><tr>
				<td valign="top">
					<table border="0" cellpadding="0" cellspacing="0" width="100%">
                      <tbody><tr>
                        <td><table border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tbody><tr class="small">
                              <td><img src="<?php echo vtiger_imageurl('prvPrfTopLeft.gif', $this->_tpl_vars['THEME']); ?>
"></td>
                              <td class="prvPrfTopBg" width="100%"></td>
                              <td><img src="<?php echo vtiger_imageurl('prvPrfTopRight.gif', $this->_tpl_vars['THEME']); ?>
"></td>
                            </tr>
                          </tbody></table>
                            <table class="prvPrfOutline" border="0" cellpadding="0" cellspacing="0" width="100%">
                              <tbody><tr>
                                <td><!-- tabs -->
                                    
                                    <!-- Headers -->
                                    <table border="0" cellpadding="5" cellspacing="0" width="100%">
                                      <tbody><tr>
                                        <td><table class="small" border="0" cellpadding="5" cellspacing="0" width="100%">
                                            <tbody><tr>
                                              <td><!-- Module name heading -->
                                                  <table class="small" border="0" cellpadding="2" cellspacing="0">
                                                    <tbody><tr>
                                                      <td valign="top"><img src="<?php echo vtiger_imageurl('prvPrfHdrArrow.gif', $this->_tpl_vars['THEME']); ?>
"> </td>
                                                      <td class="prvPrfBigText"><b> <?php if ($this->_tpl_vars['MODE'] == 'create'): ?><?php echo $this->_tpl_vars['CMOD']['LBL_STEP_2_2']; ?>
 : <?php endif; ?><?php echo $this->_tpl_vars['CMOD']['LBL_DEFINE_PRIV_FOR']; ?>
 &lt;<?php echo $this->_tpl_vars['PROFILE_NAME']; ?>
&gt; </b><br>
                                                      <font class="small"><?php echo $this->_tpl_vars['CMOD']['LBL_USE_OPTION_TO_SET_PRIV']; ?>
</font> </td>
                                                      <td class="small" style="padding-left: 10px;" align="right"></td>
                                                    </tr>
                                                </tbody></table></td>
                                              <td align="right" valign="bottom">&nbsp;											 	<?php if ($this->_tpl_vars['ACTION'] == 'SaveProfile'): ?>
                                                <input type="submit" value=" <?php echo $this->_tpl_vars['CMOD']['LBL_FINISH_BUTTON']; ?>
 " name="save" class="crmButton create small" title="<?php echo $this->_tpl_vars['CMOD']['LBL_FINISH_BUTTON']; ?>
"/>&nbsp;&nbsp;
                                                <?php else: ?>
                                                        <input type="submit" value=" <?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
 " name="save" class="crmButton small save" title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
"/>&nbsp;&nbsp;
                                                <?php endif; ?>
                                                <input type="button" value=" <?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
 " name="Cancel" class="crmButton cancel small" title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" onClick="window.history.back();" /> 
						</td>
                                            </tr>
                                          </tbody></table>
                                            <!-- privilege lists -->
                                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                              <tbody><tr>
                                                <td style="height: 10px;" align="center"></td>
                                              </tr>
                                            </tbody></table>
                                            <table border="0" cellpadding="10" cellspacing="0" width="100%">
                                              <tbody><tr>
                                                <td>
						<table border="0" cellpadding="5" cellspacing="0" width="100%">
  						<tbody>
							<tr>
    							<td class="cellLabel big"> <?php echo $this->_tpl_vars['CMOD']['LBL_SUPER_USER_PRIV']; ?>
 </td>
						       </tr>
						</tbody>
						</table>
						<table class="small" align="center" border="0" cellpadding="5" cellspacing="0" width="90%">
                                                <tbody><tr>
                                                    <td class="prvPrfTexture" style="width: 20px;">&nbsp;</td>
                                                    <td valign="top" width="97%"><table class="small" border="0" cellpadding="2" cellspacing="0" width="100%">
                                                      <tbody>
				                         <tr id="gva">
                                                          <td valign="top"><?php echo $this->_tpl_vars['GLOBAL_PRIV']['0']; ?>
</td>
                                                          <td ><b><?php echo $this->_tpl_vars['CMOD']['LBL_VIEW_ALL']; ?>
</b> </td>
                                                        </tr>
                                                        <tr>
                                                          <td valign="top"></td>
                                                          <td width="100%" ><?php echo $this->_tpl_vars['CMOD']['LBL_ALLOW']; ?>
 "<?php echo $this->_tpl_vars['PROFILE_NAME']; ?>
" <?php echo $this->_tpl_vars['CMOD']['LBL_MESG_VIEW']; ?>
</td>
                                                        </tr>
                                                        <tr>
                                                          <td>&nbsp;</td>
                                                        </tr>
							<tr>
							<td valign="top"><?php echo $this->_tpl_vars['GLOBAL_PRIV']['1']; ?>
</td>
							<td ><b><?php echo $this->_tpl_vars['CMOD']['LBL_EDIT_ALL']; ?>
</b> </td>
							</tr>
                                                        <tr>
                                                          <td valign="top"></td>
                                                          <td > <?php echo $this->_tpl_vars['CMOD']['LBL_ALLOW']; ?>
 "<?php echo $this->_tpl_vars['PROFILE_NAME']; ?>
" <?php echo $this->_tpl_vars['CMOD']['LBL_MESG_EDIT']; ?>
</td>
                                                        </tr>

                                                      </tbody></table>
						</td>
                                                  </tr>
                                                </tbody></table>
<br>

			<table border="0" cellpadding="5" cellspacing="0" width="100%">
			  <tbody><tr>
			    <td class="cellLabel big"> <?php echo $this->_tpl_vars['CMOD']['LBL_SET_PRIV_FOR_EACH_MODULE']; ?>
 </td>
			  </tr>
			</tbody></table>
			<table class="small" align="center" border="0" cellpadding="5" cellspacing="0" width="90%">
			  <tbody><tr>
			    <td class="prvPrfTexture" style="width: 20px;">&nbsp;</td>
			    <td valign="top" width="97%">
				<table class="small listTable" border="0" cellpadding="5" cellspacing="0" width="100%">
			        <tbody>
				<tr id="gva">
			          <td colspan="2" rowspan="2" class="small colHeader"><strong> <?php echo $this->_tpl_vars['CMOD']['LBL_TAB_MESG_OPTION']; ?>
 </strong><strong></strong></td>
			          <td colspan="3" class="small colHeader"><div align="center"><strong><?php echo $this->_tpl_vars['CMOD']['LBL_EDIT_PERMISSIONS']; ?>
</strong></div></td>
			          <td rowspan="2" class="small colHeader" nowrap="nowrap"><?php echo $this->_tpl_vars['CMOD']['LBL_FIELDS_AND_TOOLS_SETTINGS']; ?>
</td>
			        </tr>
			        <tr id="gva">
			          <td class="small colHeader"><div align="center"><strong>
		                <?php echo $this->_tpl_vars['CMOD']['LBL_CREATE_EDIT']; ?>

			          </strong></div></td>
			          <td class="small colHeader"> <div align="center"><strong><?php echo $this->_tpl_vars['CMOD']['LBL_VIEW']; ?>
</strong></div></td>
			          <td class="small colHeader"> <div align="center"><strong><?php echo $this->_tpl_vars['CMOD']['LBL_DELETE']; ?>
</strong></div></td>
			        </tr>
					
				<!-- module loops-->
			        <?php $_from = $this->_tpl_vars['TAB_PRIV']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tabid'] => $this->_tpl_vars['elements']):
?>	
			        <tr>
					<?php $this->assign('modulename', $this->_tpl_vars['TAB_PRIV'][$this->_tpl_vars['tabid']][0]); ?>
					<?php $this->assign('MODULELABEL', getTranslatedString($this->_tpl_vars['modulename'], $this->_tpl_vars['modulename'])); ?>
			          <td class="small cellLabel" width="3%"><div align="right">
					<?php echo $this->_tpl_vars['TAB_PRIV'][$this->_tpl_vars['tabid']][1]; ?>

			          </div></td>
			          <td class="small cellLabel" width="40%"><p><?php echo $this->_tpl_vars['MODULELABEL']; ?>
</p></td>
			          <td class="small cellText" width="15%">&nbsp;<div align="center">
					<?php echo $this->_tpl_vars['STANDARD_PRIV'][$this->_tpl_vars['tabid']][1]; ?>

			          </div></td>
			          <td class="small cellText" width="15%">&nbsp;<div align="center">
					<?php echo $this->_tpl_vars['STANDARD_PRIV'][$this->_tpl_vars['tabid']][3]; ?>

			          </div></td>
			          <td class="small cellText" width="15%">&nbsp;<div align="center">
					<?php echo $this->_tpl_vars['STANDARD_PRIV'][$this->_tpl_vars['tabid']][2]; ?>

        			  </div></td>
			          <td class="small cellText" width="22%">&nbsp;<div align="center">
				<?php if ($this->_tpl_vars['FIELD_PRIVILEGES'][$this->_tpl_vars['tabid']] != NULL): ?>
				<img src="<?php echo vtiger_imageurl('showDown.gif', $this->_tpl_vars['THEME']); ?>
" id="img_<?php echo $this->_tpl_vars['tabid']; ?>
" alt="<?php echo $this->_tpl_vars['APP']['LBL_EXPAND_COLLAPSE']; ?>
" title="<?php echo $this->_tpl_vars['APP']['LBL_EXPAND_COLLAPSE']; ?>
" onclick="fnToggleVIew('<?php echo $this->_tpl_vars['tabid']; ?>
_view')" border="0" height="16" width="40" style="display:block;">
				<?php endif; ?>
				</div></td>
				  </tr>
		                  <tr class="hideTable" id="<?php echo $this->_tpl_vars['tabid']; ?>
_view" className="hideTable">
				          <td colspan="6" class="small settingsSelectedUI">
						<table class="small" border="0" cellpadding="2" cellspacing="0" width="100%">
			        	    	<tbody>
						<?php if ($this->_tpl_vars['FIELD_PRIVILEGES'][$this->_tpl_vars['tabid']] != ''): ?>
						<tr>
							<?php if ($this->_tpl_vars['modulename'] == 'Calendar'): ?>
				                	<td class="small colHeader" colspan="6" valign="top"><?php echo $this->_tpl_vars['CMOD']['LBL_FIELDS_TO_BE_SHOWN']; ?>
 (<?php echo $this->_tpl_vars['APP']['Tasks']; ?>
)</td>
							<?php else: ?>
				                	<td class="small colHeader" colspan="6" valign="top"><?php echo $this->_tpl_vars['CMOD']['LBL_FIELDS_TO_BE_SHOWN']; ?>
</td>
							<?php endif; ?>
					        </tr>
						<?php endif; ?>
						<?php $_from = $this->_tpl_vars['FIELD_PRIVILEGES'][$this->_tpl_vars['tabid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row_values']):
?>
				            	<tr>
						      <?php $_from = $this->_tpl_vars['row_values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['element']):
?>
					              <td valign="top"><?php echo $this->_tpl_vars['element']['2']; ?>
<?php echo $this->_tpl_vars['element']['1']; ?>
</td>
					              <td><?php echo $this->_tpl_vars['element']['0']; ?>
</td>
						      <?php endforeach; endif; unset($_from); ?>
				                </tr>
						<?php endforeach; endif; unset($_from); ?>
						<?php if ($this->_tpl_vars['modulename'] == 'Calendar'): ?>
						<tr>
				                	<td class="small colHeader" colspan="6" valign="top"><?php echo $this->_tpl_vars['CMOD']['LBL_FIELDS_TO_BE_SHOWN']; ?>
 (<?php echo $this->_tpl_vars['APP']['Events']; ?>
)</td>
					        </tr>
						<?php $_from = $this->_tpl_vars['FIELD_PRIVILEGES'][16]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row_values']):
?>
				            	<tr>
						      <?php $_from = $this->_tpl_vars['row_values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['element']):
?>
					              <td valign="top"><?php echo $this->_tpl_vars['element']['2']; ?>
<?php echo $this->_tpl_vars['element']['1']; ?>
</td>
					              <td><?php echo $this->_tpl_vars['element']['0']; ?>
</td>
						      <?php endforeach; endif; unset($_from); ?>
				                </tr>
						<?php endforeach; endif; unset($_from); ?>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['UTILITIES_PRIV'][$this->_tpl_vars['tabid']] != ''): ?>
					        <tr>
					              <td colspan="6" class="small colHeader" valign="top"><?php echo $this->_tpl_vars['CMOD']['LBL_TOOLS_TO_BE_SHOWN']; ?>
</td>
						</tr>
						<?php endif; ?>
						<?php $_from = $this->_tpl_vars['UTILITIES_PRIV'][$this->_tpl_vars['tabid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['util_value']):
?>
							<tr>
							<?php $_from = $this->_tpl_vars['util_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['util_elements']):
?>
					              		<td valign="top"><?php echo $this->_tpl_vars['util_elements']['1']; ?>
</td>
						                <td><?php echo $this->_tpl_vars['APP'][$this->_tpl_vars['util_elements']['0']]; ?>
</td>
							<?php endforeach; endif; unset($_from); ?>
				                	</tr>
						<?php endforeach; endif; unset($_from); ?>
					        </tbody>
						</table>
					</td>
			          </tr>
				  <?php endforeach; endif; unset($_from); ?>	
			    	  </tbody>
				  </table>
			  </td>
			  </tr>
                          </tbody>
			</table>
		</td>
                </tr>
		<table border="0" cellpadding="2" cellspacing="0">
			<tr>
				<td align="left"><font color="red" size=5>*</font><?php echo $this->_tpl_vars['CMOD']['LBL_MANDATORY_MSG']; ?>
</td>
			</tr>
			<tr>
				<td align="left"><font color="blue" size=5>*</font><?php echo $this->_tpl_vars['CMOD']['LBL_DISABLE_FIELD_MSG']; ?>
</td>
			</tr>
		</table>
		<tr>
		<td style="border-top: 2px dotted rgb(204, 204, 204);" align="right">
		<!-- wizard buttons -->
		<table border="0" cellpadding="2" cellspacing="0">
		<tbody>
			<tr><td>
				<?php if ($this->_tpl_vars['ACTION'] == 'SaveProfile'): ?>
					<input type="submit" value=" <?php echo $this->_tpl_vars['CMOD']['LBL_FINISH_BUTTON']; ?>
 " name="save" class="crmButton create small" title="<?php echo $this->_tpl_vars['CMOD']['LBL_FINISH_BUTTON']; ?>
"/>&nbsp;&nbsp;
				<?php else: ?>
					<input type="submit" value=" <?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
 " name="save" class="crmButton small save" title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" />&nbsp;&nbsp;
				<?php endif; ?>
				</td><td>
					<input type="button" value=" <?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
 " name="Cancel" class="crmButton cancel small"onClick="window.history.back();" title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" /></td>

				<td>&nbsp;</td>
			</tr>
		</tbody>
		</table>
		</td>
		</tr>
          </tbody>
	  </table>
	</td>
        </tr>
        </tbody>
	</table>
      </td>
      </tr>
      </tbody></table>
      <table class="small" border="0" cellpadding="0" cellspacing="0" width="100%">
           <tbody><tr>
                <td><img src="<?php echo vtiger_imageurl('prvPrfBottomLeft.gif', $this->_tpl_vars['THEME']); ?>
"></td>
                <td class="prvPrfBottomBg" width="100%"></td>
                <td><img src="<?php echo vtiger_imageurl('prvPrfBottomRight.gif', $this->_tpl_vars['THEME']); ?>
"></td>
                </tr>
            </tbody>
      </table></td>
      </tr>
      </tbody></table>
	<p>&nbsp;</p>
	<table border="0" cellpadding="5" cellspacing="0" width="100%">
	<tbody><tr><td class="small" align="right" nowrap="nowrap"><a href="#top"><?php echo $this->_tpl_vars['MOD']['LBL_SCROLL']; ?>
</a></td></tr>
	</tbody></table>
					
	</td>
	</tr>
	</tbody></table>
	</form>	
	<!-- End of Display -->
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</div>

	</td>
	<td valign="top"><img src="<?php echo vtiger_imageurl('showPanelTopRight.gif', $this->_tpl_vars['THEME']); ?>
"></td>
	</tr>
</tbody>
</table>
<script language="javascript" type="text/javascript">
<?php echo '
var Imagid_array = new Array(\'img_2\',\'img_4\',\'img_6\',\'img_7\',\'img_8\',\'img_9\',\'img_10\',\'img_13\',\'img_14\',\'img_18\',\'img_19\',\'img_20\',\'img_21\',\'img_22\',\'img_23\',\'img_26\')
function fnToggleVIew(obj){
	if($(obj).hasClassName(\'hideTable\')) {
		$(obj).removeClassName(\'hideTable\');
	} else {
		$(obj).addClassName(\'hideTable\');
	}
}
function invokeview_all()
{
	if($(\'view_all_chk\').checked == true)
	{
		for(var i = 0;i < document.profileform.elements.length;i++)
		{
			if(document.profileform.elements[i].type == \'checkbox\')
			{
				if(document.profileform.elements[i].id.indexOf(\'tab_chk_com_\') != -1 || document.profileform.elements[i].id.indexOf(\'tab_chk_4\') != -1 || document.profileform.elements[i].id.indexOf(\'_field_\') != -1)
					document.profileform.elements[i].checked = true; 
			}
		}	
		showAllImages();
	}
}
function showAllImages()
{
	for(var j=0;j < Imagid_array.length;j++)
	{

		if(typeof($(Imagid_array[j])) != \'undefined\')
			$(Imagid_array[j]).style.display = \'block\';	
	}
}
function invokeedit_all()
{
	if($(\'edit_all_chk\').checked == true)
	{
		$(\'view_all_chk\').checked = true;
		for(var i = 0;i < document.profileform.elements.length;i++)
		{
			if(document.profileform.elements[i].type == \'checkbox\')
			{
				if(document.profileform.elements[i].id.indexOf(\'tab_chk_com_\') != -1 || document.profileform.elements[i].id.indexOf(\'tab_chk_4\') != -1 || document.profileform.elements[i].id.indexOf(\'tab_chk_1\') != -1 || document.profileform.elements[i].id.indexOf(\'_field_\') != -1)
					document.profileform.elements[i].checked = true; 
			}
		}	
		showAllImages();
	}

}
function unselect_edit_all()
{
	$(\'edit_all_chk\').checked = false;
}
function unselect_view_all()
{
	$(\'view_all_chk\').checked = false;
}
function unSelectView(id)
{
	var createid = \'tab_chk_1_\'+id;	
	var deleteid = \'tab_chk_2_\'+id;
	var tab_id = \'tab_chk_com_\'+id;
	if($(\'tab_chk_4_\'+id).checked == false)
	{
		unselect_view_all();
		unselect_edit_all();
		$(createid).checked = false;
		$(deleteid).checked = false;
		$(tab_id).checked = false;
	}else
	{
		var imageid = \'img_\'+id;
		var viewid = \'tab_chk_4_\'+id;	
		if(typeof($(imageid)) != \'undefined\')
			$(imageid).style.display = \'block\';
		$(\'tab_chk_com_\'+id).checked = true; 
	}
}
function unSelectCreate(id)
{
	var viewid = \'tab_chk_4_\'+id;	
	if($(\'tab_chk_1_\'+id).checked == false)
	{
		unselect_edit_all();
	}else
	{
		var imageid = \'img_\'+id;
		var viewid = \'tab_chk_4_\'+id;	
		if(typeof($(imageid)) != \'undefined\')
			$(imageid).style.display = \'block\';
		$(\'tab_chk_com_\'+id).checked = true;
		$(viewid).checked = true;
	}
}
function unSelectDelete(id)
{	
	var contid = id+\'_view\';
	if($(\'tab_chk_2_\'+id).checked == false)
	{
	}else
	{
		var imageid = \'img_\'+id;
		var viewid = \'tab_chk_4_\'+id;	
		if(typeof($(imageid)) != \'undefined\')
			$(imageid).style.display = \'block\';
		$(\'tab_chk_com_\'+id).checked = true;
		$(viewid).checked = true;
	}

}
function hideTab(id)
{
	var createid = \'tab_chk_1_\'+id;	
	var viewid = \'tab_chk_4_\'+id;	
	var deleteid = \'tab_chk_2_\'+id;
	var imageid = \'img_\'+id;
	var contid = id+\'_view\';
	if($(\'tab_chk_com_\'+id).checked == false)
	{
		unselect_view_all();
		unselect_edit_all();
		if(typeof($(imageid)) != \'undefined\')
			$(imageid).style.display = \'none\';
		$(contid).className = \'hideTable\';
		if(typeof($(createid)) != \'undefined\')
			$(createid).checked = false;
		if(typeof($(deleteid)) != \'undefined\')
			$(deleteid).checked = false;
		if(typeof($(viewid)) != \'undefined\')
			$(viewid).checked = false;
	}else
	{
		if(typeof($(imageid)) != \'undefined\')
			$(imageid).style.display = \'block\';
		if(typeof($(createid)) != \'undefined\')
			$(createid).checked = true;
		if(typeof($(deleteid)) != \'undefined\')
			$(deleteid).checked = true;
		if(typeof($(viewid)) != \'undefined\')
			$(viewid).checked = true;
		var fieldid = id +\'_field_\';
		for(var i = 0;i < document.profileform.elements.length;i++)
                {
                        if(document.profileform.elements[i].type == \'checkbox\' && document.profileform.elements[i].id.indexOf(fieldid) != -1)
                        {
                                        document.profileform.elements[i].checked = true;
                        }
                }
	}
}
function selectUnselect(oCheckbox)
{
	if(oCheckbox.checked == false)
	{
		unselect_view_all();
		unselect_edit_all();
	}
}
function initialiseprofile()
{
	var module_array = Array(1,2,4,6,7,8,9,10,13,14,15,17,18,19,20,21,22,23,24,25,26,27);
	for (var i=0;i < module_array.length;i++)
	{
		hideTab(module_array[i]);
	}	
}
//initialiseprofile();

function toogleAccess(elementId) {
	var element = document.getElementById(elementId);
	if(element == null || typeof(element) == \'undefined\') return;
	
	if(element.value == 0) {
		element.value = 1;
	} else {
		element.value = 0;
	}
	
	var lockedImage = document.getElementById(elementId+\'_locked\');
	if(lockedImage != null && typeof(lockedImage) != \'undefined\') {
		if(lockedImage.style.display == \'none\')
			lockedImage.style.display = \'inline\';
		else
			lockedImage.style.display = \'none\';
	}
	
	var unlockedImage = document.getElementById(elementId+\'_unlocked\');
	if(unlockedImage != null && typeof(unlockedImage) != \'undefined\') {
		if(unlockedImage.style.display == \'none\')
			unlockedImage.style.display = \'inline\';
		else
			unlockedImage.style.display = \'none\';
	}
}
'; ?>

</script>