<?php
session_start();
include('config.php');
//include('checklo.php');
//check();
date_default_timezone_set('Asia/Kolkata');

if(isset($_POST['polio_first'])){
    $piv = $_SESSION['reg_noo'];
    $polio_first=date('Y-m-d');
    $datetdy=date("Y/m/d", time() + 3100 * (30*75));;
    $pol=$_POST['whdth'];
    $query="update  vasechen, children  set polio_first=?,pent_first=?,pneum_first=?,rota_first=?,width=? where reg_no=? and id=ip ";
    $stmt = $mysqli->prepare($query);
    $rc=$stmt->bind_param('ssssss',$polio_first,$polio_first,$polio_first,$polio_first,$pol,$piv);
    $stmt->execute();
    $con="update polidin, children set datetdy_1=?  where reg_no=? and idi=id";
    
    $chngpwd1 = $mysqli->prepare($con);
    $chngpwd1->bind_param('si',$datetdy,$piv);
    $chngpwd1->execute();
    echo"<script>alert('Profile updated Succssfully');</script>";
}
elseif(isset($_POST['polio_scande'])){
    $piv = $_SESSION['reg_noo'];
    $polio_scande=date('Y-m-d');
    $datetdy=date("Y/m/d", time() + 3100 * (30*105));;
    $query="update children, vasechen set polio_scande=?,pent_scande=?,pneum_scande=?,rota_scande=? where  reg_no=? and id=ip";
    $stmt = $mysqli->prepare($query);
    $rc=$stmt->bind_param('sssss',$polio_scande,$polio_scande,$polio_scande,$polio_scande,$piv);
    $stmt->execute();
    
    $con="update polidin, children set datetdy_2=?  where reg_no=? and idi=id";
    
    $chngpwd1 = $mysqli->prepare($con);
    $chngpwd1->bind_param('si',$datetdy,$piv);
    $chngpwd1->execute();
    echo"<script>alert('Profile updated Succssfully');</script>";
}
elseif(isset($_POST['polio_therde'])){
    $piv = $_SESSION['reg_noo'];
    $polio_therde=date('Y-m-d');
    $query="update  children, vasechen set polio_therde=?,polio_ipv=?,pent_therde=?,pneum_therde=? where  reg_no=? and id=ip";
    $stmt = $mysqli->prepare($query);
    $rc=$stmt->bind_param('sssss',$polio_therde,$polio_therde,$polio_therde,$polio_therde,$piv);
    $stmt->execute();
    $datetdy=date("Y/m/d", time() + 3100 * (30*270));;
    $con="update polidin, children set datetdy_3=?  where reg_no=? and idi=id";
    
    $chngpwd1 = $mysqli->prepare($con);
    $chngpwd1->bind_param('si',$datetdy,$piv);
    $chngpwd1->execute();
    echo"<script>alert('Profile updated Succssfully');</script>";
}
elseif(isset($_POST['polio_ipv'])){
    $piv = $_SESSION['reg_noo'];
    $polio_ipv=date('Y-m-d');
    $query="update children, vasechen set MR_first=?,polio_fwor=?,vitamin_A_100=? where  reg_no=? and id=ip";
    $stmt = $mysqli->prepare($query);
    $rc=$stmt->bind_param('ssss',$polio_ipv,$polio_ipv,$polio_ipv,$piv);
    $stmt->execute();
    $datetdy=date("Y/m/d", time() + 3100 * (30*540));;
    $con="update polidin, children set datetdy_4=?  where reg_no=? and idi=id";
    
    $chngpwd1 = $mysqli->prepare($con);
    $chngpwd1->bind_param('si',$datetdy,$piv);
    $chngpwd1->execute();
    echo"<script>alert('Profile updated Succssfully');</script>";
}
elseif(isset($_POST['pent_first'])){
    $piv = $_SESSION['reg_noo'];
    $pent_first=date('Y-m-d');
    $query="update children, vasechen set MR_scande=?,polio_five=?,vitamin_A_200=? where  reg_no=? and id=ip";
    $stmt = $mysqli->prepare($query);
    $rc=$stmt->bind_param('ssss',$pent_first,$pent_first,$pent_first,$piv);
    $stmt->execute();
    /*$datetdy='2010-12-2';
    $con="update polidin, children set datetdy_4=?  where reg_no=? and idi=id";
    
    $chngpwd1 = $mysqli->prepare($con);
    $chngpwd1->bind_param('si',$datetdy,$piv);
    $chngpwd1->execute();*/
    echo"<script>alert('Profile updated Succssfully');</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="include/cs/header.css">
    <link rel="stylesheet" href="include/cs/sidebar.css">
    <link rel="stylesheet" href="include/cs/stylse.css">
</head>
<body>

<?php
   include('include/header.php');
?>
<div class="llk">
    <?php include('include/sidebar.php');
    ?>
</div>
<div class="login">
    <div class="login_1">
        <div class="row">
            <div class="col-md-12"style="width: 100%;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary"style="text-align: center;">
                            <div class="panel-heading"style="font-size:12px;">
                                <div class="col-m-1"style="font-size:12px;">
                                    <label class="" > تحصين الطفل </label>   
                                   
                                </div>
                                <div class="panel-body">
                                     
                                <form action="" method="post">
                                <input type="text"name="upde" style="font-size: 16px;text-align: center;margin-bottom: 5px;
                                        width: 100%;" onkeyup="requestPatientInfo(this.value)"class="form-control"id="live_sear" placeholder="...  ادخل اسم الطفل اورقمه لتحصينة">
                                       
                                         <div class="form-group">
                                            <div class="form-group">
                                                <label class="col-m-2 control-label" style="font-size: 16px;
                                                width: 40%;border: 1px solid #dfd7ca;
                                                float: right;border-radius: 4px;
                                                margin-right: 5%;padding: 9px 16px;">  :   وزن الطفل   </label>
                                                <div class="col-sm-10">
                                                    <div class="form-control" style=" margin-bottom: 23px;border:none; padding: 0px 16px;width: 100%;text-align: center;">
                                                        <input name="whdth" style=" display: inline-block;border: 1px solid #dfd7ca;border-radius: 4px; padding: 12px 16px; margin-bottom: 23px;width: 50%;text-align: center;"placeholder="ادخل وزن الطفل">
                                                    </div>
                                                </div>
                                            </div>
                                            <table dir="rtl" id="zctb" class="display table table-striped table-bordered table-hover">
                                                <thead>
                                                    <div class="form-group">
                                                        <tr>
                                                            <div class="form-group">
                                                                <th> <label class="col-m-2 control-label" style="font-size:12px;">     رقم الطفل   </label>
                                                                </th>
                                                            </div>
                                                            <div class="form-group">
                                                                <th> <label class="col-m-2 control-label" style="font-size:12px;">     اسم الطفل   </label>
                                                                </th>
                                                            </div>
                                                            <div class="form-group">
                                                                <th> 
                                                                    <label class="col-m-2 control-label" style="font-size:12px;">    الزيارة الثانية في عمر شهر ونصف </label>
                                                                </th>
                                                            </div>
                                                            <div class="form-group">
                                                                <th>
                                                                    <label class="col-m-2 control-label" style="font-size:12px;">  الزيارة الثالثة في عمر شهرين ونصف  </label>
                                                                </th>
                                                            </div>
                                                            <div class="form-group">
                                                                <th>
                                                                    <label class="col-m-2 control-label" style="font-size:12px;">   الزيارة الرابعة في عمر ثلاثة اشهر ونصف </label>
    
                                                                </th>
                                                            </div>
                                                            <div class="form-group">
                                                                <th>
                                                                    <label class="col-m-2 control-label" style="font-size:12px;">   الزيارة الخامسة في عمر تسعة اشهر  </label>
                                                                </th>
                                                            </div>
                                                            <div class="form-group">
                                                                <th>
                                                                    <label class="col-m-2 control-label" style="font-size:12px;">   الزيارة السادسة في عمر 18 الشهر </label>
                                                                </th>
                                                            </div>
                                                            <div class="form-group">
                                                                <th> 
                                                                    <label class="col-m-2 control-label" style="font-size:12px;">     وزن الطفل   </label>
                                                                </th>
                                                            </div>
                                                        </tr>
                                                    </div>
                                                </thead>
                                                <div id="divpatientinfo">
                                                    <tbody id="myTable">

                                                    </tbody>
                                                </div>
                                            </table>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
        var onDeviceReady=function()
        {
        intel.xdk.device.hieSplashScreen();
        };
        document.addEventListener("intel.xdk.device.ready", onDeviceReady,false);
        </script>
        <script>
        var myArray=
        [
        <?php
        $ret="select * from vasechen join children on vasechen.id_chil=children.id";
        $stmt= $mysqli->prepare($ret) ;
        $stmt->execute() ;//ok
        $res=$stmt->get_result();
        while($row=$res->fetch_object())
        {
            ?>
            {
            'wid':'<?php echo  $row->width?>',
            'no':'<?php echo  $row->reg_no?>',
            'name':'<?php echo  $row->firstName,' ',$row->middlName,' ',$row->lastName,' ',$row->famlay?>' ,
            'first': '<?php echo $row->polio_first?>',
            'scande' : '<?php echo $row->polio_scande?>',
            'therde': '<?php echo $row->polio_therde?>',
            'MR_first': '<?php echo $row->MR_first?>',
            'MR_scande': '<?php echo $row->MR_scande?>'
            },
        <?php 
        }
        ?>
        ]
        function requestPatientInfo(value)
        {
        var pid =value;
        
        hiddenframe.location="http://localhost/tests/news.php?ido="+ pid;
        <?php
        //$reg_noo = $_GET["ido"];
        //$_SESSION("reg_noo")=$_GET['ido'];
        ?>
        pid = document.getElementById("live_sear").value;
        
        var data = searchTable(value, myArray);
        bulldTable(data);
        };
        bulldTable(myArray)
        function searchTable(value,data)
        {
            var filter = []
            for( var i = 0; i<data.length; i++)
            {
                value = value.toLowerCase()
                var name = data[i].name.toLowerCase()
                var no = data[i].no.toLowerCase()
                if(name.includes(value) || no.includes(value))
                {
                    filter.push(data[i])
                }
            }
            return filter
        }
        bulldTable(myArray)
        function bulldTable(data)
        {
            var table =document.getElementById('myTable')
            table.innerHTML = ''
            for(var i = 0; i<data.length; i++){
            var row = `<tr>
            <div class="form-group">
            <div class="col-sm-10">
            <div class="form-group">
            <div class="col-sm-10">
            <td class="form-control"style=" margin-bottom: 23px;max-width:60px;text-align: center;">
            ${data[i].no}
            </td>
            </div>
            </div>
            <div class="form-group">
            <div class="col-sm-10">
             
            <td class="form-control"style=" margin-bottom: 23px;max-width:60px;text-align: center;">
            ${data[i].name}
            </td>
            </div>
            </div>
            <div class="form-group">
            <div class="col-sm-10">
            <td  class="form-control" style=" margin-bottom: 23px;max-width:24px;text-align: center;">
            <input type="submit" class="form-control" name="polio_first"style=" width: 100%; text-align: center;" value="${data[i].first}"> 
            </td>
            </div>
            </div>
            <div class="form-group">
            <div class="col-sm-10">
            <td  class="form-control" style=" margin-bottom: 23px;max-width:24px;text-align: center;">
            <input type="submit" class="form-control" name="polio_scande"style=" width: 100%; text-align: center;" value="${data[i].scande}"> 
            </td>
            </div>
            </div>
            <div class="form-group">
            <div class="col-sm-10">
            <td  class="form-control" style=" margin-bottom: 23px;max-width:24px;text-align: center;">
            <input type="submit" class="form-control" name="polio_therde"style=" width: 100%; text-align: center;" value="${data[i].therde}"> 
            </td>
            </div>
            </div>
            <div class="form-group">
            <div class="col-sm-10">
            <td  class="form-control" style=" margin-bottom: 23px;max-width:24px;text-align: center;">
            <input type="submit" class="form-control" name="polio_ipv"style=" width: 100%; text-align: center;" value="${data[i].MR_first}">  
            </td>
            </div>
            </div>
            <div class="form-group">
            <div class="col-sm-10">
            <td  class="form-control" style=" margin-bottom: 23px;max-width:24px;text-align: center;">
            <input type="submit" class="form-control" name="pent_first"style=" width: 100%; text-align: center;" value="${data[i].MR_scande}"> 
            </td>
            </div>
            </div>
            <div class="form-group">
            <div class="col-sm-10">
            <td  class="form-control" style=" margin-bottom: 23px;max-width:24px;text-align: center;">
            <input type="submit" class="form-control" name="pent_first"style=" width: 100%; text-align: center;" value="${data[i].wid}"> 
            </td>
            </div>
            </div>
            </tr>`
            table.innerHTML += row
            }
            }
            function displaypatientinfo(pText)
            {
                divpatientinfo.innerHTML = pText;
            }
            </script>
            <iframe name="hiddenframe" src="" 
            style="width:0px ; height: 0px;"></iframe>
</body>
</html>