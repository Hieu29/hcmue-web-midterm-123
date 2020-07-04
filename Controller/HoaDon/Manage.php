<?php
	include_once("Model/HoaDon.php");
	include_once("Model/ChiTietHoaDon.php");
	$ord = new HoaDon(); 
	$order = $ord->getHoaDonManage();
	$oi = new ChiTietHoaDon();
	
	include_once("View/HoaDon/Manage.php");
?>