<?php /* Smarty version 2.6.18, created on 2013-01-21 09:21:38
         compiled from modules/Mobile/generic/List.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/Mobile/generic/Header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<body>

<div id="__listview__" <?php if ($this->_tpl_vars['_MODE'] == 'search'): ?>style='display:none;'<?php endif; ?>>
	<table width=100% cellpadding=0 cellspacing=0 border=0>
	<tr class="toolbar">
		<td><a class="link" href="javascript:window.close();"><img src="resources/images/iconza/royalblue/undo_32x32.png" border="0"></a></td>
		<td width="100%">
			<h1 class='page_title'>
			
			<?php if ($this->_tpl_vars['_PAGER'] && $this->_tpl_vars['_PAGER']->hasPrevious()): ?>
			<a class="link" href="?_operation=listModuleRecords&module=<?php echo $this->_tpl_vars['_MODULE']->name(); ?>
&page=<?php echo $this->_tpl_vars['_PAGER']->previous(); ?>
&search=<?php echo $this->_tpl_vars['_SEARCH']; ?>
"><img src="resources/images/iconza/yellow/left_arrow_24x24.png" border="0"></a>
			<?php else: ?>
			<a class="link" href="javascript:void(0);"><img src="resources/images/iconza/white/left_arrow_24x24.png" border="0"></a>
			<?php endif; ?>
			
			<?php echo $this->_tpl_vars['_MODULE']->label(); ?>

			
			<?php if ($this->_tpl_vars['_PAGER'] && $this->_tpl_vars['_PAGER']->hasNext ( count ( $this->_tpl_vars['_RECORDS'] ) )): ?>
			<a class="link" href="?_operation=listModuleRecords&module=<?php echo $this->_tpl_vars['_MODULE']->name(); ?>
&page=<?php echo $this->_tpl_vars['_PAGER']->next(); ?>
&search=<?php echo $this->_tpl_vars['_SEARCH']; ?>
"><img src="resources/images/iconza/yellow/right_arrow_24x24.png" border="0"></a>
			<?php else: ?>
			<a class="link" href="javascript:void(0);"><img src="resources/images/iconza/white/right_arrow_24x24.png" border="0"></a>
			<?php endif; ?>
			
			</h1>
		</td>
		<td align="right" style="padding-right: 5px;"><a class="link" href="javascript:void(0);" onclick="$fnT('__listview__', '__searchbox__'); $fnFocus('__searchbox__q_');" target="_self"><img src="resources/images/iconza/yellow/lens_32x32.png" border="0"></a></td>
	</tr>
	
	<tr>
		<td colspan="3">	
		
			<table width=100% cellpadding=0 cellspacing=0 border=0 class="table_list">
				<?php $_from = $this->_tpl_vars['_RECORDS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_RECORD']):
?>
				<tr>
				<td width="100%">
					<a href="?_operation=fetchRecordWithGrouping&record=<?php echo $this->_tpl_vars['_RECORD']->id(); ?>
" target="_self"><?php echo $this->_tpl_vars['_RECORD']->label(); ?>
</a>
				</td>
				<td>
					<a href="?_operation=fetchRecordWithGrouping&record=<?php echo $this->_tpl_vars['_RECORD']->id(); ?>
" target="_self" class="link_rhook"><img src="resources/images/iconza/royalblue/right_arrow_16x16.png" border="0"></a>								
				</td>
				</tr>
				
				<?php endforeach; else: ?>
				
				<tr class="info">
				<td width=25% align="right">
					<img src="resources/images/iconza/royalblue/info_24x24.png" border=0 />
				</td>
				<td width=100% align="left" valign="center">
					<?php if ($this->_tpl_vars['_PAGER']->hasPrevious()): ?>
					<p>No more records found.</p>
					<?php else: ?>
					<p>No records available.</p>
					<?php endif; ?>
				</td>
				</tr>
				
				<?php endif; unset($_from); ?>
			</table>
		
		</td>
	</tr>
	</table>
</div>

<div id="__searchbox__" <?php if ($this->_tpl_vars['_MODE'] != 'search'): ?>style='display:none;'<?php endif; ?>>
	<table width=100% cellpadding=0 cellspacing=0 border=0>
	<tr class="toolbar">
		<td><a class="link" href="?_operation=searchConfig&module=<?php echo $this->_tpl_vars['_MODULE']->name(); ?>
" target="_self"><img src="resources/images/iconza/yellow/wrench_32x32.png" border="0"></a></td>
		<td width="100%">
			<h1 class='page_title'>
			Search <?php echo $this->_tpl_vars['_MODULE']->label(); ?>

			</h1>
		</td>
		<td align="right" style="padding-right: 5px;"><a class="link" href="javascript:void(0);" onclick="$fnT('__searchbox__','__listview__');"><img src="resources/images/iconza/yellow/zoom_out_32x32.png" border="0"></a></td>
	</tr>
	
	<tr>
		<td colspan=3 align="center">
		
			<form action="index.php" method="GET" onsubmit="if(this.search.value == '') return false;">
				<input type="hidden" name="_operation" value="listModuleRecords" />
				<input type="hidden" name="module" value="<?php echo $this->_tpl_vars['_MODULE']->name(); ?>
" />
				<input id='__searchbox__q_' type="text" name="search" class="searchbox" value="<?php echo $this->_tpl_vars['_SEARCH']; ?>
"/>
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