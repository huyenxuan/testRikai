-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 17, 2024 lúc 09:32 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_testrikai`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_post`
--

CREATE TABLE `tbl_post` (
  `post_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `pushlished_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_post`
--

INSERT INTO `tbl_post` (`post_id`, `title`, `content`, `pushlished_at`) VALUES
(2, 'Con gái Phương Oanh chiếm hết spotlight của mẹ', 'Cô bé Nhật Hạ - con gái Phương Oanh được dự đoán sẽ trở thành mỹ nhân tương lai, xinh đẹp không kém mẹ.\r\nMới đây, một người bạn đã chia sẻ hình ảnh chụp cùng Phương Oanh và con gái Jenny (tên thật Nhật Hạ) tại một quán cà phê. Có thể thấy, 5 tháng sau khi sinh em bé, Phương Oanh gần như đã lấy lại vóc dáng.\r\n\r\nTrong khi đó, con gái cô - bé Jenny 5 tháng tuổi ngày càng cứng cáp, bụ bẫm, xinh xắn, giật hết spotlight của mẹ. \r\n\r\nNgười bạn viết: \"3 gái đẹp ngồi chung. Nhưng đôi môi với độ xinh của em Nhật Hạ làm lu mờ 2 mẹ luôn.\"', '2024-10-17 11:37:24'),
(3, 'Nhóm \"Chủ nhật yêu thương\" với những thư viện ở bản xa', 'VOV.VN - Cho đến nay, nhóm \"Chủ nhật yêu thương\" đã tặng trên 1 triệu quyển sách các loại đến các bản xa. Hàng nghìn thành viên, với tấm lòng nhiệt huyết, đã mang đến tri thức cho các em nhỏ hiếu học trên khắp mọi miền đất nước.', '2024-10-17 11:40:25');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
