<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đọc Truyện Online</title>

<link rel="stylesheet" href="stylebg.css" />
<script src="lib.js" ></script>

<style type="text/css">

</style>
</head>

<body onload="inTable_lich();startTime();"> 
	<div id="paperbg">
		<div id="banner"><img id="banner" src="images/template/banner.jpg"/></div> <!-- khung banenr-->
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
				
                <div id="spmoi"> 
                	<div class="title_c">Kết quả tìm kiếm của bạn</div>
                    
                    <?php
						require 'DataProvider.php';
						$rowsPerPage = 8;
						$pageNum = 1;
						if(isset($_GET['page']))
						{
							$pageNum = $_GET['page'];
						}
						
						$offset = ($pageNum - 1) * $rowsPerPage;
						
						if($_REQUEST['txttimkiem']!=NULL)
						{
							$th = $_REQUEST['txttimkiem'];
							$sql = "select tentruyen, sotap, linkhinh, codep from product where codep like '%".$th."%' or tentruyen like '%".$th."%' limit ".$offset.", ".$rowsPerPage."";
							$result = DataProvider::executeQuery($sql);
					?>
                    
                    <?php
							$dem=0;	
					 while ($row = mysql_fetch_array($result))
					  {
						  $i = 1;
						  ?>
                	<div class="sanpham">
                            <a href="chitiet.php?masp=<?=$row[3]?>">
                            	<img src="<?= $row[2]?>" width="100%" height="150px" />
                                                					 
                            <span class="tensp">
                                <strong><?=$row[0]?></strong>
                            </span>
                           	<span>
                               <strong style="color:#F00"><?=$row[1]?> tập</strong>
                            </span></a>
                            <div class="muahang">
                                <a href="chitiet.php?masp=<?=$row[3]?>">
                                	<input name="chitiet" type="submit" value="Chi tiết" class="nut"/>
                                </a>
                      		</div>
							
                  </div>    
                  <?php
							$i++;
					   $dem++;
					  }
						if($dem==0)
						{
							printf('<div id="phantrang" style="color:#00F; font-size:30px; font-weight:bold">Không tìm thấy sản phẩm bạn đang tìm.</div>');
						}
						
						
						
						?>
                        
                        <?php
					// dem so mau tin co trong CSDL
					//$sql   = "SELECT COUNT(*) AS numrows FROM product";
					//$sql = sprintf('select count(*) as numrows from product where thuong');		
					$sql = "select count(*) as numrows from product where codep like '%".$th."%'";
					$result = DataProvider::executeQuery($sql);
					$row     = mysql_fetch_array($result, MYSQL_ASSOC);
					$numrows = $row['numrows'];
					
					// tinh tong so trang se hien thi
					$maxPage = ceil($numrows/$rowsPerPage);
					
					// hien thi lien ket den tung trang
					$self = "timkiemsp.php";
					$nav  = '';
					for($page = 1; $page <= $maxPage; $page++)
					{
					   if ($page == $pageNum)
					   {
						  $nav .= sprintf(' %s ',$page ); // khong can tao link cho trang hien hanh
					   }
					   else
					   {
						  //$nav .= " <a href=\"$self?page=$page\">$page</a> ";
							$nav .= sprintf('<a href="%s?page=%s &txttimkiem=%s"> %s </a> ',$self,$page,$_REQUEST['txttimkiem'],$page);
					   }
					}
					
					// tao lien ket den trang truoc & trang sau, trang dau, trang cuoi
					if ($pageNum > 1)
					{
					   $page  = $pageNum - 1;
					//   $prev  = " <a href=\"$self?page=$page\">[Trang trước]</a> ";
						$prev  = sprintf('<a href="%s?page=%s &txttimkiem=%s"> [Trang trước] </a> ',$self,$page,$_REQUEST['txttimkiem']);
						 
					   $first = sprintf('<a href="%s?page=1 &txttimkiem=%s"> [Trang đầu] </a> ',$self,$_REQUEST['txttimkiem']);
					}
					else
					{
					   $prev  = '&nbsp;'; // dang o trang 1, khong can in lien ket trang truoc
					   $first = '&nbsp;'; // va lien ket trang dau
					}
					
					if ($pageNum < $maxPage)
					{
					   $page = $pageNum + 1;
					   $next = sprintf('<a href="%s?page=%s &txttimkiem=%s"> [Trang kế] </a> ',$self,$page,$_REQUEST['txttimkiem']);
					
					   $last = sprintf('<a href="%s?page=%s &txttimkiem=%s"> [Trang cuối] </a> ',$self,$maxPage,$_REQUEST['txttimkiem']);
					}
					else
					{
					   $next = '&nbsp;'; // dang o trang cuoi, khong can in lien ket trang ke
					   $last = '&nbsp;'; // va lien ket trang cuoi
					}
					
					// hien thi cac link lien ket trang
					//echo "<center>". $first . $prev . $nav . $next . $last . "</center>";
					?>
					<div id="phantrang"><?php printf('%s %s %s %s %s',$first , $prev , $nav , $next ,$last)?></div>
                        
                    <?php
					}
						else
						{
							printf('<div id="phantrang" style="color:#00F; font-size:30px; font-weight:bold">Bạn chưa nhập từ khóa tìm kiếm.</div>');
						}
					?>    
              </div><!-- san pham moi-->
                
            </div><!-- khung trung tam-->
            
        </div><!-- khung trang chinh-->
        
        
        
    	<?php
			include('modules/footer.php');
		?>

    </div>
</body>
</html>
