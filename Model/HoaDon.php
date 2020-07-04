<?php
include_once("DataProvider.php");
include_once("ChiTietHoaDon.php");
class HoaDon{
	private $da;
	function __construct(){
		$this->da = new DataProvider();
	}
	function getHoaDon(){
		$sql = "Select * from HoaDon";
		return $this->da->FetchAll($sql);
	}
	function getHoaDonManage(){
		$sql = "Select hd.MaHD,hd.NgayLapHD,hd.TongTien,kh.HoTen from HoaDon hd join KhachHang kh on hd.MaKH = kh.MaKH order by hd.maHD desc";
		return $this->da->FetchAll($sql);
	}
	
	function themHoaDon($maKH,$tongTien){
		$sql="Insert into HoaDon(NgayLapHD,MaKH,tongTien) values(now(),$maKH,$tongTien)";
		return $this->da->ExecuteQueryInsert($sql);
	}
	function capNhatTongTien($maHD,$tongTien){
		$sql = "Update HoaDon set TongTien = $tongTien where MaHD = $maHD";
		return $this->da->ExecuteQuery($sql);	
	}
	function xoaHoaDon($orderID){
		$item = new ChiTietHoaDon();
		$item->xoaChiTietHoaDon($orderID);
		$sql="Delete from HoaDon where MaHD=$orderID";
		return $this->da->ExecuteQuery($sql);
	}
	function __destruct(){
		unset($this->da);
	}
}
?>