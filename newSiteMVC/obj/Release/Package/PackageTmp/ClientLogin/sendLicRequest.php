<!--#include file="clssfd.asp"-->
<!-- METADATA TYPE="typelib"
              FILE="C:\Program Files\Common Files\System\ado\msado15.dll" -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
<TITLE>Products owned by Client</TITLE>
<link rel="stylesheet" type="text/css" href="main.css"/>
<link rel="stylesheet" type="text/css" href="ICC.css">
	<link rel="stylesheet" href="css/menu.css">

	<script type="text/javascript" src="stmenu.js"></script>
<style fprolloverstyle>a:hover      { color: #FF0000; font-weight: bold }
</style>
</head>

<body>
   <!-- Begin Wrapper -->
   <div id="wrapper">
   
         <!-- Begin Header -->
		 <!-- End Header -->

<!-- outer table to replicate old frameset -->

			<div align="center">

			<table cellspacing="0" cellpadding="0" width="924" border=0 bordercolor="#ffffff" class="style2">
        
<!-- end of new frameset section -->

  				<tr>
					<td style="vertical-align: top; " bordercolor="#012346" width="922" class="style1">
					<div style="margin: 10px;">
<style>
.outerdiv  { width: 400px ; height: 130px; margin-left: auto ; margin-right: auto ; background-color: white;
		     display: table; #position: relative; overflow: hidden; 
		     border: 1px solid black; }
.innerdiv  { #position: absolute;  #top:50%; display: table-cell; vertical-align: middle; 
			}
.style1 {
				border-left-style: none;
				border-left-width: medium;
				border-right-style: none;
				border-right-width: medium;
				border-bottom-style: none;
				border-bottom-width: medium;
}
.style2 {
				border-left-width: 0px;
				border-right-width: 0px;
				border-bottom-width: 0px;
}
</style>

<div class=outerdiv>
<div class=innerdiv>
<div style="  #position: relative;  #top: -50%; margin-left: 20px; text-align:left;">
<?php
$ip=$_SERVER['REMOTE_ADDR'];

//Sends an email
 $to = "urgentacts@iccsolutions.com";
 $subject = "Urgent Activation request";
 $body = "*LockCode*: ".$_POST['lockcode']."\n".
			  	"*Feature*: ".$_POST['feature']."\n".
				"*Version*: ".$_POST['version']."\n".
				"*CoName*: ".$_POST['companyname']."\n".
				"*IP*: ".$ip."\n".
				"*ContEmail*: ".$_POST['conEmail']."\n\n";
//echo("<P>Email body is: ".$body."</P>");
 if (mail($to, $subject, $body)) {
   echo("<H2>Request for Urgent Activation Sent</H2><p>Please check your email in a few minutes for a reply.</p>");
  } else {
   echo("<p>Message delivery failed...</p>");
  }
?>
</div>
</div>
</div>

</div></td>
				</tr>
			</table>
			</div>
<script language=javascript>
	parent.window.document.title = "ICC Solutions Client Product Updates"
</script>
   </div>
   <!-- End Wrapper -->
</BODY>
</HTML>