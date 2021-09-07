<?php /* Template Name: Page contact */
get_header(); ?>
<main class="contact">
    <p class="contact__me">
        Posez-moi des questions ou travaillons ensemble
    </p>
    <?= do_shortcode('[contact-form-7 id="64" title="Contact"]') ?>
</main>
<?php get_footer(); ?>
