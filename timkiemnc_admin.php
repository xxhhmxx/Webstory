<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
</head>

<body onload="inTable_lich();startTime();"> 
	<div id="paperbg">
		<div id="banner"><img id="banner" src="images/template/banner.jpg"/></div> <!-- khung banenr-->
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
                	<div class="title_c">Kết quả tìm kiếm của bạn</div>
                    
                    <?php
						//require('opendb.php');
						//$sql = "";
						//var_dump($_REQUEST['txttimkiem']);
						
						require 'DataProvider.php';
						$rowsPerPage = 8;
						$pageNum = 1;
						if(isset($_GET['page']))
						{
							$pageNum = $_GET['page'];
						}
						$offset = ($pageNum - 1) * $rowsPerPage;
						if(isset($_REQUEST['txttimkiem']))
						{
						if($_REQUEST['txttimkiem']!= "")
						{ 
							$slect = "select codep, sotap, linkhinh from product ";
							$th = $_REQUEST['txttimkiem'];						
							$whr = " where codep like '%".$th."%'";
							if($_REQUEST['loai']!= "")
							{
								$l = $_REQUEST['loai'];
								$whr.=" and codek = '".$l."' ";
								if($_REQUEST['nguoidang']!="")
								{
									$xx = $_REQUEST['nguoidang'];
									$whr .= " and nguoidang = '".$xx."'";	
									if($_REQUEST['txttu']!="")
									{
										$t = $_REQUEST['txttu'];
										$whr .= " and sotap >= ".$t."";
									
										if($_REQUEST['txtden']!="")
										{
											$d = $_REQUEST['txtden'];
											$whr .= " and sotap <= ".$d."";
										}
										
									}
									else
									{
										if($_REQUEST['txtden']!="")
										{
											$d = $_REQUEST['txtden'];
											$whr .= " and sotap <= ".$d."";
										}
									}
								}
								else
								{
									if($_REQUEST['txttu']!="")
									{
										$t = $_REQUEST['txttu'];
										$whr .= " and sotap >= ".$t."";
									
										if($_REQUEST['txtden']!="")
										{
											$d = $_REQUEST['txtden'];
											$whr .= " and sotap <= ".$d."";
										}
									}
									else
									{
										if($_REQUEST['txtden']!="")
										{
											$d = $_REQUEST['txtden'];
											$whr .= " and sotap <= ".$d."";
										}
									}
								}
							}
							else
							{
								if($_REQUEST['nguoidang']!="")
								{
									$xx = $_REQUEST['nguoidang'];
									$whr.= " and nguoidang = '".$xx."'";	
									if($_REQUEST['txttu']!="")
									{
										$t = $_REQUEST['txttu'];
										$whr.= " and sotap >= ".$t."";
									
										if($_REQUEST['txtden']!="")
										{
											$d = $_REQUEST['txtden'];
											$whr.= " and sotap <= ".$d."";
										}
									}
								}
								else
								{
									if($_REQUEST['txttu']!="")
									{
										$t = $_REQUEST['txttu'];
										$whr.= " and sotap >= ".$t."";
									
										if($_REQUEST['txtden']!="")
										{
											$d = $_REQUEST['txtden'];
											$whr.= " and sotap <= ".$d."";
										}
									}
									else
									{
										if($_REQUEST['txtden']!="")
										{
											$d = $_REQUEST['txtden'];
											$whr.= " and sotap <= ".$d."";
										}
									
									}
								}
							}
							
						
				
				
//				var_dump($sql);
				
			//var_dump($result);
			$i = 0;
//				var_dump($result = mysql_query($sql));
				if(isset($whr))
				{
					$sql1 = $slect." ".$whr;
					
					$sql1 .= " limit ".$offset.", ".$rowsPerPage."";		
					$result = DataProvider::executeQuery($sql1);

				while ($row = mysql_fetch_array($result))
					  {
					?>
                    <div class="sanpham">
                            <a href="chitiet.php?masp=<?=$row['codep']?> ">
                            	<img src="<?= $row['linkhinh']?>" width="100%" height="150px" />
                                                					 
                            <span class="tensp">
                                <strong><?=$row['codep']?></strong>
                            </span>
                           	<span>
                               <strong style="color:#F00"><?=$row['sotap']?></strong>
                            </span></a>
                            <div class="muahang">
                                <a href="chitiet.php?masp=<?=$row['codep']?>">
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
	
					  if($i==0)
					  {
						  printf('<div id="phantrang" style="color:#00F; font-size:30px; font-weight:bold">Không tìm thấy sản phẩm bạn đang tìm.</div>');
					  }
				}
					  ?>
                      <?php
					// dem so mau tin co trong CSDL
					//$sql   = "SELECT COUNT(*) AS numrows FROM product";
					//$sql = sprintf('select count(*) as numrows from product where thuong');		
					$slect = "select count(*) as numrows from product ";
					$sql2 = $slect." ".$whr;
					$result = DataProvider::executeQuery($sql2);
					$row     = mysql_fetch_array($result, MYSQL_ASSOC);
					$numrows = $row['numrows'];
					
					// tinh tong so trang se hien thi
					$maxPage = ceil($numrows/$rowsPerPage);
					
					// hien thi lien ket den tung trang
					$self = "timkiemnc_admin.php";
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
							$nav .= sprintf('<a href="%s?txttimkiem=%s&loai=%s&nguoidang=%s&txttu=%s&txtden=%s&page=%s"> %s </a> ',$self,$_REQUEST['txttimkiem'],$_REQUEST['loai'],$_REQUEST['nguoidang'],$_REQUEST['txttu'],$_REQUEST['txtden'],$page,$page);
					   }
					}
					
					// tao lien ket den trang truoc & trang sau, trang dau, trang cuoi
					if ($pageNum > 1)
					{
					   $page  = $pageNum - 1;
					//   $prev  = " <a href=\"$self?page=$page\">[Trang trước]</a> ";
						$prev  = sprintf('<a href="%s?txttimkiem=%s&loai=%s&nguoidang=%s&txttu=%s&txtden=%s&page=%s"> [Trang trước] </a> ',$self,$_REQUEST['txttimkiem'],$_REQUEST['loai'],$_REQUEST['nguoidang'],$_REQUEST['txttu'],$_REQUEST['txtden'],$page);
						 
					   $first = sprintf('<a href="%s?txttimkiem=%s&loai=%s&nguoidang=%s&txttu=%s&txtden=%s&page=1"> [Trang đầu] </a> ',$self,$_REQUEST['txttimkiem'],$_REQUEST['loai'],$_REQUEST['nguoidang'],$_REQUEST['txttu'],$_REQUEST['txtden']);
					}
					else
					{
					   $prev  = '&nbsp;'; // dang o trang 1, khong can in lien ket trang truoc
					   $first = '&nbsp;'; // va lien ket trang dau
					}
					
					if ($pageNum < $maxPage)
					{
					   $page = $pageNum + 1;
					   $next = sprintf('<a href="%s?txttimkiem=%s&loai=%s&nguoidang=%s&txttu=%s&txtden=%s&page=%s "> [Trang kế] </a> ',$self,$_REQUEST['txttimkiem'],$_REQUEST['loai'],$_REQUEST['nguoidang'],$_REQUEST['txttu'],$_REQUEST['txtden'],$page);
					
					   $last = sprintf('<a href="%s?txttimkiem=%s&loai=%s&nguoidang=%s&txttu=%s&txtden=%s&page=%s"> [Trang cuối] </a> ',$self,$_REQUEST['txttimkiem'],$_REQUEST['loai'],$_REQUEST['nguoidang'],$_REQUEST['txttu'],$_REQUEST['txtden'],$maxPage);
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
					}}
						else
						{
							printf('<div id="phantrang" style="color:#00F; font-size:30px; font-weight:bold">Bạn chưa nhập từ khóa tìm kiếm.</div>');
							printf('<div id="phantrang" style="color:#00F; font-size:30px; font-weight:bold">Bấm vào <a href="timkiemnangcao_admin.php">Đây</a> để trở về trang tìm kiếm nâng cao.</div>');
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
