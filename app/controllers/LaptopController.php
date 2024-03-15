<?php

require MODELS . '/LaptopModel.php';

$title = "2x2 - Ремонт Ноутбуков";

$pageTitle = "Ремонт Ноутбука";

$formImg = "assets/img/pages/laptop/notebook.png";

$link = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

require VIEWS . '/laptop.blade.php';