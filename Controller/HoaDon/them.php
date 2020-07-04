<?php


	if(isset($_SESSION["mycart"])){
		if(!isset($_POST["btnSave"])){
			include_once("Model/KhachHang.php");
			$KhachHang = new KhachHang();
			$khachHangs = $KhachHang->getKhachHang();
		}
		include_once("View/HoaDon/them.php");
		if(isset($_POST['btnSave'])){
			include_once("Model/HoaDon.php");
			include_once("Model/ChiTietHoaDon.php");
			include_once("Model/HangHoa.php");
			$order = new HoaDon();
			$product = new HangHoa();
			$orderItem = new ChiTietHoaDon();

			$hoten = $_POST['txtKhachHang'];

			$orderID = $order->themHoaDon($hoten,0);

			if($orderID>0){
				$sum=0;
				foreach ($_SESSION["mycart"] as $key => $value) {
					$row = $product->getHangHoaById($key);	
					$price = $row['DonGia'];	
					$sum += $value*$price;
					$orderItem->themChiTietHoaDon($orderID,$key,$value);
				}
				// echo $orderID."<br>";
				$order->capNhatTongTien($orderID,$sum);
				unset($_SESSION['mycart']);
				
				header("location: index.php");
			}
		}
	}
?> 