<?php
	include_once("Model/HangHoa.php");
	$product = new HangHoa();

	include_once("Model/Loai.php");
	$category=new Loai();
	$cate = $category->getLoai();
	
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$row=$product->getHangHoaById($id);
		include_once("View/HangHoa/Sua.php");
		if(isset($_POST['btnChange']))
		{
			include("Model/Upload.php");
			$productName=$_POST["txtProductName"];
			if(isset($_FILES['txtImageUrl']))
				$fileName = Upload::UploadImage("txtImageUrl","Upload");
			$price=$_POST["txtPrice"];
			
			$categoryID=$_POST["slCategory"];
			//$maHH,$maLoai,$tenHH,$donGia,$hinh
			if(!isset($_FILES['txtImageUrl']))
				$ret=$product->capNhatHangHoa($id,$categoryID,$productName,$price);
			else
			{
				//print_r($_FILES);
				$ret=$product->capNhatHangHoa($id,$categoryID,$productName,$price,$fileName);
			}
			if($ret>0)
			{
				header("location:admin.php?mod=hanghoa&act=manage");
			}
			else
				echo "<p class=\"error\">Lỗi</p>";
		}
	}
?>