<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <link rel="stylesheet" href="<?= dw_asset('css/theme.css') ?>">
    <?php wp_head(); ?>
</head>
<body>
    <header class="top">
        <hr class="top__line">
        <hr class="top__line">
        <h1><?php the_title(); ?></h1>
        <nav class="top__menu menu" role="navigation">
            <h2 class="sro">Navigation principale</h2>

            <?php foreach(dw_menu('main') as $link): ?>
                <a href="<?= $link->url; ?>" class="menu__link <?= dw_bem('menu__link', $link->modifiers); ?>"><?= $link->label; ?></a>
            <?php endforeach; ?>
        </nav>
    </header>
