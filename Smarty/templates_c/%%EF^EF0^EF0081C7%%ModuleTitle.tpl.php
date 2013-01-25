<?php /* Smarty version 2.6.18, created on 2013-01-21 10:03:31
         compiled from com_vtiger_workflow/ModuleTitle.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'com_vtiger_workflow/ModuleTitle.tpl', 4, false),array('modifier', 'getTranslatedString', 'com_vtiger_workflow/ModuleTitle.tpl', 7, false),)), $this); ?>
<table width="100%" cellspacing="0" cellpadding="5" border="0" class="settingsSelUITopLine"><tbody>
	<tr>
		<td width="50" valign="top" rowspan="2">
			<img width="48" height="48" border="0" src="<?php echo vtiger_imageurl('settingsWorkflow.png', $this->_tpl_vars['THEME']); ?>
"/>
		</td>
		<td valign="bottom" class="heading2">
			<b><a href="index.php?module=Settings&amp;action=index&amp;parenttab=Settings"><?php echo getTranslatedString('Settings', $this->_tpl_vars['MODULE']); ?>
</a> >
				<a href="index.php?module=<?php echo $this->_tpl_vars['module']->name; ?>
&amp;action=workflowlist&amp;parenttab=Settings"><?php echo getTranslatedString($this->_tpl_vars['MODULE_NAME'], $this->_tpl_vars['MODULE_NAME']); ?>
</a> > <?php echo $this->_tpl_vars['PAGE_NAME']; ?>
 </b>
		</td>
	</tr>
	<tr>
		<td valign="top" class="small"><?php echo $this->_tpl_vars['PAGE_TITLE']; ?>
</td>
		<?php if ($this->_tpl_vars['CRON_TASK'] != ''): ?>
		<td  align="right" class="small" width='40%'>
			<b>
			<?php if ($this->_tpl_vars['CRON_TASK']->isDisabled()): ?><?php echo getTranslatedString('LBL_DISABLED', $this->_tpl_vars['MODULE']); ?>
<?php endif; ?>
			<?php if ($this->_tpl_vars['CRON_TASK']->isRunning()): ?><?php echo getTranslatedString('LBL_RUNNING', $this->_tpl_vars['MODULE']); ?>
<?php endif; ?>
			<?php if ($this->_tpl_vars['CRON_TASK']->isEnabled()): ?>
				<?php if ($this->_tpl_vars['CRON_TASK']->hadTimedout): ?>
					<?php echo getTranslatedString('LBL_LAST_SCAN_TIMED_OUT', $this->_tpl_vars['MODULE']); ?>
.
				<?php elseif ($this->_tpl_vars['CRON_TASK']->getLastEndDateTime() != ''): ?>
					<?php echo getTranslatedString('LBL_LAST_SCAN_AT', $this->_tpl_vars['MODULE']); ?>

					<?php echo $this->_tpl_vars['CRON_TASK']->getLastEndDateTime(); ?>

					&
					<?php echo getTranslatedString('LBL_TIME_TAKEN', $this->_tpl_vars['MODULE']); ?>
:
					<?php echo $this->_tpl_vars['CRON_TASK']->getTimeDiff(); ?>

					<?php echo getTranslatedString('LBL_SHORT_SECONDS', $this->_tpl_vars['MODULE']); ?>

				<?php else: ?>
				<?php endif; ?>
			<?php endif; ?>
			</b>
		</td>
		<?php endif; ?>
	</tr>
</tbody></table>
<br>