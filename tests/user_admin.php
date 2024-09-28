<?php
session_start();
require 'config.php';
if (isset($_POST['submite']))
{
    $id=$_POST['id'];
    $firstName=$_POST['firstName'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone_no=$_POST['phone_no'];
    $date = date('Y-m-d');
    $sql= "SELECT username,email,id FROM admin WHERE username=? and email=?   ";
    $chngpwd = $mysqli->prepare($sql);
    $chngpwd->bind_param('ss',$firstName,$email);
    $chngpwd->execute();
    $chngpwd->store_result(); 
    $row_cnt=$chngpwd->num_rows;;
    if($row_cnt>0){  
            echo "<script>alert('المستخدم موجود');</script>";
    
                   
                }
                else{
    $log="insert into admin (id,,username,email,password,gender,updation_date,phone_no) values 
    ('$id','$firstName','$email','$password','$gender','$date','$phone_no')";
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

?><!DOCTYPE html>
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
                            <!--<h2 class="page-title"style="margin: 15px 0; text-align: center;" >الملف الشخصي</h2>-->
                            <?php
        
                           // $aid=$_SESSION['id'];
                            //$aip=$_SESSION['ip']=$aid;
                             //   $ret="select * from log, polio where ip=$aid and (id=?)";
                               //         $stmt= $mysqli->prepare($ret) ;
                                 //    $stmt->bind_param('i',$aid);
                                  //   $stmt->execute() ;//ok
                                    // $res=$stmt->get_result();
                                     
                                   // while($row=$res->fetch_array())
                                    {    
                                        ?>
                            <div >
                                <div class="col-md-12">
                                    <div class="panel panel-primary"style="text-align: center;">
                                        <div class="panel-heading"style="font-size:18px;">
                                            <div class="col-m-1"style="font-size:18px;">
    
                                     <label class="" >تسجيل مسئول جديد </label>   
                                        
                                            </div>

    <div class="panel-body">
    <form method="post" action="" name="registration" class="form-horizontal" onSubmit="return valid();">
                                    
    <div class="form-group">
    <label class="col-m-2 control-label" style="font-size:18px;">:id رقم  </label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="id"style="  text-align: center;"> 
     </div>
    </div>                         
    
    
    
    <div class="form-group">
    <label class="col-m-2 control-label" style="font-size:18px;">: اسم المستخدم    </label>
    <div class="col-sm-10">
        <input type="text" name="firstName" class="form-control" style=" text-align: center;" >
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
                <label class="col-m-2 control-label" style="font-size:18px;">: رقم التلفون    </label>
                <div class="col-sm-10">
                    <input type="text" name="phone_no"style="  text-align: center;" class="form-control" >
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
    <?php
}
?>
</div>
<div class="but">
<button class="butn" type="submit" name="submite">تسجيل المستخدم </button> <br><br>
<a class="a_1" href="home.php"> تسجيل الدخول </a>
</div>
    </form>
    
                                        
                                
                            
                                </div>
                            </div>
                        </div>
                    </div> 	
                </div>
            </div>
        </div>
        <?php
   ?>
</body>
</html>