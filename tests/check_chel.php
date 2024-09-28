<?php
function check_l(){
if(strlen($_SESSION['id'])==0)
	{	
		$host = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra="register.php";		
		$_SESSION["id"]="";
		header("Location: http://$host$uri/$extra");
	}
	
}
?>