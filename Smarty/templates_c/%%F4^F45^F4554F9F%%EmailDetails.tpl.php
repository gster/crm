<?php /* Smarty version 2.6.18, created on 2013-01-24 11:17:33
         compiled from EmailDetails.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'emails_checkFieldVisiblityPermission', 'EmailDetails.tpl', 54, false),)), $this); ?>
<script language="JavaScript" type="text/javascript" src="modules/Webmails/Webmails.js"></script>

<table width="100%" border="0" cellpadding="0" cellspacing="0" valign="top">
<tr>
    <td class="hdrNameBg">
  		<table width="100%"  border="0" cellspacing="5" cellpadding="0">
		<tr>
		<?php if ($this->_tpl_vars['BLOCKS'] != ''): ?>
			<td align="left">
			  	<input type="button" name="forward" value=" <?php echo $this->_tpl_vars['MOD']['LBL_FORWARD_BUTTON']; ?>
 " class="crmbutton small edit" onClick=OpenCompose('<?php echo $this->_tpl_vars['ID']; ?>
','forward')>&nbsp;
				<?php if ($this->_tpl_vars['EMAIL_FLAG'] != 'WEBMAIL'): ?>
			  	<input type="button" name="Send" value=" <?php echo $this->_tpl_vars['MOD']['LBL_SEND']; ?>
 " class="crmbutton small save" onClick=OpenCompose('<?php echo $this->_tpl_vars['ID']; ?>
','edit')>&nbsp;	
				<input type="button" name="Reply" value=" <?php echo $this->_tpl_vars['MOD']['LBL_REPLY_BUTTON']; ?>
 " class="crmbutton small edit" onClick=ReplyCompose('<?php echo $this->_tpl_vars['ID']; ?>
','reply')>&nbsp;
				<input type="button" title="<?php echo $this->_tpl_vars['MOD']['LBL_PRINT_EMAIL']; ?>
" name="<?php echo $this->_tpl_vars['MOD']['LBL_PRINT_EMAIL']; ?>
" value="<?php echo $this->_tpl_vars['MOD']['LBL_PRINT_EMAIL']; ?>
" class="crmbutton small edit" onClick=OpenCompose('<?php echo $this->_tpl_vars['ID']; ?>
','print')> 
				<?php else: ?>
			  	<input type="button" name="Send" value=" <?php echo $this->_tpl_vars['MOD']['LBL_REPLY_BUTTON']; ?>
 " class="crmbutton small edit" onClick=OpenCompose('<?php echo $this->_tpl_vars['ID']; ?>
','edit')>&nbsp;
				<?php endif; ?>
				<?php $_from = $this->_tpl_vars['BLOCKS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>	
				<?php $_from = $this->_tpl_vars['row']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['title'] => $this->_tpl_vars['elements']):
?>	
					<?php if ($this->_tpl_vars['elements']['fldname'] == 'filename' && $this->_tpl_vars['elements']['value'] != ''): ?>
						<input type="button" name="download" value=" <?php echo $this->_tpl_vars['MOD']['LBL_DOWNLOAD_ATTCH_BUTTON']; ?>
 " class="crmbutton small save" onclick="fnvshobj(this,'reportLay')"/>
					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
				<?php endforeach; endif; unset($_from); ?>
			</td>
						<td width="25%" align="right"><input type="button" name="Button" value=" <?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON']; ?>
 "  class="crmbutton small delete" onClick="DeleteEmail('<?php echo $this->_tpl_vars['ID']; ?>
')"/></td>
						<?php else: ?>
						<td colspan="2">&nbsp;</td>
						<?php endif; ?>
		</tr>
		</table>
	</td>
</tr>
<tr>
	<td height="250" bgcolor="#FFFFFF" valign="top" class="MatrixLayer2">
	<?php $_from = $this->_tpl_vars['BLOCKS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>	
	<?php $_from = $this->_tpl_vars['row']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['elements']):
?>	
		<?php if ($this->_tpl_vars['elements']['fldname'] == 'subject'): ?>
		<table class="tableHeadBg" width="100%" border="0" cellpadding="0" cellspacing="0">
	<?php if ($this->_tpl_vars['EMAIL_FLAG'] != 'WEBMAIL'): ?>
	<tr><td width="20%" align="right" valign="top"><b><?php echo $this->_tpl_vars['MOD']['LBL_FROM']; ?>
</b></td><td width="2%" align="left">&nbsp;</td><td align="left"><?php echo $this->_tpl_vars['FROM_MAIL']; ?>
&nbsp;</td></tr>
	<tr><td width="20%" align="right" valign="top"><b><?php echo $this->_tpl_vars['MOD']['LBL_TO']; ?>
</b></td><td width="2%" align="left">&nbsp;</td><td align="left"><?php echo $this->_tpl_vars['TO_MAIL']; ?>
&nbsp;</td></tr>
		<?php if (emails_checkFieldVisiblityPermission('ccmail') == '0'): ?>
		<tr><td align="right" valign="top"><?php echo $this->_tpl_vars['MOD']['LBL_CC']; ?>
</td><td align="left">&nbsp;</td><td align="left"><?php echo $this->_tpl_vars['CC_MAIL']; ?>
&nbsp;</td></tr>
		<?php endif; ?>
		<?php if (emails_checkFieldVisiblityPermission('bccmail') == '0'): ?>
		<tr><td align="right" valign="top"><?php echo $this->_tpl_vars['MOD']['LBL_BCC']; ?>
</td><td align="left">&nbsp;</td><td align="left"><?php echo $this->_tpl_vars['BCC_MAIL']; ?>
&nbsp;</td></tr>
		<?php endif; ?>
	<?php else: ?>
	<tr><td width="20%" align="right" valign="top"><b><?php echo $this->_tpl_vars['MOD']['LBL_FROM']; ?>
</b></td><td width="2%" align="left">&nbsp;</td><td align="left"><?php echo $this->_tpl_vars['TO_MAIL']; ?>
&nbsp;</td></tr>
	<?php endif; ?>
	<tr><td align="right"><b><?php echo $this->_tpl_vars['MOD']['LBL_SUBJECT']; ?>
</b></td><td align="left">&nbsp;</td><td align="left"><?php echo $this->_tpl_vars['elements']['value']; ?>
&nbsp;</td></tr>
			<tr><td align="right" style="border-bottom:1px solid #666666;" colspan="3">&nbsp;</td></tr>
		</table>
		<?php elseif ($this->_tpl_vars['elements']['fldname'] == 'description'): ?>
		<div>
			<?php echo $this->_tpl_vars['elements']['value']; ?>

		</div>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	<?php endforeach; endif; unset($_from); ?>
	</td>
</tr>
</table>
<?php $_from = $this->_tpl_vars['BLOCKS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>	
	<?php $_from = $this->_tpl_vars['row']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['title'] => $this->_tpl_vars['elements']):
?>	
	<?php if ($this->_tpl_vars['elements']['fldname'] == 'filename'): ?>
	<div id="reportLay" style="width:130px;" onmouseout="fninvsh('reportLay')" onmouseover="fnvshNrm('reportLay')">
		<table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#FFFFFF">
		<?php $_from = $this->_tpl_vars['elements']['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['attachments']):
?>
		<tr>
			<td style="border-bottom: 1px solid rgb(204, 204, 204); padding: 5px;">
				<?php echo $this->_tpl_vars['attachments']; ?>

			</td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
		</table>
	</div>
	<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
<?php endforeach; endif; unset($_from); ?>
