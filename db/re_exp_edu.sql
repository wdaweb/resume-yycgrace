-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-07-10 03:55:53
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
-- 資料表結構 `re_exp_edu`
--

CREATE TABLE `re_exp_edu` (
  `id` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'name',
  `type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'exp or edu',
  `year` year(4) NOT NULL,
  `period` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `re_exp_edu`
--

INSERT INTO `re_exp_edu` (`id`, `type`, `year`, `period`, `title`, `event`) VALUES
('室內設計', 'exp', 2016, '2016/6-2017/2', '設計助理', '工務/圖面繪製'),
('新港藝術高中', 'edu', 2010, '2007-2010', '_', 'event1<br>event2<br>event3'),
('東海大學', 'edu', 2016, '2010-2015', '景觀學系學士', 'event1<br>event2'),
('設計工作室', 'exp', 2019, '2019/4-2019/10', '企劃', '報告書撰寫/企劃活動');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `re_exp_edu`
--
ALTER TABLE `re_exp_edu`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
