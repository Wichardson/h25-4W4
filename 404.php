    <?php get_header(); ?>
    <section class="populaire">
        <div class="erreur">
           <h1>Erreur 404</h1>

           <img src="https://img.freepik.com/premium-photo/there-is-pink-airplane-flying-sky-with-clouds-generative-ai_900775-32820.jpg" alt="">

           <h2>La page que vous rechercher ses déja envoler</h2>
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