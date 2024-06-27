<?php
$articles = $params['articles'] ?? [];
?>
<h1>Home page</h1>
<ul>
    <?php foreach ($articles as $article) : ?>
        <pre>
            <?php print_r($article); ?>
        </pre>
    <?php endforeach ?>
</ul>