<?php
if(isLogged())
{
	$editing = false;
	
	if(isset($_REQUEST['codep']))
	{		
		require('opendb.php');
		
		$sql = sprintf('select * from product where codep="%s"', $_REQUEST['codep']);
		$recordset = mysql_query($sql);
		
		if($recordset != true)
		{
			$row = mysql_fetch_array($recordset);	
			
			$editing = false;
			
			//var_dump($row);
			echo('<hr/>');
		}
		
		require('closedb.php');
	}
	
?>
<center>
<form action="processProduct.php" method="post" name="frm" enctype="multipart/form-data" >
	<input name="control" type="hidden" value="<?= $editing ? 'edit' : 'add'?>" />
<table width="60%" border="0">
	<tr>
    <td width="100%" scope="col"><font size="3" face="arial" color="blue">Mã Truyện</font></td>
    <td scope="col"><input name="txtcodep" type="text" value="<?= $editing ? $row['codep'] : ''?>"  <?= $editing ? 'readonly' : ''?>/></td>
  </tr>
  <tr>
    <td width="100%" scope="col"><font size="3" face="arial" color="blue">Tên Truyện</font></td>
    <td scope="col"><input name="txttentruyen" type="text" value="<?= $editing ? $row['tentruyen'] : ''?>"  <?= $editing ? 'readonly' : ''?>/></td>
  </tr>
  <tr>
    <td><font size="3" face="arial" color="blue">Thể Loại</font></td>
	
    <td>
	<select name="txtcodek" >     
                <?php if($editing == true) {?>
              <option value=''>---------Chọn Thể Loại--------</option>
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
                <?php } else {
				?>
             <option value=''<? if($row['codek']=='') echo ('selected')?>>---------Chọn Thể Loại--------</option>
  	  		 <option value='ACTION'<? if($row['codek'] =='ACTION') echo('selected');?>>Action - Hành Động</option>
   			 <option value='ADVENTURE'<? if($row['codek'] =='ADVENTURE') echo('selected');?>>Adventure - Phiêu Lưu</option>
             <option value='COMEDY'<? if($row['codek'] =='COMEDY')echo('selected');?>>Comedy - Trong Sáng</option>
			 <option value='COOKING'<? if($row['codek'] =='COOKING')echo('selected');?>>Cooking - Nấu Ă</option>
			 <option value='ECCHI'<? if($row['codek'] =='ECCHI')echo('selected');?>>Ecchi 18+</option>
             <option value='FANTASY'<? if($row['codek'] =='FANTASY')echo('selected');?>>Fantasy - Pháp Thuật</option>
			 <option value='FUNNY'<? if($row['codek'] =='FUNNY')echo('selected');?>>Funny - Hài Hước</option>
             <option value='HAREM'<? if($row['codek'] =='HAREM')echo('selected');?>>Harem</option>
			 <option value='HORROR'<? if($row['codek'] =='HORROR')echo('selected');?>>Horror - Rùng Rợn</option>
             <option value='MANHUA'<? if($row['codek'] =='MANHUA')echo('selected');?>>Manhua - Trung Quốc</option>
			 <option value='MANHWA'<? if($row['codek'] =='MANHWA')echo('selected');?>>Manhwa - Hàn Quốc</option>
             <option value='ONESHOT'<? if($row['codek'] =='MANHWA')echo('selected');?>>One Shot - Truy?n Ng?n</option>
			 <?php
			 }
			 ?>
	</select>
	
	
	</td>
  </tr>
  <tr>
    <td><font size="3" face="arial" color="blue">Người Đăng</font></td>
    <td><input name="txtnguoidang" type="text" value="<?= $editing ? $row['nguoidang'] : ''?>"/></td>
  </tr>
  <tr>
    <td><font size="3" face="arial" color="blue">Số Tập</font></td>
    <td><input name="txtsotap" type="text" value="<?= $editing ? $row['sotap'] : ''?>"/></td>
  </tr><tr>
    <td><font size="3" face="arial" color="blue">Hiện Trạng</font></td>
    <td><input name="txthientrang" type="text" value="<?= $editing ? $row['hientrang'] : ''?>"/></td>
  </tr>
  <tr>
    <td><font size="3" face="arial" color="blue">Tác Giả</font></td>
    <td><input name="txttacgia" type="text" value="<?= $editing ? $row['tacgia'] : ''?>"/></td>
  </tr>
   <tr>
   
    <td><font size="3" face="arial" color="blue">Hình</font></td> 
	<?php
	if($editing==false)
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
	
	<td><div><img src="<?= $row['linkhinh']?>" width="175" height="175" border="0" /></div>
	<input type="text" name="hinh" value="<?= $editing ? $row['linkhinh'] : ''?>" />
	<input  type="file"  name="linkhinh" id='file'   /></td>
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
else
{
	echo('Bạn phải đăng nhập để thực hiện chức năng này');
}
?>
