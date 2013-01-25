<?php /* Smarty version 2.6.18, created on 2013-01-21 08:29:20
         compiled from modules/Integration/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'modules/Integration/index.tpl', 13, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "Buttons_List1.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table border=0 cellspacing=0 cellpadding=0 width=98% align=center>
<tr>
	<td valign=top align=right width=8><img src="<?php echo vtiger_imageurl('showPanelTopLeft.gif', $this->_tpl_vars['THEME']); ?>
"></td>
	<td class="showPanelBg" valign="top" width="100%" align=center >
	<br><br>
		<table border="0" cellpadding="0" cellspacing="0" width="98%" align="center" class="mailClient mailClientBg">
		<tr>
		<td colspan="4">
			<div style="padding: 20px 10px">
				<table border=0 cellspacing=1 cellpadding=5 width=100% class="lvt small">
				<tr bgcolor=white valign=center>
					<td class="lvtCol" width="10%"><img src="modules/Integration/res/images/gmail.gif"/></td>
					<td class="lvtColData" width="15%"><a href='<?php echo $this->_tpl_vars['GMAIL_BOOKMARKLET']; ?>
'><?php echo $this->_tpl_vars['APP']['LBL_GMAIL']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_BOOKMARKLET']; ?>
</a></td>
					<td class="lvtColData">
						<a href="http://wiki.vtiger.com/index.php/Gmail_Bookmarklet" target="_blank"><?php echo $this->_tpl_vars['MOD']['LBL_HOW_TO_USE']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_GMAIL']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_BOOKMARKLET']; ?>
?</a>
					</td>
				</tr>
				</table>
		</td>
		</tr>
		</table>
	</td>
	<td valign=top align=right width=8><img src="<?php echo vtiger_imageurl('showPanelTopRight.gif', $this->_tpl_vars['THEME']); ?>
"></td>
</tr>
</table>