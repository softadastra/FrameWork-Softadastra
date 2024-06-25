<?php

namespace App\Repository;

use Softadastra\Core\Model\QueryModel;

class ArticleRepository extends QueryModel
{
    public function __construct()
    {
        parent::__construct('tbl_articles');
    }
}
