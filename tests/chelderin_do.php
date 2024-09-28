<?php
session_start();
require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="include/cs/chelerin_d.css">
    <link rel="stylesheet" href="include/cs/header.css">
    <link rel="stylesheet" href="include/css/sidebares.css">
    <title>Document</title>
</head>
<body>
<?php
include('include/header.php');
?>
<?php 
include('include/sidebar.php');
?> 
    <div class="counter_2">
        <div class="hed">
            <h2> سجل تحصين الاطفال</h2>
            <p>..........<span>المحافظة </span>..........<span>المديرية</span>.........<span>المرفق الصحي</span></p>
        </div>
        <div class="inpu">

        </div>
        <div class="teble_1">
            <table class="doc_1" dir="rtl" border="2" >
                <tr>
                    <th colspan="7">البيانات الشخصية للاطفال دون العام</th>
                    <th colspan="17">تاريخ الجرعات للاطفال دون العام</th>
                    <th colspan="17">تاريخ الجرعات للاطفال فوق العام</th>
                </tr>
                <tr>
                    <th rowspan="4">
                        م
                    </th>
                    <th rowspan="4">الاسم الثلاثي</th>
                    <th rowspan="4">تاريخ الميلاد</th>
                    <th colspan="4">العنوان</th>
                    <th rowspan="4">السل</th>
                    <th colspan="5">الشلل</th>
                    <th colspan="3"> الخماسي</th>
                    <th colspan="3">المكورات الرئوية </th>
                    <th colspan="2"> الروتا</th>
                    <th colspan="1"> الحصبة والحصبة الالمانية</th>
                    <th > فيتامين</th>
                    <th > شلل</th>
                    <th colspan="4">الشلل</th>
                    <th colspan="3"> الخماسي</th>
                    <th colspan="3">المكورات الرئوية </th>
                    <th colspan="2"> جرعة تنشيطية</th>
                    <th colspan="2"> الحصبة والحصبة الالمانية</th>
                    <th > فيتامين</th>
                    <th colspan="2"> الشلل</th>
                </tr>
                <tr>
                    <th rowspan="3">المديرية</th>
                    <th rowspan="3">العزلة</th>
                    <th rowspan="3"> الحي-القرية </th>
                    <th rowspan="3">الهاتف</th>
                    <th > فموي </th>
                    <th >فموي</th>
                    <th > فموي</th>
                    <th >فموي  </th>
                    <th rowspan="3"> شلل حقن</th>
                    <th rowspan="3"> الاولى  </th>
                    <th rowspan="3"> الثانية</th>
                    <th rowspan="3"> الثالثة</th>
                    <th rowspan="3"> الاولى  </th>
                    <th rowspan="3"> الثانية</th>
                    <th rowspan="3"> الثالثة</th>
                    <th rowspan="3"> الاولى  </th>
                    <th rowspan="3"> الثانية</th>
                    <th rowspan="3"> الاولى</th>
                    <th > أ  </th>
                    <th > رابعة  </th>
                    <th >فموي</th>
                    <th > فموي</th>
                    <th >فموي  </th>
                    <th rowspan="3"> شلل حقن</th>
                    <th rowspan="3"> الاولى  </th>
                    <th rowspan="3"> الثانية</th>
                    <th rowspan="3"> الثالثة</th>
                    <th rowspan="3"> الاولى  </th>
                    <th rowspan="3"> الثانية</th>
                    <th rowspan="3"> الثالثة</th>
                    <th > خماسي</th>
                    <th > Td  </th>
                    <th rowspan="3"> الاولى  </th>
                    <th rowspan="3"> الثانية</th>
                    <th > أ  </th>
                    <th >فموي</th>
                    <th > فموي</th>
                </tr>
                <tr>
                    <th rowspan="2"> تمهيدية </th>
                    <th rowspan="2"> الاولى </th>
                    <th rowspan="2"> الثانية </th>
                    <th rowspan="2"> الثالثة </th>
                    <th rowspan="2"> 100 الف وحدة دولية </th>
                    <th rowspan="2"> فموي </th>
                </tr>
                <tr>
                    <th>
                        الاولى
                    </th>
                    <th>
                        الثانية
                    </th>
                    <th>
                        الثالثة
                    </th>
                    <th>
                        من 1 الى 2 سنة
                    </th>
                    <th>
                        من 5 الى 7 سنوات
                    </th>
                    
                    <th>200 الف وحدة دولية</th>
                    <th>رابعة</th>
                    <th>خامسة</th>
                </tr>
                <?php
                $sql= "SELECT * FROM vasechen join children on vasechen.id_chil=children.id";
                $resulte = mysqli_query($mysqli,$sql);
                if($resulte)
                {
                    $rag=1;
                    while($row = mysqli_fetch_array($resulte))
                    {
                        echo "<tr><td>" .$rag .
                        "</td>
                        <td>" .$row['firstName'] .' '.$row['middlName'] .' '.$row['lastName'] .' '.$row['famlay'] .
                        "</td><td>" .$row['datebirth'] .
                        "</td><td>" .$row['city'] .
                        "</td><td>" .$row['city_1'] .
                        "</td><td>" .$row['city_2'] .
                        "</td><td>" .$row['phone_no'] .
                        "</td><td>" .$row['bcg'] .
                        "</td><td>" .$row['polio_tmhede'] .
                        "</td><td>" .$row['polio_first'] .
                        "</td><td>" .$row['polio_scande'] .
                        "</td><td>" .$row['polio_therde'] .
                        "</td><td>" .$row['polio_ipv'] .
                        "</td><td>" .$row['pent_first'] .
                        "</td><td>" .$row['pent_scande'] .
                        "</td><td>" .$row['pent_therde'] .
                        "</td><td>" .$row['pneum_first'] .
                        "</td><td>" .$row['pneum_scande'] .
                        "</td><td>" .$row['pneum_therde'] .
                        "</td><td>" .$row['rota_first'] .
                        "</td><td>" .$row['rota_scande'] .
                        "</td><td>" .$row['MR_first'] .
                        "</td><td>" .$row['vitamin_A_100'] .
                        "</td><td>" .$row['polio_fwor'] .
                        "</td><td>" .$row['polio_first'] .
                        "</td><td>" .$row['polio_scande'] .
                        "</td><td>" .$row['polio_therde'] .
                        "</td><td>" .$row['polio_ipv'] .
                        "</td><td>" .$row['pent_first'] .
                        "</td><td>" .$row['pent_scande'] .
                        "</td><td>" .$row['pent_therde'] .
                        "</td><td>" .$row['pneum_first'] .
                        "</td><td>" .$row['pneum_scande'] .
                        "</td><td>" .$row['pneum_therde'] .
                        "</td><td>" .$row['fivete'] .
                        "</td><td>" .$row['Td'] .
                        "</td><td>" .$row['MR_first'] .
                        "</td><td>" .$row['MR_scande'] .
                        "</td><td>" .$row['vitamin_A_200'] .
                        "</td><td>" .$row['polio_fwor'] .
                        "</td><td>" .$row['polio_five'] .
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
        </div>
    </div>
</body>
</html>