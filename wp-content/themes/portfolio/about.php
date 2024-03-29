<?php /* Template Name: Page à propos */
get_header(); ?>

<main class="about">
    <section class="description__container">
        <h1 class="sro">A propos de Natacha Belboom</h1>
        <img src="<?= dw_asset('img/nb.jpg') ?>" alt="Photo de natacha belboom">
        <div>
            <p class="description__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua. Lectus mauris ultrices eros in cursus. Ut tortor pretium viverra suspendisse potenti nullam ac
                tortor vitae. Cras semper auctor neque vitae. Vel turpis nunc eget lorem. Nibh praesent tristique magna sit amet
                purus gravida quis blandit. Mi quis hendrerit dolor magna eget est. Quis lectus nulla at volutpat. Mattis
                molestie a iaculis at erat pellentesque. Risus feugiat in ante metus dictum. Elementum integer enim neque
                volutpat ac tincidunt vitae semper. Rutrum tellus pellentesque eu tincidunt tortor. Arcu vitae elementum
                curabitur vitae nunc sed velit.
            </p>
            <a href="http://natacha-belboom.be/projets/" class="button">Voir mes projets
                <span></span>
            </a>
        </div>
    </section>

    <div class="creation">
        <h2 class="creation__title" role="heading" aria-level="2">Créons ensemble</h2>
        <a href="http://natacha-belboom.be/contact/" class="button button-create">Envoyez-moi un mail
            <span></span>
        </a>
    </div>

</main>
<?php get_footer(); ?>
