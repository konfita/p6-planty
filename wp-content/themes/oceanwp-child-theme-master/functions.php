<?php
/**
 * OceanWP Child Theme Functions
 *
 * When running a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions will be used.
 *
 * Text Domain: oceanwp
 * @link http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function oceanwp_child_enqueue_parent_style() {

	// Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update the theme).
	$theme   = wp_get_theme( 'OceanWP' );
	$version = $theme->get( 'Version' );

	// Load the stylesheet.
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'oceanwp-style' ), $version );
}

add_action( 'wp_enqueue_scripts', 'oceanwp_child_enqueue_parent_style' );

// Création menu admin 
function add_custom_menu_item($items, $args) {
    // Vérifiez que nous sommes sur le bon menu (remplacez 'menu' par le nom du menu spécifique)
    // if ($args->menu =='primary' or $args->menu =='Menu responsive') {
        // Vérifiez si l'utilisateur est connecté
        if (is_user_logged_in()) {
            // Si l'utilisateur est administrateur, ajouter un lien vers le tableau de bord
            if (current_user_can('manage_options')) {
                $items .= '<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-77 current_page_item parent hfe-creative-menu"><a class="hfe-menu-item" href="' . admin_url() . '">Admin</a></li>';
            }
        }
    // }
    return $items;
}
// Ajout du filtre pour ajouter l'élément de menu personnalisé
add_filter('wp_nav_menu_items', 'add_custom_menu_item', 10, 2);

// Création d’un shortcode canette
function planty_display_shortcode() {
    ob_start(); ?>
        <div class="custom-container">
            <img src="<?php echo get_stylesheet_directory_uri();  ?>/assets/canette.png" alt="Planty Energy Drink" class="cannette">
            <div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/gauche.png" alt="Gauche branches" class="branches gauche">
                <img src="<?php echo get_stylesheet_directory_uri();  ?>/assets/droite.png" alt="Droite branches" class="branches droite">
            </div>
        </div>
        <?php  
    return ob_get_clean();
}
add_shortcode('planty_display', 'planty_display_shortcode');


// création footer 
function planty_footer_shortcode() {
    ob_start(); ?>
        <div class="footer_bloc">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/lot canettes.png" alt="Planty lot Canettes" class="lot_cannette">
            <p class="mentions">
                <a href="mentions-legales.html" class="mentions">Mentions Légales</a>
            </p>
        </div> 
        <?php   
    return ob_get_clean();
}
add_shortcode('planty_footer', 'planty_footer_shortcode');

// création bloc témoignages 
function planty_avis_shortcode() {
    ob_start(); ?>
    <div class="bloc-avis">
        <div class="avis">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Fatiha.png" alt="Fatiha" class="clients">
            <div class="détails-avis">
                <h3>Fatiha</h3>
                <p class="texte_avis">La meilleure boisson énergisante disponible sur le marché !</p>
            </div>
        </div> 
        <div class="avis">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Véro.png" alt="Véro" class="clients">
            <div class="détails-avis">
                <h3>Véro</h3>
                <p class="texte_avis">Frais & fruité c’est parfait pour accompagner le goûter.</p>
            </div>
        </div> 
        <div class="avis">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Marc.png" alt="Marc" class="clients">
            <div class="détails-avis">
                <h3>Marc</h3>
                <p class="texte_avis">Un boost d’énergie sans produits chimiques, un vrai plus dans ma journée.</p>
            </div>
        </div> 
    </div>
        <?php   
    return ob_get_clean();
}
add_shortcode('planty_avis', 'planty_avis_shortcode');