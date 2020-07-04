<?php
 // echo "<script>console.log('okee');</script>";
	include_once ("Model/HangHoa.php");
	$pro = new HangHoa();
	$rs = $pro->getHangHoa();

	include_once ("View/HangHoa/New.php");
?>