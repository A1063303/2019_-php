-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2019-06-23 02:35:34
-- 伺服器版本: 5.7.17-log
-- PHP 版本： 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `project`
--

-- --------------------------------------------------------

--
-- 資料表結構 `comment1`
--

CREATE TABLE `comment1` (
  `NO1` int(100) NOT NULL,
  `NO` int(100) NOT NULL,
  `id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `comment` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `comment1`
--

INSERT INTO `comment1` (`NO1`, `NO`, `id`, `comment`, `time`) VALUES
(13, 16, 'a1063320', '123\r\n	', '2019/06/12 16:19'),
(14, 22, 'a1063320', 'test\r\n	', '2019/06/12 23:12'),
(19, 28, 'a1063320', '1234\r\n	', '2019/06/13 10:30'),
(20, 30, 'a1063320', '11\r\n	', '2019/06/13 10:31');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `comment1`
--
ALTER TABLE `comment1`
  ADD PRIMARY KEY (`NO`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `comment1`
--
ALTER TABLE `comment1`
  MODIFY `NO` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
