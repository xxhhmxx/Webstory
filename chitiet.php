<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đọc Truyện Online</title>

<link rel="stylesheet" href="stylebg.css" />
<script src="lib.js" ></script>


<style type="text/css">
#center fieldset
{
	width:96%;
	display:inline-block;
	color:#2A1FFF;
	font-family:Arial, Helvetica, sans-serif;
}
#center div
{
	margin-top:50px;
	margin:3px ;
	
}

.divl
{
	font-weight:bold;
	color:#000;
}
.divr
{
	font-weight:bold;
	color:#00F;
}
.ahsp
{
	float:left;
	width:40%;
	display:block;
	margin-left:20px;
}
.ct
{
	background-color:#FFF;
	background-image: url(images/template/b2.gif);
	background-repeat:repeat-x;
	padding:5px 5px 5px 5px;
	font-family:Arial, Helvetica, sans-serif;
	font-size:14pt;
	text-align:center;
	font-weight:lighter;

}
.box_text{
	width:100%;
	height:200px;
	float:left;
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
				
                <div class="ct" style="width:97%; border:0px"> Thông tin chi tiết về truyện</div>	
            
                  <form id="register" name="chitiet" method="post" action="#">
                <fieldset>
                    
                   <?php
						require('opendb.php');
						$masp = $_REQUEST['masp'];
						// xây dựng câu truy vấn
						$sql = sprintf('select * from product where codep = "%s"',$masp);
						// thực thi câu truy vấn, kết quả trả về dạng recordset
						$recordset = mysql_query($sql);
						require('closedb.php');
					?>
                    
                    <?php
					  while ($row = mysql_fetch_array($recordset))
					  {
					  ?>
                    
                            <span class="ahsp"> <img  width="60%" src="<?=$row[6]?>" height="200px"  /></span>
                    

                                <div id="half-left" style=" float:left; height:100px; margin-top:30px;margin-left:-50px;"> 
                                <div class="divl">Tên Truyện:</div>
                                <div class="divl">Số Chap:</div>
                                <div class="divl">Người Đăng: </div>
                                <div class="divl">Tác Giả: </div>
                                <div class="divl">Tình Trạng: </div>
                                <div class="divl">Thể Loại: </div>
                                </div>
                                <div id="half-right" style="float:left; height:100px; margin-top:30px;">
                                <div class="divr"><?=$row[8]?></div>
                                <div class="divr"><strong style="color:#F00"><?=$row[2]?> </strong></div>
                                <div class="divr"><?=$row[3]?></div>
                                <div class="divr"><?=$row[4]?></div>
                                <div class="divr"><?=$row[5]?></div> 
                                 <div class="divr"><?=$row[7]?></div>
                                </div> 
                	<?php
					  }
					  ?>
        </fieldset>
    </form>
				
						<div class="ct" style="width:97%; border:0px">Chap truyện</div>
					
					  <form id="register" name="chitiet" method="post" action="#" style="font">
                <fieldset>
                    
                   <?php
						require('opendb.php');
						$masp = $_REQUEST['masp'];
						// xây dựng câu truy vấn
						$sql = sprintf('select * from product where codep = "%s"',$masp);
						
						// thực thi câu truy vấn, kết quả trả về dạng recordset
						$recordset = mysql_query($sql);
						
						require('closedb.php');
					?>
                    
                    <?php
					  while ($row = mysql_fetch_array($recordset))
					  {
					  ?>
                       
					   <?php
							$j = $row[2];
							$i = 1;
							for ($i; $i <= $j; $i++){
								echo '<a href = "xemtruyen.php?masp='.$row[0].'&sochap='.$i.'"style="color:blue">';
								echo 'Chap '. $i .'<br>';
								echo '</a>';
							}
							?>
                	<?php
					  }
					  ?>
        </fieldset>
    </form>
                
				
              </div><!-- san pham moi-->
           
            </div><!-- khung trung tam-->
        <?php
			include('modules/footer.php');
			
			
		?>
        </div><!-- khung trang chinh-->
        
        
    	


</body>
</html>
