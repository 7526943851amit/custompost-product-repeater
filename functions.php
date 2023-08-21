<?php


add_action( 'wp_enqueue_scripts', 'hubspot_blog_theme_enqueue_styles' );


function hubspot_blog_theme_enqueue_styles() {


wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );


}
//jquery library
function my_enqueue_scripts() {
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');


function custom_add_to_cart_handler() {
    if (isset($_POST['product_id'])) {
        $product_id = absint($_POST['product_id']);
        $result = WC()->cart->add_to_cart($product_id);

        if ($result) {
            echo 'success';
        } else {
            echo 'error';
        }
    } else {
        echo 'error';
    }

    die(); 
}
add_action('wp_ajax_custom_add_to_cart', 'custom_add_to_cart_handler');

// https://www.spokenenglish.guru/tense-definition-rules-charts/
// /signin


// page no.2
// title:- First Time Board Member – Considerations 
// page no.1
// GatedTalent New Year Offers
// change url

//  verb in english 
// Base Form (Infinitive): Go // first form verb ki 
// Past Simple (Second Form): Went // second form verb ki 
// Past Participle (Third Form): Gone // third form verb ki 
// Present Participle/Gerund: Going// foruth form verb ki 
// Present Simple (Third Person Singular): Goes// five form verb ki 

// verb in hindi  
// Verb: Go

// Base Form (Infinitive): जाना (jana)// first form verb ki 
// Past Simple (Second Form): गया (gaya) // second form verb ki 
// Past Participle (Third Form): गया हुआ (gaya hua)// third form verb ki 
// Present Participle/Gerund: जा रहा है (ja raha hai)// foruth form verb ki 
// Present Simple (Third Person Singular): जाता है (jata hai)// five form verb ki 
?>


<!-- # BEGIN WordPress
# The directives (lines) between "BEGIN WordPress" and "END WordPress" are
# dynamically generated, and should only be modified via WordPress filters.
# Any changes to the directives between these markers will be overwritten.
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
RewriteBase /hardge/
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /hardge/index.php [L]

</IfModule>
<IfModule mod_php.c>
    php_value upload_max_filesize 2048M
    php_value post_max_size 2048M
    php_value memory_limit 512M
    php_value max_execution_time 300
    php_value max_input_time 300
</IfModule>
# END WordPress -->