<?php

namespace App\Repository;

use Softadastra\Core\Model\QueryModel;
use App\Entity\ArticleEntity;
use PDO;

class ArticleRepository extends QueryModel
{
    public function __construct()
    {
        parent::__construct('tbl_articles');
    }

    public function findAll(): array
    {
        $articlesData = parent::findAll();
        $articleEntities = [];
        foreach ($articlesData as $articleData) {
            $articleEntity = new ArticleEntity();
            $articleEntity->setId($articleData->attributes['id']);
            $articleEntity->setTitle($articleData->attributes['title']);
            $articleEntity->setContent($articleData->attributes['content']);

            $articleEntities[] = $articleEntity;
        }
        return $articleEntities;
    }
}
