    <?php get_header(); ?>
    <h1>-------- FRONT-PAGE.PHP ----------</h1>
    <section class="hero">
        <div class="hero__contenu global">
            <h1 class="hero__titre">Voyager Autrement avec Mondo Voyages</h1>
            <p class="hero__description">
                Découvrez des destinations uniques et inoubliables avec Mondo Voyages. Nous vous offrons des expériences authentiques, eds paysages à couper le souffle et des adventures sur mesure. Partez à la découverte du mone avec nous et créez des souvenirs impérissables.
            </p>
            <p class="hero__courriel">
                <a href="#">info@cmaisonneuve.qc.ca</a>
            </p>
            <p class="hero__adresse">
                5800 Sherbrooke-est - Montréal (Québec) H1X 2A2
            </p>
            <button>s'inscrire</button>
            <div class="hero__icone">
                <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=instagram&color=000000" width="20" height="20">
            </div>
        </div>
    </section>

    <section class="detail">
        <p>Nom</p>
        <form class="detail__inscription">
            <input type="search" placeholder="Écriver votre nom" class="detail__input"> 
        </form>
        <p>Prénom</p>
        <form class="detail__inscription">
            <input type="search" placeholder="Écriver votre prénom" class="detail__input">
        </form>
        <p>Courriel</p>
        <form class="detail__inscription">
            <input type="search" placeholder="Écriver votre courriel" class="detail__input">
        </form>
        <p>Téléphone</p>
        <form class="detail__inscription">
            <input type="search" placeholder="Écriver votre téléphone" class="detail__input">
        </form>
        <button>s'inscrire</button>
    </section>

    <section class="galerie">
        <div class="galerie global">
            <figure class="galerie__figure">
                <img src="" alt="" class="galerie__img">
            </figure>
            <figure class="galerie__figure">
                <img src="" alt="" class="galerie__img">
            </figure>
            <figure class="galerie__figure">
                <img src="" alt="" class="galerie__img">
            </figure>
            <figure class="galerie__figure">
                <img src="" alt="" class="galerie__img">
            </figure>
            <figure class="galerie__figure">
                <img src="" alt="" class="galerie__img">
            </figure>
        </div>
    </section>
    <section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); 
            if (in_category("galerie"))  {
                the_content() ;
            } else {    ?>
                <?php get_template_part( 'gabarits/carte' ); ?>
            <?php } ?>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <footer></footer>
    <?php get_footer(); ?>
</body>
</html>