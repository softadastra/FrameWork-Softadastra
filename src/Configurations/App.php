<?php

namespace Softadastra\Configurations;

use Softadastra\Core\Router\Router;
use Softadastra\Exception\NotFoundException;
use Dotenv\Dotenv;

class App
{
    public static function run()
    {
        self::loadEnv();
        self::configure();
        self::startRouter();
    }

    private static function loadEnv()
    {
        $envFilePath = dirname(dirname(__DIR__)) . '/.env';

        if (!file_exists($envFilePath)) {
            throw new \Exception("Le fichier .env n'a pas été trouvé à l'emplacement : $envFilePath");
        }

        $dotenv = Dotenv::createImmutable(dirname(dirname(__DIR__)) . '/');
        $dotenv->load();
    }

    private static function configure()
    {
        require_once dirname(__DIR__) . '/Configurations/config.php';
    }

    private static function startRouter()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : '/';
        $router = new Router($url);
        $router = require_once dirname(dirname(__DIR__)) . '/App/routes.php';

        try {
            $router->run();
        } catch (NotFoundException $e) {
            return $e->error404();
        }
    }
}
