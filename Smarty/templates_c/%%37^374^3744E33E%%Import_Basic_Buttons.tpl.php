<?php /* Smarty version 2.6.18, created on 2013-01-21 13:33:10
         compiled from modules/Import/Import_Basic_Buttons.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'getTranslatedString', 'modules/Import/Import_Basic_Buttons.tpl', 13, false),)), $this); ?>

<input type="submit" name="next" value="<?php echo getTranslatedString('LBL_NEXT_BUTTON_LABEL', $this->_tpl_vars['MODULE']); ?>
" class="crmButton big edit"
	   onclick="return ImportJs.uploadAndParse();" />
&nbsp;&nbsp;
<input type="button" name="cancel" value="<?php echo getTranslatedString('LBL_CANCEL_BUTTON_LABEL', $this->_tpl_vars['MODULE']); ?>
" class="crmButton big cancel"
	   onclick="location.href='index.php?module=<?php echo $this->_tpl_vars['FOR_MODULE']; ?>
&action=index'" />