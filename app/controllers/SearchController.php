<?php

if(isset($_GET['query']) AND !empty($_GET['query']))
{
    $query = $_GET['query'];
}
else
{
    abort(400);
}

require MODELS . '/SearchModel.php';

$title = "УСЗН по Шелаболихинскому району. Результаты поиска";

$pageTitle = "Результаты поиска по запросу \"{$query}\":";

require VIEWS . '/search.blade.php';