<?php

$newsOfDay = $db -> query("SELECT * FROM `news` ORDER BY id DESC LIMIT 1") -> find();

$links = $db -> query("SELECT * FROM `links`") -> findAll();