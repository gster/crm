<?php /* Smarty version 2.6.18, created on 2013-01-21 09:20:12
         compiled from modules/Mobile/generic/Login.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/Mobile/generic/Header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<body>

<table width=100% cellpadding=0 cellspacing=0 border=0>
<tr>
	<td>
		<h1 class='page_title'>vtiger CRM</h1>
	</td>
</tr>

<tr>
	<td>	
		<form method="post" action="index.php?_operation=loginAndFetchModules">
		
		<table width=100% cellpadding=5 cellspacing=0 border=0 class="panel_login">
		<tr>
			<td colspan="2">
				<?php if ($this->_tpl_vars['_ERR']): ?><p class='error'><?php echo $this->_tpl_vars['_ERR']; ?>
</p>
				<?php else: ?><p>Please login to proceed...</p><?php endif; ?>
			</td>
		</tr>
		<tr>
			<td width="40px">Username</td>
			<td><input type="text" name="username" value=""/></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" value=""/></td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" value="Login" class="button">
			</td>
		</tr>
		</table>

		</form>
	</td>
</tr>
</table>

</body>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/Mobile/generic/Footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>