<?php
/*
$host_db = "sql5.freemysqlhosting.net";
$user_db = "sql5731737";
$pass_db = "bx8MVXPMKE";
$name_db = "sql5731737";

$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$name_db = "login";*/

$host_db = "sql12.freemysqlhosting.net";
$user_db = "sql12733512";
$name_db = "sql12733512";
$pass_db = "jnI9UfplZ8";
/*
$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$name_db = "exsssss";
*/
$mysqli =new mysqli($host_db,$user_db, $pass_db, $name_db);
if($mysqli) {
    //echo " yes";
}
else{
    die("Could not connect database".mysqli_connect_error);
}


 


?>