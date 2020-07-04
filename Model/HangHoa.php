<?php
	include_once("DataProvider.php");
	class HangHoa{ 
		private $da;
		function __construct(){
			$this->da = new DataProvider();
		}
		function getHangHoaById($id){
			$sql = "Select * from HangHoa where MaHH = $id";
			return $this->da->Fetch($sql);
		}
		function getHangHoaByMaLoai($maLoai){
			$sql = "SELECT * FROM HangHoa WHERE MaLoai=$maLoai";
			return $this->da->FetchAll($sql);
		}
		function getHangHoaPhanTrang($start,$end){
			$sql="Select MaHH,TenHH,DonGia,Hinh,MaLoai from HangHoa order by MaHH desc limit $start,$end";
			return $this->da->FetchAll($sql);
		}
		function getHangHoa(){
			$sql="Select * from HangHoa";
			return $this->da->FetchAll($sql);
		}
		function getHangHoaManage(){
			$sql="Select hh.MaHH,hh.TenHH,hh.DonGia,hh.Hinh,l.TenLoai from HangHoa hh join Loai l on hh.MaLoai=l.MaLoai";
			return $this->da->FetchAll($sql);
		}
		function xoaHangHoa($id){
			$sql = "Delete from HangHoa where MaHH=$id";
			return $this->da->ExecuteQuery($sql);
		}
		function themHangHoa($tenHH,$donGia,$hinh,$maLoai){
			$sql = "Insert into HangHoa(TenHH,DonGia,Hinh,MaLoai) values ('$tenHH',$donGia,'$hinh',$maLoai)";
			return $this->da->ExecuteQuery($sql);
		}
		function capNhatHangHoa($maHH,$maLoai,$tenHH,$donGia,$hinh){
			if($hinh=="")
			{
				$sql="Update HangHoa set MaLoai=$maLoai,TenHH='$tenHH',DonGia=$donGia,MaLoai=$maLoai where MaHH=$maHH";
			}else
				$sql="Update HangHoa set MaLoai=$maLoai,TenHH='$tenHH',DonGia=$donGia,Hinh='$hinh',MaLoai=$maLoai where MaHH=$maHH";
			return $this->da->ExecuteQuery($sql);
		}
		function __destruct(){
			unset($this->da);
		}
	}
?>