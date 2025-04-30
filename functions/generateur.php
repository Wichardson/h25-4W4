<?php
/**
 * Génére une liste de sous-catégories
 * @param string $parent_slug Le slug de la catégorie parente
 */
function categories_liste($parent_slug){
    // echo "categorie_liste";
    // Récupérer la catégorie parente à partir de son slug
    $parent_category = get_category_by_slug($parent_slug);
    // Vérifier si la catégorie parente existe
    if ($parent_category) {
        $parent_id = $parent_category->term_id;
        // Récupérer les sous-catégories de "destination"
        $sous_categories = get_categories(array(
            'parent' => $parent_id, // Filtrer par le parent "destination"
            'hide_empty' => true, // Ne pas afficher les catégories vides
    ));

        // Vérifier s'il y a des sous-catégories
        if (!empty($sous_categories)) {
            echo '<ul class="categorie__ul">';
        foreach ($sous_categories as $categorie) {
            // Afficher le nom de chaque sous-catégorie
            echo '<li  data-category_id="' . esc_html($categorie->term_id) . '" class="categorie__ul__li">' . esc_html($categorie->name) . '</li>';
        }
        echo '</ul>';
        }
    }
}


/**
 * Génere une ou plusieurs vague svg
 */

function genere_vague($couleur){?>
    <!-- <svg style="top:200px;" class="vague" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="" fill-opacity="1" d="M0,256L120,218.7C240,181,480,107,720,101.3C960,96,1200,160,1320,192L1440,224L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg> -->
    <!-- <svg style="top:10px;" class="vague" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="<?= $couleur ?> fill-opacity="1" d="M0,96L120,106.7C240,117,480,139,720,133.3C960,128,1200,96,1320,80L1440,64L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg> -->
    <svg style="top:10px;" class="vague" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill= "pink" fill-opacity="1" d="M0,256L11.4,245.3C22.9,235,46,213,69,213.3C91.4,213,114,235,137,213.3C160,192,183,128,206,106.7C228.6,85,251,107,274,112C297.1,117,320,107,343,128C365.7,149,389,203,411,208C434.3,213,457,171,480,176C502.9,181,526,235,549,240C571.4,245,594,203,617,176C640,149,663,139,686,154.7C708.6,171,731,213,754,213.3C777.1,213,800,171,823,128C845.7,85,869,43,891,37.3C914.3,32,937,64,960,96C982.9,128,1006,160,1029,186.7C1051.4,213,1074,235,1097,208C1120,181,1143,107,1166,90.7C1188.6,75,1211,117,1234,122.7C1257.1,128,1280,96,1303,85.3C1325.7,75,1349,85,1371,117.3C1394.3,149,1417,203,1429,229.3L1440,256L1440,320L1428.6,320C1417.1,320,1394,320,1371,320C1348.6,320,1326,320,1303,320C1280,320,1257,320,1234,320C1211.4,320,1189,320,1166,320C1142.9,320,1120,320,1097,320C1074.3,320,1051,320,1029,320C1005.7,320,983,320,960,320C937.1,320,914,320,891,320C868.6,320,846,320,823,320C800,320,777,320,754,320C731.4,320,709,320,686,320C662.9,320,640,320,617,320C594.3,320,571,320,549,320C525.7,320,503,320,480,320C457.1,320,434,320,411,320C388.6,320,366,320,343,320C320,320,297,320,274,320C251.4,320,229,320,206,320C182.9,320,160,320,137,320C114.3,320,91,320,69,320C45.7,320,23,320,11,320L0,320Z"></path></svg>
<?php }

