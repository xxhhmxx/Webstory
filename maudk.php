<script>
function kiemTraDuLieuNhap()
{
	var s = document.dangky.txttaikhoan.value;
	//alert(s);
	if (s.length <= 0)
	{
		alert('Vui lòng tên đăng nhập!');		
		return false;
	}
	
	var a = document.dangky.pwname.value;	
	if (a.length <= 0)
	{
		alert('Vui lòng mật khẩu!');		
		return false;
	}
	var b = document.dangky.txtpass.value;	
	if (b.length <= 0)
	{
		alert('Vui lòng nhập lại mật khẩu!');		
		return false;
	}
	
	if (a!=b)
	{
	
		alert('Mật khẩu nhập lại sai!');		
		return false;
	}
	
	
}
</script>
<?php
 if(isset($_REQUEST['submit1']))
 {
		require('opendb.php');	
	
		$sql = sprintf('insert into user values("%s", "%s","%s")',$_REQUEST['txttaikhoan'],$_REQUEST['pwname'],'');
	//	var_dump($sql);
		$result = mysql_query($sql);
		
		require('closedb.php');
		
		if($result) // thêm thành công
		{
			echo('<center class="admin"><strong style="color:#F00" >Đăng kí thành công! vui lòng chờ xác nhận của admin.</br>Nhấn vào <a href="index.php">đây</a> để về lại trang chủ</strong></center>');
			
		}
		else
		{
			echo('<center class="admin"><strong style="color:#F00">Đăng kí thât bại. Nhấn vào <a href="dangky.php">đây</a> để đăng kí lại</strong></center>');
		}	

}
else
{
 ?>
 
 <form name="dangky" method="post" style="display: inline-table" action="dangky.php" onsubmit="return kiemTraDuLieuNhap()";>
    	<fieldset>
        	<legend>Thông tin đăng nhập</legend>
            
            <div class="divl">Tên Đăng nhâp(<strong style="color:#F00">*</strong>):</div>
            <div>
                <input   type="text"   name="txttaikhoan" size="30"  maxlength="30"  />         
       		</div>
            <!----------------->
             <div class="divl">Mật khẩu (<strong style="color:#F00">*</strong>):</div>
             <div>
                <input    type="password"   name="pwname"   size="30"  maxlength="30"  />  
           	</div>
            <!----------------->
            <div class="divl">Nhập lại mật khẩu (<strong style="color:#F00">*</strong>):</div>
            <div>
               <input type="password"  name="txtpass" size="30" maxlength="30"   />         
       		</div>  
			<!----------------->
            <div class="divl"><input name="submit1" type="submit" value="Đăng ký" class="nut"/></div>		
        </fieldset>
               
    </form> 
<?php
}
?>