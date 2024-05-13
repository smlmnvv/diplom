-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 14 2024 г., 00:07
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `uszn_shelab`
--

-- --------------------------------------------------------

--
-- Структура таблицы `documents`
--

CREATE TABLE `documents` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `documents`
--

INSERT INTO `documents` (`id`, `name`, `slug`) VALUES
(1, 'Положение об обеспечении безопасности персональных данных при их обработке в информационных системах персональных данных КГКУ УСЗН по Шелаболихинскому району', 'assets/documents/polog-shelab-info.pdf'),
(2, 'Решения учредителя о назначении руководителя от 08.06.2020', 'assets/documents/личные+документы+Саютина.pdf'),
(3, 'Свидетельство о гос. регистрации от 01.04.2019', 'assets/documents/ЕГРЮЛ+выписка.pdf'),
(4, 'Решения учредителя о создании гос.(муниц.) учреждения от 22.02.2019', 'assets/documents/приказы.tif'),
(5, 'Положение об УСЗН по Шелаболихинскому району №1', 'assets/documents/Положение+об++УСЗН+по+Шелаболихинскому+району+1.jpg'),
(6, 'Положение об УСЗН по Шелаболихинскому району №2', 'assets/documents/Положение+об++УСЗН+по+Шелаболихинскому+району+2.jpg'),
(7, 'Положение об УСЗН по Шелаболихинскому району №3', 'assets/documents/Положение+об++УСЗН+по+Шелаболихинскому+району+3.jpg'),
(8, 'Положение об УСЗН по Шелаболихинскому району №4', 'assets/documents/Положение+об++УСЗН+по+Шелаболихинскому+району+4.jpg'),
(9, 'Положение об УСЗН по Шелаболихинскому району №5', 'assets/documents/Положение+об++УСЗН+по+Шелаболихинскому+району+5.jpg'),
(10, 'Положение об УСЗН по Шелаболихинскому району №6', 'assets/documents/Положение+об++УСЗН+по+Шелаболихинскому+району+6.jpg'),
(11, 'Положение об УСЗН по Шелаболихинскому району №7', 'assets/documents/Положение+об++УСЗН+по+Шелаболихинскому+району+7.jpg'),
(12, 'Положение об УСЗН по Шелаболихинскому району №8', 'assets/documents/Положение+об++УСЗН+по+Шелаболихинскому+району+8.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int NOT NULL,
  `fio` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `message` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `fio`, `email`, `message`) VALUES
(1, 'Vitae sapiente archi', 'gyrehega@mailinator.com', 'Et culpa ea aut quo'),
(2, 'Doloremque quo error', 'wuzoc@mailinator.com', 'Non deserunt ut haru'),
(3, 'Doloremque quo error', 'wuzoc@mailinator.com', 'Non deserunt ut haru'),
(4, 'Inventore reprehende', 'lyjecanuzy@mailinator.com', 'Fugit in voluptate '),
(6, 'Est sed quibusdam ni', 'javihatug@mailinator.com', 'Iste voluptatem irur'),
(7, 'Repellendus Dolorem', 'sunovokad@mailinator.com', 'Id quod neque molest'),
(8, 'Cupidatat natus sed ', 'pyderaw@mailinator.com', 'Odio dolor officiis ');

-- --------------------------------------------------------

--
-- Структура таблицы `links`
--

CREATE TABLE `links` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `links`
--

INSERT INTO `links` (`id`, `title`, `link`) VALUES
(1, 'Если родился первый ребенок', 'https://www.aksp.ru/work/activity/soc_vipl/semi_s_detmi/pervyj_rebenok/'),
(4, 'Если родился третий ребенок', 'https://www.aksp.ru/work/activity/soc_vipl/semi_s_detmi/tretij_rebenok/'),
(6, 'Льгота на оплату ЖКХ многодетным', 'https://www.aksp.ru/public_reception/konsult/sub/53438/'),
(8, 'Как оформить субсидию на оплату коммунальных', 'https://www.aksp.ru/public_reception/konsult/sub/12604/'),
(10, 'Национальный проект \"Демография\"', 'https://www.aksp.ru/nac_proekt/'),
(12, 'Социальный контракт', 'https://www.aksp.ru/work/activity/soc_kontrakt.php'),
(14, 'Социальная догазификация', 'https://www.aksp.ru/gosudarstvennye-uslugi/veterany-boevykh-deystviy-chleny-ikh-semey/sotsialnaya-dogazifikatsiya-/'),
(16, 'Прожиточный минимум', 'https://www.aksp.ru/prozhitochnyy-minimum-v-altayskom-krae.php');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `text`, `img`, `date`) VALUES
(1, 'Какой у вас уровень трудовой грамотности?', 'Проверить поможет «Трудовой зачет» - просветительская акция, позволяющая оценить знания в сфере труда и занятости, повысить свои профессиональные навыки и понять, как вести себя на рынке труда.', '<p>Проверить поможет «Трудовой зачет» - просветительская акция, позволяющая оценить знания в сфере труда и занятости, повысить свои профессиональные навыки и понять, как вести себя на рынке труда.</p><p>Акция «Трудовой зачет» вошла в ТОП-100 идей Форума «Сильные идеи для нового времени» и поддерживается Агентством стратегических инициатив как часть лидерского проекта «Новая модель управления профессиональной ориентацией граждан».</p>', 'assets/img/news/newsImg.png', '2024-04-12'),
(2, '«Никто не забыт, ничто не забыто!»', 'В преддверии 9 Мая «Родные-Любимые. Алтайский край» запускает акцию «Окна Победы»', '<p>В преддверии 9 Мая «Родные-Любимые. Алтайский край» запускает акцию «Окна Победы», чтобы сохранить память о событиях нашей истории и почтить подвиги героев Великой Отечественной войны.</p><p>Украшайте окна своих домов и делитесь фотографиями в своих социальных сетях с хештегом #ОкнаПобеды.</p>', 'assets/img/news/okna.webp', '2024-04-23'),
(3, 'Все на субботник!', 'В современном мире, где время летит стремительным потоком, а множество дел не дает забыть нам о том, что мы все являемся частью общества, важно не забывать о своих корнях, об истории и о заботе о том месте, где мы живем.', '<p>В современном мире, где время летит стремительным потоком, а множество дел не дает забыть нам о том, что мы все являемся частью общества, важно не забывать о своих корнях, об истории и о заботе о том месте, где мы живем.</p><p>Такие события, как 100-летие нашего района, День Победы и Праздник Весны и Труда, напоминают нам о важности сохранения культурного наследия, о памяти, о подвигах предков. Одним из способов выразить наше уважение к прошлому и заботу о будущем является участие в общественных работах по благоустройству и санитарной очистке территории.</p><p>Когда мы выходим на улицу в теплый весенний день и видим цветущие деревья, чистые и ухоженные улицы, наше сердце наполняется гордостью за то, что мы часть этого прекрасного мира. Участие в субботнике по благоустройству не только приносит пользу окружающей среде, но и позволяет нам ощутить себя частью общего дела, в котором каждый вкладывает кусочек своей заботы и внимания.</p><p>Забота о территории, где мы проживаем, – это ещё и проявление гражданской ответственности. Именно поэтому так важно проводить общественные мероприятия, направленные на создание комфорта, сохранение зеленых насаждений, очистку от мусора.</p><p>27 апреля 2024 года станет особенным днем для жителей Шелаболихинского района Алтайского края. Это будет день, когда каждый сможет ощутить себя частью великого дела – дела создания красивого, уютного и чистого пространства для всех. Это будет наш вклад в память о прошлом и подарок будущим поколениям – мирное, зеленое и ухоженное окружение.\r\n</p>', 'assets/img/news/subotnik.webp', '2024-04-23'),
(4, 'В Шелаболихинском районе ежемесячную компенсацию расходов на оплату ЖКУ получают 362 сельских педагога', 'В управлении социальной защиты населения по Шелаболихинскому району получателями компенсации расходов на оплату жилого помещения, отопления и освещения являются 362 сельских педагога.', '<p>Сельским педагогам Алтайского края в виде меры социальной поддержки предоставляется компенсация расходов на оплату жилого помещения, отопления и освещения педагогическим работникам, работающим в краевых и муниципальных организациях, осуществляющих образовательную деятельность, и проживающим в сельских населенных пунктах, рабочих поселках (поселках городского типа) Алтайского края.</p><p>В управлении социальной защиты населения по Шелаболихинскому району получателями компенсации расходов на оплату жилого помещения, отопления и освещения являются 362 сельских педагога.</p><p>Среди получателей компенсации – Ирина Петровна Голикова, проживающая в с. Шелаболиха. Ирина Петровна работает в детском саду «Золотая рыбка», воспитателем группы «Непоседы».</p>', 'assets/img/news/news4.webp', '2024-05-02');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `links`
--
ALTER TABLE `links`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
