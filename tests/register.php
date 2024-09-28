<?php
session_start();
require 'config.php';
if (isset($_POST['submite']))
{
    //$reg_no=$_POST['reg_no'];
    $firstName=$_POST['firstName'];
    $middlName=$_POST['middlName'];
    $lastName=$_POST['lastName'];
    $famlay=$_POST['famlay'];
    $gender=$_POST['gender'];
    $datebirth=$_POST['datebirth'];
    $phone_no=$_POST['phone_no'];
    $city=$_POST['city'];
    $city_1=$_POST['city_1'];
    $city_2=$_POST['city_2'];
    $sql= "SELECT firstName,middlName,lastName,id FROM children WHERE firstName=? and middlName=? and lastName=? and famlay=?   ";
    $chngpwd = $mysqli->prepare($sql);
    $chngpwd->bind_param('ssss',$firstName,$middlName,$lastName,$famlay);
    $chngpwd->execute();
    $chngpwd->store_result(); 
    $row_cnt=$chngpwd->num_rows;;
    if($row_cnt>0)
    {  
        echo "<script>alert('الطفل موجود');</script>";
    }
    else
    {
        $log="insert into children (firstName,middlName,lastName,famlay,gender,datebirth,phone_no,city,city_1,city_2) values 
        ('$firstName','$middlName','$lastName','$famlay','$gender','$datebirth','$phone_no','$city','$city_1','$city_2')";
        $logs=$mysqli->query($log);
        $stmt=$mysqli->prepare("SELECT firstName,middlName,lastName,id FROM children WHERE firstName=? and middlName=? and lastName=?  ");
        $stmt->bind_param('sss',$firstName,$middlName,$lastName);
        $stmt->execute();
        $stmt -> bind_result($firstName,$middlName,$lastName,$id);
        $rs=$stmt->fetch();
        $stmt->close();
        if($rs)
        {
            $_SESSION['id']=$id;
            $uip=$_SERVER['REMOTE_ADDR'];
            $iip=$_SERVER['REMOTE_ADDR'];
            header ("location: inserte.php");
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
        <?php include('include/sidebar.php');
        ?> 
    </div>	
    <div class="row">
        <div class="col-md-12">
            <div >
                <div class="col-md-12">
                    <div class="panel panel-primary"style="text-align: center;">
                        <div class="panel-heading"style="font-size:18px;">
                            <div class="col-m-1"style="font-size:18px;">
                                <label class="" >تسجيل طفل جديد </label>   
                            </div>
                            <div class="panel-body">
                                <form method="post" action="" name="registration" class="form-horizontal" onSubmit="return valid();">
                                    <!--<div class="form-group">
                                        <label class="col-m-2 control-label" style="font-size:18px;">: رقم التسجيل  </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="reg_no"style="  text-align: center;" > 
                                        </div>
                                    </div>-->
                                    <div class="form-group">
                                        <label class="col-m-2 control-label" style="font-size:18px;">: اسم الطفل    </label>
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
                                        <label class="col-m-2 control-label" style="font-size:18px;">: اسم الجد    </label>
                                        <div class="col-sm-10">
                                            <input type="text" name="lastName" class="form-control" style=" text-align: center;" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-m-2 control-label" style="font-size:18px;">:  اللقب    </label>
                                        <div class="col-sm-10">
                                            <input type="text" name="famlay" class="form-control" style=" text-align: center;">
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
                                        <label class="col-m-2 control-label" style="font-size:18px;">: المحافظة   </label>
                                        <div class="col-sm-10">
                                            <input type="text" name="city"style="  text-align: center;" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-m-2 control-label" style="font-size:18px;">: المديرية   </label>
                                        <div class="col-sm-10">
                                            <input type="text" name="city_1"style="  text-align: center;" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-m-2 control-label" style="font-size:18px;">: العزلة   </label>
                                        <div class="col-sm-10">
                                            <input type="text" name="city_2"style="  text-align: center;" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-m-2 control-label" style="font-size:18px;">: تاريخ الميلاد   </label>
                                        <div class="col-sm-10">
                                            <input type="date" name="datebirth"style=" text-align: center;" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="but">
                                    <button class="butn" type="submit" name="submite">تسجيل الطفل </button>
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