<?php
$value = time();
setcookie("test",$value,time()+3600,"/");
if(isset($_COOKIE["test"])){
	echo $_COOKIE["test"];
}
?>