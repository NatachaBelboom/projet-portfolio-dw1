<?php /* Template Name: page projet */
get_header(); ?>
<main class="single-project">
    <section class="info__project">
        <h1 class="sro">Présentation du projet</h1>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="big-img__container">
            <img <?= dw_the_img_attributes(get_field('big-img'), ['thumbnail', 'medium', 'large']); ?> class="big-img">
        </div>
        <div class="single-project__infos">
            <div class="project__infos">
                <span class="project__date"><?php the_field('date'); ?></span>
                <span class="project__design">Design</span>
                <span class="project__front-end">Front-end</span>
            </div>
            <p class="project__description"><?php the_field('description'); ?></p>
        </div>
    </section>
    <section class="pictures__project">
        <h1 class="sro">Photos du projet</h1>
        <div class="img-slider">
            <img <?= dw_the_img_attributes(get_field('image1'), ['thumbnail', 'medium', 'large']); ?> id="image1">
            <img <?= dw_the_img_attributes(get_field('image2'), ['thumbnail', 'medium', 'large']); ?> id="image2">
        </div>
        <div class="project__button_container">
            <a href="<?php the_field('link'); ?>" target="_blank" class="button button_site">Visiter le site
                <span></span>
            </a>
        </div>
    </section>
    <?php endwhile;
    endif; ?>
</main>

<?php get_footer(); ?>
