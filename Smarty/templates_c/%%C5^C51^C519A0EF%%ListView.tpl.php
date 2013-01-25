<?php /* Smarty version 2.6.18, created on 2013-01-21 10:04:14
         compiled from modules/Webforms/ListView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'getTranslatedString', 'modules/Webforms/ListView.tpl', 41, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'modules/Webforms/Buttons_List.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript" src="modules/<?php echo $this->_tpl_vars['MODULE']; ?>
/language/<?php echo $this->_tpl_vars['LANGUAGE']; ?>
.lang.js"></script>
<script type="text/javascript" src="modules/<?php echo $this->_tpl_vars['MODULE']; ?>
/<?php echo $this->_tpl_vars['MODULE']; ?>
.js"></script>
<table border=0 cellspacing=0 cellpadding=0 width=98% align=center>
	<tr>
		<td class="showPanelBg" valign="top" width=100% style="padding:10px;">&nbsp;
			<div id="orgLay" class="layerPopup" style="display: none;position: absolute;top: 25%;left: 30%;height:70%;width:50%;z-index:100; ">
				<table class="layerHeadingULine" cellspacing="0" cellpadding="5" border="0" width="100%">
					<tr>
						<td class="genHeaderSmall" align="left">
							<img src="modules/Webforms/img/Webform_small.png">
							<p id="webform_popup_header" style="display:inline;"></p>
						</td>
						<td align="right">
							<a >
							<img border="0" align="absmiddle" src="themes/images/close.gif" onclick="Webforms.showHideElement('orgLay')">
							</a>
						</td>
					</tr>
				</table>
				<table cellspacing="0" cellpadding="0" border="0" align="center" width="95%" >
						<tr>
							<td class="small">
								<table cellpadding="5" border="0" bgcolor="white" align="center" width="100%"  celspacing="0">
									<tr>
										<td id="webform_source_description"></td>
									</tr>
									<tr>
										<td>
											<font color="green" ><?php echo getTranslatedString('LBL_EMBED_MSG', $this->_tpl_vars['MODULE']); ?>
</font>
										</td>
									</tr>
									<tr>
										<td rowspan="5">
											<textarea readonly="readonly" style="height:auto;" rows="25" cols="25" id="webform_source" name="webform_source" value=""></textarea>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td align="right">
								<input type="button" style="width:70px" value="<?php echo getTranslatedString('LBL_CANCEL_BUTTON_LABEL', $this->_tpl_vars['MODULE']); ?>
 " name="button" onclick="Webforms.showHideElement('orgLay')" class="crmbutton small cancel" >
							</td>
						</tr>
				</table>
			</div>
			<div>
				
			<table border="0" cellspacing="1" cellpadding="3" width="100%" class="small">
				<tr>
					<td><br><br><br></td>
				</tr>
			</table>
			<table border="0" cellspacing="1" cellpadding="3" width="100%" class="lvt small">
				<!-- Table Headers -->
				<tr>
					<td class="lvtCol"><?php echo getTranslatedString('LBL_WEBFORM_NAME', $this->_tpl_vars['MODULE']); ?>
</td>
					<td class="lvtCol"><?php echo getTranslatedString('LBL_DESCRIPTION', $this->_tpl_vars['MODULE']); ?>
</td>
					<td class="lvtCol"><?php echo getTranslatedString('LBL_MODULE', $this->_tpl_vars['MODULE']); ?>
</a></td>
					<td class="lvtCol"><?php echo getTranslatedString('LBL_PUBLICID', $this->_tpl_vars['MODULE']); ?>
</td>
					<td class="lvtCol"><?php echo getTranslatedString('LBL_RETURNURL', $this->_tpl_vars['MODULE']); ?>
</td>
					<td class="lvtCol" width="2%"><?php echo getTranslatedString('LBL_STATUS', $this->_tpl_vars['MODULE']); ?>
</td>
					<td class="lvtCol"><?php echo getTranslatedString('LBL_ACTION', $this->_tpl_vars['MODULE']); ?>
</td>
				</tr>
				<!-- Table Contents -->
				<?php if (empty ( $this->_tpl_vars['WEBFORMS'] )): ?>
				<tr>
					<td align="center" colspan="9" style="background-color:#efefef;height:340px">
						<div style="border: 3px solid rgb(153, 153, 153); background-color: rgb(255, 255, 255); width: 45%; position: relative; z-index: 10000000;">
							<table cellspacing="0" cellpadding="5" border="0" width="98%">
								<tr>
									<td width="25%" rowspan="2">
										<img height="60" width="61" src="themes/images/empty.jpg">
									</td>
									<td nowrap="nowrap" width="75%" style="border-bottom: 1px solid rgb(204, 204, 204);">
										<span class="genHeaderSmall"><?php echo getTranslatedString('LBL_NO_WEBFORM', $this->_tpl_vars['MODULE']); ?>

										</span>
									</td>
								</tr>
								<tr>
									<td nowrap="nowrap" align="left" class="small">You can Create a Webform Now. Click the link below:<br>
										&nbsp;&nbsp;- <b><a href="index.php?module=Webforms&action=WebformsEditView&parenttab=Settings"><?php echo getTranslatedString('LBL_CREATE_WEBFORM', $this->_tpl_vars['MODULE']); ?>
</a></b><br>
									</td>
								</tr>
							</table>
						</div>
					</td>
				</tr>
				<?php endif; ?>
				<?php $_from = $this->_tpl_vars['WEBFORMS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['pname'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['pname']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['webform']):
        $this->_foreach['pname']['iteration']++;
?>
				<form name="form<?php echo $this->_tpl_vars['webform']->getId(); ?>
" action="" method="post">
					<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['webform']->getId(); ?>
"></input>
				</form>
				<tr bgcolor="white" onmouseover="this.className='lvtColDataHover'" onmouseout="this.className='lvtColData'" id="row_99" class="lvtColData">
					<td onmouseover="vtlib_listview.trigger('cell.onmouseover', $(this))" onmouseout="vtlib_listview.trigger('cell.onmouseout', $(this))"><a href="index.php?module=Webforms&amp;action=WebformsDetailView&amp;id=<?php echo $this->_tpl_vars['webform']->getId(); ?>
&amp;parenttab=Settings&amp;operation=detail" id="<?php echo $this->_tpl_vars['webform']->getId(); ?>
"><?php echo $this->_tpl_vars['webform']->getName(); ?>
</a></td>
					<td onmouseover="vtlib_listview.trigger('cell.onmouseover', $(this))" onmouseout="vtlib_listview.trigger('cell.onmouseout', $(this))"><?php echo $this->_tpl_vars['webform']->getDescription(); ?>
</td>
					<td onmouseover="vtlib_listview.trigger('cell.onmouseover', $(this))" onmouseout="vtlib_listview.trigger('cell.onmouseout', $(this))"><?php echo $this->_tpl_vars['webform']->getTargetModule(); ?>
</td>
					<td onmouseover="vtlib_listview.trigger('cell.onmouseover', $(this))" onmouseout="vtlib_listview.trigger('cell.onmouseout', $(this))"><?php echo $this->_tpl_vars['webform']->getPublicId(); ?>
</td>
					<td onmouseover="vtlib_listview.trigger('cell.onmouseover', $(this))" onmouseout="vtlib_listview.trigger('cell.onmouseout', $(this))"><?php echo $this->_tpl_vars['webform']->getReturnUrl(); ?>
</td>
					<td onmouseover="vtlib_listview.trigger('cell.onmouseover', $(this))" onmouseout="vtlib_listview.trigger('cell.onmouseout', $(this))" align="center"> <?php if ($this->_tpl_vars['webform']->getEnabled() == 1): ?><img src="themes/images/prvPrfSelectedTick.gif"><?php else: ?><img src="themes/images/no.gif"><?php endif; ?></td>
					<td onmouseover="vtlib_listview.trigger('cell.onmouseover', $(this))" onmouseout="vtlib_listview.trigger('cell.onmouseout', $(this))"><a onclick='javascript:document.getElementById("webform_popup_header").innerHTML="<?php echo $this->_tpl_vars['webform']->getName(); ?>
";Webforms.getHTMLSource(<?php echo $this->_tpl_vars['webform']->getId(); ?>
);' style="cursor:pointer;"><?php echo getTranslatedString('LBL_SOURCE', $this->_tpl_vars['MODULE']); ?>
</a> | <a href="index.php?module=Webforms&amp;action=WebformsEditView&amp;id=<?php echo $this->_tpl_vars['webform']->getId(); ?>
&amp;parenttab=Settings&amp;operation=edit"><?php echo getTranslatedString('LBL_EDIT', $this->_tpl_vars['MODULE']); ?>
</a>  | <a onclick="Webforms.deleteForm('form<?php echo $this->_tpl_vars['webform']->getId(); ?>
',<?php echo $this->_tpl_vars['webform']->getId(); ?>
)" style="cursor:pointer;"><?php echo getTranslatedString('LBL_DELETE', $this->_tpl_vars['MODULE']); ?>
</a> </td>
				</tr>
				<?php endforeach; endif; unset($_from); ?>
			</table>
			</div>
		</td>
	</tr>
</table>
 