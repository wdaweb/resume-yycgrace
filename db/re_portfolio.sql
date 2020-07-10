-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-07-10 03:56:02
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
-- 資料表結構 `re_portfolio`
--

CREATE TABLE `re_portfolio` (
  `id` int(11) NOT NULL,
  `type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderby` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `re_portfolio`
--

INSERT INTO `re_portfolio` (`id`, `type`, `title`, `url`, `pic`, `text`, `orderby`) VALUES
(1, '作品1', '萬年曆', 'htp.com', 'dd11.jpg', '練習php bootstrap的迴圈jfdkjowiejkajwlekjfieujfrlgkdfj.kwp;oejrfij', 0),
(2, '作品2', '發票', 'htp.com', 'jdjpokas;lkf.png', '資料庫前後台串接fdkjowiejkajwlekjfieujfrlgkdfj.kwp;oejrfij', 2),
(3, '作品3', 'JS闖關遊戲', 'gjihtp.com', '45798652.jpg', '用JQ UI自訂對話框功能fdkjowiejkajwlekjfieujfrlgkdfj.kwp;oejrfij', 3);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `re_portfolio`
--
ALTER TABLE `re_portfolio`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `re_portfolio`
--
ALTER TABLE `re_portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
