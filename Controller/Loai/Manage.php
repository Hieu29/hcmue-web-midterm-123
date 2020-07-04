<?php
	include_once("Model/Loai.php");
	$cat = new Loai();
	$ret = $cat->getLoai();
	include_once("View/Loai/Manage.php");
?>