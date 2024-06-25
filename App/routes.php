<?php
define('CSS_PATH', 'assets/css/');
define('ICON_PATH', 'icons/');
$router->get('/', 'App\Controllers\\ArticleController@home');
$router->get('/article', 'Softadastra\Controllers\\ArticleController@show');
return $router;
