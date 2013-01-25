<?php /* Smarty version 2.6.18, created on 2013-01-24 03:40:03
         compiled from com_vtiger_workflow/EditWorkflowIncludes.tpl */ ?>

<script src="modules/<?php echo $this->_tpl_vars['module']->name; ?>
/resources/jquery-1.2.6.js" type="text/javascript" charset="utf-8"></script>
<script src="modules/<?php echo $this->_tpl_vars['module']->name; ?>
/resources/functional.js" type="text/javascript" charset="utf-8"></script>
<script src="modules/<?php echo $this->_tpl_vars['module']->name; ?>
/resources/json2.js" type="text/javascript" charset="utf-8"></script>
<script src="modules/<?php echo $this->_tpl_vars['module']->name; ?>
/resources/vtigerwebservices.js" type="text/javascript" charset="utf-8"></script>
<script src="modules/<?php echo $this->_tpl_vars['module']->name; ?>
/resources/parallelexecuter.js" type="text/javascript" charset="utf-8"></script>
<script src="modules/<?php echo $this->_tpl_vars['module']->name; ?>
/resources/fieldvalidator.js" type="text/javascript" charset="utf-8"></script>
<script src="modules/<?php echo $this->_tpl_vars['module']->name; ?>
/resources/fieldexpressionpopup.js" type="text/javascript" charset="utf-8"></script>
<script src="modules/<?php echo $this->_tpl_vars['module']->name; ?>
/resources/editworkflowscript.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
	jQuery.noConflict();
	fn.addStylesheet('modules/<?php echo $this->_tpl_vars['module']->name; ?>
/resources/style.css');
	var moduleName = '<?php echo $this->_tpl_vars['workflow']->moduleName; ?>
';
<?php if ($this->_tpl_vars['workflow']->test): ?>
	var conditions = JSON.parse('<?php echo $this->_tpl_vars['workflow']->test; ?>
');
<?php else: ?>
	var conditions = null;
<?php endif; ?>
	editworkflowscript(jQuery, conditions);
</script>