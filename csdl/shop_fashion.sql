-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 28, 2023 lúc 07:17 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop_fashion`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bai_viet`
--

CREATE TABLE `bai_viet` (
  `id` int(11) NOT NULL,
  `tieu_de` longtext COLLATE utf8_unicode_ci NOT NULL,
  `anh` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bai_viet`
--

INSERT INTO `bai_viet` (`id`, `tieu_de`, `anh`, `noi_dung`) VALUES
(1, 'sp 1', 'bai1.jpg', ''),
(4, 'Top áo Polo Local Brand được giới trẻ ưa chuộng nhất', 'bai2.jpeg', 'Áo polo trở thành một món đồ thời trang được nhiều bạn trẻ yêu thích, là nét mang biểu tượng riêng của thời trang hiện đại. Sau đây là top những thương hiệu có các thiết kế áo polo local brand đang được giới trẻ ưa chuộng nhất.\r\n\r\nONTOP\r\nVới định hướng phong cách Streetwear, thương hiệu ONTOP sẽ luôn mang đến cho bạn những chiếc áo polo local brand unisex, với form dáng basic và cả thiết kế họa tiết graphic sáng tạo, trẻ trung.\r\n\r\nÁo polo local brand ONTOP có 6 màu được phối rất tinh tế và đẹp mắt. Đây là những gam rất dễ mặc không quá kén da và rất dễ phối đồ sẽ là một items không thể thiếu trong tủ đồ của bạn. Cổ áo không chỉ được phối màu ấn tượng khác với thân áo thì cổ áo còn thiết kế theo hình chữ V kèm 2 nút giúp bạn dễ diều chỉnh sao cho thoải mái nhất.\r\n\r\n\r\nao polo local brand\r\n\r\nao polo local brand\r\nChất vải cá sấu được làm từ cotton với đặc tính ưu việt là khả năng thấm hút tốt cho bạn tự tin khi tham gia chơi thể thao hay vận động ngoài trời.\r\n\r\nbanner\r\nMua hàng tại đây\r\nTEELAB\r\nTeelab đã trở thành một trong những cửa hàng thời trang được giới trẻ vô cùng yêu thích. Teelab mang phong cách trẻ trung, năng động, đồ unisex không chỉ cực chất mà còn phù hợp với số đông các bạn trẻ. Áo polo local brand Teelab có thiết kế đơn giản, dễ mặc và có mẫu mã đa dạng cho bạn thoái mái lựa chọn.\r\n\r\n\r\nMua hàng tại đây\r\nOUTERITY\r\nPhong cách của Outerity hướng tới là sự đơn giản nhưng cá tính. Những sản phẩm của Outerity ra mắt với thiết kế Logo không rườm rà, cầu kì với những nét vẽ tinh tế nhưng không kém phần nổi bật sản phẩm. Bên cạnh, các thiết kế của Outerity còn mang phong cách dễ thương và mới mẻ.\r\n\r\nÁo polo local brand Outerity thiết kế kẻ sọc trắng chạy ngang mặt trước và sau áo đem đến một thiết kế mới lạ, cho bạn một items không thể thiếu trong tủ đồ được. Phần in chữ OUTERITY được cách điệu rất bắt mắt.\r\n\r\n\r\nao polo local brand\r\n\r\nao polo local brand\r\nMua hàng tại đây\r\nHi vọng với những chia sẻ ở trên có thể giúp bạn có thêm một item mới là áo polo local brand trong tủ đồ của mình.'),
(5, 'Top áo sơ mi Local Brand chất lượng', 'bai3.jpg', 'Áo sơ mi local brand ngày càng được nhiều tín đồ yêu thích thời trang ưa chuộng. Dù là brand áo sơ mi nam hay áo sơ mi nữ thì chúng đều mang những phong cách đặc trưng riêng của từng thương hiệu. Dưới đây là những thương hiệu có áo sơ mi Local Brand chất lượng.\r\n\r\nREGODS\r\nRegods nổi lên trong công động đồng Local Brand nhờ những mẫu thiết kế balo, túi mini đình đám. Chính vì thế, khi hãng cho ra mắt bộ sưu tập sơ mi Local Brand đã nhận được rất nhiều sự ủng hộ của các bạn trẻ Genz hiện nay.\r\n\r\nÁo được làm từ chất liệu kate chống nhăn co giãn với bề mặt vải mềm mại, thấm hút mồ hôi tốt tạo cảm giác thoải mái, thoáng mát cho người mặc. Bạn có thể phối áo sơ mi với quần short, với chân váy, yếm, blazer, quần legging hoặc phá cách hơn với phong cách giấu quần.\r\n\r\nao so mi Local Brand Regods\r\nao so mi Local Brand Regods\r\nao so mi Local Brand Regods\r\nMua hàng tại đây\r\nDAVIES\r\nĐơn giản nhưng không đơn điệu, áo sơ mi local brand Davies vẫn ghi điểm 10 với các đường cắt áo độc đáo, cũng như sử dụng tất cả bằng hình thêu tỉ mỉ tạo sự đắt giá cho sản phẩm.\r\n\r\nbanner\r\nao so mi Local Brand Davies\r\nao so mi Local Brand Davies\r\nao so mi Local Brand Davies\r\nDavies sử dụng chất liệu Kaki dệt riêng nhằm đảm bảo độ bởi độ bền và lên form dáng sơ mi đẹp. Chất liệu Kaki mềm mại có khả năng thấm hút mồ hôi nhanh, sẽ khiến người mặc áo sơ mi trong một thời gian dài không cảm thấy khó chịu.\r\n\r\nMua hàng tại đây\r\nBAD HABITS\r\nRa đời vào năm 2017, Bad Habits là Local Brand được nhắc đến đầu tiên vì các thiết kế ở brand này cực kì độc lạ, bắt mắt với chất lượng ngày càng được cải tiến và giá cả phù hợp với chất lượng.\r\n\r\nao so mi Local Brand Bad habits\r\nao so mi Local Brand Bad habits\r\nao so mi Local Brand Bad habits\r\nMua hàng tại đây\r\nHi vọng với những chia sẻ ở trên có thể giúp bạn có thêm một item áo sơ mi Local Brand chất lượng trong tủ đồ.'),
(6, 'tiêu đề 4', 'qc_t_1.png', 'sản phẩm 4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `hinh` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `rong` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `cao` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `hinh`, `rong`, `cao`) VALUES
(1, 'banner_2.png', '990px', '150px');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `html` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `footer`
--

INSERT INTO `footer` (`id`, `html`) VALUES
(1, 'Copyright © HuyNguyenThanh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `id` int(11) NOT NULL,
  `ten_nguoi_mua` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `dien_thoai` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `hang_duoc_mua` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoa_don`
--

INSERT INTO `hoa_don` (`id`, `ten_nguoi_mua`, `email`, `dia_chi`, `dien_thoai`, `noi_dung`, `hang_duoc_mua`) VALUES
(1, 'huy', 'hh', 'hh', 'hhh', 'hhh', '56[|||]11[|||||]60[|||]2[|||||]'),
(2, 'nhàn', 'nhandethuongnee', '113', '113', 'hello', '56[|||]1[|||||]');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu_doc`
--

CREATE TABLE `menu_doc` (
  `id` int(11) NOT NULL,
  `ten` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `anh` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menu_doc`
--

INSERT INTO `menu_doc` (`id`, `ten`, `anh`) VALUES
(1, 'T-Shirt / Áo Thun', '1.jpg'),
(2, 'Jacket / Áo Khoác', '2.jpg'),
(3, 'Hoodie / Sweater', '3.jpg'),
(4, 'Quần thời trang', '4.jpg'),
(5, 'Túi / Balo', '5.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu_ngang`
--

CREATE TABLE `menu_ngang` (
  `id` int(11) NOT NULL,
  `ten` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `loai_menu` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menu_ngang`
--

INSERT INTO `menu_ngang` (`id`, `ten`, `noi_dung`, `loai_menu`) VALUES
(2, 'SẢN PHẨM', '', 'san_pham'),
(3, 'GIỎ HÀNG', 'Nội dung giỏ hàng <br><br>\r\nNội dung giỏ hàng <br><br>\r\nNội dung giỏ hàng <br><br>\r\nNội dung giỏ hàng <br><br>\r\nNội dung giỏ hàng <br><br>\r\nNội dung giỏ hàng <br><br>\r\nNội dung giỏ hàng <br><br>', 'gio_hang'),
(4, 'CÁCH MUA HÀNG', 'Nội dung cách mua hàng <br><br>\r\nNội dung cách mua hàng <br><br>\r\nNội dung cách mua hàng <br><br>\r\nNội dung cách mua hàng <br><br>\r\nNội dung cách mua hàng <br><br>\r\nNội dung cách mua hàng <br><br>\r\nNội dung cách mua hàng <br><br>', ''),
(5, 'GIỚI THIỆU', 'Nội dung giới thiệu <br><br>\r\nNội dung giới thiệu <br><br>\r\nNội dung giới thiệu <br><br>\r\nNội dung giới thiệu <br><br>\r\nNội dung giới thiệu <br><br>\r\nNội dung giới thiệu <br><br>\r\nNội dung giới thiệu <br><br>', ''),
(6, 'LIÊN HỆ', 'Nội dung liên hệ<br><br>\r\nNội dung liên hệ<br><br>\r\nNội dung liên hệ<br><br>\r\nNội dung liên hệ<br><br>\r\nNội dung liên hệ<br><br>\r\nNội dung liên hệ<br><br>\r\nNội dung liên hệ<br><br>', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quang_cao`
--

CREATE TABLE `quang_cao` (
  `id` int(11) NOT NULL,
  `anh` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `vi_tri` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quang_cao`
--

INSERT INTO `quang_cao` (`id`, `anh`, `vi_tri`) VALUES
(1, 'qc_t_1.png', 'trai'),
(3, 'qc_p_1.png', 'phai');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id` int(11) NOT NULL,
  `ten` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(255) NOT NULL,
  `hinh_anh` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `thuoc_menu` int(255) NOT NULL,
  `noi_bat` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `trang_chu` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `sap_xep_trang_chu` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id`, `ten`, `gia`, `hinh_anh`, `noi_dung`, `thuoc_menu`, `noi_bat`, `trang_chu`, `sap_xep_trang_chu`) VALUES
(47, 'RESIDUAL BOXY TEE', 320000, 'dsc06833_b07e61b0500744359aff2e04e3b61346.webp', '', 1, 'co', 'co', 7),
(48, 'MAKE IT TEE', 320000, 'hades_18.webp', '', 1, 'co', 'co', 8),
(49, 'LEOPARD CLUB POLO', 320000, 'dsc06651_926d5e37a5224fa69e0edbdd50b86a7a.webp', '', 1, 'co', 'co', 9),
(50, 'RIOT MEOWS TEE', 320000, 'hades_18 (1).webp', '', 1, '', 'co', 10),
(51, 'GLOSSY TEE', 320000, 'glossy_tee_blue_c82607ea9dad4ee3a4afe797ffdf11d8.webp', '', 1, '', 'co', 11),
(52, 'SPECTRUM BOXY HOODIE', 750000, 'untitled_capture1361_6664944924e8466e9acd1b8732018365.webp', '', 3, 'co', 'co', 12),
(53, 'FEEL ALIVE JACKET', 750000, 'dsc06847_copy_2b565216a330490aa55ac91798b0506d.webp', '', 2, '', 'co', 13),
(54, 'METAL TRUNKS BOXY HOODIE', 750000, 'hades_18 (2).webp', '', 3, 'co', 'co', 14),
(55, 'TAWNY JACKET', 750000, 'dsc03094_e19acd9471764e6ba1306e757245585d.webp', '', 2, '', 'co', 15),
(56, 'MULTI ZIP HOODIE', 750000, 'multi_xam_97a746ffdac74e6dbad034c42168abd9.webp', '', 3, '', 'co', 16),
(58, 'BASIC CARGO PANTS - BROWN', 750000, '1_64cb56ea7dec47e5a688d1b4a5b2eb89_1024x1024.webp', '', 4, 'co', 'co', 18),
(59, 'BASIC CARGO PANTS - MINT GREEN', 750000, '1_188c6cd69d794e9ca53434e9a9739baf_1024x1024.webp', '', 4, 'co', 'co', 19),
(60, 'BASIC CARGO PANTS - BLACK', 750000, 'img_4505_1dd0d89025034d659a6e7d1663d60a35_1024x1024.webp', '', 4, 'co', 'co', 20),
(61, 'DESTROYED JEANS - BLUE', 750000, '2_d37bebcda9154685b436cc4207ca11b8_1024x1024.webp', '', 4, 'co', 'co', 21),
(62, 'LOGOS TEE - BLACK', 320000, '2__2__502feecfed3f42d79c0e7b1a7b1c480d_grande.webp', '', 1, 'co', 'co', 22);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slideshow`
--

CREATE TABLE `slideshow` (
  `id` int(11) NOT NULL,
  `hinh` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `lien_ket` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slideshow`
--

INSERT INTO `slideshow` (`id`, `hinh`, `lien_ket`) VALUES
(1, 'a_1.jpg', '#'),
(5, 'a_2.jpeg', '#'),
(6, 'a_3.jpg', '#');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thong_tin_quan_tri`
--

CREATE TABLE `thong_tin_quan_tri` (
  `id` int(11) NOT NULL,
  `ky_danh` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thong_tin_quan_tri`
--

INSERT INTO `thong_tin_quan_tri` (`id`, `ky_danh`, `mat_khau`) VALUES
(1, 'admin', 'c3284d0f94606de1fd2af172aba15bf3');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menu_doc`
--
ALTER TABLE `menu_doc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menu_ngang`
--
ALTER TABLE `menu_ngang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `quang_cao`
--
ALTER TABLE `quang_cao`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thong_tin_quan_tri`
--
ALTER TABLE `thong_tin_quan_tri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `menu_doc`
--
ALTER TABLE `menu_doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `menu_ngang`
--
ALTER TABLE `menu_ngang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `quang_cao`
--
ALTER TABLE `quang_cao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT cho bảng `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `thong_tin_quan_tri`
--
ALTER TABLE `thong_tin_quan_tri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
