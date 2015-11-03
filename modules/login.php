<?php
require_once('common.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login s4</title>
</head>
<script>
function kiemTraDuLieuNhap()
{
	var s = document.frm1.txtName.value;
	//alert(s);
	if (s.length <= 0)
	{
		alert('Vui lòng username!');		
		return false;
	}
	
	var a = document.frm1.txtPass.value;	
	if (a.length <= 0)
	{
		alert('Vui lòng password!');		
		return false;
	}
	
	
}
</script>
<?php
$coThamSo = isset($_REQUEST['btnSubmit']); 
if($coThamSo)
{
	$user = $_REQUEST['txtName'];
	$pass = $_REQUEST['txtPass'];
	
	include('opendb.php'); 
	
	//$sql = 'select * from user where username = "' . $user . '"';
	$sql = sprintf('select password,decentralization from user where username = "%s"', $user);
	//var_dump($sql);
	$set = mysql_query($sql,$con);
	//var_dump($set);
	if($set !=  false)
	{
		//var_dump(mysql_num_rows($set));
		if (mysql_num_rows($set) != 0)
		{
			$row = mysql_fetch_array($set);
			//print_r($row);
			if ($row[0] == $pass)// && ($row[1] == 'M' || $row[1] == 'A' ))
			{
				$_SESSION['user'] = $user;
				$_SESSION['decentralization'] = $row['decentralization'];
			}
			else
			{
				echo('Sai password.<br/>');
			}
		}
		else
		{
			echo('Không có username.<br/>');
		}
	}
	
	include('closedb.php'); 
}
?>

<body>

<?php
include('loginCode.php');
?>

</body>
</html>
