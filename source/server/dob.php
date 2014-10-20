<?php
if($folderRoot != "isMain"){header("location:../index.php");}

//databse constants
define("DBHOST","localhost");
define("DBUSER","root");
define("DBPASS","");
define("DABASE","curok");

//connect to databse with mysqli
$mysqli = new mysqli(DBHOST,DBUSER,DBPASS,DABASE);

//if any error die
if($mysqli->connect_error)
{
    die("MySQLi ERROR: ".$mysqli->connect_error);
}
?>
