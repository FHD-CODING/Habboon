<?php

require_once "global.php";

if($_SESSION["in_hk"] == true)
{
	session_unset($_SESSION['in_hk']);
	header("Location:".$_CONFIG['hotel']['url']."/ase/login");
}
else
{
	header("Location:".$_CONFIG['hotel']['url']."/index");
}
?>
