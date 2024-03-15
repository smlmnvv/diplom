<?php

require MODELS . '/AndroidPageModel.php';

$title = "2x2 - Ремонт {$device['model']}";

$pageTitle = "Ремонт {$device['model']}";

$formImg = "assets/img/pages/android/android.png";

$link = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) . '?' . parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);

require VIEWS . '/page.blade.php';