<?php 
	session_start();
	require_once __DIR__. '/../../libraries/Database.php';
	require_once __DIR__. '/../../libraries/Function.php';

	$db = new Database;

	if(!isset($_SESSION['admin_id']))
	{
		header("localhost/blog-main/admin/login.php/");
	}

	define ("ROOT", $_SERVER['DOCUMENT_ROOT']."/blog-main/public/uploads");

 ?>