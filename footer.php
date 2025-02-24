<footer>
    <div class="piedpage global">
        <section class="piedpage_s1">
            <div class="piedpage_s1_externe">
                <?php wp_nav_menu(array(
                    "menu" => "externe",
                    "container" => "nav",
                )); ?>
            </div>
            <div class="piedpage_s1_adresse">
                <div class="piedpage_s1_adresse_coord">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo ea quam corporis harum corrupti voluptates, accusantium autem. Fugiat itaque quisquam cumque ratione facilis voluptates repellendus, molestiae maiores incidunt, minus commodi.
                </div>
                <div class="piedpage_s1_adresse_recherche">
                <?php get_search_form(); ?>
                </div>
            </div>
            <div class="piedpage_s1_description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates delectus aut sed debitis quia fugit error labore nihil, aliquam ullam, numquam veritatis, eveniet explicabo rem! Sit exercitationem nobis ipsam vel.
            </div>
        </section>
        <section class="piedpage_s2"></section>
        <section class="piedpage_s3"></section>
    </div>
</footer>
<?php wp_footer() ?>