<?php

namespace App\Controllers;

use App\Repository\ArticleRepository;
use Exception;

class ArticleController extends Controller
{
    private $path = 'shop.';
    private $error = 'errors.';

    public function home()
    {
        try {
            $articleRepository = new ArticleRepository();
            $articles = $articleRepository->getAll();

            return $this->view($this->path . 'home', compact('articles'));
        } catch (\Exception $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
    }

    public function show()
    {
        try {
            die("show");
            return $this->view($this->path . 'home', compact('articles'));
        } catch (Exception $e) {
            return $this->view($this->error . 'shop');
        }
    }
}
