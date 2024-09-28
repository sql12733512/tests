
<?php
session_start();
require 'config.php';
if(isset($_POST['submi'])){
$delet=mysqli_query($mysqli,"DELETE from children where id");
$delet=mysqli_query($mysqli,"DELETE from vasechen where ip");
$delet=mysqli_query($mysqli,"DELETE from userregistration where id");

echo "<script>alert('تمت التهيئة بنجاح');</script>";
header("location: my_profil.php");
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
    include('include/header.php');
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
   <?php include('include/sidebars.php');?>
</div>
    <div class="login">
    
            
    <label for="password" style=" color : red; width: 100%;"> تهيئة النظام  </label><br><br>
    
<input type="submit" name="submi"style=" color : red; font-size:18px;" class="buttons" value=" انقر لتاكيد التهيئة "><br><br>
<!--<a class="a_1" href="userregistr.php"> انشاء حساب جديد</a>-->

</div>
   
</div>
    </div>
    </div>
</div>
    </form>
</body>
</html>