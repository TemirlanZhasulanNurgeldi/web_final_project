-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 22 2018 г., 12:01
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
-- Структура таблицы `best_products`
--

CREATE TABLE `best_products` (
  `ID` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `best_products`
--

INSERT INTO `best_products` (`ID`, `Image`, `Name`, `price`, `code`) VALUES
(3, 'images\\pr.jpg', 'Blouse', 6000, 20),
(4, 'images\\pr1.jpg', 'Dress', 15000, 21),
(5, 'images\\pr2.jpg', 'T-shirt', 3500, 22),
(6, 'images\\ce.jpg', 'Dress', 15000, 24),
(7, 'images\\ce1.jpg', 'Dress', 30000, 25),
(8, 'images\\pr3.jpg', 'Blouse', 7000, 23);

-- --------------------------------------------------------

--
-- Структура таблицы `man`
--

CREATE TABLE `man` (
  `ID` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `man`
--

INSERT INTO `man` (`ID`, `Image`, `Name`, `price`, `code`) VALUES
(1, 'images\\pi9.png', 'Classic pants', 10000, 7),
(2, 'images\\pi12.png', 'Classic pants', 13200, 10),
(3, 'images\\pi10.png', 'Classic pants', 8750, 8),
(4, 'images\\pi11.png', 'Classic pants', 11500, 9),
(5, 'images\\j1.jpg', 'Jeans', 5000, 14),
(6, 'images\\j3.jpg', 'Jeans', 4500, 16),
(7, 'images\\j4.jpg', 'Jeans', 7000, 17),
(8, 'images\\kos2.jpg', 'Suit', 24000, 15),
(9, 'images\\kos.jpg', 'Suit', 26500, 18);

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

-- --------------------------------------------------------

--
-- Структура таблицы `woman`
--

CREATE TABLE `woman` (
  `ID` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `woman`
--

INSERT INTO `woman` (`ID`, `Image`, `Name`, `Price`, `code`) VALUES
(1, 'images\\pi.png', 'Capri', 11000, 11),
(2, 'images\\pi2.png', 'Trousers', 14000, 4),
(3, 'images\\pi4.png', 'Trousers', 11000, 2),
(4, 'images\\pi1.png', 'Trousers', 12000, 12),
(5, 'images\\pi3.png', 'Trousers palazzo', 11500, 3),
(6, 'images\\pi5.png', 'Trousers palazzo', 12000, 1),
(7, 'images\\pi6.png', 'Trousers ', 16000, 5),
(8, 'images\\pi7.png', 'Jeans', 5000, 13),
(9, 'images\\pi8.png', 'Trousers', 9000, 6);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `best_products`
--
ALTER TABLE `best_products`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `man`
--
ALTER TABLE `man`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `woman`
--
ALTER TABLE `woman`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `best_products`
--
ALTER TABLE `best_products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `man`
--
ALTER TABLE `man`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `woman`
--
ALTER TABLE `woman`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
