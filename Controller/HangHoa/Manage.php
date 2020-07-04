<?php
	include_once("Model/HangHoa.php");
	$pro = new HangHoa();
	$ret = $pro->getHangHoaManage();
	include_once("View/HangHoa/Manage.php");
?>