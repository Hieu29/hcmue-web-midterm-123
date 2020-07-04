<?php
	include_once("Model/Loai.php");
	include_once("Model/HangHoa.php");
	$cate = new Loai();
	$pro = new HangHoa();
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$res = $pro->getHangHoaByMaLoai($id);
		if(count($res)==0){
			$ret=$cate->xoaLoai($id);
			if($ret>0)
			{
				header("location:admin.php?mod=loai&act=manage");
			}
		}
		else header("location:admin.php?mod=loai&act=manage");
	}
?>
