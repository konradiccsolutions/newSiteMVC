<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<HEAD>
<TITLE>Support Period has Expired</TITLE>
	<link rel="stylesheet" type="text/css" href="main.css"/>
	<link rel="stylesheet" type="text/css" href="ICC.css">
	<link rel="stylesheet" href="css/menu.css">

	<script type="text/javascript" src="stmenu.js"></script>
<style fprolloverstyle>a:hover      { color: #FF0000; font-weight: bold }

</style>
<style type="text/css">
.style1 {
				font-family: Arial, Helvetica, sans-serif;
				color: #012346;
				border-style: none;
				border-width: medium;
}
.style2 {
				border-width: 0px;
}
.style4 {
				text-align: center;
}
.style5 {
				text-align: center;
				font-size: small;
}
</style>
</head>

<body>
   <!-- Begin Wrapper -->
   <div id="wrapper">
   
         <!-- Begin Header -->
		 <!-- End Header -->

<body bgcolor="#FFFFFF" text="#000000" marginwidth="0" marginheight="0" link="#0B557F" vlink="#666666" 

alink="#CC9900">

<!-- outer table to replicate old frameset -->

<div align="center">

<table cellspacing="0" cellpadding="0" border=0 bordercolor="#ffffff" class="style2">
        
<!-- end of new frameset section -->

  <tr>
      <td style="vertical-align: top; " bordercolor="#012346" class="style1">
	  <div style="margin: 10px;" class="style4">


<script language=javascript>
	parent.window.document.title = "Your Support Period has Expired"
</script>

<H2 class="style4">Support Period Expired</H2>
<?php
	   echo "<p>Your support period expired on ".date("d F Y", strtotime($_SESSION['SESS_EXPIRYDATE']))."</p>";
?>

<p class="style5">Please contact <a target="_top" href="http://www.iccsolutions.com/contactus/sales/index.php">ICC Solutions</a> to extend your support period.</p>

</div>
</td>
</tr>
</table>

</div>

</BODY>
</HTML>