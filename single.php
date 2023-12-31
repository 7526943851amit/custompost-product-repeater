<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
?>
<?php
get_header(); // Include the header of your theme
?>

<!-- Blog Start -->
<div class="container py-5">
    <div class="row g-5">
        <div class="col-lg-8">
            <!-- Blog Detail Start -->
            <div class="mb-5">
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                ?>
                        <img class="img-fluid w-100 rounded mb-5" src="<?php the_post_thumbnail_url(); ?>" alt="">
                        <h1 class="mb-4"><?php the_title(); ?></h1>
                        <?php the_content(); ?>
            </div>
            <!-- Blog Detail End -->

            <!-- Comment List Start -->
            <div class="mb-5">
                <?php
                comments_template(); // Display the comments
                ?>
            </div>
            <!-- Comment List End -->

            <!-- Comment Form Start -->
            <div class="bg-light rounded p-5">
                <?php comment_form(); // Display the comment form ?>
            </div>
            <!-- Comment Form End -->
        </div>

        <!-- Sidebar Start -->
<div class="col-lg-4">
    <!-- Recent Post Start -->
    <div class="mb-5">
        <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 mb-4">Recent Posts</h4>
        <?php
        // Get the current post ID
        $current_post_id = get_the_ID();

        // Get recent posts excluding the current post
        $recent_posts = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 5, // Number of recent posts to display
            'post__not_in' => array($current_post_id), // Exclude the current post
        ));

        while ($recent_posts->have_posts()) {
            $recent_posts->the_post();
        ?>
            <div class="d-flex rounded overflow-hidden mb-3">
                <img class="img-fluid" src="<?php the_post_thumbnail_url('thumbnail'); ?>" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                <a href="<?php the_permalink(); ?>" class="h5 d-flex align-items-center bg-light px-3 mb-0"><?php the_title(); ?></a>
            </div>
        <?php
        }
        wp_reset_postdata();
        ?>
    </div>
    <!-- Recent Post End -->

    <!-- Your other sidebar content here -->
</div>


        <!-- Sidebar End -->
    </div>
</div>
<!-- Blog End -->

<?php
        }
    }
    ?>

<?php
get_footer(); // Include the footer of your theme
?>

