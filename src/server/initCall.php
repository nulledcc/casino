<?php
if($folderRoot != "isMain"){header("location:../index.php");}
// configuration
$readData = array();


function callback($buffer)
{					
	global $readData;
	foreach($readData as $key => $val){
			$replace = "-:".$key.":-";
			$data = $val;
			$buffer = (str_replace($replace, $data , $buffer));
		}
		return $buffer;
}
?>