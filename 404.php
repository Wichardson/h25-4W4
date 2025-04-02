    <?php get_header(); ?>
    <section class="populaire">
        <div class="erreur">
           <h1>Oops, vous avez échoué sur l'île 404 !</h1>

           <img src="https://th.bing.com/th/id/R.f14c44cd733f68cc8a746e5ed4e34b3e?rik=H%2ftFLFwWavTS2A&riu=http%3a%2f%2fmillion-wallpapers.ru%2fwallpapers%2f3%2f12%2f13848965881444563455%2fostrovok-palmy-more.jpg&ehk=DDrWxIxxj1x43Lv7KO3CfC7wVy0vuH46OANF5v4TOuk%3d&risl=&pid=ImgRaw&r=0" alt="">

           <h6>Pas de panique, cher membre explorateur ! Vous avez dérivé un peu trop loin des destinations de rêve que notre club a soigneusement sélectionnées pour vous. Reprenez votre périple en cliquant sur 'Accueil' pour découvrir à nouveau nos voyages d'exception !</h6>
           <?php $home = home_url() ?>

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