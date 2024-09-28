
   
   

<?php
if($_SESSION['id'])
{ 
    ?>
<div class="contuener">
    <div class="header">
        <p class="p_1"><span class="sp-1">نظام ادارة</span>  مكتب الصحة لتطعيم الاطفال</p>
        <ul class="ts-profile-nav " style="background-color:slategrey ;">
			<li class="ts-account">
				<a href="#" style="font-size:18px;"class="social-icon-link"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side text-bold" alt=""> الحساب<i class="fa fa-angle-down hidden-side"></i></a>
				<ul style="font-size:18px;">
					<li><a href="#">حسابي</a></li>
					<li><a href="logout.php">تسجيل الخروج</a></li>
				</ul>
			</li>
		</ul>
    </div>
    </div>
    <?php
} else { 
    ?>
<div class="contuener">
    <div class="header">
        <p class="p_1"><span class="sp-1">نظام ادارة</span>  مكتب الصحة لتطعيم الاطفال</p>
        </div>
    </div>
    <?php
}
?>
</body>
</html>