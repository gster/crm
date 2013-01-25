<?php /* Smarty version 2.6.18, created on 2013-01-24 11:54:43
         compiled from ReportRunContents.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'getTranslatedString', 'ReportRunContents.tpl', 22, false),array('modifier', 'vtiger_imageurl', 'ReportRunContents.tpl', 30, false),)), $this); ?>

<script language="javascript" type="text/javascript" src="include/scriptaculous/effects.js"></script>
<script type='text/javascript' src='include/jquery/jquery-1.6.2.min.js'></script>
<script type="text/javascript">
  jQuery.noConflict();
</script>
<br>
<table align="center" border="0" cellpadding="5" cellspacing="0" width="100%" class="mailSubHeader">
	<tbody><tr>
	<?php if ($this->_tpl_vars['SHOWCHARTS'] == 'true'): ?>
		<td align="right"  width="100%"><input class="crmbutton small create" style="background:#E85313" id="viewcharts1" name="viewcharts1" value="<?php echo getTranslatedString('LBL_VIEW_CHARTS', $this->_tpl_vars['MODULE']); ?>
" type="button" onClick="window.location.href = '#viewcharts'" title="<?php echo getTranslatedString('LBL_VIEW_CHARTS', $this->_tpl_vars['MODULE']); ?>
"></td>
	<?php endif; ?>
	</tr>
	</tbody>
</table>

<table style="border: 1px solid rgb(0, 0, 0);" align="center" cellpadding="0" cellspacing="0" width="100%">
	<tbody><tr>
	<td style="background-repeat: repeat-y;" background="<?php echo vtiger_imageurl('report_btn.gif', $this->_tpl_vars['THEME']); ?>
" width="16"></td>

	<td style="padding: 5px;" valign="top">
	<table cellpadding="0" cellspacing="0" width="100%">
		<tbody><tr>
		<td align="left" width="75%">
		<span class="genHeaderGray">
		<?php if ($this->_tpl_vars['MOD'][$this->_tpl_vars['REPORTNAME']] != ''): ?>
			<?php echo $this->_tpl_vars['MOD'][$this->_tpl_vars['REPORTNAME']]; ?>

		<?php else: ?>
			<?php echo $this->_tpl_vars['REPORTNAME']; ?>

		<?php endif; ?>
		</span><br>
		</td>
		<td align="right" width="25%">
		<span class="genHeaderGray"><?php echo $this->_tpl_vars['APP']['LBL_TOTAL']; ?>
 : <span id='_reportrun_total'><?php echo $this->_tpl_vars['REPORTHTML']['1']; ?>
</span>  <?php echo $this->_tpl_vars['APP']['LBL_RECORDS']; ?>
</span>
		</td>
		</tr>
		<tr><td id="report_info" align="left" colspan="2">&nbsp;</td></tr>
		<tr><td colspan="2">&nbsp;</td></tr>
		<tr>
		<td colspan="2">
				<?php if ($this->_tpl_vars['DIRECT_OUTPUT'] == true): ?>		
			<?php if (isset ( $this->_tpl_vars['__REPORT_RUN_INSTANCE'] )): ?>
				<?php 
					$__oReportRun = $this->_tpl_vars['__REPORT_RUN_INSTANCE'];
					$__filterSql = $this->_tpl_vars['__REPORT_RUN_FILTER_SQL'];
					$__oReportRunReturnValue = $__oReportRun->GenerateReport("HTML", $__filterSql, true);
				 ?>
			<?php endif; ?>		
		<?php elseif ($this->_tpl_vars['ERROR_MSG'] == ''): ?>
			<?php echo $this->_tpl_vars['REPORTHTML']['0']; ?>

		<?php else: ?>
			<?php echo $this->_tpl_vars['ERROR_MSG']; ?>

		<?php endif; ?>
				</td>
		</tr>
		<tr><td colspan="2">&nbsp;</td></tr>
		<tr><td colspan="2">&nbsp;</td></tr>
		<tr><td colspan="2">
				<?php if ($this->_tpl_vars['DIRECT_OUTPUT'] == true): ?>
			<?php 
				if(is_array($__oReportRunReturnValue)) { $__oReportRun->GenerateReport("TOTALHTML", $__filterSql, true); }
			 ?>
		<?php else: ?>			
			<?php echo $this->_tpl_vars['REPORTTOTHTML']; ?>

		<?php endif; ?>
				</td></tr>
		<tr><td colspan="2">&nbsp;</td></tr>
		</tbody>
	</table>
	</td>
	<td style="background-repeat: repeat-y;" background="<?php echo vtiger_imageurl('report_btn.gif', $this->_tpl_vars['THEME']); ?>
" width="16"></td>
	</tr>

	</tbody>
</table>
<br><br>
<?php if ($this->_tpl_vars['SHOWCHARTS'] == 'true'): ?>
<div name="viewcharts" id="viewcharts">
<table style="border: 1px solid rgb(0, 0, 0);" align="center" cellpadding="0" cellspacing="0" width="100%">
	<tbody>
		<tr>
			<td style="background-repeat: repeat-y;" background="<?php echo vtiger_imageurl('report_btn.gif', $this->_tpl_vars['THEME']); ?>
" width="16"></td>
			<td>
				<table border=0 cellspacing=1 cellpadding=0 width="100%" class="lvtBg">
                    <tr>
						<td> <?php echo $this->_tpl_vars['PIECHART']; ?>
 </td>
						<td> <?php echo $this->_tpl_vars['BARCHART']; ?>
 </td>
					</tr>
				</table>
			</td>
			<td style="background-repeat: repeat-y;" background="<?php echo vtiger_imageurl('report_btn.gif', $this->_tpl_vars['THEME']); ?>
" width="16"></td>
		</tr>
	</tbody>
</table>
</div>
<?php endif; ?>
<table align="center" border="0" cellpadding="5" cellspacing="0" width="100%" class="mailSubHeader">
	<tbody><tr>
	<?php if ($this->_tpl_vars['SHOWCHARTS'] == 'true'): ?>
		<td align="right"  width="100%"><input class="crmbutton small create" style="background:#E85313" id="addChartstodashboard" name="addChartstodashboard" value="<?php echo getTranslatedString('LBL_ADD_CHARTS', $this->_tpl_vars['MODULE']); ?>
" type="button" onClick="showAddChartPopup();" title="<?php echo getTranslatedString('LBL_ADD_CHARTS', $this->_tpl_vars['MODULE']); ?>
"></td>
	<?php endif; ?>	
	</tr>
	</tbody>
</table>

<div id="addcharttoHomepage"  class="layerPopup" style="z-index:2000; display:none; width: 400px;">
<table width="100%" border="0" cellpadding="5" cellspacing="0" class="layerHeadingULine">
    <tr>
        <td align="left" id="divHeader" class="layerPopupHeading" width="80%"><b>Add ReportCharts</b></td>
        <td align="right">
                <a onclick="fnhide('addcharttoHomepage');" href="javascript:;">
                <img border="0" align="absmiddle" src="<?php echo vtiger_imageurl('close.gif', $this->_tpl_vars['THEME']); ?>
"></a>
        </td>
    </tr>
</table>
<table border=0 cellspacing=0 cellpadding=5 width=95% align=center>
<tr>
    <td class="small">
        <table border="0" cellspacing="0" cellpadding="3" width="100%" align="center" bgcolor="white">
            <tr>
                <td class="dvtCellLabel"  width="110" align="right"><?php echo getTranslatedString('LBL_HOME_WINDOW_TITLE', $this->_tpl_vars['MODULE']); ?>
<font color='red'>*</font></td>
                <td class="dvtCellInfo" colspan="2" width="300" align="left"><input type="text" name="windowtitle" id="windowtitle_id" class="detailedViewTextBox" onfocus="this.className='detailedViewTextBoxOn'" onblur="this.className='detailedViewTextBox'" style="width:57%"></td>
            </tr>
            <tr>
                <td class="dvtCellLabel"  width="110" align="right"><?php echo getTranslatedString('LBL_HOME_REPORT_NAME', $this->_tpl_vars['MODULE']); ?>
</td>
                <td id="selReportName" class="dvtCellInfo" colspan="2" width="300" align="left"><?php echo $this->_tpl_vars['REPORTNAME']; ?>
</td>
            </tr>
            <tr>
                <td class="dvtCellLabel"  width="110" align="right"><?php echo getTranslatedString('LBL_HOME_REPORT_TYPE', $this->_tpl_vars['MODULE']); ?>
</td>
                <td id="selReportType" class="dvtCellInfo" width="300" colspan="2" align="left">
                        <select name="selreporttype" id="selreportcharttype_id" class="detailedViewTextBox" onfocus="this.className='detailedViewTextBoxOn'" onblur="this.className='detailedViewTextBox'" style="width:60%">
                                <option value="horizontalbarchart"><?php echo getTranslatedString('LBL_HOME_HORIZONTAL_BARCHART', $this->_tpl_vars['MODULE']); ?>
</option>
                                <option value="verticalbarchart"><?php echo getTranslatedString('LBL_HOME_VERTICAL_BARCHART', $this->_tpl_vars['MODULE']); ?>
</option>
                                <option value="piechart"><?php echo getTranslatedString('LBL_HOME_PIE_CHART', $this->_tpl_vars['MODULE']); ?>
</option>
                        </select>
                </td>
            </tr>
        </table>
      </td>
</tr>
</table>
<table border=0 cellspacing=0 cellpadding=5 width=95% align="center">
    <tr>
        <td align="right">
            <input type="button" name="save" value=" &nbsp;<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
&nbsp; " id="savebtn" class="crmbutton small save" onclick="addChartsToHomepage(<?php echo $this->_tpl_vars['REPORTID']; ?>
)"></td>
            <td align="left"><input type="button" name="cancel" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" class="crmbutton small cancel" onclick="fnhide('addcharttoHomepage');">
        </td>
    </tr>
 </table>
</div>

<div name="widgetmessage" id="widgetsuccess" style="display:none;background-color:#E0ECFF;width:150px;top:600px;right:481px;position:absolute">
    <table cellpadding="10" cellspacing="0" border="0" width="100%" class="vtResultPop small">
        <tr>
            <td align="center">
               <?php echo getTranslatedString('LBL_WIDGET_ADDED', $this->_tpl_vars['MODULE']); ?>

            </td>
        </tr>
    </table>
</div>