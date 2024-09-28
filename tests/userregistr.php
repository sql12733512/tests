<?php
session_start();
require 'config.php';
if (isset($_POST['submite']))
{
    $id=2;
    $reg_no=$_POST['reg_no'];
    $firstName=$_POST['firstName'];
    $password=$_POST['password'];
    $middlName=$_POST['middlName'];
    $lastName=$_POST['lastName'];
    $gender=$_POST['gender'];
    $phone_no=$_POST['phone_no'];
    $email=$_POST['email'];
    $sql= "SELECT firstName,middlName,lastName,email,id FROM userregistration WHERE (firstName=? and middlName=? and lastName=?) or (email=?)    ";
    $chngpwd = $mysqli->prepare($sql);
    $chngpwd->bind_param('ssss',$firstName,$middlName,$lastName,$email);
    $chngpwd->execute();
    $chngpwd->store_result(); 
    $row_cnt=$chngpwd->num_rows;;
    if($row_cnt>0)
    {  
        echo "<script>alert('المستخدم موجود');</script>";  
    }
    else
    {
    $log="insert into userregistration (id,reg_no,firstName,password,middlName,lastName,gender,phone_no,email) values 
    ('$id','$reg_no','$firstName','$password','$middlName','$lastName','$gender','$phone_no','$email')";
    $logs=$mysqli->query($log);
    $_SESSION['id']=$id;
    $_SESSION['login']=$email;
    $uip=$_SERVER['REMOTE_ADDR'];
    $uid=$_SESSION['id'];
    $uemail=$_SESSION['login'];
    $ip=$_SERVER['REMOTE_ADDR'];
    header("location:my_profil.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="include/cs/styl.css">
    <link rel="stylesheet" href="include/cs/header.css">
    <link rel="stylesheet" href="include/cs/sidebar.css">
    <title>Document</title>
</head>
<body>
    <?php
    include('include/header.php');
    ?>
    <div>
    <?php include('include/sidebars.php');?> 
    </div>	
    <div class="row">
        <div class="col-md-12">
            <div >
                <div class="col-md-12">
                    <div class="panel panel-primary"style="text-align: center;">
                        <div class="panel-heading"style="font-size:18px;">
                            <div class="col-m-1"style="font-size:18px;">
                                <label class="" >تسجيل مستخدم جديد </label>   
                            </div>
                            <div class="panel-body">
                                <form method="post" action="" name="registration" class="form-horizontal" onSubmit="return valid();">
                                    <div class="form-group">
                                        <label class="col-m-2 control-label" style="font-size:18px;">: رقم المستخدم  </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="reg_no"style="  text-align: center;" > 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-m-2 control-label" style="font-size:18px;">: اسم المستخدم    </label>
                                        <div class="col-sm-10">
                                            <input type="text" name="firstName" class="form-control" style=" text-align: center;" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-m-2 control-label" style="font-size:18px;">: اسم الاب    </label>
                                        <div class="col-sm-10">
                                            <input type="text" name="middlName" class="form-control" style=" text-align: center;" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-m-2 control-label" style="font-size:18px;">:  اللقب    </label>
                                        <div class="col-sm-10">
                                            <input type="text" name="lastName" class="form-control" style=" text-align: center;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-m-2 control-label" style="font-size:18px;">: الجنس</label>
                                        <div class="col-sm-10">
                                            <select name="gender" style="  text-align: center;" class="form-control">
                                                <option value="الجنس">الجنس</option>
                                                <option value="ذكر">ذكر</option>
                                                <option value="أنثى">أنثى</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-m-2 control-label" style="font-size:18px;">: رقم التلفون   </label>
                                        <div class="col-sm-10">
                                            <input type="text" name="phone_no"style="  text-align: center;" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-m-2 control-label" style="font-size:18px;">: البريد الالكتروني    </label>
                                        <div class="col-sm-10">
                                            <input type="email" name="email"style="  text-align: center;" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-m-2 control-label" style="font-size:18px;">: كلمة المرور    </label>
                                        <div class="col-sm-10">
                                            <input type="password" name="password"style="  text-align: center;" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="but">
                                    <button class="butn" type="submit" name="submite">تسجيل المستخدم </button> <br><br>
                                   
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> 	
            </div>
        </div>
    </div>
</body>
</html>