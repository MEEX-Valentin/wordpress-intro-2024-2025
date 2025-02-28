<?php get_header(); ?>

    <style type="text/css">
        .travel {
        }
        .travel__header {
            height: 400px;
            width: 100%;
            position: relative;
        }
        .travel__back,
        .travel__back:before,
        .travel__head {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
        }
        .travel__back {
            z-index: 0;
            margin: 0;
            padding: 0;
        }
        .travel__back:before {
            content: '';
            display: block;
            background: rgb(100,20,40);
            opacity: 0.75;
        }
        .travel__cover {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .travel__head {
            z-index: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
        }
        .travel__container {
            display: flex;
            flex-direction: row-reverse;
            justify-content: space-between;
        }
        .travel__ingredients {
            width: 320px;
            padding: 20px;
            background: #f1f1f1;
            display: flex;
            flex-direction: column-reverse;
        }
        .travel__fig {
            display: block;
            position: relative;
            width: 100%;
            height: 0;
            padding-top: 100%;
            margin: 0;
        }
        .travel__img {
            display: block;
            position: absolute;
            top:0;
            left:0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>

<?php
// On ouvre "la boucle" (The Loop), la structure de contrôle
// de contenu propre à Wordpress:
if(have_posts()): while(have_posts()): the_post(); ?>
    <div class="travel">
        <header class="travel__header">
            <div class="travel__head">
                <h2 class="travel__title"><?= get_the_title(); ?></h2>
                <p class="travel__excerpt"><?= get_the_excerpt(); ?></p>
            </div>
            <figure class="travel__back">
                <?= get_the_post_thumbnail(size: 'travel-header', attr: ['class' => 'travel__cover']); ?>
            </figure>
        </header>

        <div class="travel__container">
            <aside class="travel__ingredients">
                <div>
                    <h3>Aperçu</h3>
                    <p>À compléter</p>
                </div>
                <figure class="travel__fig">
                    <?= get_the_post_thumbnail(size: 'travel-side', attr: ['class' => 'travel__img']); ?>
                </figure>
            </aside>

            <section class="travel__steps">
                <h3>Récit de voyage</h3>
                <div><?= get_the_content(); ?></div>
            </section>
        </div>
    </div>

<?php
    // On ferme "la boucle" (The Loop):
endwhile; else: ?>
    <p>Ce voyage n'existe pas.</p>
<?php endif; ?>
<?php get_footer(); ?>