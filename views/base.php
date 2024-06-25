<?php

use App\Meta\ManagerHeadPage;
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="<?= CSS_PATH ?>allbootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= CSS_PATH ?>font-awesome.min.css">
    <title><?= ManagerHeadPage::getTitle() ?></title>
</head>

<body>

    <?= $content ?>
</body>

</html>