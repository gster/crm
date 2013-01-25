<?php /* Smarty version 2.6.18, created on 2013-01-21 09:56:40
         compiled from modules/ModTracker/BasicSettings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'modules/ModTracker/BasicSettings.tpl', 16, false),)), $this); ?>
    <script language="JavaScript" type="text/javascript" src="modules/ModTracker/ModTracker.js"></script>
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
                <td rowspan="2" valign="top" width="50"><img src="<?php echo vtiger_imageurl('set-IcoLoginHistory.gif', $this->_tpl_vars['THEME']); ?>
" alt="<?php echo $this->_tpl_vars['MOD']['ModTracker']; ?>
"
                    title="<?php echo $this->_tpl_vars['MOD']['ModTracker']; ?>
" border="0" height="48" width="48"></td>
                <td class="heading2" valign="bottom"><b>
                    <a href="index.php?module=Settings&action=index&parenttab=Settings"><?php echo $this->_tpl_vars['APP']['LBL_SETTINGS']; ?>
</a> &gt;
                    <?php echo $this->_tpl_vars['MOD']['ModTracker']; ?>
</b>
                </td>
            </tr>

            <tr>
                <td class="small" valign="top"><?php echo $this->_tpl_vars['MOD']['LBL_CONFIGURATION_DESCRIPTION']; ?>
</td>
            </tr>
            </table>

            <table border=0 cellspacing=1 cellpadding=0 width="100%" class="lvtBg">
            <tr>
                <td>
                    <table border=0 cellspacing=0 cellpadding=2 width="100%" class="small">
                    <tr>
                        <td style="padding-right:20px" nowrap align="right"></td>
                    </tr>
                    </table>

                    <table border=0 cellspacing=0 cellpadding=0 width="95%" class="small">
                    <!-- Tab Links -->
                    <tr><td>
                        <table border=0 cellspacing=0 cellpadding=3 width="100%" class="small">
                        <tr>
                            <td class="dvtTabCache" style="width:10px" nowrap></td>
                            <td class="dvtSelectedCell" align="left" nowrap><?php echo $this->_tpl_vars['MOD']['LBL_BASIC_SETTINGS']; ?>
</td>
                            <td class="dvtTabCache" width="100%">&nbsp;</td>
                        </tr>
                        </table>
                    </td></tr>
                    <tr><td>
                        <table border=0 cellspacing=0 cellpadding=10 width="100%" class="dvtContentSpace" style='border-bottom: 0'>
                        <tr>
                            <td>
                                <div id="modTrackerContents">
                                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/ModTracker/BasicSettingsContents.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                </div>
                            </td>
                        </tr>
                        </table>
                    </td></tr>
                    <!-- Tab Links -->
                    <tr><td>
                        <table border=0 cellspacing=0 cellpadding=3 width="100%" class="small">
                        <tr>
                            <td class="dvtTabCacheBottom" style="width:10px" nowrap></td>
                            <td class="dvtSelectedCellBottom" align="left" nowrap><?php echo $this->_tpl_vars['MOD']['LBL_BASIC_SETTINGS']; ?>
</td>
                            <td class="dvtTabCacheBottom" width="100%">&nbsp;</td>
                        </tr>
                        </table>
                    </td></tr>

                    </table>

                </td>
            </tr>
            </table>

            </td>
            </tr>
        </table>

        </td>
        </tr>
        </table>
       </div>

            </td>
            <td valign="top"><img src="<?php echo vtiger_imageurl('showPanelTopRight.gif', $this->_tpl_vars['THEME']); ?>
"></td>
        </tr>
    </table>
    <br>