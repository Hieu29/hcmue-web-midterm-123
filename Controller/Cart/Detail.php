<?php

	include_once ("Model/HangHoa.php");
	$pro = new HangHoa();
	$newproducts = $pro->getHangHoa();
	if(isset($_SESSION['mycart']))	
		include_once ("View/Cart/Detail.php");
	else
		include_once("View/Cart/Cartempty.php");

?> 