-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-07-10 03:55:58
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `resume`
--

-- --------------------------------------------------------

--
-- 資料表結構 `re_info_poma`
--

CREATE TABLE `re_info_poma` (
  `id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `re_info_poma`
--

INSERT INTO `re_info_poma` (`id`, `text`) VALUES
('info_about', 'ABCorem ipsum dolor sit amet consectetur adipisicing elit. Enim ratione sapiente a accusamus perspiciatis praesentium corporis expedita dolor quasi.'),
('info_city', 'Mel'),
('info_name', 'Ya Chiao'),
('info_title', 'hahahahaha'),
('pomain_1', 'Lorem ipsum consectetur.'),
('pomain_2', 'ohohohoholalalalalal'),
('pomain_3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim ratione sapiente a accusamus perspiciatis praesentium corporis expedita dolor quasi fugit.');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `re_info_poma`
--
ALTER TABLE `re_info_poma`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
