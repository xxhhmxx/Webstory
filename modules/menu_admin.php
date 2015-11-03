<div id="menumain">
<style>
#Khung{
	width:200px;
	text-align:center !important;
	line-height:40px;
}
#Khung:hover{
	width:200px;
	text-align:center;
	background-color:#03C;
	color:#FFF;
	display:block
}
#Khung:hover a{
	width:200px;
	text-align:center;
	background-color:#03C;
	line-height:35px;
	color:#FFF;
	display:block
}


</style>

<?php

$mu = basename($_SERVER['PHP_SELF']);
if($mu == 'admin.php')
{
?>
			<span > <a href="index.php" ><div class="dem"></div><b>TRANG CHỦ</b></a></span>
			<span> <a href="admin.php" ><div class="dem"></div><B>QUẢN LÝ TRUYỆN</B></a></span>
			<span> <a href="Add_edit_product.php" ><div class="dem"></div>THÊM TRUYỆN</a></span>
            <span> <a href="admin_user.php" ><div class="dem"></div>QUẢN LÝ THÀNH VIÊN</a></span>
            
<?php
}
else
{
	if($mu == 'admin_user.php')
	{
?>
			<span > <a href="index.php" ><div class="dem"></div><b>TRANG CHỦ</b></a></span>
			<span> <a href="admin.php" ><div class="dem"></div>QUẢN LÝ TRUYỆN</a></span>
			<span> <a href="Add_edit_product.php" ><div class="dem"></div>THÊM TRUYỆN</a></span>
            <span> <a href="admin_user.php" ><div class="dem"></div><B>QUẢN LÝ THÀNH VIÊN</B></a></span>
            
			
 <?php
		}
		else
		{
			if($mu == 'Add_edit_product.php')
			{
			?>
            <span > <a href="index.php" ><div class="dem"></div><b>TRANG CHỦ</b></a></span>
			<span> <a href="admin.php" ><div class="dem"></div>QUẢN LÝ TRUYỆN</a></span>
			<span> <a href="Add_edit_product.php" ><div class="dem"></div><B>THÊM TRUYỆN</B></a></span>
            <span> <a href="admin_user.php" ><div class="dem"></div>QUẢN LÝ THÀNH VIÊN</a></span>
			
			<?php
		
		}
		else
		{
?>
			<span > <a href="index.php" ><div class="dem"></div><b>TRANG CHỦ</b></a></span>
			<span> <a href="admin.php" ><div class="dem"></div>QUẢN LÝ TRUYỆN</a></span>
			<span> <a href="Add_edit_product.php" ><div class="dem"></div>THÊM TRUYỆN</a></span>
            <span> <a href="admin_user.php" ><div class="dem"></div>QUẢN LÝ THÀNH VIÊN</a></span>
            
          
<?php	
		}
	}
	}

 ?>
    <!-- tim kiem-->
    <div class="timkiem">  
        <form action="timkiemsp_admin.php" method="get">
            <fieldset style="border:0px #FFF inset">
            <div style=" float:right;border:1px #FFDF00 inset"><input name="sbtimkiem" type="submit" value='Tim'/>
            </div>
            
              <input style="float:right; border:2px #FFDF00 inset"
                    name = "txttimkiem" 
                    type = "text" 
                    size = "27"
                    maxlength="30"
                    value=""  
                 /> 
             <div class="ktnc" > <a href="timkiemnangcao_admin.php" style="color:#2A1FFF">Tìm kiếm nâng cao</a>  
             </div>
             </fieldset>
        </form>  
    </div>   
</div>    