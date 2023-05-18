-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 09, 2023 lúc 04:47 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `datb_qlbg`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin_account`
--

CREATE TABLE `admin_account` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin_account`
--

INSERT INTO `admin_account` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin123', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuc_vu`
--

CREATE TABLE `chuc_vu` (
  `MACV` int(5) NOT NULL,
  `TENCV` varchar(20) NOT NULL,
  `TINHTRANG` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hdn_chitiet`
--

CREATE TABLE `hdn_chitiet` (
  `MAHDN` int(10) NOT NULL,
  `MASP` int(10) NOT NULL,
  `DGN` int(10) NOT NULL,
  `SoLuong` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hdx_chitiet`
--

CREATE TABLE `hdx_chitiet` (
  `MAHDX` int(10) NOT NULL,
  `MASP` int(10) NOT NULL,
  `DGX` int(10) NOT NULL,
  `SoLuong` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hd_nhap`
--

CREATE TABLE `hd_nhap` (
  `MAHDN` int(10) NOT NULL,
  `NGAYLAP` int(11) NOT NULL,
  `MANV` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hd_xuat`
--

CREATE TABLE `hd_xuat` (
  `MAHDX` int(11) NOT NULL,
  `NGAYLAP` date NOT NULL,
  `MANV` varchar(10) NOT NULL,
  `MAKH` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `MAKH` int(10) NOT NULL,
  `TENKH` varchar(50) NOT NULL,
  `NGSINH` date NOT NULL,
  `GIOITINH` varchar(3) NOT NULL,
  `SDT` int(12) NOT NULL,
  `DIACHI` varchar(150) NOT NULL,
  `TINHTRANG` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`MAKH`, `TENKH`, `NGSINH`, `GIOITINH`, `SDT`, `DIACHI`, `TINHTRANG`) VALUES
(1, 'Phúc', '2002-08-24', 'Nam', 768019609, '243/66A Tôn Thất Thuyết ,P3,Q4,Tphcm', 1),
(2, 'Long', '2002-09-13', 'Nam', 768016602, '351 No trang long p13 Bình Thạnh ,Tphcm', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kho`
--

CREATE TABLE `kho` (
  `MAKHO` int(10) NOT NULL,
  `TENKHO` varchar(50) NOT NULL,
  `DIACHI` varchar(150) NOT NULL,
  `SDT` int(10) NOT NULL,
  `MANV` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kho_chitiet`
--

CREATE TABLE `kho_chitiet` (
  `MAKHO` int(10) NOT NULL,
  `MASP` int(10) NOT NULL,
  `SoLuong` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_san_pham`
--

CREATE TABLE `loai_san_pham` (
  `MALOAI` int(10) NOT NULL,
  `TENLOAI` varchar(50) NOT NULL,
  `TINHTRANG` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_san_pham`
--

INSERT INTO `loai_san_pham` (`MALOAI`, `TENLOAI`, `TINHTRANG`) VALUES
(1, 'Adidas', 0),
(2, 'Nike', 0),
(3, 'Ananas', 0),
(4, 'Vans', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nha_cung_cap`
--

CREATE TABLE `nha_cung_cap` (
  `MANCC` int(5) NOT NULL,
  `TENNCC` varchar(50) NOT NULL,
  `MALOAI` varchar(10) NOT NULL,
  `DIACHI` varchar(150) NOT NULL,
  `SDT` int(12) NOT NULL,
  `TINHTRANG` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `MASP` int(10) NOT NULL,
  `TENSP` varchar(30) NOT NULL,
  `MALOAI` varchar(255) NOT NULL,
  `GIASP` varchar(255) NOT NULL,
  `HINH` varchar(150) NOT NULL,
  `TINHTRANG` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`MASP`, `TENSP`, `MALOAI`, `GIASP`, `HINH`, `TINHTRANG`) VALUES
(1, 'Vintas Jazico - High Top', 'TT1', '780.000 VND', 'Pro_AV00174_1-500x500.png', 1),
(2, 'Adidas Ultraboost Light FTWR W', 'Sport1', '5.200.000 VND', 'Adidas Ultraboost Light FTWR WHITE Orange.png', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thong_tin_nhan_vien`
--

CREATE TABLE `thong_tin_nhan_vien` (
  `MANV` int(5) NOT NULL,
  `TENNV` varchar(100) NOT NULL,
  `DIACHI` varchar(150) NOT NULL,
  `SDT` int(12) NOT NULL,
  `NGSINH` date NOT NULL,
  `MACHUCVU` varchar(5) NOT NULL,
  `GIOITINH` varchar(3) NOT NULL,
  `TINHTRANG` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `contactno` varchar(11) DEFAULT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `contactno`, `posting_date`) VALUES
(9, 'Anuj', 'Kumar', 'demouser@gmail.com', 'Test@123', '21222222', '2020-04-15 18:30:00'),
(11, 'Anuj', 'Kumar', 'phpgurukulofficial@gmail.com', 'Test@123', '1234567890', '2020-04-15 18:30:00'),
(13, 'phuc', 'thinh', 'tchauphuc@gmail.com', 'phuc123', '1', '2023-04-26 19:22:51'),
(14, 'phuc', 'thinh', 'chauphuc@gmail.com', 'phuc2002', NULL, '2023-05-01 13:48:26');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chuc_vu`
--
ALTER TABLE `chuc_vu`
  ADD PRIMARY KEY (`MACV`);

--
-- Chỉ mục cho bảng `hdn_chitiet`
--
ALTER TABLE `hdn_chitiet`
  ADD PRIMARY KEY (`MAHDN`);

--
-- Chỉ mục cho bảng `hdx_chitiet`
--
ALTER TABLE `hdx_chitiet`
  ADD PRIMARY KEY (`MAHDX`);

--
-- Chỉ mục cho bảng `hd_nhap`
--
ALTER TABLE `hd_nhap`
  ADD PRIMARY KEY (`MAHDN`);

--
-- Chỉ mục cho bảng `hd_xuat`
--
ALTER TABLE `hd_xuat`
  ADD PRIMARY KEY (`MAHDX`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`MAKH`);

--
-- Chỉ mục cho bảng `kho`
--
ALTER TABLE `kho`
  ADD PRIMARY KEY (`MAKHO`);

--
-- Chỉ mục cho bảng `kho_chitiet`
--
ALTER TABLE `kho_chitiet`
  ADD PRIMARY KEY (`MAKHO`);

--
-- Chỉ mục cho bảng `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  ADD PRIMARY KEY (`MALOAI`);

--
-- Chỉ mục cho bảng `nha_cung_cap`
--
ALTER TABLE `nha_cung_cap`
  ADD PRIMARY KEY (`MANCC`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`MASP`);

--
-- Chỉ mục cho bảng `thong_tin_nhan_vien`
--
ALTER TABLE `thong_tin_nhan_vien`
  ADD PRIMARY KEY (`MANV`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin_account`
--
ALTER TABLE `admin_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `chuc_vu`
--
ALTER TABLE `chuc_vu`
  MODIFY `MACV` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hdn_chitiet`
--
ALTER TABLE `hdn_chitiet`
  MODIFY `MAHDN` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hdx_chitiet`
--
ALTER TABLE `hdx_chitiet`
  MODIFY `MAHDX` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hd_nhap`
--
ALTER TABLE `hd_nhap`
  MODIFY `MAHDN` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hd_xuat`
--
ALTER TABLE `hd_xuat`
  MODIFY `MAHDX` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `MAKH` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `kho`
--
ALTER TABLE `kho`
  MODIFY `MAKHO` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `kho_chitiet`
--
ALTER TABLE `kho_chitiet`
  MODIFY `MAKHO` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  MODIFY `MALOAI` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `nha_cung_cap`
--
ALTER TABLE `nha_cung_cap`
  MODIFY `MANCC` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `MASP` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `thong_tin_nhan_vien`
--
ALTER TABLE `thong_tin_nhan_vien`
  MODIFY `MANV` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
