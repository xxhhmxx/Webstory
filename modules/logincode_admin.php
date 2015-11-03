
<?php
require_once('common.php');
?>
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
	if(isLogged())
{
	if($_SESSION['decentralization']=='A')
			   {
					?>
					<div align="center">
                   <table border="0">
                   <tr>
       					<td style="color:#F00"><center><strong style="color:#F00">Chào <?=$_SESSION['user']?> đã đăng nhập.</br></br></strong></center></td>
                   </tr>
                   <tr >
                    <?php
					$s = sprintf('<div class="admin"><strong style="color:#F00"><a href="logout.php?currentPage=admin.php"><input class="nut" type="button" name="btn" value="Đăng xuất"/></br></br></a></strong></div>');
					
					
					?>
                    <td align="center"><?php echo($s); ?></td>
                   </tr>
                    </table>
                    </div>
                    <div id = "table_lich" align="center">
                    </div>
					<?php
			   }
	else{
	echo ('<center><font size="3" face="arial" color="red"> Bạn phải là admin mới có thể thực hiện chức năng của admin!!!</font></center>');
	unset($_SESSION['user']);
	/*header('Refresh:3 ; url=admin.php');*/
unset($_SESSION['user']);
}	
}
else
{
?>

<form name="frm1" action="<?php $_SERVER['REQUEST_URI']?>" method="post" onsubmit="return kiemTraDuLieuNhap()";>
                    <fieldset style=" margin:auto; border:0px #FFF inset">
                    <div>
                        &nbsp;<font size="3" face="arial" color="blue">Tài khoản:</font>
                        <input class="upbox"
                            name = "txtName" 
                            type = "text" 
                            size = "35"
                            maxlength="30"
                            value=""  
                         />
                    </div>
                    <div>
                         &nbsp;<font size="3" face="arial" color="blue">Mật khẩu:</font>
                         <input class="upbox"
                            name = "txtPass" 
                            type = "password"
                            size = "35"
                            maxlength="30"
                            value=""
                         />
                    </div>
                    <div style="padding:2%" >
                        <input
                            name="ghinho"
                            type="checkbox"
                            checked="checked"
                            
                        />
                        Ghi nhớ
                        
                        <input name="btnSubmit" type="submit" value="Đăng nhập" class="nut"/>
                     </div>
                    <div style="padding:2%">
                        <a href="#" style="color:#2A1FFF">Quên mật khẩu</a><strong>&nbsp;|&nbsp;</strong><a href="#" style="color:#2A1FFF">Đăng ký</a>
                    </div>
                    </fieldset>
                    </form>
					<div id = "table_lich" align="center">
                    </div>

<?php
}
?>
