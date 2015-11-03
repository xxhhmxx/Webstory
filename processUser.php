<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
require_once('common.php');

if(isset($_REQUEST['control']))
{
	if($_REQUEST['control'] == 'del')
	{
		require('opendb.php');	
	
		$sql = sprintf('delete from user where username="%s"', $_REQUEST['username']);
		//var_dump($sql);
		
		$result = mysql_query($sql);
		
		require('closedb.php');
		
		if($result) // xóa thành công
		{
			?>
            <center class="admin"><strong style="color:#F00;font-size:30px;">Xóa thành công.</strong></center>
            <?php
			//$s = sprintf('Location: %s', 'admin_User.php');
			header("Refresh:1 ;url=admin_User.php");
			//$s = sprintf('Location: %s', 'admin_User.php');
			//header($s);
		}
		else
		{
			?>
            <center class="admin"><strong style="color:#F00;font-size:30px;">Xóa thất bại.</strong></center>
            <?php
			//$s = sprintf('Location: %s', 'admin_User.php');
			header("Refresh:1 ;url=admin_User.php");
			
			//echo('<center class="admin"><strong style="color:#F00;font-size:30px;">Xóa thất bại. Nhấn vào <a href="admin_User.php">đây</a> để quay trở lại</strong><center>');
		}
	}
	else if ($_REQUEST['control'] == 'add')
	{
		require('opendb.php');	
	
		$sql = sprintf('insert into user values("%s", "%s", "%s")', $_REQUEST['txtUsername'], $_REQUEST['txtPassword'], $_REQUEST['txtdecentralization']);
		//var_dump($sql);
		
		$result = mysql_query($sql);
		
		require('closedb.php');
		
		if($result) // thêm thành công
		{
			?>
            <center class="admin">
            <strong style="color:#F00;font-size:30px;">Thêm thành công.</strong>
</center>
            <?php
			//$s = sprintf('Location: %s', 'admin_User.php');
			header("Refresh:1 ;url=admin_User.php");
			
		}
		else
		{
			?>
            <center class="admin"><strong style="color:#F00;font-size:30px;">Thêm thất bại.</strong></center>
            <?php
			//$s = sprintf('Location: %s', 'admin_User.php');
			header("Refresh:1 ;url=admin_User.php");
		}	
	}
	else if ($_REQUEST['control'] == 'edit')
	{
		require('opendb.php');	
	
		$sql = sprintf('update user set password = "%s", decentralization = "%s" where username = "%s"', $_REQUEST['txtPassword'], $_REQUEST['txtdecentralization'], $_REQUEST['txtUsername']);
		//var_dump($sql);
		
		$result = mysql_query($sql);
		
		require('closedb.php');
		
		if($result) // thành công
		{
			?>
            <center class="admin"><strong style="color:#F00;font-size:30px;">Sửa thành công.</strong></center>
            <?php
			//$s = sprintf('Location: %s', 'admin_User.php');
			header("Refresh:1 ;url=admin_User.php");
		}
		else
		{
			?>
            <center class="admin"><strong style="color:#F00;font-size:30px;">Sửa thất bại.</strong></center>
            <?php
			//$s = sprintf('Location: %s', 'admin_User.php');
			header("Refresh:1 ;url=admin_User.php");
			//echo('<center class="admin"><strong style="color:#F00;font-size:30px;">Sửa thất bại. Nhấn vào <a href="admin_User.php">đây</a> để quay trở lại</strong></center>');
		}
	}
}
?>

