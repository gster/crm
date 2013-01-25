<?php /* Smarty version 2.6.18, created on 2013-01-24 11:17:33
         compiled from Emails.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'getTranslatedString', 'Emails.tpl', 16, false),array('modifier', 'vtiger_imageurl', 'Emails.tpl', 20, false),)), $this); ?>
<!--  USER  SETTINGS PAGE STARTS HERE -->
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'Buttons_List.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script language="JavaScript" type="text/javascript" src="modules/Emails/Emails.js"></script>
<link rel="stylesheet" type="text/css" href="themes/<?php echo $this->_tpl_vars['theme']; ?>
/webmail.css">
<div id="mailconfchk" class="small" style="position:absolute;display:none;left:350px;top:160px;height:27px;white-space:nowrap;z-index:10000007px;"><font color='red'><b><?php echo getTranslatedString('LBL_CONFIGURE_MAIL_SETTINGS', $this->_tpl_vars['MODULE']); ?>
.<br> <?php echo $this->_tpl_vars['APP']['LBL_PLEASE_CLICK']; ?>
 <a href="index.php?module=Users&action=AddMailAccount&record=<?php echo $this->_tpl_vars['USERID']; ?>
&return_module=Webmails&return_action=index"><?php echo $this->_tpl_vars['APP']['LBL_HERE']; ?>
</a> <?php echo $this->_tpl_vars['APP']['LBL_TO_CONFIGURE']; ?>
</b></font></div>
<!-- Shadow starts here -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" height="100%">
	<tr>
		<td valign=top align=right><img src="<?php echo vtiger_imageurl('showPanelTopLeft.gif', $this->_tpl_vars['THEME']); ?>
"></td>

		<td class="showPanelBg" valign="top" width="95%" align=center >
		<!-- Email Client starts here -->
			<br>
			<table width="100%"  border="0" cellspacing="0" cellpadding="0" class="mailClient">
				<tr>
					<td class="mailClientBg" width="7">&nbsp;</td>
					<td class="mailClientBg">
					<form name="massdelete" method="POST" onsubmit="VtigerJS_DialogBox.block();">
						<table width="100%"  border="0" cellspacing="0" cellpadding="0">
							<!-- Compose, Settings and Name image -->
							<tr>
								<td colspan="3" style="vertical-align:middle;">
									<table border=0 cellspacing=0 cellpadding=0 width=100%>
									<tr>
									<td align=left>
									
										<table cellpadding="5" cellspacing="0" border="0">
											<tr>
												<td nowrap style="padding-left:20px;padding-right:20px" class=small>
													<img src="<?php echo vtiger_imageurl('compose.gif', $this->_tpl_vars['THEME']); ?>
" align="absmiddle" />
													&nbsp;<a href="javascript:;" onClick="OpenCompose('','create');" ><?php echo getTranslatedString('LBL_COMPOSE', $this->_tpl_vars['MODULE']); ?>
</a>
												</td>
												<td nowrap style="padding-left:20px;padding-right:20px" class=small>
													<img src="<?php echo vtiger_imageurl('webmail_settings.gif', $this->_tpl_vars['THEME']); ?>
" align="absmiddle" />
													&nbsp;<a href="index.php?module=MailManager&action=index&parenttab=<?php echo $this->_tpl_vars['CATEGORY']; ?>
" ><?php echo getTranslatedString('LBL_SETTINGS', $this->_tpl_vars['MODULE']); ?>
</a>
												</td>
											</tr>
											</table>
										</td>
										<td align=right>
											<table >
											<tr>
												<td class="componentName" align=right><?php echo getTranslatedString('LBL_VTIGER_EMAIL_CLIENT', $this->_tpl_vars['MODULE']); ?>
<!-- <img src="<?php echo vtiger_imageurl('titleMailClient.gif', $this->_tpl_vars['THEME']); ?>
" align="right"/> --></td>
											</tr>
											</table>
									</td>
									</tr>
									</table>
									
								</td>
							</tr>
							<!-- Columns -->
							<tr>
							<td width="18%" class="big mailSubHeader" ><b><?php echo getTranslatedString('LBL_EMAIL_FOLDERS', $this->_tpl_vars['MODULE']); ?>
</b></td>
							<td>&nbsp;</td>
							<td width="82%" class="big mailSubHeader" align="left"><span id="mail_fldrname"><b><?php echo getTranslatedString('LBL_ALLMAILS', $this->_tpl_vars['MODULE']); ?>
</b></span></td>

							</tr>
							
							<tr>
								<td rowspan="6" class="MatrixLayer1" valign="top" bgcolor="#FFFFFF" style="padding:5px; " align="left" >
								<!-- Mailbox Tree -->
								<!-- Inbox -->
								<img src="<?php echo vtiger_imageurl('folder_.gif', $this->_tpl_vars['THEME']); ?>
" align="absmiddle" />&nbsp;<b class="txtGreen"><?php echo getTranslatedString('LBL_INBOX', $this->_tpl_vars['MODULE']); ?>
</b>
								<ul style="list-style-type:none;margin-left:10px;margin-top:5px;padding:2px">
									<li><img src="<?php echo vtiger_imageurl('folder.gif', $this->_tpl_vars['THEME']); ?>
" align="absmiddle" />&nbsp;&nbsp;
										<a href="javascript:;" onClick="ShowFolders(6)" class="webMnu"><?php echo getTranslatedString('LBL_QUAL_CONTACT', $this->_tpl_vars['MODULE']); ?>
</a>&nbsp;<b></b>
									</li>
									<li><img src="<?php echo vtiger_imageurl('mymail.gif', $this->_tpl_vars['THEME']); ?>
" align="absmiddle" />&nbsp;&nbsp;
									<a href="index.php?module=MailManager&action=index&parenttab=<?php echo $this->_tpl_vars['CATEGORY']; ?>
" ><?php echo getTranslatedString('LBL_MY_MAILS', $this->_tpl_vars['MODULE']); ?>
</a>&nbsp;<b></b>
									</li>
								</ul>
								<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "SentMailFolders.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
								</td>
								<!-- All mails pane -->
								<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td class="hdrNameBg">
									<!-- Command Buttons and Search Email -->
									
									
								</td>
							</tr>
							<!-- Mail Subject Headers list -->
							<tr>
								<td>&nbsp;</td>
								<td align="left">
									<div id="email_con">
									<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "EmailContents.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
									</div>
								</td>
							</tr>
							
							<tr>
								<td>&nbsp;</td>
								<td valign="top">
									<div id="EmailDetails"> 
									<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "EmailDetails.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
									</div>
								</td>
							</tr>
						</table>
						</form>
						<br>
					</td>
					<td class="mailClientBg" width="7">&nbsp;</td>
				</tr>
				<!-- <tr>
					<td width="7" height="8" style="font-size:1px;font-family:Arial, Helvetica, sans-serif;"><img src="<?php echo vtiger_imageurl('bottom_left.jpg', $this->_tpl_vars['THEME']); ?>
" align="bottom"  /></td>
					<td bgcolor="#ECECEC" height="8" style="font-size:1px;" ></td>
					<td width="8" height="8" style="font-size:1px;font-family:Arial, Helvetica, sans-serif;"><img src="<?php echo vtiger_imageurl('bottom_right.jpg', $this->_tpl_vars['THEME']); ?>
" align="bottom" /></td>
				</tr>-->
			</table><br/>
		</td>
		<td valign=top><img src="<?php echo vtiger_imageurl('showPanelTopRight.gif', $this->_tpl_vars['THEME']); ?>
"></td>
		
	</tr>
</table>
<!-- END -->
