    <footer class="end">
        <nav class="end__menu menu" role="navigation">
            <hr class="line-end">
            <div class="social_media">
                <h1 class="sro" role="heading" aria-level="1">Mes réseaux</h1>
                <?php foreach(dw_menu('media') as $link): ?>
                    <a href="<?= $link->url; ?>" target="_blank" class="menu__link menu__link__end <?= $link->classes; ?>"><?= $link->label; ?></a>
                <?php endforeach; ?>
            </div>
            <div class="navigation_link">
                <h1 class="sro" role="heading" aria-level="1">Liens utiles</h1>
                <?php foreach(dw_menu('footer') as $link): ?>
                    <a href="<?= $link->url; ?>" class="menu__link <?= dw_bem('menu__link', $link->modifiers); ?>"><?= $link->label; ?></a>
                <?php endforeach; ?>
            </div>
        </nav>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>