
<script>
function ktraUser()
{
var s=document.frmuser.txtUsername.value;
	if(s.length<=0)
	{
		alert('Vui lòng nhập username!');		
		return false;
	}
	var b=document.frmuser.txtPassword.value
	if(b.length<=0)
	{
		alert('Vui lòng nhập password!');		
		return false;
	}
	
}
</script>
<?php
if(isLogged())
{
	$editing = false;
	
	if(isset($_REQUEST['username']))
	{		
		require('opendb.php');
		
		$sql = sprintf('select * from user where username="%s"', $_REQUEST['username']);
		$recordset = mysql_query($sql);
		
		if($recordset != false)
		{
			$row = mysql_fetch_array($recordset);	
			
			$editing = true;
			
			//var_dump($row);
			echo('<hr/>');
		}
		
		require('closedb.php');
	}
?>
<center>
<form action="processUser.php" method="get" name="frmuser" onsubmit="return ktraUser()";>
<input name="control" type="hidden" value="<?= $editing ? 'edit' : 'add'?>" />
<table width="50%" border="0">
  <tr>
    <td width="50%" scope="col"><font size="3" face="arial" color="blue">Tên người dùng</font></th>
    <td scope="col"><input name="txtUsername" type="text" value="<?= $editing ? $row[0] : ''?>"  <?= $editing ? 'readonly' : ''?>/></th>
  </tr>
  <tr>
    <td><font size="3" face="arial" color="blue">Mật khẩu</font></td>
    <td><input name="txtPassword" type="password" value="<?= $editing ? $row[1] : ''?>"/></th></td>
  </tr>
  <tr>
  <td><font size="3" face="arial" color="blue">Phân quyền</font></td>
     <td>
	<select name="txtdecentralization" >     
                <?php if($editing== false) {?>
              <option value=''>-------Phân quyền------</option>
             <option value="A" >Admin</option>
   			 <option value="M" >Member</option>
                <?php } else {
				?>
             <option value=''<? if($row['decentralization']=='') echo ('selected')?>>-------Phân quyền------</option>
  	  		 <option value='A'<? if($row['decentralization'] =='A') echo('selected');?>>Admin</option>
   			 <option value='M'<? if($row['decentralization'] =='M') echo('selected');?>>Member</option>
             
			 <?php
			 }
			 ?>
	</select>
	
	
	</td>
  </tr>
</table>
<p>
  <label>
    <input type="submit" name="btnSave" value="Lưu" />
  </label>
</p>
</form>
</center>
<?php
}
else
{
	echo('Bạn phải đăng nhập để sử dụng chức năng này');
}
?>