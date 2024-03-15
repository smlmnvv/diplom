<?php

$id = $_GET['id'];

$device = $db -> query("SELECT * FROM `watches` WHERE `id` = ?", [$id]) -> findOrFail();

$service = $db -> query("SELECT * FROM `watchServices` WHERE `watchId` = ?", [$id]) -> findAll();