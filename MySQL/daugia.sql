-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 11, 2021 lúc 05:37 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `daugia`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `Id` int(11) NOT NULL,
  `Nguoidang` varchar(50) DEFAULT NULL,
  `Sdt` varchar(50) DEFAULT NULL,
  `Tensp` varchar(500) DEFAULT NULL,
  `Giakhoidiem` int(11) DEFAULT NULL,
  `Giahientai` int(11) DEFAULT NULL,
  `Mota` varchar(500) DEFAULT NULL,
  `Hinhanh` varchar(500) DEFAULT NULL,
  `deleted` int(11) NOT NULL DEFAULT 1,
  `Tinhtrang` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`Id`, `Nguoidang`, `Sdt`, `Tensp`, `Giakhoidiem`, `Giahientai`, `Mota`, `Hinhanh`, `deleted`, `Tinhtrang`) VALUES
(1, 'Nguyễn Văn Hòa', '+8401682431874', 'Áo dài', 123000, 123000, 'Áo dài gồm có thân áo và quần ống rộng. Thân áo được tính từ phần cổ xuống eo, từ eo thân áo được xẻ làm hai tà, vị trí xẻ ở ngang hông. ... Quần áo dài là quần ống rộng, may chấm gót chân, có thể cùng màu hoặc khác màu so với áo, nếu khác màu thì thường là quần trắng làm bằng lụa sa tanh, phi bóng', 'do_co_1.jpg', 1, 1),
(2, 'Nguyễn Huy Hoàng', '+8401664137795', 'Tứ sửu mẫu', 123123, 123123, 'Bộ ấm trà in logo Đại hội Đảng sẽ là món quà ghi lại dấu ấn đẹp cho kỳ đại hội.\r\nBộ ấm chén in logo có nhiều phân khúc giá, nhiều mẫu mã dễ dàng lựa chọn.\r\nBộ ấm chén Bát Tràng nổi tiếng trong và ngoài nước giá chỉ từ 99.000đ.\r\nBộ ấm chén Bát Tràng chất lượng vượt trội, độ bền cao, không chì, không độc an toàn cho người sử dụng.\r\nBộ ấm trà Bát Tràng phù hợp với mọi ngân sách từ thấp cấp đến cao cấp đều phù hợp.\r\nIn chữ lên ấm chén hay in thương hiệu lên ấm chén ngày càng được các công ty lựa chọ', 'doco3.jpg', 1, 1),
(3, 'Nguyễn Đình Khánh', '+840779244118', 'Dạ khúc', 3000000, 3000000, 'Cho dù váy cưới đuôi cá quyến rũ đang làm mưa làm gió trong các cửa hàng áo cưới gần đây, nhưng do nhược điểm là khá kén người mặc nên những chiếc váy chữ A vẫn luôn tạo nên sức thu hút riêng. Không những phù hợp với mọi vóc dáng cô dâu mà còn cực kỳ duyên dáng và thanh lịch. Với thiết kế đơn giản, tinh tế mà sang trọng, những kiểu váy chữ A mà Wedding Bridal Tips sắp bật mí dưới đây sẽ đưa ra nhiều gợi ý cho cô dâu sắp sửa lên xe hoa về nhà chồng lộng lẫy, tỏa sáng nhất.', 'do_co_2.jpg', 1, 1),
(4, 'Nguyễn Huy Hoàng', '+840113465467', 'Ruby đỏ', 13000000, 13000000, 'Hồng ngọc (tiếng Đức: Rubin, tiếng Anh: Ruby), là một loại đá quý thuộc về loại khoáng chất corundum. Chỉ có những corundum màu đỏ mới được gọi là hồng ngọc, các loại corundum khác được gọi là xa-phia. Màu đỏ của hồng ngọc là do thành phần nhỏ của nguyên tố crôm lẫn trong ngọc tạo nên. Hồng ngọc có tên tiếng Anh là ruby, xuất phát từ ruber trong tiếng La tinh có nghĩa là \"màu đỏ\". Hồng ngọc trong tự nhiên rất hiếm, các loại hồng ngọc được sản xuất nhân tạo tương đối rẻ hơn.', 'daquy.jpg', 0, 1),
(5, 'Khánh', '+840779244118', 'Đá kim cương', 1000000, 1200000, 'Hồng ngọc (tiếng Đức: Rubin, tiếng Anh: Ruby), là một loại đá quý thuộc về loại khoáng chất corundum. Chỉ có những corundum màu đỏ mới được gọi là hồng ngọc, các loại corundum khác được gọi là xa-phia. Màu đỏ của hồng ngọc là do thành phần nhỏ của nguyên tố crôm lẫn trong ngọc tạo nên. Hồng ngọc có tên tiếng Anh là ruby, xuất phát từ ruber trong tiếng La tinh có nghĩa là \"màu đỏ\". Hồng ngọc trong tự nhiên rất hiếm, các loại hồng ngọc được sản xuất nhân tạo tương đối rẻ hơn.', 'daquy2.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `Taikhoan` varchar(50) NOT NULL,
  `Matkhau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`Taikhoan`, `Matkhau`) VALUES
('gamezota1', '884ecc7ac05cb5d52aa970f523a3b7e6'),
('gamezota123', '884ecc7ac05cb5d52aa970f523a3b7e6');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Taikhoan`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
