<!DOCTYPE html>
<html>

<head>
<title>Redagavimas</title> 
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<body onload="ajaxLoad()" > 

<script type="text/javascript" src="TinyMce/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript"> 
tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",

		// Theme options
		theme_advanced_buttons1 : "save,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,forecolor,backcolor,",
		theme_advanced_buttons2 : "styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons3 : "bullist,numlist,|,outdent,indent,blockquote,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",
		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Style formats
		style_formats : [
			{title : 'Bold text', inline : 'b'},
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		],

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>

</head>
<body>

<form method="post" action="index16.php">
  <div>
 <textarea id="content" name="content" style="height: 562px; width: 494px">  
<?php

$con = mysql_connect('localhost', 'if080046', 'ievukas');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("if080046", $con);

$result = mysql_query("SELECT * FROM informacija where id=15");
while($row = mysql_fetch_array($result))
  {
  echo $row['info'];
  }
mysql_close($con)

?>
 
  </textarea>
  </div>
  

 
</form>


</body>
</html>


