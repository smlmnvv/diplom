<?php

$id = (int)$_GET['id'] ?? 0;

require_once MODELS . '/PostModel.php';

$title = "УСЗН по Шелаболихинскому району. Новости";

$pageTitle = $post['title'];

require_once VIEWS . '/post.blade.php';