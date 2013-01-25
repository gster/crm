<?php /* Smarty version 2.6.18, created on 2013-01-24 11:17:33
         compiled from EmailContents.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'getTranslatedString', 'EmailContents.tpl', 25, false),)), $this); ?>
<link rel="stylesheet" type="text/css" href="themes/<?php echo $this->_tpl_vars['theme']; ?>
/webmail.css">
<form onsubmit="VtigerJS_DialogBox.block();" method="POST" name="massdelete">
<table width="100%"  border="0" cellspacing="0" cellpadding="2">
	<input name="idlist" type="hidden">
	<input id="search_url" type="hidden" value="" name="search_url">
	<input id="excludedRecords" type="hidden" value="" name="excludedRecords">
	<input id="numOfRows" type="hidden" value="" name="numOfRows">
	<input id="allids" type="hidden" value="" name="allids">
	<input id="selectedboxes" type="hidden" value="" name="selectedboxes">
	<input id="allselectedboxes" type="hidden" value="" name="allselectedboxes">
	<input id="current_page_boxes" type="hidden" value="" name="current_page_boxes">
	<tr>
		<td width="10%" align="left">
			<input type="button" name="Button2" value=" <?php echo getTranslatedString('LBL_DELETE_BUTTON', $this->_tpl_vars['MODULE']); ?>
"  class="crmbutton small delete" onClick="return massDelete();"/>
		</td>
		<td width="40%" align="right" class="small">
			<font color="#000000"><?php echo $this->_tpl_vars['APP']['LBL_SEARCH']; ?>
</font>&nbsp;<input type="text" name="search_text" id="search_text" class="importBox" >&nbsp;
		</td>
		<td width="20%" align=left class="small">
			<select name="search_field" id="search_field" onChange="Searchfn();" class="importBox">
				<option value='subject'><?php echo $this->_tpl_vars['MOD']['LBL_IN_SUBJECT']; ?>
</option>
				<option value='user_name'><?php echo $this->_tpl_vars['MOD']['LBL_IN_SENDER']; ?>
</option>
				<option value='join'><?php echo $this->_tpl_vars['MOD']['LBL_IN_SUBJECT_OR_SENDER']; ?>
</option>
			</select>&nbsp;
		</td>
		<td width="10%">
			<input name="find" value=" Find " class="crmbutton small create" onclick="Searchfn();" type="button">
		</td>
			<?php echo $this->_tpl_vars['NAVIGATION']; ?>

	</tr>
</table>
<div id="rssScroll">
	<table cellspacing="0" cellpadding="0" width=100%>
        <tr>
			<th width="5%" class='tableHeadBg' align="left"><input type="checkbox"  name="selectall" onClick="toggleSelect(this.checked,'selected_id')"></th>
            <th width="65%" class='tableHeadBg'align="left"><?php echo $this->_tpl_vars['LISTHEADER']['0']; ?>
</th>
            <th width="15%" class='tableHeadBg'align="left"><?php echo $this->_tpl_vars['LISTHEADER']['1']; ?>
</th>
            <th width="15%" class='tableHeadBg'align="left"><?php echo $this->_tpl_vars['LISTHEADER']['2']; ?>
</th>
        </tr>
		<?php if ($this->_tpl_vars['LISTENTITY'] != NULL): ?>
			<?php $_from = $this->_tpl_vars['LISTENTITY']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['row']):
?>
			    <tr id="row_<?php echo $this->_tpl_vars['id']; ?>
">
				<td>
				<span><input type="checkbox" name="selected_id"  value= '<?php echo $this->_tpl_vars['id']; ?>
' onClick=toggleSelectAll(this.name,"selectall")>
				</span></td>
				<td onClick="getEmailContents('<?php echo $this->_tpl_vars['id']; ?>
');" style="cursor:pointer;"><b><?php echo $this->_tpl_vars['row']['0']; ?>
</b></td>
				<td onClick="getEmailContents('<?php echo $this->_tpl_vars['id']; ?>
');" style="cursor:pointer;"><?php echo $this->_tpl_vars['row']['1']; ?>
</td>
				<?php if ($this->_tpl_vars['EMAILFALG'][$this->_tpl_vars['id']] == 'SAVED'): ?>
					<td onClick="getEmailContents('<?php echo $this->_tpl_vars['id']; ?>
');" style="cursor:pointer;"></td>
				<?php else: ?>
					<td onClick="getEmailContents('<?php echo $this->_tpl_vars['id']; ?>
');" style="cursor:pointer;"><?php echo $this->_tpl_vars['row']['2']; ?>
</td>
				<?php endif; ?>
			        </tr>
			<?php endforeach; endif; unset($_from); ?>
		<?php else: ?>
			<tr><td>&nbsp;</td><td align="center" nowrap><b><?php echo $this->_tpl_vars['MOD']['LBL_NO_RECORDS']; ?>
</b></td></tr>
		<?php endif; ?>
    </table>
	</form>
</div>
<div id="EmailDetails"></div>
<SCRIPT>
	if(gselectedrowid != 0)
	{
		var rowid = 'row_'+gselectedrowid;
	    getObj(rowid).className = 'emailSelected';
	}
</SCRIPT>