<?php
	include_once("Model/Loai.php");
	$cate = new Loai();
	include_once("View/Loai/them.php");
	if(isset($_POST['btnSave']))
	{
		$categoryName = $_POST['txtCategoryName'];
		if(isset($_POST['txtMoTa']))
			$mota = $_POST['txtMoTa'];
		else
			$mota = "";
		if($categoryName != "")
		{

			$ret=$cate->themLoai($categoryName,$mota);
			if($ret>0)
			{
				header("location:admin.php?mod=loai&act=manage");
			}
			else
				echo "<p class=\"error\">Thêm bị lỗi</p>";
		}
		echo "<p class=\"error\">Dữ liệu không hợp lệ</p>";
	}
?>