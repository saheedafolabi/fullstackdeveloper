<?php
	require_once "functions.php";
	session_destroy();
	header("location:admin.php");
?>