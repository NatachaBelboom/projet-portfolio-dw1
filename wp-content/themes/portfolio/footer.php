    <footer class="end">
        <nav class="end__menu menu">
            <h2 class="sro">Mes réseaux</h2>
            <?php foreach(dw_menu('media') as $link): ?>
                <a href="<?= $link->url; ?>" target="_blank" class="menu__link"><?= $link->label; ?></a>
            <?php endforeach; ?>

            <h2 class="sro">Liens utiles</h2>
            <?php foreach(dw_menu('footer') as $link): ?>
                <a href="<?= $link->url; ?>" class="menu__link"><?= $link->label; ?></a>
            <?php endforeach; ?>
        </nav>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>