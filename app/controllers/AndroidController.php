<?php

$title = "2x2 - Ремонт Android";

$pageTitle = "Ремонт Android";

$formImg = "assets/img/pages/android/android.png";

$link = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

require MODELS . '/AndroidModel.php';

require VIEWS . '/android.blade.php';