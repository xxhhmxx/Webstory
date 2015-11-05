<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Load Image Example</title>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="node_modules/jquery-lazy/jquery.lazy.js"></script>
    <link rel="stylesheet" href="loadimages.css">
</head>
<body>



 <?php 
 function loadlink(){
						require('opendb.php');
						$masp = $_REQUEST['masp'];
						$sochap = $_REQUEST['sochap'];
						// xây dựng câu truy vấn
						$sql = sprintf('select linkchap from chapter where codep = "%s" and socuachap = "%s"',$masp,$sochap);
						// thực thi câu truy vấn, kết quả trả về dạng recordset
						$recordset = mysql_query($sql);
						require('closedb.php');
						$row = mysql_fetch_array($recordset);
						if($row!='')
						{
							$i = $row[0];
						}
						else
						{
							$i="khong";
						}
						return $i;
 }
		$m=loadli				
 ?>

<div><?=$i?></div>


</body>
</html>