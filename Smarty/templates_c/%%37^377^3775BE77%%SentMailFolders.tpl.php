<?php /* Smarty version 2.6.18, created on 2013-01-24 11:17:33
         compiled from SentMailFolders.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'getTranslatedString', 'SentMailFolders.tpl', 19, false),array('modifier', 'vtiger_imageurl', 'SentMailFolders.tpl', 109, false),)), $this); ?>

<script type="text/javascript" src="modules/Emails/Emails.js"></script>

<script language="javascript">
function ShowFolders(folderid)
{

	if(document.getElementById('mail_fldrname')!=null){
		var mail_folder=document.getElementById('mail_fldrname').innerHTML;
	}
	gselectedrowid = 0;
	$("status").style.display="inline";
	gFolderid = folderid;
	folder='';
//	getObj('search_text').value = '';
	switch(folderid)
	{
		case 1:
			getObj('mail_fldrname').innerHTML = '<b><?php echo getTranslatedString('LBL_ALLMAILS', $this->_tpl_vars['MODULE']); ?>
</b>';
			folder='<b><?php echo getTranslatedString('LBL_ALLMAILS', $this->_tpl_vars['MODULE']); ?>
</b>';
			break;
		case 2:
			getObj('mail_fldrname').innerHTML = '<b><?php echo getTranslatedString('LBL_TO_CONTACTS', $this->_tpl_vars['MODULE']); ?>
</b>';
			folder='<b><?php echo getTranslatedString('LBL_TO_CONTACTS', $this->_tpl_vars['MODULE']); ?>
</b>';
			break;
		case 3:
			getObj('mail_fldrname').innerHTML = '<b><?php echo getTranslatedString('LBL_TO_ACCOUNTS', $this->_tpl_vars['MODULE']); ?>
</b>';
			folder='<b><?php echo getTranslatedString('LBL_TO_ACCOUNTS', $this->_tpl_vars['MODULE']); ?>
</b>';
			break;
		case 4:
			getObj('mail_fldrname').innerHTML = '<b><?php echo getTranslatedString('LBL_TO_LEADS', $this->_tpl_vars['MODULE']); ?>
</b>';
			folder='<b><?php echo getTranslatedString('LBL_TO_LEADS', $this->_tpl_vars['MODULE']); ?>
</b>';
			break;
		case 5:
			getObj('mail_fldrname').innerHTML = '<b><?php echo getTranslatedString('LBL_TO_USERS', $this->_tpl_vars['MODULE']); ?>
</b>';
			folder='<b><?php echo getTranslatedString('LBL_TO_USERS', $this->_tpl_vars['MODULE']); ?>
</b>';
			break;
		case 6:
			getObj('mail_fldrname').innerHTML = '<b><?php echo getTranslatedString('LBL_QUAL_CONTACT', $this->_tpl_vars['MODULE']); ?>
</b>';
			folder='<b><?php echo getTranslatedString('LBL_QUAL_CONTACT', $this->_tpl_vars['MODULE']); ?>
</b>';
	}

	new Ajax.Request(
                'index.php',
                {queue: {position: 'end', scope: 'command'},
                method: 'post',
                postBody: 'module=Emails&ajax=true&action=EmailsAjax&file=ListView&folderid='+folderid,
                onComplete: function(response) { 
                                        $("status").style.display="none";	
										if(document.getElementById('mail_fldrname')!=null){
											if(document.getElementById('_mailfolder_'+mail_folder)!=null && document.getElementById('_mailfolder_'+mail_folder).className!='mm_folder'){
												document.getElementById('_mailfolder_'+mail_folder).className='mm_folder';
												document.getElementById('_mailfolder_'+mail_folder).parentNode.className='';
											}
										}
										if(document.getElementById('_replydiv_')!=null){
											if(document.getElementById('_replydiv_').style.display!='none')
											{
											document.getElementById('_replydiv_').style.display='none';
											document.getElementById('_contentdiv_').style.display='block';
												document.getElementById('_mailfolder_mm_compose').parentNode.className='';
												document.getElementById('_mailfolder_mm_compose').className='';
											}
										}
										if(document.getElementById('_settingsdiv_')!=null){
											if(document.getElementById('_settingsdiv_').style.display!='none')
											{document.getElementById('_settingsdiv_').style.display='none';
											document.getElementById('_contentdiv_').style.display='block';
												document.getElementById('_mailfolder_mm_settings').parentNode.className='';
												document.getElementById('_mailfolder_mm_settings').className='';
											}
										}
										if(document.getElementById('_contentdiv2_')!=null){
											if(document.getElementById('_contentdiv2_').style.display!='none')
											{
											document.getElementById('_contentdiv2_').style.display='none';
											document.getElementById('_contentdiv_').style.display='block';
												document.getElementById('_mailfolder_mm_settings').parentNode.className='';
											}
										}
                                        if(gFolderid == folderid)
                                        {
                                                gselectedrowid = 0;
                                                $("email_con").innerHTML=response.responseText;
												$('EmailDetails').innerHTML = '<table valign="top" border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td class="forwardBg"><table border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td colspan="2">&nbsp;</td></tr></tbody></table></td></tr><tr><td style="padding-top:10px;" bgcolor="#ffffff" height="300" valign="top"></td></tr></tbody></table>';
                                                execJS($('email_con'));
                                        }
                                        else
                                        {
                                                $('EmailDetails').innerHTML = '<table valign="top" border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td class="forwardBg"><table border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td colspan="2">&nbsp;</td></tr></tbody></table></td></tr><tr><td style="padding-top:10px;" bgcolor="#ffffff" height="300" valign="top"></td></tr></tbody></table>';
                                                $("email_con").innerHTML=response.responseText;
                                                execJS($('email_con'));
                                        }
										if(document.getElementById('_contentdiv_')!=null){
											if(document.getElementById('_mailfolder_mm_drafts').parentNode.className=='mm_folder_selected'){
												document.getElementById('_mailfolder_mm_drafts').parentNode.className='';
												document.getElementById('mm_folder mm_folder_selected').className='';
											}
										}	
                                }
                        }
	);

}
</script>


<!-- Sent mail -->
								<img src="<?php echo vtiger_imageurl('sentmail.gif', $this->_tpl_vars['THEME']); ?>
" align="absmiddle" />&nbsp;<b class="txtGreen"><?php echo getTranslatedString('LBL_SENT_MAILS', $this->_tpl_vars['MODULE']); ?>
</b>
								<ul style="list-style-type:none;margin-left:10px;margin-top:5px;padding:2px">
									<li><img src="<?php echo vtiger_imageurl('folder1.gif', $this->_tpl_vars['THEME']); ?>
" align="absmiddle" />&nbsp;&nbsp;
									<a href="javascript:;" onClick="ShowFolders(1)" class="webMnu"><?php echo getTranslatedString('LBL_ALLMAILS', $this->_tpl_vars['MODULE']); ?>
</a>&nbsp;<b></b>
									<li><img src="<?php echo vtiger_imageurl('folder1.gif', $this->_tpl_vars['THEME']); ?>
" align="absmiddle" />&nbsp;&nbsp;
									<a href="javascript:;" onClick="ShowFolders(2)" class="webMnu"><?php echo getTranslatedString('LBL_TO_CONTACTS', $this->_tpl_vars['MODULE']); ?>
</a>&nbsp;<b></b>
									</li>
									<li><img src="<?php echo vtiger_imageurl('folder1.gif', $this->_tpl_vars['THEME']); ?>
" align="absmiddle" />&nbsp;&nbsp;
									<a href="javascript:;" onClick="ShowFolders(3)" class="webMnu"><?php echo getTranslatedString('LBL_TO_ACCOUNTS', $this->_tpl_vars['MODULE']); ?>
</a>&nbsp;<b></b>
									</li>
									<li><img src="<?php echo vtiger_imageurl('folder1.gif', $this->_tpl_vars['THEME']); ?>
" align="absmiddle" />&nbsp;&nbsp;
									<a href="javascript:;" onClick="ShowFolders(4)" class="webMnu"><?php echo getTranslatedString('LBL_TO_LEADS', $this->_tpl_vars['MODULE']); ?>
</a>&nbsp;
									</li>
									<li><img src="<?php echo vtiger_imageurl('folder1.gif', $this->_tpl_vars['THEME']); ?>
" align="absmiddle" />&nbsp;&nbsp;
									<a href="javascript:;" onClick="ShowFolders(5)" class="webMnu"><?php echo getTranslatedString('LBL_TO_USERS', $this->_tpl_vars['MODULE']); ?>
</a>&nbsp;
									</li>
								</ul>