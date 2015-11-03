<?php
require_once('common.php');
?>
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
	$set = mysql_query($sql);
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
				?>
					<div align="center">
                   <table border="0">
                   <tr>
       					<td style="color:#F00"><center><strong style="color:#F00">Mật khẩu không đúng.</strong></center></td>
                   </tr>
                   <tr>
       					<td style="color:#F00"><center><strong style="color:#F00">Vui lòng nhập lại nhé.</strong></center></td>
                   </tr>
                     </table>
                    </div>
					<?php
			}
		}
		else
		{
			?>
					<div align="center">
                   <table border="0">
                   <tr>
       					<td style="color:#F00"><center><strong style="color:#F00">Tên đăng nhập không đúng.</strong></center></td>
                   </tr>
                   <tr>
       					<td style="color:#F00"><center><strong style="color:#F00">Vui lòng nhập lại nhé.</strong></center></td>
                   </tr>
                     </table>
                    </div>
					<?php
		}
	}
	
	include('closedb.php'); 
}
?>

<?php
include('logincode_admin.php');
?>