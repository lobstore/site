-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 05 2020 г., 22:23
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `library`
--

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `book_id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `author` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `img` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'no image',
  `s_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`book_id`, `title`, `author`, `description`, `img`, `s_id`) VALUES
(1, 'Bananya', 'Genry', 'BANANYA!!', '../images/goods/BANANYA.jpg', 1),
(2, 'Bananya', 'Genry', 'BANANYA!!', '../images/goods/BANANYA.jpg', 1),
(3, 'Bananya', 'Genry', 'BANANYA!!', '../images/goods/BANANYA.jpg', 1),
(4, 'Bananya', 'Genry', 'BANANYA!!', '../images/goods/BANANYA.jpg', 1),
(5, 'Star Wars I', 'Jordj', 'Star Wars', '../images/goods/StarWars_I.jpg', 5),
(6, 'Star Wars II', 'Jordj', 'Star Wars', '../images/goods/StarWars_II.jpg', 5),
(7, 'Harry Potter and the Philosopher\'s Stone', 'J.K Rowling', 'Harry', '../images/goods/Harry.jpg', 4),
(8, 'Star Wars III', 'Jordj', 'Star Wars', '../images/goods/StarWars_III.jpg', 5),
(9, 'Star Wars IV', 'Jordj', 'Star Wars', '../images/goods/StarWars_IV.jpg', 5),
(10, 'Star Wars V', 'Jordj', 'Star Wars', '../images/goods/StarWars_V.jpg', 5),
(11, 'Star Wars VI', 'Jordj', 'Star Wars', '../images/goods/StarWars_VI.jpg', 5),
(12, 'Star Wars VII', 'Jordj', 'Star Wars', '../images/goods/StarWars_VII.jpg', 5);

--
-- Триггеры `books`
--
DELIMITER $$
CREATE TRIGGER `books_BEFORE_DELETE` BEFORE DELETE ON `books` FOR EACH ROW BEGIN
delete from issuing where issuing.book_id = books.book_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Структура таблицы `issuing`
--

CREATE TABLE `issuing` (
  `book_id` int NOT NULL,
  `reader_id` int NOT NULL,
  `date_taken` datetime NOT NULL,
  `date_return` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `issuing`
--

INSERT INTO `issuing` (`book_id`, `reader_id`, `date_taken`, `date_return`) VALUES
(1, 1, '2020-11-16 00:00:00', '2020-11-17 00:00:00'),
(4, 2, '2020-10-16 00:00:00', '2020-11-17 00:00:00'),
(3, 1, '2020-10-15 00:00:00', '2020-11-17 00:00:00'),
(7, 3, '2020-12-05 00:00:00', '2020-11-03 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `readers`
--

CREATE TABLE `readers` (
  `reader_id` int NOT NULL,
  `name` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `subname` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `adres` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `phonenumber` varchar(12) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `readers`
--

INSERT INTO `readers` (`reader_id`, `name`, `subname`, `adres`, `phonenumber`) VALUES
(1, 'Genry', 'Kissenger', 'Kolomenskaya 12', '88005553535'),
(2, 'Jon', 'Hopeman', 'Kamenoostrovkaya 9', '87445213325'),
(3, 'Bonny', 'Surgovich', 'Bolshevikov 22', '89997773535');

-- --------------------------------------------------------

--
-- Структура таблицы `sections`
--

CREATE TABLE `sections` (
  `s_id` int NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sections`
--

INSERT INTO `sections` (`s_id`, `name`) VALUES
(1, 'Science'),
(2, 'Literature'),
(3, 'Fantastics'),
(4, 'Fantasy'),
(5, 'Sci-Fi'),
(6, 'Manual');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_users` int NOT NULL,
  `login` varchar(45) NOT NULL DEFAULT '',
  `password` varchar(45) NOT NULL DEFAULT '',
  `email` varchar(45) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `S_id_idx` (`s_id`);

--
-- Индексы таблицы `issuing`
--
ALTER TABLE `issuing`
  ADD KEY `b_id_idx` (`book_id`),
  ADD KEY `c_id_idx` (`reader_id`);

--
-- Индексы таблицы `readers`
--
ALTER TABLE `readers`
  ADD PRIMARY KEY (`reader_id`);

--
-- Индексы таблицы `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`s_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `readers`
--
ALTER TABLE `readers`
  MODIFY `reader_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `sections`
--
ALTER TABLE `sections`
  MODIFY `s_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `S_id` FOREIGN KEY (`s_id`) REFERENCES `sections` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `issuing`
--
ALTER TABLE `issuing`
  ADD CONSTRAINT `b_id` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `c_id` FOREIGN KEY (`reader_id`) REFERENCES `readers` (`reader_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
