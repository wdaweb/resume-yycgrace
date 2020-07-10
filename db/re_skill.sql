-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-07-10 03:56:05
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
-- 資料表結構 `re_skill`
--

CREATE TABLE `re_skill` (
  `id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'name',
  `type` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'skill or expertize',
  `url` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderby` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `re_skill`
--

INSERT INTO `re_skill` (`id`, `type`, `url`, `pic`, `orderby`) VALUES
('css', 'ski', '', '', 1),
('html', 'ski', '', '', 2),
('javascript', 'ski', '', '', 3),
('php', 'ski', '', '', 0);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `re_skill`
--
ALTER TABLE `re_skill`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
