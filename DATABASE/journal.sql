-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 22 2022 г., 09:35
-- Версия сервера: 8.0.29
-- Версия PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `journal`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `title_uz` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL,
  `title_en` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `title_uz`, `title_en`) VALUES
(1, 'Pedagogika fanlari', 'Pedagogical sciences'),
(2, 'Psixologiya fanlari', 'Psychological sciences'),
(3, 'Falsafa fanlari', 'Philosophical sciences'),
(4, 'Menejment', 'Management'),
(5, 'Filologiya fanlari', 'Philological sciences'),
(6, 'Biologiya fanlari', 'Biological sciences'),
(7, 'Kimyo fanlari', 'Chemical sciences'),
(8, 'Fizika fanlari', 'Physical sciences'),
(9, 'Matematika fanlari', 'Mathematical sciences'),
(10, 'Axborot texnologiyalari', 'Information technology'),
(11, 'Iqtisod fanlari', 'Economics'),
(12, 'Tarix fanlari', 'History sciences'),
(13, 'Meditsina', 'Medicine'),
(14, 'Turizm', 'Tourism'),
(15, 'Moliya', 'Finance'),
(16, 'Muhandislik', 'Engineering'),
(17, 'Yuridik fanlar', 'Legal sciences');

-- --------------------------------------------------------

--
-- Структура таблицы `journal`
--

CREATE TABLE `journal` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `categoryID` int NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  `year` year NOT NULL,
  `month` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `journal`
--

INSERT INTO `journal` (`id`, `title`, `author`, `tel`, `email`, `pdf`, `categoryID`, `status`, `date`, `year`, `month`) VALUES
(9, 'jnweifja woefi aoewf awofuw u', 'askdflas', '23849234589', '1akfasdfkajs@fa.da', '190922210912-090622001852.pdf', 2, 1, '2022-09-19', 2022, '05'),
(10, 'werfwerawrt aer', 'qweqwewqe', '213213124124', 'saawee@ere.cc', '200922073624-260422225249.pdf', 1, 1, '2022-09-20', 2022, '05'),
(11, 'faefawe', 'awefawefwa a wef wa', '234234', 'ertwertwet ', '200922073624-260422225249.pdf', 2, 1, '2022-09-14', 2022, '06'),
(12, 'qweqwewqewqe qwe qwe qw', 'qwewqewq eqw a wef wa', '123123543534', 'ewrwerwer ', '210922091058-190422065131.pdf', 3, 1, '2022-09-14', 2022, '06'),
(13, 'qweqwewqewqe qwe qwe qw', 'qwewqewq eqw a wef wa', '123123543534', 'ewrwerwer ', '210922091058-190422065131.pdf', 4, 1, '2022-09-14', 2022, '07'),
(14, 'qweqwewqewqe qwe qwe qw', 'qwewqewq eqw a wef wa', '123123543534', 'ewrwerwer ', '210922091058-190422065131.pdf', 5, 1, '2022-09-14', 2022, '08'),
(15, 'qweqwewqewqe qwe qwe qw', 'qwewqewq eqw a wef wa', '123123543534', 'ewrwerwer ', '210922091058-190422065131.pdf', 5, 1, '2022-09-14', 2022, '08'),
(16, 'qweqwewqewqe qwe qwe qw', 'qwewqewq eqw a wef wa', '123123543534', 'ewrwerwer ', '210922091058-190422065131.pdf', 6, 0, '2022-09-14', 2022, '09'),
(17, 'qweqwewqewqe qwe qwe qw', 'qwewqewq eqw a wef wa', '123123543534', 'ewrwerwer ', '210922091058-190422065131.pdf', 7, 0, '2022-09-14', 2022, '10'),
(18, 'wqewqeqwef qw tq ergewsdbrserg', 'wqewqewqt qt wert w', '99898989', 'werwewetwertg@qwe.gdfg', '210922091058-190422065131.pdf', 17, 0, '2022-09-21', 2022, '11');

-- --------------------------------------------------------

--
-- Структура таблицы `site`
--

CREATE TABLE `site` (
  `id` int NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tg` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `site`
--

INSERT INTO `site` (`id`, `email`, `phone`, `address`, `tg`, `whatsapp`) VALUES
(1, 'ravshanbek311@gmail.com', '+99891 684 81 85', 'Qo`qon', 'Ravshanbek_8185', '+99891 684 81 85');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `rasm` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL,
  `info` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `fullname`, `rasm`, `info`, `username`, `password`, `role`) VALUES
(1, 'Abror shokirov', '1.jpg', 'admin', 'admin', '202cb962ac59075b964b07152d234b70', 'admin'),
(4, 'qwe', '2.jpg', 'fizikik', 'qwe', '202cb962ac59075b964b07152d234b70', 'user'),
(6, 'aaaaaaaaaaa', '220922085712-profile_ava.png', 'dddddddddddddddd', 'aaaaaaaaaaaaaa', '202cb962ac59075b964b07152d234b70', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `journal`
--
ALTER TABLE `journal`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `site`
--
ALTER TABLE `site`
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
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `journal`
--
ALTER TABLE `journal`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `site`
--
ALTER TABLE `site`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
