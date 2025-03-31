    <?php get_header(); ?>
    <section class="populaire">
        <div class="erreur">
           <h1>Oops, vous avez échoué sur l'île 404 !</h1>

           <img src="images/ilepalmier.jpg" alt="">

           <h6>Pas de panique, cher membre explorateur ! Vous avez dérivé un peu trop loin des destinations de rêve que notre club a soigneusement sélectionnées pour vous. Reprenez votre périple en cliquant sur 'Accueil' pour découvrir à nouveau nos voyages d'exception !</h6>
           <div class="entete__navigation">
                <?php wp_nav_menu(array(
                    'menu' => '404',
                    'container' => 'nav',
                    'container_class' => 'entete__menu'
                )); ?>
               
            </div> <!-- fin entete__navigation  -->
        </div>
    </section>
    <?php get_footer(); ?>
   
</body>
</html>