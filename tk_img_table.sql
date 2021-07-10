-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:3306
-- 生成日時: 
-- サーバのバージョン： 5.7.24
-- PHP のバージョン: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `tk_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `tk_img_table`
--

CREATE TABLE `tk_img_table` (
  `id` int(11) NOT NULL,
  `lid` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `cook` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `tk_img_table`
--

INSERT INTO `tk_img_table` (`id`, `lid`, `cook`, `name`, `img`) VALUES
(1, 'TAKA', '千尋', 'こてっちゃん', '20210710061325a8c18c479c731d6b26e96bd1102adfbd.jpg'),
(2, 'TK', 'あああ', 'いいい', '202107102157176d10d374e5347dc8e6aac32be65dccff.jpg'),
(3, 'TAKA', 'test', 'test', '20210710221612de3305bd5bd0285f2b542a87baf03e60.jpg'),
(4, 'takatest', 'sample', 'kotoe', '20210710225013e1313cafe8f5255d8095bfac5df7fa55.jpg');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `tk_img_table`
--
ALTER TABLE `tk_img_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `tk_img_table`
--
ALTER TABLE `tk_img_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
