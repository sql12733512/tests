<?php
session_start();
require 'config.php';
if (isset($_POST['submi']))
{
        $email=$_POST['email'];
        $password=$_POST['password'];
        $stmt=$mysqli->prepare("SELECT email,password,id FROM userregistration WHERE email=? and password=? ");
        $stmt->bind_param('ss',$email,$password);
        $stmt->execute();
        $stmt -> bind_result($email,$password,$id);
        $rs=$stmt->fetch();
        $stmt->close();
        $_SESSION['id']=$id;
        $_SESSION['login']=$email;
        $uip=$_SERVER['REMOTE_ADDR'];
        $uid=$_SESSION['id'];
        $uemail=$_SESSION['login'];
        $ip=$_SERVER['REMOTE_ADDR'];
    if($rs)
    {
        header("location:new.php");
    }
    else
    {
        echo "<script>alert('Invalid Username/Email or password');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="include/cs/nwes.css">
    <link rel="stylesheet" href="include/cs/indexe.css">
    <link rel="stylesheet" href="include/cs/header.css">
    <link rel="stylesheet" href="include/cs/styl.css">
    <link rel="stylesheet" href="include/cs/sidebar.css">
    <title>Document</title>
</head>
<body>
    <?php
    include('header.php');
    ?>
    <form action="" method = "post">
        <div class="nav_1">
            <div class="about_img_info">
                <div class="img_nn">
                    <img class="img_n img_about" src="imj.jpg" alt="">
                    <div class="about-img-warp">
                        <p class="sp-2">
                            <br><br>
                            <div class="llk">
                                <?php include('include/sidebar.php');
                                ?>
                            </div>
                                <div class="login">
                                    <label for="password" style=" width: 100%;"> تسجيل دخول المستخدم</label><br><br>
                                    <input type="email" name="email" id="email" placeholder="email"><br><br>
                                    <input type="password" name="password" id="password" placeholder="password"><br><br>
                                    <input type="submit" name="submi" class="buttons" value=" تسجيل الدخول"><br><br>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>