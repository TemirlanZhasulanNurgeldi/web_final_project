-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 19 2018 г., 15:41
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
-- База данных: `products`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(11) NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`ID`, `Image`, `Name`, `Price`, `code`) VALUES
(1, 'images\\pi.png', 'Capri', 11000, 11),
(2, 'images\\pi2.png', 'Trouser', 14000, 4),
(3, 'images\\pi4.png', 'Trousers', 11000, 2),
(4, 'images\\pi1.png', 'Trousers', 12000, 12),
(5, 'images\\pi3.png', 'Trousers palazzo', 11500, 3),
(6, 'images\\pi12.png', 'Classic pants', 13200, 10),
(7, 'images\\pi9.png', 'Classic pants', 10000, 7),
(8, 'images\\pi11.png', 'Classic pants', 11500, 9),
(9, 'images\\pi10.png', 'Classic pants', 8750, 8),
(10, 'images\\kos.jpg', 'Suit', 26500, 18),
(11, 'images\\kos2.jpg', 'Suit', 20000, 15),
(12, 'images\\kos3.jpg', 'Suit', 28000, 19);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
