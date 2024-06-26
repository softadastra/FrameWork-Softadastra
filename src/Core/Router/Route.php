<?php

namespace Softadastra\Core\Router;

use Softadastra\Configurations\Database;
use Softadastra\Exception\InvalidArticleIdException;

class Route
{
    public $path;
    public $action;
    public $matches;

    public function __construct($path, $action)
    {
        $this->path = trim($path, '/');
        $this->action = $action;
    }

    public function matches(string $url)
    {
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $path = preg_replace('#:([\w]+)#', '([^/]+)', $this->path);
        $pathToMatch = "#^$path$#";
        if (preg_match($pathToMatch, $url, $matches)) {
            $this->matches = array_map(function ($match) {
                return filter_var($match);
            }, $matches);
            return true;
        } else {
            return false;
        }
    }

    public function execute()
    {
        $params = explode('@', $this->action);
        $controller = new $params[0](new Database(DB_NAME, DB_HOST, DB_USER, DB_PWD));
        $method = $params[1];
        try {
            if (isset($this->matches[1])) {
                $id = $this->matches[1];
                if (!filter_var($id, FILTER_VALIDATE_INT)) {
                    throw new InvalidArticleIdException("Invalid article ID.");
                }
                $id = intval($id);
                return $controller->$method($id);
            } else {
                return $controller->$method();
            }
        } catch (InvalidArticleIdException $e) {
            $this->renderErrorPage($e->getMessage());
        } catch (\Exception $e) {
            $this->renderErrorPage("An unexpected error occurred.");
        }
    }

    private function renderErrorPage()
    {
        require dirname(dirname(dirname(__DIR__))) . '/views/errors/articleId.php';
    }
}
