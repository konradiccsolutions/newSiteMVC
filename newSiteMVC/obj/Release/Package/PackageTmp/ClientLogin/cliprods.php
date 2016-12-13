<?php

	require_once('auth.php');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<HEAD>

<TITLE>Products owned by Client</TITLE>

<style type="text/css">



.style1 {

	font-family: Arial, Helvetica, sans-serif;

}



.style2 {



				font-family: Arial, Helvetica, sans-serif;



				font-weight: bold;



				font-size: small;



				color: #012346;



}



.style3 {

	font-size: small;

}



.style5 {

	font-size: small;

	color: #012346;

}



.style6 {



				font-family: Verdana;



				font-size: small;



				color: #012346;



}



.style7 {



				color: #012346;



}



.style8 {

	font-family: Arial, Helvetica, sans-serif;

	font-size: small;

	color: #012346;

}

.style9 {

	font-family: Arial, Helvetica, sans-serif;

	font-size: small;

}



.style10 {

	border-left-style: none;

	border-left-width: medium;

	border-right-style: none;

	border-right-width: medium;

	border-bottom-style: none;

	border-bottom-width: medium;

}

.style11 {

	border-left-width: 0px;

	border-right-width: 0px;

	border-bottom-width: 0px;

}



.auto-style1 {
	color: #808080;
}
.auto-style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: small;
	color: #808080;
	text-align: center;
}
.auto-style5 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: small;
	color: #808080;
}
.auto-style6 {
	text-align: center;
}



</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/octicons/3.5.0/octicons.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script scr="~/Scripts/bootstrap.js"></script>
    <script src="~/Scripts/spectrum.js"></script>
    <script type="text/javascript" src="/Scripts/SmoothScroll.js"></script>
    <script type="text/javascript" src="/Scripts/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="/Scripts/jquery.isotope.js"></script>
    <script type="text/javascript" src="/Scripts/jquery.parallax.js"></script>
    <script src="/Scripts/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a href="/Home"><img src="/Img/ICC_logo_flat_white.png" class="banner-logo"></a>                
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li>@Html.ActionLink("Home", "Index", "Home", new {pageId = "Home"}, null)</li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About ICC<span class="caret"></span></a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>@Html.ActionLink("About Us", "LoadPageContent", "Pages", new {pageId = "AboutUs"}, null)</li>
                            <li>@Html.ActionLink("Awards", "LoadPageContent", "Pages", new {pageId = "Awards"}, null)</li>
                            <li>@Html.ActionLink("Charity", "LoadPageContent", "Pages", new {pageId = "Charity"}, null)</li>
                            <li role="separator" class="divider"></li>
                            <li>@Html.ActionLink("Events", "LoadPageContent", "Pages", new {pageId = "Events"}, null)</li>
                            <li>@Html.ActionLink("In The News", "LoadPageContent", "Pages", new {pageId = "InTheNews"}, null)</li>
                            <li>@Html.ActionLink("Testimonials", "LoadPageContent", "Pages", new {pageId = "Testimonials"}, null)</li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Products<span class="caret"></span></a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>@Html.ActionLink("Device Testing", "LoadPageContent", "Pages", new {pageId = "DeviceTesting"}, null)</li>
                            <li>@Html.ActionLink("Vantiv VIABLE", "LoadPageContent", "Pages", new {pageId = "VantivViable"}, null)</li>
                            <li>@Html.ActionLink("Host Simulation", "LoadPageContent", "Pages", new {pageId = "HostSimulation"}, null)</li>
                            <li>@Html.ActionLink("Training Cards", "LoadPageContent", "Pages", new {pageId = "TrainingCards"}, null)</li>
                            <li>@Html.ActionLink("Developer Tool", "LoadPageContent", "Pages", new {pageId = "DeveloperTool"}, null)</li>
                            <li>@Html.ActionLink("Card Testing", "LoadPageContent", "Pages", new {pageId = "CardTesting"}, null)</li>
                        </ul>
                    </li>
                    <li>@Html.ActionLink("Export", "LoadPageContent", "Pages", new {pageId = "Export"}, null)</li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EMV in the USA<span class="caret"></span></a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>@Html.ActionLink("About EMV", "LoadPageContent", "Pages", new {pageId = "AboutEMV"}, null)</li>
                            <li>@Html.ActionLink("Why Choose Us?", "LoadPageContent", "Pages", new {pageId = "WhyChooseUs"}, null)</li>
                            <li>@Html.ActionLink("US Products", "LoadPageContent", "Pages", new {pageId = "USProducts"}, null)</li>
                            <li>@Html.ActionLink("EMV VAR Qualification program", "LoadPageContent", "Pages", new {pageId = "EMVVar"}, null)</li>
                            <li>@Html.ActionLink("Partnerships", "LoadPageContent", "Pages", new {pageId = "Partnerships"}, null)</li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Support<span class="caret"></span></a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>@Html.ActionLink("ICC Support", "LoadPageContent", "Pages", new {pageId = "ICCSupport"}, null)</li>
                            <li>@Html.ActionLink("Vantiv Support", "LoadPageContent", "Pages", new {pageId = "VantivSupport"}, null)</li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact Us<span class="caret"></span></a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>@Html.ActionLink("Contact Us", "LoadPageContent", "Pages", new {pageId = "ContactUs"}, null)</li>
                            <li>@Html.ActionLink("Regional Offices", "LoadPageContent", "Pages", new {pageId = "RegionalOffices"}, null)</li>
                            <li>@Html.ActionLink("Careers", "LoadPageContent", "Pages", new {pageId = "Careers"}, null)</li>
                            <li>@Html.ActionLink("Distributors", "LoadPageContent", "Pages", new {pageId = "Distributors"}, null)</li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Client Area <span class="caret"></span></a>
                        @Html.Partial("_NavBarClientAreaLogin")
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-envelope"></span><span class="caret"></span></a>
                        @Html.Partial("_NavBarContactForm")
                    </li>
                    @if (HttpContext.Current.User.Identity.IsAuthenticated)
                    {
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                @Html.Partial("_LoginPartial")
                            </ul>
                        </li>
                    }
                </ul>
            </div>
        </div>
    </div>


<body>

   <div id="wrapper">

   

         <div align="center">



			<table cellspacing="0" cellpadding="0" border=0 bordercolor="#ffffff" class="style11">

        

<!-- end of new frameset section -->



  				<tr>

					<td style="vertical-align: top; " width="922" class="style10">

					<div style="margin: 10px;" class="style7">





<span class="style9">





<?php

	 if (strtotime($_SESSION['SESS_EXPIRYDATE']) < time()) {

	   echo "<p>Expired! ".date("d F Y", strtotime($_SESSION['SESS_EXPIRYDATE']))."</p>";

?></span> <span class="style1"><span class="style3">

<script language="javascript">

location.href="expired.php";

</script>

<?php

	 }

	 echo "<H2>Products Registered to ".$_SESSION['SESS_FULL_NAME']."</H2>";



	 if (strtotime($_SESSION['SESS_EXPIRYDATE']) < strtotime("+7 days")) {

	   echo "<p class=boxed><b>Please Note:</b> Your support period will expire on ".date("d F Y", strtotime($_SESSION['SESS_EXPIRYDATE']))."</p>";

	 }

	 echo "<p>The following product(s) have been registered to ".$_SESSION['SESS_FULL_NAME'].".</p>";



	//Include database connection details

	require_once('config.php');

	

	//Array to store validation errors

	$errmsg_arr = array();

	

	//Validation error flag

	$errflag = false;

	

	//Connect to mysql server

	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

	if(!$link) {

		die('Failed to connect to server: ' . mysql_error());

	}

	

	//Select database

	$db = mysql_select_db(DB_DATABASE);

	if(!$db) {

		die("Unable to select database");

	}



	//Create query

	$qry="SELECT * FROM Ownership WHERE CustID = '".$_SESSION['SESS_CUST_ID']."'";

	$result=mysql_query($qry);

	

	//Check whether the query was successful or not

	if($result) {

		if(mysql_num_rows($result) != 0) {

			echo "<div align=center><table class=prodtable><tr><th width='45%'>Product</th>";

			echo "<th width='15%' class=ctr>Version</th><th width='25%' class=ctr>Downloads</th><th width='15%' class=ctr>ZIP Password</th></tr>";



			$colour = "FFFFFF";

			while ($row = mysql_fetch_array($result)) {

				  $prod_id = $row['ProdID'] ;

				  $show_until_date = $row['ShowUntilDate'];

				  $expiry_date = $row['ExpiryDate'];



				  $prodqry="SELECT * FROM Products WHERE ProdID = '".$prod_id."'";

				  $prodresult=mysql_query($prodqry);

				  $prodrow=mysql_fetch_array($prodresult);



				  $strProdName = $prodrow['Name'];

				  $strVersion = $prodrow['Version'];

				  $strFileName = $prodrow['Filename'];

				  $strURL = "download.php?ID=".$prodrow['ID'];

				  $strPass = $prodrow['Password'];



				  if ($expiry_date == "0000-00-00 00:00:00") {

				  	 echo "<TR style='background-color:#".$colour.";'><TD>".$strProdName."</TD><TD style='text-align:center'>".$strVersion."</TD>";

					 echo "<TD style='text-align:center'><a href='".$strURL."'>".$strFileName."</a></td><td style='background-color:#".$colour.";text-align:center'>".$strPass."</td></tr>";

				  } else {

				  	 if (strtotime($expiry_date) < time()) {

				  	 	echo "<TR style='background-color:#".$colour.";'><TD>".$strProdName."</TD><TD style='text-align:center'>".$strVersion."</TD>";

                        echo "<TD style='background-color:#".$colour.";text-align:center' colspan=2><B><I>Support Expired</I></B></TD></tr>";

					 } else {

				  	    echo "<TR style='background-color:#".$colour.";'><TD>".$strProdName."</TD><TD style='text-align:center'>".$strVersion."</TD>";

                        echo "<TD style='text-align:center'><a href='".$strURL."'>".$strFileName."</a></td><td style='background-color:#".$colour.";text-align:center'>".$strPass."</td></tr>";

					 }

				  }

				  if ($colour == "FFFFFF") {

				  	 $colour = "E0E0E0";

				  } else {

				  	 $colour = "FFFFFF";

				  }

			}

			echo "</table></div>";

		}else {

			echo "<p>No Products for this Customer</p>";

		}

	}else {

		die("Query failed");

	}

?></span></span>



				<p class="auto-style3">To download the latest update, click on the highlighted link.</p>

<p class="auto-style3"><strong>Please refer to the password next to the download to unzip the 

				file.</strong></p>

<p class="auto-style3">Instructions for installation and usage will be in your update email.</p>

				<p class="auto-style6"><span class="auto-style5">Please Note:</span><span class="style1"><span class="style3"><span class="auto-style1"> Downloads are packaged as zip files.</span></span></span></p>						<p class="auto-style6"><span class="style1">						<span class="style3"><span class="auto-style1"> You will need to use WinZip, or a similar product to

extract and install the update.</span></span></span></p>

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