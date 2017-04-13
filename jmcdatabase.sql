-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 13 2017 г., 16:51
-- Версия сервера: 5.5.50
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `jmcdatabase`
--

-- --------------------------------------------------------

--
-- Структура таблицы `administrators`
--

CREATE TABLE IF NOT EXISTS `administrators` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `specialty` varchar(255) DEFAULT NULL,
  `link_foto` text,
  `description` text
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `administrators`
--

INSERT INTO `administrators` (`id`, `name`, `specialty`, `link_foto`, `description`) VALUES
(1, 'Пастернак Анна Викторовна', 'Администратор', '21.jpg', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum '),
(2, 'Кавурова Виктория Владиславовна', 'Администратор', '37.jpg', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum '),
(3, 'Кондратьева Екатерина Петровна', 'Администратор', '39.jpg', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum '),
(5, 'Страх Елена Валерьевна', 'Директор', '13.jpg', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum '),
(6, 'Будлянская Елена Дмитриевна', 'Бухгалтер', '15.jpg', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum '),
(7, 'Родинский Александр Георгиевич', 'Председатель правления', '18.jpg', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ');

-- --------------------------------------------------------

--
-- Структура таблицы `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(10) unsigned NOT NULL,
  `link_foto` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `full_description` text NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `directions`
--

CREATE TABLE IF NOT EXISTS `directions` (
  `id` int(10) unsigned NOT NULL,
  `name_of_direction` varchar(255) NOT NULL,
  `main_id` int(10) unsigned NOT NULL,
  `link_foto_direction` text NOT NULL,
  `description_direction` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `directions`
--

INSERT INTO `directions` (`id`, `name_of_direction`, `main_id`, `link_foto_direction`, `description_direction`) VALUES
(1, 'Гинекология', 1, 'dr.jpg', 'Гинеколог - врач который знаком каждой женщине. Гинеколог занимается не только лечением, но и профилактированием различных заболеваний связанных с женским организмом. Консультация врача гинеколога важный этап в жизни каждой девушки и женщины. Гинеколога рекомендуется посещать два раза в год, при условии, что нет никаких жалоб, симптомов заболевания! При наличии каких либо жалоб, возникновение боли, патологических выделений и т.д., к гинекологу стоит обратиться в срочном порядке. При детальном сборе жалоб, осмотре пациента, доктор подберет необходимые методы исследования (анализ крови, узи, бак.посев, и т.д.). Чем раньше пациент обратится к врачу, тем быстрее будет поставлен диагноз, и будет назначен курс лечения. \nОчень многим женщинам приходится сталкиваться с нежелательной беременностью, и в этом случае, гинеколог сможет помочь решить эту проблему разными способами, в зависимости от срока обращения пациентки! Вопрос контрацепции в жизни женщин, так же имеет большое значение. Подобрать правильный метод контрацепции, без помощи гинеколога, будет сложно, а самое главное он может быть не эффективным, что приведет к не желательным последствиям!'),
(2, 'Хирургия', 1, 'dr1.jpg', 'Врач дерматолог, занимается диагностикой и лечением заболеваний кожи, волос, ногтей. При первых признаках заболеваний обращайтесь за медицинской помощью к дерматологу. Во время приема у врача дерматолога, производится подробный сбор жалоб, анамнез заболевания, осмотр кожных покровов и патологических проявлений, проведение дерматологического скрининга!\n\nНа базе клиники проводятся дополнительные лабораторные исследования (весь спектр исследований крови, микроскопия и посевы на патогенные грибы, исследование на демодекоз, исследования на ЗППП, TORCH инфекции, исследования на чесоточный клещ, венерические заболевания) и аппаратные методы исследования (дерматоскопия, исследование кожи при помощи лампы Вуда, сиаскопия, УЗИ кожных образований, рн-метрия кожи). При необходимости, для консультации привлекаются смежные специалисты (гастро-энтеролог, трихолог, миколог, невролог, эндокринолог и др.)'),
(3, 'Педиатрия', 1, '', ''),
(4, 'Терапия', 1, '', ''),
(5, 'Диетология', 1, '', ''),
(6, 'Травматология', 1, '', ''),
(7, 'Мануальная терапия', 1, '', ''),
(8, 'Массаж', 1, '', ''),
(9, 'Урология', 1, '', ''),
(10, 'Дерматология', 1, '', ''),
(11, 'Косметология', 1, '', ''),
(12, 'Гастроэнтерология', 1, '', ''),
(13, 'Эндокринология', 1, '', ''),
(14, 'Неврология', 1, '', ''),
(15, 'Офтальмология', 1, '', ''),
(16, 'Пульмонология', 1, '', ''),
(17, 'Оторинолярингология', 1, '', ''),
(18, 'Детская неврология', 1, '', ''),
(19, 'Кардиология', 1, '', ''),
(20, 'Проктология', 1, '', ''),
(21, 'Ревматология', 1, '', ''),
(22, 'Сосудистая хирургия', 1, '', ''),
(23, 'Профилактика', 1, '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `directions_fd`
--

CREATE TABLE IF NOT EXISTS `directions_fd` (
  `id` int(10) unsigned NOT NULL,
  `dir_id` int(10) unsigned NOT NULL,
  `fd_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `doctors`
--

CREATE TABLE IF NOT EXISTS `doctors` (
  `id` int(10) unsigned NOT NULL,
  `name_of_doctor` varchar(255) NOT NULL,
  `link_foto_doctor` text NOT NULL,
  `expirience_of_work` varchar(255) NOT NULL,
  `specialty_of_doctor` text NOT NULL,
  `science_degree` text NOT NULL,
  `short_descr` varchar(255) NOT NULL,
  `full_descr` text NOT NULL,
  `direction_id` int(11) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `doctors`
--

INSERT INTO `doctors` (`id`, `name_of_doctor`, `link_foto_doctor`, `expirience_of_work`, `specialty_of_doctor`, `science_degree`, `short_descr`, `full_descr`, `direction_id`) VALUES
(1, 'Нороха Игорь Иванович', '1.jpg', '2 года', 'Дерматовенеролог', 'Врач высшей категории', 'очень хороший доктор', 'очень очень хороший доктор', 10),
(2, 'Малосилко Таисия Григорьевна', '2.jpg', '3 года', 'Ревматолог', 'Врач высшей категории', 'прекрасный доктор', 'прекрасный доктор очень прекрасный доктор', 21),
(3, 'Аноним', '3.jpg', '2 года', 'Не понятно', 'врач высшей категории', 'Хороший доктор', 'Хороший хороший доктор', 23),
(4, 'Провалов Артем Евгеньевич', '4.jpg', '11 лет', 'Сосудистый хирург', 'врач второй категории', 'Хороший доктор', 'Хороший хороший доктор', 22),
(5, 'Городецкий Сергей Георгиевич', '5.jpg', '17 лет', 'Врач УЗИ диагностики', 'Врач высшей категории', 'Хороший доктор', 'Хороший хороший доктор', 23),
(6, 'Терещенко Иван Викторович', '7.jpg', '17 лет', 'Окулист', 'врач первой категории', 'Хороший доктор', 'Хороший хороший доктор', 15),
(7, 'Зубко Ирина Николаевна', '8.jpg', '10 лет', 'Кардиолог', 'врач высшей категории', 'хороший специалист', 'Очень хороший специалист', 19),
(8, 'Ягмур Борис Эммануилович', '9.jpg', '50 лет', 'Уролог', 'врач высшей категории', 'Хороший специалист', 'Опытный хороший специалист', 9),
(9, 'Ягмур Светлана Самойловна', '10.jpg', '50 лет', 'Гастроэнтеролог', 'Врач высшей категории', 'Хороший специалист', 'Очень хороший специалист', 12),
(10, 'Земляная Елена Николаевна', '11.jpg', '11 лет', 'ЛОР', 'Врач высшей категории', 'Хороший специалист', 'Очень хороший специалист', 17),
(11, 'Кривошей Владимир Викторович', '12.jpg', '10 лет', 'Гастроэнтеролог', 'Врач высшей категории', 'Хороший специалист', 'Очень хороший специалист', 12),
(12, 'Страх Елена Валериевна', '13.jpg', '7 лет', 'Терапевт', 'Врач высшей категории', 'Хороший доктор', 'Очень хороший доктор', 4),
(15, 'Прохорова Яна Владимировна', '16.jpg', '15 лет', 'Терапевт', 'Врач первой категории', 'Хороший доктор', 'Очень хороший доктор', 4),
(16, 'Родинская Галина Александровна', '17.jpg', '8 лет', 'Хирург', 'Врач высшей категории', 'Хороший доктор', 'Очень хороший доктор', 2),
(18, 'Атанова Яна Олеговна', '19.jpg', '8 лет', 'Эндокринолог', 'Врач высшей категории', 'Хороший доктор', 'Очень хороший доктор', 13),
(22, 'Шумихина Марина Евгеньевна', '23.jpg', '13 лет', 'Врач-лаборант', 'Врач высшей категории', 'Хороший доктор', 'Очень хороший доктор', 23),
(23, 'Агафонова Елена Александровна', '24.jpg', '32 года', 'Педиатр', 'Врач высшей категории, КМН', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ', 3),
(24, 'Хамонина Лилия Леонидовна', '25.jpg', '15 лет', 'ЛОР', 'Врач 1 категории', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ', 17),
(25, 'Алексеенко Анастасия Анатольевна', '35.jpg', '10 лет', 'Врач УЗИ диагностики', 'Врач 2 категории', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ', 23),
(30, 'Гинеколог Гинеколог Гинеколог', '3.jpg', '5', 'Гинеколог', 'Врач высшей категории', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ', 1),
(31, 'Диетолог Диетолог Диетолог', '3.jpg', '5', 'Диетолог', 'Врач высшей категории', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ', 5),
(32, 'Травматолог Травматолог Травматолог', '3.jpg', '5', 'Травматолог', 'Врач высшей категории', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ', 6),
(33, 'Мануальный терапевт', '3.jpg', '5', 'Мануальный терапевт', 'Врач высшей категории', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ', 7),
(34, 'Массажист массажист Массажист', '3.jpg', '5', 'Массажист', 'Врач высшей категории', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ', 8),
(35, 'косметолог Косметолог Косметолог', '3.jpg', '5', 'Косметолог', 'Врач высшей категории', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ', 11),
(36, 'Невролог Невролог Невролог', '3.jpg', '5', 'Невролог', 'Врач высшей категории', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ', 14),
(37, 'Пульмонолог Пульмонолог Пульмонолог', '3.jpg', '5', 'Пульмонолог', 'Врач высшей категории', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ', 16),
(38, 'Детский невролог Детский невролог Детский невролог', '3.jpg', '5', 'Детский невролог', 'Врач высшей категории', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ', 18),
(39, 'Проктолог Проктолог Проктолог', '3.jpg', '5', 'Проктолог', 'Врач высшей категории', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ', 20);

-- --------------------------------------------------------

--
-- Структура таблицы `functional_diagnostic`
--

CREATE TABLE IF NOT EXISTS `functional_diagnostic` (
  `id` int(10) unsigned NOT NULL,
  `name_of_fd` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `functional_diagnostic`
--

INSERT INTO `functional_diagnostic` (`id`, `name_of_fd`) VALUES
(1, 'Аппаратные исследования'),
(2, 'Ультразвуковые исследования взрослых на УЗ аппарате LOGIQ F 8'),
(3, 'ЛОР процедуры'),
(4, 'Манипуляции'),
(5, 'Дерматологические процедуры'),
(6, 'Урологические процедуры'),
(7, 'Офтальмологические процедуры'),
(8, 'Гинекологические процедуры');

-- --------------------------------------------------------

--
-- Структура таблицы `laboratory`
--

CREATE TABLE IF NOT EXISTS `laboratory` (
  `id` int(10) unsigned NOT NULL,
  `name_group_method` varchar(50) NOT NULL,
  `direction_id` int(10) unsigned NOT NULL,
  `price_if_alone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `main_pages`
--

CREATE TABLE IF NOT EXISTS `main_pages` (
  `id` int(10) unsigned NOT NULL,
  `name_of_main_page` text NOT NULL,
  `foto_main` text NOT NULL,
  `descr_main` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `main_pages`
--

INSERT INTO `main_pages` (`id`, `name_of_main_page`, `foto_main`, `descr_main`) VALUES
(1, 'Консультации', 'dr.jpg', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum ');

-- --------------------------------------------------------

--
-- Структура таблицы `methods`
--

CREATE TABLE IF NOT EXISTS `methods` (
  `id` int(10) unsigned NOT NULL,
  `name_of_method` varchar(255) NOT NULL,
  `count_of_test` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `who_take_biomaterial` varchar(255) NOT NULL,
  `lab_id` int(10) unsigned NOT NULL,
  `biomaterial` varchar(255) NOT NULL,
  `time_to_wait` varchar(255) NOT NULL,
  `result` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `methods_fd`
--

CREATE TABLE IF NOT EXISTS `methods_fd` (
  `id` int(10) unsigned NOT NULL,
  `name_of_method_fd` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `func_diagn_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `methods_fd`
--

INSERT INTO `methods_fd` (`id`, `name_of_method_fd`, `price`, `func_diagn_id`) VALUES
(1, 'Электрокардиография (ЭКГ)', 110, 1),
(2, 'Спирография', 165, 1),
(3, 'Спирография с пробой', 220, 1),
(4, 'Видеогастроскопия', 700, 1),
(5, 'Колоноскопия', 1000, 1),
(6, 'УЗИ щитовидной железы', 220, 2),
(7, 'УЗИ молочных (грудных) желез', 275, 2),
(8, 'УЗИ лимфоузлов шейных, подчелюстных и околоушные', 200, 2),
(9, 'УЗИ лимфоузлов подмышечных, надключиных и подключичных', 200, 2),
(10, 'УЗИ лимфоузлов бедренных и паховых', 200, 2),
(11, 'УЗИ полный комплекс лимфоузлов', 400, 2),
(12, 'УЗИ брюшного отдела аорты', 165, 2),
(13, 'УЗИ печени, желчного пузыря', 210, 2),
(14, 'УЗИ ОБП или гастрокомплекс (печени, желчного пузыря, поджелудочной железы, селезенки)', 275, 2),
(15, 'УЗИ почек', 220, 2),
(16, 'УЗИ мочевого пузыря', 110, 2),
(17, 'УЗИ почек и мочевого пузыря', 240, 2),
(18, 'УЗИ надпочечников с почками', 240, 2),
(19, 'УЗИ мочевыделительной системы (почки, надпочечники, мочевой пузырь)', 275, 2),
(20, 'УЗИ органов мужской половой системы конвексным датчиком (предстательная железа + остаточная моча)', 220, 2),
(21, 'УЗИ органов мужской половой системы  (ТРУЗИ)', 275, 2),
(22, 'УЗИ органов мужской половой системы двумя датчиками', 440, 2),
(23, 'УЗИ органов малого таза конвексным датчиком', 220, 2),
(24, 'УЗИ органов малого таза трансвагинальным датчиком', 275, 2),
(25, 'УЗИ беременных', 385, 2),
(26, 'Фолликулометрия', 165, 2),
(27, 'УЗИ мошонки', 165, 2),
(28, 'УЗИ cлюнных желёз', 165, 2),
(29, 'УЗИ суставов (пара)', 220, 2),
(30, 'УЗИ сосудов одной конечности', 165, 2),
(31, 'УЗИ сосудов двух нижних конечностей', 220, 2),
(32, 'ЭХО сердца', 330, 2),
(33, 'МАГ (сосуды шеи)', 275, 2),
(34, 'МАГ  + экстракраниальные сосуды (сосуды шеи и головы)', 375, 2),
(35, 'УЗИ мягких тканей', 165, 2),
(36, 'Смазывание слизистой оболочки ротоглотки лекарственными средствами (стоимость препаратов не включена)', 55, 3),
(37, 'Удаление серных пробок', 120, 3),
(38, 'Промывание миндалин (стоимость препаратов не включена)', 120, 3),
(39, 'Промывание придаточных пазух носа (кукушка)', 120, 3),
(40, 'Осмотр уха, носа, зева используя оптику (осмотр с фото и видеозаписью)', 50, 3),
(41, 'Лазерное лечение носа, горла', 50, 3),
(42, 'Лазерное лечение ушей', 50, 3),
(43, 'Кварцевание носа, зева', 50, 3),
(44, 'Внутривенное струйное вливание (медикаменты пациента)', 55, 4),
(45, 'Внутривенное капельное введение препаратов (медикаменты пациента)', 110, 4),
(46, 'Внутривенное капельное введение препаратов (медикаменты пациента) на дому', 165, 4),
(47, 'Инъекция внутримышечная', 30, 4),
(48, 'Инъекция подкожная', 30, 4),
(49, 'Забор венозной крови на анализ                                             Взятие капиллярной крови (из пальца)', 30, 4),
(50, 'Взятие образцов для микробиологических исследований', 20, 4),
(51, 'Измерение артериального давления ', 20, 4),
(52, 'Экстренная медицинская помощь при травмах', 100, 4),
(53, 'Вызов на дом медицинской сестры (транспортом клиента, без стоимости манипуляции)', 165, 4),
(54, 'Сеанс мануальной терапии', 300, 4),
(55, 'Сеанс мануальной терапии повторный', 250, 4),
(56, 'Паравертебральная блокада (стоимость мед-тов не включена) ', 440, 4),
(57, 'В\\суставная блокада (стоимость мед-тов не включена)', 440, 4),
(58, 'Обработка ран', 165, 4),
(59, 'Дерматоскопия', 165, 5),
(60, 'Инстилляция лекарственных средств в мочевой пузырь', 75, 6),
(61, 'Катетеризация мочевого пузыря у мужчин', 75, 6),
(62, 'Катетеризация мочевого пузыря у женщин', 55, 6),
(63, 'Пневмотонометрия (измерение внутриглазного давления)', 70, 7),
(64, 'Биомикроскопия (осмотр на щелевой лампе)', 70, 7),
(65, 'Введение внутриматочной спирали (контроль УЗИ) без стоимости спирали', 350, 8),
(66, 'Удаление внутриматочной спирали (контроль УЗИ)', 250, 8),
(67, 'Соскоб из цервикального канала                                             Взятие мазка на флору                                                                Взятие мазка на цитологию', 55, 8),
(68, 'Введение влагалищных тампонов с лекарственными веществами', 75, 8),
(69, 'Назначение неспецифического лечения вагинитов', 275, 8),
(70, 'Назначение специфического лечения вагинитов', 400, 8),
(71, 'Фолликулометрия', 165, 8),
(72, 'Биопсия', 800, 8),
(73, 'Радиоволновая коагуляция I сложности', 1500, 8),
(74, 'Радиоволновая коагуляция II сложности', 1800, 8),
(75, 'Кольпоскопия', 200, 8),
(76, 'Видеогистероскопия', 6000, 8);

-- --------------------------------------------------------

--
-- Структура таблицы `nurses`
--

CREATE TABLE IF NOT EXISTS `nurses` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `specialty` varchar(255) DEFAULT NULL,
  `link_foto` text,
  `description` text
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `nurses`
--

INSERT INTO `nurses` (`id`, `name`, `specialty`, `link_foto`, `description`) VALUES
(1, 'Шостак Виктория Владимировна', 'Старшая сестра', '14.jpg', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum '),
(2, 'Нестеренко Елизавета Петровна', 'Медицинская сестра', '20.jpg', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum '),
(3, 'Винник Лариса Павловна', 'Медицинская сестра', '22.jpg', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum '),
(4, 'Андриянова Ольга Владимировна', 'Младшая медицинская сестра', '36.jpg', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum '),
(5, 'Васькина Наталья Анатольевна', 'Операционная медицинская сестра', '38.jpg', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ');

-- --------------------------------------------------------

--
-- Структура таблицы `specialty_price`
--

CREATE TABLE IF NOT EXISTS `specialty_price` (
  `id` int(10) unsigned NOT NULL,
  `specialty` varchar(255) NOT NULL,
  `price_first_time` int(7) DEFAULT NULL,
  `price_after` int(7) DEFAULT NULL,
  `consulting_at_home` int(7) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `specialty_price`
--

INSERT INTO `specialty_price` (`id`, `specialty`, `price_first_time`, `price_after`, `consulting_at_home`) VALUES
(1, 'Терапевт', 275, 220, NULL),
(2, 'Вызов терапевта на дом', NULL, NULL, 550),
(3, 'Кардиолог', 275, 220, NULL),
(4, 'Кардиолог, профессор', 500, 400, NULL),
(5, 'Педиатр,  канд. мед. наук, доцент', 330, 265, NULL),
(6, 'Вызов педиатра на дом', NULL, NULL, 550),
(7, 'Детский невролог', 275, 220, NULL),
(8, 'Вызов на дом детского невролога', NULL, NULL, 550),
(9, 'Детский офтальмолог', 275, 220, NULL),
(10, 'Детский хирург,  канд. мед. наук, доцент ', 330, 265, NULL),
(11, 'Эндокринолог', 275, 220, NULL),
(12, 'Гастроэнтеролог', 275, 220, NULL),
(13, 'Гастроэнтеролог,  канд. мед. наук', 330, 265, NULL),
(14, 'Проктолог', 330, 240, NULL),
(15, 'Гинеколог', 275, 220, NULL),
(16, 'Гинеколог, канд. мед. наук', 330, 240, NULL),
(17, 'Гинеколог-хирург высшей категории', 275, 265, NULL),
(18, 'Маммолог-онколог', 300, 240, NULL),
(19, 'Психиатр', 300, 240, NULL),
(20, 'Психолог', 300, 240, NULL),
(21, 'Психотерапевт', 300, 240, NULL),
(22, 'Невропатолог', 275, 220, NULL),
(23, 'Реабилитолог', 300, 250, NULL),
(24, 'Вертебролог-массажист', 300, 250, NULL),
(25, 'Оториноларинголог', 275, 220, NULL),
(26, 'Уролог', 275, 220, NULL),
(27, 'Уролог, доцент мед. наук, профессор', 330, 265, NULL),
(28, 'Хирург, канд. мед. наук', 330, 265, NULL),
(29, 'Ангиохирург (сосудистый хирург)', 275, 220, NULL),
(30, 'Травматолог- ортопед ', 275, 220, NULL),
(31, 'Ревматолог', 275, 220, NULL),
(32, 'Дерматолог', 275, 220, NULL),
(33, 'Окулист', 275, 220, NULL),
(34, 'Пульмонолог', 275, 220, NULL),
(35, 'Диетолог', 275, 220, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `directions`
--
ALTER TABLE `directions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `main_id` (`main_id`);

--
-- Индексы таблицы `directions_fd`
--
ALTER TABLE `directions_fd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dir_id` (`dir_id`),
  ADD KEY `fd_id` (`fd_id`);

--
-- Индексы таблицы `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `direction_id` (`direction_id`);

--
-- Индексы таблицы `functional_diagnostic`
--
ALTER TABLE `functional_diagnostic`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `laboratory`
--
ALTER TABLE `laboratory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `direction_id` (`direction_id`);

--
-- Индексы таблицы `main_pages`
--
ALTER TABLE `main_pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `methods`
--
ALTER TABLE `methods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lab_id` (`lab_id`);

--
-- Индексы таблицы `methods_fd`
--
ALTER TABLE `methods_fd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `func_diagn_id` (`func_diagn_id`);

--
-- Индексы таблицы `nurses`
--
ALTER TABLE `nurses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `specialty_price`
--
ALTER TABLE `specialty_price`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `administrators`
--
ALTER TABLE `administrators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `directions`
--
ALTER TABLE `directions`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT для таблицы `directions_fd`
--
ALTER TABLE `directions_fd`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT для таблицы `functional_diagnostic`
--
ALTER TABLE `functional_diagnostic`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `laboratory`
--
ALTER TABLE `laboratory`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `main_pages`
--
ALTER TABLE `main_pages`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `methods`
--
ALTER TABLE `methods`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `methods_fd`
--
ALTER TABLE `methods_fd`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT для таблицы `nurses`
--
ALTER TABLE `nurses`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `specialty_price`
--
ALTER TABLE `specialty_price`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `directions`
--
ALTER TABLE `directions`
  ADD CONSTRAINT `directions_ibfk_1` FOREIGN KEY (`main_id`) REFERENCES `main_pages` (`id`);

--
-- Ограничения внешнего ключа таблицы `directions_fd`
--
ALTER TABLE `directions_fd`
  ADD CONSTRAINT `directions_fd_ibfk_1` FOREIGN KEY (`dir_id`) REFERENCES `directions` (`id`),
  ADD CONSTRAINT `directions_fd_ibfk_2` FOREIGN KEY (`fd_id`) REFERENCES `functional_diagnostic` (`id`);

--
-- Ограничения внешнего ключа таблицы `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `doctors_ibfk_2` FOREIGN KEY (`direction_id`) REFERENCES `directions` (`id`);

--
-- Ограничения внешнего ключа таблицы `laboratory`
--
ALTER TABLE `laboratory`
  ADD CONSTRAINT `laboratory_ibfk_1` FOREIGN KEY (`direction_id`) REFERENCES `directions` (`id`);

--
-- Ограничения внешнего ключа таблицы `methods`
--
ALTER TABLE `methods`
  ADD CONSTRAINT `methods_ibfk_2` FOREIGN KEY (`lab_id`) REFERENCES `laboratory` (`id`);

--
-- Ограничения внешнего ключа таблицы `methods_fd`
--
ALTER TABLE `methods_fd`
  ADD CONSTRAINT `methods_fd_ibfk_2` FOREIGN KEY (`func_diagn_id`) REFERENCES `functional_diagnostic` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
