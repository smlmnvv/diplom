<?php

$newsOfDay = $db -> query("SELECT * FROM `news` ORDER BY id DESC LIMIT 1") -> find();