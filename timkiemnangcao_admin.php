<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tìm kiếm nâng cao</title>

<link rel="stylesheet" href="stylebg.css" />
<script src="lib.js" ></script>
<style type="text/css">
#center div
{
	width:45%;
	float:left;
	margin:3px ;
	font-family:Arial, Helvetica, sans-serif;
	color:#2A1FFF;
}

.divl
{
	text-align:right;
}
.box_contact
{
	width:58%;
	height:30%;
}

.dk
{
	background-color:#FFF;
	background-image: url(images/template/b2.gif);
	background-repeat:repeat-x;
	padding:5px 5px 5px 5px;
	font-family:Arial, Helvetica, sans-serif;
	font-size:14pt;
	text-align:center;

}

</style>
</head>

<body onload="inTable_lich();startTime();"> 
	<div id="paperbg">
    	
        <div id="banner"><img id="banner" src="images/template/banner.jpg"/>
      </div> <!-- khung banenr-->
        <?php // chen code menu
			include('modules/menu_admin.php');
		?>
   	        <div id="papermain">
        		<?php
					include('modules/leftcategogy_admin.php');
				?>
                <div id="right">
        <div class="title_lr">Tài khoản</div>
               
                <?php
					include('modules/rightcategory_admin.php');
				?>
            </div>
   	        
            <div id="center">
            <div class="dk" style="width:97%; border:0px; color:#2A3F55">Tìm kiếm nâng cao</div>
          <span>          
         <form  name="timkiem" method="get" action="timkiemnc_admin.php" style="display: inline-table">
    	<fieldset>
            
            <div class="divl">Từ khóa tìm kiếm :<br /></div>
            <div>
                <input style="width:48%"
                    type="text" 
                    name="txttimkiem"
                    size="40"
                    maxlength="30"
                />         
       		</div>
			            
            <div class="divl">Loại Truyện :<br /></div>
            <div>
					<select name="loai" style="width:50%">
               		<option value=""></option>
                    <option value="ACTION">Action - Hành Động</option>
                    <option value="ADVENTURE">Adventure - Phiêu Lưu</option>
                    <option value="COMEDY">Comedy - Trong Sáng</option>
                    <option value="COOKING">Cooking - Nấu Ăn</option>
                    <option value="ECCHI">Ecchi 18+</option>
                    <option value="FANTASY">Fantasy - phép thuật</option>
                    <option value="FUNNY">Funny - Hài Hước</option>
                    <option value="HAREM">Harem</option>
                    <option value="HORROR">Horror - Rùng Rợn</option>
                    <option value="MANHUA">Manhua - Trung Quốc</option>
                    <option value="MANHWA">Manhwa - Hàn Quốc</option>
                    <option value="ONESHOT">One Shot - Truyện Ngắn</option>
               </select>      
       		</div>

             <div class="divl">Người Đăng :<br /></div>
            <div>
               		<select name="nguoidang" style="width:50%">
               		<option value=""></option>
                    <option value="ADMIN">Admin</option>
                    <option value="HAO">Hảo</option>
                     </select>      
       		</div>
             <div class="divl">Tập từ:</div>
			<div>
             	 <input 
                            name = "txttu" 
                            type = "text" 
                            size = "10"
                            
                            value=""  
                         />
                                       
                  <strong> tập </strong>                       
             </div>
			<div class="divl" >đến :</div>
				<div>
             	 <input 
                            name = "txtden" 
                            type = "text" 
                            size = "10"
                            
                            value=""  
                         />
                                    
                  <strong> tập</strong>                    
             </div>
             <div class="divl"><input name"timkiem" type="submit" value="Tìm" class="nut"/></div>
            <div><input name="xoa" type="reset" value="Xóa" class="nut" />  </div>
        </fieldset>
    </form>    
    </span>

                
            </div><!-- khung trung tam-->
            
        </div><!-- khung trang chinh-->
        
        <?php
			include('modules/footer.php');
		?>


    </div>
</body>
</html>
