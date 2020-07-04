<?php
include_once("DataProvider.php");
class ChiTietHoaDon{
	private $da;
	function __construct(){
		$this->da = new DataProvider();
	}
	function getChiTietHoaDonByHoaDonId($orderID){
		$sql="Select hh.TenHH,ct.MaHH,ct.MaHD,ct.SoLuong,hh.DonGia from ChiTietHoaDon ct inner join HangHoa hh on ct.MaHH=hh.MaHH where MaHD=$orderID";
		//echo $sql;
		return $this->da->FetchAll($sql);
	}
	function themChiTietHoaDon($maHD,$maHH,$soLuong){
		$sql="Insert into ChiTietHoaDon (MaHD,MaHH,SoLuong) values($maHD,$maHH,$soLuong)";
		return $this->da->ExecuteQuery($sql);
	}
	function xoaChiTietHoaDon($maHD){
		$sql="Delete from ChiTietHoaDon where MaHD=$maHD";
		return $this->da->ExecuteQuery($sql);
	}
	function __destruct(){
		unset($this->da);
	}
}
?>