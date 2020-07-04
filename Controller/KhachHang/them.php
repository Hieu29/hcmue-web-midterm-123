<?php
	include_once("Model/KhachHang.php");
	$khachhang = new KhachHang();
	include_once("View/KhachHang/them.php");
	if(isset($_POST['btnSave']))
	{
		$hoten = $_POST['txtHoTen'];
		$dienthoai = $_POST['txtDienThoai'];
		$email = $_POST['txtEmail'];
		if($hoten != "")
		{
			$ret=$khachhang->themKhachHang($hoten,$dienthoai,$email);
			if($ret>0)
			{
				header("location:admin.php?mod=khachhang&act=manage");
			}
			else
				echo "<p class=\"error\">Thêm bị lỗi</p>";
		}
		echo "<p class=\"error\">Dữ liệu không hợp lệ</p>";
	}
?>