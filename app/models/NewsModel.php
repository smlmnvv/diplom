<?php

$news = $db -> query("SELECT * FROM `news` ORDER BY id DESC") -> findAll();