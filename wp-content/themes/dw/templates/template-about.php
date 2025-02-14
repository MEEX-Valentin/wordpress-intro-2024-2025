<?php /* Template Name: Page "À propos" */ ?>

<?php get_header(); ?>

<aside>
    <h2>À propos de moi</h2>
</aside>
        <?php
        // On ouvre la boucle (the loop), la structure de contrôle
        // de contenu propre à wordpress:
        if (have_posts()) : while (have_posts()) : the_post(); ?>

            <h2><?= get_the_title(); ?></h2>

            <div><?= get_the_content(); ?></div>

        <?php
            // on ferme "la boucle" (the loop):
        endwhile;
        else: ?>
            <p>La page est vide.</p>
        <?php endif; ?>
<?php get_footer(); ?>