<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng ký thành viên</title>

<link rel="stylesheet" href="stylebg.css" />

<style type="text/css">
#center div
{
	width:45%;
	float:left;
	margin:3px ;
	
}
#center fieldset
{
	display:inline-block;
	font-weight:bold;
	color:#2A1FFF;
	font-family:Arial, Helvetica, sans-serif;
}
#center legend
{
	color:#F00;
}
.divl
{
	text-align:right;
}
.dk
{
	background-color:#FFF;
	background-image: url(images/template/b2.gif);
	background-repeat:repeat-x;
	padding:5px 5px 5px 5px;
	font-family:Arial, Helvetica, sans-serif;
	font-size:14pt;
	text-align:center;
	
	

}

</style>
</head>

<body onload="inTable_lich();startTime();"> 
	<div id="paperbg">
    	
       <div id="banner"><img id="banner" src="images/template/banner.png"/></div> <!-- khung banenr-->
        <?php // chen code menu
			include('modules/menu.php');
		?>
   	        <div id="papermain">
        		<?php
					include('modules/leftcategory.php');
				?>
                  <div id="right">
        <div class="title_lr">Tài khoản</div>
               
                <?php
					include('modules/rightcategory.php');
				?>
            </div>
                       
            <div id="center">	
            <div class="dk" style="width:97%; border:0px"> Rất vui nếu bạn là thành viên của <strong>doctruyenonline</strong> !!!</div>		
			
              <?php
			  include('maudk.php');
			  ?>

            </div><!-- khung trung tam-->
            
        </div><!-- khung trang chinh-->
        
        <?php
			include('modules/footer.php');
		?>
   

    </div>
</body>
</html>
