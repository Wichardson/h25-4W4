<?php
/*
Template Name: Pays
*/
get_header();

?>
<section class="populaire">
    <div class="global">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h2><?php the_title(); ?></h2>
            <div><?php the_content() ?>
        <?php endwhile; endif; ?>
        <h2><?php the_field('titre_evenement'); ?></h2>
        <h2>Date de l'événement :</h2>
        <?php the_field('date_evenement'); ?></p>
        <h2>Description de l'événement</h2>
         <p><?php the_field('description_evenement'); ?></p>
        <!-- ////////////////////////////////////////////////  section rest-api -->
        <section class="pays">
            <?php categories_liste("pays") ?>
            <h2 class="pays__titre">Articles de la catégorie</h2>
            <div class="pays__list"></div>
        </section>
    </div>
</section>
<?php genere_vague($footer_couleur); ?>
<?php get_footer(); ?>