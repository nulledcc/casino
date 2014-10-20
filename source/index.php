<?php
session_start();
header('Content-Type: text/html; charset=windows-1251');
$folderRoot = "isMain";//переменная для секьюрити файлов

include("server/initCall.php");
include("server/dob.php");
//////////устанавливаем конфигурацию шаблона\\\\\\\\\\
/*//////////////////////////////////////////
//чтобы изменить строки в буфере //
//мы должны использовать массив //
//$readData["example"] = "this";      //
//и создать строку отвечающий    //
//за этот массив                         //
//"-:example:-"                            //
//чтобы изменить его                 //
////////////////////////////////////////*/





//пример установки
$readData["example"] = "это была строка -:example:- и была изменена текстовым содержанием.";


    //конфигурация
    $readData["charset"]        = "utf-8";
    $readData["description"]    = "The best casino i have...";
    $readData["keywords"]      = "casino,kazino,cosino,play games,casino games, free casino";
    $readData["author"]          = "artxaker";
   
    $readData["shortcuticon"]  = "";

    $readData["title"]  = "best casino";//if you like to set your own configuration comment this line
    
	//login
	$readData["wrongL"] = "Неверное имя пользователя или пароль";
	$readData["lText"]  = "ЛОГИН";
	$readData["pText"]  = "ПАРОЛЬ";
	$readData["inText"]  = "ВОЙТИ";
	$readData["exiText"]  = "ВЫХОД";
	$readData["hiText"]  = "Привет";
	
	//registration
	$readData["wrongR"] = "Неправильно введены данные";
	$readData["rlText"]  = "ЛОГИН";
	$readData["rpText"]  = "ПАРОЛЬ";
	$readData["rprText"]  = "ПОВТОРИТЕ ПАРОЛЬ";
	$readData["reginText"]  = "Регистрироватся";
	$readData["rmText"]  = "ЕЛ. ПОЧТА";
	$readData["regiText"]  = "Регистрация";
	

//запускаем буфер
ob_start("callback");

//подключаем файлы страницы
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