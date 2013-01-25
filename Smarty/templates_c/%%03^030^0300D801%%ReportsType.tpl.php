<?php /* Smarty version 2.6.18, created on 2013-01-24 11:56:41
         compiled from ReportsType.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'ReportsType.tpl', 22, false),)), $this); ?>
<table class="small" bgcolor="#ffffff" border="0" cellpadding="5" cellspacing="0" height="500" valign="top" width="100%">
	<tbody><tr>
	<td colspan="2">
	<span class="genHeaderGray"> <?php echo $this->_tpl_vars['MOD']['LBL_REPORT_TYPE']; ?>
 </span><br>
	<?php echo $this->_tpl_vars['MOD']['LBL_SELECT_REPORT_TYPE_BELOW']; ?>
							
	<hr>
	</td>
	</tr>
	<tr>
	<td style="padding-right: 5px;" rowspan="2" align="right" width="25%">
	<img src="<?php echo vtiger_imageurl('tabular.gif', $this->_tpl_vars['THEME']); ?>
" align="absmiddle">
	</td>
	<td style="padding-left: 5px;" align="left" height="50" valign="bottom" width="75%">
	<?php if ($this->_tpl_vars['REPORT_TYPE'] == 'tabular'): ?>
	<input checked type="radio" name="reportType" id="reportType" value="tabular" onChange="hideTabs()">
	<?php else: ?>
	<input type="radio" name="reportType" id="reportType" value="tabular" onChange="hideTabs()">
	<?php endif; ?>
	<b> <?php echo $this->_tpl_vars['MOD']['LBL_TABULAR_FORMAT']; ?>
</b></td>
	</tr><tr><td style="padding-left: 25px;" align="left" valign="top" width="75%">
	 <?php echo $this->_tpl_vars['MOD']['LBL_TABULAR_REPORTS_ARE_SIMPLEST']; ?>
	
	</td>
	</tr>
	<tr><td colspan="2">&nbsp;</td></tr>
	<tr>
	<td style="padding-right: 5px;" rowspan="2" align="right" width="25%">
	<img src="<?php echo vtiger_imageurl('summarize.gif', $this->_tpl_vars['THEME']); ?>
" align="absmiddle">
	</td>
	<td style="padding-left: 5px;" align="left" height="50" valign="bottom" width="75%">
	<?php if ($this->_tpl_vars['REPORT_TYPE'] == 'summary'): ?>
	<input type="radio" checked name="reportType" value="summary" onclick="hideTabs()">
	<?php else: ?>
	<input type="radio" name="reportType" value="summary" onclick="hideTabs()">
	<?php endif; ?>
	<b> <?php echo $this->_tpl_vars['MOD']['LBL_SUMMARY_REPORT']; ?>
</b></td>
	</tr><tr><td style="padding-left: 25px;" align="left" valign="top" width="75%">
	 <?php echo $this->_tpl_vars['MOD']['LBL_SUMMARY_REPORT_VIEW_DATA_WITH_SUBTOTALS']; ?>

	</td>
	</tr>
	<tr><td colspan="2" height="235">&nbsp;</td></tr>
	</tbody>
</table>