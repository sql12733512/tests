<?php


/*
include('checklogin.php');
check_login();*/
?>

<div>    
<nav class="ts-sidebar" style="background-color:slategrey ;">
    <ul class="ts-sidebar-menu">
    
        <li class="ts-label text-danger"style="font-size:16px;">الرئيسيه</li>
        <?PHP 
        
         if(isset($_SESSION['id']))
    
        { ?>

            <li><a href="chelderin_do.php"style="font-size:14px;"><i class="fa fa-desktop text-bold" style="padding-left: 1px;">    </i> سجل تحصين الاطفال  </a></li>
            <li><a href="register.php"style="font-size:14px;"><i class="fa fa-user"style="padding-left: 1px;"></i> تسجيل طفل جديد</a></li>
<li><a href="chang_password.php"style="font-size:14px;"><i class="fa fa-files-o"style="padding-left: 1px;"></i>تغيير كلمة المرور</a></li>
<li><a href="new.php"style="font-size:14px;"><i class="fa fa-file-o"style="padding-left: 1px;"></i> تحصين الطفل </a></li>
<li><a href="vaccination_card.php"style="font-size:14px;"><i class="fa fa-file-o"style="padding-left: 1px;"></i> بطاقة تحصين الطفل</a></li>

<li><a href="logout.php"style="font-size:14px;"><i class="fa fa-file-o"style="padding-left: 1px;"></i> تسجيل الخروج</a></li>
<?php } else { ?>
        
        <li><a href="admin.php"style="font-size:20px;"><i class="fa fa-users text-bold"style="padding-left: 10px;"></i> تسجيل دخول المسؤل</a></li>
        <li><a href="home.php"style="font-size:20px;"><i class="fa fa-user text-bold"style="padding-left: 10px;"></i> تسجيل دخول المستخدم</a></li>
       
<li><a href="logout.php"style="font-size:20px;"><i class="fa fa-file-o"style="padding-left: 1px;"></i> تسجيل الخروج</a></li>

        <?php } ?>

    </ul>
</nav>
</div>