<?php

require MODELS . '/IphoneModel.php';

$title = "2x2 - Ремонт Iphone";

$pageTitle = "Ремонт Iphone";

$device = "iPhone";

$formImg = "assets/img/pages/iphone/apple.png";

$link = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

require VIEWS . '/iphone.blade.php';