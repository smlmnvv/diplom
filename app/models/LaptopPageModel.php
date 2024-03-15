<?php

$id = $_GET['id'] ?? 0;

$device = $db -> query("SELECT * FROM `laptops` WHERE `id` = ? ", [$id]) -> findOrFail();

$service = $db -> query("SELECT * FROM `laptopServices` WHERE `laptopId` = ?", [$id]) -> findAll();