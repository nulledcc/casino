<?php
session_start();
//header('Content-Type: text/html; charset=windows-1251');//for russian uncoment this
$folderRoot = "isMain";//check if root

include("server/initCall.php");
include("server/dob.php");
//////////set configuration\\\\\\\\\\
/*///////////////////////////////////
//to set manual configuration type //
//$readData["example"] = "this";   //
//and you must put in template 	   //
//"-:example:-"			   //
//to replace it.		   //
///////////////////////////////////*/





//example for template data
$readData["example"] = "This was -:example:- and been replaced with this text.";


    //meta
    $readData["charset"]        = "utf-8";
    $readData["description"]    = "The best casino i have...";
    $readData["keywords"]      = "casino,kazino,cosino,play games,casino games, free casino";
    $readData["author"]          = "artxaker";
   
    $readData["shortcuticon"]  = "";

    $readData["title"]  = "best casino";//if you like to set your own configuration comment this line
    
	//login
	$readData["wrongL"] = "Wrong username or password";
	$readData["lText"]  = "Username";
	$readData["pText"]  = "Password";
	$readData["inText"]  = "login";
	$readData["exiText"]  = "Quit";
	$readData["hiText"]  = "Hello";
	
	//registration
	$readData["wrongR"] = "Inccorect infromation provided";
	$readData["rlText"]  = "Username";
	$readData["rpText"]  = "Password";
	$readData["rprText"]  = "Repeat Password";
	$readData["reginText"]  = "Register";
	$readData["rmText"]  = "E-Mail";
	$readData["regiText"]  = "Registration";
	

//starting buffer
ob_start("callback");

//inlude page files
include("includes/header.php");
include("includes/meta.php");
include("includes/link.php");
?>
<script type="text/javascript"></script>
<?php
include("includes/headend.php");
?>
<body>
<?php
include("includes/pages/login.php");
?>
<?php
include("includes/pages/registration.php");
?>
</body>
</html>
<?php
ob_end_flush();
?>
