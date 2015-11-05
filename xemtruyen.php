<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đọc Truyện Online</title>

<link rel="stylesheet" href="xemtruyen.css" />

<script src="lib.js" ></script>
<style type="text/css">
#center fieldset
{
	width:96%;
	display:inline-block;
	color:#2A1FFF;
	font-family:Arial, Helvetica, sans-serif;
}
#center div
{
	margin-top:50px;
	margin:3px ;
	
}

.divl
{
	font-weight:bold;
	color:#000;
}
.divr
{
	font-weight:bold;
	color:#00F;
}
.ahsp
{
	float:left;
	width:40%;
	display:block;
	margin-left:20px;
}
.ct
{
	background-color:#FFF;
	background-image: url(images/template/b2.gif);
	background-repeat:repeat-x;
	padding:5px 5px 5px 5px;
	font-family:Arial, Helvetica, sans-serif;
	font-size:14pt;
	text-align:center;
	font-weight:lighter;

}
.box_text{
	width:100%;
	height:200px;
	float:left;
}
</style>
<script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="node_modules/jquery-lazy/jquery.lazy.js"></script>
    <link rel="stylesheet" href="loadimages.css">
    <script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
    </script>
</head>

<body onload="inTable_lich();startTime();">
<div style="background-image:url(images/template/nen.gif)">
	<div id="paperbg">
		<div id="banner"><img id="banner" src="images/template/banner.png"/></div> <!-- khung banenr-->
    </div>
	<div align="center">
		<form name="form" id="form">
			<select name="jumpMenu" id="jumpMenu" onChange="MM_jumpMenu('parent',this,0)">
            <?php
						require('opendb.php');
						$masp = $_REQUEST['masp'];
						$sochap = $_REQUEST['sochap'];
						// xây dựng câu truy vấn
						$sql = sprintf('select * from chapter where codep = "%s"',$masp);
						// thực thi câu truy vấn, kết quả trả về dạng recordset
						$recordset = mysql_query($sql);
						require('closedb.php');
					?>
                    <?php
					  while ($row = mysql_fetch_array($recordset))
					  {
					  ?>
						<option value="xemtruyen.php?masp=<?=$row[0]?>&sochap=<?=$row[3]?>"<?php if($row['codep']==$masp&&$row['socuachap']==$sochap) echo ('selected="selected"')?>><?=$row[0]?> - chap <?=$row[3]?></option>
					<?php
					}
					?>						
			</select>
			<?php
			{
						require('opendb.php');
						$matruyen = $_REQUEST['masp'];
						$sotap = $_REQUEST['sochap'];
						// xây dựng câu truy vấn
						$sql = sprintf('select * from chapter where codep = "%s" and socuachap = "%s"',$masp,$sochap);
						// thực thi câu truy vấn, kết quả trả về dạng recordset
						$recordsets = mysql_query($sql);
						require('closedb.php');
						$row = mysql_fetch_array($recordsets);
						session_start();
						$_SESSION['linkchap']=$row['linkchap'];
			?>
			<a href="xemtruyen.php?masp=<?=$matruyen?>&sochap=<?=$sotap-1?>">
				<input name="chaptruoc" type="button" value="Chap Trước" width="30">
			</a>
			<a href="xemtruyen.php?masp=<?=$matruyen?>&sochap=<?=$sotap+1?>">
				<input name="chapsau" type="button" value="Chap Sau" width="30">
			</a>
			<?php
				}
			?>	
			
		</form>
	</div>
    <div>
		<a href="#" id="loadimage">
			<center><img src="./image/anhnen.jpg" style="width:80%"></center>
			
		</a>
		
	</div>
	<div id="images">
	</div>


<script>
    /*requirements:
        1. Jquery
        2.lazy plugin of jquery (http://jquery.eisbehr.de/lazy/)
    */
    jQuery(document).ready(function() {
        //dang ky mot event lazyload cho tuong hinh anh
        $("#images").on('lazynext', function(){
            var container = $(this),
                    lazyimage = container.find('img.lazy-image');

            if(lazyimage.length){
                var item = $(lazyimage[0]);
                item.removeClass('lazy-image');
                item.lazy({
                    effect: "fadeIn",
                    effectTime: 1500,
					
                    delay: 2000, //thoi gian cho: 3 giay
                    bind: "event", //Yeu cau Lazy tren chinh doi tuong image
                    beforeLoad: function(element) {
                        //bat dau load hinh anh
                    },
                    afterLoad: function(element) {
                        //load hinh anh tiep theo
                        $("#images").trigger('lazynext');
                    },
                    onError: function(element) {
                        //neu hanh anh load bi loi, load hinh tiep theo
                        $("#images").trigger('lazynext');
                    },
                    onFinishedAll: function() {
                    }
                });
            }
        });
		
        $("#loadimage").mouseover(function(){
            $.ajax({
                url: "response.php",
                success: function(result) {
                    var uris = result.split(","),
                            loadingData = "data:image/gif;base64,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";
                    $("#images").empty();
                    for(var i in uris){
                        var ele = '<div class="section"><img class="load-image-'+ i +' lazy-image" src="'+loadingData+'" data-src="'+ uris[i]+ '" /></div><h2></h2>';

                        $("#images").append(ele);
                    }
                    //load hinh anh dau tien
                    $("#images").trigger("lazynext");
                }
            });
        });

    });
	
</script>
<div align="center">
		<form name="form" id="form">
			<select name="jumpMenu" id="jumpMenu" onChange="MM_jumpMenu('parent',this,0)">
            <?php
						require('opendb.php');
						$masp = $_REQUEST['masp'];
						$sochap = $_REQUEST['sochap'];
						// xây dựng câu truy vấn
						$sql = sprintf('select * from chapter where codep = "%s"',$masp);
						// thực thi câu truy vấn, kết quả trả về dạng recordset
						$recordset = mysql_query($sql);
						require('closedb.php');
					?>
                    <?php
					  while ($row = mysql_fetch_array($recordset))
					  {
					  ?>
						<option value="xemtruyen.php?masp=<?=$row[0]?>&sochap=<?=$row[3]?>"<?php if($row['codep']==$masp&&$row['socuachap']==$sochap) echo ('selected="selected"')?>><?=$row[0]?> - chap <?=$row[3]?></option>
					<?php
					}
					?>						
			</select>
			<?php
			{
						require('opendb.php');
						$matruyen = $_REQUEST['masp'];
						$sotap = $_REQUEST['sochap'];
						// xây dựng câu truy vấn
						$sql = sprintf('select * from chapter where codep = "%s" and socuachap = "%s"',$masp,$sochap);
						// thực thi câu truy vấn, kết quả trả về dạng recordset
						$recordsets = mysql_query($sql);
						require('closedb.php');
						$row = mysql_fetch_array($recordsets);
						//session_start();
						//$_SESSION['linkchap']=$row['linkchap'];
			?>
			<a href="xemtruyen.php?masp=<?=$matruyen?>&sochap=<?=$sotap-1?>">
				<input name="chaptruoc" type="button" value="Chap Trước" width="30">
			</a>
			<a href="xemtruyen.php?masp=<?=$matruyen?>&sochap=<?=$sotap+1?>">
				<input name="chapsau" type="button" value="Chap Sau" width="30">
			</a>
			<?php
				}
			?>	
			
		</form>
	</div>
	<center style="color:white">
		<?php
			include ('modules/footer.php');
		?>
	</center>
</div>
</body>
</html>