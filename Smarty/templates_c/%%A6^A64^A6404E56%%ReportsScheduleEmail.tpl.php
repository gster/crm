<?php /* Smarty version 2.6.18, created on 2013-01-24 11:56:41
         compiled from ReportsScheduleEmail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'getTranslatedString', 'ReportsScheduleEmail.tpl', 16, false),)), $this); ?>
<script language="JAVASCRIPT" type="text/javascript" src="include/js/smoothscroll.js"></script>

<table class="small" bgcolor="#ffffff" border="0" cellpadding="5" cellspacing="0" height='530' width="100%">
	<tr valign='top'>
		<td colspan="1">
			<span class="genHeaderGray"><?php echo getTranslatedString('LBL_SCHEDULE_EMAIL', 'Reports'); ?>
</span>
			<br>
			<?php echo getTranslatedString('LBL_SCHEDULE_EMAIL_DESCRIPTION', 'Reports'); ?>

			<hr>
		</td>
	</tr>
	<tr valign="top">
		<td>
			<div style="height:448px">
				<table class="small" border="0" cellpadding="5" cellspacing="1" width="100%" valign="top">
					<tr class="small" valign="top">						
						<td width="5%" class="detailedViewHeader" align="center">
							<input type="checkbox" name="isReportScheduled" id="isReportScheduled"
							<?php if ($this->_tpl_vars['IS_SCHEDULED'] == 'true'): ?> checked <?php endif; ?>
							>
						</td>
						<td width="90%" class="detailedViewHeader" class="cellText"><strong><?php echo getTranslatedString('LBL_SCHEDULE_REPORT', 'Reports'); ?>
</strong></td>
					</tr>
					<tr valign="top">
						<td colspan="2">
							<table width="100%" class="small" border="0" cellpadding="5" cellspacing="0" align="top">
								<tr align="left" valign="top">
									<td class="cellBottomDotLinePlain small"><strong><?php echo getTranslatedString('LBL_SCHEDULE_FREQUENCY', 'Reports'); ?>
</strong></td>
								</tr>
								<tr align="left" valign="top">
									<td valign=top class="small">
										<span id="scheduledTypeSpan">
											<select class="dataInput small" name="scheduledType" id="scheduledType" onchange="javascript: setScheduleOptions();">
												<!-- Hourly doesn't make sense on OD as the cron job is running once in 2 hours -->
												<!-- option id="schtype_1" value="1" <?php if ($this->_tpl_vars['schtypeid'] == 1): ?>selected<?php endif; ?>><?php echo getTranslatedString('Hourly', 'Reports'); ?>
</option -->
												<option id="schtype_2" value="2" <?php if ($this->_tpl_vars['schtypeid'] == 2): ?>selected<?php endif; ?>><?php echo getTranslatedString('Daily', 'Reports'); ?>
</option>
												<option id="schtype_3" value="3" <?php if ($this->_tpl_vars['schtypeid'] == 3): ?>selected<?php endif; ?>><?php echo getTranslatedString('Weekly', 'Reports'); ?>
</option>
												<option id="schtype_4" value="4" <?php if ($this->_tpl_vars['schtypeid'] == 4): ?>selected<?php endif; ?>><?php echo getTranslatedString('BiWeekly', 'Reports'); ?>
</option>
												<option id="schtype_5" value="5" <?php if ($this->_tpl_vars['schtypeid'] == 5): ?>selected<?php endif; ?>><?php echo getTranslatedString('Monthly', 'Reports'); ?>
</option>
												<option id="schtype_6" value="6" <?php if ($this->_tpl_vars['schtypeid'] == 6): ?>selected<?php endif; ?>><?php echo getTranslatedString('Annually', 'Reports'); ?>
</option>
											</select>
										</span>
										<span id="scheduledMonthSpan" style="display: <?php if ($this->_tpl_vars['schtypeid'] == 6): ?>inline<?php else: ?>none<?php endif; ?>;">&nbsp;<strong><?php echo getTranslatedString('LBL_SCHEDULE_EMAIL_MONTH', 'Reports'); ?>
</strong>
											<select class="dataInput small" name="scheduledMonth" id="scheduledMonth">
												<?php $this->assign('MONTH_STRINGS', getTranslatedString('MONTH_STRINGS', 'Reports')); ?>
												<?php $_from = $this->_tpl_vars['MONTH_STRINGS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['mid'] => $this->_tpl_vars['month']):
?>
												<option value="<?php echo $this->_tpl_vars['mid']; ?>
" <?php if ($this->_tpl_vars['schmonth'] == $this->_tpl_vars['mid']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['month']; ?>
</option>
												<?php endforeach; endif; unset($_from); ?>
											</select>
										</span>

										<!-- day of month (monthly, annually) -->
										<span id="scheduledDOMSpan" style="display: <?php if ($this->_tpl_vars['schtypeid'] == 5 || $this->_tpl_vars['schtypeid'] == 6): ?>inline<?php else: ?>none<?php endif; ?>;">&nbsp;<strong><?php echo getTranslatedString('LBL_SCHEDULE_EMAIL_DAY', 'Reports'); ?>
</strong>:
											<select class="dataInput small" name="scheduledDOM" id="scheduledDOM">
												<?php unset($this->_sections['day']);
$this->_sections['day']['name'] = 'day';
$this->_sections['day']['start'] = (int)1;
$this->_sections['day']['loop'] = is_array($_loop=32) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['day']['show'] = true;
$this->_sections['day']['max'] = $this->_sections['day']['loop'];
$this->_sections['day']['step'] = 1;
if ($this->_sections['day']['start'] < 0)
    $this->_sections['day']['start'] = max($this->_sections['day']['step'] > 0 ? 0 : -1, $this->_sections['day']['loop'] + $this->_sections['day']['start']);
else
    $this->_sections['day']['start'] = min($this->_sections['day']['start'], $this->_sections['day']['step'] > 0 ? $this->_sections['day']['loop'] : $this->_sections['day']['loop']-1);
if ($this->_sections['day']['show']) {
    $this->_sections['day']['total'] = min(ceil(($this->_sections['day']['step'] > 0 ? $this->_sections['day']['loop'] - $this->_sections['day']['start'] : $this->_sections['day']['start']+1)/abs($this->_sections['day']['step'])), $this->_sections['day']['max']);
    if ($this->_sections['day']['total'] == 0)
        $this->_sections['day']['show'] = false;
} else
    $this->_sections['day']['total'] = 0;
if ($this->_sections['day']['show']):

            for ($this->_sections['day']['index'] = $this->_sections['day']['start'], $this->_sections['day']['iteration'] = 1;
                 $this->_sections['day']['iteration'] <= $this->_sections['day']['total'];
                 $this->_sections['day']['index'] += $this->_sections['day']['step'], $this->_sections['day']['iteration']++):
$this->_sections['day']['rownum'] = $this->_sections['day']['iteration'];
$this->_sections['day']['index_prev'] = $this->_sections['day']['index'] - $this->_sections['day']['step'];
$this->_sections['day']['index_next'] = $this->_sections['day']['index'] + $this->_sections['day']['step'];
$this->_sections['day']['first']      = ($this->_sections['day']['iteration'] == 1);
$this->_sections['day']['last']       = ($this->_sections['day']['iteration'] == $this->_sections['day']['total']);
?>
												<option value="<?php echo $this->_sections['day']['iteration']; ?>
" <?php if ($this->_tpl_vars['schday'] == $this->_sections['day']['iteration']): ?>selected<?php endif; ?>><?php echo $this->_sections['day']['iteration']; ?>
</option>
												<?php endfor; endif; ?>
											</select>
										</span>

										<!-- day of week (weekly/bi-weekly) -->
										<span id="scheduledDOWSpan" style="display: <?php if ($this->_tpl_vars['schtypeid'] == 3 || $this->_tpl_vars['schtypeid'] == 4): ?>inline<?php else: ?>none<?php endif; ?>;">&nbsp;<strong><?php echo getTranslatedString('LBL_SCHEDULE_EMAIL_DOW', 'Reports'); ?>
</strong>:
											<select class="dataInput small" name="scheduledDOW" id="scheduledDOW">
												<?php $this->assign('WEEKDAY_STRINGS', getTranslatedString('WEEKDAY_STRINGS', 'Reports')); ?>
												<?php $_from = $this->_tpl_vars['WEEKDAY_STRINGS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['wid'] => $this->_tpl_vars['week']):
?>
												<option value="<?php echo $this->_tpl_vars['wid']; ?>
" <?php if ($this->_tpl_vars['schweek'] == $this->_tpl_vars['wid']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['week']; ?>
</option>
												<?php endforeach; endif; unset($_from); ?>
											</select>
										</span>

										<!-- time (daily, weekly, bi-weekly, monthly, annully) -->
										<span id="scheduledTimeSpan" style="display: <?php if ($this->_tpl_vars['schtypeid'] > 1): ?>inline<?php else: ?>none<?php endif; ?>;">&nbsp;<strong><?php echo getTranslatedString('LBL_SCHEDULE_EMAIL_TIME', 'Reports'); ?>
</strong>:
											<input class="dataInput small" type="text" name="scheduledTime" id="scheduledTime" value="<?php echo $this->_tpl_vars['schtime']; ?>
" size="5" maxlength="5" /> <?php echo getTranslatedString('LBL_TIME_FORMAT_MSG', 'Reports'); ?>

										</span>

										<input type="hidden" name="scheduledIntervalString" value="" />
									</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
								</tr>
								<tr align="left" valign="top">
									<td class="cellBottomDotLinePlain small"><strong><?php echo getTranslatedString('LBL_REPORT_FORMAT', 'Reports'); ?>
</strong>:</td>
								</tr>
								<tr align="left" valign="top">
									<td valign=top class="small">
										<?php echo getTranslatedString('LBL_SELECT', 'Reports'); ?>
:&nbsp;
										<select id="scheduledReportFormat" name="scheduledReportFormat" class="small">
											<option value="pdf" <?php if ($this->_tpl_vars['REPORT_FORMAT'] == 'pdf'): ?> selected <?php endif; ?>><?php echo getTranslatedString('LBL_REPORT_FORMAT_PDF', 'Reports'); ?>
</option>
											<option value="excel" <?php if ($this->_tpl_vars['REPORT_FORMAT'] == 'excel'): ?> selected <?php endif; ?>><?php echo getTranslatedString('LBL_REPORT_FORMAT_EXCEL', 'Reports'); ?>
</option>
											<option value="both" <?php if ($this->_tpl_vars['REPORT_FORMAT'] == 'both'): ?> selected <?php endif; ?>><?php echo getTranslatedString('LBL_REPORT_FORMAT_BOTH', 'Reports'); ?>
</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
								</tr>
								<tr align="left" valign="top">
									<td valign=top class="cellBottomDotLinePlain small"><strong><?php echo getTranslatedString('LBL_USERS_AVAILABEL', 'Reports'); ?>
</strong></td>
								</tr>
								<tr align="left" valign="top">
									<td>
										<table>
											<tr>
												<td width="45%" valign=top class="small">
													<?php echo getTranslatedString('LBL_SELECT', 'Reports'); ?>
:&nbsp;
													<select id="recipient_type" name="recipient_type" class="small" onChange="showRecipientsOptions()">
														<option value="users"><?php echo getTranslatedString('LBL_USERS', 'Reports'); ?>
</option>
														<option value="groups"><?php echo getTranslatedString('LBL_GROUPS', 'Reports'); ?>
</option>
														<option value="roles"><?php echo getTranslatedString('LBL_ROLES', 'Reports'); ?>
</option>
														<option value="rs"><?php echo getTranslatedString('LBL_ROLES_SUBORDINATES', 'Reports'); ?>
</option>
													</select>
													<input type="hidden" name="findStr1" class="small">&nbsp;
												</td>
												<td width="10%">&nbsp;</td>
												<td width="45%" class="small"><strong><?php echo getTranslatedString('LBL_USERS_SELECTED', 'Reports'); ?>
</strong></td>
											</tr>

											<tr class=small>
												<td valign=top><br>
													<div id="availableRecipientsWrapper">
													</div>
												</td>
												<td width="50">
													<div align="center">
														<input type="button" name="addButton" value="&nbsp;&rsaquo;&rsaquo;&nbsp;" onClick="addOption()" class="crmButton small"/><br /><br />
														<input type="button" name="delButton" value="&nbsp;&lsaquo;&lsaquo;&nbsp;" onClick="delOption()" class="crmButton small"/>
													</div>
												</td>
												<td class="small" valign=top><br>
													<select id="selectedRecipients" name="selectedRecipients" multiple size="10" class="small crmFormList">
													<?php echo $this->_tpl_vars['SELECTED_RECIPIENTS']; ?>

													</select>
													<input type="hidden" name="selectedRecipientsString"/>
												</td>
											</tr>
										</table>
									</td>
								</tr>
						   </table>
						</td>
					</tr>
				</table>
			</div>
		</td>
	</tr>
</table>

<script language="JavaScript" type="text/JavaScript">

function showRecipientsOptions()
{
	var option;
	var selectedOption=document.NewReport.recipient_type;

	for(var i=0; i<selectedOption.options.length; i++) {
		if (selectedOption.options[i].selected==true) {
			option=selectedOption.value;
			break;
		}
	}

	var availableRecipientsWrapper = document.getElementById('availableRecipientsWrapper');

	if(option == 'users') {
		availableRecipientsWrapper.innerHTML = '<?php echo $this->_tpl_vars['AVAILABLE_USERS']; ?>
';
	} else if(option == 'roles') {
		availableRecipientsWrapper.innerHTML = '<?php echo $this->_tpl_vars['AVAILABLE_ROLES']; ?>
';
	} else if(option == 'rs') {
		availableRecipientsWrapper.innerHTML = '<?php echo $this->_tpl_vars['AVAILABLE_ROLESANDSUB']; ?>
';
	} else if(option == 'groups') {
		availableRecipientsWrapper.innerHTML = '<?php echo $this->_tpl_vars['AVAILABLE_GROUPS']; ?>
';
	}
}

function addOption() {

	var availableRecipientsObj=getObj("availableRecipients");
	var selectedRecipientsObj=getObj("selectedRecipients");
	
	for (i=0;i<selectedRecipientsObj.length;i++) {
		selectedRecipientsObj.options[i].selected=false
	}

	for (i=0;i<availableRecipientsObj.length;i++) {

		if (availableRecipientsObj.options[i].selected==true) {
			var rowFound=false;
			var existingObj=null;
			for (j=0;j<selectedRecipientsObj.length;j++) {
				if (selectedRecipientsObj.options[j].value==availableRecipientsObj.options[i].value)
				{
					rowFound=true
					existingObj=selectedRecipientsObj.options[j]
					break
				}
			}

			if (rowFound!=true) {
				var newColObj=document.createElement("OPTION")
				newColObj.value=availableRecipientsObj.options[i].value
				if (browser_ie) newColObj.innerText=availableRecipientsObj.options[i].innerText
				else if (browser_nn4 || browser_nn6) newColObj.text=availableRecipientsObj.options[i].text
				selectedRecipientsObj.appendChild(newColObj)
				availableRecipientsObj.options[i].selected=false
				newColObj.selected=true
				rowFound=false
			}
			else {
				if(existingObj != null) existingObj.selected=true
			}
		}
	}
}

function delOption() {
	var selectedRecipientsObj=getObj("selectedRecipients");
	for (var i=selectedRecipientsObj.options.length; i>0; i--) {
			if (selectedRecipientsObj.options.selectedIndex>=0)
				selectedRecipientsObj.remove(selectedRecipientsObj.options.selectedIndex)
	}
}

showRecipientsOptions();
setScheduleOptions();
</script>