<?php
class DataProvider
{
	public static function executeQuery($sql)
	{
		include ('db.inc');
		include_once('error.inc');
		// 1. Tao ket noi CSDL
		if (!($connection = mysql_connect($hostName,$username,$password)))
			die ("couldn't connect to localhost");
		if (!(mysql_select_db($databaseName,$connection)))
			showError();
		//2. Thiet lap font Unicode
		if (!(mysql_query("set names 'utf8'")))
			showError();
		// Thuc thi cau truy van
		if (!($result = mysql_query($sql, $connection)))
			showError();
		// Dong ket noi CSDL
		if (!(mysql_close($connection)))
			showError();
		return $result;
	}
}
?>