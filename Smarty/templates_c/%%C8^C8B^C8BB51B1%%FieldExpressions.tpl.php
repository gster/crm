<?php /* Smarty version 2.6.18, created on 2013-01-24 03:40:03
         compiled from com_vtiger_workflow/FieldExpressions.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'getTranslatedString', 'com_vtiger_workflow/FieldExpressions.tpl', 17, false),array('modifier', 'vtiger_imageurl', 'com_vtiger_workflow/FieldExpressions.tpl', 21, false),)), $this); ?>

<div id='editpopup' class='layerPopup' style='display:none;' >
    <div id='editpopup_draghandle' style='cursor: move;'>
        <table width="100%" cellspacing="0" cellpadding="5" border="0" class="layerHeadingULine">
            <tr>
                <td width="60%" align="left" class="layerPopupHeading">
                <?php echo getTranslatedString('LBL_SET_VALUE', $this->_tpl_vars['MODULE']); ?>

                </td>
                <td width="40%" align="right">
                    <a href="javascript:void(0);" id="editpopup_close">
                        <img border="0" align="middle" src="<?php echo vtiger_imageurl('close.gif', $this->_tpl_vars['THEME']); ?>
"/>
                    </a>
                </td>
            </tr>
        </table>
    </div>
    <table width="100%" bgcolor="white" align="center" border="0" cellspacing="0" cellpadding="5">
        <tr valign="top">
            <td class='dvtCellInfo' align="left">
                <table width="100%" border="0" cellspacing="0" cellpadding="2" align="center">
                    <tr valign="top">
                        <td>
                            <select id='editpopup_expression_type' class='small'>
                                <option value="rawtext"><?php echo $this->_tpl_vars['MOD']['LBL_RAW_TEXT']; ?>
</option>
                                <option value="fieldname"><?php echo $this->_tpl_vars['MOD']['LBL_FIELD']; ?>
</option>
                                <option value="expression"><?php echo $this->_tpl_vars['MOD']['LBL_EXPRESSION']; ?>
</option>
                            </select>

                            <select id='editpopup_fieldnames' class='small'>
                                <option value=""><?php echo $this->_tpl_vars['MOD']['LBL_USE_FIELD_VALUE_DASHDASH']; ?>
</option>
                            </select>

                            <select id='editpopup_functions' class='small'>
                                <option value=""><?php echo $this->_tpl_vars['MOD']['LBL_USE_FUNCTION_DASHDASH']; ?>
</option>
                            </select>
                        </td>
                    </tr>
                    <tr valign="top">
                        <td>
                            <input type="hidden" id='editpopup_field' />
                            <input type="hidden" id='editpopup_field_type' />
                            <textarea name="Name" rows="10" cols="50" id='editpopup_expression'></textarea>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table width="100%" cellspacing="0" cellpadding="5" border="0" class="layerPopupTransport">
        <tr><td align="center">
                <input type="button" class="crmButton small save" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" name="save" id='editpopup_save'/>
                <input type="button" class="crmButton small cancel" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" name="cancel" id='editpopup_cancel'/>
            </td></tr>
    </table>

    <div class="helpmessagebox" id="text_help" style="display:none;">
        <table width="100%" cellspacing="1" cellpadding="5" border="0">
            <tr valign="top">
                <td><b><?php echo $this->_tpl_vars['MOD']['LBL_RAW_TEXT']; ?>
</b></td>
            </tr>
            <tr valign="top">
                <td>2000</td>
            </tr>
            <tr valign="top">
                <td>vtiger</td>
            </tr>
        </table>
    </div>

    <div class="helpmessagebox" id="fieldname_help" style="display:none;">
        <table width="100%" cellspacing="1" cellpadding="5" border="0">
            <tr valign="top">
                <td><b><?php echo $this->_tpl_vars['MOD']['LBL_FIELD']; ?>
</b></td>
            </tr>
            <tr valign="top">
                <td><i>annual_revenue</i></td>
            </tr>
            <tr valign="top">
                <td><i>notify_owner</i></td>
            </tr>
        </table>
    </div>

    <div class="helpmessagebox" id="expression_help" style="display:none;">
        <table width="100%" cellspacing="1" cellpadding="5" border="0">
            <tr valign="top">
                <td><b><?php echo $this->_tpl_vars['MOD']['LBL_EXPRESSION']; ?>
</b></td>
            </tr>
            <tr valign="top">
                <td><i>annual_revenue</i> / 12</td>
            </tr>
            <tr valign="top">
                <td>
                    <font color=blue>if</font> <i>mailingcountry</i> == 'India' <font color=blue>then</font> <font color=blue>concat</font>(<i>firstname</i>,' ',<i>lastname</i>) <font color=blue>else</font> <font color=blue>concat</font>(<i>lastname</i>,' ',<i>firstname</i>) <font color=blue>end</font>
                </td>
            </tr>
        </table>
    </div>
</div>