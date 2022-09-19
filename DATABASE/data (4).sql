-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 08 2022 г., 09:18
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
-- База данных: `data`
--

-- --------------------------------------------------------

--
-- Структура таблицы `auth`
--

CREATE TABLE `auth` (
  `id` int NOT NULL,
  `ism` varchar(255) NOT NULL,
  `fam` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `parol` varchar(255) NOT NULL,
  `sharfi` varchar(100) NOT NULL,
  `manzil` varchar(255) NOT NULL,
  `yoshi` int NOT NULL,
  `category` varchar(100) NOT NULL,
  `step` int DEFAULT '1',
  `rasm` varchar(255) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `auth`
--

INSERT INTO `auth` (`id`, `ism`, `fam`, `tel`, `login`, `parol`, `sharfi`, `manzil`, `yoshi`, `category`, `step`, `rasm`, `date`) VALUES
(3, 'wdwdwe', 'fwef', 'wefw', 'wefwefwf', '202cb962ac59075b964b07152d234b70', '', '', 0, '', 1, '', NULL),
(4, 'Adxamjon', 'Vahobov', '+998903000221', 'adxam', '68053af2923e00204c3ca7c6a3150cf7', '', '', 0, '', 1, '', NULL),
(5, 'Abror', 'Shokirov', 'dw', 'admin', '202cb962ac59075b964b07152d234b70', 'd', 'qdw', 123, 'oliy', 7, '260822211854.jpg', '2022-08-26'),
(6, 'asdfasf', 'qwe', '99898989', 'q', '7694f4a66316e53c8cdd9d9954bd611d', 'qwe', 'sdfafsdasfa', 12, 'oliy', 7, '310822183618.jpg', '2022-08-31'),
(7, 'asdasd', 'asd', '123213213', 'w', 'f1290186a5d0b1ceab27f4e77c0c5d68', 'asd', 'weqwe', 123, 'oliy', 6, '010922130436.jpg', '2022-09-01'),
(8, 'wqe', 'qwe', '123213213', 'qwewqe', '202cb962ac59075b964b07152d234b70', 'qwe', 'qweqwe', 123123, '', 1, '020922131008.jpg', '2022-09-02'),
(9, 'w', 'wdq', '123123', '1231', 'c4ca4238a0b923820dcc509a6f75849b', 'wdq', 'wqeqwe', 213, '', 1, '020922131403.jpg', '2022-09-02'),
(10, 'qwe', 'qwe', '123123213', '123123', '76d80224611fc919a5d54f0ff9fba446', 'qwe', 'werwer', 123, 'sinf', 1, '020922131652.jpg', '2022-09-02');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

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

CREATE TABLE `media` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `sub_id` int NOT NULL,
  `view` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `media`
--

INSERT INTO `media` (`id`, `title`, `text`, `img`, `video`, `date`, `sub_id`, `view`) VALUES
(6, 'QUVNOQ MATEMATIKA', 'Axborot - ta`lim resursi\r\n', '080622103648.jpg', '080622103648.mp4', '2022-06-08', 10, 0),
(8, 'qwdqwd', 'qwdqwdqwd', '080922091409.jpg', '080922091409-regions.json', '2022-09-08', 10, NULL),
(9, 'qwewqe', 'wqewqewqe', '080922091526.jpg', '080922091526-Новый текстовый документ (2).zip', '2022-09-08', 10, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `metodika`
--

CREATE TABLE `metodika` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `sub_id` int NOT NULL,
  `view` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `metodika`
--

INSERT INTO `metodika` (`id`, `title`, `text`, `img`, `pdf`, `date`, `sub_id`, `view`) VALUES
(13, '1-sinf matematika', 'Xalq ta`limi tavsiya etgan maktab darsliklari', '260422225010.jpg', '260422225010.pdf', '2022-04-26', 5, 2),
(14, '1-sinf ona tili', 'Xalq ta`limi vazirligi tavsiya etgan maktab darsliklari', '260422225249.jpg', '260422225249.pdf', '2022-04-26', 5, 0),
(15, 'Texnologiya o`quv dasturi', 'Umumiy o`rta talimning\r\nmilliy o`quv dasturi', '080622095915.jpg', '080622095915.pdf', '2022-06-08', 7, 0),
(16, 'Matematika milliy dastur', 'Umumiy o`rta ta`limning\r\nMILLIY O`QUV DASTURI', '080622100127.jpg', '080622100127.pdf', '2022-06-08', 7, 0),
(17, 'Ona tili milliy dastur', 'Umumiy o`rta ta`limning\r\nMILLIY O`QUV DASTURI', '080622100314.jpg', '080622100314.pdf', '2022-06-08', 7, 0),
(18, '2-sinf MATEMATIKA', 'Xalq ta`limi tavsiya etgan maktab darsliklari', '080622231626.jpg', '080622231626.pdf', '2022-06-08', 5, 0),
(19, '2-sinf Ona tili va o`qish savobxonligi (1-qism)', 'Xalq ta`limi tavsiya etgan maktab darsliklari', '080622235451.jpg', '080622235451.pdf', '2022-06-08', 5, 0),
(20, '2-sinf Ona tili va o`qish savobxonligi (2-qism)', 'Xalq ta`limi tavsiya etgan maktab darsliklari', '090622001852.jpg', '090622001852.pdf', '2022-06-09', 5, 1),
(21, 'Malaka talablari', 'O`zbekiston Respublikasi Oliv va o`rta maxsus ta`lim vazirligi', '150622152947.jpg', '150622152947.pdf', '2022-06-15', 8, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `date` varchar(200) NOT NULL,
  `sub_id` int NOT NULL,
  `pdf` varchar(100) NOT NULL,
  `view` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `img`, `date`, `sub_id`, `pdf`, `view`) VALUES
(10, 'O‘zbekiston Respublikasi Prezidentining 2022 — 2026-yillarga mo‘ljallangan ”Yangi O‘zbekistonning taraqqiyot strategiyasi” to‘g‘risidagi 2022-yil 28-yanvardagi 60-sonli Farmoni', 'O‘zbekiston Respublikasi Prezidentining 2022 — 2026-yillarga mo‘ljallangan ”Yangi O‘zbekistonning taraqqiyot strategiyasi” to‘g‘risidagi 2022-yil 28-yanvardagi 60-sonli Farmoni\r\n\r\nhttp://lex.uz//uz/docs/-5841063 2022-2026-yillarga mo‘ljallangan Yangi O‘zbekistonning taraqqiyot strategiyasi to‘g‘risida\r\n\r\n', '080522155710.jpg', '2022/05/08', 1, '', 0),
(11, 'Xalq ta’limi tizimini 2030-yilgacha rivojlantirish konsepsiyasini tasdiqlash” to‘g‘risida 2019-yil 29-aprel, 5712-sonli Farmoni', 'https://lex.uz/docs/-4312785', '080522160356.jpg', '2022/05/08', 2, '', 0),
(12, 'O’zbekiston Respublikasining 2020-yil  23-sentabrdagi “Ta’lim to‘g‘risida”gi  637-sonli Qonuni', 'https://lex.uz/docs/-5013007', '080522161814.jpg', '2022/05/08', 1, '', 1),
(13, 'Ta’lim tashkilotlarini attestatsiyadan o‘tkazish mezonlarini tasdiqlash to‘g‘risida', 'https://lex.uz/docs/-4715787', '080522162037.jpg', '2022/05/08', 1, '', 2),
(14, 'BO‘LAJAK BOSHLANG‘ICH SINF O‘QITUVCHISINING MASOFAVIY TA’LIMDAN  FOYDALANISHINING PEDAGOGIK VA DIDAKTIK IMKONIYATLARI', 'Maqolada  bo‘lajak  boshlang‘ich  sinf  o‘qituvchisining  masofaviy  ta’limdan  foydalanishining \r\npedagogik va didaktik imkoniyatlari, masofaviy ta’limning afzalliklari, turlari haqida fikr yuritilgan.', '230722224548.jpg', '2022/07/23', 3, '', 0),
(15, 'OLIY TA`LIM JARAYONIDA MASOFAVIY TA`LIMDAN FOYDALANISHNING AHAMIYATI', 'Mazkur  maqolada  masofaviy  ta`lim,  uning  ahamiyati,  ta`lim  jarayonida \r\nmasofaviy  ta`limdan  foydalanish  ahamiyati  va  uning  turlari  yoritilgan. ', '230722230846.jpg', '2022/07/23', 3, '', 0),
(16, 'МАСОФАВИЙ ТАЪЛИМ ВОСИТАСИДА БЎЛАЖАК БОШЛАНҒИШ СИНФ  ЎҚИТУВШИЛАРИНИНГ МЕТОДИК ТАЙЖРГАРЛИГИНИ  ТАКОМИЛЛАШТИРИШНИНГ ДИВЕРСИФИКАЧИОН МАЗМУНИ', 'Мазкур  мақолада  бфлажак  бошланғиш  синф  фқитувшисининг  методик  тайжргарлигини  масофавий  таълимдан  фойдаланиб  такомиллаштириш  мазмуни,  уларнининг  модификачион, диверсификачион мазмуни тацлил этилган.', '230722233103.jpg', '2022/07/23', 1, '', 0),
(17, 'qwdqwd', 'qwdqwd', '080922084008.jpg', '2022/09/08', 3, '080922084008-2-topshiriq.pdf', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `sub_category`
--

INSERT INTO `sub_category` (`id`, `category_id`, `name`) VALUES
(1, '1', 'Oliy ta\'limga doir qaror va farmonlar'),
(2, '1', 'Xalq ta\'limga doir qaror va farmonlar'),
(3, '1', 'Sohaga doir maqolalar'),
(4, '1', 'Xorij tajribasi'),
(5, '2', 'Maktab darsliklari'),
(6, '2', 'Oliy ta\'lim darsliklari'),
(7, '2', 'Metodik ko\'rsatmalar'),
(8, '2', 'Tavsiyalar'),
(9, '2', 'Namunaviy dars ishlanmalar'),
(10, '3', 'Axborot ta\'lim resursi'),
(11, '3', 'Taqdimotlar'),
(12, '3', 'Videodarslar');

-- --------------------------------------------------------

--
-- Структура таблицы `tests`
--

CREATE TABLE `tests` (
  `id` int NOT NULL,
  `text` text NOT NULL,
  `rasm` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL,
  `a` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL,
  `b` varchar(100) NOT NULL,
  `c` varchar(100) NOT NULL,
  `d` varchar(100) NOT NULL,
  `javob` varchar(15) NOT NULL,
  `date` varchar(15) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `tests`
--

INSERT INTO `tests` (`id`, `text`, `rasm`, `a`, `b`, `c`, `d`, `javob`, `date`, `category`) VALUES
(1, '2*2 oliy', NULL, '2', '3', '4', '5', 'c', '2022-04-12', 'oliy'),
(2, '15*1 oliy', NULL, '14', '15', '16', '17', 'b', '2022-04-12', 'oliy'),
(3, 'html nima oliy', NULL, 'html', 'HyperText Markup Language', 'none', 'a', 'b', '2022-04-12', 'oliy'),
(4, '3+6 oliy', NULL, '5', '6', '8', '9', 'd', '2022-04-12', 'oliy'),
(5, 'css nima oliy', NULL, 'Cascading Style Sheets ', 'none', 'style', 'html css', 'a', '2022-04-12', 'oliy'),
(6, 'sql nima sinf', NULL, 'baza', 'malumot', 'Structured Query Language', 'none', 'c', '2022-04-12', 'sinf'),
(7, 'math tarjima sinf', NULL, 'vaqt', 'matematika', 'bilmeman', 'html', 'b', '2022-04-12', 'sinf'),
(8, 'java nima sinf', NULL, 'dasturlash tili', 'o`yin', 'bilmeman', 'chunmadim', 'a', '2022-04-12', 'sinf'),
(9, 'qweqqwe sinf', '', 'qwe', 'qwe', 'qwe', 'qweqwe', 'a', '2022/09/02', 'sinf'),
(10, '1 sinf', '', '1', '1', '1', '1', 'a', '2022/09/02', 'sinf'),
(11, '2 oliy', '080522155143.jpg', '2', '2', '2', '2', 'a', '2022/09/02', 'oliy');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`) VALUES
(1, 'Abror', 'admin', '202cb962ac59075b964b07152d234b70'),
(2, 'Shokir', 'root', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Структура таблицы `works`
--

CREATE TABLE `works` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `test_ids` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `test_results` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `test_score` int NOT NULL,
  `task1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `task1_score` int NOT NULL,
  `task2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `task2_score` int NOT NULL,
  `task3` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `task3_score` int NOT NULL,
  `yakun1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `yakun2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `yakun_score` int NOT NULL,
  `done` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `works`
--

INSERT INTO `works` (`id`, `user_id`, `test_ids`, `test_results`, `test_score`, `task1`, `task1_score`, `task2`, `task2_score`, `task3`, `task3_score`, `yakun1`, `yakun2`, `yakun_score`, `done`) VALUES
(4, 5, '4,5,2,3,1', 'a,a,a,b,a', 8, '9,9,9,9-8,8,8,8', 2, '080622095252.pdf', 2323, '0209221344071-topshiriq.docx', 12123, '0609221012381-topshiriq.pdf', '060922101300сайтга (2).docx', 22132, 1),
(5, 6, '2,8,5,4,6', 'a,a,a,a,a', 0, '0,0,0,0-9,9,9,9', 12321123, '3108221837013-topshiriq.pdf', 11, '3108221837123-topshiriq.pdf', 33, '3108221839293-topshiriq.pdf', '3108221837203-topshiriq.pdf', 5555, 1),
(6, 7, '5,2,8,1,6', 'a,a,b,c,b', 0, '221,2,2,2-6,5,4,3', 3333, '0109221306291-topshiriq.pdf', 324, '0109221306353-topshiriq.pdf', 32, '0109221306563-topshiriq.pdf', '0109221307041-topshiriq.pdf', 44, 0);

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
-- Индексы таблицы `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `media`
--
ALTER TABLE `media`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `metodika`
--
ALTER TABLE `metodika`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `works`
--
ALTER TABLE `works`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
