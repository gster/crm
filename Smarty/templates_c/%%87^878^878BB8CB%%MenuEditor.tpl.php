<?php /* Smarty version 2.6.18, created on 2013-01-21 06:54:23
         compiled from Settings/MenuEditor.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'Settings/MenuEditor.tpl', 19, false),array('modifier', 'getTranslatedString', 'Settings/MenuEditor.tpl', 31, false),)), $this); ?>

<script language="JavaScript" type="text/javascript" src="include/js/MenuEditor.js"></script>

<div id="vtlib_modulemanager" style="display:block;position:absolute;width:500px;"></div>
<br>
<table align="center" border="0" cellpadding="0" cellspacing="0" width="98%">
<tr>
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
		<table class="settingsSelUITopLine" border="0" cellpadding="5" cellspacing="0" width="100%">
		<tr>
			<td rowspan="2" valign="top" width="50"><img src="<?php echo vtiger_imageurl('menueditor.png', $this->_tpl_vars['THEME']); ?>
" alt="<?php echo $this->_tpl_vars['MOD']['LBL_MENU_EDITOR']; ?>
" title="<?php echo $this->_tpl_vars['MOD']['LBL_MENU_EDITOR']; ?>
" border="0" height="48" width="48"></td>
			<td class="heading2" valign="bottom"><b><a href="index.php?module=Settings&action=index&parenttab=Settings"><?php echo $this->_tpl_vars['MOD']['LBL_SETTINGS']; ?>
</a> &gt; <?php echo $this->_tpl_vars['MOD']['LBL_MENU_EDITOR']; ?>
</b></td>
		</tr>

		<tr>
			<td class="small" valign="top"><?php echo getTranslatedString('LBL_MENU_DESC'); ?>
</td>
		</tr>
		</table>
		<br>
	</div>
       <!-- Standard modules -->
       <div id='menueditor' align="center">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "Settings/MenuEditorAssign.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div>
        </td>
</tr>
</table>

