-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 07 2018 г., 12:11
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
-- База данных: `barbershop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `data_person`
--

CREATE TABLE `data_person` (
  `id_data_person` int(11) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `Fname` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Lname` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Sname` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `data_person`
--

INSERT INTO `data_person` (`id_data_person`, `phone`, `Fname`, `Lname`, `Sname`) VALUES
(1, 89213492134, 'Андреева ', 'Мария', 'Федоровна'),
(3, 89322001131, 'Эраст', 'Козырев', 'Русланович'),
(4, 89069217568, 'Виктор', 'Русин', 'Антонович'),
(5, 89523715979, 'Будимир', 'Гулевич', 'Вячеславович'),
(6, 89527655989, 'Светозар', 'Гусев', 'Петрович'),
(7, 89289136271, 'Сильвестр', 'Федотов', 'Кириллович'),
(8, 89084256420, 'Корнил', 'Байков', 'Миронович'),
(9, 89059601739, 'Никодим', 'Леонтьев', 'Артемович'),
(10, 89716858989, 'Демьян', 'Чапко', 'Филиппович'),
(11, 89295383255, 'Азарий ', 'Сорокин ', 'Ярославович'),
(12, 89295383255, 'Азарий ', 'Сорокин ', 'Ярославович'),
(13, 89172519645, 'Тит  ', 'Щербаков  ', 'Эльдарович'),
(14, 89385708590, 'Всеволод', 'Демьянов', 'Максимович'),
(15, 89076736499, 'Исай', 'Новиков', 'Алексеевич'),
(16, 89245451232, 'Антон', 'Андреев', 'Васильевич'),
(17, 89245451232, 'Антон', 'Андреев', 'Васильевич'),
(94, 123123123, 'werq`', 'qwer', 'qer`');

-- --------------------------------------------------------

--
-- Структура таблицы `date_visit`
--

CREATE TABLE `date_visit` (
  `id_date_visit` int(11) NOT NULL,
  `visitors_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `date_visit`
--

INSERT INTO `date_visit` (`id_date_visit`, `visitors_id`, `date`) VALUES
(1, 1, '2018-11-07'),
(2, 8, '2018-10-27'),
(4, 1, '2018-10-19'),
(5, 8, '2018-10-31'),
(6, 8, '2018-10-30'),
(14, 1, '0000-00-00'),
(24, 1, '2018-12-12'),
(29, 6, '2018-01-01'),
(53, 8, '2018-11-07'),
(55, 1, '2018-11-08');

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id_services` int(11) NOT NULL,
  `services_date_visit_id` int(11) NOT NULL,
  `services` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id_services`, `services_date_visit_id`, `services`) VALUES
(1, 2, 'стрижка lol'),
(4, 4, 'покраска'),
(6, 1, 'укладка'),
(7, 5, 'укладка'),
(36, 6, 'укладка'),
(45, 55, '1'),
(48, 53, 'daf');

-- --------------------------------------------------------

--
-- Структура таблицы `staff`
--

CREATE TABLE `staff` (
  `id_staff` int(11) NOT NULL,
  `position` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `salary` int(11) NOT NULL,
  `data_person_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `staff`
--

INSERT INTO `staff` (`id_staff`, `position`, `salary`, `data_person_id`) VALUES
(1, 'парикмахер ', 25000, 3),
(2, 'парикмахер стажер', 15000, 1),
(3, 'парикмахер стажер', 15000, 7),
(4, 'парикмахер мастер', 35000, 6),
(5, 'парикмахер мастер', 40000, 13);

-- --------------------------------------------------------

--
-- Структура таблицы `visitors`
--

CREATE TABLE `visitors` (
  `id_visitors` int(11) NOT NULL,
  `date_visit_id` int(11) NOT NULL,
  `data_person_id` int(11) NOT NULL,
  `services_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `visitors`
--

INSERT INTO `visitors` (`id_visitors`, `date_visit_id`, `data_person_id`, `services_id`) VALUES
(1, 1, 8, 4),
(6, 3, 3, 3),
(8, 4, 15, 1),
(76, 14, 11, 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `data_person`
--
ALTER TABLE `data_person`
  ADD PRIMARY KEY (`id_data_person`);

--
-- Индексы таблицы `date_visit`
--
ALTER TABLE `date_visit`
  ADD PRIMARY KEY (`id_date_visit`),
  ADD KEY `visitors_id` (`visitors_id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id_services`),
  ADD UNIQUE KEY `date_visit_id` (`services_date_visit_id`);

--
-- Индексы таблицы `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`),
  ADD KEY `data_person_id` (`data_person_id`);

--
-- Индексы таблицы `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id_visitors`),
  ADD UNIQUE KEY `date_visit_id` (`date_visit_id`),
  ADD UNIQUE KEY `data_person_id` (`data_person_id`),
  ADD UNIQUE KEY `services_id` (`services_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `data_person`
--
ALTER TABLE `data_person`
  MODIFY `id_data_person` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT для таблицы `date_visit`
--
ALTER TABLE `date_visit`
  MODIFY `id_date_visit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id_services` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT для таблицы `staff`
--
ALTER TABLE `staff`
  MODIFY `id_staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id_visitors` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `date_visit`
--
ALTER TABLE `date_visit`
  ADD CONSTRAINT `date_visit_ibfk_1` FOREIGN KEY (`visitors_id`) REFERENCES `visitors` (`id_visitors`);

--
-- Ограничения внешнего ключа таблицы `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_3` FOREIGN KEY (`services_date_visit_id`) REFERENCES `date_visit` (`id_date_visit`);

--
-- Ограничения внешнего ключа таблицы `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`data_person_id`) REFERENCES `data_person` (`id_data_person`);

--
-- Ограничения внешнего ключа таблицы `visitors`
--
ALTER TABLE `visitors`
  ADD CONSTRAINT `visitors_ibfk_1` FOREIGN KEY (`data_person_id`) REFERENCES `data_person` (`id_data_person`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
