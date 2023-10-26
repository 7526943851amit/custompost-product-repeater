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
	    array('post', 'page'); // agar psot aur page dono mein dikhana ho toh
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
if (!empty($meta_name)) {
    echo '<meta name="description" content="' . esc_attr($meta_name) . '">';
}
if (!empty($meta_description)) {
    echo '<meta name="description" content="' . esc_attr($meta_description) . '">';
}







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


<?php
get_header();
if (isset($_POST['post_title_search'])) {
    $search_query = sanitize_text_field($_POST['post_title_search']);
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        's' => $search_query,
    );
    $search_results = new WP_Query($args);

    if ($search_results->have_posts()) {
        echo '<h2>Search Results:</h2>';
        while ($search_results->have_posts()) {
            $search_results->the_post();
            the_title('<h3>', '</h3>');
        }
        wp_reset_postdata();
    } else {
        echo '<p>No results found.</p>';
    }
}
get_footer();
?>
<form method="post" action="<?php echo esc_url(home_url('/custom-search-template/')); ?>">
    <input type="text" name="post_title_search" placeholder="Search by Post Title">
    <input type="submit" value="Search">
</form>

?>

// Handle send email form contact form 7
Hello Admin,<br><br>

A contact form has been submitted on [_site_title]. <br><br>

Following are it's details:<br><br>

First Name: [f-name]<br>
Last Name: [l-name]<br>
Your Email: [email]<br>
Phone:  [phone]
your Title: [title]<br>
Company Name: [company]<br>
your Address:[address]<br>
your Number of Trucks:[nof]<br><br>
Message: [text]
//pagination start




<?php
/* Template Name: Pagination */

?>
<h1 style="text-align:center;">All post</h1>
<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <div class="your-loop-container">
            <?php
            $args = array(
                'post_type' => 'ai_tools',
                'post_status' => 'publish',
                'posts_per_page' => 3,
                'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
                'orderby' => 'title',
                'order' => 'ASC',
            );

            $loop = new WP_Query($args);

            while ($loop->have_posts()) : $loop->the_post();
                the_title();
                the_content();
            endwhile;
            ?>
        </div>

        <div class="pagination">
            <?php
            echo paginate_links(array(
                'total' => $loop->max_num_pages,
            ));
           
            ?>
        </div>

    </main><!-- #main -->-
</div><!-- #primary -->


<h1 style="text-align:center;">fetured tools categories post</h1>
<div class="featured-tools">
    <?php
    $featured_args = array(
        'post_type' => 'ai_tools', // Change this to your post type
        'post_status' => 'publish',
        'posts_per_page' => 2, // Display 2 featured tools per page
        'ai-category' => 'Featured Tools', // Replace 'featured' with the category slug
        'orderby' => 'title',
        'order' => 'ASC',
    );

    $featured_loop = new WP_Query($featured_args);

    while ($featured_loop->have_posts()) : $featured_loop->the_post();
        the_title();
        the_content();
    endwhile;
    ?>
</div>
<div class="featured-tools-pagination">
    <?php
    echo paginate_links(array(
        'total' => $featured_loop->max_num_pages,
    ));
 
    ?>
</div>



<h1 style="text-align:center;">Recently Added Tools All posts</h1>
<div class="featured-tools">
    <?php
    $featured_args = array(
        'post_type' => 'ai_tools', // Change this to your post type
        'post_status' => 'publish',
        'posts_per_page' => 2, // Display 2 featured tools per page
        'ai-category' => 'Recently Added Tools', // Replace 'featured' with the category slug
        'orderby' => 'title',
        'order' => 'ASC',
    );

    $recently_loop = new WP_Query($featured_args);

    while ($recently_loop->have_posts()) : $recently_loop->the_post();
        the_title();
        the_content();
    endwhile;
    ?>
</div>
<div class="recently-tools-pagination">
    <?php
    echo paginate_links(array(
        'total' => $recently_loop->max_num_pages,
    ));
    ?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    var ajaxpagination = {
        ajaxurl: '<?php echo admin_url('admin-ajax.php'); ?>'
    };
</script>
<script>
jQuery(document).ready(function($) {
    $('.pagination .page-numbers').on('click', function(e) {
        e.preventDefault();
        var page = $(this).text();
        console.log(page);
        var data = {
            'action': 'custom_pagination',
            'page': page,
        };

        jQuery.post(ajaxpagination.ajaxurl, data, function(response) {
            $('.your-loop-container').html(response);
        });
    });
});
</script>

<script>
jQuery(document).ready(function($) {
    $('.featured-tools-pagination .page-numbers').on('click', function(e) {
        e.preventDefault();
        var page = $(this).text();
        var data = {
            'action': 'featured_tools_pagination',
            'page': page,
        };

        jQuery.post(ajaxpagination.ajaxurl, data, function(response) {
            $('.featured-tools').html(response);
        });
    });
});
</script>


-- 
This e-mail was sent from a contact form on [_site_title] ([_site_url]) <br><br>
Regards,<br>
[_site_title]
//add filter


function add_custom_user_filter() {
    global $wpdb;
    
    $first_names = $wpdb->get_col("SELECT DISTINCT meta_value FROM $wpdb->usermeta WHERE meta_key = 'first_name'");

    if (count($first_names) > 0) {
        ?>
        <select name="user_filter" id="user-filter">
            <option value="">Select User</option>
            <?php
            foreach ($first_names as $first_name) {
                $selected = (isset($_GET['user_filter']) && $_GET['user_filter'] === $first_name) ? 'selected' : '';
                echo '<option value="' . esc_attr($first_name) . '" ' . $selected . '>' . esc_html($first_name) . '</option>';
            }
            ?>
        </select>
        <script>
            jQuery(document).ready(function($) {
                $('#user-filter').change(function() {
                    var selectedFirstName = $(this).val();

                    // Hide all rows in the user table
                    $('table.wp-list-table tr').hide();

                    // Show rows with the matching first name
                    $('table.wp-list-table tr:has(td:contains("' + selectedFirstName + '"))').show();
                });
            });
        </script>
        <?php
    }
}

add_action('restrict_manage_users', 'add_custom_user_filter');




//footer dynamic 
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Footer Left',
        'id'   => 'footer-left-widget',
        'description' => 'Left Footer widget position.',
        'before_widget' => '<div id="%1$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ));

    register_sidebar(array(
        'name' => 'Footer Center',
        'id'   => 'footer-center-widget',
        'description' => 'Center Footer widget position.',
        'before_widget' => '<div id="%1$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ));

    register_sidebar(array(
        'name' => 'Footer Right',
        'id'   => 'footer-right-widget',
        'description' => 'Right Footer widget position.',
        'before_widget' => '<div id="%1$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ));
}
apperance mein jakar fir widgets mein aa jaaynege nav mennu tab pe clcik krke bnate jao fir get aise krna footer mein 
<?php dynamic_sidebar('footer-left-widget'); ?> je id pass krke


//hedaer dynamic 

function wp_get_menu_array($current_menu) {
 $array_menu = wp_get_nav_menu_items($current_menu);
    $menu = array();
    foreach ($array_menu as $m) {
        if (empty($m->menu_item_parent)) {
            $menu[$m->ID] = array();
            $menu[$m->ID]['ID']      =   $m->ID;
            $menu[$m->ID]['title']       =   $m->title;
            $menu[$m->ID]['url']         =   $m->url;
			$menu[$m->ID]['title_attr']   = $m->attr_title;
            $menu[$m->ID]['children']    =   array();
        }
    }
    $submenu = array();
    foreach ($array_menu as $m) {
        if ($m->menu_item_parent) {
            $submenu[$m->ID] = array();
            $submenu[$m->ID]['ID']       =   $m->ID;
            $submenu[$m->ID]['title']    =   $m->title;
            $submenu[$m->ID]['url']  =   $m->url;
			 $submenu[$m->ID]['title_attr']    = $m->attr_title;
			 if (isset($m->classes[0]) && $m->classes[0]!='') {
				$submenu[$m->ID]['class']  =   $m->classes[0];
			}
            $menu[$m->menu_item_parent]['children'][$m->ID] = $submenu[$m->ID];
        }
    }
    return $menu;
}



add_action('init', 'register_custom_posts_our_services');

fucntion.php ka hai je aur je hedaer.php ka jo aagye hai 
<?php $menu=wp_get_menu_array('New_Menu') ; 
					 //echo '<pre>';print_r($menu);echo '</pre>';?>
                     <ul class="nav-sub-menu">
					 <?php 
						$x=1;
						foreach($menu as $mh) 
						{ 
							if(!empty($mh['children'])){
							
				        ?>
                        <li>
						<div class="myclass">
                           <a class="mega-menu-trigger" href="<?php echo $mh['url']; ?>"><?php echo $mh['title']; ?> </a><span class="customnewclass"><i class="fa-solid fa-chevron-down"></i></span>
						   </div>
                           <div class="mega-menu">
                              <div class="container newclass">
                                 <div class="row">
								 <?php 
						$i=1;
								foreach($mh['children']  as $childm)
								{
						    ?>
                                    <div class="col-lg-4 col-sm-6">
                                       <div class="inner-megamenu">
                                          <div class="icon-img">
										   <?php  
										   if(!empty($childm['class'])){
										   $theme_path = get_stylesheet_directory_uri(); 
										   //print_r($theme_path);
										   $external_file_path = $theme_path . '/menuimage/'.$childm['class'].'.png';
										   //print_r($external_file_path);
										   
										   ?>
                                             <img src="<?php echo $external_file_path;?>" alt="">
										   <?php } ?>
                                          </div>
                                          <div class="menu-link">
                                             <ul>
                                                <li><a href="<?php echo $childm['url']; ?>"><?php echo $childm['title']; ?></a></li>
                                             </ul>
                                             <p><?php echo $childm['title_attr']; ?></p>
                                          </div>
                                       </div>
                                    </div>
								<?php } ?>
                                 </div>
                              </div>
                           </div>
                        </li>
							<?php } ?>
                        
						<?php
							if(empty($mh['children']))
							{
						?>
                        <li>
                           <a href="<?php echo $mh['url']; ?>" class=""><?php echo $mh['title']; ?> </a>
                        </li>
						<?php } }?>
                     </ul>

// headr dynamic ka je end hai

// simple register
 <form method="post" action="">
                <div class="input-form">
                    <input type="text" name="fname" placeholder="First Name">
                    <input type="text" name="lname" placeholder="Last Name">
                    <input type="text" name="uname" placeholder="User Name">
                    <input type="email" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Password">
                    <button type="submit" class="common-btn green">Become a Volunteer</button>
                    <!-- Display the registration message here -->
                    <?php
                    if (isset($registration_message) && !empty($registration_message)) {
                        echo '<p>' . $registration_message . '</p>';
                    }
                    ?>
                    <p>Already Have An Account? <a href="<?php echo site_url('sign-in'); ?>" class="sign-link">Sign In</a></p>
                </div>
            </form>
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $registration_message = ''; 
    $first_name = sanitize_text_field($_POST['fname']);
    $last_name = sanitize_text_field($_POST['lname']);
    $user_name = sanitize_user($_POST['uname']);
    $email = sanitize_email($_POST['email']);
    $password = $_POST['password']; 

    if (username_exists($user_name) || email_exists($email)) {
        $registration_message = 'Username or email already exists. Please choose another one.';
    } else {
        $user_id = wp_create_user($user_name, $password, $email);

        if (is_wp_error($user_id)) {
            $registration_message = 'Registration failed. Please try again.';
        } else {
            wp_update_user(array(
                'ID' => $user_id,
                'first_name' => $first_name,
                'last_name' => $last_name
            ));
            $registration_message = 'Registration successful.';
        }
    }
}
//register end

//login users

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $custom_username_or_email = sanitize_user($_POST['custom_username_or_email']);
    $custom_password = $_POST['custom_password'];

    // Authenticate user using username or email
    $user = wp_authenticate($custom_username_or_email, $custom_password);

    if (is_wp_error($user)) {
        // Authentication failed, display an error message
        $login_message = 'Invalid username, email, or password. Please try again.';
    } else {
        // Authentication successful, log the user in
        wp_set_current_user($user->ID);
        wp_set_auth_cookie($user->ID);
        do_action('wp_login', $user->user_login);

        // Set a message for successful login
        $login_message = 'You are logged in.';
    }
}
  <div class="input-form">
                 <form method="post" action="">
        
        <input type="text" name="custom_username_or_email" id="custom_username_or_email" placeholder="Email or Username"/>
      
        <input type="password" name="custom_password" id="custom_password" placeholder="Password"/>
        <input type="submit" value="Log In" />
		<?php
		if (isset($login_message) && !empty($login_message)) {
        echo '<p>' . $login_message . '</p>';
    }
	?>
    </form>
// login users end


	  // 10 $ add hongye product jab total hoga sirf accessories category ko
function add_accessory_fees() {
    // Check if the current cart contains any products from the Accessories category
    $accessory_category_id = get_term_by('name', 'accessories', 'product_cat')->term_id; // "accessories" is the name of your category

    $has_accessory = false;

    foreach (WC()->cart->get_cart() as $cart_item) {
        $product_id = $cart_item['product_id'];
        $product = wc_get_product($product_id);
        $categories = $product->get_category_ids();

        if (in_array($accessory_category_id, $categories)) {
            $has_accessory = true;
            break;
        }
    }

    // If there are products from the Accessories category, add the $10 fee
    if ($has_accessory) {
        WC()->cart->add_fee('My  Fee', 10);
    }
}
	  //addd loader code start page refreh rehta jab tak
add_action('woocommerce_cart_calculate_fees', 'add_accessory_fees');
  <div id="loader">
    <img src="http://localhost/woocomerce_project/wordpress/wp-content/uploads/2023/10/amalie-steiness.gif" alt="Loading...">
  </div>
</div>
<script>
jQuery(document).ready(function($) {
    var loader = $('#loader');
    
    // Show the loader when the page starts refreshing
    $(window).on('beforeunload', function() {
        loader.show();
    });

    // Hide the loader when the page has finished refreshing
    $(window).on('load', function() {
        loader.hide();
    });
});
</script>
// custom categories get and print using term function
  <?php
            $terms = get_the_terms(get_the_ID(), 'cat-newsroom');
            if (!empty($terms)) {
                foreach ($terms as $term) {
                    echo '<span class="' . $term->slug . '">' . $term->name . '</span>';
                }
            }
            ?>
create child thme
/*
Theme Name:   feed-child
Theme URI:    https://www.wpbeginner.com/
Description:  A feed child theme 
Author:       WPBeginner
Author URI:   https://www.wpbeginner.com
Template:     feed
Version:      1.0.0
Text Domain:  feedchild
*/
end
