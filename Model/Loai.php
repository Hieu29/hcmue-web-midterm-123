<?php
	include_once("Model/DataProvider.php");
	class Loai{
		private $da; //biến kết nối dữ liệu
		function __construct(){
			$this->da=new DataProvider();
		}
		function getLoai(){
			$sql = "Select * from loai";
			return $this->da->FetchAll($sql);
		}
		function getLoaiById($id){
			$sql="Select * from loai where MaLoai='$id'";
			return $this->da->Fetch($sql);
		}
		function themLoai($tenLoai,$moTa){
			$sql="Insert into loai(TenLoai,MoTa) Values('$tenLoai','$moTa')";
			return $this->da->ExecuteQuery($sql);
		}
		function capNhatLoai($id,$tenLoai,$moTa){
			$sql="Update loai set TenLoai='$tenLoai',MoTa='$moTa' where MaLoai=$id";
			return $this->da->ExecuteQuery($sql);
		}
		function xoaLoai($id){
			$sql="Delete from loai where MaLoai=$id";
			return $this->da->ExecuteQuery($sql);
		}
		function getTenLoai($id){
			$sql = "SELECT TenLoai FROM loai WHERE MaLoai=$id";
			return $this->da->Fetch($sql);
		}
		function __destruct(){
			unset($this->da);
		}
	}
?>