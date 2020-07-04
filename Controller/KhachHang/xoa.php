<?php
	include_once("Model/KhachHang.php");
	$group = new KhachHang();
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$ret=$group->xoaKhachHang($id);
		if($ret>0)
		{
			header("location:admin.php?mod=khachhang&act=manage");
		}
	}
?>