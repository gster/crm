<?php /* Smarty version 2.6.18, created on 2013-01-25 08:15:46
         compiled from RelatedListContents.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'getTranslatedString', 'RelatedListContents.tpl', 140, false),array('modifier', 'replace', 'RelatedListContents.tpl', 149, false),array('modifier', 'vtiger_imageurl', 'RelatedListContents.tpl', 150, false),array('modifier', 'in_array', 'RelatedListContents.tpl', 180, false),)), $this); ?>
<script type='text/javascript' src='include/js/Mail.js'></script>
<script type='text/javascript'>
<?php echo '

function isRelatedListBlockLoaded(id,urldata){
	var elem = document.getElementById(id);
	if(elem == null || typeof elem == \'undefined\' || urldata.indexOf(\'order_by\') != -1 ||
		urldata.indexOf(\'start\') != -1 || urldata.indexOf(\'withCount\') != -1){
		return false;
	}
	var tables = elem.getElementsByTagName(\'table\');
	return tables.length > 0;
}

function loadRelatedListBlock(urldata,target,imagesuffix) {
	if( $(\'return_module\').value == \'Campaigns\'){
		var selectallActivation = $(imagesuffix+\'_selectallActivate\').value;
		var excludedRecords = $(imagesuffix+\'_excludedRecords\').value = $(imagesuffix+\'_excludedRecords\').value;
		var numofRows = $(imagesuffix+\'_numOfRows\').value;
	}
	var showdata = \'show_\'+imagesuffix;
	var showdata_element = $(showdata);

	var hidedata = \'hide_\'+imagesuffix;
	var hidedata_element = $(hidedata);
	if(isRelatedListBlockLoaded(target,urldata) == true){
		$(target).show();
		showdata_element.hide();
      	hidedata_element.show();
		$(\'delete_\'+imagesuffix).show();
		return;
	}
	var indicator = \'indicator_\'+imagesuffix;
	var indicator_element = $(indicator);
	indicator_element.show();
	$(\'delete_\'+imagesuffix).show();
	
	var target_element = $(target);
	
	new Ajax.Request(
		\'index.php\',
        {queue: {position: \'end\', scope: \'command\'},
                method: \'post\',
                postBody: urldata,
                onComplete: function(response) {
					var responseData = trim(response.responseText);
      				target_element.update(responseData);
					target_element.show();
      				showdata_element.hide();
      				hidedata_element.show();
      				indicator_element.hide();
					if($(\'return_module\').value == \'Campaigns\'){
						var obj = document.getElementsByName(imagesuffix+\'_selected_id\');
						var relatedModule = imagesuffix.replace(\'Campaigns_\',"");
						$(relatedModule+\'_count\').innerHTML = numofRows;
						if(selectallActivation == \'true\'){
							$(imagesuffix+\'_selectallActivate\').value=\'true\';
							$(imagesuffix+\'_linkForSelectAll\').show();
							$(imagesuffix+\'_selectAllRec\').style.display=\'none\';
							$(imagesuffix+\'_deSelectAllRec\').style.display=\'inline\';
							var exculdedArray=excludedRecords.split(\';\');
							if (obj) {
								var viewForSelectLink = showSelectAllLink(obj,exculdedArray);
								$(imagesuffix+\'_selectCurrentPageRec\').checked = viewForSelectLink;
								$(imagesuffix+\'_excludedRecords\').value = $(imagesuffix+\'_excludedRecords\').value+excludedRecords;
							}
						}else{
							$(imagesuffix+\'_linkForSelectAll\').hide();
							rel_toggleSelect(false,imagesuffix+\'_selected_id\',relatedModule);
						}
						updateParentCheckbox(obj,imagesuffix);
					}
				}
        }
	);
}

function hideRelatedListBlock(target, imagesuffix) {
	
	var showdata = \'show_\'+imagesuffix;
	var showdata_element = $(showdata);
	
	var hidedata = \'hide_\'+imagesuffix;
	var hidedata_element = $(hidedata);
	
	var target_element = $(target);
	if(target_element){
		target_element.hide();
	}
	hidedata_element.hide();
	showdata_element.show();
	$(\'delete_\'+imagesuffix).hide();
}

function disableRelatedListBlock(urldata,target,imagesuffix){
	var showdata = \'show_\'+imagesuffix;
	var showdata_element = $(showdata);

	var hidedata = \'hide_\'+imagesuffix;
	var hidedata_element = $(hidedata);

	var indicator = \'indicator_\'+imagesuffix;
	var indicator_element = $(indicator);
	indicator_element.show();
	
	var target_element = $(target);
	new Ajax.Request(
		\'index.php\',
        {queue: {position: \'end\', scope: \'command\'},
                method: \'post\',
                postBody: urldata,
                onComplete: function(response) {
					var responseData = trim(response.responseText);
					target_element.hide();
					$(\'delete_\'+imagesuffix).hide();
      				hidedata_element.hide();
					showdata_element.show();
      				indicator_element.hide();
				}
        }
	);
}

'; ?>

</script>

<?php $_from = $this->_tpl_vars['RELATEDLISTS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['header'] => $this->_tpl_vars['detail']):
?>

<?php $this->assign('rel_mod', $this->_tpl_vars['header']); ?>
<?php $this->assign('HEADERLABEL', getTranslatedString($this->_tpl_vars['header'], $this->_tpl_vars['rel_mod'])); ?>

<table width="100%" cellspacing="0" cellpadding="0" border="0" class="small lvt">
	<tr>
		<td class="dvInnerHeader">
			<div style="font-weight: bold;height: 1.75em;">
				<span>
					<a href="javascript:loadRelatedListBlock(
						'module=<?php echo $this->_tpl_vars['MODULE']; ?>
&action=<?php echo $this->_tpl_vars['MODULE']; ?>
Ajax&file=DetailViewAjax&record=<?php echo $this->_tpl_vars['ID']; ?>
&ajxaction=LOADRELATEDLIST&header=<?php echo $this->_tpl_vars['header']; ?>
&relation_id=<?php echo $this->_tpl_vars['detail']['relationId']; ?>
&actions=<?php echo $this->_tpl_vars['detail']['actions']; ?>
&parenttab=<?php echo $this->_tpl_vars['CATEGORY']; ?>
',
						'tbl_<?php echo $this->_tpl_vars['MODULE']; ?>
_<?php echo ((is_array($_tmp=$this->_tpl_vars['header'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '') : smarty_modifier_replace($_tmp, ' ', '')); ?>
','<?php echo $this->_tpl_vars['MODULE']; ?>
_<?php echo ((is_array($_tmp=$this->_tpl_vars['header'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '') : smarty_modifier_replace($_tmp, ' ', '')); ?>
');">
						<img id="show_<?php echo $this->_tpl_vars['MODULE']; ?>
_<?php echo ((is_array($_tmp=$this->_tpl_vars['header'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '') : smarty_modifier_replace($_tmp, ' ', '')); ?>
" src="<?php echo vtiger_imageurl('inactivate.gif', $this->_tpl_vars['THEME']); ?>
" style="border: 0px solid #000000;" alt="Display" title="Display"/>
					</a>
					<a href="javascript:hideRelatedListBlock('tbl_<?php echo $this->_tpl_vars['MODULE']; ?>
_<?php echo ((is_array($_tmp=$this->_tpl_vars['header'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '') : smarty_modifier_replace($_tmp, ' ', '')); ?>
','<?php echo $this->_tpl_vars['MODULE']; ?>
_<?php echo ((is_array($_tmp=$this->_tpl_vars['header'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '') : smarty_modifier_replace($_tmp, ' ', '')); ?>
');">
						<img id="hide_<?php echo $this->_tpl_vars['MODULE']; ?>
_<?php echo ((is_array($_tmp=$this->_tpl_vars['header'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '') : smarty_modifier_replace($_tmp, ' ', '')); ?>
" src="<?php echo vtiger_imageurl('activate.gif', $this->_tpl_vars['THEME']); ?>
" style="border: 0px solid #000000;display:none;" alt="Display" title="Display"/>
					</a>					
				</span>
				&nbsp;<?php echo $this->_tpl_vars['HEADERLABEL']; ?>
&nbsp;
				<img id="indicator_<?php echo $this->_tpl_vars['MODULE']; ?>
_<?php echo ((is_array($_tmp=$this->_tpl_vars['header'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '') : smarty_modifier_replace($_tmp, ' ', '')); ?>
" style="display:none;" src="<?php echo vtiger_imageurl('vtbusy.gif', $this->_tpl_vars['THEME']); ?>
" border="0" align="absmiddle" />
				<div style="float: right;width: 2em;">
					<a href="javascript:disableRelatedListBlock(
						'module=<?php echo $this->_tpl_vars['MODULE']; ?>
&action=<?php echo $this->_tpl_vars['MODULE']; ?>
Ajax&file=DetailViewAjax&ajxaction=DISABLEMODULE&relation_id=<?php echo $this->_tpl_vars['detail']['relationId']; ?>
&header=<?php echo $this->_tpl_vars['header']; ?>
',
						'tbl_<?php echo $this->_tpl_vars['MODULE']; ?>
_<?php echo ((is_array($_tmp=$this->_tpl_vars['header'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '') : smarty_modifier_replace($_tmp, ' ', '')); ?>
','<?php echo $this->_tpl_vars['MODULE']; ?>
_<?php echo ((is_array($_tmp=$this->_tpl_vars['header'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '') : smarty_modifier_replace($_tmp, ' ', '')); ?>
');">
						<img id="delete_<?php echo $this->_tpl_vars['MODULE']; ?>
_<?php echo ((is_array($_tmp=$this->_tpl_vars['header'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '') : smarty_modifier_replace($_tmp, ' ', '')); ?>
" style="display:none;" src="<?php echo vtiger_imageurl('windowMinMax.gif', $this->_tpl_vars['THEME']); ?>
" border="0" align="absmiddle" />
					</a>
				</div>
				<?php if ($this->_tpl_vars['MODULE'] == 'Campaigns'): ?>
				<input id="<?php echo $this->_tpl_vars['MODULE']; ?>
_<?php echo ((is_array($_tmp=$this->_tpl_vars['header'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '') : smarty_modifier_replace($_tmp, ' ', '')); ?>
_numOfRows" type="hidden" value="">
				<input id="<?php echo $this->_tpl_vars['MODULE']; ?>
_<?php echo ((is_array($_tmp=$this->_tpl_vars['header'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '') : smarty_modifier_replace($_tmp, ' ', '')); ?>
_excludedRecords" type="hidden" value="">
				<input id="<?php echo $this->_tpl_vars['MODULE']; ?>
_<?php echo ((is_array($_tmp=$this->_tpl_vars['header'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '') : smarty_modifier_replace($_tmp, ' ', '')); ?>
_selectallActivate" type="hidden" value="false">
				<?php endif; ?>
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div id="tbl_<?php echo $this->_tpl_vars['MODULE']; ?>
_<?php echo ((is_array($_tmp=$this->_tpl_vars['header'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '') : smarty_modifier_replace($_tmp, ' ', '')); ?>
"></div>
		</td>
	</tr>
</table>
<br />
<?php if ($this->_tpl_vars['SELECTEDHEADERS'] != '' && ((is_array($_tmp=$this->_tpl_vars['header'])) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['SELECTEDHEADERS']) : in_array($_tmp, $this->_tpl_vars['SELECTEDHEADERS']))): ?>
<script type='text/javascript'>
if(typeof('Event') != 'undefined') {
<?php if ($_REQUEST['ajax'] != 'true'): ?>
	Event.observe(window, 'load', function(){
		loadRelatedListBlock('module=<?php echo $this->_tpl_vars['MODULE']; ?>
&action=<?php echo $this->_tpl_vars['MODULE']; ?>
Ajax&file=DetailViewAjax&record=<?php echo $this->_tpl_vars['ID']; ?>
&ajxaction=LOADRELATEDLIST&header=<?php echo $this->_tpl_vars['header']; ?>
&relation_id=<?php echo $this->_tpl_vars['detail']['relationId']; ?>
&actions=<?php echo $this->_tpl_vars['detail']['actions']; ?>
&parenttab=<?php echo $this->_tpl_vars['CATEGORY']; ?>
','tbl_<?php echo $this->_tpl_vars['MODULE']; ?>
_<?php echo ((is_array($_tmp=$this->_tpl_vars['header'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '') : smarty_modifier_replace($_tmp, ' ', '')); ?>
','<?php echo $this->_tpl_vars['MODULE']; ?>
_<?php echo ((is_array($_tmp=$this->_tpl_vars['header'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '') : smarty_modifier_replace($_tmp, ' ', '')); ?>
');
	});
<?php else: ?>
	loadRelatedListBlock('module=<?php echo $this->_tpl_vars['MODULE']; ?>
&action=<?php echo $this->_tpl_vars['MODULE']; ?>
Ajax&file=DetailViewAjax&record=<?php echo $this->_tpl_vars['ID']; ?>
&ajxaction=LOADRELATEDLIST&header=<?php echo $this->_tpl_vars['header']; ?>
&relation_id=<?php echo $this->_tpl_vars['detail']['relationId']; ?>
&actions=<?php echo $this->_tpl_vars['detail']['actions']; ?>
&parenttab=<?php echo $this->_tpl_vars['CATEGORY']; ?>
','tbl_<?php echo $this->_tpl_vars['MODULE']; ?>
_<?php echo ((is_array($_tmp=$this->_tpl_vars['header'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '') : smarty_modifier_replace($_tmp, ' ', '')); ?>
','<?php echo $this->_tpl_vars['MODULE']; ?>
_<?php echo ((is_array($_tmp=$this->_tpl_vars['header'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '') : smarty_modifier_replace($_tmp, ' ', '')); ?>
');
<?php endif; ?>
}
</script>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>