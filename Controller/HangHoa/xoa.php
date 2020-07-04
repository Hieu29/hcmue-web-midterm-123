<?php
	include_once("Model/HangHoa.php");
	$products = new HangHoa();
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$ret = $products->xoaHangHoa($id);
		// echo $ret;
		if($ret>0){
			header("location:admin.php?mod=hanghoa&act=manage");
		}
	}
?>