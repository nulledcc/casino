<?php
if($folderRoot != "isMain"){header("location:../index.php");}

//константы для конфигурации
define("DBHOST","localhost");
define("DBUSER","root");
define("DBPASS","");
define("DABASE","curok");

//класс mysqli
$mysqli = new mysqli(DBHOST,DBUSER,DBPASS,DABASE);

//если подключение невозможно выводим ошибку
if($mysqli->connect_error)
{
    die("ОШИБКА ПОДКЛЮЧЕНИЯ:".$mysqli->connect_error);
}
?>