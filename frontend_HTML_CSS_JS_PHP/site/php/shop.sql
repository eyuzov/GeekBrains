-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 16 2018 г., 21:47
-- Версия сервера: 10.1.37-MariaDB
-- Версия PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `author` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `text` text NOT NULL,
  `accepted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `author`, `date`, `text`, `accepted`) VALUES
(1, 'g', '0000-00-00 00:00:00', 'gh', 0),
(2, 'wer', '2018-12-12 00:00:00', 'werw', 0),
(3, 'erwer', '2018-12-12 21:55:25', 'werwe', 0),
(4, 'ggggg', '2018-12-12 22:50:27', 'ggrtgrtg', 0),
(5, 'erfe', '2018-12-12 22:52:32', 'fed', 0),
(6, '', '2018-12-15 12:05:02', '', 0),
(7, 'bbbbbb', '2018-12-15 12:05:17', 'bbbbbbbbb', 0),
(8, '', '2018-12-15 12:35:59', '', 0),
(9, '1', '2018-12-15 13:04:53', '2', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `photo` varchar(20) NOT NULL,
  `collection` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `material` varchar(50) NOT NULL,
  `designer` varchar(50) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `photo`, `collection`, `name`, `description`, `material`, `designer`, `price`) VALUES
(6, '2.png', 'MEN COLLECTION', 'MOSCHINO', 'sdfsdvsdfvs', 'COTTON', 'Tommy Hilfiger', 156),
(7, '1.png', 'MEN COLLECTION', 'MOSCHINO', '1111111111111111111111111111111111111111111111111', 'COTTON', 'Tommy Hilfiger', 156),
(9, '9.png', 'MEN COLLECTION', 'MOSCHINO', '', 'COTTON', 'Tommy Hilfiger', 156),
(10, '3.png', 'MEN COLLECTION345', 'MOSCHINO', '23', 'COTTON', 'Tommy Hilfiger', 156),
(11, '7.png', 'MEN COLLECTIONqqq', 'MOSCHINOqqqq', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq', 'COTTONqqq', 'Tommy Hilfiger', 234),
(12, '8.png', 'MEN COLLECTION345', 'r', '2222', 'COTTON.....', 'Tommy Hilfiger', 111);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `is_admin`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
