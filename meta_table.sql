-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Хост: localhost:8889
-- Время создания: Окт 27 2017 г., 12:42
-- Версия сервера: 5.5.42
-- Версия PHP: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- База данных: `jmc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `meta`
--

CREATE TABLE `meta` (
  `id` int(10) unsigned NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `meta`
--

INSERT INTO `meta` (`id`, `page_name`, `title`, `keywords`, `description`) VALUES
(1, 'Главная страница', '1', '1', '1'),
(2, 'Направления', '1', '1', '1'),
(3, 'Диагностика', '1', '1', '1'),
(4, 'Наш коллектив', '1', '1', '1'),
(5, 'Блог', '1', '1', '1'),
(6, 'Функциональная Диагностика', '1', '1', '1'),
(7, 'Лабораторная Диагностика', '1', '1', '1'),
(8, 'Администрация', '1', '1', '1'),
(9, 'УЗИ', '1', '1', '1'),
(10, 'О нас', '1', '1', '1'),
(11, 'Равин', '1', '1', '1'),
(12, 'Статьи', '1', '1', '1'),
(13, 'Оборудование', '1', '1', '1');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `meta`
--
ALTER TABLE `meta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `meta`
--
ALTER TABLE `meta`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
