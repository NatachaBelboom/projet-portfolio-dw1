<?php /* Template Name: page projet */
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="">
        <video src="" class="project__video"><?php the_field('video'); ?></video>
        <div class="project__infos">
            <span class="project__date"><?php the_field('date'); ?></span>
            <span class="project__design">Design</span>
            <span class="project__front-end">Front-end</span>
        </div>
        <p class="project__description"><?php the_field('description'); ?></p>
        <div class="img-slider">
            <img src="" alt="">

        </div>
        <div class="project__button_container">
            <a href="http://portfolio.local/a-propos/" class="button button_site">Visiter le site
                <span></span>
            </a>
        </div>
        <div class="preview__next">
            <a href="#" class="project__preview"><img src="<?= dw_asset('img/next.svg') ?>" alt="icone precedent">Projet précedent</a>
            <a href="#" class="project__next">Projet suivant<img src="<?= dw_asset('img/next2.svg') ?>" alt="icone suivant"></a>
        </div>

    </main>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
