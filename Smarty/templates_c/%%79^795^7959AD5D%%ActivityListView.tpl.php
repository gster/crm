<?php /* Smarty version 2.6.18, created on 2013-01-21 16:49:02
         compiled from ActivityListView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'ActivityListView.tpl', 191, false),array('modifier', 'getTranslatedString', 'ActivityListView.tpl', 393, false),array('function', 'html_options', 'ActivityListView.tpl', 225, false),)), $this); ?>

<script language="JavaScript" type="text/javascript" src="include/js/general.js"></script>
<script language="JavaScript" type="text/javascript" src="include/js/ListView.js"></script>
<script language="JavaScript" type="text/javascript" src="include/js/search.js"></script>
<script language="javascript" type="text/javascript">
var typeofdata = new Array();
typeofdata['E'] = ['e','n','s','ew','c','k'];
typeofdata['V'] = ['e','n','s','ew','c','k'];
typeofdata['N'] = ['e','n','l','g','m','h'];
typeofdata['NN'] = ['e','n','l','g','m','h'];
typeofdata['T'] = ['e','n','l','g','m','h'];
typeofdata['I'] = ['e','n','l','g','m','h'];
typeofdata['C'] = ['e','n'];
typeofdata['DT'] = ['e','n','l','g','m','h'];
typeofdata['D'] = ['e','n','l','g','m','h'];
var fLabels = new Array();
fLabels['e'] = "<?php echo $this->_tpl_vars['APP']['is']; ?>
";
fLabels['n'] = "<?php echo $this->_tpl_vars['APP']['is_not']; ?>
";
fLabels['s'] = "<?php echo $this->_tpl_vars['APP']['begins_with']; ?>
";
fLabels['ew'] = "<?php echo $this->_tpl_vars['APP']['ends_with']; ?>
";
fLabels['c'] = "<?php echo $this->_tpl_vars['APP']['contains']; ?>
";
fLabels['k'] = "<?php echo $this->_tpl_vars['APP']['does_not_contains']; ?>
";
fLabels['l'] = "<?php echo $this->_tpl_vars['APP']['less_than']; ?>
";
fLabels['g'] = "<?php echo $this->_tpl_vars['APP']['greater_than']; ?>
";
fLabels['m'] = "<?php echo $this->_tpl_vars['APP']['less_or_equal']; ?>
";
fLabels['h'] = "<?php echo $this->_tpl_vars['APP']['greater_or_equal']; ?>
";
var noneLabel;
<?php echo '
function trimfValues(value)
{
    var string_array;
    string_array = value.split(":");
    return string_array[4];
}

function updatefOptions(sel, opSelName) {
    var selObj = document.getElementById(opSelName);
    var fieldtype = null ;

    var currOption = selObj.options[selObj.selectedIndex];
    var currField = sel.options[sel.selectedIndex];
    
    var fld = currField.value.split(":");
    var tod = fld[4];
    if(currField.value != null && currField.value.length != 0)
    {
	fieldtype = trimfValues(currField.value);
	fieldtype = fieldtype.replace(/\\\\\'/g,\'\');
	ops = typeofdata[fieldtype];
	var off = 0;
	if(ops != null)
	{

		var nMaxVal = selObj.length;
		for(nLoop = 0; nLoop < nMaxVal; nLoop++)
		{
			selObj.remove(0);
		}
		for (var i = 0; i < ops.length; i++)
		{
			var label = fLabels[ops[i]];
			if (label == null) continue;
			var option = new Option (fLabels[ops[i]], ops[i]);
			selObj.options[i] = option;
			if (currOption != null && currOption.value == option.value)
			{
				option.selected = true;
			}
		}
	}
    }else
    {
	var nMaxVal = selObj.length;
	for(nLoop = 0; nLoop < nMaxVal; nLoop++)
	{
		selObj.remove(0);
	}
	selObj.options[0] = new Option (\'None\', \'\');
	if (currField.value == \'\') {
		selObj.options[0].selected = true;
	}
    }

}
'; ?>

</script>

<script language="javascript">
function checkgroup()
{

  if(document.change_ownerform_name.user_lead_owner[1].checked)
  {
          document.change_ownerform_name.lead_group_owner.style.display = "block";
          document.change_ownerform_name.lead_owner.style.display = "none";
  }
  else
  {
          document.change_ownerform_name.lead_owner.style.display = "block";
          document.change_ownerform_name.lead_group_owner.style.display = "none";
  }    
  
}
function callSearch(searchtype)
{
	for(i=1;i<=26;i++)
    	{
        	var data_td_id = 'alpha_'+ eval(i);
        	getObj(data_td_id).className = 'searchAlph';
    	}
   	gPopupAlphaSearchUrl = '';
	search_fld_val= document.basicSearch.search_field[document.basicSearch.search_field.selectedIndex].value;
	search_txt_val=encodeURIComponent(document.basicSearch.search_text.value);
        var urlstring = '';
        if(searchtype == 'Basic')
        {
                urlstring = 'search_field='+search_fld_val+'&searchtype=BasicSearch&search_text='+search_txt_val+'&';
        }
        else if(searchtype == 'Advanced')
        {
        		checkAdvancedFilter();
				var advft_criteria = $('advft_criteria').value;
				var advft_criteria_groups = $('advft_criteria_groups').value;
				urlstring += '&advft_criteria='+advft_criteria+'&advft_criteria_groups='+advft_criteria_groups+'&';
				urlstring += 'searchtype=advance&'
        }
    $("status").style.display="inline";
	new Ajax.Request(
		'index.php',
		{queue: {position: 'end', scope: 'command'},
			method: 'post',
			postBody:urlstring +'query=true&file=ListView&module=<?php echo $this->_tpl_vars['MODULE']; ?>
&action=<?php echo $this->_tpl_vars['MODULE']; ?>
Ajax&ajax=true&search=true',
			onComplete: function(response) {
								$("status").style.display="none";
                                result = response.responseText.split('&#&#&#');
                                $("ListViewContents").innerHTML= result[2];
                                if(result[1] != '')
                                        alert(result[1]);
				$('basicsearchcolumns').innerHTML = '';
			}
	       }
        );
	return false;

}
function alphabetic(module,url,dataid)
{
        for(i=1;i<=26;i++)
        {
                var data_td_id = 'alpha_'+ eval(i);
                getObj(data_td_id).className = 'searchAlph';

        }
        getObj(dataid).className = 'searchAlphselected';
	$("status").style.display="inline";
	new Ajax.Request(
		'index.php',
		{queue: {position: 'end', scope: 'command'},
			method: 'post',
			postBody: 'module='+module+'&action='+module+'Ajax&file=ListView&ajax=true&search=true&'+url,
			onComplete: function(response) {
				$("status").style.display="none";
				result = response.responseText.split('&#&#&#');
				$("ListViewContents").innerHTML= result[2];
				if(result[1] != '')
			                alert(result[1]);
				$('basicsearchcolumns').innerHTML = '';
			}
		}
	);
}

</script>

		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'Buttons_List.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                <div id="searchingUI" style="display:none;">
                                        <table border=0 cellspacing=0 cellpadding=0 width=100%>
                                        <tr>
                                                <td align=center>
                                                <img src="<?php echo vtiger_imageurl('searching.gif', $this->_tpl_vars['THEME']); ?>
" alt="<?php echo $this->_tpl_vars['APP']['LBL_SEARCHING']; ?>
"  title="<?php echo $this->_tpl_vars['APP']['LBL_SEARCHING']; ?>
">
                                                </td>
                                        </tr>
                                        </table>

                                </div>
                        </td>
                </tr>
                </table>
        </td>
</tr>
</table>

<table border=0 cellspacing=0 cellpadding=0 width=98% align=center>
     <tr>
        <td valign=top><img src="<?php echo vtiger_imageurl('showPanelTopLeft.gif', $this->_tpl_vars['THEME']); ?>
"></td>

	<td class="showPanelBg" valign="top" width=100% style="padding:10px;">
	 <!-- SIMPLE SEARCH -->
<div id="searchAcc" style="display: block;position:relative;">
<form name="basicSearch" method="post" action="index.php" onSubmit="return callSearch('Basic');">
<table width="98%" cellpadding="5" cellspacing="0"  class="searchUIBasic small" align="center" border=0>
	<tr>
		<td class="searchUIName small" nowrap align="left">
		<span class="moduleName"><?php echo $this->_tpl_vars['APP']['LBL_SEARCH']; ?>
</span><br><span class="small"><a href="#" onClick="fnhide('searchAcc');show('advSearch');document.basicSearch.searchtype.value='advance';"><?php echo $this->_tpl_vars['APP']['LBL_GO_TO']; ?>
 <?php echo $this->_tpl_vars['APP']['LNK_ADVANCED_SEARCH']; ?>
</a></span>
		<!-- <img src="<?php echo vtiger_imageurl('basicSearchLens.gif', $this->_tpl_vars['THEME']); ?>
" align="absmiddle" alt="<?php echo $this->_tpl_vars['APP']['LNK_BASIC_SEARCH']; ?>
" title="<?php echo $this->_tpl_vars['APP']['LNK_BASIC_SEARCH']; ?>
" border=0>&nbsp;&nbsp;-->
		</td>
		<td class="small" nowrap align=right><b><?php echo $this->_tpl_vars['APP']['LBL_SEARCH_FOR']; ?>
</b></td>
		<td class="small"><input type="text"  class="txtBox" style="width:120px" name="search_text"></td>
		<td class="small" nowrap><b><?php echo $this->_tpl_vars['APP']['LBL_IN']; ?>
</b>&nbsp;</td>
		<td class="small" nowrap>
			<div id="basicsearchcolumns_real">
                        <select name="search_field" id="bas_searchfield" class="txtBox" style="width:150px">
                         <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['SEARCHLISTHEADER']), $this);?>

                        </select>
                        </div>
                        <input type="hidden" name="searchtype" value="BasicSearch">
                        <input type="hidden" name="module" value="<?php echo $this->_tpl_vars['MODULE']; ?>
" id="curmodule">
						<input name="maxrecords" type="hidden" value="<?php echo $this->_tpl_vars['MAX_RECORDS']; ?>
" id='maxrecords'>
                        <input type="hidden" name="parenttab" value="<?php echo $this->_tpl_vars['CATEGORY']; ?>
">
			<input type="hidden" name="action" value="index">
                        <input type="hidden" name="query" value="true">
			<input type="hidden" name="search_cnt">
		</td>
		<td class="small" nowrap width=40% >
			  <input name="submit" type="button" class="crmbutton small create" onClick="callSearch('Basic');" value=" <?php echo $this->_tpl_vars['APP']['LBL_SEARCH_NOW_BUTTON']; ?>
 ">&nbsp;
			  
		</td>
		<td class="small" valign="top" onMouseOver="this.style.cursor='pointer';" onclick="moveMe('searchAcc');searchshowhide('searchAcc','advSearch')">[x]</td>
	</tr>
	<tr>
		<td colspan="7" align="center" class="small">
			<table border=0 cellspacing=0 cellpadding=0 width=100%>
				<tr>
                                                <?php echo $this->_tpl_vars['ALPHABETICAL']; ?>

                                </tr>
                        </table>
		</td>
	</tr>
</table>
</form>
</div>
<!-- ADVANCED SEARCH -->
<div id="advSearch" style="display:none;">
<form name="advSearch" method="post" action="index.php" onSubmit="return callSearch('Advanced');">
	<table  cellspacing=0 cellpadding=5 width=98% class="searchUIAdv1 small" align="center" border=0>
		<tr>
			<td class="searchUIName small" nowrap align="left"><span class="moduleName"><?php echo $this->_tpl_vars['APP']['LBL_SEARCH']; ?>
</span><br><span class="small"><a href="#" onClick="show('searchAcc');fnhide('advSearch')"><?php echo $this->_tpl_vars['APP']['LBL_GO_TO']; ?>
 <?php echo $this->_tpl_vars['APP']['LNK_BASIC_SEARCH']; ?>
</a></span></td>
			<td class="small" align="right" valign="top" onMouseOver="this.style.cursor='pointer';" onclick="moveMe('searchAcc');searchshowhide('searchAcc','advSearch')">[x]</td>
		</tr>
	</table>
	<table cellpadding="2" cellspacing="0" width="98%" align="center" class="searchUIAdv2 small" border=0>
		<tr>
			<td align="center" class="small" width=90%>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdvanceFilter.tpl', 'smarty_include_vars' => array('SOURCE' => 'customview','COLUMNS_BLOCK' => $this->_tpl_vars['FIELDNAMES'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</td>
		</tr>
	</table>
		
	<table border=0 cellspacing=0 cellpadding=5 width=98% class="searchUIAdv3 small" align="center">
		<tr>
			<td align="center" class="small"><input type="button" class="crmbutton small create" value=" <?php echo $this->_tpl_vars['APP']['LBL_SEARCH_NOW_BUTTON']; ?>
 " onClick="callSearch('Advanced');">
			</td>
		</tr>
	</table>
</form>
</div>
</div>		


<div class="small" style="padding: 10px;">
	<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
		<tr>
			<td>
				<table class="small" border="0" cellpadding="3" cellspacing="0" width="100%">
				<tr>
					<td class="dvtTabCache" style="width: 10px;" nowrap="nowrap">&nbsp;</td>
					<td class="dvtUnSelectedCell" align="center" nowrap="nowrap"><a href="index.php?action=index&module=Calendar&parenttab=<?php echo $this->_tpl_vars['CATEGORY']; ?>
"><?php echo $this->_tpl_vars['APP']['Calendar']; ?>
</a></td>
					<td class="dvtTabCache" style="width: 10px;">&nbsp;</td>
					<td class="dvtSelectedCell" align="center" nowrap="nowrap"><?php echo $this->_tpl_vars['MOD']['LBL_ALL_EVENTS_TODOS']; ?>
</td>
					<td class="dvtTabCache" style="width: 100%;">&nbsp;</td>
				</tr>
                                </table>
                        </td>
                </tr>
		<tr>
			<td align="left" valign="top">
				<table class="dvtContentSpace" border="0" cellpadding="3" cellspacing="0" width="100%">
					<tr>
						<td align="left">
							<!-- content cache -->
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td style="padding: 10px;">

	   <!-- PUBLIC CONTENTS STARTS-->
	   <div id="ListViewContents" class="small" style="width:100%;position:relative;">
     <form name="massdelete" method="POST">
     <input name='search_url' id="search_url" type='hidden' value='<?php echo $this->_tpl_vars['SEARCH_URL']; ?>
'>
     <input name="idlist" id="idlist" type="hidden">
     <input name="change_owner" type="hidden">
     <input name="change_status" type="hidden">
	 <input name="numOfRows" id="numOfRows" type="hidden" value="<?php echo $this->_tpl_vars['NUMOFROWS']; ?>
">
	 <input name="excludedRecords" type="hidden" id="excludedRecords" value="<?php echo $this->_tpl_vars['excludedRecords']; ?>
">
     <input name="allids" type="hidden" value="<?php echo $this->_tpl_vars['ALLIDS']; ?>
">
     <input name="selectedboxes" id="selectedboxes" type="hidden" value="<?php echo $this->_tpl_vars['SELECTEDIDS']; ?>
">
     <input name="allselectedboxes" id="allselectedboxes" type="hidden" value="<?php echo $this->_tpl_vars['ALLSELECTEDIDS']; ?>
">
     <input name="current_page_boxes" id="current_page_boxes" type="hidden" value="<?php echo $this->_tpl_vars['CURRENT_PAGE_BOXES']; ?>
">
               <table border=0 cellspacing=1 cellpadding=0 width=100% class="lvtBg">
	            <tr >
		      <td>
                            <table class="layerPopupTransport" width="100%">
                                <tr>
                                    <td class="small" nowrap width="25%">
						<?php echo $this->_tpl_vars['recordListRange']; ?>

					</td>
					
				 <td align="center">
				   <table border=0 cellspacing=0 cellpadding=0 class="small">
					<tr>
						<td style="padding-left:5px;padding-right:5px">
                                    <b><font size =2><?php echo $this->_tpl_vars['APP']['LBL_VIEW']; ?>
</font></b> <SELECT NAME="viewname" id="viewname" class="small" onchange="showDefaultCustomView(this,'<?php echo $this->_tpl_vars['MODULE']; ?>
','<?php echo $this->_tpl_vars['CATEGORY']; ?>
')"><?php echo $this->_tpl_vars['CUSTOMVIEW_OPTION']; ?>
</SELECT>
                        </td>
                        <td>
                            <?php if ($this->_tpl_vars['ALL'] == 'All'): ?>
								<a href="index.php?module=<?php echo $this->_tpl_vars['MODULE']; ?>
&action=CustomView&parenttab=<?php echo $this->_tpl_vars['CATEGORY']; ?>
"><?php echo $this->_tpl_vars['APP']['LNK_CV_CREATEVIEW']; ?>
</a>
								<span class="small">|</span>
								<span class="small" disabled><?php echo $this->_tpl_vars['APP']['LNK_CV_EDIT']; ?>
</span>
								<span class="small">|</span>
                            	<span class="small" disabled><?php echo $this->_tpl_vars['APP']['LNK_CV_DELETE']; ?>
</span></td>
						    <?php else: ?>
								<a href="index.php?module=<?php echo $this->_tpl_vars['MODULE']; ?>
&action=CustomView&parenttab=<?php echo $this->_tpl_vars['CATEGORY']; ?>
"><?php echo $this->_tpl_vars['APP']['LNK_CV_CREATEVIEW']; ?>
</a>
								<span class="small">|</span>
                                <a href="index.php?module=<?php echo $this->_tpl_vars['MODULE']; ?>
&action=CustomView&record=<?php echo $this->_tpl_vars['VIEWID']; ?>
&parenttab=<?php echo $this->_tpl_vars['CATEGORY']; ?>
"><?php echo $this->_tpl_vars['APP']['LNK_CV_EDIT']; ?>
</a>
                                <span class="small">|</span>
								<a href="javascript:confirmdelete('index.php?module=CustomView&action=Delete&dmodule=<?php echo $this->_tpl_vars['MODULE']; ?>
&record=<?php echo $this->_tpl_vars['VIEWID']; ?>
&parenttab=<?php echo $this->_tpl_vars['CATEGORY']; ?>
')"><?php echo $this->_tpl_vars['APP']['LNK_CV_DELETE']; ?>
</a>
						    <?php endif; ?>
							<?php if ($this->_tpl_vars['CUSTOMVIEW_PERMISSION']['ChangedStatus'] != '' && $this->_tpl_vars['CUSTOMVIEW_PERMISSION']['Label'] != ''): ?>
								<span class="small">|</span>
							   		<a href="#" id="customstatus_id" onClick="ChangeCustomViewStatus(<?php echo $this->_tpl_vars['VIEWID']; ?>
,<?php echo $this->_tpl_vars['CUSTOMVIEW_PERMISSION']['Status']; ?>
,<?php echo $this->_tpl_vars['CUSTOMVIEW_PERMISSION']['ChangedStatus']; ?>
,'<?php echo $this->_tpl_vars['MODULE']; ?>
','<?php echo $this->_tpl_vars['CATEGORY']; ?>
')"><?php echo $this->_tpl_vars['CUSTOMVIEW_PERMISSION']['Label']; ?>
</a>
							<?php endif; ?>
						</td>
					</tr>
				   </table>
				 </td><!-- Page Navigation -->
					<td nowrap width="25%" align="right">
						<table border=0 cellspacing=0 cellpadding=0 class="small">
							<tr><?php echo $this->_tpl_vars['NAVIGATION']; ?>
</tr>
						</table>
	                </td>
                        </tr></table>
		         <table border=0 cellspacing=0 cellpadding=2 width=100% class="small">
			      <tr>
				 <td style="padding-right:20px" nowrap>
                                 <?php $_from = $this->_tpl_vars['BUTTONS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['button_check'] => $this->_tpl_vars['button_label']):
?>
                                        <?php if ($this->_tpl_vars['button_check'] == 'del'): ?>
                                             <input class="crmbutton small delete" type="button" value="<?php echo $this->_tpl_vars['button_label']; ?>
" onclick="return massDelete('<?php echo $this->_tpl_vars['MODULE']; ?>
')"/>
                                        <?php elseif ($this->_tpl_vars['button_check'] == 's_mail'): ?>
                                             <input class="crmbutton small edit" type="button" value="<?php echo $this->_tpl_vars['button_label']; ?>
" onclick="return eMail('<?php echo $this->_tpl_vars['MODULE']; ?>
',this);"/>
                                        <?php elseif ($this->_tpl_vars['button_check'] == 's_cmail'): ?>
                                             <input class="crmbutton small edit" type="submit" value="<?php echo $this->_tpl_vars['button_label']; ?>
" onclick="return massMail('<?php echo $this->_tpl_vars['MODULE']; ?>
')"/>
                                        <?php elseif ($this->_tpl_vars['button_check'] == 'c_status'): ?>
                                             <input class="crmbutton small edit" type="button" value="<?php echo $this->_tpl_vars['button_label']; ?>
" onclick="return change(this,'changestatus')"/>
					<?php elseif ($this->_tpl_vars['button_check'] == 'c_owner'): ?>
						<?php if ($this->_tpl_vars['MODULE'] != 'Documents' && $this->_tpl_vars['MODULE'] != 'Products' && $this->_tpl_vars['MODULE'] != 'Faq' && $this->_tpl_vars['MODULE'] != 'Vendors' && $this->_tpl_vars['MODULE'] != 'PriceBooks'): ?>
						     <input class="crmbutton small edit" type="button" value="<?php echo $this->_tpl_vars['button_label']; ?>
" onclick="return change(this,'changeowner')"/>
                                                <?php endif; ?>
                                        <?php endif; ?>

                                 <?php endforeach; endif; unset($_from); ?>						
                
		                						<?php if ($this->_tpl_vars['CUSTOM_LINKS'] && $this->_tpl_vars['CUSTOM_LINKS']['LISTVIEWBASIC']): ?>
							<?php $_from = $this->_tpl_vars['CUSTOM_LINKS']['LISTVIEWBASIC']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['CUSTOMLINK']):
?>
								<?php $this->assign('customlink_href', $this->_tpl_vars['CUSTOMLINK']->linkurl); ?>
								<?php $this->assign('customlink_label', $this->_tpl_vars['CUSTOMLINK']->linklabel); ?>
								<?php if ($this->_tpl_vars['customlink_label'] == ''): ?>
									<?php $this->assign('customlink_label', $this->_tpl_vars['customlink_href']); ?>
								<?php else: ?>
																		<?php $this->assign('customlink_label', getTranslatedString($this->_tpl_vars['customlink_label'], $this->_tpl_vars['CUSTOMLINK']->module())); ?>
								<?php endif; ?>
								<input class="crmbutton small edit" type="button" value="<?php echo $this->_tpl_vars['customlink_label']; ?>
" onclick="<?php echo $this->_tpl_vars['customlink_href']; ?>
" />
							<?php endforeach; endif; unset($_from); ?>
						<?php endif; ?>
						
												<?php if ($this->_tpl_vars['CUSTOM_LINKS'] && ! empty ( $this->_tpl_vars['CUSTOM_LINKS']['LISTVIEW'] )): ?>
							&nbsp;
							<a href="javascript:;" onmouseover="fnvshobj(this,'vtlib_customLinksLay');" onclick="fnvshobj(this,'vtlib_customLinksLay');">
									<b><?php echo $this->_tpl_vars['APP']['LBL_MORE']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_ACTIONS']; ?>
 <img src="<?php echo vtiger_imageurl('arrow_down.gif', $this->_tpl_vars['THEME']); ?>
" border="0"></b>
							</a>
							<div style="display: none; left: 193px; top: 106px;width:155px; position:absolute;" id="vtlib_customLinksLay" 
								onmouseout="fninvsh('vtlib_customLinksLay')" onmouseover="fnvshNrm('vtlib_customLinksLay')">
								<table bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr><td style="border-bottom: 1px solid rgb(204, 204, 204); padding: 5px;"><b><?php echo $this->_tpl_vars['APP']['LBL_MORE']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_ACTIONS']; ?>
 &#187;</b></td></tr>
								<tr>
									<td>
										<?php $_from = $this->_tpl_vars['CUSTOM_LINKS']['LISTVIEW']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['CUSTOMLINK']):
?>
											<?php $this->assign('customlink_href', $this->_tpl_vars['CUSTOMLINK']->linkurl); ?>
											<?php $this->assign('customlink_label', $this->_tpl_vars['CUSTOMLINK']->linklabel); ?>
											<?php if ($this->_tpl_vars['customlink_label'] == ''): ?>
												<?php $this->assign('customlink_label', $this->_tpl_vars['customlink_href']); ?>
											<?php else: ?>
																								<?php $this->assign('customlink_label', getTranslatedString($this->_tpl_vars['customlink_label'], $this->_tpl_vars['CUSTOMLINK']->module())); ?>
											<?php endif; ?>
											<a href="<?php echo $this->_tpl_vars['customlink_href']; ?>
" class="drop_down"><?php echo $this->_tpl_vars['customlink_label']; ?>
</a>
										<?php endforeach; endif; unset($_from); ?>
									</td>
								</tr>
								</table>
							</div>
						<?php endif; ?>
						                    </td>
       		       </tr>
			 </table>
                         <div  class="calDIV" style="overflow:auto;">
			 <table border=0 cellspacing=1 cellpadding=3 width=100% class="lvt small" class="small">
			      <tr>
             			 <td class="lvtCol"><input type="checkbox"  name="selectall" id="selectCurrentPageRec" onClick=toggleSelect_ListView(this.checked,"selected_id")></td>
				 <?php $_from = $this->_tpl_vars['LISTHEADER']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['listviewforeach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['listviewforeach']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['header']):
        $this->_foreach['listviewforeach']['iteration']++;
?>
        			 <td class="lvtCol"><?php echo $this->_tpl_vars['header']; ?>
</td>
			         <?php endforeach; endif; unset($_from); ?>
			      </tr>
				  <tr>
					  <td id="linkForSelectAll" class="linkForSelectAll" style="display:none;" colspan=15>
						  <span id="selectAllRec" class="selectall" style="display:inline;" onClick="toggleSelectAll_Records('<?php echo $this->_tpl_vars['MODULE']; ?>
',true,'selected_id')"><?php echo $this->_tpl_vars['APP']['LBL_SELECT_ALL']; ?>
 <span id="count"> </span> <?php echo $this->_tpl_vars['APP']['LBL_RECORDS_IN']; ?>
 <?php echo getTranslatedString($this->_tpl_vars['MODULE'], $this->_tpl_vars['MODULE']); ?>
</span>
						  <span id="deSelectAllRec" class="selectall" style="display:none;" onClick="toggleSelectAll_Records('<?php echo $this->_tpl_vars['MODULE']; ?>
',false,'selected_id')"><?php echo $this->_tpl_vars['APP']['LBL_DESELECT_ALL']; ?>
 <?php echo getTranslatedString($this->_tpl_vars['MODULE'], $this->_tpl_vars['MODULE']); ?>
</span>
					  </td>
				  </tr>
			      <?php $_from = $this->_tpl_vars['LISTENTITY']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['entity_id'] => $this->_tpl_vars['entity']):
?>
			      <tr bgcolor=white onMouseOver="this.className='lvtColDataHover'" onMouseOut="this.className='lvtColData'" id="row_<?php echo $this->_tpl_vars['entity_id']; ?>
">
				 <td width="2%"><input type="checkbox" NAME="selected_id" id="<?php echo $this->_tpl_vars['entity_id']; ?>
" value= '<?php echo $this->_tpl_vars['entity_id']; ?>
' onClick=check_object(this); toggleSelectAll(this.name,"selectall")></td>
				 <?php $_from = $this->_tpl_vars['entity']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['data']):
?>	
				 <td><?php echo $this->_tpl_vars['data']; ?>
</td>
	                         <?php endforeach; endif; unset($_from); ?>
			      </tr>
			      <?php endforeach; else: ?>
				<tr><td style="background-color:#efefef;height:340px" align="center" colspan="<?php echo $this->_foreach['listviewforeach']['iteration']+1; ?>
">
						<div style="border: 3px solid rgb(153, 153, 153); background-color: rgb(255, 255, 255); width: 45%; position: relative; z-index: 10000000;">
							<?php $this->assign('vowel_conf', 'LBL_A'); ?>
							<?php $this->assign('MODULE_CREATE', $this->_tpl_vars['SINGLE_MOD']); ?>

							<?php if ($this->_tpl_vars['CHECK']['EditView'] == 'yes' && $this->_tpl_vars['MODULE'] != 'Emails' && $this->_tpl_vars['MODULE'] != 'Webmails'): ?>
							
							<table border="0" cellpadding="5" cellspacing="0" width="98%">
							<tr>
								<td rowspan="2" width="25%"><img src="<?php echo vtiger_imageurl('empty.jpg', $this->_tpl_vars['THEME']); ?>
" height="60" width="61"></td>
								<td style="border-bottom: 1px solid rgb(204, 204, 204);" nowrap="nowrap" width="75%"><span class="genHeaderSmall"><?php echo $this->_tpl_vars['APP']['LBL_NO']; ?>
 <?php echo $this->_tpl_vars['APP']['ACTIVITIES']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_FOUND']; ?>
 !</span></td>
							</tr>
							<tr>
							<td class="small" align="left" nowrap="nowrap"><?php echo $this->_tpl_vars['APP']['LBL_YOU_CAN_CREATE']; ?>
 <?php echo $this->_tpl_vars['APP'][$this->_tpl_vars['vowel_conf']]; ?>
 <?php echo $this->_tpl_vars['APP'][$this->_tpl_vars['MODULE_CREATE']]; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_NOW']; ?>
. <?php echo $this->_tpl_vars['APP']['LBL_CLICK_THE_LINK']; ?>
:<br>
									&nbsp;&nbsp;-<a href="index.php?module=<?php echo $this->_tpl_vars['MODULE']; ?>
&amp;action=EditView&amp;return_module=Calendar&amp;activity_mode=Events&amp;return_action=DetailView&amp;parenttab=<?php echo $this->_tpl_vars['CATEGORY']; ?>
"><?php echo $this->_tpl_vars['APP']['LBL_CREATE']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_AN']; ?>
 <?php echo $this->_tpl_vars['APP']['Event']; ?>
</a><br>
									&nbsp;&nbsp;-<a href="index.php?module=<?php echo $this->_tpl_vars['MODULE']; ?>
&amp;action=EditView&amp;return_module=Calendar&amp;activity_mode=Task&amp;return_action=DetailView&amp;parenttab=<?php echo $this->_tpl_vars['CATEGORY']; ?>
"><?php echo $this->_tpl_vars['APP']['LBL_CREATE']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_A']; ?>
 <?php echo $this->_tpl_vars['APP']['Todo']; ?>
</a>
								</td>
							</tr>
							</table> 
							<?php else: ?>
							<table border="0" cellpadding="5" cellspacing="0" width="98%">
							<tr>
								<td rowspan="2" width="25%"><img src="<?php echo vtiger_imageurl('empty.jpg', $this->_tpl_vars['THEME']); ?>
" height="60" width="61"></td>
								<td style="border-bottom: 1px solid rgb(204, 204, 204);" nowrap="nowrap" width="75%"><span class="genHeaderSmall"><?php echo $this->_tpl_vars['APP']['LBL_NO']; ?>
 <?php echo $this->_tpl_vars['APP']['ACTIVITIES']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_FOUND']; ?>
 !</span></td>
							</tr>
							<tr>
								<td class="small" align="left" nowrap="nowrap"><?php echo $this->_tpl_vars['APP']['LBL_YOU_ARE_NOT_ALLOWED_TO_CREATE']; ?>
 <?php echo $this->_tpl_vars['APP'][$this->_tpl_vars['vowel_conf']]; ?>
 <?php echo $this->_tpl_vars['APP'][$this->_tpl_vars['MODULE_CREATE']]; ?>
<br>
								</td>
							</tr>
							</table>
							<?php endif; ?>
						</div>					
				</td></tr>	
			      <?php endif; unset($_from); ?>
			 </table>
			 </div>
			 <table border=0 cellspacing=0 cellpadding=2 width=100%>
			      <tr>
				 <td style="padding-right:20px" nowrap>
                                 <?php $_from = $this->_tpl_vars['BUTTONS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['button_check'] => $this->_tpl_vars['button_label']):
?>
                                        <?php if ($this->_tpl_vars['button_check'] == 'del'): ?>
                                            <input class="crmbutton small delete" type="button" value="<?php echo $this->_tpl_vars['button_label']; ?>
" onclick="return massDelete('<?php echo $this->_tpl_vars['MODULE']; ?>
')"/>
                                        <?php elseif ($this->_tpl_vars['button_check'] == 's_mail'): ?>
                                             <input class="crmbutton small edit" type="button" value="<?php echo $this->_tpl_vars['button_label']; ?>
" onclick="return eMail('<?php echo $this->_tpl_vars['MODULE']; ?>
',this)"/>
                                        <?php elseif ($this->_tpl_vars['button_check'] == 's_cmail'): ?>
                                             <input class="crmbutton small edit" type="submit" value="<?php echo $this->_tpl_vars['button_label']; ?>
" onclick="return massMail('<?php echo $this->_tpl_vars['MODULE']; ?>
')"/>
                                        <?php elseif ($this->_tpl_vars['button_check'] == 'c_status'): ?>
                                             <input class="crmbutton small edit" type="button" value="<?php echo $this->_tpl_vars['button_label']; ?>
" onclick="return change(this,'changestatus')"/>
					<?php elseif ($this->_tpl_vars['button_check'] == 'c_owner'): ?>
				                <?php if ($this->_tpl_vars['MODULE'] != 'Documents' && $this->_tpl_vars['MODULE'] != 'Products' && $this->_tpl_vars['MODULE'] != 'Faq' && $this->_tpl_vars['MODULE'] != 'Vendors' && $this->_tpl_vars['MODULE'] != 'PriceBooks'): ?>
                                                     <input class="crmbutton small edit" type="button" value="<?php echo $this->_tpl_vars['button_label']; ?>
" onclick="return change(this,'changeowner')"/>
                                                <?php endif; ?>
                                        <?php endif; ?>

                                 <?php endforeach; endif; unset($_from); ?>
						
												<?php if ($this->_tpl_vars['CUSTOM_LINKS'] && $this->_tpl_vars['CUSTOM_LINKS']['LISTVIEWBASIC']): ?>
							<?php $_from = $this->_tpl_vars['CUSTOM_LINKS']['LISTVIEWBASIC']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['CUSTOMLINK']):
?>
								<?php $this->assign('customlink_href', $this->_tpl_vars['CUSTOMLINK']->linkurl); ?>
								<?php $this->assign('customlink_label', $this->_tpl_vars['CUSTOMLINK']->linklabel); ?>
								<?php if ($this->_tpl_vars['customlink_label'] == ''): ?>
									<?php $this->assign('customlink_label', $this->_tpl_vars['customlink_href']); ?>
								<?php else: ?>
																		<?php $this->assign('customlink_label', getTranslatedString($this->_tpl_vars['customlink_label'], $this->_tpl_vars['CUSTOMLINK']->module())); ?>
								<?php endif; ?>
								<input class="crmbutton small edit" type="button" value="<?php echo $this->_tpl_vars['customlink_label']; ?>
" onclick="<?php echo $this->_tpl_vars['customlink_href']; ?>
" />
							<?php endforeach; endif; unset($_from); ?>
						<?php endif; ?>
						
												<?php if ($this->_tpl_vars['CUSTOM_LINKS'] && ! empty ( $this->_tpl_vars['CUSTOM_LINKS']['LISTVIEW'] )): ?>
							&nbsp;
							<a href="javascript:;" onmouseover="fnvshobj(this,'vtlib_customLinksLay');" onclick="fnvshobj(this,'vtlib_customLinksLay');">
									<b><?php echo $this->_tpl_vars['APP']['LBL_MORE']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_ACTIONS']; ?>
 <img src="<?php echo vtiger_imageurl('arrow_down.gif', $this->_tpl_vars['THEME']); ?>
" border="0"></b>
							</a>
							<div style="display: none; left: 193px; top: 106px;width:155px; position:absolute;" id="vtlib_customLinksLay" 
								onmouseout="fninvsh('vtlib_customLinksLay')" onmouseover="fnvshNrm('vtlib_customLinksLay')">
								<table bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr><td style="border-bottom: 1px solid rgb(204, 204, 204); padding: 5px;"><b><?php echo $this->_tpl_vars['APP']['LBL_MORE']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_ACTIONS']; ?>
 &#187;</b></td></tr>
								<tr>
									<td>
										<?php $_from = $this->_tpl_vars['CUSTOM_LINKS']['LISTVIEW']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['CUSTOMLINK']):
?>
											<?php $this->assign('customlink_href', $this->_tpl_vars['CUSTOMLINK']->linkurl); ?>
											<?php $this->assign('customlink_label', $this->_tpl_vars['CUSTOMLINK']->linklabel); ?>
											<?php if ($this->_tpl_vars['customlink_label'] == ''): ?>
												<?php $this->assign('customlink_label', $this->_tpl_vars['customlink_href']); ?>
											<?php else: ?>
																								<?php $this->assign('customlink_label', getTranslatedString($this->_tpl_vars['customlink_label'], $this->_tpl_vars['CUSTOMLINK']->module())); ?>
											<?php endif; ?>
											<a href="<?php echo $this->_tpl_vars['customlink_href']; ?>
" class="drop_down"><?php echo $this->_tpl_vars['customlink_label']; ?>
</a>
										<?php endforeach; endif; unset($_from); ?>
									</td>
								</tr>
								</table>
							</div>
						<?php endif; ?>
						                    </td>
				 <td align="right" width=100%>
				   <table border=0 cellspacing=0 cellpadding=0 class="small">
					<tr>
                                           <?php echo $this->_tpl_vars['WORDTEMPLATEOPTIONS']; ?>
<?php echo $this->_tpl_vars['MERGEBUTTON']; ?>

					</tr>
				   </table>
				 </td>
			      </tr>
                              <tr>
                                    <td class="small" nowrap width="50%">
						<?php echo $this->_tpl_vars['recordListRange']; ?>

                                    </td>
                                    <!-- Page Navigation -->
                                    <td nowrap width="50%" align="right">
					<table border=0 cellspacing=0 cellpadding=0 class="small">
                                    		<tr><?php echo $this->_tpl_vars['NAVIGATION']; ?>
</tr>
					</table>
                                    </td>
                              </tr>
       		    </table>
		       </td>
		   </tr>
	    </table>

   </form>	
<?php echo $this->_tpl_vars['SELECT_SCRIPT']; ?>

	</div>
	 </td></tr></table>
	 </td></tr></table>
         </td></tr></table>
        </div>

     </td>
        <td valign=top><img src="<?php echo vtiger_imageurl('showPanelTopRight.gif', $this->_tpl_vars['THEME']); ?>
"></td>
   </tr>
</table>


<div id="changeowner" class="statechange">
<table width="100%" border="0" cellpadding="3" cellspacing="0">
<tr>
	<td class="genHeaderSmall" align="left" style="border-bottom:1px solid #CCCCCC;" width="60%"><?php echo $this->_tpl_vars['APP']['LBL_CHANGE_OWNER']; ?>
</td>
	<td style="border-bottom: 1px solid rgb(204, 204, 204);">&nbsp;</td>
	<td align="right" style="border-bottom:1px solid #CCCCCC;" width="40%"><a href="javascript:fninvsh('changeowner')"><?php echo $this->_tpl_vars['APP']['LBL_CLOSE']; ?>
</a></td>
</tr>
<tr>
	<td colspan="3">&nbsp;</td>
</tr>
<tr>
	<td width="50%"><b><?php echo $this->_tpl_vars['APP']['LBL_TRANSFER_OWNERSHIP']; ?>
</b></td>
	<td width="2%"><b>:</b></td>
	<td width="48%">
	        <form name="change_ownerform_name">
		        <input type = "radio" id= "user_checkbox" name = "user_lead_owner"  <?php if ($this->_tpl_vars['CHANGE_GROUP_OWNER'] != ''): ?> onclick=checkgroup();<?php endif; ?>  checked><?php echo $this->_tpl_vars['APP']['LBL_USER']; ?>
&nbsp;
			<?php if ($this->_tpl_vars['CHANGE_GROUP_OWNER'] != ''): ?>
			<input type = "radio" id = "group_checkbox" name = "user_lead_owner" onclick=checkgroup(); ><?php echo $this->_tpl_vars['APP']['LBL_GROUP']; ?>
<br>
			<select name="lead_group_owner" id="lead_group_owner" class="detailedViewTextBox" style="display:none;">
                                <?php echo $this->_tpl_vars['CHANGE_GROUP_OWNER']; ?>

                        </select>
			<?php endif; ?>
			<select name="lead_owner" id="lead_owner" class="detailedViewTextBox">
				<?php echo $this->_tpl_vars['CHANGE_OWNER']; ?>

			</select>
		</form>
	</td>
</tr>
<tr><td colspan="3" style="border-bottom:1px dashed #CCCCCC;">&nbsp;</td></tr>
<tr>
	<td colspan="3" align="center">
	&nbsp;&nbsp;
	<input type="button" name="button" class="crmbutton small edit" value="<?php echo $this->_tpl_vars['APP']['LBL_UPDATE_OWNER']; ?>
" onClick="ajaxChangeStatus('owner')">
	<input type="button" name="button" class="crmbutton small cancel" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" onClick="fninvsh('changeowner')">
</td>
</tr>
</table>
</div>


<script>
<?php echo '

function ajaxChangeStatus(statusname)
{
	$("status").style.display="inline";
	var viewid = document.massdelete.viewname.value;
	var excludedRecords=document.getElementById("excludedRecords").value;
	var idstring = document.getElementById(\'allselectedboxes\').value;
	if(statusname == \'status\')
	{
		fninvsh(\'changestatus\');
		var url=\'&leadval=\'+document.getElementById(\'lead_status\').options[document.getElementById(\'lead_status\').options.selectedIndex].value;
		var urlstring ="module=Users&action=updateLeadDBStatus&return_module=Leads"+url+"&viewname="+viewid+"&idlist="+idstring+"&excludedRecords="+excludedRecords;
	}
	else if(statusname == \'owner\')
	{
		
	   if($("user_checkbox").checked)
	   {
		    fninvsh(\'changeowner\');
		    var url=\'&owner_id=\'+document.getElementById(\'lead_owner\').options[document.getElementById(\'lead_owner\').options.selectedIndex].value+\'&owner_type=User\';
		    '; ?>

		        var urlstring ="module=Users&action=updateLeadDBStatus&return_module=<?php echo $this->_tpl_vars['MODULE']; ?>
"+url+"&viewname="+viewid+"&idlist="+idstring+"&excludedRecords="+excludedRecords;
		    <?php echo '
     }
    else
    {
        fninvsh(\'changeowner\');
		    var url=\'&owner_id=\'+document.getElementById(\'lead_group_owner\').options[document.getElementById(\'lead_group_owner\').options.selectedIndex].value+\'&owner_type=Group\';
	       '; ?>

		        var urlstring ="module=Users&action=updateLeadDBStatus&return_module=<?php echo $this->_tpl_vars['MODULE']; ?>
"+url+"&viewname="+viewid+"&idlist="+idstring+"&excludedRecords="+excludedRecords;
		    <?php echo '
    }

	}
	new Ajax.Request(
                \'index.php\',
                {queue: {position: \'end\', scope: \'command\'},
                        method: \'post\',
                        postBody: urlstring,
                        onComplete: function(response) {
                                $("status").style.display="none";
                                result = response.responseText.split(\'&#&#&#\');
                                $("ListViewContents").innerHTML= result[2];
                                if(result[1] != \'\')
                                        alert(result[1]);
				$(\'basicsearchcolumns\').innerHTML = \'\';
                        }
                }
        );
	
}
</script>
'; ?>

