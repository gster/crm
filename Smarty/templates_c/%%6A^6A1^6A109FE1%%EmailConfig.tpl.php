<?php /* Smarty version 2.6.18, created on 2013-01-21 09:57:21
         compiled from Settings/EmailConfig.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'Settings/EmailConfig.tpl', 18, false),)), $this); ?>
<script language="JAVASCRIPT" type="text/javascript" src="include/js/smoothscroll.js"></script>
<script language="JavaScript" type="text/javascript" src="include/js/menu.js"></script>
<br>
<table align="center" border="0" cellpadding="0" cellspacing="0" width="98%">
	<tbody>
		<tr>
			<td valign="top"><img src="<?php echo vtiger_imageurl('showPanelTopLeft.gif', $this->_tpl_vars['THEME']); ?>
"></td>
			<td class="showPanelBg" style="padding: 10px;" valign="top" width="100%">
			<br>
			<?php if ($this->_tpl_vars['EMAILCONFIG_MODE'] != 'edit'): ?>
				<form action="index.php" method="post" name="MailServer" id="form" onsubmit="VtigerJS_DialogBox.block();">
					<input type="hidden" name="emailconfig_mode">
			<?php else: ?>
				<?php echo '
					<form action="index.php" method="post" name="MailServer" id="form" onsubmit="if(validate_mail_server(MailServer)){ VtigerJS_DialogBox.block(); return true; } else { return false; }">
				'; ?>

						<input type="hidden" name="server_type" value="email">
			<?php endif; ?>
							<input type="hidden" id="module" name="module" value="Settings">
							<input type="hidden" name="action">
							<input type="hidden" name="parenttab" value="Settings">
							<input type="hidden" name="return_module" value="Settings">
							<input type="hidden" name="return_action" value="EmailConfig">
							<input type="hidden" name="confirmMsg" value="<?php echo $this->_tpl_vars['MOD']['LBL_CONFIRM_DEFAULT_SETTINGS']; ?>
" id="confirmMsg">
							<input type="hidden" name="defaultMsg" value="<?php echo $this->_tpl_vars['MOD']['EXISTING_DEFAULT_VALUES']; ?>
" id="defaultMsg">
							<input type="hidden" name="mode">
							<div align=center>

								<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "SetMenu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

								<!-- DISPLAY -->
								<table border=0 cellspacing=0 cellpadding=5 width=100% class="settingsSelUITopLine">
									<tr>
										<td width=50 rowspan=2 valign=top><img src="<?php echo vtiger_imageurl('ogmailserver.gif', $this->_tpl_vars['THEME']); ?>
" alt="<?php echo $this->_tpl_vars['MOD']['LBL_USERS']; ?>
" width="48" height="48" border=0 title="<?php echo $this->_tpl_vars['MOD']['LBL_USERS']; ?>
"></td>
										<td class=heading2 valign=bottom><b><a href="index.php?module=Settings&action=index&parenttab=Settings"><?php echo $this->_tpl_vars['MOD']['LBL_SETTINGS']; ?>
</a> > <?php echo $this->_tpl_vars['MOD']['LBL_MAIL_SERVER_SETTINGS']; ?>
 </b></td>
									</tr>
									<tr>
										<td valign=top class="small"><?php echo $this->_tpl_vars['MOD']['LBL_MAIL_SERVER_DESC']; ?>
 </td>
									</tr>
								</table>
								<br>
								<table border=0 cellspacing=0 cellpadding=10 width=100%  class="tableHeading">
								<tr>
									<td class="small">
										<strong><?php echo $this->_tpl_vars['MOD']['LBL_MAIL_SERVER_SMTP']; ?>
</strong>
										<div style="float: right">
										<?php if ($this->_tpl_vars['EMAILCONFIG_MODE'] != 'edit'): ?>
											<input class="crmButton small edit" title="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_KEY']; ?>
" onclick="this.form.action.value='EmailConfig';this.form.emailconfig_mode.value='edit'" type="submit" name="Edit" value="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_LABEL']; ?>
">
										<?php else: ?>
											<input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="crmButton small save" onclick="this.form.action.value='Save';" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" >&nbsp;&nbsp;
											<input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="crmButton small cancel" onclick="window.location.href = 'index.php?module=Settings&action=EmailConfig&parenttab=Settings';" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
">
										<?php endif; ?>
										</div>
									</td>
								</tr>
								<?php if ($this->_tpl_vars['ERROR_MSG'] != ''): ?>
								<tr>
								<?php echo $this->_tpl_vars['ERROR_MSG']; ?>

								</tr>
								<?php endif; ?>
								</table>

								<?php if ($this->_tpl_vars['EMAILCONFIG_MODE'] != 'edit'): ?>
								<table border=0 cellspacing=0 cellpadding=0 width=100% class="dvtContentSpace">
									<tr>
										<td class="small" valign=top >
											<table width="100%"  border="0" cellspacing="0" cellpadding="5">
												<tr>
													<td width="20%" nowrap class="small cellLabel"><strong><?php echo $this->_tpl_vars['MOD']['LBL_OUTGOING_MAIL_SERVER']; ?>
</strong></td>
													<td width="80%" class="small cellText"><strong><?php echo $this->_tpl_vars['MAILSERVER']; ?>
&nbsp;</strong></td>
													<input type="hidden" value=<?php echo $this->_tpl_vars['MAILSERVER']; ?>
 id="server">
												</tr>
												<tr valign="top">
													<td nowrap class="small cellLabel"><strong><?php echo $this->_tpl_vars['MOD']['LBL_USERNAME']; ?>
</strong></td>
													<td class="small cellText"><?php echo $this->_tpl_vars['USERNAME']; ?>
&nbsp;</td>
													<input type="hidden" value=<?php echo $this->_tpl_vars['USERNAME']; ?>
 id="server_username">
												</tr>
												<tr>
													<td nowrap class="small cellLabel"><strong><?php echo $this->_tpl_vars['MOD']['LBL_PASWRD']; ?>
</strong></td>
													<td class="small cellText">
														<?php if ($this->_tpl_vars['PASSWORD'] != ''): ?>
														******
														<?php endif; ?>&nbsp;
													</td>
													<input type="hidden" value=<?php echo $this->_tpl_vars['PASSWORD']; ?>
 id="server_password">
												</tr>
												<tr>
													<td nowrap class="small cellLabel"><strong><?php echo $this->_tpl_vars['MOD']['LBL_FROM_EMAIL_FIELD']; ?>
</strong></td>
													<td class="small cellText"><?php echo $this->_tpl_vars['FROM_EMAIL_FIELD']; ?>
&nbsp;</td>
													<input type="hidden" value=<?php echo $this->_tpl_vars['FROM_EMAIL_FIELD']; ?>
 id="from_email_field">
													</td>
												</tr>
												<tr>
													<td nowrap class="small cellLabel"><strong><?php echo $this->_tpl_vars['MOD']['LBL_REQUIRES_AUTHENT']; ?>
</strong></td>
													<td class="small cellText">
													<?php if ($this->_tpl_vars['SMTP_AUTH'] == 'checked'): ?>
													<?php echo $this->_tpl_vars['MOD']['LBL_YES']; ?>

													<?php else: ?>
													<?php echo $this->_tpl_vars['MOD']['LBL_NO']; ?>

													<?php endif; ?>
													</td>
													<input type="hidden" value=<?php echo $this->_tpl_vars['SMTP_AUTH']; ?>
 id="smtp_auth">
												</tr>
										</table>
										<?php else: ?>
										<table border=0 cellspacing=0 cellpadding=0 width=100% class="listRow">
											<tr>
												<td class="small" valign=top >
													<table width="100%"  border="0" cellspacing="0" cellpadding="5">
														<tr>
															<td width="20%" nowrap class="small cellLabel"><font color="red">*</font>&nbsp;<strong><?php echo $this->_tpl_vars['MOD']['LBL_OUTGOING_MAIL_SERVER']; ?>
</strong></td>
															<td width="80%" class="small cellText">
															<input type="text" class="detailedViewTextBox small" value="<?php echo $this->_tpl_vars['MAILSERVER']; ?>
" name="server" id="server">
															</td>
														</tr>
														<tr valign="top">
															<td nowrap class="small cellLabel"><strong><?php echo $this->_tpl_vars['MOD']['LBL_USERNAME']; ?>
</strong></td>
															<td class="small cellText">
															<input type="text" class="detailedViewTextBox small" value="<?php echo $this->_tpl_vars['USERNAME']; ?>
" name="server_username" id="server_username">
															</td>
														</tr>
														<tr>
															<td nowrap class="small cellLabel"><strong><?php echo $this->_tpl_vars['MOD']['LBL_PASWRD']; ?>
</strong></td>
															<td class="small cellText">
															<input type="password" class="detailedViewTextBox small" value="<?php echo $this->_tpl_vars['PASSWORD']; ?>
" name="server_password" id="server_password">
															</td>
														</tr>
														<tr>
															<td nowrap class="small cellLabel"><strong><?php echo $this->_tpl_vars['MOD']['LBL_FROM_EMAIL_FIELD']; ?>
</strong></td>
															<td class="small cellText">
															<input type="text" class="detailedViewTextBox small" value="<?php echo $this->_tpl_vars['FROM_EMAIL_FIELD']; ?>
" name="from_email_field" id="from_email_field"/>
															</td>
														</tr>
														<tr>
															<td nowrap class="small cellLabel"><strong><?php echo $this->_tpl_vars['MOD']['LBL_REQUIRES_AUTHENT']; ?>
</strong></td>
															<td class="small cellText">
															<input type="checkbox" name="smtp_auth" id="smtp_auth" <?php echo $this->_tpl_vars['SMTP_AUTH']; ?>
/>
															</td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
									<?php endif; ?>

									<!--table border=0 cellspacing=0 cellpadding=5 width=100% >
									<tr>
									<td class="small" nowrap align=right><a href="#top"><?php echo $this->_tpl_vars['MOD']['LBL_SCROLL']; ?>
</a></td>
									</tr>
									</table-->
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
function validate_mail_server(form)
{
	if(form.server.value ==\'\')
	{
		'; ?>

                alert("<?php echo $this->_tpl_vars['APP']['SERVERNAME_CANNOT_BE_EMPTY']; ?>
")
                        return false;
                <?php echo '
	}
	return true;
}

function setDefaultMailServer()
{
	var confirmMsg = document.getElementById(\'confirmMsg\').value;
	if(confirm(confirmMsg)){
		return true;
	}
	else{
		return false;
	}
}
</script>
'; ?>
