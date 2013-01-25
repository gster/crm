<?php /* Smarty version 2.6.18, created on 2013-01-21 09:21:32
         compiled from modules/Mobile/generic/Home.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/Mobile/generic/Header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<body>

<div id="__homebox__">

	<table width=100% cellpadding=0 cellspacing=0 border=0>
	<tr class="toolbar">
		<td align="left"><a class="link" href="index.php?_operation=logout" target="_self"><img src="resources/images/iconza/yellow/logout_32x32.png" border="0"></a></td>
		<td width="100%"><h1 class='page_title'><?php echo $this->_tpl_vars['TITLE']; ?>
</h1></td>
		<td align="right"><a class="link" href="javascript:void(0);" xonclick="$fnT('__homebox__','__settingsbox__');" target="_self"><img src="resources/images/iconza/yellow/user_32x32.png" border="0"></a></td>
	</tr>
	<tr>
		<td colspan="3">	
		
			<table width=100% cellpadding=0 cellspacing=0 border=0 class="table_list">
				<?php $_from = $this->_tpl_vars['_MODULES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_MODULE']):
?>
				<tr>
				<td width="100%">			
					<a href="index.php?_operation=listModuleRecords&module=<?php echo $this->_tpl_vars['_MODULE']->name(); ?>
" target="_blank"><?php echo $this->_tpl_vars['_MODULE']->label(); ?>
</a>				
				</td>
				<td>
					<a href="index.php?_operation=listModuleRecords&module=<?php echo $this->_tpl_vars['_MODULE']->name(); ?>
" target="_blank" class="link_rhook"><img src="resources/images/iconza/royalblue/right_arrow_16x16.png" border="0"></a>
				</td>
				
				</tr>
				<?php endforeach; endif; unset($_from); ?>
			</table>
		
		</td>
	</tr>
	</table>

</div>


<div id="__settingsbox__" style='display:none;'>
	<table width=100% cellpadding=0 cellspacing=0 border=0>
	<tr class="toolbar">
		<td>&nbsp;</td>
		<td width="100%">
			<h1 class='page_title'>
			My Settings
			</h1>
		</td>
		<td align="right" style="padding-right: 5px;"><a class="link" href="javascript:void(0);" onclick="$fnT('__settingsbox__','__homebox__');"><img src="resources/images/iconza/yellow/delete_32x32.png" border="0"></a></td>
	</tr>
	
	<tr>
		<td colspan=3>
		
			<form action="index.php" method="GET">
				<table width=100% cellpadding=5 cellspacing=0 border=0>
				<tr>
					<td width="20px" nowrap="nowrap">
					Select Skin
					</td>
					
					<td>
					<select name="skin" onchange="this.form.submit();">
						<?php $_from = $this->_tpl_vars['_ALLSKINS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_SKINKEY'] => $this->_tpl_vars['_SKINVALUE']):
?>
							<option value="<?php echo $this->_tpl_vars['_SKINKEY']; ?>
" <?php if ($this->_tpl_vars['_SKINKEY'] == $this->_tpl_vars['_SELSKIN']): ?>selected=true<?php endif; ?>><?php echo $this->_tpl_vars['_SKINVALUE']; ?>
</option>
						<?php endforeach; endif; unset($_from); ?>
					</select>
					
					<input type="hidden" name="action" value="Settings"/>
					<input type="hidden" name="mode" value="reset_skin"/>
					</td>
				</tr>
				</table>
			</form>
		
		</td>
		
	</tr>
	</table>
</div>

</body>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/Mobile/generic/Footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>