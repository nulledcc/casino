<?phpif($folderRoot != "isMain"){header("location:../index.php");}$errors["errorPMR"] =  "-:wrongR:-";$errR = "";if($_GET["em"]){		$errR = $errors[$_GET["em"]];	}if($_POST["regIn"]){	$ur  = $_POST["rusername"];	$pr  = $_POST["rpassword"];	$rpr = $_POST["rpasswordr"];	$mr  = $_POST["remail"];		if($pr != $rpr){		header("location:index.php?cmd=regMe&em=errorPMR");		exit();	}	}if($_GET["cmd"] == "regMe" && !isset($_SESSION["un"])){
?><form action="?cmd=regMe" method="POST">-:rlText:-: <input type="text" name="rusername">-:rpText:-: <input type="password" name="rpassword">-:rprText:-: <input type="passwordr" name="rpasswordr"><br><br>-:rmText:-: <input type="text" name="remail"><input type="submit" name="regIn" id="regIn" value="-:reginText:-"><a href="/">¬ход</a><?=$errR?></form><?php
}else if(!isset($_SESSION["un"])){
?><a href="?cmd=regMe" target="_self">-:regiText:-</a><?php
}
?>