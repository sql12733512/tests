<?php
session_start();
include('config.php');
date_default_timezone_set('Asia/Kolkata');

$aid=$_SESSION['reg_noo'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="include/cs/vaccination_cardes.css">
   <link rel="stylesheet" href="include/cs/header.css">
   <link rel="stylesheet" href="include/cs/sidebar.css">
    <title>Document</title>
</head>
<body>
    <?php
    include('include/header.php');
   ?>
   <?php include('include/sidebar.php');
   ?> 
   <div class="counter">
    <?php
    //$aid=$_SESSION['reg_noo'];
    $ret="select * from polidin, vasechen, children    where   reg_no=? and id=ip and idi = id";
    $stmt= $mysqli->prepare($ret) ;
    $stmt->bind_param('s',$aid);
    $stmt->execute() ;//ok
    $res=$stmt->get_result();
    while($row=$res->fetch_array())
    {
        ?>
        <form action="" method="post">
            <div class="form-group">
                <label class="control-label" style="font-size:18px;">  جدول تواريخ إعطاء الطفل جرعات اللقاحات </label>
                <div class="col-sm-10">
                    <input  class="form-control" type="text" name="bcg"style="  text-align: center; width: 46%;margin:0 0 1px 0px;font-size:12px;color:red;font-weight: bold;" value="<?php echo ' وزن الطفل :  ',$row['width'];?>"> 
                    <input  class="form-control" type="text" name="bcg"style="  text-align: center; width: 45%;margin:0 0 1px 0px;font-size:12px;color:red;font-weight: bold;" value="<?php echo ' رقم البطاقة :  ',$row['reg_no'];?>"> 
                    <input  class="form-control" type="text" name="bcg"style="  text-align: center;" value="<?php echo 'الاسم/',$row['firstName'],' ',$row['middlName'],' ',$row['famlay'],' تاريخ الميلاد/',$row['datebirth'],' المحافظة/',$row['city'],' المديرية/',$row['city_1'],' العزلة/',$row['city_2'];?>"> 
                </div>
            </div>
            <div class="teble_1">
                <table class="doc_1" dir="rtl" border="2" >
                    <tr>
                        <th class="col-sm-2" > اللقاح</th>
                        <th  class="col-sm-2"> الجرعة</th>
                        <th  class="col-sm-2"> تاريخ الجرعات</th>
                        <th  class="col-sm-2"> تاريخ العودة</th>
                    </tr>
                    <tr>
                        <th>السل</th>
                        <th class="col-sm-3"  >
                        </th>
                        <?php
                        echo "<td>" .$row['bcg'] .
                        "</td><td>" . " " .
                        "</td>";
                        ?>
                    </tr>
                    <tr>
                        <th rowspan="4">
                            الشلل الفموي
                        </th>
                        <th class="col-sm-3" >
                            التمهيدية
                        </th>
                        <?php
                        echo "<td>" .$row['polio_tmhede'] .
                        "</td><td>" ." ".
                        "</td>";
                        ?>
                    </tr>
                    <tr>
                        <th class="col-sm-3" > الاولى</th>
                        <?php
                        echo "<td>" .$row['polio_first'] .
                        "</td><td>" .$row['datetdy'] .
                        "</td>";
                        ?>
                    </tr>
                    <tr>
                        <th class="col-sm-3" >
                             الثانية
                        </th>
                    
                        <?php
                        echo "<td>" .$row['polio_scande'] .
                        "</td><td>" .$row['datetdy_1'] .
                        "</td>";
                        ?>
                    </tr>
                    <tr>
                        <th class="col-sm-3" > الثالثة</th>
                        <?php
                        echo "<td>" .$row['polio_therde'] .
                        "</td><td>" .$row['datetdy_2'] .
                        "</td>";
                        ?>
                    </tr>
                    <tr>
                        <th>
                            الشلل الحقن
                        </th>
                        <th class="col-sm-3">

                        </th>
                        <?php
                        echo "<td>" .$row['polio_ipv'] .
                        "</td><td>" .$row['datetdy_2'] .
                        "</td>";
                        ?>
                    </tr>
                    <tr> 
                        <th rowspan="3">
                            الخماسي
                        </th>
                        <th class="col-sm-3" >
                            الاولى
                        </th>
                        <?php
                        echo "<td>" .$row['pent_first'] .
                        "</td><td>" .$row['datetdy'] .
                        "</td>";
                        ?>
                    </tr>
                    <tr>
                        <th class="col-sm-3" >
                             الثانية
                        </th>
                        <?php
                        echo "<td>" .$row['pent_scande'] .
                        "</td><td>" .$row['datetdy_1'] .
                        "</td>";
                        ?>
                    </tr>
                    <tr>
                        <th class="col-sm-3" > الثالثة</th>
                        <?php
                        echo "<td>" .$row['pent_therde'] .
                        "</td><td>" .$row['datetdy_2'] .
                        "</td>";
                        ?>
                    </tr>
                    <tr>
                        <th rowspan="3">
                            المكورات الرئوية
                        </th>
                        <th class="col-sm-3" >
                            الاولى
                        </th>
                        <?php
                        echo "<td>" .$row['pneum_first'] .
                        "</td><td>" .$row['datetdy'] ."</td>";?>
                    </tr>
                    <tr>
                        <th class="col-sm-3" > الثانية</th>
                        <?php
                        echo "<td>" .$row['pneum_scande'] .
                        "</td><td>" .$row['datetdy_1'] .
                        "</td>";
                        ?>
                    </tr>
                    <tr>
                        <th class="col-sm-3" > الثالثة</th>
                        <?php
                        echo "<td>" .$row['pneum_therde'] .
                        "</td><td>" .$row['datetdy_2'] ."</td>";
                        ?>
                    </tr>
                    <tr>
                        <th rowspan="2">
                            الروتا
                        </th>
                        <th class="col-sm-3" >
                            الاولى
                        </th>
                        <?php
                        echo "<td>" .$row['rota_first'] .
                        "</td><td>" .$row['datetdy'] ."</td>";
                        ?>
                    </tr>
                    <tr>
                        <th class="col-sm-3" > الثانية</th>
                        <?php
                        echo "<td>" .$row['rota_scande'] .
                        "</td><td>" .$row['datetdy_1'] .
                        "</td>";
                        ?>
                    </tr>
                    <tr>
                        <th rowspan="2">
                            الحصبة والحصبة الالمانية
                        </th>
                        <th class="col-sm-3" >
                            الاولى
                        </th>
                        <?php
                        echo "<td>" .$row['MR_first'] .
                        "</td><td>" .$row['datetdy_3'] .
                        "</td>";
                        ?>
                    </tr>
                    <tr>
                        <th class="col-sm-3" > الثانية</th>
                        <?php
                        echo "<td>" .$row['MR_scande'] .
                        "</td><td>" .$row['datetdy_4'] .
                        "</td>";
                        ?>
                    </tr>
                    <tr>
                        <th>
                            لقاح الشلل تنشيطية
                        </th>
                        <th class="col-sm-3" >
                            رابعة فموي
                        </th>
                        <?php
                        echo "<td>" .$row['polio_fwor'] .
                        "</td><td>" .$row['datetdy_3'] .
                        "</td>";
                        ?>
                    </tr>
                    <tr>
                        <th>
                            فيتامين (أ) 100 الف وحدة دولية
                        </th>
                        <th class="col-sm-3" >

                        </th>
                        <?php
                        echo "<td>" .$row['vitamin_A_100'] .
                        "</td><td>" .$row['datetdy_3'] ."</td>";
                        ?>
                    </tr>
                    <tr>
                        <th>
                            لقاح الشلل تنشيطية
                        </th>
                        <th class="col-sm-3" >
                            خامسة فموي
                        </th>
                        <?php
                        echo "<td>" .$row['polio_five'] .
                        "</td><td>" .$row['datetdy_4'] ."</td>";
                        ?>
                    </tr>
                    <tr>
                        <th>
                            فيتامين (أ) 200 الف وحدة دولية
                        </th>
                        <th class="col-sm-3" >

                        </th>
                        <?php
                        echo "<td>" .$row['vitamin_A_200'] .
                        "</td><td>" .$row['datetdy_4'] ."</td>";
                        ?>
                    </tr>
    <?php
    }
    ?>
    </table>
    </form>
    </div>
    </div>
</body>
</html>