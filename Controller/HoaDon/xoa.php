<?php
	include_once("Model/HoaDon.php");
	$order = new HoaDon();
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$ret=$order->xoaHoaDon($id);
		if($ret>0)
		{
			header("location:admin.php?mod=hoadon&act=manage");
		}
	}
?>