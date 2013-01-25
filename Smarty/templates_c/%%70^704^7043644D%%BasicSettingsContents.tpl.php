<?php /* Smarty version 2.6.18, created on 2013-01-21 09:56:40
         compiled from modules/ModTracker/BasicSettingsContents.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'getTranslatedString', 'modules/ModTracker/BasicSettingsContents.tpl', 19, false),array('modifier', 'vtiger_imageurl', 'modules/ModTracker/BasicSettingsContents.tpl', 25, false),)), $this); ?>
<table border=0 cellspacing=0 cellpadding=5 width="350px" align="" class="dvtContentSpace">
    <tr>
        <td class="colHeader small"><?php echo $this->_tpl_vars['MOD']['LBL_MODULE']; ?>
</td>
        <td class="colHeader small"><?php echo $this->_tpl_vars['MOD']['Visible']; ?>
</td>
    </tr>
    <?php $_from = $this->_tpl_vars['INFOMODULES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['module']):
?>
    <tr onmouseover="this.className='prvPrfHoverOn'" onmouseout="this.className='prvPrfHoverOff'">
        <td class="listTableRow small" width="50%"><?php echo getTranslatedString($this->_tpl_vars['module']['name']); ?>
</td>
        <td class="listTableRow cellText small"  align="center">
        <div id="status" style="position:absolute;left:850px;top:5px;height:27px;white-space:nowrap;display:none"><img src="themes/softed/images/status.gif"></div>

        <?php if ($this->_tpl_vars['module']['visible'] == '1'): ?>
			<a href="javascript:void(0);" onclick="toggleModule_mod('<?php echo $this->_tpl_vars['module']['tabid']; ?>
', 'module_disable');">
			 <img src="<?php echo vtiger_imageurl('enabled.gif', $this->_tpl_vars['THEME']); ?>
" border="0" align="absmiddle" alt="<?php echo $this->_tpl_vars['MOD']['LBL_DISABLE']; ?>
 <?php echo $this->_tpl_vars['module']['name']; ?>
" title="<?php echo $this->_tpl_vars['MOD']['LBL_DISABLE']; ?>
 <?php echo getTranslatedString($this->_tpl_vars['module']['name']); ?>
">
			</a>
		<?php else: ?>
			<a href="javascript:void(0);" onclick="toggleModule_mod('<?php echo $this->_tpl_vars['module']['tabid']; ?>
', 'module_enable');">
			<img src="<?php echo vtiger_imageurl('disabled.gif', $this->_tpl_vars['THEME']); ?>
" border="0" align="absmiddle" alt="<?php echo $this->_tpl_vars['MOD']['LBL_ENABLE']; ?>
 <?php echo $this->_tpl_vars['module']['name']; ?>
" title="<?php echo $this->_tpl_vars['MOD']['LBL_ENABLE']; ?>
 <?php echo getTranslatedString($this->_tpl_vars['module']['name']); ?>
">
			</a>
		<?php endif; ?>
        
        </td>
	</tr>
	<?php endforeach; endif; unset($_from); ?>
</table>