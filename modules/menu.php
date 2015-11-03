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
if($mu == 'index.php')
{
?>
    <span id="Khung"> <a href="index.php" ><div class="dem"></div><b>TRANG CHỦ</b></a></span>
    <span id="Khung"> <a href="gioithieu.php" ><div class="dem"></div>GIỚI THIỆU</a></span>
    <span id="Khung"> <a href="lienhe.php" ><div class="dem"></div>LIÊN HỆ</a></span>
<?php
}
else
{
	if($mu == 'gioithieu.php')
	{
?>
		<span id="Khung"> <a href="index.php" ><div class="dem"></div>TRANG CHỦ</a></span>
		<span id="Khung"> <a href="gioithieu.php" ><div class="dem"></div><b>GIỚI THIỆU</b></a></span>
        <span id="Khung"> <a href="lienhe.php" ><div class="dem"></div>LIÊN HỆ</a></span>
 <?php
		
		}
		else
		{
?>
			<span id="Khung"> <a href="index.php" ><div class="dem"></div>TRANG CHỦ</a></span>
            <span id="Khung"> <a href="gioithieu.php" ><div class="dem"></div>GIỚI THIỆU</a></span>
            <span id="Khung"> <a href="lienhe.php" ><div class="dem"></div><b>LIÊN HỆ</b></a></span>
<?php	
		}
	}
 ?>
    <!-- tim kiem-->
    <div class="timkiem">  
        <form action="timkiemsp.php" method="get">
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
             <div class="ktnc" > <a href="timkiemnangcao.php" style="color:#2A1FFF">Tìm kiếm nâng cao</a>  
             </div>
             </fieldset>
        </form>  
    </div>   
</div>    