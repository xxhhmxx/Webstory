l<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đọc Truyện Online</title>
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
				
                <div id="spmoi"> 
                	<div class="title_c">Danh sách các sản phẩm</div>
                    
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
			
						$sql = sprintf('select codep, sotap, linkhinh, tentruyen from product where codek="%s" or tacgia="%s" limit %s, %s',$id,$id,$offset,$rowsPerPage);
						
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
                            <a href="chitiet.php?masp=<?=$row[0]?>&id=<?=$id?>">
                            	<img src="<?= $row[2]?>" width="100%" height="150px" />
                                                					 
                            <span class="tensp">
                                <strong><?=$row[3]?></strong>
                            </span>
                           	<span>
                               <strong style="color:#F00"><?=$row[1]?></strong>
                            </span></a>
                            <div class="muahang">
                                <a href="chitiet.php?masp=<?=$row[0]?>&id=<?=$id?>">
                                	<input name="chitiet" type="submit" value="Chi tiết" class="nut"/>
                                </a>
                      		</div>
                         <?php
								if(isLogged())
								{
								if($_SESSION['decentralization']=="A")
								{
								
								?>
									<div class="sua"><a href="Add_edit_product.php?codep=<?=$row[0]?>"><img src="images/template/sua2.jpg" /></a></div>
								    
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
					$sql = sprintf('select count(*) as numrows from product where (codek="%s" or tacgia="%s")',$id,$id);		
					$result = DataProvider::executeQuery($sql);
					$row     = mysql_fetch_array($result, MYSQL_ASSOC);
					$numrows = $row['numrows'];
					
					// tinh tong so trang se hien thi
					$maxPage = ceil($numrows/$rowsPerPage);
					
					// hien thi lien ket den tung trang
					$self = sprintf('product_admin.php');
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
							$nav .= sprintf('<a href="%s?page=%s&id=%s""> %s </a> ',$self,$page,$id,$page);
					   }
					}
					
					// tao lien ket den trang truoc & trang sau, trang dau, trang cuoi
					if ($pageNum > 1)
					{
					   $page  = $pageNum - 1;
					//   $prev  = " <a href=\"$self?page=$page\">[Trang trước]</a> ";
						$prev  = sprintf('<a href="%s?page=%s&id=%s""> [Trang trước] </a> ',$self,$page,$id);
						 
					   $first = sprintf('<a href="%s?page=1&id=%s""> [Trang đầu] </a> ',$self,$id);
					}
					else
					{
					   $prev  = '&nbsp;'; // dang o trang 1, khong can in lien ket trang truoc
					   $first = '&nbsp;'; // va lien ket trang dau
					}
					
					if ($pageNum < $maxPage)
					{
					   $page = $pageNum + 1;
					   $next = sprintf('<a href="%s?page=%s&id=%s" "> [Trang kế] </a> ',$self,$page,$id);
					
					   $last = sprintf('<a href="%s?page=%s&id=%s"> [Trang cuối] </a> ',$self,$maxPage,$id);
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
                
            </div><!-- khung trung tam-->
            
        </div><!-- khung trang chinh-->
        
        
        
    	<?php
			include('modules/footer.php');
			
			
		?>

    </div>
</body>
</html>
