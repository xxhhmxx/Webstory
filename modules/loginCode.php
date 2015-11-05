
<?php
require_once('common.php');
?>
<?php
if(isLogged())
{
	if($_SESSION['decentralization']=='A'||$_SESSION['decentralization']=='M')
	{
	if($_SESSION['decentralization']=='A')
			   {
				   ?>
                   <div align="center">
                   <table border="0">
                   <tr></br></br>
       					<center><td colspan="2" style="color:#F00"><strong style="color:#F00">Chào <?=$_SESSION['user']?> đã đăng nhập.</strong></br></br></center></td>
                   </tr>
                   <tr >
                   	<td ><?php printf('<center><a href="admin.php"><input class="nut" type="button" name="btn" value="Quản lý"/></a></center>') ?></td>
                    <?php
					$s = sprintf('<center><a href="logout.php?currentPage=index.php"><input class="nut" type="button" name="btn" value="Đăng xuất"/></a></center> ');
					//var_dump($s);
					?>
                    <td><?php echo($s); ?></td>
                   </tr>
                    </table></br>
                    </div>
                    <div id = "table_lich" align="center">
                    </div>
                    <?php
					
			   }
			   else
			   {
				   ?>
					<div align="center">
                   <table border="0">
                   <tr></br></br>
       					<td style="color:#F00"><center><strong style="color:#F00">Chào <?=$_SESSION['user']?> đã đăng nhập.</strong></br></br></center></td>
                   </tr>
                   <tr >
                    <?php
					$s = sprintf('<center><a href="logout.php?currentPage=index.php"><input type="button" class="nut" name="btn" value="Đăng xuất"/></a> ');
					
					
					?>
                    <td align="center"><?php echo($s); ?></td>
                   </tr>
                    </table></br></br>
                    </div>
                    <div id = "table_lich" align="center">
                    </div>
					<?php
			   }
	}else{
	/*echo "Tài khoản của bạn phải được sự cho phép của admin mới được đăng nhập";
	$s = sprintf('<br/>Nhấn vào <a href="logout.php?currentPage=index.php">đây</a> về trang chủ');
	printf($s);*/
	?>
					<div align="center">
                   <table border="0">
                   <tr>
       					<td style="color:#F00"><center><strong style="color:#F00">Tài khoản của <?=$_SESSION['user']?> chưa được kích hoạt.</strong></center></td>
                       <?php
						/*header('Refresh:1;url=index.php');*/
						
						?> 
                   </tr>
                 
                    </table>
                    </div>
                    <div id = "table_lich" align="center">
                    </div>
					<?php
			
			unset($_SESSION['user']);
		}
}
else
{
?>


<form name="frm1" action="<?php $_SERVER['REQUEST_URI']?>" method="post" onsubmit="return kiemTra()";>
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
                     
					<form action="index.php">
						<input type="submit" value="Đăng nhập" name="btnSubmit" class="nut">
					</form>
                     </div>
					
                    <div style="padding:2%">
                        <a href="#" style="color:#2A1FFF">Quên mật khẩu</a><strong>&nbsp;|&nbsp;</strong><a href="dangky.php" style="color:#2A1FFF">Đăng ký</a>
                    </div>
                    </fieldset>
                    </form>
                    <div id = "table_lich" align="center">
                    </div>

<?php
}
?>
