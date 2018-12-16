<?php require_once('Connections/config_marks.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO `table 1` (AcdNumber, Name, `Case`, A1, A2, A3, A4, A5, A6, A7, A8, A9, A10, A11, A12, A13, A14, B1N, B1M, B1, B2N, B2M, B2, B3N, B3M, B3, B4N, B4M, B4, B5N, B5M, B5, C1, C2, C3, D1N, D1M, D1, D2N, D2M, D2, D3N, D3M, D3, D4N, D4M, D4, D5N, D5M, D5, D6N, D6M, D6, EE1, memo, Code, JK, prep, `first`, `second`, third, Code2) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['AcdNumber'], "int"),
                       GetSQLValueString($_POST['Name'], "text"),
                       GetSQLValueString($_POST['Case'], "text"),
                       GetSQLValueString($_POST['A1'], "int"),
                       GetSQLValueString($_POST['A2'], "int"),
                       GetSQLValueString($_POST['A3'], "int"),
                       GetSQLValueString($_POST['A4'], "int"),
                       GetSQLValueString($_POST['A5'], "int"),
                       GetSQLValueString($_POST['A6'], "int"),
                       GetSQLValueString($_POST['A7'], "int"),
                       GetSQLValueString($_POST['A8'], "int"),
                       GetSQLValueString($_POST['A9'], "int"),
                       GetSQLValueString($_POST['A10'], "int"),
                       GetSQLValueString($_POST['A11'], "text"),
                       GetSQLValueString($_POST['A12'], "text"),
                       GetSQLValueString($_POST['A13'], "text"),
                       GetSQLValueString($_POST['A14'], "text"),
                       GetSQLValueString($_POST['B1N'], "text"),
                       GetSQLValueString($_POST['B1M'], "text"),
                       GetSQLValueString($_POST['B1'], "text"),
                       GetSQLValueString($_POST['B2N'], "text"),
                       GetSQLValueString($_POST['B2M'], "text"),
                       GetSQLValueString($_POST['B2'], "text"),
                       GetSQLValueString($_POST['B3N'], "text"),
                       GetSQLValueString($_POST['B3M'], "text"),
                       GetSQLValueString($_POST['B3'], "text"),
                       GetSQLValueString($_POST['B4N'], "text"),
                       GetSQLValueString($_POST['B4M'], "text"),
                       GetSQLValueString($_POST['B4'], "text"),
                       GetSQLValueString($_POST['B5N'], "text"),
                       GetSQLValueString($_POST['B5M'], "text"),
                       GetSQLValueString($_POST['B5'], "text"),
                       GetSQLValueString($_POST['C1'], "text"),
                       GetSQLValueString($_POST['C2'], "text"),
                       GetSQLValueString($_POST['C3'], "text"),
                       GetSQLValueString($_POST['D1N'], "text"),
                       GetSQLValueString($_POST['D1M'], "text"),
                       GetSQLValueString($_POST['D1'], "text"),
                       GetSQLValueString($_POST['D2N'], "text"),
                       GetSQLValueString($_POST['D2M'], "text"),
                       GetSQLValueString($_POST['D2'], "text"),
                       GetSQLValueString($_POST['D3N'], "text"),
                       GetSQLValueString($_POST['D3M'], "text"),
                       GetSQLValueString($_POST['D3'], "text"),
                       GetSQLValueString($_POST['D4N'], "text"),
                       GetSQLValueString($_POST['D4M'], "text"),
                       GetSQLValueString($_POST['D4'], "text"),
                       GetSQLValueString($_POST['D5N'], "text"),
                       GetSQLValueString($_POST['D5M'], "text"),
                       GetSQLValueString($_POST['D5'], "text"),
                       GetSQLValueString($_POST['D6N'], "text"),
                       GetSQLValueString($_POST['D6M'], "text"),
                       GetSQLValueString($_POST['D6'], "text"),
                       GetSQLValueString($_POST['EE1'], "text"),
                       GetSQLValueString($_POST['memo'], "text"),
                       GetSQLValueString($_POST['Code'], "text"),
                       GetSQLValueString($_POST['JK'], "text"),
                       GetSQLValueString($_POST['prep'], "text"),
                       GetSQLValueString($_POST['first'], "text"),
                       GetSQLValueString($_POST['second'], "text"),
                       GetSQLValueString($_POST['third'], "text"),
                       GetSQLValueString($_POST['Code2'], "text"));

  mysql_select_db($database_config_marks, $config_marks);
  $Result1 = mysql_query($insertSQL, $config_marks) or die(mysql_error());

  $insertGoTo = "desplayst.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>النظام الالكترونى لاظهار نتائج الطلاب</title>
<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background-color: #4E5869;
	margin: 0;
	padding: 0;
	color: #000;
}

/* ~~ Element/tag selectors ~~ */
ul, ol, dl { /* Due to variations between browsers, it's best practices to zero padding and margin on lists. For consistency, you can either specify the amounts you want here, or on the list items (LI, DT, DD) they contain. Remember that what you do here will cascade to the .nav list unless you write a more specific selector. */
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 /* removing the top margin gets around an issue where margins can escape from their containing div. The remaining bottom margin will hold it away from any elements that follow. */
	padding-right: 15px;
	padding-left: 15px; /* adding the padding to the sides of the elements within the divs, instead of the divs themselves, gets rid of any box model math. A nested div with side padding can also be used as an alternate method. */
}
a img { /* this selector removes the default blue border displayed in some browsers around an image when it is surrounded by a link */
	border: none;
}

/* ~~ Styling for your site's links must remain in this order - including the group of selectors that create the hover effect. ~~ */
a:link {
	color:#414958;
	text-decoration: underline; /* unless you style your links to look extremely unique, it's best to provide underlines for quick visual identification */
}
a:visited {
	color: #4E5869;
	text-decoration: underline;
}
a:hover, a:active, a:focus { /* this group of selectors will give a keyboard navigator the same hover experience as the person using a mouse. */
	text-decoration: none;
}

/* ~~ this container surrounds all other divs giving them their percentage-based width ~~ */
.container {
	width: 80%;
	max-width: 1260px;/* a max-width may be desirable to keep this layout from getting too wide on a large monitor. This keeps line length more readable. IE6 does not respect this declaration. */
	min-width: 780px;/* a min-width may be desirable to keep this layout from getting too narrow. This keeps line length more readable in the side columns. IE6 does not respect this declaration. */
	background-color: #FFF;
	margin: 0 auto; /* the auto value on the sides, coupled with the width, centers the layout. It is not needed if you set the .container's width to 100%. */
}

/* ~~ the header is not given a width. It will extend the full width of your layout. It contains an image placeholder that should be replaced with your own linked logo ~~ */
.header {
	background-color: #6F7D94;
}

/* ~~ These are the columns for the layout. ~~ 

1) Padding is only placed on the top and/or bottom of the divs. The elements within these divs have padding on their sides. This saves you from any "box model math". Keep in mind, if you add any side padding or border to the div itself, it will be added to the width you define to create the *total* width. You may also choose to remove the padding on the element in the div and place a second div within it with no width and the padding necessary for your design.

2) No margin has been given to the columns since they are all floated. If you must add margin, avoid placing it on the side you're floating toward (for example: a right margin on a div set to float right). Many times, padding can be used instead. For divs where this rule must be broken, you should add a "display:inline" declaration to the div's rule to tame a bug where some versions of Internet Explorer double the margin.

3) Since classes can be used multiple times in a document (and an element can also have multiple classes applied), the columns have been assigned class names instead of IDs. For example, two sidebar divs could be stacked if necessary. These can very easily be changed to IDs if that's your preference, as long as you'll only be using them once per document.

4) If you prefer your nav on the left instead of the right, simply float these columns the opposite direction (all left instead of all right) and they'll render in reverse order. There's no need to move the divs around in the HTML source.

*/
.sidebar1 {
	float: right;
	width: 20%;
	background-color: #93A5C4;
	padding-bottom: 10px;
}
.content {
	padding: 10px 0;
	width: 80%;
		float: right;
}

/* ~~ This grouped selector gives the lists in the .content area space ~~ */
.content ul, .content ol { 
	padding: 0 15px 15px 40px; /* this padding mirrors the right padding in the headings and paragraph rule above. Padding was placed on the bottom for space between other elements on the lists and on the left to create the indention. These may be adjusted as you wish. */
}

/* ~~ The navigation list styles (can be removed if you choose to use a premade flyout menu like Spry) ~~ */
ul.nav {
	list-style: none; /* this removes the list marker */
	border-top: 1px solid #666; /* this creates the top border for the links - all others are placed using a bottom border on the LI */
	margin-bottom: 15px; /* this creates the space between the navigation on the content below */
}
ul.nav li {
	border-bottom: 1px solid #666; /* this creates the button separation */
}
ul.nav a, ul.nav a:visited { /* grouping these selectors makes sure that your links retain their button look even after being visited */
	padding: 5px 5px 5px 15px;
	display: block; /* this gives the link block properties causing it to fill the whole LI containing it. This causes the entire area to react to a mouse click. */
	text-decoration: none;
	background-color: #8090AB;
	color: #000;
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* this changes the background and text color for both mouse and keyboard navigators */
	background-color: #6F7D94;
	color: #FFF;
}

/* ~~ The footer ~~ */
.footer {
	padding: 10px 0;
	background-color: #6F7D94;
	position: relative;/* this gives IE6 hasLayout to properly clear */
	clear: both; /* this clear property forces the .container to understand where the columns end and contain them */
}

/* ~~ miscellaneous float/clear classes ~~ */
.fltrt {  /* this class can be used to float an element right in your page. The floated element must precede the element it should be next to on the page. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* this class can be used to float an element left in your page. The floated element must precede the element it should be next to on the page. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* this class can be placed on a <br /> or empty div as the final element following the last floated div (within the #container) if the #footer is removed or taken out of the #container */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
-->
</style><!--[if lte IE 7]>
<style>
.content { margin-right: -1px; } /* this 1px negative margin can be placed on any of the columns in this layout with the same corrective effect. */
ul.nav a { zoom: 1; }  /* the zoom property gives IE the hasLayout trigger it needs to correct extra whiltespace between the links */
</style>
<![endif]--></head>

<body>

<div class="container">
  <div class="header"><a href="#"><img src="images/logo.png" alt="Insert Logo Here" name="Insert_logo" width="773" height="203" id="Insert_logo" style="background-color: #8090AB; display:block;" /></a> 
  <!-- end .header --></div>
  <div class="sidebar1">
    <ul class="nav">
      <li>
        <div align="center"><strong> لوحة التحكم</strong></div>
     
      </li>
              <li>
                    <div align="right"><strong><a href="index.php">الرئيسية</a></strong></div>
      </li>
      <li>
        <div align="right"><a href="insertst.php"><strong>اضافة بيانات الطلاب</strong></a></div>
      </li>
      <li>
        <div align="right"><strong><a href="updatest.php">تعديل بيانات الطلاب</a></strong></div>
      </li>
      <li>
        <div align="right"><strong><a href="desplayst.php">عرض بيانات الطلاب</a></strong></div>
      </li>
            <li>
              <div align="right"><strong><a href="deletest.php">حذف  بيانات الطلاب</a></strong></div>
            </li>
                  <li>
                    <div align="right"><strong><a href="resultst.php">نتيجة الطلاب</a></strong></div>
                  </li>
    </ul>
    <p align="center">Eng Mohammed Ashiba</p>
    <!-- end .sidebar1 --></div>
  <div class="content">
    <h1 align="center">اضافة بيانات الطلاب</h1>
    <p align="center">ملاحظات هامة لاستخدام النظام </p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
      <table align="center">
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">AcdNumber:</td>
          <td><input type="text" name="AcdNumber" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Name:</td>
          <td><input type="text" name="Name" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Case:</td>
          <td><input type="text" name="Case" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">A1:</td>
          <td><input type="text" name="A1" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">A2:</td>
          <td><input type="text" name="A2" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">A3:</td>
          <td><input type="text" name="A3" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">A4:</td>
          <td><input type="text" name="A4" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">A5:</td>
          <td><input type="text" name="A5" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">A6:</td>
          <td><input type="text" name="A6" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">A7:</td>
          <td><input type="text" name="A7" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">A8:</td>
          <td><input type="text" name="A8" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">A9:</td>
          <td><input type="text" name="A9" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">A10:</td>
          <td><input type="text" name="A10" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">A11:</td>
          <td><input type="text" name="A11" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">A12:</td>
          <td><input type="text" name="A12" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">A13:</td>
          <td><input type="text" name="A13" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">A14:</td>
          <td><input type="text" name="A14" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">B1N:</td>
          <td><input type="text" name="B1N" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">B1M:</td>
          <td><input type="text" name="B1M" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">B1:</td>
          <td><input type="text" name="B1" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">B2N:</td>
          <td><input type="text" name="B2N" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">B2M:</td>
          <td><input type="text" name="B2M" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">B2:</td>
          <td><input type="text" name="B2" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">B3N:</td>
          <td><input type="text" name="B3N" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">B3M:</td>
          <td><input type="text" name="B3M" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">B3:</td>
          <td><input type="text" name="B3" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">B4N:</td>
          <td><input type="text" name="B4N" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">B4M:</td>
          <td><input type="text" name="B4M" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">B4:</td>
          <td><input type="text" name="B4" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">B5N:</td>
          <td><input type="text" name="B5N" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">B5M:</td>
          <td><input type="text" name="B5M" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">B5:</td>
          <td><input type="text" name="B5" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">C1:</td>
          <td><input type="text" name="C1" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">C2:</td>
          <td><input type="text" name="C2" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">C3:</td>
          <td><input type="text" name="C3" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">D1N:</td>
          <td><input type="text" name="D1N" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">D1M:</td>
          <td><input type="text" name="D1M" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">D1:</td>
          <td><input type="text" name="D1" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">D2N:</td>
          <td><input type="text" name="D2N" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">D2M:</td>
          <td><input type="text" name="D2M" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">D2:</td>
          <td><input type="text" name="D2" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">D3N:</td>
          <td><input type="text" name="D3N" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">D3M:</td>
          <td><input type="text" name="D3M" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">D3:</td>
          <td><input type="text" name="D3" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">D4N:</td>
          <td><input type="text" name="D4N" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">D4M:</td>
          <td><input type="text" name="D4M" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">D4:</td>
          <td><input type="text" name="D4" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">D5N:</td>
          <td><input type="text" name="D5N" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">D5M:</td>
          <td><input type="text" name="D5M" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">D5:</td>
          <td><input type="text" name="D5" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">D6N:</td>
          <td><input type="text" name="D6N" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">D6M:</td>
          <td><input type="text" name="D6M" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">D6:</td>
          <td><input type="text" name="D6" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">EE1:</td>
          <td><input type="text" name="EE1" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Memo:</td>
          <td><input type="text" name="memo" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Code:</td>
          <td><input type="text" name="Code" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">JK:</td>
          <td><input type="text" name="JK" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Prep:</td>
          <td><input type="text" name="prep" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">First:</td>
          <td><input type="text" name="first" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Second:</td>
          <td><input type="text" name="second" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Third:</td>
          <td><input type="text" name="third" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Code2:</td>
          <td><input type="text" name="Code2" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">&nbsp;</td>
          <td><input type="submit" value="اضافة طالب" /></td>
        </tr>
      </table>
      <input type="hidden" name="MM_insert" value="form1" />
    </form>
    <p>&nbsp;</p>
<p>&nbsp;</p>
    <p>&nbsp;</p>
    <!-- end .content --></div>
  <div class="footer">
    <p align="center"><strong>جميع الحقوق محفوظة لشركة الكترونى للبرمجيات - المهندس محمد عشيبة- 01029158619</strong></p>
    <!-- end .footer --></div>
<!-- end .container --></div>
</body>
</html>