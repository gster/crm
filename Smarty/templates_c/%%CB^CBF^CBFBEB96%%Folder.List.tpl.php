<?php /* Smarty version 2.6.18, created on 2013-01-24 11:18:58
         compiled from modules/MailManager/Folder.List.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'getTranslatedString', 'modules/MailManager/Folder.List.tpl', 12, false),array('modifier', 'htmlentities', 'modules/MailManager/Folder.List.tpl', 21, false),)), $this); ?>
<?php if ($this->_tpl_vars['FOLDERS']): ?>
<table cellpadding=0 cellspacing=0 border=0 class="small" width="98%">
    <tr>
        <td class="dvtSelectedCell" style="padding-left: 5px; padding-bottom: 5px;"><?php echo getTranslatedString('LBL_Folders'); ?>
</td>
    </tr>
    <tr></tr>
    <tr>
        <td class="dvtContentSpace">
        <table cellpadding=2 cellspacing=0 border=0 class="small" width="100%">
        <?php $_from = $this->_tpl_vars['FOLDERS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['FOLDER']):
?>
        <tr>
            <td>
                <a class="mm_folder" id='_mailfolder_<?php echo htmlentities($this->_tpl_vars['FOLDER']->name()); ?>
' href='#<?php echo htmlentities($this->_tpl_vars['FOLDER']->name()); ?>
' onclick="MailManager.clearSearchString(); MailManager.folder_open('<?php echo htmlentities($this->_tpl_vars['FOLDER']->name()); ?>
'); "
                ><?php if ($this->_tpl_vars['FOLDER']->unreadCount()): ?><b><?php echo htmlentities($this->_tpl_vars['FOLDER']->name()); ?>
 (<?php echo $this->_tpl_vars['FOLDER']->unreadCount(); ?>
)</b><?php else: ?><?php echo htmlentities($this->_tpl_vars['FOLDER']->name()); ?>
<?php endif; ?></a>
            </td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
        </table>
        </td>
    </tr>
</table>
<?php endif; ?>