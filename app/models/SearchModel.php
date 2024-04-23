<?php

$results = $db->query("SELECT * FROM `news` WHERE `title` LIKE ? OR `description` LIKE ? OR `text` LIKE ?", ["%$query%", "%$query%", "%$query%"])->findAll();
