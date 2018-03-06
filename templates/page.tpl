<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Customer Relationship Management</title>
	<link href="styles/style.css" rel="stylesheet" type="text/css">
	<!-- <link href="styles/dark.datetimepicker.css" rel="stylesheet" type="text/css"> -->
	<link href="styles/jquery/jquery-ui-1.7.2.custom.css" rel="stylesheet" type="text/css">
	<link href="styles/jquery/jquery.treeview.css" rel="stylesheet" type="text/css">
    { literal }

	<script type="text/javascript" src="scripts/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="scripts/jquery-ui-1.7.2.custom.min.js"></script>
	<script type="text/javascript" src="scripts/ui.core.js"></script>
	<script type="text/javascript" src="scripts/ui.tabs.js"></script>
	<script type="text/javascript" src="scripts/jquery.dataTables.js"></script>
	<script type="text/javascript" src="scripts/jquery.treeview.js"></script>
	<script type="text/javascript" src="scripts/monthDatepicker.js"></script>
	<script type="text/javascript" src="scripts/jquery.formatCurrency-1.4.0.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		
		$("#tabs").tabs();
		
		$("#datepicker").datepicker( { dateFormat: 'dd-mm-yy'{ /literal }{$datepicker_options}{ literal }});
		$("#datepicker2").datepicker( { dateFormat: 'dd-mm-yy'{ /literal }{$datepicker_options}{ literal }});
		
		$('#datepicker_months').monthDatepicker( { dateFormat: 'mm-yy'
		});
		
		/*$("#datepicker_months").datepicker( { 
			dateFormat: 'mm-yy',
			changeMonth: true,
			changeYear: true,
      		showButtonPanel: true,
      		onOpen: function() {
      			$("#ui-datepicker-div").addClass('noCalendar');
      		},
			onClose: function(dateText, inst) { 
				var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
				var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
				$(this).datepicker('setDate', new Date(year, month, 1));
			}
        });*/
		
		$('#table_organisations').dataTable( {
			bPaginate: false, 
			bLengthChange: false,
			"aoColumns": [
				{ "sType": "html" }
			],
			"oLanguage": {
				"sLengthMenu": "",
				"sZeroRecords": "",
				"sInfo": "",
				"sInfoEmpty": "",
				"sInfoFiltered": "",
				"sSearch": "Filter:"
			}
		} );
		
		$('#table_persons').dataTable( {
			bPaginate: false, 
			bLengthChange: false,
			"aoColumns": [
				{ "sType": "html" },
				{ "sType": "html" },
				{ "sType": "html" },
				{ "sType": "html" },
				{ "sType": "html" },
			],
			"oLanguage": {
				"sLengthMenu": "",
				"sZeroRecords": "",
				"sInfo": "",
				"sInfoEmpty": "",
				"sInfoFiltered": "",
				"sSearch": "Filter:"
			}
		} );
		
		$('#table_users').dataTable( {
			bPaginate: false, 
			bLengthChange: false,
			"aoColumns": [
				{ "sType": "html" }
			],
			"oLanguage": {
				"sLengthMenu": "",
				"sZeroRecords": "",
				"sInfo": "",
				"sInfoEmpty": "",
				"sInfoFiltered": "",
				"sSearch": "Filter:"
			}
		} );
		
		/*$('#table_todos').dataTable( {
			bPaginate: false, 
			bLengthChange: false,
			"aoColumns": [
				{ "sType": "html" },
				{ "sType": "html" },
				{ "sType": "html" },
				{ "sType": "html" }
			],
			"oLanguage": {
				"sLengthMenu": "",
				"sZeroRecords": "",
				"sInfo": "",
				"sInfoEmpty": "",
				"sInfoFiltered": "",
				"sSearch": "Filter:"
			}
		} );*/
		
		
		$("#export_filter").treeview( {
			collapsed: true,
			animated: "fast"
		} );
		
		$("#export_actions_filter").treeview( {
			collapsed: false,
			animated: "fast"
		} );
				
	});
	</script>
    <script type="text/javascript" src="scripts/functions.js"></script>
    <script type="text/javascript">
		function changeSelection(selectionlist) {
			list = document.getElementById(selectionlist);
			for(i=0;i<list.childNodes.length; i++) {
				node = list.childNodes[i];
				if (node.nodeName=="LI") {
					input = node.firstChild;
					if (input.type=="checkbox") {
						input.checked = !input.checked;
					}
				}
			}
		}
    </script>
	<script type="text/javascript"><!--//--><![CDATA[//><!--
	
	startList = function() {
		if (document.all&&document.getElementById) {
			navRoot = document.getElementById("menu_structure");
			for (i=0; i<navRoot.childNodes.length; i++) {
				node = navRoot.childNodes[i];
				if (node.nodeName=="LI") {
					node.onmouseover=function() {
						this.className+=" over";
					}
					node.onmouseout=function() {
						this.className=this.className.replace(" over", "");
					}
				}
			}
		}
	}
	window.onload=startList;
	
	//--><!]]></script>
	{ /literal }
</head>
<body>
	<div id="main_div">
		<div id="logo">
		</div>
		<div id="menu">
			{include file="menu.tpl"}
		</div>
		<div id="content">
			{ $message }
			{include file="$template.tpl"}
		</div>
	</div>
</body>
</html>