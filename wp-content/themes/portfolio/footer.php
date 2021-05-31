    <footer class="end">
        <nav class="end__menu menu" role="navigation">
            <hr>
            <div class="social_media">
                <h2 class="sro">Mes réseaux</h2>
                <?php foreach(dw_menu('media') as $link): ?>
                    <a href="<?= $link->url; ?>" target="_blank" class="menu__link menu__link__end <?= $link->classes; ?>"><?= $link->label; ?></a>
                <?php endforeach; ?>
            </div>
            <div class="navigation_link">
                <h2 class="sro">Liens utiles</h2>
                <?php foreach(dw_menu('footer') as $link): ?>
                    <a href="<?= $link->url; ?>" class="menu__link "><?= $link->label; ?></a>
                <?php endforeach; ?>
            </div>
        </nav>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>