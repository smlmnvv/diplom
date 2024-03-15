<?php

$id = $_GET['id'] ?? 0;

$device = $db -> query("SELECT * FROM `iphones` WHERE `id` = ?", [$id])->findOrFail();

$service = $db -> query("SELECT * FROM `iphoneServices` WHERE `iphoneId` = ?", [$id])->findAll();