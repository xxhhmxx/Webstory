<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Giới thiệu</title>
<script src="lib.js" ></script>
<link rel="stylesheet" href="stylebg.css" />

<style type="text/css">
#center div
{
	width:45%;
	float:left;
	margin:3px ;
	font-family:Arial, Helvetica, sans-serif;
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

p
{
	color:#2A1FAA; 
	font-size:23px;
	
}
.li
{
	color:#2A1FAA; 
	font-size:23px;
}
p strong
{
	color:#F00; 
	font-size:25px;
}


</style>
</head>

<body onload="inTable_lich();startTime();"> 
	<div id="paperbg">
    	
        <div id="banner"><img id="banner" src="images/template/banner.png"/>
      </div> <!-- khung banner-->
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
                 <span>
                 	<fieldset  style="display: inline-table">
                    	<legend><h3 style="color:#F00; font-size:23px">Giới thiệu sơ lược về trang wed</h3></legend>
                        
                       <center> 	<h2 style="color:#D41FAA; font-size:27px">Chào mừng các bạn đến với <strong style="color:#F00; font-size:27px">TruyệnOnline.</strong></h2></center>

<p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Trước tiên, chúng tôi xin gửi tới Quý khách lời cảm ơn chân thành nhất<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong style="color:#F00; font-size:27px">TruyệnOnline</strong> sẽ mang đến cho các bạn một thế giới đầy màu sắc về những câu chuyện, những nhân vật đầy màu sắc, tình huống hấp dẫn kịch tính. Chúng tôi hướng đến một trải nghiệm chuyên nghiệp trong việc truyền tải những thông điệp, cảm xúc nội dung của truyện đến người xem.<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hãy đến với<strong style="color:#F00; font-size:27px">TruyệnOnline</strong> để có những trải nghiệm thú vị nhất. <strong>"Niềm vui của các bạn cũng chính là niềm vui rất lớn của chúng tôi."</strong> </p>
<center><strong style="font-size:27px">Chào mừng các bạn đến với <strong style="color:#F00; font-size:27px">TruyệnOnline</strong>!</strong></center>
                    </fieldset>
                 </span>
				 </div>
            </div><!-- khung trung tam-->
            <?php
			include('modules/footer.php');
		?>
        </div><!-- khung trang chinh-->

</body>
</html>
