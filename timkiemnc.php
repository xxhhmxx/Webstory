<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đọc Truyện Online</title>

<link rel="stylesheet" href="stylebg.css" />
<script src="lib.js" ></script>
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
						if($_REQUEST['txttimkiem']!= "")
						{ 
							$slect = "select codep, hientrang, linkhinh, tentruyen from product ";
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
										$whr .= " and hientrang >= ".$t."";
									
										if($_REQUEST['txtden']!="")
										{
											$d = $_REQUEST['txtden'];
											$whr .= " and hientrang <= ".$d."";
										}
										
									}
									else
									{
										if($_REQUEST['txtden']!="")
										{
											$d = $_REQUEST['txtden'];
											$whr .= " and hientrang <= ".$d."";
										}
									}
								}
								else
								{
									if($_REQUEST['txttu']!="")
									{
										$t = $_REQUEST['txttu'];
										$whr .= " and hientrang >= ".$t."";
									
										if($_REQUEST['txtden']!="")
										{
											$d = $_REQUEST['txtden'];
											$whr .= " and hientrang <= ".$d."";
										}
									}
									else
									{
										if($_REQUEST['txtden']!="")
										{
											$d = $_REQUEST['txtden'];
											$whr .= " and hientrang <= ".$d."";
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
										$whr.= " and hientrang >= ".$t."";
									
										if($_REQUEST['txtden']!="")
										{
											$d = $_REQUEST['txtden'];
											$whr.= " and hientrang <= ".$d."";
										}
									}
								}
								else
								{
									if($_REQUEST['txttu']!="")
									{
										$t = $_REQUEST['txttu'];
										$whr.= " and hientrang >= ".$t."";
									
										if($_REQUEST['txtden']!="")
										{
											$d = $_REQUEST['txtden'];
											$whr.= " and hientrang <= ".$d."";
										}
									}
									else
									{
										if($_REQUEST['txtden']!="")
										{
											$d = $_REQUEST['txtden'];
											$whr.= " and hientrang <= ".$d."";
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
                            <a href="chitiet.php?masp=<?=$row['codep']?>">
                            	<img src="<?= $row['linkhinh']?>" width="100%" height="150px" />
                                                					 
                            <span class="tensp">
                                <strong><?=$row['tentruyen']?></strong>
                            </span>
                           	<span>
                               <strong style="color:#F00"><?=$row['hientrang']?> </strong>
                            </span></a>
                            <div class="muahang">
                                <a href="chitiet.php?masp=<?=$row['codep']?>">
                                	<input name="chitiet" type="submit" value="Chi tiết" class="nut"/>
                                </a>
                      		</div>
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
					$self = "timkiemnc.php";
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
							$nav .= sprintf('<a href="%s?page=%s &txttimkiem=%s&loai=%s&nguoidang=%s&txttu=%s&txtden=%s"> %s </a> ',$self,$page,$_REQUEST['txttimkiem'],$_REQUEST['loai'],$_REQUEST['nguoidang'],$_REQUEST['txttu'],$_REQUEST['txtden'],$page);
					   }
					}
					
					// tao lien ket den trang truoc & trang sau, trang dau, trang cuoi
					if ($pageNum > 1)
					{
					   $page  = $pageNum - 1;
					//   $prev  = " <a href=\"$self?page=$page\">[Trang trước]</a> ";
						$prev  = sprintf('<a href="%s?page=%s &txttimkiem=%s&loai=%s&nguoidang=%s&txttu=%s&txtden=%s"> [Trang trước] </a> ',$self,$page,$_REQUEST['txttimkiem'],$_REQUEST['loai'],$_REQUEST['nguoidang'],$_REQUEST['txttu'],$_REQUEST['txtden']);
						 
					   $first = sprintf('<a href="%s?page=1 &txttimkiem=%s&loai=%s&nguoidang=%s&txttu=%s&txtden=%s"> [Trang đầu] </a> ',$self,$_REQUEST['txttimkiem'],$_REQUEST['loai'],$_REQUEST['nguoidang'],$_REQUEST['txttu'],$_REQUEST['txtden']);
					}
					else
					{
					   $prev  = '&nbsp;'; // dang o trang 1, khong can in lien ket trang truoc
					   $first = '&nbsp;'; // va lien ket trang dau
					}
					
					if ($pageNum < $maxPage)
					{
					   $page = $pageNum + 1;
					   $next = sprintf('<a href="%s?page=%s &txttimkiem=%s&loai=%s&nguoidang=%s&txttu=%s&txtden=%s"> [Trang kế] </a> ',$self,$page,$_REQUEST['txttimkiem'],$_REQUEST['loai'],$_REQUEST['nguoidang'],$_REQUEST['txttu'],$_REQUEST['txtden']);
					
					   $last = sprintf('<a href="%s?page=%s &txttimkiem=%s&loai=%s&nguoidang=%s&txttu=%s&txtden=%s"> [Trang cuối] </a> ',$self,$maxPage,$_REQUEST['txttimkiem'],$_REQUEST['loai'],$_REQUEST['nguoidang'],$_REQUEST['txttu'],$_REQUEST['txtden']);
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
							printf('<div id="phantrang" style="color:#00F; font-size:30px; font-weight:bold">Bấm vào <a href="timkiemnangcao.php">Đây</a> để trở về trang tìm kiếm nâng cao.</div>');
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
