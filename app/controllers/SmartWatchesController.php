<?php

require MODELS . '/SmartWatchModel.php';

$title = "2x2 - Ремонт Смарт-Часов";

$pageTitle = "Ремонт Смарт-Часов";

$formImg = "assets/img/pages/watches/smart.webp";

$link = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

require VIEWS . '/smart-watch.blade.php';