<?php
// Styles aur scripts enqueue karein
function twenty_twenty_one_child_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
}
add_action('wp_enqueue_scripts', 'twenty_twenty_one_child_enqueue_styles');


// Add Ajax


// End Ajax
//create post type 
function create_custom_post_type() {
    // Labels for the custom post type
    $labels = array(
        'name'               => __( 'AI Tools', 'text-domain' ),
        'singular_name'      => __( 'AI Tools', 'text-domain' ),
        // Add other labels as needed
    );

    // Arguments for the custom post type
    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'ai-tools' ), // Change 'amit' to your desired slug
        'capability_type'     => 'post',
        'has_archive'         => true,
        'hierarchical'        => false,
        'menu_position'       => 5,
        'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        'menu_icon'           => 'dashicons-video-alt', // Change icon as desired
    );

    // Register the custom post type 'Amit'
    register_post_type( 'ai_tools', $args );

    // Register custom taxonomy 'Genre' for 'Amit' post type
    $taxonomy_labels = array(
        'name'                       => __( 'Ai Category', 'text-domain' ),
        'singular_name'              => __( 'Ai Category', 'text-domain' ),
        // Add other labels as needed
    );

    $taxonomy_args = array(
        'labels'            => $taxonomy_labels,
        'hierarchical'      => true, // Set to true for hierarchical taxonomy like categories, false for non-hierarchical like tags.
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'ai-category' ), // Change 'genre' to your desired slug
    );

    // Register the custom taxonomy 'Genre' for the 'Amit' post type
    register_taxonomy( 'ai-category', 'ai_tools', $taxonomy_args );
    register_taxonomy_for_object_type( 'post_tag', 'ai_tools' );
}

// Hook into the init action and call the custom post type function
add_action( 'init', 'create_custom_post_type' );

//end post type 




// pagination all post type
function custom_pagination_handler() {
    $page = $_POST['page'];

    $args = array(
        'post_type' => 'ai_tools',
        'post_status' => 'publish',
        'posts_per_page' => 3,
        'paged' => $page,
        'orderby' => 'title',
        'order' => 'ASC',
    );

    $loop = new WP_Query($args);

    while ($loop->have_posts()) : $loop->the_post();
        the_title();
        the_content();
    endwhile;

    wp_die();
}

add_action('wp_ajax_custom_pagination', 'custom_pagination_handler');
add_action('wp_ajax_nopriv_custom_pagination', 'custom_pagination_handler');




 //end  pagination all post type



//start fetaured tools category pagination  post type
function custom_featured_tools_pagination_handler() {
    $page = $_POST['page'];

    $args = array(
        'post_type' => 'ai_tools', // Change this to your post type
        'post_status' => 'publish',
        'posts_per_page' => 2, // Display 2 featured tools per page
        'ai-category' => 'Featured Tools', // Replace 'featured' with the category slug
        'paged' => $page,
        'orderby' => 'title',
        'order' => 'ASC',
    );

    $loop = new WP_Query($args);

    while ($loop->have_posts()) : $loop->the_post();
        the_title();
        the_content();
    endwhile;

    wp_die();
}

add_action('wp_ajax_featured_tools_pagination', 'custom_featured_tools_pagination_handler');
add_action('wp_ajax_nopriv_featured_tools_pagination', 'custom_featured_tools_pagination_handler');
 //end  fetaured tools category pagination  post type





//Add Custom fileed 




//admin 

// USERNME ADMIN EMAIL as2765104@gmail.com
// PASWORD r5R4XZd!vph7UHp1jKf0RLFo          


//subscriber
// USERNME ADMIN EMAIL as2765104@gmail.com
// PASWORD no1YOSAclyo9$f%9imwkhyZ^   
//Add Custom filed 







//create post type 
function create_custom_post_types() {
    // Labels for the custom post type
    $labels = array(
        'name'               => __( 'location', 'text-domain' ),
        'singular_name'      => __( 'location', 'text-domain' ),
        // Add other labels as needed
    );

    // Arguments for the custom post type
    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'location' ), // Change 'amit' to your desired slug
        'capability_type'     => 'post',
        'has_archive'         => true,
        'hierarchical'        => false,
        'menu_position'       => 5,
        'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        'menu_icon'           => 'dashicons-video-alt', // Change icon as desired
    );

    // Register the custom post type 'Amit'
    register_post_type( 'location', $args );

   
}

// Hook into the init action and call the custom post type function
add_action( 'init', 'create_custom_post_types' );



//add custom filed
function custom_meta_box2() {
    add_meta_box(
        'custom_meta_box', // Unique ID
        'Custom Meta Box', // Box title
        'render_custom_meta_box2', // Callback function to render the meta box
        'location', // Post type
        'normal', // Priority
        'high' // Position
    );
}
add_action('add_meta_boxes', 'custom_meta_box2');

// Render Meta Box content
function render_custom_meta_box2($post) {
    // Retrieve current values
    $location = get_post_meta($post->ID, 'location', true);
    $langitude = get_post_meta($post->ID, 'langitude', true);
    $latitude = get_post_meta($post->ID, 'latitude', true);

    // Output fields
    ?>
    <label for="custom_meta_name">your location:</label>
    <input type="text" id="location" name="location" value="<?php echo esc_attr($location); ?>" style="width: 100%;"><br><br>
    
    <label for="custom_meta_description">your langitude:</label>
    <input type="text" id="langitude" name="langitude" value="<?php echo esc_attr($langitude); ?>" style="width: 100%;"><br><br>
    <label for="custom_meta_name">Your latitude:</label>
    <input type="text" id="latitude" name="latitude" value="<?php echo esc_attr($latitude); ?>" style="width: 100%;"><br><br>
    <?php
}

// Save Meta Box data
function save_custom_meta_box2($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    if (!current_user_can('edit_post', $post_id)) return;

    if (isset($_POST['location'])) {
        update_post_meta($post_id, 'location', sanitize_text_field($_POST['location']));
    }

    if (isset($_POST['langitude'])) {
        update_post_meta($post_id, 'langitude', sanitize_textarea_field($_POST['langitude']));
    }
    if (isset($_POST['latitude'])) {
        update_post_meta($post_id, 'latitude', sanitize_textarea_field($_POST['latitude']));
    }
}
add_action('save_post', 'save_custom_meta_box2');




//end custom filed
// functions.php ya custom plugin mein

function add_custom_meta_box() {
    add_meta_box(
        'custom_meta_box',
        'Meta Tag Details',
        'display_custom_meta_box',
        'location',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_custom_meta_box');

function display_custom_meta_box($post) {
    $meta_name = get_post_meta($post->ID, 'meta_name', true);
    $meta_description = get_post_meta($post->ID, 'meta_description', true);

    echo 'Meta Tag Name: <input type="text" name="meta_name" value="' . esc_attr($meta_name) . '"><br>';
    echo 'Meta Tag Description: <textarea name="meta_description">' . esc_textarea($meta_description) . '</textarea>';
}

function save_custom_meta_data($post_id) {
    if (isset($_POST['meta_name'])) {
        update_post_meta($post_id, 'meta_name', sanitize_text_field($_POST['meta_name']));
    }
    if (isset($_POST['meta_description'])) {
        update_post_meta($post_id, 'meta_description', sanitize_text_field($_POST['meta_description']));
    }
}
add_action('save_post', 'save_custom_meta_data');







//add wishlist




// Register Custom Post Type for Wishlist
function register_wishlist_post_type() {
    $labels = array(
       'name' => 'Wishlist',
       'singular_name' => 'Wishlist Item',
       'menu_name' => 'Wishlist',
       'add_new_item' => 'Add New Wishlist Item',
   
    );
 
    $args = array(
       'labels' => $labels,
       'public' => true,
       'has_archive' => false,
       'rewrite' => array('slug' => 'wishlist'),
       'supports' => array('title', 'thumbnail'),
      
    );
 
    register_post_type('wishlist', $args);
 }
 add_action('init', 'register_wishlist_post_type');
 



//end wishlist


function add_to_wishlist() {
    $product_id = $_POST['product_id'];
    $product_title = $_POST['product_title'];
 
    $product_image = get_the_post_thumbnail_url($product_id, 'full'); 
 
 
    $post_id = wp_insert_post(array(
       'post_type' => 'wishlist',
       'post_title' => $product_title, // Use the provided product title
       'post_status' => 'publish',
    ));
 
    if ($post_id) {
       
       if ($product_image) {
          $attachment_id = attachment_url_to_postid($product_image);
          if ($attachment_id) {
             set_post_thumbnail($post_id, $attachment_id);
          }
       }
       echo 'success';
    } else {
       echo 'error';
    }
    die();
 }
 add_action('wp_ajax_add_to_wishlist', 'add_to_wishlist');
 add_action('wp_ajax_nopriv_add_to_wishlist', 'add_to_wishlist');
 
 
 
//  !3V&bHH#gLr^m(8$qe
?>
