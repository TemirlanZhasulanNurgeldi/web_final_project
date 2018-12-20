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
-- База данных: `woman`
--

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
-- Индексы таблицы `woman`
--
ALTER TABLE `woman`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `woman`
--
ALTER TABLE `woman`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
