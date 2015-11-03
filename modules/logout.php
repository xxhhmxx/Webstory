<?php
require_once('common.php');
var_dump(basename($_SERVER['PHP_SELF']));
$_SESSION['user'] = '';
$sql = sprintf('Location: %s', $_REQUEST['currentPage']);
header($sql);
?>