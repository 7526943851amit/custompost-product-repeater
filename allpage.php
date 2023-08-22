<?php
/* Template Name:allpage */

?>
<a href="<?php echo home_url('shop2'); ?>">shop</a>




<main id="primary" class="site-main">
    <div class="search-form-container">
        <form role="search" method="get" class="search-form" action="">
            <label>
                <span class="screen-reader-text">Search by Title:</span>
                <input type="search" class="search-field" placeholder="Search by title…" name="title">
            </label>
            <button type="submit" class="search-submit">Search</button>
        </form>
    </div>

    <?php
    if (isset($_GET['title'])) {
        $search_title = sanitize_text_field($_GET['title']);
        $args = array(
            'post_type' => 'post',
            's' => $search_title,
            // 'exact' => true,
            // 'sentence' => false,
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) {
            echo '<h2>Search Results:</h2>';
            while ($query->have_posts()) {
                $query->the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h2 class="entry-title"><?php the_title(); ?></h2>
                    </header>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
                <?php
            }
        } else {
            echo '<p>No search results found.</p>';
        }
        wp_reset_postdata();
    }
    ?>
</main>



<!-- username : admin -->
<!-- password: jq20Tn2xCqtGnz$ACF -->