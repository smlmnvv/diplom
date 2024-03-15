<?php

require MODELS . '/LaptopPageModel.php';

$title = "2x2 - Ремонт Ноутбука {$device['model']}";

$pageTitle = "Ремонт Ноутбука {$device['model']}";

$formImg = "assets/img/pages/laptop/notebook.png";

$link = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) . '?' . parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);

require VIEWS . '/page.blade.php';