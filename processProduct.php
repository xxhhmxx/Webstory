<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//include('common.php');
?>
<?php
if ((($_FILES["linkhinh"]["type"] == "image/gif")
|| ($_FILES["linkhinh"]["type"] == "image/png")
|| ($_FILES["linkhinh"]["type"] == "image/jpeg")
|| ($_FILES["linkhinh"]["type"] == "image/pjpeg"))
&& ($_FILES["linkhinh"]["size"] > 20))
  {
  if ($_FILES["linkhinh"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["linkhinh"]["error"] . "<br />";
    }
    if (file_exists("image/" . $_FILES["linkhinh"]["name"]))
      {
      echo $_FILES["linkhinh"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["linkhinh"]["tmp_name"], "image/" . $_FILES["linkhinh"]["name"]);
    // echo "Stored in: " . "image/" . $_FILES["linkhinh"]["name"];
      }
    }
  

?>

<?php
if(isset($_REQUEST['control']))
{
	if($_REQUEST['control'] == 'del')
	{
		require('opendb.php');	
	
		$sql = sprintf('delete from product where codep="%s"', $_REQUEST['codep']);
		//var_dump($sql);
		
		$result = mysql_query($sql);
		
		require('closedb.php');
		
		if($result) // xóa thành công
		{
			
			$s = sprintf('Location: %s', 'admin.php');
			header($s);
		}
		else
		{
			echo('<center><strong style="color:#F00">Xóa thất bại. Nhấn vào <a href="admin.php">đây</a> để quay trở lại</strong><center>');
		}
	}
	else if ($_REQUEST['control'] == 'add')
	{
		require('opendb.php');	
		
		$hinh = "image/" . $_FILES["linkhinh"]["name"];
	
		$sql = sprintf('insert into product values("%s", "%s", "%s","%s", "%s", "%s", "%s","%s","%s")', $_REQUEST['txtcodep'], $_REQUEST['txtcodek'], $_REQUEST['txtsotap'], $_REQUEST['txtnguoidang'], $_REQUEST['txttacgia'], $_REQUEST['txthientrang'],$hinh,$_REQUEST['txtcodek'],$_REQUEST['txttentruyen'] );
		//var_dump($sql);
		
		$result = mysql_query($sql);
		
		require('closedb.php');
		
		if($result) // thêm thành công
		{
			//$s = sprintf('Location: %s', 'admin.php');
			//header($s);
			?>
            <center class="admin"><strong style="color:#F00;font-size:30px;">Thêm thành công.</strong></center>
            <?php
			header("Refresh:1 ;url=admin.php");
		}
		else
		{
			?>
            <center class="admin"><strong style="color:#F00;font-size:30px;">Thêm thất bại.</strong></center>
            <?php
			header("Refresh:1 ;url=admin.php");
			//echo('<center><strong style="color:#F00">Thêm thất bại. Nhấn vào <a href="admin.php">đây</a> để quay trở lại</strong></center>');
		}	
	}
	else if ($_REQUEST['control'] == 'edit')
	{
		require('opendb.php');	
		
		$hinh = "image/" . $_FILES["linkhinh"]["name"];
		if($hinh!='image/')
		
		{
		$sql = sprintf('update product set codek = "%s",  sotap= "%s", nguoidang = "%s",  tacgia = "%s",  hientrang= "%s",  linkhinh = "%s", theloai="%s", tentruyen="%s" where codep = "%s"',$_REQUEST['txtcodek'], $_REQUEST['txtsotap'], $_REQUEST['txtnguoidang'], $_REQUEST['txttacgia'], $_REQUEST['txthientrang'], $hinh,$_REQUEST['txtcodek'],$_REQUEST['txttentruyen'], $_REQUEST['txtcodep']);
			//var_dump($sql);
		}
		else
		{
				$sql = sprintf('update product set codek = "%s",  sotap= "%s", nguoidang = "%s", tacgia = "%s",  hientrang= "%s",  linkhinh = "%s" where codep = "%s"',$_REQUEST['txtCodek'], $_REQUEST['txtsotap'], $_REQUEST['txtnguoidang'], $_REQUEST['txttacgia'], $_REQUEST['txthientrang'], $_REQUEST['hinh'],$_REQUEST['txtCodep']);
		}
		$result = mysql_query($sql);
		
		require('closedb.php');
		
		if($result) // thành công
		{
			//$s = sprintf('Location: %s', 'admin.php');
			//header($s);
			?>
            <center class="admin"><strong style="color:#F00;font-size:30px;">Sửa thành công.</strong></center>
            <?php
			header("Refresh:1 ;url=admin.php");
		}
		else
		{
			?>
            <center class="admin"><strong style="color:#F00;font-size:30px;">Sửa thất bại.</strong></center>
            <?php
			header("Refresh:1 ;url=admin.php");
			//echo('<center><strong style="color:#F00">Sửa thất bại. Nhấn vào <a href="admin.php">đây</a> để quay trở lại</strong></center>');
		}
	}
}
?>        
 
