<?php 
	// Khởi động phiên làm việc
	session_start();
	// import các file database.php và function.php
	require_once __DIR__. '/../libraries/Database.php';
	require_once __DIR__. '/../libraries/Function.php';
	// tạo đối tượng db
	$db = new Database;

	// if(!isset($_SESSION['user_id']))
	// {
	// 	header("location:/face/dk.php?path=localhost/face/");
	// }
	define ("ROOT", $_SERVER['DOCUMENT_ROOT']."/blog-main/public/uploads");
 ?>