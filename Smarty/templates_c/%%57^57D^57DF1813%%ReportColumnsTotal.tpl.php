<?php /* Smarty version 2.6.18, created on 2013-01-24 11:56:41
         compiled from ReportColumnsTotal.tpl */ ?>
<table class="small" bgcolor="#ffffff" border="0" cellpadding="5" cellspacing="0" height="532" width="100%" valign="top">
	<tbody><tr>
	<td colspan="2">
	<span class="genHeaderGray"><?php echo $this->_tpl_vars['MOD']['LBL_CALCULATIONS']; ?>
</span><br>
	<?php echo $this->_tpl_vars['MOD']['LBL_SELECT_COLUMNS_TO_TOTAL']; ?>

	<hr>
	</td>
	</tr>
	<tr><td colspan="2">
	<div style="overflow:auto;height:448px">
	<table style="background-color: rgb(204, 204, 204);" class="small" border="0" cellpadding="5" cellspacing="1" width="100%" valign="top">
		<tbody>
		<tr>	
		<td class="lvtCol" nowrap width="40%"><?php echo $this->_tpl_vars['MOD']['LBL_COLUMNS']; ?>
</td>
		<td class="lvtCol" nowrap width="15%"><?php echo $this->_tpl_vars['MOD']['LBL_COLUMNS_SUM']; ?>
</td>
		<td class="lvtCol" nowrap width="15%"><?php echo $this->_tpl_vars['MOD']['LBL_COLUMNS_AVERAGE']; ?>
</td>
		<td class="lvtCol" nowrap width="15%"><?php echo $this->_tpl_vars['MOD']['LBL_COLUMNS_LOW_VALUE']; ?>
</td>
		<td class="lvtCol" nowrap width="15%"><?php echo $this->_tpl_vars['MOD']['LBL_COLUMNS_LARGE_VALUE']; ?>
</td>
		</tr>
		<?php $_from = $this->_tpl_vars['BLOCK1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['modules']):
?>
		<?php $_from = $this->_tpl_vars['modules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>
		<tr class="lvtColData" onmouseover="this.className='lvtColDataHover'" onmouseout="this.className='lvtColData'" bgcolor="white">
		<?php if ($this->_tpl_vars['RECORDID'] != ''): ?>
                        <td><b><?php echo $this->_tpl_vars['row']['label']['0']; ?>
</b></td>
                <?php else: ?>
                        <td><b><?php echo $this->_tpl_vars['row']['0']; ?>
</b></td>
                <?php endif; ?>
		<td><?php echo $this->_tpl_vars['row']['1']; ?>
</td>
		<td><?php echo $this->_tpl_vars['row']['2']; ?>
</td>
		<td><?php echo $this->_tpl_vars['row']['3']; ?>
</td>
		<td><?php echo $this->_tpl_vars['row']['4']; ?>
</td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
		<?php endforeach; endif; unset($_from); ?>

	<?php if ($this->_tpl_vars['ROWS_COUNT'] == 0): ?>
		<tr class="lvtColData" bgcolor="white"><td colspan="5"><b><?php echo $this->_tpl_vars['MOD']['NO_COLUMN']; ?>
</b></td></tr>
	<?php endif; ?>

		</tbody>
	</table>
	</div>
	</td></tr>
	</tbody>
</table>