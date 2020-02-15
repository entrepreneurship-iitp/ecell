<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
header('Refresh: 10; URL=/ecell/dashboard/html/dashboard.html');


// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

session_start();
if(!isset($_SESSION['login_user'])){
	header("location: /ecell/signin/signup.php");
}

require("../../config.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application’s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {
	echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "<h3><b>Transaction status is success</b>" . "<br/></h3>";
		$sql = "UPDATE users SET payment = $_POST[TXNAMOUNT] WHERE webmail = '".$_SESSION['login_user']."'";

		if ($mysqli->query($sql) === TRUE) {
			echo '<b> Payment status updated</b>';
		} else {
		  echo '<script>alert("Error! Contact support")</script>';
		}
		
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
	}
	else {
		echo "<b>Transaction status is failure</b>" . "<br/>";

	}

	echo "<p> you will be redirected in <span id='countdowntimer'>10 </span> Seconds</p>"."<script type='text/javascript'>"
		."var timeleft = 10;"
		."var downloadTimer = setInterval(function(){
		timeleft--;"
		."document.getElementById('countdowntimer').textContent = timeleft;"
		."if(timeleft <= 0)
			clearInterval(downloadTimer);
		},1000);
	</script>";

	//echo "";
	// if (isset($_POST) && count($_POST)>0 )
	// { 
	// 	foreach($_POST as $paramName => $paramValue) {
	// 			echo "<br/>" . $paramName . " = " . $paramValue;
	// 	}
	// }
	
	

}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>
<!DOCTYPE html>
<html>
<head>
	    <link href="pay.css" rel="stylesheet">
</head>
</html>	
