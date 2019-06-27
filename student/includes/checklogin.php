<?php
function check_login()
{
if(strlen($_SESSION['stdid'])==0)
	{
		$host = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra="index.php";
		$_SESSION["stdid"]="";
		header("Location: http://$host$uri/$extra");
	}
}
?>
