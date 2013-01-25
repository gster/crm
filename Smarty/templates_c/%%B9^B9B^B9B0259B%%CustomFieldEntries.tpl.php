<?php /* Smarty version 2.6.18, created on 2013-01-24 11:46:04
         compiled from modules/Vtiger/CustomFieldEntries.tpl */ ?>
				<form action="index.php" method="post" name="form" onsubmit="VtigerJS_DialogBox.block();">
				<input type="hidden" name="fld_module" value="<?php echo $this->_tpl_vars['MODULE']; ?>
">
				<input type="hidden" name="module" value="Settings">
				<input type="hidden" name="parenttab" value="Settings">
				<input type="hidden" name="mode">
				<table  class="listTableTopButtons" border="0" cellpadding="5" cellspacing="0" width="100%">
					<tr>
						<td class="big" align="left" nowrap="nowrap"><strong><?php echo $this->_tpl_vars['MOD']['LBL_MAPPED_FIELDS']; ?>
</strong> </td>
					<?php if ($this->_tpl_vars['MODULE'] == 'Calendar'): ?>
						<td align="right" width="80%"><input type="radio" name="activitytype" value="E" checked>&nbsp;<?php echo $this->_tpl_vars['APP']['Event']; ?>

						<input type="radio" name="activitytype" value="T">&nbsp;<?php echo $this->_tpl_vars['APP']['Task']; ?>
 
						</td>
					<?php endif; ?>
						<td align="right"><input type="button" value=" <?php echo $this->_tpl_vars['MOD']['NewCustomField']; ?>
 " onClick="fnvshobj(this,'createcf');getCreateCustomFieldForm('<?php echo $this->_tpl_vars['MODULE']; ?>
','','','')" class="crmButton create small"/></td>
				</tr>
				</table>	
			
				<table class="listTable" border="0" cellpadding="5" cellspacing="0" width="100%">
					<?php if ($this->_tpl_vars['MODULE'] == 'Leads'): ?>
					<tr>
						<td rowspan="2" class="colHeader small" width="5%">#</td>
					        <td rowspan="2" class="colHeader small" width="20%"><?php echo $this->_tpl_vars['MOD']['FieldLabel']; ?>
</td>
					        <td rowspan="2" class="colHeader small" width="20%"><?php echo $this->_tpl_vars['MOD']['FieldType']; ?>
</td>
							<td colspan="3" class="colHeader small" valign="top"><div align="center"><?php echo $this->_tpl_vars['MOD']['LBL_MAPPING_OTHER_MODULES']; ?>
</div></td>
							<td rowspan="2" class="colHeader small" width="20%"><?php echo $this->_tpl_vars['MOD']['LBL_CURRENCY_TOOL']; ?>
</td>
					</tr>

					<tr>
					  <td class="colHeader small" valign="top" width="18%"><?php echo $this->_tpl_vars['APP']['Accounts']; ?>
</td>
					  <td class="colHeader small" valign="top" width="18%"><?php echo $this->_tpl_vars['APP']['Contacts']; ?>
</td>
					  <td class="colHeader small" valign="top" width="19%"><?php echo $this->_tpl_vars['APP']['Potentials']; ?>
</td>
					 </tr>
					<?php else: ?>
					<tr>
                      	<td class="colHeader small" width="5%">#</td>
                      	<td class="colHeader small" width="20%"><?php echo $this->_tpl_vars['MOD']['FieldLabel']; ?>
</td>
                      	<td class="colHeader small" width="20%"><?php echo $this->_tpl_vars['MOD']['FieldType']; ?>
</td>
                    	<?php if ($this->_tpl_vars['MODULE'] == 'Calendar'): ?>
                      		<td class="colHeader small" width="20%"><?php echo $this->_tpl_vars['APP']['LBL_ACTIVITY_TYPE']; ?>
</td>
                      	<?php endif; ?>
                     	<td class="colHeader small" width="20%"><?php echo $this->_tpl_vars['MOD']['LBL_CURRENCY_TOOL']; ?>
</td>
					</tr>
					<?php endif; ?>
					<?php $_from = $this->_tpl_vars['CFENTRIES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['entries']):
?>
					<tr>
						<?php $_from = $this->_tpl_vars['entries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
							<td class="listTableRow small" valign="top" nowrap><?php echo $this->_tpl_vars['value']; ?>
&nbsp;</td>
						<?php endforeach; endif; unset($_from); ?>
					</tr>
					<?php endforeach; endif; unset($_from); ?>
		</table>
		</form>
		<br>
		<?php if ($this->_tpl_vars['MODULE'] == 'Leads'): ?>
			<strong><?php echo $this->_tpl_vars['APP']['LBL_NOTE']; ?>
: </strong> <?php echo $this->_tpl_vars['MOD']['LBL_CUSTOM_MAPP_INFO']; ?>

		<?php endif; ?>