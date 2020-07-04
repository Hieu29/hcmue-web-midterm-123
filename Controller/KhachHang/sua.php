<?php
	include_once("Model/KhachHang.php");
	$khachhang = new KhachHang();
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$row=$khachhang->getKhachHangById($id);
		include_once("View/KhachHang/sua.php");
		if(isset($_POST['btnChange']))
		{
			$hoten = $_POST['txtHoTen'];
			$dienthoai = $_POST['txtDienThoai'];
			$email = $_POST['txtEmail'];
			$ret=$khachhang->capNhatKhachHang($id,$hoten,$dienthoai,$email);
			if($ret>0)
			{
				header("location:admin.php?mod=KhachHang&act=manage");
			}
		}
	}
?>