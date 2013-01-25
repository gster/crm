<?php /* Smarty version 2.6.18, created on 2013-01-24 11:56:41
         compiled from ReportFilters.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'ReportFilters.tpl', 35, false),)), $this); ?>
<link rel="stylesheet" type="text/css" media="all" href="jscalendar/calendar-win2k-cold-1.css">
<script type="text/javascript" src="jscalendar/calendar.js"></script>
<script type="text/javascript" src="jscalendar/lang/calendar-<?php echo $this->_tpl_vars['APP']['LBL_JSCALENDAR_LANG']; ?>
.js"></script>
<script type="text/javascript" src="jscalendar/calendar-setup.js"></script>
<script language="JavaScript" type="text/javascript" src="include/calculator/calc.js"></script>

<script type="text/javascript">
	var rel_fields = <?php echo $this->_tpl_vars['REL_FIELDS']; ?>
;
</script>

<?php echo $this->_tpl_vars['BLOCKJS_STD']; ?>


<table class="small" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" height="532" width="100%" valign="top">
	<tr>
		<td colspan="2" valign="top" height="50">
			<span class="genHeaderGray"><?php echo $this->_tpl_vars['MOD']['LBL_FILTERS']; ?>
</span><br>
			<?php echo $this->_tpl_vars['MOD']['LBL_SELECT_FILTERS_TO_STREAMLINE_REPORT_DATA']; ?>

			<hr>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="left" valign="top">
			<span id='std_filter_div_show' name='std_filter_div_show'>
				<img border="0" align="absmiddle" src=<?php echo vtiger_imageurl('inactivate.gif', $this->_tpl_vars['THEME']); ?>
  onclick="showHideDivs('std_filter_div','std_filter_div_show');" style="cursor:pointer;" />
				<b><?php echo $this->_tpl_vars['MOD']['LBL_SHOW_STANDARD_FILTERS']; ?>
</b>
			</span>
		</td>
	</tr>
	<tr>
		<td colspan="2" valign="top">
			<div id='std_filter_div' name='std_filter_div' style="display:none;height:100;">
				<table class="small" border="0" cellpadding="5" cellspacing="0" width="100%">
					<tr>
						<td class="detailedViewHeader" colspan="4">
							<img border="0" align="absmiddle" src=<?php echo vtiger_imageurl('activate.gif', $this->_tpl_vars['THEME']); ?>
 onclick="showHideDivs('std_filter_div_show','std_filter_div');" style="cursor:pointer;" />
							<b><?php echo $this->_tpl_vars['MOD']['LBL_STANDARD_FILTER']; ?>
</b>
						</td>
					</tr>
					<tr>
						<td class="dvtCellLabel" width="30%"><?php echo $this->_tpl_vars['MOD']['LBL_SF_COLUMNS']; ?>
:</td>
						<td class="dvtCellLabel" width="30%">&nbsp;</td>
						<td class="dvtCellLabel" width="20%"><?php echo $this->_tpl_vars['MOD']['LBL_SF_STARTDATE']; ?>
:</td>
						<td class="dvtCellLabel" width="20%"><?php echo $this->_tpl_vars['MOD']['LBL_SF_ENDDATE']; ?>
:</td>
					</tr>
					<tr>
						<td class="dvtCellInfo" width="60%">
							<select name="stdDateFilterField" class="detailedViewTextBox" onchange='standardFilterDisplay();'>
							<?php echo $this->_tpl_vars['BLOCK1_STD']; ?>

							</select>
						</td>
						<td class="dvtCellInfo" width="25%">
							<select name="stdDateFilter" id="stdDateFilter" onchange='showDateRange( this.options[ this.selectedIndex ].value )' class="repBox">
							<?php echo $this->_tpl_vars['BLOCKCRITERIA_STD']; ?>

							</select>
						</td>
						<td class="dvtCellInfo">
							<input name="startdate" id="jscal_field_date_start" style="border: 1px solid rgb(186, 186, 186);" size="10" maxlength="10" value="<?php echo $this->_tpl_vars['STARTDATE_STD']; ?>
" type="text"><br>
							<img src="<?php echo $this->_tpl_vars['IMAGE_PATH']; ?>
btnL3Calendar.gif" id="jscal_trigger_date_start" >
							<font size="1"><em old="(yyyy-mm-dd)">(<?php echo $this->_tpl_vars['DATEFORMAT']; ?>
)</em></font>
							<script type="text/javascript">
                                Calendar.setup ({
                                inputField : "jscal_field_date_start", ifFormat : "<?php echo $this->_tpl_vars['JS_DATEFORMAT']; ?>
", showsTime : false, button : "jscal_trigger_date_start", singleClick : true, step : 1
                                })
							</script>
						</td>
						<td class="dvtCellInfo">
							<input name="enddate" id="jscal_field_date_end" style="border: 1px solid rgb(186, 186, 186);" size="10" maxlength="10" value="<?php echo $this->_tpl_vars['ENDDATE_STD']; ?>
" type="text"><br>
							<img src="<?php echo $this->_tpl_vars['IMAGE_PATH']; ?>
btnL3Calendar.gif" id="jscal_trigger_date_end" >
							<font size="1"><em old="(yyyy-mm-dd)">(<?php echo $this->_tpl_vars['DATEFORMAT']; ?>
)</em></font>
			                <script type="text/javascript">
                                Calendar.setup ({
                                inputField : "jscal_field_date_end", ifFormat : "<?php echo $this->_tpl_vars['JS_DATEFORMAT']; ?>
", showsTime : false, button : "jscal_trigger_date_end", singleClick : true, step : 1
                                })
			                </script>
						</td>
					</tr>					
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
				</table>
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="2" valign="top">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdvanceFilter.tpl', 'smarty_include_vars' => array('SOURCE' => 'reports')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</td>
	</tr>
</table>