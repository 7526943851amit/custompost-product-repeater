<?php
/*
Template name: Blog-article
*/
get_header();
?>

<section class="blog-page py70">
	<div class="container">
		<div class="row">
				      <?php

	$args = array(
    'post_type' => 'post', 
    'post_status' => 'publish',
    'posts_per_page' => -1,
	'order'          => 'desc',
	'page' => $paged,
	'taxonomy'  => 'category'
	
	
    
);
$postslist = get_posts( $args );
	//echo '<pre>'; print_r($postslist);
	foreach($postslist as $blogs){
			     $featured_img_url = get_the_post_thumbnail_url($blogs->ID,'full');
?>
               <div class="col-lg-4">
                  <div class="blog-tab">
                  	<div class="zoom_effect">
                      <img class="img-in" src="<?php echo $featured_img_url; ?>">
                 	</div>
                     <div class="in-inner">
                        <h4><?php echo $blogs->post_title; ?></h4>
                        <p><?php echo $blogs->post_content; ?></p>
                        <a href="<?php echo get_permalink($blogs->ID); ?>" class="read">read more</a>
                     </div>
                  </div>
               </div>
           <?php }?>
               <!----div class="col-lg-4">
                  <div class="blog-tab">
                  	<div class="zoom_effect">
                    	 <img class="img-in" src="images/blog2.png">
                 	</div>
                     <div class="in-inner">
                       <h4>The Advantages of Networking</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <a href="#" class="read">read more</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="blog-tab">
                  	<div class="zoom_effect">
                     	<img class="img-in" src="images/blog3.png">
                 	</div>
                     <div class="in-inner">
                      <h4>The Advantages of Networking</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <a href="#" class="read">read more</a>
                     </div>
                  </div>
               </div>
            </div>
              <div class="row blog-layer">
               <div class="col-lg-4">
                  <div class="blog-tab">
                  	<div class="zoom_effect">
                      <img class="img-in" src="images/blog4.png">
                 	</div>
                     <div class="in-inner">
                        <h4>The Advantages of Networking</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <a href="#" class="read">read more</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="blog-tab">
                  	<div class="zoom_effect">
                    	 <img class="img-in" src="images/blog5.png">
                 	</div>
                     <div class="in-inner">
                       <h4>The Advantages of Networking</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <a href="#" class="read">read more</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="blog-tab">
                  	<div class="zoom_effect">
                     	<img class="img-in" src="images/blog6.png">
                 	</div>
                     <div class="in-inner">
                      <h4>The Advantages of Networking</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <a href="#" class="read">read more</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row blog-layer">
               <div class="col-lg-4">
                  <div class="blog-tab">
                  	<div class="zoom_effect">
                      <img class="img-in" src="images/blog7.png">
                 	</div>
                     <div class="in-inner">
                        <h4>The Advantages of Networking</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <a href="#" class="read">read more</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="blog-tab">
                  	<div class="zoom_effect">
                    	 <img class="img-in" src="images/blog8.png">
                 	</div>
                     <div class="in-inner">
                       <h4>The Advantages of Networking</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <a href="#" class="read">read more</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="blog-tab">
                  	<div class="zoom_effect">
                     	<img class="img-in" src="images/blog9.png">
                 	</div>
                     <div class="in-inner">
                      <h4>The Advantages of Networking</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <a href="#" class="read">read more</a>
                     </div>
                  </div>
               </div----->
            </div>
	</div>
</section>

 <?php
      get_footer();
   ?>