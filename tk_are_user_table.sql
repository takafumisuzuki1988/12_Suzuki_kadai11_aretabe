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
-- テーブルの構造 `tk_are_user_table`
--

CREATE TABLE `tk_are_user_table` (
  `id` int(11) NOT NULL,
  `lid` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `lpw` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `tk_are_user_table`
--

INSERT INTO `tk_are_user_table` (`id`, `lid`, `lpw`) VALUES
(1, 'TAKA', '$2y$10$aDw4ZN4u7Q9Y6bN4C6qqKur0JBfPWyWi7XFLe0GTaIjwbURoatNha'),
(2, 'takatest', '$2y$10$bmyMTtpOum0P8xki77vdzuoJJm4ZuI0/ie3a4rMOaE8Vhv2PcN8sS');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `tk_are_user_table`
--
ALTER TABLE `tk_are_user_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `tk_are_user_table`
--
ALTER TABLE `tk_are_user_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
