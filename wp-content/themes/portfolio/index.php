<?php get_header(); ?>
<main class="main">
    <div clas>
        <h2 class="" role="heading" aria-level="2">
            Mon projet le plus récent
        </h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore
            magna aliqua. Lectus mauris ultrices eros in cursus. Ut tortor pretium viverra suspendisse potenti nullam ac
            tortor vitae. Cras semper auctor neque vitae. Vel turpis nunc eget lorem.
        </p>
        <a href="#" class="button">Le découvrir</a>

    </div>
    <section class="presentation">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore
            magna aliqua.
        </p>
        <a href="http://portfolio.local/a-propos/" class="button">En savoir plus</a>
    </section>
    <section class="projects">
        <h2 class="projects__title">Mes projets</h2>
        <div class="project__container">
            <!-- Commencer la boucle des projets -->
            <?php
            $projects = new WP_Query([
                'post_type' => 'project',
                'posts_per_page' => 3,
                'orderby' => 'project_number',
                'order' => 'asc',
            ]);

            if ($projects->have_posts()) : while ($projects->have_posts()) : $projects->the_post(); ?>
                <article class="project">
                    <a href="<?php the_permalink(); ?>" class="project__link">
                        <span class="sro">En savoir plus sur "<?php the_title(); ?>"</span>
                    </a>
                    <div class="project__card">
                        <div class="project__content">
                            <p class="project__number"><?php the_field('project_number'); ?></p>
                            <h3 class="project__title"><?php the_title(); ?></h3>
                            <p class="project__date"><?php the_field('date'); ?></p>

                        </div>
                        <figure class="project__fig">
                            <img <?php dw_the_thumbnail_attributes(['medium', 'medium_large']); ?> class="project__img">
                        </figure>
                    </div>
                </article>
            <?php endwhile; else: ?>
                <p class="projects__empty">Je n'ai pas encore de projet pour le moment.</p>
            <?php endif; ?>
            <!-- Terminer la boucle des projets -->
        </div>
    </section>
</main>
<?php get_footer(); ?>
