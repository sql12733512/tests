<?php
session_start();
include('config.php');
date_default_timezone_set('Asia/Kolkata');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="include/cs/my_profil.css">
    <link rel="stylesheet" href="include/cs/header.css">
    <link rel="stylesheet" href="include/cs/sidebar.css">
    <title>Document</title>
</head>
<body>

<?php
  include('include/header.php');
   ?>
<?php include('include/sidebars.php');
    ?> 
<div class="counter">
    <form action="" method="post">
    <div class="form-group">
        <label class="control-label" style="font-size:18px;">  قائمة المستخدمين مسئولي النظام </label>
    </div>
 <div class="teble_1">
    <table class="doc_1" dir="rtl" border="1" >
        <tr>
            <th class="col-sm-2" > #</th>
            <th class="col-sm-2" > الاسم الثلاثي </th>
            <th  class="col-sm-2"> الجنس </th>
            <th  class="col-sm-2"> رقم التلفون  </th>
            <th  class="col-sm-2"> البريد الالكتروني </th>
            <th  class="col-sm-2"> تاريخ التسجيل </th>
        </tr>
    <?php
        $sql= "SELECT * FROM admin where id";
        $resulte = mysqli_query($mysqli,$sql);
        if($resulte){
            $rag=1;
            while($row = mysqli_fetch_array($resulte))
            {
                echo "<tr><td>" .$rag .
                "</td><td>" .$row['username'] .
                "</td><td>" .$row['gender'] .
                "</td><td>" .$row['phone_no'] .
                "</td><td>" .$row['email'] .
                "</td><td>" .$row['reg_date'] .
                "</td></tr>";
                $rag=$rag+1;
            }
            echo " </table>";
                    }
        else
        {
    echo "errore";
        }
    ?>
    </table>
    </form>
    </div>
    <div class="form-group">
        <label class="control-label" style="font-size:18px;">  قائمة المستخدمين  </label>
    </div>
 <div class="teble_1">
    <table class="doc_1" dir="rtl" border="1" >
        <tr>
            <th class="col-sm-2" > #</th>
            <th class="col-sm-2" > رقم المستخدم </th>
            <th  class="col-sm-2"> الاسم الثلاثي </th>
            <th  class="col-sm-2"> الجنس </th>
            <th  class="col-sm-2"> رقم التلفون </th>
            <th  class="col-sm-2"> البريد الالكتروني </th>
            <th  class="col-sm-2"> تاريخ التسجيل </th>
        </tr>
    <?php
        $sql= "SELECT * FROM userregistration where id";
        $resulte = mysqli_query($mysqli,$sql);
        if($resulte){
            $rag=1;
            while($row = mysqli_fetch_array($resulte))
            {
            echo "<tr><td>" .$rag .
            "</td><td>" .$row['reg_no'] .
            "</td><td>" .$row['firstName'] .' '.$row['middlName'] .' '.$row['lastName'] .
            "</td><td>" .$row['gender'] .
            "</td><td>" .$row['phone_no'] .
            "</td><td>" .$row['email'] .
            "</td><td>" .$row['regdata'] .
            "</td></tr>";
             $rag=$rag+1;
            }
        echo " </table>";
                    }
        else
        {
        echo "errore";
        }
    ?>
    </table>
    </form>
    </div>
    </div>
</body>
</html>