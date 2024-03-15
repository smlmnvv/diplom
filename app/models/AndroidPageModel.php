<?php

$id = $_GET['id'] ?? 0;

$device = $db -> query("SELECT * FROM `androides` WHERE `id` = ?", [$id]) -> findOrFail();

$service = $db -> query("SELECT * FROM `androidServices` WHERE `androidId` = ?", [$id]) -> findAll();