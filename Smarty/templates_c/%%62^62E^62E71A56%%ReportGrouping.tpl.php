<?php /* Smarty version 2.6.18, created on 2013-01-24 11:56:41
         compiled from ReportGrouping.tpl */ ?>
<table class="small" bgcolor="#ffffff" border="0" cellpadding="5" cellspacing="0" height='500' width="100%">
	<tbody><tr>
	<td colspan="2">
	<span class="genHeaderGray"><?php echo $this->_tpl_vars['MOD']['LBL_SPECIFY_GROUPING']; ?>
</span><br>
	<?php echo $this->_tpl_vars['MOD']['LBL_SELECT_COLUMNS_TO_GROUP_REPORTS']; ?>
 
	<hr>
	</td>
	</tr>
	<tr>
	<td style="padding-left: 5px;" align="left" width="65%">
	<?php echo $this->_tpl_vars['MOD']['LBL_GROUPING_SUMMARIZE']; ?>
	
	<select id="Group1" name="Group1" class="txtBox" onchange="getDateFieldGrouping('Group1')">
	<option value="none"><?php echo $this->_tpl_vars['MOD']['LBL_NONE']; ?>
</option>
	<?php echo $this->_tpl_vars['BLOCK1']; ?>

	</select>
	</td>
    <td style="padding-left: 5px;" align="left" width="25%">
        <?php echo $this->_tpl_vars['GROUPBYTIME1']; ?>

	</td>
	<td style="padding-left: 5px;" align="left" width="35%">
	<?php echo $this->_tpl_vars['MOD']['LBL_GROUPING_SORT']; ?>
<br>
	<select name="Sort1" class="importBox">
	<?php echo $this->_tpl_vars['ASCDESC1']; ?>

	</select>
	</td>
	</tr>
	<tr><td colspan="2">&nbsp;</td></tr>
	<tr>
	<td style="padding-left: 35px;" align="left">
	<?php echo $this->_tpl_vars['MOD']['LBL_GROUPING_THEN_BY']; ?>
<br>
	<select id="Group2" name="Group2" class="txtBox" onchange="getDateFieldGrouping('Group2')">
	<option value="none"><?php echo $this->_tpl_vars['MOD']['LBL_NONE']; ?>
</option>
	        <?php echo $this->_tpl_vars['BLOCK2']; ?>

	</select>
	</td>
    <td style="padding-left: 40px;" align="left">
        <?php echo $this->_tpl_vars['GROUPBYTIME2']; ?>

    </td>
	<td style="padding-left: 20px;" align="left">
	<?php echo $this->_tpl_vars['MOD']['LBL_GROUPING_SORT']; ?>
<br>
	<select name="Sort2" class="importBox">
	<?php echo $this->_tpl_vars['ASCDESC2']; ?>

	</select>
	</td>
	</tr>
	<tr><td colspan="2">&nbsp;</td></tr>
	<tr>
	<td style="padding-left: 65px;" align="left">
	<?php echo $this->_tpl_vars['MOD']['LBL_GROUPING_FINALLY_BY']; ?>
<br>
	<select id="Group3" name="Group3" class="txtBox" onchange="getDateFieldGrouping('Group3')">
	<option value="none"><?php echo $this->_tpl_vars['MOD']['LBL_NONE']; ?>
</option>
	            <?php echo $this->_tpl_vars['BLOCK3']; ?>

	</select>
	</td>
    <td style="padding-left: 40px;" align="left">
        <?php echo $this->_tpl_vars['GROUPBYTIME3']; ?>

    </td>
	<td style="padding-left: 40px;" align="left">
	<?php echo $this->_tpl_vars['MOD']['LBL_GROUPING_SORT']; ?>
<br>
	<select name="Sort3" class="importBox">
	<?php echo $this->_tpl_vars['ASCDESC3']; ?>

	</select>
	</td>
	</tr>
	<tr><td colspan="2" height="305">&nbsp;</td></tr>
	</tbody>
</table>
