<?php /* Template Name: Page contact */
get_header(); ?>
<main class="contact">
    <p class="contact__me">
        Posez-moi des questions ou travaillons ensemble
    </p>
    <!-- <form action="" method="post" class="contact_form">
        <div class="name">
            <label for="name" class="sro">Nom</label>
            <input type="text" id="name" name="user_name" placeholder="Nom">
        </div>
        <div class="mail">
            <label for="mail" class="sro">Adresse mail</label>
            <input type="email" id="mail" name="user_mail" placeholder="Adresse mail">
        </div>
        <div class="msg">
            <label for="msg" class="sro">Message</label>
            <textarea id="msg" name="user_message" placeholder="Message"></textarea>
        </div>
        <button class="button" type="submit">
            <span></span>
            Envoyer
        </button>
    </form>-->
    <?= do_shortcode('[contact-form-7 id="64" title="Contact"]') ?>

</main>
<?php get_footer(); ?>
