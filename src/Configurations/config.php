<?php

$databaseUrl = $_ENV['DATABASE_URL'];
$databaseConfig = parse_url($databaseUrl);
define('DB_NAME', ltrim($databaseConfig['path'], '/'));
define('DB_HOST', $databaseConfig['host']);
define('DB_USER', $databaseConfig['user']);
define('DB_PWD', isset($databaseConfig['pass']) ? $databaseConfig['pass'] : '');

define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);
define("BASE_URL", "");
define("ADMIN_URL", BASE_URL . "admin" . "/");
