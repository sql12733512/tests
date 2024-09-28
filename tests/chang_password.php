
<?php
session_start();
include('config.php');
date_default_timezone_set('Asia/Kolkata');
$aid=$_SESSION['id'];
if(isset($_POST['changepwd'])){
    $op=$_POST['oldpassword'];
    $np=$_POST['newpassword'];
    $cnp=$_POST['checkPassword'];
    if($aid>1){
    $sql= "SELECT password FROM userregistration where password=? and id=?";
    $chngpwd = $mysqli->prepare($sql);
	$chngpwd->bind_param('ss',$op,$aid);
	$chngpwd->execute();
	$chngpwd->store_result(); 
    $row_cnt=$chngpwd->num_rows;;
    if($cnp==$np){
	if($row_cnt>0)
	{
		$con="update userregistration set password=? where id=?";
		$chngpwd1 = $mysqli->prepare($con);
		$chngpwd1->bind_param('si',$np,$aid);
    	$chngpwd1->execute();
		$_SESSION['msg']="Password Changed Successfully !!";
	}
	else
	{
		$_SESSION['msg']="Old Password not match !!";
	}	
}
else
	{
		$_SESSION['msg']="Password not match !!";
	}	
}

else{
    $sql= "SELECT password FROM admin where password=? and id=?";
    $chngpwd = $mysqli->prepare($sql);
	$chngpwd->bind_param('ss',$op,$aid);
	$chngpwd->execute();
	$chngpwd->store_result(); 
    $row_cnt=$chngpwd->num_rows;;
    if($cnp==$np)
	{
		if($row_cnt>0)
		{
		$con="update admin set password=? where id=?";
		$chngpwd1 = $mysqli->prepare($con);
		$chngpwd1->bind_param('si',$np,$aid);
    	$chngpwd1->execute();
		$_SESSION['msg']="Password Changed Successfully !!";
		}
		else
		{
		$_SESSION['msg']="Old Password not match !!";
		}	
	}
	else
	{
		$_SESSION['msg']="Password not match !!";
	}	
	}
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="include/cs/nwes.css">
    <link rel="stylesheet" href="include/cs/header.css">
    <link rel="stylesheet" href="include/cs/sidebar.css">
</head>
<body>
   
<?php
   include('include/header.php');
   
   ?>
    <?php include('include/sidebar.php');?> 
<div class="chang">
    
    <form action="" method="post">
    <?php         if(isset($_POST['changepwd']))
{ ?>
	<p style="color: red"><?php echo htmlentities($_SESSION['msg']); ?><?php echo htmlentities($_SESSION['msg']=""); ?></p>
                                            <?php } ?>                                
    
        <p class="tital">تغيير كلمة المرور</p>

 <input type="password" name="oldpassword" style=" margin-right: 30px;width: 60%;"> كلمة المرور القديمة <br>
 <input type="password" name="newpassword"style=" margin-right: 30px;width: 60%;">كلمة المرور الجديدة <br>
 <input type="password" name="checkPassword"style=" width: 60%;">تاكيد كلمة المرور الجديدة <br>
 <button type="submit" name="changepwd"style=" margin-right: 30px;width: 30%;"> تغيير</button>

    </div>
</form>

</body>
</html>