<?php /* Smarty version 2.6.18, created on 2013-01-24 11:56:41
         compiled from ReportsStep1.tpl */ ?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['APP']['LBL_CHARSET']; ?>
">
	<title><?php echo $this->_tpl_vars['MOD']['TITLE_VTIGERCRM_CREATE_REPORT']; ?>
</title>
	<link href="<?php echo $this->_tpl_vars['THEME_PATH']; ?>
style.css" rel="stylesheet" type="text/css">
	<script language="JavaScript" type="text/javascript" src="include/js/json.js"></script>
	<script language="JavaScript" type="text/javascript" src="include/js/general.js"></script>
	<script language="JavaScript" type="text/javascript" src="include/js/<?php  echo $_SESSION['authenticated_user_language']; ?>.lang.js?<?php  echo $_SESSION['vtiger_version']; ?>"></script>
	<script language="javascript" type="text/javascript" src="include/scriptaculous/prototype.js"></script>
	<script language="JavaScript" type="text/javascript" src="modules/Reports/Reports.js"></script>
	<script type="text/javascript">
		var userDateFormat = "<?php echo $this->_tpl_vars['USER_DATE_FORMAT']; ?>
";
		var userCurrencySeparator = "<?php echo $this->_tpl_vars['USER_CURRENCY_SEPARATOR']; ?>
";
		var userDecimalSeparator = "<?php echo $this->_tpl_vars['USER_DECIMAL_FORMAT']; ?>
";
	</script>
</head>
<body topmargin="0" leftmargin="0" marginheight="0" marginwidth="0">
<!-- Master Table -->
<table width="100%"  border="0" cellspacing="0" cellpadding="0" class="mailClient mailClientBg">
<tr>
	<td>
		<form name="NewReport" method="POST" ENCTYPE="multipart/form-data" action="index.php" style="margin:0px" onsubmit="VtigerJS_DialogBox.block();">
		<input type="hidden" name='modulesString' value=''/>
		<input type="hidden" name='primarymodule' value="<?php echo $this->_tpl_vars['PRI_MODULE']; ?>
"/>
		<input type="hidden" name='secondarymodule' value="<?php echo $this->_tpl_vars['SEC_MODULE']; ?>
"/>
		<input type="hidden" name='record' value="<?php echo $this->_tpl_vars['REPORT_ID']; ?>
"/>
		<input type="hidden" name='module' value='Reports'/>
		<input type="hidden" name='reload' value='true'/>
		<input type="hidden" name='action' value='Save'/>
		<input type="hidden" name='file' value=''/>
		<input type="hidden" name='reportName' value="<?php echo $this->_tpl_vars['REPORT_NAME']; ?>
"/>
		<input type="hidden" name='reportDesc' value="<?php echo $this->_tpl_vars['REPORT_DESC']; ?>
"/>
		<input type="hidden" name='folder' value="<?php echo $this->_tpl_vars['FOLDERID']; ?>
"/>
		<!-- Heading -->
		<table width="100%" border="0" cellspacing="0" cellpadding="5" >
			<tr>
				<td  class="moduleName" width="80%"><?php echo $this->_tpl_vars['MOD']['LBL_CREATE_REPORT']; ?>
 </td>
				<td  width=30% nowrap class="componentName" align=right><?php echo $this->_tpl_vars['MOD']['LBL_CUSTOM_REPORTS']; ?>
</td>
			</tr>
		</table>

		<table width="100%" border="0" cellspacing="0" cellpadding="5" class="homePageMatrixHdr">
		<tr>
		<td>
					<table width="100%" border="0" cellspacing="0" cellpadding="0" >
					<tr>
					<td width="25%" valign="top">
						<table width="100%" border="0" cellpadding="5" cellspacing="0" class="small">
							<tr><td class="settingsTabList" style="padding-left:10px;">1. <?php echo $this->_tpl_vars['MOD']['LBL_REPORT_DETAILS']; ?>
</td></tr>
							<tr><td class="settingsTabList" style="padding-left:10px;">2. <?php echo $this->_tpl_vars['MOD']['LBL_RELATIVE_MODULE']; ?>
 </td></tr>
							<tr><td id="step1label" class="settingsTabSelected" style="padding-left:10px;">3. <?php echo $this->_tpl_vars['MOD']['LBL_REPORT_TYPE']; ?>
 </td></tr>
							<tr><td id="step2label" class="settingsTabList" style="padding-left:10px;">4. <?php echo $this->_tpl_vars['MOD']['LBL_SELECT_COLUMNS']; ?>
</td></tr>
							<tr><td id="step3label" class="settingsTabList" style="padding-left:10px;">5. <?php echo $this->_tpl_vars['MOD']['LBL_SPECIFY_GROUPING']; ?>
</td></tr>
							<tr><td id="step4label" class="settingsTabList" style="padding-left:10px;">6. <?php echo $this->_tpl_vars['MOD']['LBL_CALCULATIONS']; ?>
</td></tr>
							<tr><td id="step5label" class="settingsTabList" style="padding-left:10px;">7. <?php echo $this->_tpl_vars['MOD']['LBL_FILTERS']; ?>
 </td></tr>
							<tr><td id="step6label" class="settingsTabList" style="padding-left:10px;">8. <?php echo $this->_tpl_vars['MOD']['LBL_SHARING']; ?>
 </td></tr>
							<tr><td id="step7label" class="settingsTabList" style="padding-left:10px;">9. <?php echo $this->_tpl_vars['MOD']['LBL_SCHEDULE_EMAIL']; ?>
 </td></tr>
						</table>
					</td>
					<td width="75%" valign="top" bgcolor=white>
						<!-- Step 1 -->
						<div id="step1" style="display:block;">
						<table class="small" bgcolor="#ffffff" border="0" cellpadding="5" cellspacing="0" width="100%">
							<tbody><tr>
							<td colspan="2">
									<?php include("modules/Reports/ReportType.php"); ?>
							</td></tr>
							</tbody>
						</table>
						</div>

						<!-- Step 2 -->
						<div id="step2" style="display:none;">
						<table class="small" bgcolor="#ffffff" border="0" cellpadding="5" cellspacing="0" width="100%">
							<tbody><tr>
							<td colspan="2">
									<?php include("modules/Reports/ReportColumns.php"); ?>
							</td></tr>
							</tbody>
						</table>
						</div>

						<!-- Step 3 -->
						<div id="step3" style="display:none;">
						<table class="small" bgcolor="#ffffff" border="0" cellpadding="5" cellspacing="0" width="100%">
							<tbody><tr>
							<td colspan="2">
									<?php include("modules/Reports/ReportGrouping.php"); ?>
							</td></tr>
							</tbody>
						</table>
						</div>

						<!-- Step 4 -->
						<div id="step4" style="display:none;">
						<table class="small" bgcolor="#ffffff" border="0" cellpadding="5" cellspacing="0" width="100%">
							<tbody><tr>
							<td colspan="2">
									<?php include("modules/Reports/ReportColumnsTotal.php"); ?>
							</td></tr>
							</tbody>
						</table>
						</div>

						<!-- Step 5 -->
						<div id="step5" style="display:none;">
						<table class="small" bgcolor="#ffffff" border="0" cellpadding="5" cellspacing="0" width="100%">
							<tbody><tr>
							<td colspan="2">
									<?php include("modules/Reports/ReportFilters.php"); ?>
							</td></tr>
							</tbody>
						</table>
						</div>

						<div id="step6" style="display:none;">
						<table class="small" bgcolor="#ffffff" border="0" cellpadding="5" cellspacing="0" width="100%">
							<tbody><tr>
							<td colspan="2">
									<?php include("modules/Reports/ReportSharing.php"); ?>
							</td></tr>
							</tbody>
						</table>
						</div>

						<!-- Step 7 -->
						<div id="step7" style="display:none;">
						<table class="small" bgcolor="#ffffff" border="0" cellpadding="5" cellspacing="0" width="100%">
							<tbody><tr>
							<td colspan="2">
									<?php include("modules/Reports/ReportsScheduleEmail.php"); ?>
							</td></tr>
							</tbody>
						</table>
						</div>

					</td>
					</tr>
					</table>

					<table width=100% cellspacing=0 cellpadding=0 class="reportCreateBottom">
					<tr>
						<td>&nbsp;</td>
						<td align="right" style="padding:10px;" >
						<input type="button" id="back_rep" name="back_rep" value=" &nbsp;&lt;&nbsp;<?php echo $this->_tpl_vars['APP']['LBL_BACK']; ?>
&nbsp; " class="crmbutton small cancel" onClick="changeStepsback1();">&nbsp;
						<input type="button" id="next" name="next" value=" &nbsp;<?php echo $this->_tpl_vars['APP']['LNK_LIST_NEXT']; ?>
&nbsp;&rsaquo;&nbsp; " class="crmbutton small save" onClick="changeSteps1();">
						&nbsp;<input type="button" name="cancel" value=" &nbsp;<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
&nbsp; " class="crmbutton small cancel" onClick="self.close();">
						</td>
					</tr>
					</table>
		</td>
		</tr></form>
		</table>
</td>
</tr>
</table>

</body>
</html>
<script>
var finish_text = '  <?php echo $this->_tpl_vars['APP']['LBL_FINISH']; ?>
   '
var next_text = '  <?php echo $this->_tpl_vars['APP']['LNK_LIST_NEXT']; ?>
  ';
<?php echo '
setObjects();
hideTabs();
</script>
'; ?>

<script>
<?php if ($this->_tpl_vars['BACK_WALK'] != 'true'): ?>
	document.getElementById('back_rep').disabled = true;
	var backwalk_flag = false;
<?php else: ?>
	var backwalk_flag = true;
<?php endif; ?>
</script>