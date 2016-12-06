<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<HEAD>

<TITLE>Updates available</TITLE>

</head>



<body>

<?php

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

	$ip=$_SERVER['REMOTE_ADDR'];
	$sql="INSERT INTO Pings (PingTime, LockCode, IP, TMatVersion) VALUES (NOW(), '".$_POST['lockcode']."','".$ip."','".$_POST['tmatversion']."')";

	if (!mysql_query($sql))
	{
	   die('Error: ' . mysql_error());
	}

	$qry="SELECT Lost, Disabled FROM DongleStatus WHERE LockCode = '".$_POST['lockcode']."'";
	$result=mysql_query($qry);

	//Check whether the query was successful or not

	$strOut = '';
	if($result) {
		if(mysql_num_rows($result) != 0) {
			while ($statrow = mysql_fetch_array($result)) {

				  $strLost = $statrow['Lost'];
				  $strDisabled = $statrow['Disabled'];
				  if ($strLost == 'Lost') {
				  	 $strOut = "Declared Lost ";
		   			 echo ("<P>Declared Lost</P>");
					 $to = "support@iccsolutions.com";
					 $subject = "Lost dongle has been used!";
					 $body = "A lost dongle has been inserted for use.\n\nLockCode: ".$_POST['lockcode']."\n".
						   "IP: ".$ip."\n".
						   "TMatVersion: ".$_POST['tmatversion']."\n\nPlease investigate\n";

					 mail($to, $subject, $body);
				  }
				  if ($strDisabled == 'Disabled') {
		   			 echo ("<P>*disable*</P>");
				  }
			}
		}
	}


	if ($strOut == '') {
	//Create query

	$qry="SELECT * FROM Suites INNER JOIN KeySuites ON KeySuites.SuiteID=Suites.ID WHERE KeySuites.LockCode = '".$_POST['lockcode']."'";
	$result=mysql_query($qry);

	

	//Check whether the query was successful or not

	if($result) {

		if(mysql_num_rows($result) != 0) {

			echo "\n<table><tr><th>Product</th><th>Version</th><th>TMatVersion</th></tr>\n";



			$colour = "FFFFFF";

			while ($prodrow = mysql_fetch_array($result)) {

				  $strProdName = $prodrow['ID'];

				  $strName = $prodrow['Name'];

				  $strVersion = $prodrow['Version'];

				  $strTMatVersion = $prodrow['TMatVersion'];

				  	 	echo "<TR><TD>".$strProdName."</TD><TD>".$strName."</TD><TD>".$strVersion."</TD><TD>".$strTMatVersion."</TD></TR>\n";

				  if ($colour == "FFFFFF") {

				  	 $colour = "E0E0E0";

				  } else {

				  	 $colour = "FFFFFF";

				  }

			}

			echo "</table>";

		}else {

			echo "<p>No Products for this Customer</p>";

		}

	}else {

		die("Query failed");

	}
	}

?>

</BODY>

</HTML>