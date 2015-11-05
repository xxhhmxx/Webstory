<?php
@session_start();

function isLogged()
{	
	return !empty($_SESSION['user']);
	return !empty($_SESSION['decentralization']);
}
?>