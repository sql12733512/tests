<?php
function check()
{
if(strlen($_SESSION['reg_noo'])==0)
	{	
		$host = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra="new.php";		
		$_SESSION["reg_noo"]="";
		header("Location: http://$host$uri/$extra");
	}}
    ?>