<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Liên hệ</title>

<link rel="stylesheet" href="stylebg.css" />

<style type="text/css">
#center div
{
	width:45%;
	float:left;
	margin:3px ;
	font-family:Arial, Helvetica, sans-serif;	
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
#center fieldset strong
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

.box_contact
{
	width:74%;
	height:60%;
}
.style1 {
	font-weight: bold;
	font-size: 18px;
}
</style>
</head>

<body>
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
                       
            <!--<div id="center">	
            <div class="dk" style="width:98%; border:1px"> Thành viên</div>	-->
<div>
	<table width="666" border="1">
		<tr><td class="style1"><div align="center">THÀNH VIÊN</div></td></tr>
	<table width="666" border="1">
			<tr>
				<th>Họ Tên</th>
				<th>MSSV</th>
				<th>SĐT</th>
			</tr>
			<tr>
				<td><div align="center">Diệp Thiên Lân</div></td>
				<td><div align="center">3111410037</div></td>
				<td><div align="center">01264590043</div></td>
			</tr>
			<tr>
				<td><div align="center">Đinh Thị Phương Hảo</div></td>
				<td><div align="center">3111410018</div></td>
				<td><div align="center">0909907322</div></td>
			</tr><tr>
				<td><div align="center">Huỳnh Hoàng Minh</div></td>
				<td><div align="center">3111410050</div></td>
				<td><div align="center">01648334690</div></td>
			</tr><tr>
				<td><div align="center">Trần Hoàng Cúc</div></td>
				<td><div align="center">3111410005</div></td>
				<td><div align="center">###########</div></td>
			</tr>
	</table>	
</div>
			<!--<span>
			<form action="#">
                <fieldset style="display: inline-table">
                <span class="li">
                	 <div class="divl">Diệp Thiên Lân <strong>:</strong></div>
                    <div>3111410037</div>
                    <div class="divl"> Đinh Thị Phương Hảo <strong>:</strong></div>
                    <div> 3111410018 </div>
                    <div class="divl">Huỳnh Hoàng Minh <strong>:</strong></div>
                    <div>3111410050</div>
					<div class="divl">Trần Hoàng Cúc <strong>:</strong></div>
					<div>3111410005</div>
                 </span>
			</fieldset>
			</form>
	</span>-->
            </div><!-- khung trung tam-->
            <?php
			include('modules/footer.php');
		?>
        </div><!-- khung trang chinh-->
</body>
</html>
