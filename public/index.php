<?php

use App\Config\ErrorLog;
use App\Config\ResponseHttp;

require dirname(__DIR__) . '/vendor/autoload.php';

ErrorLog::activateErroLog();

require dirname(__DIR__) . '/src/Routes/router.php';