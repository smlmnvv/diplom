<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?= PATH . '/' ?>">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/fonts.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="shortcut icon" href="assets/img/icon.jpeg" type="image/x-icon">
    <title><?= $title ?? '2x2' ?></title>
</head>
<body>

    <div class="wrapper">

<header class="header">
            <div class="container">
                <div class="header__top d-flex justify-content-between align-items-center">
                    <div class="header__top-logo">
                        <a href="/">
                            <img class="logo" src="assets/img/logo.png" alt="logo">
                        </a>
                    </div>
                    <nav class="header__top-nav">
                        <ul class="header__top-ul d-flex">
                            <li class="header__top-li">
                                <a href="#advantages" class="header__top-link text-white">
                                    Преимущества нашего сервиса
                                </a>
                            </li>
                            <li class="header__top-li">
                                <a href="#categories" class="header__top-link text-white">
                                    Категории
                                </a>
                            </li>
                            <li class="header__top-li">
                                <a href="#form" class="header__top-link text-white">
                                    Оставить заявку
                                </a>
                            </li>
                            <li class="header__top-li">
                                <a href="#contacts" class="header__top-link text-white">
                                    Контакты
                                </a>
                            </li>
                            <li class="header__top-li">
                                <a target="_blank" href="https://api.whatsapp.com/send?phone=79831837969&text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9%20%D0%B4%D0%B5%D0%BD%D1%8C%2C%20%D1%8F%20%D0%BF%D0%BE%20%D0%BF%D0%BE%D0%B2%D0%BE%D0%B4%D1%83%20%D1%80%D0%B5%D0%BC%D0%BE%D0%BD%D1%82%D0%B0%20%D1%8D%D0%BB%D0%B5%D0%BA%D1%82%D1%80%D0%BE%D0%BD%D0%B8%D0%BA%D0%B8." class="header__top-link text-success">
                                    Whatsapp
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header__bottom">
                    <nav class="header__bottom-nav">
                        <ul class="header__bottom-ul d-flex justify-content-between">
                            <li class="header__bottom-li">
                                <a href="/iphone" class="header__bottom-link text-white">
                                    Ремонт Iphone
                                </a>
                            </li>
                            <li class="header__bottom-li">
                                <a href="/android" class="header__bottom-link text-white">
                                    Ремонт Android
                                </a>
                            </li>
                            <li class="header__bottom-li">
                                <a href="/laptop" class="header__bottom-link text-white">
                                    Ремонт Ноутбука
                                </a>
                            </li>
                            <li class="header__bottom-li">
                                <a href="/smart-watch" class="header__bottom-link text-white">
                                    Ремонт Смарт-часов
                                </a>
                            </li>
                            <li class="header__bottom-li">
                                <a href="/water" class="header__bottom-link text-white">
                                    Ремонт После Попадания Влаги
                                </a>
                            </li>
                            <li class="header__bottom-li">
                                <a href="/recovery" class="header__bottom-link text-white">
                                    Восстановление Системы
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>