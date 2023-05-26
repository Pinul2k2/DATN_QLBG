-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 26, 2023 lúc 01:05 PM
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
-- Cơ sở dữ liệu: `datn_qlbg`
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
  `id_size` int(11) NOT NULL,
  `id_color` int(11) NOT NULL,
  `GIASP` varchar(255) NOT NULL,
  `HINH` varchar(150) NOT NULL,
  `soluong` int(11) NOT NULL,
  `TINHTRANG` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`MASP`, `TENSP`, `MALOAI`, `id_size`, `id_color`, `GIASP`, `HINH`, `soluong`, `TINHTRANG`) VALUES
(2, 'Adidas Ultraboost', 'Adidas', 15, 4, '5200000 ', 'Adidas Ultraboost Light FTWR WHITE Orange.png', 15, 1),
(3, 'Adidas Superstar', 'Adidas', 15, 7, '2600000', 'Adidas giày SUPERSTAR .png', 10, 1),
(4, 'Ultradidas 4D', 'Adidas', 18, 4, '6000000', 'Adidasultra adidas 4d.jpg', 11, 1),
(5, 'Adidas x Legor Tech RNR ', 'Adidas', 18, 1, '6000000', 'Adidas Giay_adidas_x_LEGOr_Tech_RNR (3).jpg', 5, 1),
(6, 'Pureboost 22 Heatrdy  ', 'Adidas', 13, 5, '5000000', 'Adidas pureboost 22 heat.rdy  (2).jpg', 4, 1),
(7, 'Harden Volume 7 ', 'Adidas', 0, 0, '4500000 ', 'Adidas harden volume 7 (2).jpg', 1, 1),
(9, 'Ultraboost Light FTWR W', 'Adidas', 0, 0, '5200000 ', 'adidas Ultraboost Light FTWR WHITE.png', 20, 0),
(10, 'Ultra Adidas 4D', 'Adidas', 0, 0, '6000000', 'Adidas ultra adidas 4d (4).jpg', 20, 1),
(12, 'Adias Campus 00S', 'Adidas', 0, 0, '2600000', 'Adias Campus 00S.jpg', 20, 1),
(11, 'Alpabounce + SustainableE Boun', 'Adidas', 0, 0, '2500000', 'Adidas ALPABOUNCE+ SUSTAINABLE BOUNCE.jpg', 20, 1),
(8, 'Alpabounce + Sustaninable Boun', 'Adidas', 0, 0, '2500000 ', 'Adidas ALPABOUNCE+ SUSTAINABLE BOUNCE (2).jpg', 20, 1),
(1, 'Adidas X Marimekko Supernova 2', 'Adidas', 0, 0, '3200000', 'adidas x marimekko supernova 2.0 (2).jpg', 20, 1),
(13, 'Adidas_x_Legor_Tec', 'Adidas', 0, 0, '6000000 ', 'Adidas Giay_adidas_x_LEGOr_Tech_RNR (2).jpg', 20, 1),
(17, 'Adidas Superstar Full Whigte', 'Adidas', 0, 0, '3000000', 'Adidas SuperstarFullWhigte.png', 20, 0),
(14, 'Adidasx_Legor_Tec', 'Adidas', 0, 0, '6000000', 'Adidas Giay_adidas_x_LEGOr_Tech_RNR.jpg', 20, 1),
(15, 'Adidas Pureboost 22 Heatrdy', 'Adidas', 0, 0, '3700000 ', 'Adidas pureboost 22 heat.rdy .jpg', 20, 1),
(16, 'Adidas Samba OG', 'Adidas', 0, 0, '1500000 ', 'Adidas Samba og.png', 20, 1),
(18, 'Adidas Ultra 4D', 'Adidas', 0, 0, '6000000 ', 'Adidas ultra adidas 4d (3).jpg', 20, 1),
(19, 'Adidas Ultraboost Light FTWR W', 'Adidas', 0, 0, '5500000', 'Adidas Ultraboost Light FTWR WHITE White.png', 20, 1),
(20, 'Adidas Forum Low CL x Indigo H', 'Adidas', 0, 0, '2600000 ', 'AdidasForum low cl x indigo herz.png', 20, 1),
(21, 'Adidas Sambarose', 'Adidas', 0, 0, '2900000 ', 'AdidasSambarose.png', 20, 1),
(22, 'Track 6 I.S.E.E - Pure White/I', 'Ananas', 0, 0, '1490000 ', 'Ananas Pro_A6T012_1.jpg', 15, 1),
(23, 'Track 6 Jazico - Low Top', 'Ananas', 0, 0, '1190000 ', 'Ananas Pro_A6T016_1.jpeg', 20, 1),
(24, 'Basas Bumper Gum Ne - Mule', 'Ananas', 0, 0, '520000', 'Ananas Pro_AV00006_1.jpeg', 20, 1),
(25, 'Basas Hook N\'loop Ne - Low Top', 'Ananas', 0, 0, '520000 ', 'Ananas Pro_AV00009_1.jpeg', 20, 1),
(26, 'Basas Bumper Gum Ne - Low Top', 'Ananas', 0, 0, '520.000 VND', 'Ananas Pro_AV00098_1.jpg', 30, 1),
(27, 'Urbas Irrelevant Ne - Low Top ', 'Ananas', 0, 0, '650.000 VND', 'Ananas pro_AV00104_1-1.jpg', 20, 1),
(28, 'Urbas Irrlevant Ne - Low Top -', 'Ananas', 0, 0, '650.000 VND', 'Ananas pro_AV00105_1-1.jpg', 20, 1),
(29, 'Vintas Monoguso - Low Top - Mo', 'Ananas', 0, 0, '720.000 VND', 'Ananas Pro_AV00119_1.jpg', 20, 1),
(30, 'Basas Raw - Low Top - Rustic', 'Ananas', 0, 0, '610.000 VND', 'Ananas pro_AV00135_1.jpg', 20, 1),
(31, 'Vintas Jazico - Low Top - Roya', 'Ananas', 0, 0, '720.000 VND', 'Ananas Pro_AV00173_1.jpeg', 20, 1),
(32, 'Vintas Jazico - High Top - Roy', 'Ananas', 0, 0, '780.000 VND', 'Ananas Pro_AV00174_1-500x500.png', 20, 1),
(33, 'Urbas Corluray Mix - Low Top -', 'Ananas', 0, 0, '610.000 VND', 'Ananas Pro_AV00165_1.jpeg', 20, 1),
(34, 'Pattas Living Journey - Low To', 'Ananas', 0, 0, '720.000 VND', 'Ananas pro_AV00132_1-1.jpg', 20, 1),
(35, 'Track 6 Unnamed NO.1 In C Mino', 'Ananas', 0, 0, '1.090.000 VND', 'Ananas pro_A6T011_1.jpg', 20, 1),
(36, 'Urbas Sc - High Top - Cornsilk', 'Ananas', 0, 0, '650.000 VND', 'Ananas Pro_AV00192_1.jpg', 20, 1),
(37, 'Chuck 70s Low Navy', 'Converse', 0, 0, '800.000 VND', 'converse 1-21.jpg', 20, 1),
(38, 'Comme Des Garçons Play x Conve', 'Converse', 0, 0, '1.900.000 VND', 'converse 1-24.jpg', 20, 1),
(39, 'Converse Run Star Hike', 'Converse', 0, 0, '1.900.000 VND', 'converse 1-31.jpg', 20, 1),
(40, 'Converse 70s Low All White', 'Converse', 0, 0, '900.000 VND', 'converse2-16.jpg', 20, 1),
(42, 'Converse Chuck 70s Low Red', 'Converse', 0, 0, '900.000 VND', 'converse 2-19 (3).jpg', 20, 1),
(43, 'Converse Renew Canvas', 'Converse', 0, 0, '1.600.000 VND', 'converse rennew canvas.jpg', 15, 1),
(44, 'Converse Run Star Hike', 'Converse', 0, 0, '1.900.000 VND', 'converse run star hike (3).jpg', 15, 1),
(45, 'Converse 70s vàng cao', 'Converse', 0, 0, '950.000 VND', 'converse1-5.jpg', 20, 1),
(46, 'Converse 70s High Red', 'Converse', 0, 0, '950.000 VND', 'converse1-10.jpg', 20, 1),
(47, 'Chuck 70s Low Black White', 'Converse', 0, 0, '900.000 VND', 'converse1-18.jpg', 20, 1),
(48, 'Converse Classic Đen Cao', 'Converse', 0, 0, '750.000 VND', '1-2.jpg', 20, 1),
(49, 'Converse Classic High All Whit', 'Converse', 0, 0, '750.000 VND', '1.jpg', 15, 1),
(50, 'Converse Run Star Move', 'Converse', 0, 0, '1.900.000 VND', 'Converse.jpg', 20, 1),
(51, 'Converse Chuck 70s Low Sunflow', 'COnverse', 0, 0, '850.000 VND', 'Converse 1-16.jpg', 20, 1),
(52, 'Comme Des Garçons Play x Conve', 'Converse', 0, 0, '1.900.000 VND', 'Converse1-26.jpg', 20, 1),
(53, 'Nike Air Force 1-07 White', 'Nike', 0, 0, '2.929.000 VND', 'Nike Air Force 1-07 White .png', 20, 1),
(54, 'Nike Air Force 1-07 Black', 'Nike', 0, 0, '2.929.000 VND', 'Nike Air Force1-07 Black.png', 20, 1),
(55, 'Nike Air Max 97 Black', 'Nike', 0, 0, '4.999.000 VND', 'nike air max 97 se .jpg', 20, 1),
(56, 'Nike Air Max 97 Blue', 'Nike', 0, 0, '4.999.000 VND', 'nike air max 97 se.jpg', 20, 1),
(57, 'Nike Air Max Systm', 'Nike', 0, 0, '2.779.000 VND', 'nike air max systm (3).jpg', 20, 1),
(58, 'Nike GT Cut 2', 'Nike', 0, 0, '4.999.000 VND', 'nike air zoom G.T.cut 2 .jpg', 20, 1),
(59, 'Nike GT Cut 2\r\nBLUE ', 'Nike', 0, 0, '4.999.000 VND', 'nike air zoom G.T.cut.jpg', 20, 1),
(60, 'Nike GT Cut 2\r\nWhite', 'Nike', 0, 0, '4.999.000 VND', 'nike air zoom G.T.jpg', 20, 1),
(61, 'Nike Air Max 90 SE', 'Nike', 0, 0, '4.909', 'Nike air-max-90-se (3).jpg', 20, 1),
(62, 'NikeCourt Legacy', 'Nike', 0, 0, '2.069.000 VND', 'nike court legacy .jpg', 20, 1),
(64, 'Nike Court Vision Low', 'Nike', 0, 0, '2.069.000 VND', 'nike court vision low (1).jpg', 20, 1),
(65, 'NikeCourt Legacy', 'Nike', 0, 0, '2.069.000 VND', 'Nike ece27fc1-1c28-43b2-ae8e-fb39db26c71c.jpg', 23, 1),
(66, 'Nike Juniper Trail 2 Next Natu', 'Nike', 0, 0, '2.349.000 VND', 'Nike Juniper Trail 2 Next Nature.png', 20, 1),
(67, 'Nike Juniper Trail 2 Next Natu', 'Nike', 0, 0, '2.069.000 VND', 'Nike Juniper Trail 2.png', 20, 1),
(68, 'Nike Juniper Trail 2 Next Natu', 'Nike', 0, 0, '2.069.000 VND', 'Nike nikejunipertrail2nextnature_11zon.png', 20, 1),
(69, 'Nike Pegasus Trail 4 GORE-TEX', 'Nike', 0, 0, '4.069.000 VND', 'Nike pegasus-trail-4-gore-tex.jpg', 20, 1),
(70, 'Nike Renew Ride 3', 'Nike', 0, 0, '2.189.000 VND', 'nike renew ride 3.jpg', 20, 1),
(71, 'Nike Renew Ride 3 - White', 'Nike', 0, 0, '2.189.000 VND', 'Nike White.jpg', 20, 1),
(73, 'Vans Old Skool Color Theory', 'Vans', 0, 0, '1.750.000 VND', 'Vans Old Skool Color Theory.png', 20, 1),
(72, 'Vans Era Varsity Canvas', 'Vans', 0, 0, '1.450.000 VND', 'Vans Era Varsity Canvas.png', 20, 1),
(74, 'Vans Skate Old Skool', 'Vans', 0, 0, '1.500.000 VND', 'Vans Skate Old Skool.png', 20, 1),
(75, 'Vans Old Skool Color Theory-pi', 'Vans', 0, 0, '1.750.000 VND', 'Vans Old Skool Color Theory-pink.png', 20, 1),
(76, 'Vans Style 36 Vintage Pop', 'Vans', 0, 0, '1.750.000 VNd', 'Vans Style 36 Vintage Pop.png', 20, 1),
(77, 'Vans Old Skool Platform', 'Vans', 0, 0, '1.950.000 VND', 'Vans Old Skool Platform.png', 20, 1),
(78, 'Vans Authentic Platform2.0', 'Vans', 0, 0, '1.550.000 VND', 'Vans Authentic Platform2.0 .png', 20, 1),
(79, 'Vans Authentic Platform Mule .', 'Vans', 0, 0, '1.600.000 VND', 'Vans Authentic Platform Mule .png', 20, 1),
(80, 'Vans Style 36 Mule ', 'Vans', 0, 0, '2.100.000 VND', 'Vans Style 36 Mule .png', 10, 1),
(82, 'Vans Old Skool Modular', 'Vans', 0, 0, '2.350.000 VND', 'Vans Old Skool Modular.png', 20, 1),
(81, 'Vans Ua Old Skool Pig Suede', 'Vans', 0, 0, '2.200.000 VND', 'Vans Ua Old Skool Pig Suede.png', 20, 1),
(83, 'Vans Comfycush One ', 'Vans', 0, 0, '2.250.000 VNd', 'Vans Comfycush One .png', 20, 1),
(85, 'Vans Authentic Eco Theory Chec', 'Vans', 0, 0, '1.750.000 VND', 'Vans Authentic Eco Theory Checkerboard.png', 20, 1),
(84, 'Vans Authentic 44 Dx Vans x Ou', 'Vans', 0, 0, '2.100.000 VND', 'Vans Authentic 44 Dx Vans x Our Legends.png', 20, 1),
(86, 'Vans Style 36 Vans x Netflitx', 'Vans', 0, 0, '3.450.000 VND', 'Vans Style 36 Vans x Netflitx.png', 20, 1);

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
  `id_user` int(11) NOT NULL,
  `tenkhachhang` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `dienthoai` varchar(255) NOT NULL,
  `gioiTinh` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id_user`, `tenkhachhang`, `email`, `diachi`, `dienthoai`, `gioiTinh`, `password`) VALUES
(1, 'Phúc', 'tchauphuc2002@gmail.com', 'TPhcm', '0768019609', 'Nam', 'phuc2002'),
(2, 'Long', 'long@gmail.com', 'TPhcm', '0768019609', 'Nam', 'long2002'),
(3, 'Thịnh Phúc', 'pinulk2@gmail.com', 'Tphcm', '0363924093', '', 'pinul2002');

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
  ADD PRIMARY KEY (`id_user`);

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
  MODIFY `MASP` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT cho bảng `thong_tin_nhan_vien`
--
ALTER TABLE `thong_tin_nhan_vien`
  MODIFY `MANV` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
