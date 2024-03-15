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
                                <a href="<?= $link ?>" class="header__top-link text-white">
                                    <?= $pageTitle ?? "2x2 - Сервисный центр" ?>
                                </a>
                            </li>
                            <li class="header__top-li">
                                <a href="#" class="header__top-link text-white">
                                    Оставить заявку
                                </a>
                            </li>
                            <li class="header__top-li">
                                <a href="#" class="header__top-link text-success">
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