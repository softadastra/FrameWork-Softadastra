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

        // Chargez les routes depuis le fichier web.php
        require_once dirname(dirname(__DIR__)) . '/routes/web.php';

        try {
            // Exécutez le routeur
            $router->run();
        } catch (NotFoundException $e) {
            // Gérez les exceptions NotFound ici
            $response = new \Softadastra\Http\Response('<html><body><h1>404 Not Found</h1><p>' . $e->getMessage() . '</p></body></html>', 404, ['Content-Type' => 'text/html']);
            $response->send();
        } catch (\Exception $e) {
            // Gérez les autres exceptions ici
            $response = new \Softadastra\Http\Response('<html><body><h1>500 Internal Server Error</h1><p>' . $e->getMessage() . '</p></body></html>', 500, ['Content-Type' => 'text/html']);
            $response->send();
        }
    }
}
