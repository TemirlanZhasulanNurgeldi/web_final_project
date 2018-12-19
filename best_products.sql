-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 19 2018 г., 15:42
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
-- База данных: `best_products`
--

-- --------------------------------------------------------

--
-- Структура таблицы `best_products`
--

CREATE TABLE `best_products` (
  `ID` int(11) NOT NULL,
  `Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(11) NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `best_products`
--

INSERT INTO `best_products` (`ID`, `Image`, `Name`, `Price`, `code`) VALUES
(1, 'images\\pr.jpg', 'blouse', 6000, 20),
(2, 'images\\pr1.jpg', 'Dress', 15000, 21),
(3, 'images\\pr2.jpg', 'T-shirt', 3500, 22),
(4, 'images\\pr3.jpg', 'blouse', 7000, 23),
(5, 'images\\ce.jpg', 'Dress', 15000, 24),
(6, 'images\\ce1.jpg', 'Dress', 30000, 25);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `best_products`
--
ALTER TABLE `best_products`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `best_products`
--
ALTER TABLE `best_products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
