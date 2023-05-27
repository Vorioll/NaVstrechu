-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 25 2023 г., 08:13
-- Версия сервера: 8.0.24
-- Версия PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `laratry`
--

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `id_author` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `text` varchar(400) COLLATE utf8mb4_general_ci NOT NULL,
  `data` varchar(10) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `id_author`, `title`, `text`, `data`) VALUES
(10, '3', 'LvInA', 'V tAcHkE', '2023-05-25'),
(11, '4', 'Oh my god', 'I heard the holy ghost is GONE', '2023-05-25'),
(12, '2', 'Lemme say it', 'imma best here', '2023-05-25'),
(13, '1', 'Admin powers', 'are quite impressive', '2023-05-25'),
(14, '5', 'Are you okay?', 'Do not overwork', '2023-05-25'),
(15, '1', 'Lets say thanks', 'To our developer who worked overnight', '2023-05-25'),
(16, '1', 'He must be really tired now', ';-;', '2023-05-25');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `nickname` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `surname` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `avatar` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `nickname`, `name`, `surname`, `password`, `avatar`) VALUES
(1, 'Nick', 'Nik', 'Grey', '123', 'https://cdn.discordapp.com/attachments/907361813950259240/1108454079656632360/image.png'),
(2, 'Bring', 'Me to', 'Life', '123', 'https://steamuserimages-a.akamaihd.net/ugc/920305549844140907/E58C04F5D2E080B0F378B4F217EA053CCFC31728/?imw=512&amp;&amp;ima=fit&amp;impolicy=Letterbox&amp;imcolor=%23000000&amp;letterbox=false'),
(3, 'x_LEV_x', 'Tigr', 'Polosa', '123', 'https://r6z4d5g2.rocketcdn.me/wp-content/uploads/2017/05/lion-in_box.jpg'),
(4, 'Adam', 'Gregoriy', 'Cherry', '123', 'https://i.pinimg.com/564x/ca/07/91/ca0791b8410c4fdf4542e57429130018.jpg'),
(5, 'May', 'Ai', 'Hoshino', '123', 'https://i.ytimg.com/vi/mjElGwzZ4zo/maxresdefault.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
