-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 04, 2020 lúc 06:11 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhom123`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MaCTHD` int(2) NOT NULL,
  `MaHD` int(2) NOT NULL,
  `MaHH` int(2) NOT NULL,
  `SoLuong` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`MaCTHD`, `MaHD`, `MaHH`, `SoLuong`) VALUES
(3, 3, 2, 1),
(4, 3, 1, 1),
(5, 4, 1, 1),
(6, 4, 4, 1),
(7, 4, 5, 1),
(8, 4, 6, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `MaHH` int(2) NOT NULL,
  `TenHH` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `DonGia` int(20) NOT NULL,
  `Hinh` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `MaLoai` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`MaHH`, `TenHH`, `DonGia`, `Hinh`, `MaLoai`) VALUES
(1, 'Hoa Hồng', 30000, '101803343_ipad-3-4thh.jpg', 1),
(2, 'Huấn Rose', 334567, '101803343_ipad-3-4thh.jpg', 1),
(4, 'Dell', 12345678, '1062409938Screenshot(3).png', 8),
(5, 'Asus', 234567, '1839368021Screenshot(3).png', 8),
(6, 'Chuột logitek', 453400, '755891519Screenshot(4).png', 10),
(7, 'Lót chuột asus', 23454, '285869497Screenshot(4).png', 12),
(8, 'Bàn phím cơ', 234523, '1868612912Screenshot(3).png', 11),
(9, 'Hoa hướng dương', 1234534, '1036851233Screenshot(3).png', 1),
(10, 'Kẹo cao su BCS ', 234534, '541200259Screenshot(3).png', 5),
(11, 'Kington', 3453421, '825068256Screenshot(2).png', 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` int(2) NOT NULL,
  `NgayLapHD` date NOT NULL DEFAULT current_timestamp(),
  `MaKH` int(2) NOT NULL,
  `TongTien` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `NgayLapHD`, `MaKH`, `TongTien`) VALUES
(3, '2020-07-04', 2, 364567),
(4, '2020-07-04', 9, 13063645);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` int(2) NOT NULL,
  `HoTen` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DienThoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `HoTen`, `DienThoai`, `Email`) VALUES
(1, 'Luân', '1234567', 'l@'),
(2, 'Hiếu', '345678', 'h@123434'),
(5, 'Hữu', '213452345', 'abc@gmail.cpm'),
(6, 'Trung', '1234567', 'abc@gmail.cpm'),
(7, 'Thư', '1234578', 'abc@gmail.cpm'),
(8, 'Khoa', '234567', 'abc@gmail.cpm'),
(9, 'Đạt', '123456', 'abc@gmail.cpm'),
(10, 'Tính', '2345678', 'abc@gmail.cpm'),
(11, 'Hưng', '23456', 'abc@gmail.cpm'),
(12, 'Duy', '3456', 'abc@gmail.cpm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `MaLoai` int(2) NOT NULL,
  `TenLoai` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `MoTa` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`MaLoai`, `TenLoai`, `MoTa`) VALUES
(1, 'Hoa', 'Loại Hoa'),
(3, 'Bánh', 'Loại bánh'),
(5, 'Kẹo', 'Loại Kẹo'),
(6, 'Xe', 'Loại xe'),
(7, 'Điện thoại', 'Điện thoại'),
(8, 'Laptop', 'Laptop'),
(9, 'Usb', 'Usb'),
(10, 'Chuột', 'Chuột'),
(11, 'Bàn Phím', 'Bàn Phím'),
(12, 'Lót chuột', 'Lót chuột');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`MaCTHD`),
  ADD KEY `MaHH` (`MaHH`),
  ADD KEY `MaHD` (`MaHD`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`MaHH`),
  ADD KEY `MaLoai` (`MaLoai`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `MaKH` (`MaKH`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`MaLoai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `MaCTHD` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `MaHH` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHD` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKH` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `MaLoai` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`MaHH`) REFERENCES `hanghoa` (`MaHH`),
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`MaHD`);

--
-- Các ràng buộc cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `hanghoa_ibfk_1` FOREIGN KEY (`MaLoai`) REFERENCES `loai` (`MaLoai`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
