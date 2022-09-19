-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Авг 02 2022 г., 21:25
-- Версия сервера: 10.3.35-MariaDB
-- Версия PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `data`
--

-- --------------------------------------------------------

--
-- Структура таблицы `auth`
--

CREATE TABLE IF NOT EXISTS `auth` (
  `id` int(11) NOT NULL,
  `ism` varchar(255) NOT NULL,
  `fam` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `parol` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `auth`
--

INSERT INTO `auth` (`id`, `ism`, `fam`, `tel`, `login`, `parol`) VALUES
(1, 'Abror', 'Shokirov', '90 099 99 33', 'admin', '202cb962ac59075b964b07152d234b70'),
(2, 'Otabek', 'Hakimov', '99898989', 'admin', '202cb962ac59075b964b07152d234b70'),
(3, 'wdwdwe', 'fwef', 'wefw', 'wefwefwf', '202cb962ac59075b964b07152d234b70'),
(4, 'Adxamjon', 'Vahobov', '+998903000221', 'adxam', '68053af2923e00204c3ca7c6a3150cf7');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Yangiliklar'),
(2, 'Metodika'),
(3, 'Multimedia');

-- --------------------------------------------------------

--
-- Структура таблицы `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `sub_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `media`
--

INSERT INTO `media` (`id`, `title`, `text`, `img`, `video`, `date`, `sub_id`) VALUES
(6, 'QUVNOQ MATEMATIKA', 'Axborot - ta`lim resursi\r\n', '080622103648.jpg', '080622103648.mp4', '2022-06-08', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `metodika`
--

CREATE TABLE IF NOT EXISTS `metodika` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `sub_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `metodika`
--

INSERT INTO `metodika` (`id`, `title`, `text`, `img`, `pdf`, `date`, `sub_id`) VALUES
(13, '1-sinf matematika', 'Xalq ta`limi tavsiya etgan maktab darsliklari', '260422225010.jpg', '260422225010.pdf', '2022-04-26', 5),
(14, '1-sinf ona tili', 'Xalq ta`limi vazirligi tavsiya etgan maktab darsliklari', '260422225249.jpg', '260422225249.pdf', '2022-04-26', 5),
(15, 'Texnologiya o`quv dasturi', 'Umumiy o`rta talimning\r\nmilliy o`quv dasturi', '080622095915.jpg', '080622095915.pdf', '2022-06-08', 7),
(16, 'Matematika milliy dastur', 'Umumiy o`rta ta`limning\r\nMILLIY O`QUV DASTURI', '080622100127.jpg', '080622100127.pdf', '2022-06-08', 7),
(17, 'Ona tili milliy dastur', 'Umumiy o`rta ta`limning\r\nMILLIY O`QUV DASTURI', '080622100314.jpg', '080622100314.pdf', '2022-06-08', 7),
(18, '2-sinf MATEMATIKA', 'Xalq ta`limi tavsiya etgan maktab darsliklari', '080622231626.jpg', '080622231626.pdf', '2022-06-08', 5),
(19, '2-sinf Ona tili va o`qish savobxonligi (1-qism)', 'Xalq ta`limi tavsiya etgan maktab darsliklari', '080622235451.jpg', '080622235451.pdf', '2022-06-08', 5),
(20, '2-sinf Ona tili va o`qish savobxonligi (2-qism)', 'Xalq ta`limi tavsiya etgan maktab darsliklari', '090622001852.jpg', '090622001852.pdf', '2022-06-09', 5),
(21, 'Malaka talablari', 'O`zbekiston Respublikasi Oliv va o`rta maxsus ta`lim vazirligi', '150622152947.jpg', '150622152947.pdf', '2022-06-15', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `date` varchar(200) NOT NULL,
  `sub_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `img`, `date`, `sub_id`) VALUES
(10, 'O‘zbekiston Respublikasi Prezidentining 2022 — 2026-yillarga mo‘ljallangan ”Yangi O‘zbekistonning taraqqiyot strategiyasi” to‘g‘risidagi 2022-yil 28-yanvardagi 60-sonli Farmoni', 'O‘zbekiston Respublikasi Prezidentining 2022 — 2026-yillarga mo‘ljallangan ”Yangi O‘zbekistonning taraqqiyot strategiyasi” to‘g‘risidagi 2022-yil 28-yanvardagi 60-sonli Farmoni\r\n\r\nhttp://lex.uz//uz/docs/-5841063 2022-2026-yillarga mo‘ljallangan Yangi O‘zbekistonning taraqqiyot strategiyasi to‘g‘risida\r\n\r\n', '080522155710.jpg', '2022/05/08', 1),
(11, 'Xalq ta’limi tizimini 2030-yilgacha rivojlantirish konsepsiyasini tasdiqlash” to‘g‘risida 2019-yil 29-aprel, 5712-sonli Farmoni', 'https://lex.uz/docs/-4312785', '080522160356.jpg', '2022/05/08', 2),
(12, 'O’zbekiston Respublikasining 2020-yil  23-sentabrdagi “Ta’lim to‘g‘risida”gi  637-sonli Qonuni', 'https://lex.uz/docs/-5013007', '080522161814.jpg', '2022/05/08', 1),
(13, 'Ta’lim tashkilotlarini attestatsiyadan o‘tkazish mezonlarini tasdiqlash to‘g‘risida', 'https://lex.uz/docs/-4715787', '080522162037.jpg', '2022/05/08', 1),
(14, 'BO‘LAJAK BOSHLANG‘ICH SINF O‘QITUVCHISINING MASOFAVIY TA’LIMDAN  FOYDALANISHINING PEDAGOGIK VA DIDAKTIK IMKONIYATLARI', 'Maqolada  bo‘lajak  boshlang‘ich  sinf  o‘qituvchisining  masofaviy  ta’limdan  foydalanishining \r\npedagogik va didaktik imkoniyatlari, masofaviy ta’limning afzalliklari, turlari haqida fikr yuritilgan.', '230722224548.jpg', '2022/07/23', 3),
(15, 'OLIY TA`LIM JARAYONIDA MASOFAVIY TA`LIMDAN FOYDALANISHNING AHAMIYATI', 'Mazkur  maqolada  masofaviy  ta`lim,  uning  ahamiyati,  ta`lim  jarayonida \r\nmasofaviy  ta`limdan  foydalanish  ahamiyati  va  uning  turlari  yoritilgan. ', '230722230846.jpg', '2022/07/23', 3),
(16, 'МАСОФАВИЙ ТАЪЛИМ ВОСИТАСИДА БЎЛАЖАК БОШЛАНҒИШ СИНФ  ЎҚИТУВШИЛАРИНИНГ МЕТОДИК ТАЙЖРГАРЛИГИНИ  ТАКОМИЛЛАШТИРИШНИНГ ДИВЕРСИФИКАЧИОН МАЗМУНИ', 'Мазкур  мақолада  бфлажак  бошланғиш  синф  фқитувшисининг  методик  тайжргарлигини  масофавий  таълимдан  фойдаланиб  такомиллаштириш  мазмуни,  уларнининг  модификачион, диверсификачион мазмуни тацлил этилган.', '230722233103.jpg', '2022/07/23', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `sub_category`
--

CREATE TABLE IF NOT EXISTS `sub_category` (
  `id` int(11) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sub_category`
--

INSERT INTO `sub_category` (`id`, `category_id`, `name`) VALUES
(1, '1', 'Oliy ta''limga doir qaror va farmonlar'),
(2, '1', 'Xalq ta''limga doir qaror va farmonlar'),
(3, '1', 'Sohaga doir maqolalar'),
(4, '1', 'Xorij tajribasi'),
(5, '2', 'Maktab darsliklari'),
(6, '2', 'Oliy ta''lim darsliklari'),
(7, '2', 'Metodik ko''rsatmalar'),
(8, '2', 'Tavsiyalar'),
(9, '2', 'Namunaviy dars ishlanmalar'),
(10, '3', 'Axborot ta''lim resursi'),
(11, '3', 'Taqdimotlar'),
(12, '3', 'Videodarslar');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`) VALUES
(1, 'Abror', 'admin', '202cb962ac59075b964b07152d234b70'),
(2, 'Shokir', 'root', '202cb962ac59075b964b07152d234b70');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `metodika`
--
ALTER TABLE `metodika`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sub_category`
--
ALTER TABLE `sub_category`
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
-- AUTO_INCREMENT для таблицы `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `metodika`
--
ALTER TABLE `metodika`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT для таблицы `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
