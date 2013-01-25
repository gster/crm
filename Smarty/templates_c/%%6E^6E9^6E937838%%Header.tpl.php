<?php /* Smarty version 2.6.18, created on 2013-01-21 09:20:12
         compiled from modules/Mobile/generic/Header.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
         "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link href="resources/images/appicon.jpg" rel="apple-touch-icon" />

<?php if ($this->_tpl_vars['IS_SAFARI']): ?>
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;"/>
<?php endif; ?>

<title><?php if ($this->_tpl_vars['TITLE']): ?><?php echo $this->_tpl_vars['TITLE']; ?>
<?php else: ?>vtiger CRM Mobile<?php endif; ?></title>

<link rel="stylesheet" type="text/css" href="resources/skins/<?php echo $this->_tpl_vars['SKIN']; ?>
" />
<script type="text/javascript" src="Mobile.js"></script>

</head>
