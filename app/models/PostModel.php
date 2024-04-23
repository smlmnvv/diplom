<?php

$post = $db -> query("SELECT * FROM `news` WHERE `id` = ?", [$id])->findOrFail();