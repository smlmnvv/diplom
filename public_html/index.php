<?php

require dirname(__DIR__) . '/config/consts.php';

require VENDOR . '/funcs.php';

require VENDOR . '/classes/Db.php';

$db_config = require CONFIG . '/db.php';

$db = new Db($db_config);

require ROUTES . '/router.php';