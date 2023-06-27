-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 27 2023 г., 17:29
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `news`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `cost` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `type`, `size`, `cost`) VALUES
(1, 'Дрова', 'Береза', '800(диаметр)х600(длина)', '1600 р.'),
(2, 'Дрова', 'Осина', '700(диаметр)х600(длина)	', '1600 р.'),
(3, 'Пиловочник', 'Сосна', '180(диаметр)х6000(длина)', '3000 р.'),
(4, 'Пиловочник', 'Сосна', '360(диаметр)х6000(длина)', '6000 р.'),
(5, 'Пиловочник', 'Ель', '180(диаметр)х6000(длина)', '3000 р.'),
(6, 'Пиловочник', 'Ель', '360(диаметр)х6000(длина)', '6000 р.'),
(7, 'Пиловочник', 'Осина', '180(диаметр)х6000(длина)	', '2000 р.'),
(8, 'Пиловочник', 'Осина', '360(диаметр)х6000(длина)', '2000 р.'),
(9, 'Брус', 'Сосна', '180(диаметр)х6000(длина)', '4000 р.'),
(10, 'Брус', 'Сосна', '240(диаметр)х6000(длина)', '5500 р.'),
(11, 'Брус', 'Сосна', '	360(диаметр)х6000(длина)', '7000 р.'),
(12, 'Брус', 'Ель', '180(диаметр)х6000(длина)', '4000 р.'),
(13, 'Брус', 'Ель', '360(диаметр)х6000(длина)', '7000 р.');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `novosti` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `novosti`) VALUES
(20, 'Сложная ситуация с лесными пожарами сложилась в Алтайском и Хабаровском краях, Томской, Магаданской областях и Туве, сообщили «Известиям» в Рослесхозе. В семи регионах уже действует режим ЧС, еще в 58 местные власти запретили доступ в лес. Главными виновниками летних пожаров стали погодные условия — грозы и засушливые периоды, считают эксперты. Ущерб от нынешних пожаров может превысить весенний период, который в этом году считался особенно тяжелым, полагают они.'),
(21, 'Экстенсивная модель лесопользования, отсутствие должного лесовосстановления и практическое уничтожение института лесничих привели к массовому исчезновению высококачественных пород деревьев в российских лесах. Если тренд не изменится, то в будущем деревообрабатывающая отрасль может столкнуться с дефицитом сырья, из-за чего придется вырубать защитные и малонарушенные леса.'),
(22, 'В западной части полуострова Старицкого неподалеку от природного памятника Каменный Венец вспыхнул лесной пожар. Об этом в воскресенье, 18 июня, сообщил в своем Telegram-канале мэр Магадана Юрий Гришан.\r\n\r\n\r\nНа место возгорания выдвинулись три единицы пожарной техники и катер на воздушной подушке.\r\n\r\n«Место крайне труднодоступное. Решаем вопрос по привлечению вертолета для тушения пожара», — говорится в сообщении мэра.');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'saleus', 'saleus');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
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
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
