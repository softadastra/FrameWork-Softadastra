<?php

namespace App\Controllers;

use Softadastra\Configurations\Database;

class Controller
{
    public function view(string $path, array $params = null)
    {
        ob_start();
        $path = str_replace('.', DIRECTORY_SEPARATOR, $path);
        require VIEWS . $path . '.php';
        $content = ob_get_clean();
        require VIEWS . 'base.php';
    }
}
