<?php
	include_once("Model/Loai.php");
	$cate = new Loai();
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$row=$cate->getLoaiById($id);
		include_once("View/Loai/sua.php");
		if(isset($_POST['btnChange']))
		{
			$categoryName = $_POST['txtCategoryName'];
			$mota = $_POST['txtMoTa'];
			$ret=$cate->capNhatLoai($id,$categoryName,$mota);
			if($ret>0)
			{
				header("location:admin.php?mod=loai&act=manage");
			}
		}
	}
?>