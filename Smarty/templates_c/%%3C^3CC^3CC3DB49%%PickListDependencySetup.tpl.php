<?php /* Smarty version 2.6.18, created on 2013-01-21 13:36:21
         compiled from modules/PickList/PickListDependencySetup.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'modules/PickList/PickListDependencySetup.tpl', 21, false),)), $this); ?>

<script language="JAVASCRIPT" type="text/javascript" src="include/js/smoothscroll.js"></script>
<script language="JavaScript" type="text/javascript" src="include/js/menu.js"></script>
<script language="JAVASCRIPT" type="text/javascript" src="include/scriptaculous/scriptaculous.js"></script>
<script language="JAVASCRIPT" type="text/javascript" src="include/js/json.js"></script>
<script language="JAVASCRIPT" type="text/javascript" src="modules/PickList/DependencyPicklist.js"></script>
<br>
<table align="center" border="0" cellpadding="0" cellspacing="0" width="98%">
<tbody><tr>
	<td valign="top"><img src="<?php echo vtiger_imageurl('showPanelTopLeft.gif', $this->_tpl_vars['THEME']); ?>
"></td>
	<td class="showPanelBg" style="padding: 10px;" valign="top" width="100%">
	<br>
	<div align=center>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'SetMenu.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<!-- DISPLAY -->
		<table border=0 cellspacing=0 cellpadding=5 width=100% class="settingsSelUITopLine">
		<tr>
			<td width=50 rowspan=2 valign=top><img src="<?php echo vtiger_imageurl('picklist.gif', $this->_tpl_vars['THEME']); ?>
" width="48" height="48" border=0 ></td>
			<td class=heading2 valign=bottom><b><a href="index.php?module=Settings&action=index&parenttab=Settings"><?php echo $this->_tpl_vars['MOD']['LBL_SETTINGS']; ?>
</a> > <?php echo $this->_tpl_vars['MOD_PICKLIST']['LBL_PICKLIST_DEPENDENCY_SETUP']; ?>
</b></td>
		</tr>
		<tr>
			<td valign=top class="small"><?php echo $this->_tpl_vars['MOD_PICKLIST']['LBL_PICKLIST_DEPENDENCY_DESCRIPTION']; ?>
</td>
		</tr>
		</table>

		<table border=0 cellspacing=0 cellpadding=10 width=100% >
		<tr>
			<td valign=top>			
				<div id="picklist_datas">
					<?php if ($this->_tpl_vars['SUBMODE'] == 'editdependency'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'modules/PickList/PickListDependencyContents.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php else: ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'modules/PickList/PickListDependencyList.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
				</div>

				<table border=0 cellspacing=0 cellpadding=5 width=100% >
					<tr>
						<td class="small" nowrap align=right>
							<a href="#top">
								<?php echo $this->_tpl_vars['MOD']['LBL_SCROLL']; ?>

							</a>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		</table>
	</div>
	</td>
</tr>
</tbody>
</table>