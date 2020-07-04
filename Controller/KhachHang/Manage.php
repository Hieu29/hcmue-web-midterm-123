<?php
	include("Model/KhachHang.php");
	$gr = new KhachHang();
	$ret = $gr->getKhachHang();
	include_once("View/KhachHang/Manage.php");
?>