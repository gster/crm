<?php /* Smarty version 2.6.18, created on 2013-01-21 08:55:15
         compiled from Settings/EditCompanyInfo.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'Settings/EditCompanyInfo.tpl', 17, false),)), $this); ?>
<script language="JAVASCRIPT" type="text/javascript" src="include/js/smoothscroll.js"></script>
<script language="JavaScript" type="text/javascript" src="include/js/menu.js"></script>
<br>
<table align="center" border="0" cellpadding="0" cellspacing="0" width="98%">
<tbody><tr>
        <td valign="top"><img src="<?php echo vtiger_imageurl('showPanelTopLeft.gif', $this->_tpl_vars['THEME']); ?>
"></td>
        <td class="showPanelBg" style="padding: 10px;" valign="top" width="100%">
<br>
	<form action="index.php?module=Settings&action=add2db" method="post" name="index" enctype="multipart/form-data" onsubmit="VtigerJS_DialogBox.block();">
 	<input type="hidden" name="return_module" value="Settings">
 	<input type="hidden" name="parenttab" value="Settings">
    	<input type="hidden" name="return_action" value="OrganizationConfig">
	<div align=center>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "SetMenu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>	
				<!-- DISPLAY -->
				<table border=0 cellspacing=0 cellpadding=5 width=100% class="settingsSelUITopLine">
				<tr>
					<td width=50 rowspan=2 valign=top><img src="<?php echo vtiger_imageurl('company.gif', $this->_tpl_vars['THEME']); ?>
" width="48" height="48" border=0 ></td>
					<td class=heading2 valign=bottom><b><a href="index.php?module=Settings&action=index&parenttab=Settings"><?php echo $this->_tpl_vars['MOD']['LBL_SETTINGS']; ?>
</a> > <?php echo $this->_tpl_vars['MOD']['LBL_EDIT']; ?>
 <?php echo $this->_tpl_vars['MOD']['LBL_COMPANY_DETAILS']; ?>
 </b></td>
				</tr>
				<tr>
					<td valign=top class="small"><?php echo $this->_tpl_vars['MOD']['LBL_COMPANY_DESC']; ?>
</td>
				</tr>
				</table>
				
				<br>
				<table border=0 cellspacing=0 cellpadding=10 width=100% >
				<tr>
				<td>
				
					<table border=0 cellspacing=0 cellpadding=5 width=100% class="tableHeading">
					<tr>
						<td class="big"><strong><?php echo $this->_tpl_vars['MOD']['LBL_COMPANY_DETAILS']; ?>
 </strong>
						<?php echo $this->_tpl_vars['ERRORFLAG']; ?>
<br>
						</td>
						<td class="small" align=right>
							<input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="crmButton small save" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" onclick="return verify_data(form,'<?php echo $this->_tpl_vars['MOD']['LBL_ORGANIZATION_NAME']; ?>
');" >
							<input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="crmButton small cancel" onclick="window.history.back()" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
">
						</td>
					</tr>
					</table>
					
					<table border=0 cellspacing=0 cellpadding=0 width=100% class="listRow">
					<tr>
						<td class="small" valign=top ><table width="100%"  border="0" cellspacing="0" cellpadding="5">
                          <tr>
                            <td width="20%" class="small cellLabel"><font color="red">*</font><strong><?php echo $this->_tpl_vars['MOD']['LBL_ORGANIZATION_NAME']; ?>
</strong></td>
                            <td width="80%" class="small cellText">
				<input type="text" name="organization_name" class="detailedViewTextBox small" value="<?php echo $this->_tpl_vars['ORGANIZATIONNAME']; ?>
">
				<input type="hidden" name="org_name" value="<?php echo $this->_tpl_vars['ORGANIZATIONNAME']; ?>
">
			    </strong></td>
                          </tr>
                          <tr valign="top">
                            <td class="small cellLabel"><strong><?php echo $this->_tpl_vars['MOD']['LBL_ORGANIZATION_LOGO']; ?>
</strong></td>
			    <?php if ($this->_tpl_vars['ORGANIZATIONLOGONAME'] != ''): ?>	
                            <td class="small cellText" style="background-image: url(test/logo/<?php echo $this->_tpl_vars['ORGANIZATIONLOGONAME']; ?>
); background-position: left; background-repeat: no-repeat;" width="48" height="48" border="0" >
			    <?php else: ?>
                            <td class="small cellText" style="background-image: url(include/images/noimage.gif); background-position: left; background-repeat: no-repeat;" width="48" height="48" border="0" >
			     <?php endif; ?>	
				<br><br><br><br>
                             <?php echo $this->_tpl_vars['MOD']['LBL_SELECT_LOGO']; ?>
 
				<INPUT TYPE="HIDDEN" NAME="MAX_FILE_SIZE" VALUE="800000">
		                <INPUT TYPE="HIDDEN" NAME="PREV_FILE" VALUE="<?php echo $this->_tpl_vars['ORGANIZATIONLOGONAME']; ?>
">	 
                                <input type="file" name="binFile" class="small" value="<?php echo $this->_tpl_vars['ORGANIZATIONLOGONAME']; ?>
" onchange="validateFilename(this);">[<?php echo $this->_tpl_vars['ORGANIZATIONLOGONAME']; ?>
]
                                <input type="hidden" name="binFile_hidden" value="<?php echo $this->_tpl_vars['ORGANIZATIONLOGONAME']; ?>
" />
			      </td>
                          </tr>
                          <tr>
                            <td class="small cellLabel"><strong><?php echo $this->_tpl_vars['MOD']['LBL_ORGANIZATION_ADDRESS']; ?>
</strong></td>
                            <td class="small cellText"><input type="text" name="organization_address" class="detailedViewTextBox small" value="<?php echo $this->_tpl_vars['ORGANIZATIONADDRESS']; ?>
"></td>
                          </tr>
                          <tr> 
                            <td class="small cellLabel"><strong><?php echo $this->_tpl_vars['MOD']['LBL_ORGANIZATION_CITY']; ?>
</strong></td>
                            <td class="small cellText"><input type="text" name="organization_city" class="detailedViewTextBox small" value="<?php echo $this->_tpl_vars['ORGANIZATIONCITY']; ?>
"></td>
                          </tr>
                          <tr>
                            <td class="small cellLabel"><strong><?php echo $this->_tpl_vars['MOD']['LBL_ORGANIZATION_STATE']; ?>
</strong></td>
                            <td class="small cellText"><input type="text" name="organization_state" class="detailedViewTextBox small" value="<?php echo $this->_tpl_vars['ORGANIZATIONSTATE']; ?>
"></td>
                          </tr>
                          <tr>
                            <td class="small cellLabel"><strong><?php echo $this->_tpl_vars['MOD']['LBL_ORGANIZATION_CODE']; ?>
</strong></td>
                            <td class="small cellText"><input type="text" name="organization_code" class="detailedViewTextBox small" value="<?php echo $this->_tpl_vars['ORGANIZATIONCODE']; ?>
"></td>
                          </tr>
                          <tr>
                            <td class="small cellLabel"><strong><?php echo $this->_tpl_vars['MOD']['LBL_ORGANIZATION_COUNTRY']; ?>
</strong></td>
                            <td class="small cellText"><input type="text" name="organization_country" class="detailedViewTextBox small" value="<?php echo $this->_tpl_vars['ORGANIZATIONCOUNTRY']; ?>
"></td>

                          </tr>
                          <tr>
                            <td class="small cellLabel"><strong><?php echo $this->_tpl_vars['MOD']['LBL_ORGANIZATION_PHONE']; ?>
</strong></td>
                            <td class="small cellText"><input type="text" name="organization_phone" class="detailedViewTextBox small" value="<?php echo $this->_tpl_vars['ORGANIZATIONPHONE']; ?>
"></td>
                          </tr>
                          <tr>
                            <td class="small cellLabel"><strong><?php echo $this->_tpl_vars['MOD']['LBL_ORGANIZATION_FAX']; ?>
</strong></td>
                            <td class="small cellText"><input type="text" name="organization_fax" class="detailedViewTextBox small" value="<?php echo $this->_tpl_vars['ORGANIZATIONFAX']; ?>
"></td>
                          </tr>
                          <tr>
                            <td class="small cellLabel"><strong><?php echo $this->_tpl_vars['MOD']['LBL_ORGANIZATION_WEBSITE']; ?>
</strong></td>
                            <td class="small cellText"><input type="text" name="organization_website" class="detailedViewTextBox small" value="<?php echo $this->_tpl_vars['ORGANIZATIONWEBSITE']; ?>
"></td>
                          </tr>
                        </table>
						
						</td>
					  </tr>
					</table>
					<table border=0 cellspacing=0 cellpadding=5 width=100% >
					<tr>
					  <td class="small" nowrap align=right><a href="#top"><?php echo $this->_tpl_vars['MOD']['LBL_SCROLL']; ?>
</a></td>
					</tr>
					</table>
				</td>
				</tr>
				</table>
			
			
			
			</td>
			</tr>
			</table>
		</td>
	</tr>
	</table>
	</div>
	</form>		
</td>
        <td valign="top"><img src="<?php echo vtiger_imageurl('showPanelTopRight.gif', $this->_tpl_vars['THEME']); ?>
"></td>
   </tr>
</tbody>
</table>
<?php echo '
<script>
function verify_data(form,company_name)
{
	if (form.organization_name.value == "" )
	{
		'; ?>

                alert(company_name +"<?php echo $this->_tpl_vars['APP']['CANNOT_BE_NONE']; ?>
");
                form.organization_name.focus();
                return false;
                <?php echo '
	}
	else if (form.organization_name.value.replace(/^\\s+/g, \'\').replace(/\\s+$/g, \'\').length==0)
	{
	'; ?>

                alert(company_name +"<?php echo $this->_tpl_vars['APP']['CANNOT_BE_EMPTY']; ?>
");
                form.organization_name.focus();
                return false;
                <?php echo '
	}
	else if (! upload_filter("binFile","jpg|jpeg|JPG|JPEG"))
        {
                form.binFile.focus();
                return false;
        }
	else
	{
		return true;
	}
}
</script>
'; ?>
