-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 20 2018 г., 13:30
-- Версия сервера: 10.1.36-MariaDB
-- Версия PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `man`
--

-- --------------------------------------------------------

--
-- Структура таблицы `man`
--

CREATE TABLE `man` (
  `ID` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `man`
--

INSERT INTO `man` (`ID`, `Image`, `Name`, `Price`, `code`) VALUES
(1, 'images\\pi9.png', 'Classic pants', 10000, 7),
(2, 'images\\pi12.png', 'Classic pants', 13200, 10),
(3, 'images\\pi10.png', 'Classic pants', 8750, 8),
(4, 'images\\pi11.png', 'Classic pants', 11500, 9),
(5, 'images\\j1.jpg', 'Jeans', 5000, 14),
(6, 'images\\j3.jpg', 'Jeans', 4500, 16),
(7, 'images\\j4.jpg', 'Jeans', 7000, 17),
(8, 'images\\kos2.jpg', 'Suit', 24000, 15),
(9, 'images\\kos.jpg', 'Suit', 26500, 18);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `man`
--
ALTER TABLE `man`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `man`
--
ALTER TABLE `man`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
