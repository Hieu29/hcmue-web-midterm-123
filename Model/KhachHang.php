<?php
	include_once("DataProvider.php");
	class KhachHang{ 
		private $da;
		function __construct(){
			$this->da = new DataProvider();
		}
		function getKhachHangById($id){
			$sql = "Select * from KhachHang where MaKH = $id";
			return $this->da->Fetch($sql);
		}
		function getKhachHang(){
			$sql="Select * from KhachHang";
			return $this->da->FetchAll($sql);
		}
		function xoaKhachHang($id){
			$sql = "Delete from KhachHang where MaKH=$id";
			return $this->da->ExecuteQuery($sql);
		}
		function themKhachHang($hoTen,$dienThoai,$email){
			$sql = "Insert into KhachHang(HoTen,DienThoai,Email) values ('$hoTen','$dienThoai','$email')";
			return $this->da->ExecuteQuery($sql);
		}
		function capNhatKhachHang($maKh,$hoTen,$dienThoai,$email){
			$sql="Update KhachHang set MaKH=$maKh,HoTen='$hoTen',DienThoai='$dienThoai',Email='$email' where MaKH=$maKh";
			return $this->da->ExecuteQuery($sql);
		}
		function __destruct(){
			unset($this->da);
		}
	}
?>