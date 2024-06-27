<?php

namespace App\Controllers;

use App\Repository\ArticleRepository;
use Softadastra\Http\Response;
use Exception;

class ArticleController extends Controller
{
    private $error = 'errors.';

    public function home()
    {
        try {
            $articleRepository = new ArticleRepository();
            $articles = $articleRepository->getAll();

            $content = $this->view('home.index', compact('articles'));

            return new Response($content, 200, ['Content-Type' => 'text/html']);
        } catch (\Exception $e) {
            $errorMessage = 'Erreur : ' . $e->getMessage();
            return new Response($errorMessage, 500, ['Content-Type' => 'text/plain']);
        }
    }

    public function show()
    {
        try {
            ob_start();
            include VIEWS . 'show.php';
            $content = ob_get_clean();
            return new Response($content, 200, ['Content-Type' => 'text/html']);
        } catch (Exception $e) {
            $errorContent = $this->view($this->error . 'shop');
            return new Response($errorContent, 500, ['Content-Type' => 'text/html']);
        }
    }
}
