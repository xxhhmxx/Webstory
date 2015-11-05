
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Demo mySQL c3</title>

<script>
function ktXoa(username)
{
	if (confirm('Bạn có chắc xóa không?'))
	{
		document.location = 'processUser.php?control=del&username=' + username;
	}
}
</script>

</head>

<body>


<hr />
<?php
require('opendb.php');

// xây dựng câu truy vấn
$sql = 'select * from user';

// thực thi câu truy vấn, kết quả trả về dạng recordset
$recordset = mysql_query($sql);
require('closedb.php');
?>
<table width="100%" border="1">
  <caption>
    <strong>Danh sách người dùng</strong>
  </caption>
  <tr>
    <th scope="col">Tên đăng nhập</th>
    <th scope="col">Mật khẩu</th>
    <th scope="col">Phân quyền</th>
    <th scope="col" colspan="2">chức năng</th>
    <?php

	?>       
  </tr>
  <?php
  $i =1;
  while ($row = mysql_fetch_array($recordset))
  {
	if($i%2==0)
	{
		echo('<tr bgcolor="#9999FF">');
	}
	else
	{
		echo('<tr bgcolor="#CCCCCC">');
	}
  ?>
  
    <td style="text-align:center"><?php echo($row[0]); ?></td>
    <td ><center><?= md5($row[1])?></center></td>
    <td><center><?= $row['decentralization']?></center></td>
    <?php
	
	?>
    <td><center><a href="Add_edituser.php?username=<?= $row[0]?>" >Chấp Nhận</a></center></td>
    <td><center><a onclick="ktXoa('<?= $row[0]?>');" href="javascript:void(0)">Xóa</a></center></td>
    <?php	
	?>
  </tr>
  <?php
  $i++;
  }
  ?>
</table>
<?php
?>
<form action="Add_edituser.php" method="get" name="frmAdd">
</br></br>
<center><input name="btnAdd" type="submit" value="Thêm user" /></center>
</form>
<?php
?>
</body>
</html>