<?php /* Smarty version 2.6.18, created on 2013-01-21 06:17:28
         compiled from UnifiedSearchModules.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'UnifiedSearchModules.tpl', 21, false),)), $this); ?>

<form id="UnifiedSearch_moduleform" name="UnifiedSearch_moduleform">
	<table width="90%" cellspacing="0" cellpadding="0" border="0" align="center" class="mailClient mailClientBg">
	<tr>
		<td>
			<table width="100%" cellspacing="0" cellpadding="0" border="0" class="small">
			<tr>
				<td height="30px" background="<?php echo vtiger_imageurl('qcBg.gif', $this->_tpl_vars['THEME']); ?>
" class="mailSubHeader"><b><?php echo $this->_tpl_vars['APP']['LBL_SELECT_MODULES_FOR_SEARCH']; ?>
</b></td>
				<td align=right background="<?php echo vtiger_imageurl('qcBg.gif', $this->_tpl_vars['THEME']); ?>
" class="mailSubHeader">
					<a href='javascript:void(0);' onclick="UnifiedSearch_SelectModuleToggle(true);"><?php echo $this->_tpl_vars['APP']['LBL_SELECT_ALL']; ?>
</a> |
					<a href='javascript:void(0);' onclick="UnifiedSearch_SelectModuleToggle(false);"><?php echo $this->_tpl_vars['APP']['LBL_UNSELECT_ALL']; ?>
</a>
					
					<a href='javascript:void(0)' onclick="UnifiedSearch_SelectModuleCancel();"><img src="<?php echo vtiger_imageurl('close.gif', $this->_tpl_vars['THEME']); ?>
" border=0></a>
				</td>
			</tr>
			</table>
			
			<table width="100%" cellspacing="0" cellpadding="5" border="0" class="small">
				<?php $_from = $this->_tpl_vars['ALLOWED_MODULES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['allowed_modulesloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['allowed_modulesloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['SEARCH_MODULENAME'] => $this->_tpl_vars['SEARCH_MODULEINFO']):
        $this->_foreach['allowed_modulesloop']['iteration']++;
?>
				<?php if (($this->_foreach['allowed_modulesloop']['iteration']-1) % 3 == 0): ?>
				<tr valign=top>	
				<?php endif; ?>
					<td class="dvtCellLabel"><input type='checkbox' name='search_onlyin' class='small' value='<?php echo $this->_tpl_vars['SEARCH_MODULENAME']; ?>
'
					<?php if ($this->_tpl_vars['SEARCH_MODULEINFO']['selected']): ?>checked=true<?php endif; ?>><?php echo $this->_tpl_vars['SEARCH_MODULEINFO']['label']; ?>
</td>
				<?php if (($this->_foreach['allowed_modulesloop']['iteration']-1) % 3 == 2): ?>
				</tr>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
			</table>
		</td>
	</tr>
	<tr>
		<td align="right" height="30px" class="mailSubHeader">
			<input type='button' class='crmbutton small cancel' value='<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
' onclick='UnifiedSearch_SelectModuleCancel();'>
			<input type='button' class='crmbutton small create' value='<?php echo $this->_tpl_vars['APP']['LBL_APPLY_BUTTON_LABEL']; ?>
' onclick='UnifiedSearch_SelectModuleSave();'>
		</td>
	</tr>
	</table>
</form>