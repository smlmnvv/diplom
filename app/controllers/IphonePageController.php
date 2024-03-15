<?php

require MODELS . '/IphonePageModel.php';

$title = "2x2 - Ремонт {$device['model']}";

$pageTitle = "Ремонт {$device['model']}";

$formImg = "assets/img/pages/iphone/apple.png";

$link = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) . '?' . parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);

require VIEWS . '/page.blade.php';
