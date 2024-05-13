<?php

session_start();

require_once MODELS . '/FeedbackModel.php';

$title = "УСЗН по Шелаболихинскому району. Обратная связь.";

$pageTitle = "Обратная связь";


require_once VIEWS . '/feedback.blade.php';