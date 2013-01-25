<?php /* Smarty version 2.6.18, created on 2013-01-21 13:36:21
         compiled from modules/PickList/PickListDependencyList.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'getTranslatedString', 'modules/PickList/PickListDependencyList.tpl', 21, false),array('modifier', 'vtiger_imageurl', 'modules/PickList/PickListDependencyList.tpl', 48, false),)), $this); ?>
<div id="pickListDependencyList">
	<table border=0 cellspacing=0 cellpadding=5 width=100% class="tableHeading">
		<tr>
			<td class="small" width="70%" nowrap>
				<strong><?php echo $this->_tpl_vars['MOD']['LBL_SELECT_MODULE']; ?>
</strong>&nbsp;
				<select name="pickmodule" id="pickmodule" class="small" onChange="changeDependencyPicklistModule();">
					<option value=""><?php echo $this->_tpl_vars['APP']['LBL_ALL']; ?>
</option>
				<?php $_from = $this->_tpl_vars['MODULE_LISTS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['modulelabel'] => $this->_tpl_vars['module']):
?>
					<option value="<?php echo $this->_tpl_vars['module']; ?>
" <?php if ($this->_tpl_vars['MODULE'] == $this->_tpl_vars['module']): ?> selected <?php endif; ?>>
						<?php echo getTranslatedString($this->_tpl_vars['modulelabel'], $this->_tpl_vars['module']); ?>

					</option>
				<?php endforeach; endif; unset($_from); ?>
				</select>
			</td>
			<td class=small align=right>
				<input title="<?php echo $this->_tpl_vars['MOD_PICKLIST']['LBL_NEW_DEPENDENCY']; ?>
" class="crmButton create small" type="button" name="New" value="<?php echo $this->_tpl_vars['MOD_PICKLIST']['LBL_NEW_DEPENDENCY']; ?>
" onclick="addNewDependencyPicklist();"/>
			</td>
		</tr>
	</table>
						
	<table border=0 cellspacing=0 cellpadding=5 width=100% class="listTable">
		<tr>
			<td class="colHeader small" valign=top width=5%>#</td>
			<td class="colHeader small" valign=top width=25%><?php echo $this->_tpl_vars['APP']['LBL_MODULE']; ?>
</td>
			<td class="colHeader small" valign=top width=30%><?php echo $this->_tpl_vars['MOD_PICKLIST']['LBL_SOURCE_FIELD']; ?>
</td>
			<td class="colHeader small" valign=top width=30%><?php echo $this->_tpl_vars['MOD_PICKLIST']['LBL_TARGET_FIELD']; ?>
</td>
			<td class="colHeader small" valign=top width=10%><?php echo $this->_tpl_vars['MOD_PICKLIST']['LBL_TOOLS']; ?>
</td>
		</tr>
		<?php $_from = $this->_tpl_vars['DEPENDENT_PICKLISTS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['dependencylist'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['dependencylist']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['dependencyvalues']):
        $this->_foreach['dependencylist']['iteration']++;
?>
		<?php $this->assign('FIELD_MODULE', $this->_tpl_vars['dependencyvalues']['module']); ?>
		<tr>
			<td class="listTableRow small" valign=top><?php echo $this->_foreach['dependencylist']['iteration']; ?>
</td>
			<td class="listTableRow small" valign=top><?php echo getTranslatedString($this->_tpl_vars['FIELD_MODULE'], $this->_tpl_vars['FIELD_MODULE']); ?>
</td>
			<td class="listTableRow small" valign=top><?php echo getTranslatedString($this->_tpl_vars['dependencyvalues']['sourcefieldlabel'], $this->_tpl_vars['FIELD_MODULE']); ?>
</td>
			<td class="listTableRow small" valign=top><?php echo getTranslatedString($this->_tpl_vars['dependencyvalues']['targetfieldlabel'], $this->_tpl_vars['FIELD_MODULE']); ?>
</td>
			<td class="listTableRow small" valign=top nowrap>
	  			<a href="javascript:void(0);" onclick="editDependencyPicklist('<?php echo $this->_tpl_vars['FIELD_MODULE']; ?>
','<?php echo $this->_tpl_vars['dependencyvalues']['sourcefield']; ?>
','<?php echo $this->_tpl_vars['dependencyvalues']['targetfield']; ?>
');"><img src="<?php echo vtiger_imageurl('editfield.gif', $this->_tpl_vars['THEME']); ?>
" alt="<?php echo $this->_tpl_vars['APP']['LBL_EDIT']; ?>
" title="<?php echo $this->_tpl_vars['APP']['LBL_EDIT']; ?>
" border="0" align="absmiddle"></a>&nbsp;|
				<a href="javascript:void(0);" onClick="deleteDependencyPicklist('<?php echo $this->_tpl_vars['FIELD_MODULE']; ?>
','<?php echo $this->_tpl_vars['dependencyvalues']['sourcefield']; ?>
','<?php echo $this->_tpl_vars['dependencyvalues']['targetfield']; ?>
','<?php echo getTranslatedString('NTC_DELETE_CONFIRMATION'); ?>
');"><img src="<?php echo vtiger_imageurl('delete.gif', $this->_tpl_vars['THEME']); ?>
" alt="<?php echo $this->_tpl_vars['APP']['LBL_DELETE']; ?>
" title="<?php echo $this->_tpl_vars['APP']['LBL_DELETE']; ?>
" border="0" align="absmiddle"></a>
			</td>
  		</tr>
		<?php endforeach; endif; unset($_from); ?>
	</table>
</div>