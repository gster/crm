<?php /* Smarty version 2.6.18, created on 2013-01-21 13:36:29
         compiled from modules/PickList/PickList.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'modules/PickList/PickList.tpl', 21, false),)), $this); ?>

<script language="JAVASCRIPT" type="text/javascript" src="include/js/smoothscroll.js"></script>
<script language="JavaScript" type="text/javascript" src="include/js/menu.js"></script>
<script language="JavaScript" type="text/javascript" src="include/js/picklist.js"></script>
<script language="JAVASCRIPT" src="include/scriptaculous/scriptaculous.js" type="text/javascript"></script>
<script language="JAVASCRIPT" src="modules/Home/Homestuff.js" type="text/javascript"></script>
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
</a> > <?php echo $this->_tpl_vars['MOD']['LBL_PICKLIST_EDITOR']; ?>
</b></td>
		</tr>
		<tr>
			<td valign=top class="small"><?php echo $this->_tpl_vars['MOD']['LBL_PICKLIST_DESCRIPTION']; ?>
</td>
		</tr>
		</table>

		<table border=0 cellspacing=0 cellpadding=10 width=100% >
		<tr>
			<td valign=top>
			<table border=0 cellspacing=0 cellpadding=5 width=100% class="tableHeading">
			<tr>
				<td class="small" width="20%" nowrap>
					<strong><?php echo $this->_tpl_vars['MOD']['LBL_SELECT_MODULE']; ?>
</strong>&nbsp;&nbsp;
				</td>
				<td class="small" align="left" width="30%">
					<select name="pickmodule" id="pickmodule" class="detailedViewTextBox" onChange="changeModule();">
					<?php $_from = $this->_tpl_vars['MODULE_LISTS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['modulelabel'] => $this->_tpl_vars['module']):
?>
												<?php if ($this->_tpl_vars['APP'][$this->_tpl_vars['module']]): ?>
							<?php $this->assign('modulelabel', $this->_tpl_vars['APP'][$this->_tpl_vars['module']]); ?>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['MODULE'] == $this->_tpl_vars['module']): ?>
							<option value="<?php echo $this->_tpl_vars['module']; ?>
" selected><?php echo $this->_tpl_vars['modulelabel']; ?>
</option>
						<?php else: ?>
							<option value="<?php echo $this->_tpl_vars['module']; ?>
"><?php echo $this->_tpl_vars['modulelabel']; ?>
</option>
						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
					</select>
				</td>
				<td class="small" align="right">&nbsp;</td>
			</tr>
			</table>

			<table border=0 cellspacing=0 cellpadding=5 width=100% class="tableHeading">
			<tr>
				<td class="big" rowspan="2">
				<div id="picklist_datas">	
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'modules/PickList/PickListContents.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</div>
				</td>
			</tr>
			</table>

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

<div id="actiondiv" style="display:block;position:absolute;"></div>
<div id="editdiv" style="display:block;position:absolute;width:510px;"></div>
			