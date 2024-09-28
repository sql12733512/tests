
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
   <script type="text/javascript">
 window = function(){
    parent.displaypatientinfo(
        divinfo.innerHTML
    );
 }
        </script>

</head>



<body>


<div id="divinfo">

<?php

include('config.php');
date_default_timezone_set('Asia/Kolkata');

$reg_noo = $_GET["ido"];
include('new.php');       
?>
<?php
$stmt=$mysqli->prepare("SELECT reg_no FROM children WHERE reg_no=?   ");
				$stmt->bind_param('s',$reg_noo);
				$stmt->execute();
				$stmt -> bind_result($reg_noo);
				$rs=$stmt->fetch();
				$stmt->close();
                
                    $_SESSION['reg_noo']=$reg_noo;
                    $uip=$_SERVER['REMOTE_ADDR'];
         
        

?>
</div>
</body>
</html>


