<?php
if($folderRoot != "isMain"){header("location:../index.php");}

$skey = "sb45s44%qqDlgw";
$token = "";

$errors = array(
				"errorL" => "-:wrongL:-"
				);
$errL = "";

if(htmlentities($_GET["cmd"]) == "exit"){
	session_destroy();
	header("location:index.php");
}


if(htmlentities($_POST["getIn"]))
{
	$u = htmlentities($_POST["username"]);
	$p = htmlentities($_POST["password"]);
	
	$u = str_replace(" ","",$u);
	$p = str_replace(" ","",$p);
	
	if($u == "" || $p == "")
	{
		header("location:index.php?em=errorl&reason=emptystrings");
		exit();
	}
	$u = $mysqli->real_escape_string($u);
	$p = $mysqli->real_escape_string($p);
	
	$p = base64_encode(sha1($skey.$p));
	
	$query = $mysqli->query("SELECT * FROM cusers WHERE username = '{$u}' AND password = '{$p}'");

	if($query->num_rows > 0)
	{
		$data = $query->fetch_array(MYSQLI_BOTH);
		
		if($data["active"])
		{
			$ip  = $_SERVER["REMOTE_ADDR"];
			$token = md5($u.$_SERVER["HTTP_HOST"].$_SERVER["HTTP_USER_AGENT"].$skey);
			$uid = $data["userid"];
			$lip = $data["ip"];
		
			if(!$mysqli->query("UPDATE cusers SET token = '{$token}',ip = '{$ip}', lastip = '{$lip}' WHERE username = '{$u}' AND password = '{$p}'"))
			{
				die($mysqli->error);
			}
		
			session_regenerate_id();
			$_SESSION["un"]  = $data["username"];
			$_SESSION["uid"] = $uid;
			$_SESSION["ut"]  = $token;
			header("location:index.php?cmd=access&ut={$token}");
		}
		else
		{
			header("location:index.php?em=errorl&reason=notactive");
		}
	}
	else
	{
		header("location:index.php?em=errorl&reason=nomutch");
	}
}
if($_GET["em"]){
	$errL =  $errors[$_GET["em"]];
}
if(!isset($_SESSION["un"]) && $_GET["cmd"] != "regMe"){
?>
<form action="" method="POST">
-:lText:-: <input type="text" name="username">
-:pText:-: <input type="password" name="password">
<input type="submit" name="getIn" id="getIn" value="-:inText:-"><?=$errL?>
</form>
<?php
}elseif(isset($_SESSION["ut"]) && isset($_SESSION["un"])){
?>

-:hiText:-:&nbsp;<strong><?=$_SESSION["un"]?></strong>&nbsp;<a href="?cmd=exit" target="_self">-:exiText:-</a>


<?php
}else if(isset($_SESSION["ut"])){
	session_destroy();
	header("location:index.php?em=errorl&reason=tokenhack");
}
?>