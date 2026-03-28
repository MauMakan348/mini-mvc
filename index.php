<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/config/config.php';
require_once BASE_PATH . '/app/Core/Router.php';
require_once BASE_PATH . '/app/Core/Controller.php';
require_once BASE_PATH . '/app/Helpers/images_url_helper.php';
require_once BASE_PATH . '/app/Routes/web.php';

Router::run();
