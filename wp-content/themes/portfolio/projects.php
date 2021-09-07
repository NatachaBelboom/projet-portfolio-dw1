<?php /* Template Name: Page des projets */ ?>
<?php get_header(); ?>

<main>
    <section class="projects">
        <h1 class="projects__title sro" role="heading" aria-level="1">Mes projets</h1>
        <div class="project__container">
            <?php
            $projects = new WP_Query([
                'post_type' => 'project',
                'posts_per_page' => 3,
                'orderBy' => 'project_number',
                'order' => 'asc',
            ]);

            if ($projects->have_posts()) : while ($projects->have_posts()) : $projects->the_post(); ?>
                <article class="project">
                    <div class="project__content">
                        <p class="project__number"><?php the_field('project_number'); ?></p>
                    </div>
                    <div class="project__fig">
                        <div class="project__info">
                            <h2 class="project__title" role="heading" aria-level="2"><?php the_title(); ?></h2>
                            <p class="project__date"><?php the_field('date'); ?></p>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="project__link">
                            <span class="sro">En savoir plus sur "<?php the_title(); ?>"</span>
                        </a>
                        <img <?= dw_the_thumbnail_attributes(['thumbnail', 'medium', 'large']); ?> class="project__img">
                    </div>
                </article>
            <?php endwhile; else: ?>
                <p class="projects__empty">Je n'ai pas encore de projet pour le moment.</p>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer();?>
