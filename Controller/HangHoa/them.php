<?php
	include_once("Model/Loai.php");
	include_once("Model/HangHoa.php");
	$product = new HangHoa();
	$category = new Loai();
	$cate = $category->getLoai();

	include_once("View/HangHoa/them.php");

	if(isset($_POST['btnSave'])){
		include_once("Model/Upload.php");
		$productName = $_POST['txtProductName'];
		$filename = Upload::UploadImage("txtImageUrl","Upload");
		$price=$_POST["txtPrice"];
		$categoryID=$_POST["slCategory"];

		// echo $filename;
		if($filename!="")
		{	
			if(is_numeric($price))
			{
				//$tenHH,$donGia,$hinh,$maLoai
				$ret = $product->themHangHoa($productName,$price,$filename ,$categoryID);
				if($ret>0)
				{
					header("location:admin.php?mod=hanghoa&act=manage");
				}
				else
					echo "<p class=\"error\">Thêm bị lỗi</p>";
			}
			else
			{
				echo "<p>Giá hoặc số lượng không hợp lệ</p>";
			}
		
		}
		else
		{
			echo "<p>Vui lòng chọn file ảnh</p>";
		}
	}
?>