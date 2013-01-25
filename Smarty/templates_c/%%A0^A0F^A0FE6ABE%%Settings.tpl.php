<?php /* Smarty version 2.6.18, created on 2013-01-24 11:18:58
         compiled from modules/MailManager/Settings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'getTranslatedString', 'modules/MailManager/Settings.tpl', 10, false),)), $this); ?>
<form action="javascript:void(0);" method="POST" style="display:inline;">
<span class="dvHeaderText" id="settings_mail_fldrname"><?php echo getTranslatedString('JSLBL_Settings'); ?>
</span>
<div class="mm_outerborder" id="settings_email_con" name="settings_email_con">
    <input type=hidden id="selected_servername" value="<?php echo $this->_tpl_vars['SERVERNAME']; ?>
" >
    <table width="100%" cellpadding=5 cellspacing=0 border=0 class="small" style='clear: both;'>
        <tr>
            <td width="15%"><?php echo getTranslatedString('LBL_SELECT_ACCOUNT_TYPE'); ?>
</td>
            <td><select id="_mbox_helper" class="small" onchange="MailManager.handle_settings_confighelper(this);">
                    <option value=''><?php echo getTranslatedString('JSLBL_Choose_Server_Type', 'MailManager'); ?>
</option>
                    <option value='gmail' <?php if ($this->_tpl_vars['SERVERNAME'] == 'gmail'): ?> selected <?php endif; ?>><?php echo getTranslatedString('JSLBL_Gmail', 'MailManager'); ?>
</option>
                    <option value='yahoo' <?php if ($this->_tpl_vars['SERVERNAME'] == 'yahoo'): ?> selected <?php endif; ?>><?php echo getTranslatedString('JSLBL_Yahoo', 'MailManager'); ?>
</option>
                    <option value='fastmail' <?php if ($this->_tpl_vars['SERVERNAME'] == 'fastmail'): ?> selected <?php endif; ?>><?php echo getTranslatedString('JSLBL_Fastmail', 'MailManager'); ?>
</option>
                    <option value='other' <?php if ($this->_tpl_vars['SERVERNAME'] == 'other'): ?> selected <?php endif; ?>><?php echo getTranslatedString('JSLBL_Other', 'MailManager'); ?>
</option>
                </select></td>
        </tr>
    </table>
    
    <div id="settings_details" <?php if ($this->_tpl_vars['SERVERNAME'] != ''): ?> style="display:block;" <?php else: ?> style="display:none;"<?php endif; ?>>
        <table width="100%" cellpadding=5 cellspacing=0 border=0 class="small" style='clear: both;'>
            <tr>
                <td width="15%" nowrap="nowrap"><font color="red">*</font><?php echo getTranslatedString('LBL_Mail_Server'); ?>
</td>
                <td>
                    <input name="_mbox_server" value="<?php echo $this->_tpl_vars['MAILBOX']->server(); ?>
" type="text" style="width: 60%" class="detailedViewTextBox" onblur="this.className='detailedViewTextBox'" onfocus="this.className='detailedViewTextBoxOn'">
                    <span class="mm_blur"><?php echo getTranslatedString('LBL_Like'); ?>
, mail.company.com or 192.168.10.20</span>
                </td>
            </tr>

            <tr>
                <td width="15%" nowrap="nowrap"><font color="red">*</font><?php echo getTranslatedString('LBL_Username'); ?>
</td>
                <td>
                    <input name="_mbox_user" id="_mbox_user" value="<?php echo $this->_tpl_vars['MAILBOX']->username(); ?>
" type="text" style="width: 60%" class="detailedViewTextBox" onblur="this.className='detailedViewTextBox'" onfocus="this.className='detailedViewTextBoxOn'">
                    <span class="mm_blur"><?php echo getTranslatedString('LBL_Your_Mailbox_Account'); ?>
</span>
                </td>
            </tr>

            <tr>
                <td width="15%" nowrap="nowrap"><font color="red">*</font><?php echo getTranslatedString('LBL_Password'); ?>
</td>
                <td>
                    <input name="_mbox_pwd" id="_mbox_pwd" value="<?php echo $this->_tpl_vars['MAILBOX']->password(); ?>
" type="password" style="width: 60%" class="detailedViewTextBox" onblur="this.className='detailedViewTextBox'" onfocus="this.className='detailedViewTextBoxOn'">
                    <span class="mm_blur"><?php echo getTranslatedString('LBL_Account_Password'); ?>
</span>
                </td>
            </tr>
        </table>
        
        <div id="additional_settings" <?php if ($this->_tpl_vars['SERVERNAME'] == 'other'): ?> style="display:block;"<?php else: ?> style="display:none;" <?php endif; ?>>
        <table width="100%" cellpadding=5 cellspacing=0 border=0 class="small" style='clear: both;'>
            <tr>
                <td width="15%" nowrap="nowrap"><?php echo getTranslatedString('LBL_Protocol'); ?>
</td>
                <td>
                    <input type="radio" name="_mbox_protocol" value="IMAP2" <?php if (strcasecmp ( $this->_tpl_vars['MAILBOX']->protocol() , 'imap2' ) === 0): ?>checked=true<?php endif; ?>> <?php echo getTranslatedString('LBL_Imap2'); ?>

                    <input type="radio" name="_mbox_protocol" value="IMAP4" <?php if (strcasecmp ( $this->_tpl_vars['MAILBOX']->protocol() , 'imap4' ) === 0): ?>checked=true<?php endif; ?>> <?php echo getTranslatedString('LBL_Imap4'); ?>

                </td>
            </tr>

            <tr>
                <td width="15%" nowrap="nowrap"><?php echo getTranslatedString('LBL_SSL_Options'); ?>
</td>
                <td>
                    <input type="radio" name="_mbox_ssltype" value="notls" <?php if (strcasecmp ( $this->_tpl_vars['MAILBOX']->ssltype() , 'notls' ) === 0): ?>checked=true<?php endif; ?>> <?php echo getTranslatedString('LBL_No_TLS'); ?>

                    <input type="radio" name="_mbox_ssltype" value="tls" <?php if (strcasecmp ( $this->_tpl_vars['MAILBOX']->ssltype() , 'tls' ) === 0): ?>checked=true<?php endif; ?>> <?php echo getTranslatedString('LBL_TLS'); ?>

                    <input type="radio"name="_mbox_ssltype" value="ssl" <?php if (strcasecmp ( $this->_tpl_vars['MAILBOX']->ssltype() , 'ssl' ) === 0): ?>checked=true<?php endif; ?>> <?php echo getTranslatedString('LBL_SSL'); ?>

                </td>
            </tr>

            <tr>
                <td width="15%" nowrap="nowrap"><?php echo getTranslatedString('LBL_Certificate_Validations'); ?>
</td>
                <td>
                    <input type="radio" name="_mbox_certvalidate" value="validate-cert" <?php if (strcasecmp ( $this->_tpl_vars['MAILBOX']->certvalidate() , 'validate-cert' ) === 0): ?>checked=true<?php endif; ?> > <?php echo getTranslatedString('LBL_Validate_Cert'); ?>

                    <input type="radio" name="_mbox_certvalidate" value="novalidate-cert" <?php if (strcasecmp ( $this->_tpl_vars['MAILBOX']->certvalidate() , 'novalidate-cert' ) === 0): ?>checked=true<?php endif; ?>> <?php echo getTranslatedString('LBL_Do_Not_Validate_Cert'); ?>

                </td>
            </tr>
            </table>
        </div>
        <table width="100%" cellpadding=5 cellspacing=0 border=0 class="small" style='clear: both;'>
            <tr>
                <td width="15%" nowrap="nowrap"><?php echo getTranslatedString('LBL_REFRESH_TIME'); ?>
</td>
                <td>
                    <select name="_mbox_refresh_timeout">
                        <option value="" <?php if ($this->_tpl_vars['MAILBOX']->refreshTimeOut() == ''): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['MOD']['LBL_NONE']; ?>
</option>
                        <option value="300000" <?php if (strcasecmp ( $this->_tpl_vars['MAILBOX']->refreshTimeOut() , '300000' ) == 0): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['MOD']['LBL_5_MIN']; ?>
</option>
                        <option value="600000" <?php if (strcasecmp ( $this->_tpl_vars['MAILBOX']->refreshTimeOut() , '600000' ) == 0): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['MOD']['LBL_10_MIN']; ?>
</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td width="15%">&nbsp;</td>
                <td colspan=2>
                    <input type="button" class="small crmbutton save" value="<?php echo getTranslatedString('LBL_SAVE_BUTTON_LABEL'); ?>
" onclick="MailManager.save_settings(this.form);" >
                    <?php if ($this->_tpl_vars['MAILBOX'] && $this->_tpl_vars['MAILBOX']->exists()): ?>
                        <input type="button" class="small crmbutton cancel" onclick="MailManager.close_settings();" value="<?php echo getTranslatedString('LBL_CANCEL_BUTTON_LABEL'); ?>
" >
                        <input type="button" class="small crmbutton delete" onclick="MailManager.remove_settings(this.form);" value="<?php echo getTranslatedString('LBL_Remove'); ?>
" >
                    <?php endif; ?>
                </td>
            </tr>
        </table>
    </div>
</form>
</div>