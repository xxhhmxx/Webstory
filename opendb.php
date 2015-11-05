<?php
/*-- kết nối CSDL --*/
// db parameters
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
// connect
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Không thể kết nối CSDL');
mysql_set_charset('utf8', $conn);  // for UTF-8
//echo('Connect được.');

// select db
mysql_select_db('doctruyen') or die('Không có db');

//echo('Connect xong.');
?>