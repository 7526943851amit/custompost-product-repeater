<?php
/* Template Name: Blog */
get_header();
?>

<!-- Blog Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px;">
            <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5"><?php echo get_field('blog_section_title'); ?></h5>
            <h1 class="display-4"><?php echo get_field('blog_section_subtitle'); ?></h1>
        </div>
        <div class="row g-5">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 2, 
            );

            $blog_posts = new WP_Query($args);

            if ($blog_posts->have_posts()) :
                while ($blog_posts->have_posts()) : $blog_posts->the_post();
            ?>
                <div class="col-xl-4 col-lg-6">
                    <div class="bg-light rounded overflow-hidden blog-image">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('full', array('class' => 'img-fluid w-100'));
                        }
                        ?>
                        <div class="p-4">
                            <a class="h3 d-block mb-3" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <p class="m-0"><?php the_excerpt(); ?></p>
                        </div>
                        <div class="d-flex justify-content-between border-top p-4">
                            <div class="d-flex align-items-center">
                                <?php $admin_avatar = get_avatar(get_option('admin_email'), 25); ?>
                                <img class="rounded-circle me-2" src="<?php echo $admin_avatar; ?>" width="25" height="25" alt="">
                                <small><?php the_author(); ?></small>
                            </div>
                            <div class="d-flex align-items-center">
                                <small class="ms-3"><i class="far fa-comment text-primary me-1"></i><?php comments_number('0', '1', '%'); ?></small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
        <div class="col-12 text-center blog-pagination">
            <?php
            echo paginate_links(array(
                'total' => $blog_posts->max_num_pages,
            ));
            ?>
        </div>
    </div>
</div>

    <!-- Blog End -->
<?php
get_footer();
?>