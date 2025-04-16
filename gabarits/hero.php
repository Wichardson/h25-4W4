<?php  
    $hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
    for ($k=0; $k<3; $k++){
    $hero_background[$k] = get_theme_mod('hero_background_'. $k, '');
    }
     ?>

        <div class="hero__carrousel 1" style="background-image: url(<?php echo $hero_background[0] ?>)"></div>
        <div class="hero__carrousel 2" style="background-image: url(<?php echo $hero_background[1] ?>)"></div>
        <div class="hero__carrousel 3" style="background-image: url(<?php echo $hero_background[2] ?>)"></div>
        <div class="hero__contenu global">
        

            
            <section class="hero" style="background-image: url(<?php echo $hero_background ?>)" >
                <div class="hero__contenu global">
                    <h1 class="hero__titre"><?php bloginfo('name'); ?></h1>
                    <p class="hero__description">
                    <?php bloginfo('description'); ?>
                    </p>
                    <p class="hero__courriel">
                    <?php bloginfo('admin_email'); ?>
                    </p>
                    <p class="hero__adresse">
                        5800 Sherbrooke-est - Montréal (Québec) H1X 2A2
                    </p>
                    <p class="hero__auteur">Auteur : <?php  echo $hero_auteur ?></p>
                    <div class="hero__icone">
                        <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
                        <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="20" height="20">
                        <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=000000" width="20" height="20">
                        <img src="https://s2.svgbox.net/social.svg?ic=snapchat&color=000000" width="20" height="20">
                    </div>


            <input class="hero__radio__input" data-id_radio="0" type="radio" name="carrousel" checked="checked">
            <input class="hero__radio__input" data-id_radio="1" type="radio" name="carrousel">
            <input class="hero__radio__input" data-id_radio="2" type="radio" name="carrousel">


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