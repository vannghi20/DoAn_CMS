-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 07, 2021 lúc 09:24 AM
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
-- Cơ sở dữ liệu: `app_web1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banks`
--

CREATE TABLE `banks` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cost` float NOT NULL,
  `version` double(5,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banks`
--

INSERT INTO `banks` (`id`, `user_id`, `cost`, `version`) VALUES
(1, 1, 11, 0.0),
(2, 1, 11, 0.0),
(3, 2, 11, 0.0),
(4, 3, 11, 0.0),
(5, 4, 110, 0.0),
(6, 5, 11, 0.0),
(7, 4, 20, 0.0),
(8, 7, 200, 0.0),
(9, 6, 50, 0.0),
(10, 8, 5, 0.0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `version` double(5,1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `fullname`, `email`, `type`, `password`, `version`) VALUES
(1, 'nhan', 'Trung Nhân', 'nhan@gmail.com', 'user', '0cc175b9c0f1b6a831c399e269772661', 0.1),
(2, 'Chien', 'Ngọc Chiến', 'chien@gmail,com', 'user', '0cc175b9c0f1b6a831c399e269772661', 0.1),
(3, 'Bảo', 'Quốc Bảo', 'bao@gmail.com', 'user', '0cc175b9c0f1b6a831c399e269772661', 0.1),
(4, 'Tram', 'Mai Trâm', 'tram@gmail.com', 'user', 'd41d8cd98f00b204e9800998ecf8427e', 0.2),
(5, 'Huynh', 'Mai Xuân Huynh', 'huynh@gmail.com', 'user', '0cc175b9c0f1b6a831c399e269772661', 0.1),
(6, 'Nghi', 'VÕ VĂN NGHỊ', 'clubtrailang@gmail.com', 'admin', '0cc175b9c0f1b6a831c399e269772661', 0.0),
(7, 'A', 'Nguyễn Văn A', 'cfngaba@gmail.com', 'user', '0cc175b9c0f1b6a831c399e269772661', 0.0),
(8, 'B', 'Trần B', 'b@gmail.com', 'guest', '0cc175b9c0f1b6a831c399e269772661', 0.0),
(9, 'C', 'Phan C', 'c@gmail.com', 'guest', '0cc175b9c0f1b6a831c399e269772661', 0.0),
(10, 'D', 'Bùi D', 'd@gmail.com', 'guest', '0cc175b9c0f1b6a831c399e269772661', 0.0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banks`
--
ALTER TABLE `banks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
