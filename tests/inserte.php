<?php

session_start();
include('config.php');
date_default_timezone_set('Asia/Kolkata');

include('check_chel.php');
check_l();
$aid=$_SESSION['id'];
$aidi=$aid+1;
if (isset($_POST['submite']))
{  
       
$name_name=$_POST['name_name'];
/*$sql= "SELECT name_name FROM log where name_name=? ";

$chngpwd = $mysqli->prepare($sql);
$chngpwd->bind_param('s',$name_name);
$chngpwd->execute();
$chngpwd->store_result(); 
$row_cnt=$chngpwd->num_rows;;

if($row_cnt>0){
    $adn="delete from log where id=?";
		$stmt= $mysqli->prepare($adn);
		$stmt->bind_param('i',$aidi);
        $stmt->execute();
        $stmt->close();	  
               
                header ("location:register.php");
            }
            else{
*/
                

                $sql= "SELECT name_name,reg_no FROM children where id=?";
                date("Y/m/d", time() + 3100 * (29*30));
                $chngpwd = $mysqli->prepare($sql);
                $chngpwd->bind_param('s',$aid);
                $chngpwd->execute();
                $chngpwd->store_result(); 
                $row_cnt=$chngpwd->num_rows;;
                if($row_cnt>0)
                {
                    $con="update children set name_name=?,reg_no=? where id=?";
                $chngpwd1 = $mysqli->prepare($con);
                $chngpwd1->bind_param('ssi',$name_name,$aid,$aid);
                $chngpwd1->execute();
                }
                    
                    $bcg=$_POST['bcg'];
                    $polio_tmhede=$_POST['bcg'];
                    $date_tdy = date("Y/m/d", time() + 3100 * (29*45));
                    $loges="insert into polidin (datetdy) values 
                    ('$date_tdy')";
                    $mysqli->query($loges);


                    $loge="insert into vasechen (id_chil,bcg,polio_tmhede) values 
                    ('$aid','$bcg','$polio_tmhede')";
                    
                    $mysqli->query($loge);
                    $_SESSION['msg']="تم تسجيل الطفل بنجاح  !!";
                   
                   
                header ("location:new.php");
            
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="include/cs/insert.css">
    <link rel="stylesheet" href="include/cs/styles.css">
    <link rel="stylesheet" href="include/cs/header.css">
</head>



<body>


<?php
   include('include/header.php');
   ?>
    <div class="login">
    <div class="login_1">
    <div class="row">
                        <div class="col-md-12">
                            
    <?php
       
        
        $ret="select * from children where id=?";
            $stmt= $mysqli->prepare($ret) ;
         $stmt->bind_param('i',$aid);
         $stmt->execute() ;//ok
         $res=$stmt->get_result();
         
        while($row=$res->fetch_array())
        {    
            ?>

<div class="row">
<div class="col-md-12">
<div class="panel panel-primary"style="text-align: center;">
    <div class="panel-heading"style="font-size:18px;">
        <div class="col-m-1"style="font-size:18px;">

    <label class="" > تاكيد تسجيل الطفل  </label>   
    
        </div>
        <?php         if(isset($_POST['submite']))
{ ?>
	<p style="color: red"><?php echo htmlentities($_SESSION['msg']); ?><?php echo htmlentities($_SESSION['msg']=""); ?></p>
                                            <?php 
                                       } ?>
    <div class="panel-body">

    <?php ?>
        <form action="" method="post">
            
        <div class="form-group">
    <div class="col-sm-10">
        <?php
 //echo $aidi,"bbbbbbbb",$aid;
        ?>
    <input type="text" name="name_name"class="form-control"style=" margin-bottom: 23px;width: 100%;text-align: center;"value="<?php echo  $row['firstName'],' ',$row['middlName'],' ',$row['lastName'],' ',$row['famlay'];?>" >
    
     </div>
    </div>
    
    <div class="form-group">
    <label class="col-m-2 control-label" style="font-size:18px;">  : الزيارة الاولى بعدالولادة مباشرة  </label>
    <div class="col-sm-10">
        <input  class="form-control" type="date" name="bcg"style="  text-align: center;"value="<?php echo $row['datebirth'];?>" > 
     </div>
    </div>
    
       <?php  }?>
</div>

<div>
<button type="submit" name="submite"> تاكيد تسجيل الطفل    </button>
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