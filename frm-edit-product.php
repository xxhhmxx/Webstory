<?php
if(isLogged())
{
	$editing = false;
	
	if(isset($_REQUEST['codep']))
	{		
		require('opendb.php');
		$masp = $_REQUEST['codep'];
		$sql = sprintf('select * from product where codep="%s"', $masp);
		$recordset = mysql_query($sql);
		require('closedb.php');
	}

?>
<?php
	while ($row = mysql_fetch_array($recordset))
	{
?>
<center>
<form action="processProduct.php" method="post" name="frm" enctype="multipart/form-data" >
	<input name="control" type="hidden" value="<?= $editing ? 'edit' : 'edit'?>" />
<table width="60%" border="0">
	
	<tr>
    <td width="100%" scope="col"><font size="3" face="arial" color="blue">Mã Truyện</font></td>
    <td scope="col"><input name="txtcodep" type="text" value="<?=$row['codep']?>"  <?= $editing ? 'readonly' : ''?>/></td>
  </tr>
  <tr>
    <td width="100%" scope="col"><font size="3" face="arial" color="blue">Tên Truyện</font></td>
    <td scope="col"><input name="txttentruyen" type="text" value="<?=$row['tentruyen']?>"  <?= $editing ? 'readonly' : ''?>/></td>
  </tr>
  <tr>
    <td><font size="3" face="arial" color="blue">Thể Loại</font></td>
	
    <td>
	
	<select name="txtcodek" >     
             <?php if($editing == false) {?>
             
			 <option value=''<?php if($row['codek']=='') echo ('selected="selected"')?>>---------Chọn b Thể Loại--------</option>
  	  		 <option value='ACTION' <?php if($row['codek'] =='ACTION') echo('selected="selected"');?>>Action - Hành Động</option>
   			 <option value='ADVENTURE' <?php if($row['codek'] =='ADVENTURE') echo('selected="selected"');?>>Adventure - Phiêu Lưu</option>
             <option value='COMEDY'<?php if($row['codek'] =='COMEDY')echo('selected');?>>Comedy - Trong Sáng</option>
			 <option value='COOKING'<?php if($row['codek'] =='COOKING')echo('selected');?>>Cooking - Nấu Ă</option>
			 <option value='ECCHI'<?php if($row['codek'] =='ECCHI')echo('selected');?>>Ecchi 18+</option>
             <option value='FANTASY'<?php if($row['codek'] =='FANTASY')echo('selected');?>>Fantasy - Pháp Thuật</option>
			 <option value='FUNNY'<?php if($row['codek'] =='FUNNY')echo('selected');?>>Funny - Hài Hước</option>
             <option value='HAREM'<?php if($row['codek'] =='HAREM')echo('selected');?>>Harem</option>
			 <option value='HORROR'<?php if($row['codek'] =='HORROR')echo('selected');?>>Horror - Rùng Rợn</option>
             <option value='MANHUA'<?php if($row['codek'] =='MANHUA')echo('selected');?>>Manhua - Trung Quốc</option>
			 <option value='MANHWA'<?php if($row['codek'] =='MANHWA')echo('selected');?>>Manhwa - Hàn Quốc</option>
             <option value='ONESHOT'<?php if($row['codek'] =='MANHWA')echo('selected');?>>One Shot - Truy?n Ng?n</option>
                <?php } else {
				?>
             <option value=''>---------Chọn á Thể Loại--------</option>
             <option value="ACTION" >Action - Hành Động</option>
   			 <option value="ADVENTURE" >Adventure - Phiêu Lưu</option>
			 <option value="COMEDY" >Comedy - Trong Sáng</option>
             <option value="COOKING" >Cooking - Nấu Ăn</option>
			 <option value="ECCHI" >Ecchi 18+</option>
             <option value="FANTASY" >Fantasy - Pháp Thuật</option>
             <option value="FUNNY" > Funny - Hài Hước</option>
             <option value="HAREM" >Harem</option>
             <option value="HORROR" >Horror - Rùng Rợn</option>
             <option value="MANHUA" >Manhua - Trung Quốc</option>
             <option value="MANHWA" >Manhwa - Hàn Quốc</option>
             <option value="ONESHOT" >One Shot - Truyện Ngắn</option>
			 <?php
			 }
			 ?>
	</select>
	
	
	</td>
  </tr>
  <tr>
    <td><font size="3" face="arial" color="blue">Người Đăng</font></td>
    <td><input name="txtnguoidang" type="text" value="<?=$row['nguoidang']?>"/></td>
  </tr>
  <tr>
    <td><font size="3" face="arial" color="blue">Số Tập</font></td>
    <td><input name="txtsotap" type="text" value="<?=$row['sotap']?>"/></td>
  </tr><tr>
    <td><font size="3" face="arial" color="blue">Hiện Trạng</font></td>
    <td><input name="txthientrang" type="text" value="<?=$row['hientrang']?>"/></td>
  </tr>
  <tr>
    <td><font size="3" face="arial" color="blue">Tác Giả</font></td>
    <td><input name="txttacgia" type="text" value="<?=$row['tacgia']?>"/></td>
  </tr>
   <tr>
   
    <td><font size="3" face="arial" color="blue">Hình</font></td> 
	<?php
	if($editing==true)
	{
	?>
    <td>	
	<input type="file" name="linkhinh" id="file" /> 
	</td>
	<?php
	}
	else
	{
	?>
	
	<td>
		<div><img src="<?=$row['linkhinh']?>" width="175" height="175" border="0" /></div>
		<input type="text" name="hinh" value="<?=$row['linkhinh']?>" />
		<input  type="file"  name="linkhinh" id='file'/>
	</td>
	<?php
	}
	?>
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
	?>
<?php
}
else
{
	echo('Bạn phải đăng nhập để thực hiện chức năng này');
}
?>

