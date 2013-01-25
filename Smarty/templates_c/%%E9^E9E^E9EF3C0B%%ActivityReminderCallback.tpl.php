<?php /* Smarty version 2.6.18, created on 2013-01-21 16:48:22
         compiled from ActivityReminderCallback.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'ActivityReminderCallback.tpl', 21, false),)), $this); ?>

<div id="<?php echo $this->_tpl_vars['popupid']; ?>
" style="float: right; border-style: solid; border-color: rgb(141, 141, 141); border-width: 1px 3px 3px 1px; overflow: hidden; padding-left: 5px; padding-right: 5px; padding-top: 5px; padding-bottom: 10px; margin-left: 2px; font-weight: normal; height: 75px;">

<table border='0' cellpadding='2' cellspacing='0'>
	<tr>
		<td align='left'><b>
		<img align="top" src="themes/images/<?php echo $this->_tpl_vars['activitytype']; ?>
s.gif"/> <?php echo $this->_tpl_vars['activitytype']; ?>
 - <?php echo $this->_tpl_vars['cbstatus']; ?>
</b> </td>
		<td align='right'><b><font color=<?php echo $this->_tpl_vars['cbcolor']; ?>
><?php echo $this->_tpl_vars['cbdate']; ?>
 <?php echo $this->_tpl_vars['cbtime']; ?>
</font></b></td>
		<td align='right'>
			<a style='padding-left: 10px;' href="javascript:;" onclick="ActivityReminderCallbackReset(0, '<?php echo $this->_tpl_vars['popupid']; ?>
');ActivityReminderRemovePopupDOM('<?php echo $this->_tpl_vars['popupid']; ?>
');"><img src='<?php echo vtiger_imageurl('close.gif', $this->_tpl_vars['THEME']); ?>
' align='absmiddle' border='0'></a></td>
	</tr>

	<tr>
		<td colspan='3'><hr></td>
	</tr>

	<tr>
		<td colspan='3' align='left'><b><?php echo $this->_tpl_vars['cbsubject']; ?>
</b><a style='padding: 2px;' href='index.php?action=DetailView&module=<?php echo $this->_tpl_vars['cbmodule']; ?>
&record=<?php echo $this->_tpl_vars['cbrecord']; ?>
'>[<?php echo $this->_tpl_vars['APP']['LBL_MORE']; ?>
...]</a></td>
	</tr>

	<tr>
		<td align='center'> 
			<a style='padding: 0 5px 0 5px;' href='javascript:;' onclick="ActivityReminderPostponeCallback('<?php echo $this->_tpl_vars['cbmodule']; ?>
','<?php echo $this->_tpl_vars['cbrecord']; ?>
','<?php echo $this->_tpl_vars['cbreminderid']; ?>
');ActivityReminderRemovePopupDOM('<?php echo $this->_tpl_vars['popupid']; ?>
');"><b><?php echo $this->_tpl_vars['APP']['LBL_POSTPONE']; ?>
</b></a> 
		</td>
	</tr>
</table>

</div>