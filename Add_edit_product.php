<?php
include('common.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản lý</title>

<link rel="stylesheet" href="stylebg.css" />
<script src="lib.js" ></script>

<style type="text/css">

</style>
</head>

<body onload="inTable_lich();startTime();">
	<div id="paperbg">
    	
        <div id="banner"><img id="banner" src="images/template/banner.png"/></div> <!-- khung banenr-->      
<?php // chen code menu
			include('modules/menu_admin.php');
		?>
   	        <div id="papermain">
        		<?php
					include('modules/leftcategogy_admin.php');
				?>
                <div id="right">
				<div class="title_lr">Tài khoản</div>
                <?php
					include('modules/rightcategory_admin.php');
				?>     
				</div>				
          <div id="center">
            	<div style="border:2px #FFA inset">
                       <!--<img width="100%" src="images/template/anhdong.gif" />
                        
                </div> <!-- khung quang cao-->
		
		
            <?php
			if(isLogged())
			{
				if($_SESSION['decentralization']=='A')
				{
					?>
					<div id="spmoi"> 
            <div class="title_c">Truyện Mới</div>
					<?php
					include('frmProduct.php');
					?>
			
                                   	
			<?php		
				}
			}else
			{
				echo ('<center><strong style="color:#F00"> Bạn phải là admin mới có thể thực hiện chức năng của admin!!!</strong><center>');
			}
			?>
                
            </div><!-- khung trung tam-->
            
        </div><!-- khung trang chinh-->
     
        <?php
			include('modules/footer.php');	
		?>
    </div>
</body>
</html>
