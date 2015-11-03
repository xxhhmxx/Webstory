<?php
include('common.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản lý</title>
<script src="lib.js" ></script>
<script>
function ktXoa(codep)
{
	if (confirm('Bạn có chắc xóa không?'))
	{
		document.location = 'processProduct.php?control=del&codep=' + codep;
	}
}
</script>

<link rel="stylesheet" href="stylebg.css" />

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
				
                <div id="spmoi"> 
                	<div class="title_c">Sản phẩm mới</div>
                                   	
					<?php
						//require('opendb.php');
						require 'DataProvider.php';

						// Cau hinh cac tham so phan trang
						// so dong tren 1 trang
						$rowsPerPage = 8;
						
						// mac dinh hien thi trang 1
						$pageNum = 1;
						
						// neu co tham so $_GET['page'] thi su dung no la trang hien thi
						if(isset($_GET['page']))
						{
							$pageNum = $_GET['page'];
						}
						
						// dem chi so cua mau tin dau tien
						$offset = ($pageNum - 1) * $rowsPerPage;
						/*$sql = "SELECT * FROM product" .
								" LIMIT $offset, $rowsPerPage";*/

						// xây dựng câu truy vấn
			
						$sql = sprintf('select codep, sotap, linkhinh, tentruyen from product where hientrang = "Đang Tiến Hành" limit %s, %s',$offset,$rowsPerPage);
						
						// thực thi câu truy vấn, kết quả trả về dạng recordset
						$result = DataProvider::executeQuery($sql);
						
						//require('closedb.php');
					?>
                    
                    <?php
								
					 while ($row = mysql_fetch_array($result))
					  {
						  $i = 1;
						  ?>
                	<div class="sanpham">
                             <a href="chitiet.php?masp=<?=$row[0]?>">
                            	<img src="<?= $row[2]?>" width="100%" height="150px" />
                                                					 
                            <span class="tensp">
                                <strong><?=$row[3]?></strong>
                            </span>
                           	<span>
                               <strong style="color:#F00"><?=$row[1]?></strong>
                            </span></a>
                            <div class="muahang">
                                <a href="chitiet.php?masp=<?=$row[0]?>">
                                	<input name="chitiet" type="submit" value="Chi tiết" class="nut"/>
                                </a>
                      		</div>
							<?php
								if(isLogged())
								{
								if($_SESSION['decentralization']=="A")
								{
								?>
									<div class="sua"><a href="edit_product.php?codep=<?=$row[0]?>"><img src="images/template/sua2.jpg" /></a></div>
								    
									<div class="xoa"><a onclick="ktXoa('<?= $row[0]?>');" href="javascript:void(0)"><img src="images/template/xoa.jpg" /></a></div> 
										
								<?php
								}
								}
								?>
                  </div>    
                  <?php
							$i++;
							
					   }   
					   	?>
					   
					<?php
					// dem so mau tin co trong CSDL
					//$sql   = "SELECT COUNT(*) AS numrows FROM product";
					$sql = sprintf('select count(*) as numrows from product where hientrang = "Đang Tiến Hành"');		
					$result = DataProvider::executeQuery($sql);
					$row     = mysql_fetch_array($result, MYSQL_ASSOC);
					$numrows = $row['numrows'];
					
					// tinh tong so trang se hien thi
					$maxPage = ceil($numrows/$rowsPerPage);
					
					// hien thi lien ket den tung trang
					$self = "admin.php";
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
							$nav .= sprintf('<a href="%s?page=%s"> %s </a> ',$self,$page,$page);
					   }
					}
					
					// tao lien ket den trang truoc & trang sau, trang dau, trang cuoi
					if ($pageNum > 1)
					{
					   $page  = $pageNum - 1;
					//   $prev  = " <a href=\"$self?page=$page\">[Trang trước]</a> ";
						$prev  = sprintf('<a href="%s?page=%s"> [Trang trước] </a> ',$self,$page);
						 
					   $first = sprintf('<a href="%s?page=1"> [Trang đầu] </a> ',$self);
					}
					else
					{
					   $prev  = '&nbsp;'; // dang o trang 1, khong can in lien ket trang truoc
					   $first = '&nbsp;'; // va lien ket trang dau
					}
					
					if ($pageNum < $maxPage)
					{
					   $page = $pageNum + 1;
					   $next = sprintf('<a href="%s?page=%s"> [Trang kế] </a> ',$self,$page);
					
					   $last = sprintf('<a href="%s?page=%s"> [Trang cuối] </a> ',$self,$maxPage);
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
                                                                                
              </div><!-- san pham moi-->
              
              <div id="spmoi">
              		<div class="title_c">Sản phẩm nổi bật</div>
                	<?php
						//require('opendb.php');
						//require 'DataProvider.php';

						// Cau hinh cac tham so phan trang
						// so dong tren 1 trang
						$rowsPerPage1 = 8;
						
						// mac dinh hien thi trang 1
						$pageNum1 = 1;
						
						// neu co tham so $_GET['page'] thi su dung no la trang hien thi
						if(isset($_GET['page']))
						{
							$pageNum1 = $_GET['page'];
						}
						
						// dem chi so cua mau tin dau tien
						$offset1 = ($pageNum1 - 1) * $rowsPerPage1;
						/*$sql = "SELECT * FROM product" .
								" LIMIT $offset, $rowsPerPage";*/

						// xây dựng câu truy vấn
			
						$sql1 = sprintf('select codep, sotap, linkhinh,tentruyen from product where nguoidang = "Hảo" limit %s, %s',$offset1,$rowsPerPage1);
						
						// thực thi câu truy vấn, kết quả trả về dạng recordset
						$result1 = DataProvider::executeQuery($sql1);
						
						//require('closedb.php');
					?>
                    
                    <?php
								
					 while ($row1 = mysql_fetch_array($result1))
					  {
						  $i = 1;
						  ?>
                	<div class="sanpham">
					 <a href="chitiet.php?masp=<?=$row1[0]?>">
                          
                            	<img src="<?= $row1[2]?>" width="100%" height="150px" />
                                                					 
                            <span class="tensp">
                                <strong><?=$row1[3]?></strong>
                            </span>
                           	<span>
                               <strong style="color:#F00"><?=$row1[1];?></strong>
                            </span></a>
                            <div class="muahang">
                                <a href="chitiet.php?masp=<?=$row1[0]?>">
                                	<input name="chitiet" type="submit" value="Chi tiết" class="nut"/>
                                </a>
                      		</div>
							<?php
								if(isLogged())
								{
									if($_SESSION['decentralization']=="A")
									{
								?>
									<div class="sua"><a href="Add_edit_product.php?codep=<?=$row1[0]?>"><img src="images/template/sua2.jpg" /></a></div>
								    
									<div class="xoa"><a onclick="ktXoa('<?= $row1[0]?>');" href="javascript:void(0)"><img src="images/template/xoa.jpg" /></a></div> 
								<?php
								}
								}
							?>
                  </div>    
                  <?php
							$i++;
					   }
					   ?>
					
                       
					<?php
					// dem so mau tin co trong CSDL
					//$sql   = "SELECT COUNT(*) AS numrows FROM product";
					$sql1 = sprintf('select count(*) as numrows from product where nguoidang = "Hảo"');		
					$result1 = DataProvider::executeQuery($sql1);
					$row     = mysql_fetch_array($result1, MYSQL_ASSOC);
					$numrows1 = $row['numrows'];
					
					// tinh tong so trang se hien thi
					$maxPage1 = ceil($numrows1/$rowsPerPage1);
					
					// hien thi lien ket den tung trang
					$self1 = "admin.php";
					$nav1  = '';
					for($page1 = 1; $page1 <= $maxPage1; $page1++)
					{
					   if ($page1 == $pageNum1)
					   {
						  $nav1 .= sprintf(' %s ',$page1 ); // khong can tao link cho trang hien hanh
					   }
					   else
					   {
						  //$nav .= " <a href=\"$self?page=$page\">$page</a> ";
							$nav1 .= sprintf('<a href="%s?page=%s"> %s </a> ',$self1,$page1,$page1);
					   }
					}
					
					// tao lien ket den trang truoc & trang sau, trang dau, trang cuoi
					if ($pageNum1 > 1)
					{
					   $page1  = $pageNum1 - 1;
					//   $prev  = " <a href=\"$self?page=$page\">[Trang trước]</a> ";
						$prev1  = sprintf('<a href="%s?page=%s"> [Trang trước] </a> ',$self1,$page1);
						 
					   $first1 = sprintf('<a href="%s?page=1"> [Trang đầu] </a> ',$self1);
					}
					else
					{
					   $prev1  = '&nbsp;'; // dang o trang 1, khong can in lien ket trang truoc
					   $first1 = '&nbsp;'; // va lien ket trang dau
					}
				
					if ($pageNum1 < $maxPage1)
					{
					   $page1 = $pageNum1 + 1;
					   $next1 = sprintf('<a href="%s?page=%s"> [Trang kế] </a> ',$self1,$page1);
					
					   $last1 = sprintf('<a href="%s?page=%s"> [Trang cuối] </a> ',$self1,$maxPage1);
					}
					else
					{
					   $next1 = '&nbsp;'; // dang o trang cuoi, khong can in lien ket trang ke
					   $last1 = '&nbsp;'; // va lien ket trang cuoi
					}
					
					// hien thi cac link lien ket trang
					//echo "<center>". $first . $prev . $nav . $next . $last . "</center>";
					?>
					<div id="phantrang"><?php printf('%s %s %s %s %s',$first1 , $prev1 , $nav1, $next1 ,$last1 )?></div>                             
                                                                                                                        
              </div><!--san pham noi bat-->
                
            </div><!-- khung trung tam-->
            
        </div><!-- khung trang chinh-->
        
<?php
			include('modules/footer.php');
			
			
			
		?>
   

    </div>
</body>
</html>
