-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 04, 2019 lúc 02:47 AM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thuvien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dkmuonsach`
--

CREATE TABLE `dkmuonsach` (
  `id_user` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL,
  `ngaydkmuon` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dkmuonsach`
--

INSERT INTO `dkmuonsach` (`id_user`, `username`, `email`, `id`, `ngaydkmuon`) VALUES
('', 'giang', 'giangzin99@gmail.com', 10, '0000-00-00'),
('', 'giang', 'giangzin99@gmail.com', 2, '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ploaigt`
--

CREATE TABLE `ploaigt` (
  `pl_id` int(3) NOT NULL,
  `phanloai` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ploaigt`
--

INSERT INTO `ploaigt` (`pl_id`, `phanloai`) VALUES
(1, 'giÃ¡o trÃ¬nh'),
(4, 'TL Tham Kháº£o');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach`
--

CREATE TABLE `sach` (
  `id` int(10) NOT NULL,
  `tensach` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tacgia` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `nhaxb` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pl_id` int(3) NOT NULL,
  `mota` longtext COLLATE utf8_unicode_ci NOT NULL,
  `namxb` int(4) NOT NULL,
  `sl` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sach`
--

INSERT INTO `sach` (`id`, `tensach`, `hinhanh`, `tacgia`, `nhaxb`, `pl_id`, `mota`, `namxb`, `sl`) VALUES
(4, 'Kiá»ƒm soÃ¡t cháº¥t lÆ°á»£ng khÃ´ng khÃ­ bÃªn trong cÃ´ng trÃ¬nh', 'kiem-soat-chatthumb.jpg', ' HoÃ ng XuÃ¢n ThÃ nh, HoÃ ng LÃª Long ', 'BÃ¡ch khoa HÃ  Ná»™i ', 4, 'ISBN: 9786048224721 Cuá»‘n sÃ¡ch cung cáº¥p cÃ¡c kiáº¿n thá»©c cÆ¡ báº£n vá» cÃ¡c cháº¥t Ã´ nhiá»…m khÃ´ng khÃ­, cÃ¡c nguá»“n phÃ¡t tháº£i cá»§a cÃ¡c cháº¥t Ã´ nhiá»…m khÃ´ng khÃ­, cÃ¡c áº£nh hÆ°á»Ÿng sá»©c khá»e do phÆ¡i nhiá»…m vá»›i cÃ¡c cháº¥t Ã´ nhiá»…m khÃ´ng khÃ­, cÃ¡c phÆ°Æ¡ng phÃ¡p kháº£o sÃ¡t vÃ  Ä‘Ã¡nh giÃ¡ cháº¥t lÆ°á»£ng khÃ´ng khÃ­, cÅ©ng nhÆ° cÃ¡c giáº£i phÃ¡p kiá»ƒm soÃ¡t vÃ  ngÄƒn ngá»«a Ã´ nhiá»…m khÃ´ng khÃ­ bÃªn trong cÃ´ng trÃ¬nh dÃ¢n dá»¥ng vÃ  cÃ´ng trÃ¬nh cÃ´ng cá»™ng nhÆ° nhÃ  á»Ÿ, trung tÃ¢m thÆ°Æ¡ng máº¡i, vÄƒn phÃ²ng, khÃ¡ch sáº¡n, trÆ°á»ng há»c, bá»‡nh viá»‡nâ€¦ Cuá»‘n sÃ¡ch cÃ³ thá»ƒ sá»­ dá»¥ng lÃ m tÃ i liá»‡u tham kháº£o há»c táº­p Ä‘á»‘i vá»›i sinh viÃªn, há»c viÃªn cao há»c cÃ¡c ngÃ nh vÃ  chuyÃªn ngÃ nh cÃ³ liÃªn quan nhÆ° Ká»¹ thuáº­t MÃ´i trÆ°á»ng vÃ  ÄÃ´ thá»‹, Há»‡ thá»‘ng Ká»¹ thuáº­t trong cÃ´ng trÃ¬nh MÃ´i trÆ°á»ng vÃ  ÄÃ´ thá»‹ bá»n vá»¯ng, Quáº£n lÃ½ MÃ´i trÆ°á»ng, Ká»¹ thuáº­t CÆ¡ sá»Ÿ Háº¡ táº§ngâ€¦. cá»§a Äáº¡i há»c XÃ¢y dá»±ng vÃ  cÃ¡c trÆ°á»ng Ä‘áº¡i há»c khÃ¡c. SÃ¡ch Ä‘Æ°á»£c phá»¥c vá»¥ táº¡i phÃ²ng TÃ i liá»‡u tham kháº£o (táº§ng 3) â€“ ThÆ° viá»‡n ÄHTL (cÆ¡ sá»Ÿ HÃ  Ná»™i 175 TÃ¢y SÆ¡n), KÃ­ hiá»‡u xáº¿p sÃ¡ch trÃªn giÃ¡: 696 NG-L 2018 (TK/022180 â€“ TK/022182) Tá»« khÃ³a: Cháº¥t lÆ°á»£ng, CÃ´ng trÃ¬nh, MÃ´i trÆ°á»ng khÃ´ng khÃ­ >>>>', 2018, 200),
(6, 'BÃ i giáº£ng tÆ° tÆ°á»Ÿng Há»“ ChÃ­ Minh', 'bg-tu-tuong-hcmthumb.jpg', 'Tráº§n Thá»‹ Ngá»c ThÃºy (chá»§ biÃªn)...[vÃ  nhá»¯ng ngÆ°á»i khÃ¡c] ', 'BÃ¡ch khoa HÃ  Ná»™i ', 1, 'SBN: 9786049506109 Cuá»‘n sÃ¡ch cung cáº¥p cÃ¡c thÃ´ng tin cÆ¡ báº£n vá»: Äá»‘i tÆ°á»£ng, phÆ°Æ¡ng phÃ¡p nghiÃªn cá»©u vÃ  Ã½ nghÄ©a há»c táº­p mÃ´n tÆ° tÆ°á»Ÿng Há»“ ChÃ­ Minh; CÆ¡ sá»Ÿ, quÃ¡ trÃ¬nh hÃ¬nh thÃ nh vÃ  phÃ¡t triá»ƒn tÆ° tÆ°á»Ÿng HCM; TÆ° tÆ°á»Ÿng HCM vá» Ä‘á»™c láº­p dÃ¢n tá»™c vÃ  chá»§ nghÄ©a XH. TÆ° tÆ°á»Ÿng HCM vá» Äáº£ng CS Viá»‡t Nam; TÆ° tÆ°á»Ÿng HCM vá» nhÃ  nÆ°á»›c Viá»‡t Nam; TÆ° tÆ°á»Ÿng HCM vá» Ä‘áº¡i Ä‘oÃ n káº¿t dÃ¢n tá»™c vÃ  Ä‘oÃ n káº¿t quá»‘c táº¿; TÆ° tÆ°á»Ÿng HCM vá» vÄƒn hÃ³a, Ä‘áº¡o Ä‘á»©c, con ngÆ°á»i. SÃ¡ch Ä‘Æ°á»£c phá»¥c vá»¥ táº¡i phÃ²ng GiÃ¡o trÃ¬nh (Táº§ng 1) vÃ  phÃ²ng TÃ i liá»‡u tham kháº£o (táº§ng 3) â€“ ThÆ° viá»‡n ÄHTL (cÆ¡ sá»Ÿ HÃ  Ná»™i 175 TÃ¢y SÆ¡n), KÃ­ hiá»‡u xáº¿p sÃ¡ch trÃªn giÃ¡: 335.4346 BAI 2018 (GT/309751 â€“ GT/311050), 335.4346 BAI 2018 (TK/022183 - TK/022187) Tá»« khÃ³a: TÆ° tÆ°á»Ÿng Há»“ ChÃ­ Minh; Há»“ ChÃ­ Minh; Äáº£ng Cá»™ng Sáº£n Viá»‡t Nam Báº¡n Ä‘á»c tra cá»©u tÃ i liá»‡u qua Ä‘á»‹a chá»‰ sau: >>', 2018, 200),
(7, 'GiÃ¡o trÃ¬nh nguyÃªn lÃ­ káº¿ toÃ¡n', 'nguyen-ly-ke-toanthumb.jpg', 'NghiÃªm VÄƒn Lá»£i (chá»§ biÃªn)...[vÃ  nhá»¯ng ngÆ°á»i khÃ¡c]', 'TÃ i chÃ­nh ', 4, 'SBN: 9786047918812 Cuá»‘n sÃ¡ch Ä‘á» cáº­p Ä‘áº¿n: Káº¿ toÃ¡n, thÃ´ng tin Ä‘á»ƒ ra quyáº¿t Ä‘á»‹nh; Äá»‘i tÆ°á»£ng káº¿ toÃ¡n; Chá»©ng tá»« káº¿ toÃ¡n; Äo lÆ°á»ng vÃ  tÃ­nh giÃ¡; Ghi nháº­n cÃ¡c nghiá»‡p vá»¥ kinh táº¿; BÃ¡o cÃ¡o káº¿ toÃ¡n; Káº¿ toÃ¡n cÃ¡c hoáº¡t Ä‘á»™ng kinh doanh chá»§ yáº¿u; Sá»• káº¿ toÃ¡n vÃ  hÃ¬nh thá»©c káº¿ toÃ¡n; Tá»• chá»©c káº¿ toÃ¡n. SÃ¡ch Ä‘Æ°á»£c phá»¥c vá»¥ táº¡i phÃ²ng TÃ i liá»‡u tham kháº£o (táº§ng 3) â€“ ThÆ° viá»‡n ÄHTL (cÆ¡ sá»Ÿ HÃ  Ná»™i 175 TÃ¢y SÆ¡n). KÃ­ hiá»‡u xáº¿p sÃ¡ch trÃªn giÃ¡: 657 GIA 2018 (TK/019881 - TK/019885) Tá»« khÃ³a: Káº¿ toÃ¡n; NguyÃªn lÃ½', 2018, 200),
(8, 'Há»‡ thá»‘ng thÃ´ng tin Ä‘á»‹a lÃ½', 'he-thong-ttthumb.jpg', 'HoÃ ng XuÃ¢n ThÃ nh, HoÃ ng LÃª Long', 'BÃ¡ch khoa HÃ  Ná»™i ', 1, 'ISBN: 9786049505348 Cuá»‘n sÃ¡ch trÃ¬nh bÃ y tá»•ng quan vá» há»‡ thá»‘ng thÃ´ng tin Ä‘á»‹a lÃ½ (GIS). KhÃ¡i niá»‡m vá» báº£n Ä‘á»“, phÃ©p chiáº¿u vÃ  há»‡ tá»a Ä‘á»™.CÃ¡c thÃ nh pháº§n vÃ  chá»©c nÄƒng cá»§a GIS. XÃ¢y dá»±ng vÃ  tá»• chá»©c cÆ¡ sá»Ÿ dá»¯ liá»‡u trong GIS. CÃ¡c kháº£ nÄƒng phÃ¢n tÃ­ch cá»§a GIS. MÃ´ hÃ¬nh sá»‘ Ä‘á»™ cao DEM (Digital elevation model) vÃ  á»©ng dá»¥ng DEM trong GIS. Tá»•ng quan vá» cÃ´ng nghá»‡ WEB - GIS. á»¨ng dá»¥ng cá»§a há»‡ thá»‘ng thÃ´ng tin Ä‘á»‹a lÃ½. SÃ¡ch Ä‘Æ°á»£c phá»¥c vá»¥ táº¡i phÃ²ng GiÃ¡o trÃ¬nh (Táº§ng 1) vÃ  phÃ²ng TÃ i liá»‡u tham kháº£o (táº§ng 3) â€“ ThÆ° viá»‡n ÄHTL (cÆ¡ sá»Ÿ HÃ  Ná»™i 175 TÃ¢y SÆ¡n). KÃ­ hiá»‡u xáº¿p sÃ¡ch trÃªn giÃ¡: 526.3 HO-T 2018 (GT/307413 - GT/307462), 526.3 HO-T 2018 (TK/019863 - TK/019867) Tá»« khÃ³a: ThÃ´ng tin Ä‘á»‹a lÃ½; Há»‡ thá»‘ng; Báº£n Ä‘á»“; Tráº¯c Ä‘á»‹a >', 2018, 200),
(9, 'Kiá»ƒm soÃ¡t cháº¥t lÆ°á»£ng khÃ´ng khÃ­ bÃªn trong cÃ´ng trÃ¬nh', 'kiem-soat-chatthumb.jpg', ' HoÃ ng XuÃ¢n ThÃ nh, HoÃ ng LÃª Long ', 'BÃ¡ch khoa HÃ  Ná»™i ', 4, 'ISBN: 9786048224721 Cuá»‘n sÃ¡ch cung cáº¥p cÃ¡c kiáº¿n thá»©c cÆ¡ báº£n vá» cÃ¡c cháº¥t Ã´ nhiá»…m khÃ´ng khÃ­, cÃ¡c nguá»“n phÃ¡t tháº£i cá»§a cÃ¡c cháº¥t Ã´ nhiá»…m khÃ´ng khÃ­, cÃ¡c áº£nh hÆ°á»Ÿng sá»©c khá»e do phÆ¡i nhiá»…m vá»›i cÃ¡c cháº¥t Ã´ nhiá»…m khÃ´ng khÃ­, cÃ¡c phÆ°Æ¡ng phÃ¡p kháº£o sÃ¡t vÃ  Ä‘Ã¡nh giÃ¡ cháº¥t lÆ°á»£ng khÃ´ng khÃ­, cÅ©ng nhÆ° cÃ¡c giáº£i phÃ¡p kiá»ƒm soÃ¡t vÃ  ngÄƒn ngá»«a Ã´ nhiá»…m khÃ´ng khÃ­ bÃªn trong cÃ´ng trÃ¬nh dÃ¢n dá»¥ng vÃ  cÃ´ng trÃ¬nh cÃ´ng cá»™ng nhÆ° nhÃ  á»Ÿ, trung tÃ¢m thÆ°Æ¡ng máº¡i, vÄƒn phÃ²ng, khÃ¡ch sáº¡n, trÆ°á»ng há»c, bá»‡nh viá»‡nâ€¦ Cuá»‘n sÃ¡ch cÃ³ thá»ƒ sá»­ dá»¥ng lÃ m tÃ i liá»‡u tham kháº£o há»c táº­p Ä‘á»‘i vá»›i sinh viÃªn, há»c viÃªn cao há»c cÃ¡c ngÃ nh vÃ  chuyÃªn ngÃ nh cÃ³ liÃªn quan nhÆ° Ká»¹ thuáº­t MÃ´i trÆ°á»ng vÃ  ÄÃ´ thá»‹, Há»‡ thá»‘ng Ká»¹ thuáº­t trong cÃ´ng trÃ¬nh MÃ´i trÆ°á»ng vÃ  ÄÃ´ thá»‹ bá»n vá»¯ng, Quáº£n lÃ½ MÃ´i trÆ°á»ng, Ká»¹ thuáº­t CÆ¡ sá»Ÿ Háº¡ táº§ngâ€¦. cá»§a Äáº¡i há»c XÃ¢y dá»±ng vÃ  cÃ¡c trÆ°á»ng Ä‘áº¡i há»c khÃ¡c. SÃ¡ch Ä‘Æ°á»£c phá»¥c vá»¥ táº¡i phÃ²ng TÃ i liá»‡u tham kháº£o (táº§ng 3) â€“ ThÆ° viá»‡n ÄHTL (cÆ¡ sá»Ÿ HÃ  Ná»™i 175 TÃ¢y SÆ¡n), KÃ­ hiá»‡u xáº¿p sÃ¡ch trÃªn giÃ¡: 696 NG-L 2018 (TK/022180 â€“ TK/022182) Tá»« khÃ³a: Cháº¥t lÆ°á»£ng, CÃ´ng trÃ¬nh, MÃ´i trÆ°á»ng khÃ´ng khÃ­ ', 2018, 200),
(10, 'CÆ¡ sá»Ÿ dá»¯ liá»‡u', 'co-so-du-lieuthumb.jpg', 'Äáº·ng Thá»‹ Thu Hiá»n ', 'Äáº¡i há»c giao thÃ´ng váº­n táº£i', 1, 'Cuá»‘n sÃ¡ch trÃ¬nh bÃ y cÃ¡c khÃ¡i niá»‡m cÆ¡ báº£n vá» cÆ¡ sá»Ÿ dá»¯ liá»‡u; mÃ´ hÃ¬nh cÆ¡ sá»Ÿ dá»¯ liá»‡u quan há»‡; rÃ ng buá»™c toÃ n váº¹n, phá»¥ thuá»™c hÃ m vÃ  khoÃ¡; dáº¡ng chuáº©n, chuáº©n hoÃ¡ vÃ  tá»‘i Æ°u hoÃ¡ cÃ¢u há»i. TÃ i liá»‡u Ä‘Æ°á»£c phá»¥c vá»¥ táº¡i phÃ²ng GiÃ¡o trÃ¬nh (Táº§ng 1) vÃ  phÃ²ng TÃ i liá»‡u tham kháº£o (Táº§ng 3) â€“ ThÆ° viá»‡n ÄHTL (cÆ¡ sá»Ÿ HÃ  Ná»™i 175 TÃ¢y SÆ¡n). KÃ­ hiá»‡u xáº¿p sÃ¡ch trÃªn giÃ¡: 005.7 DA-H (GT/304729 - GT/305108), 005.7 DA-H (TK/019598 - TK/019602) Tá»« khÃ³a: CÆ¡ sá»Ÿ dá»¯ liá»‡u; ', 2013, 200),
(11, 'CÆ¡ sá»Ÿ cÃ´ng nghá»‡ pháº§n má»m', 'co-so-cn-phan-memthumb.jpg', '	LÆ°Æ¡ng Máº¡nh BÃ¡ (chá»§ biÃªn), LÆ°Æ¡ng Thanh BÃ¬nh, Cao Tuáº¥n DÅ©ng, Nguyá»…n Thá»‹ Thu Trang, LÃª Äá»©c Trung', 'Khoa há»c vÃ  ká»¹ thuáº­t', 1, 'ISBN: 9786046710554 Cuá»‘n sÃ¡ch cung cáº¥p nhá»¯ng kiáº¿n thá»©c cÆ¡ báº£n vá» cÃ´ng nghá»‡ pháº§n má»m: CÃ¡c khÃ¡i niá»‡m, qui trÃ¬nh vÃ  cÃ¡c mÃ´ hÃ¬nh cháº¿ tÃ¡c pháº§n má»m theo vÃ²ng Ä‘á»i phÃ¡t triá»ƒn pháº§n má»m. TÃ i liá»‡u Ä‘Æ°á»£c phá»¥c vá»¥ táº¡i phÃ²ng GiÃ¡o trÃ¬nh (Táº§ng 1) vÃ  phÃ²ng TÃ i liá»‡u tham kháº£o (Táº§ng 3) â€“ ThÆ° viá»‡n ÄHTL (cÆ¡ sá»Ÿ HÃ  Ná»™i 175 TÃ¢y SÆ¡n). KÃ­ hiá»‡u xáº¿p sÃ¡ch trÃªn giÃ¡: 005.3 COS (GT/304329 - GT/304728), 005.3 COS (TK/019588 - TK/019592) Tá»« khÃ³a: CÃ´ng nghá»‡ pháº§n má»m; CÃ´ng nghá»‡ thÃ´ng tin; Tin há»c Äá»™c giáº£ ', 2018, 200);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloaitruyen`
--

CREATE TABLE `theloaitruyen` (
  `id_TL` int(5) NOT NULL,
  `TenTL` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theloaitruyen`
--

INSERT INTO `theloaitruyen` (`id_TL`, `TenTL`) VALUES
(2, 'truyá»‡n kiáº¿m hiá»‡p'),
(3, 'truyá»‡n nÆ°á»›c ngoÃ i');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `truyen`
--

CREATE TABLE `truyen` (
  `id` int(5) NOT NULL,
  `tentruyen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tacgia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nhaxb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_TL` int(5) NOT NULL,
  `mota` text COLLATE utf8_unicode_ci NOT NULL,
  `namxb` int(4) NOT NULL,
  `sl` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `truyen`
--

INSERT INTO `truyen` (`id`, `tentruyen`, `hinhanh`, `tacgia`, `nhaxb`, `id_TL`, `mota`, `namxb`, `sl`) VALUES
(2, 'Äi tÃ¬m thá»i gian Ä‘Ã£ máº¥t', 'img_11.jpg', 'Marcel Proust', 'ko cÃ³', 3, 'Äi tÃ¬m thá»i gian Ä‘Ã£ máº¥t lÃ  tiá»ƒu thuyáº¿t cÃ³ dáº¥u áº¥n tá»± truyá»‡n vá»›i nhÃ¢n váº­t chÃ­nh lÃ  ngÆ°á»i ká»ƒ chuyá»‡n á»Ÿ ngÃ´i thá»© nháº¥t xÆ°ng \"tÃ´i\". NhÃ¢n váº­t \"tÃ´i\" ká»ƒ chuyá»‡n mÃ¬nh tá»« ngÃ y cÃ²n nhá», vá»›i nhá»¯ng Æ°á»›c mÆ¡, dáº±n váº·t, má»‘i tÃ¬nh vá»›i Gilberte - con gÃ¡i cá»§a Swann; vá»›i Albertine - má»™t trong \"nhá»¯ng cÃ´ gÃ¡i tuá»•i hoa\", má»‘i tÃ¬nh thÆ¡ má»™ng vÃ  Ä‘au xÃ³t lÃ m cho nhÃ¢n váº­t quáº±n quáº¡i. CÃ²n cÃ³ nhá»¯ng thiÃªn Ä‘Æ°á»ng tuá»•i áº¥u thÆ¡; má»™t xÃ£ há»™i thÆ°á»£ng lÆ°u giáº£ dá»‘i, nháº¡t nháº½o; Albertine sá»‘ng bÃªn cáº¡nh Marcel nhÆ° má»™t \"ná»¯ tÃ¹ nhÃ¢n\", rá»“i cháº¿t má»™t cÃ¡ch tháº£m thÆ°Æ¡ng. Cuá»‘i cÃ¹ng \"thá»i gian láº¡i tÃ¬m tháº¥y\", cÃ³ nghÄ©a lÃ  ngÆ°á»i ká»ƒ chuyá»‡n tÃ¬m ra láº½ sá»‘ng cá»§a mÃ¬nh lÃ  cá»‘ng hiáº¿n cuá»™c Ä‘á»i cho nghá»‡ thuáº­t. Táº¥t cáº£ nhá»¯ng hoáº¡t Ä‘á»™ng xÃ£ há»™i chá»‰ lÃ  \"thá»i gian Ä‘Ã£ máº¥t\" vÃ  ngÆ°á»i ká»ƒ chuyá»‡n biáº¿n cÃ¡i thá»i gian Ä‘Ã£ máº¥t áº¥y thÃ nh má»™t hÃ nh Ä‘á»™ng sÃ¡ng táº¡o nghá»‡ thuáº­t.', 2018, 200),
(3, 'Hoa thiÃªn cá»‘t', 'hoa-thien-cot.jpg', 'Fresh Quáº£ Quáº£ ', 'ko cÃ³', 2, 'ko cÃ³', 2018, 200),
(4, 'Bá»‘ giÃ ', 'img_11.gif', 'Mario Pozu', 'ko cÃ³', 3, 'ddÄ‘', 2018, 200),
(5, 'Tru TiÃªn', 'tru-tien.jpg', 'Tiá»ƒu Ä‘á»‰nh', 'ko cÃ³', 2, 'Tru TiÃªn lÃ  tiá»ƒu thuyáº¿t giáº£ tÆ°á»Ÿng tháº§n tiÃªn kiáº¿m hiá»‡p do ngÃ²i bÃºt sáº¯c bÃ©n má»›i ná»•i lÃ  TiÃªu Äá»‰nh trá»© tÃ¡c. Tá»« khi xuáº¥t hiá»‡n vÃ o nÄƒm 2003, Tru TiÃªn Ä‘Ã£ gÃ¢y má»™t lÃ n sÃ³ng lá»›n trong vÄƒn há»c Trung Quá»‘c, cÃ¹ng vá»›i \"PhiÃªu Diá»ƒu Chi Lá»¯\", \"Tiá»ƒu Binh Truyá»n Ká»³\" tá» danh \"Tam Ä‘áº¡i ká»³ thÆ° Internet\", tháº­m chÃ­ Ä‘Æ°á»£c xáº¿p vÃ o hÃ ng nhá»¯ng tÃ¡c pháº©m kinh Ä‘iá»ƒn, sÃ¡nh ngang vá»›i cÃ¡c tiá»ƒu thuyáº¿t cá»§a Kim Dung, Cá»• Long, vÃ  HoÃ n ChÃ¢u LÃ¢u Chá»§.', 2018, 200);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(100) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` int(1) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `ngaysinh`, `gioitinh`, `level`) VALUES
(1, 'admin', 'quynhlt620@wru.vn', 'a80a1c4eb14335ac6006c27cf45b507c', '1998-06-10', 2, 2),
(2, 'giang', 'giangzin99@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1999-12-29', 2, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ploaigt`
--
ALTER TABLE `ploaigt`
  ADD PRIMARY KEY (`pl_id`);

--
-- Chỉ mục cho bảng `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kn` (`pl_id`);

--
-- Chỉ mục cho bảng `theloaitruyen`
--
ALTER TABLE `theloaitruyen`
  ADD PRIMARY KEY (`id_TL`);

--
-- Chỉ mục cho bảng `truyen`
--
ALTER TABLE `truyen`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ploaigt`
--
ALTER TABLE `ploaigt`
  MODIFY `pl_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `sach`
--
ALTER TABLE `sach`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `theloaitruyen`
--
ALTER TABLE `theloaitruyen`
  MODIFY `id_TL` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `truyen`
--
ALTER TABLE `truyen`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sach`
--
ALTER TABLE `sach`
  ADD CONSTRAINT `kn` FOREIGN KEY (`pl_id`) REFERENCES `ploaigt` (`pl_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
