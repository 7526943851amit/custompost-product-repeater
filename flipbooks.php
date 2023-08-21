<?php
/* Template Name:flipbook */


?>
<!DOCTYPE html>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/style.css">
      <title>Flipbook</title>
   </head>
   <body>
      <section class="flipbook-banner">
         <div class="container">
            <div class="banner-content">
               <h1><?php  echo get_field('digital_flipbook_maker'); ?></h1>
               <figure>
                  <!-- <img src="images/HEADER_MOCKUP.svg" alt='flipbook'> -->
                  <?php echo "<img src=". get_field('header_mockup') ." alt='flipbook'>" ?>
               </figure>
            </div>
         </div>
      </section>
      <section class="txt-img-sec">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-6" data-aos="fade-right">
                  <div class="text-info">
                     <h2><?php echo get_field('_amazing_online_flipbooks') ?></h2>
                     <p><?php echo get_field('publish_innovate') ?> </p>
                     <a href="#" class="common-btn"><?php the_field('try_for_free')?></a>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="flip-vedio">
                     <iframe width="100%" height="400px" src="https://www.youtube.com/embed/r2N6egcXwcw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="three-box-sec">
         <div class="container">
            <div class="main-head-text"  data-aos="fade">
               <h2><?php the_field('How to make an online flipbook?')?></h2>
               <p><?php echo get_field('Create stunning, interactive flipbooks online. DCatalog offers the most intuitive and cutting-edge flipbook maker on the market.') ?></p>
            </div>
            <div class="row">
    <?php if (have_rows('explore_customers')) :
        while (have_rows('explore_customers')) : the_row();
            $explore_customers_image = get_sub_field('explore_customers_image');
            $explore_customers_title = get_sub_field('explore_customers_title');
            $explore_customers_description = get_sub_field('explore_customers_description');
    ?>
        <div class="col-lg-4 col-md-6">
            <div class="main--img-out" data-aos="fade-right">
                <img src="<?php echo $explore_customers_image; ?>" class="primar_img1">
                <h3><?php echo $explore_customers_title; ?></h3>
                <p><?php echo $explore_customers_description; ?></p>
            </div>
        </div>
    <?php
        endwhile;
    endif;
    ?>
    <div class="btn-center">
        <a href="#" class="common-btn org-btn"><?php the_field('explore_customers_button') ?></a>
    </div>
</div>

         </div>
      </section>
      <section class="purple-sec">
         <div class="container-fluid">
            <div class="main-head-text"  data-aos="fade">
               <h2><?php the_field('looking_for_flipbook_inspiration') ?></h2>
               <p><?php the_field('let’s_face_it_pdfs_are_static_and_boring') ?></p>
            </div>
            <div class="row">
               <?php
            if( have_rows('inspiration_image_section') ):
               while( have_rows('inspiration_image_section') ) : the_row();
               $inspiration_image = get_sub_field('inspiration_image');
               ?>
               <div class="col-md-2">
                  <div class="img-rot">
                     <!-- <img src="images/Inspiration-1.png" class="primar_img2" > -->
                     <img src="<?php echo $inspiration_image ?>" class="primar_img2">
                  </div>
               </div>
               <?php
            endwhile;
               endif;
               ?>
            </div>
            <div class="btn-center">
               <a href="#" class="common-btn org-btn"><?php the_field('explore_customers2_button') ?></a>
            </div>
         </div>
      </section>
      <section class="icon-sec-three">
         <div class="container">
            <div class="main-head-text"  data-aos="fade">
               <h2><?php echo get_field('cutting-edge_flipbook_technology') ?></h2>
            </div>
            <div class="row">
               <?php
               if( have_rows('html5section') ):
                  while( have_rows('html5section') ) : the_row();
                  $html_image = get_sub_field('html_image');
                  $html_title = get_sub_field('html_title');
                  $html_description = get_sub_field('html_description');
               ?>
               <div class="col-lg-4 col-md-6">
                  <div class="icon-center" data-aos="fade-right">
                     <!-- <img src="images/icon-html5.svg" class="primar_center" > -->
                     <img src="<?php echo $html_image  ?>" class="primar_center">
                     <h3><?php echo $html_title ?></h3>
                     <p><?php echo $html_description ?></p>
                  </div>
               </div>
                  <?php
                  endwhile;
               endif;   
                  ?>
            </div>
         </div>
      </section>
      <section class="four-ico-sec">
         <div class="container">
            <div class="main-head-text"  data-aos="fade">
               <h2><?php the_field('empower_title')?></h2>
            </div>
            <div class="row">
               <?php
               if( have_rows('virtual_section') ):
               while( have_rows('virtual_section') ) : the_row();
               $virtual_image = get_sub_field('virtual_image');
               $virtual_title = get_sub_field('virtual_title');
               $virtual_description = get_sub_field('virtual_description');
               $virtual_button = get_sub_field('virtual_button');
               ?>
               <div class="col-md-6">
                  <div class="center-info-box" data-aos="fade-left">
                     <!-- <img src="images/EMPOWER1.svg" class="primar_center" > -->
                     <img src="<?php echo $virtual_image    ?>" class="primar_center">
                     <h3><?php echo $virtual_title ?></h3>
                     <p><?php echo $virtual_description ?> </p>
                     <a href="#" class="common-btn org-btn"><?php echo $virtual_button ?></a>
                  </div>
               </div>
               <?php
               endwhile;
            endif;
            ?>
            </div>
         </div>
      </section>
      <section class="icon-sec-three">
         <div class="container">
            <div class="main-head-text"  data-aos="fade">
               <h2><?php the_field('cutting-edge_flipbook_technologytitl2')?></h2>
            </div>
            <div class="row">
               <?php
            if( have_rows('vendor_section_repeater') ):
            while( have_rows('vendor_section_repeater') ) : the_row();
            $vendor_image = get_sub_field('vendor_image');
            $vendor_title = get_sub_field('vendor_title');
            $vendor_description = get_sub_field('vendor_description');
               ?>
               <div class="col-lg-4 col-md-6">
                  <div class="icon-center" data-aos="fade-right">
                     <!-- <img src="images/icon-vender-management.svg" class="primar_center" > -->
                     <img src="<?php echo $vendor_image ?>" class="primar_center" >
                     <h3><?php echo $vendor_title ?></h3>
                     <p><?php echo $vendor_description  ?></p>
                  </div>
               </div>
               <?php
            endwhile;
         endif;
               ?>
            </div>
         </div>
      </section>
      <section class="coomon-txt-sec">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-md-12" data-aos="fade-right">
                  <div class="left-info">
                     <h3><?php the_field('custom_flipbook_solutions_title')?></h3>
                     <p><?php the_field('custom_flipbook_solutions_desc1')?></p>
                     <p><?php the_field('custom_flipbook_solutions_desc2')?></p>
                     <!-- <p>Want your flipbook to look or function in a specific way? Share your vision with us! </p> -->
                     <a href="#" class="common-btn green"><?php the_field('custom_flipbook_solutions_button')?></a>
                  </div>
               </div>
               <div class="col-lg-6 col-md-12" data-aos="fade-left">
                  <div class="rigt-main-img">
                     <!-- <img src="images/CUSTOM-FLIPBOOK.svg" class="primar_RIGHT" > -->
                     <?php echo "<img src=". get_field('custom_flipbook_solutions_image')." class='primar_RIGHT'>" ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="bg-shape-sec">
         <div class="container">
            <div class="main-head-text"  data-aos="fade">
               <h2><?php echo get_field('next-level_online_flipbook_experience_title')?></h2>
               <p><?php echo get_field('next-level_online_flipbook_experience_description')?></p>
               <a href="#" class="common-btn org-btn"><?php echo get_field('next-level_online_flipbook_experience_button')?></a>
            </div>
         </div>
      </section>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
   </body>
</html>