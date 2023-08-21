<?php 
/* Template Name:Myproduct */
// get_header();
/*
$product_id = 873;
$product = wc_get_product($product_id);
echo $product->get_name();
$product_image = $product->get_image('full');
echo $product_image;
*/
?>

<?php

$params = array(
    'posts_per_page' => 5,
    'post_type' => 'product'
); // (1)
$wc_query = new WP_Query($params); // (2)
?>
<?php if ($wc_query->have_posts()) : // (3) ?>
<?php while ($wc_query->have_posts()) : // (4)
                $wc_query->the_post(); // (4.1) ?>
<?php the_title(); // (4.2) ?>
<?php the_post_thumbnail('full'); // (4.3) ?>
<p><?php echo get_post_meta(get_the_ID(), '_regular_price', true); // (4.4) ?></p>
<p><?php echo get_post_meta(get_the_ID(), '_sale_price', true); // (4.5) ?></p>
<?php endwhile; ?>
<?php wp_reset_postdata(); // (5) ?>
<?php else:  ?>
<p>
     <?php _e( 'No Products' ); // (6) ?>
</p>

<?php endif;?>

      <!-- ======= End Header ======= -->

      <!-- ======= Banner start ======= -->


      <!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta content="width=device-width, initial-scale=1.0" name="viewport" />
      <title>Home</title>
      <meta content="" name="description" />
      <meta content="" name="keywords" />
      <!-- Favicons -->
      <link href="" rel="icon" />
      <link href="" rel="apple-touch-icon" />
      <!-- Vendor CSS Files -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet" />
      <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
      <!-- Template Main CSS File -->
      <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css" rel="stylesheet" />
      <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.png" type="image/x-icon">
   </head>
   <body>
      <!-- ======= Header ======= -->
      <header id="header">
         <!-- =======Top Header ======= -->
         <div class="top-header">
            <div class="container">
               <div class="row d-flex align-items-center">
                  <div class="col-lg-6 col-md-6 col-sm-6">
                     <div class="mail">
                        <a href="mailto:hello@buymysku.com">hello@buymysku.com</a>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 log-info">
                     <div class="account">
                        <a href="#">
                           <div class="user-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/user.png"></div>
                           <div class="log-account">
                              <p>My Account</p>
                           </div>
                        </a>
                     </div>
                     <div class="login">
                        <a href="#" class="lbtn">Login</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container d-flex align-items-center">
            <a href="index.html" class="logo me-auto"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.png" alt="" class="img-fluid" /></a>
            <nav id="navbar" class="navbar order-last order-lg-0">
               <ul>
                  <li><a class="nav-link scrollto" href="#hero">About</a></li>
                  <li><a class="nav-link scrollto" href="#about">Buy my SQU</a></li>
                  <li><a class="nav-link scrollto" href="#services">Sell my SKU</a></li>
                  <li><a class="nav-link scrollto" href="#blog">Pricing</a></li>
                  <li><a class="nav-link scrollto" href="#portfolio">Blog</a></li>
                  <!--  <li class="dropdown">
                     <a href="#"><span>Career</span> <i class="bi bi-chevron-down"></i></a>
                     <ul>
                         <li><a href="#">Drop Down 1</a></li>
                         <li class="dropdown">
                             <a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                             <ul>
                                 <li><a href="#">Deep Drop Down 1</a></li>
                                 <li><a href="#">Deep Drop Down 2</a></li>
                                 <li><a href="#">Deep Drop Down 3</a></li>
                                 <li><a href="#">Deep Drop Down 4</a></li>
                                 <li><a href="#">Deep Drop Down 5</a></li>
                             </ul>
                         </li>
                     </ul>
                     </li> -->
                  <li><a class="nav-link scrollto" href="#contact">FAQs</a></li>
               </ul>
              <!--  <i class="fa-solid fa-bars-staggered mobile-nav-toggle"></i> -->
               <i class="fa-solid fa-bars mobile-nav-toggle"></i>
            </nav>
            <div class="input-group">
               <div class="form-outline">
                  <input type="search" id="form1" class="form-control" />
                  <i class="fas fa-search"></i>
               </div>
            </div>
         </div>
      </header>
      <section class="banner">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="banner-content">
                     <h1>#1 Marketplace To 
                        <span>Buy & Sell</span> Amazon 
                        SKUs
                     </h1>
                     <a href="#" class="cmn-btn">register to bid now</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ======= Banner end ======= -->

      <!-- ======= Benifits section start ======= -->
      <section class="benifits">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-4">
                  <div class="benifit-inner">
                     <div class="b-icon">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/guarantee.png">
                     </div>
                     <div class="b-content">
                        <h5>Sell Your Stock Quickly - Guaranteed </h5>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4">
                  <div class="benifit-inner">
                     <div class="b-icon">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/boost.png">
                     </div>
                     <div class="b-content">
                        <h5>Boost the Efficiency of Your Business</h5>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4">
                  <div class="benifit-inner">
                     <div class="b-icon">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/social.png">
                     </div>
                     <div class="b-content">
                        <h5>Retain Benefits of Amazon Brand Registry</h5>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ======= Benifits section end ======= -->

      <!-- ======= Featured product section ======= -->
      <section class="product">
         <div class="container">
            <div class="product-inner">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="title">
                        <h3>Featured Listings</h3>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="product-btn">
                        <a href="#">view all lishting</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="product-cart">
               <div class="row">
                            <?php
                $params = array(
                    'posts_per_page' => 2,
                    'post_type' => 'product',
                    'paged' => get_query_var('paged')
                );
                $wc_query = new WP_Query($params);
                ?>
                <?php if ($wc_query->have_posts()) : ?>
                <?php while ($wc_query->have_posts()) : $wc_query->the_post(); ?>
                <?php
                $product = wc_get_product();
                $product_name = $product->get_name();
                $product_image= get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
                $regular_price = $product->get_regular_price();
                $sale_price = $product->get_sale_price();
               //  $product_id = get_the_ID();
               //  $add_to_cart = wc_get_cart_url() . '?add-to-cart=' . $product_id;
                $current_product_id = get_the_ID();
    
                // get the product based on the ID
                $product = wc_get_product( $current_product_id );
            
                // get the "Checkout Page" URL
                $checkout_url = WC()->cart->get_checkout_url();
                ?>
                  <!-- Single Product -->
                  <div class="col-md-6 col-lg-4 col-xl-3">
                     <div id="product-1" class="single-product">
                        <div class="part-2">
                           <div class="zoom_effect">
                          <?php echo "<img src=". $product_image .">" ?>
                          </div>
                           <h5 class="product-title"><?php echo  $product_name ?> </h5>
                           <div class="d-flex align-items-center price">
                              <p class="product-old-price"><?php echo $sale_price ?> </p>
                              <p class="product-time">31 Days, 9 Hours</p>
                           </div>
                           <div class="product-bt">
                           <!-- <a href="javascript:void(0);" class="buy-now button" data-product-id="<?php echo $current_product_id; ?>">Buy Now</a> -->
                           <a href="javascript:void(0);" class="buy-now button" data-product-id="<?php echo esc_attr($current_product_id); ?>">Buy Now</a>
                           //<?php  // echo '<a href="'.$checkout_url.'?add-to-cart='.$current_product_id.'" class="buy-now button">Buy Now</a>'; ?>
                           </div>
                        </div>
                     </div>
                  </div>
               <?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else: ?>
<p>No Products</p>
<?php endif; ?>
</div>
<div class="row">
        <div class="col-12">
            <?php
            echo paginate_links(array(
                'total' => $wc_query->max_num_pages,
                'prev_text' => '&laquo; Previous',
                'next_text' => 'Next &raquo;',
            ));
            ?>
        </div>
    </div>
            </div>
         </div>
      </section>
      <!-- ======= Featured product end section ======= -->

      <!-- ======= E Commerce section ======= -->
      <section class="e-commerce">
         <div class="container">
            <div class="row d-flex align-items-center">
               <div class="col-lg-6">
                  <div class="e-content">
                     <h2>Starting a new e-commerce store on Amazon?</h2>
                     <p>There is a huge opportunity for profit, but if you thought the journey would be easy, you’re in for a big surprise. In many ways, selling on Amazon is like selling in a physical store – you need to source inventory, design packaging, perform market research, analyze your competitors, and handle all the shipping logistics.</p>
                     <a href="#" class="btn-y">learn more</a>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="e-img">
                  <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/e-commerce.png">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ======= E Commerce end section ======= -->

      <!-- ======= Unmovable section ======= -->
      <section class="unmovable">
         <div class="container">
            <div class="row d-flex align-items-center">
               <div class="col-lg-6">
                  <div class="e-img">
                  <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/amazon 1.png">
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="e-content1">
                     <h2>Looking for a smarter way to sell unmovable products?</h2>
                     <p>Let’s face it – not every Amazon product is a winner. Even the most successful sellers on the platform will occasionally get stuck holding on to slow-moving stock that damages the health of their business and Amazon account. </p>
                     <a href="#" class="btn-y">learn more</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ======= Unmovable end section ======= -->

      <!-- ======= vedio-amazon section ======= -->
      <section class="vedio-amazon">
         <div class="container">
            <div class="vedio-img1">
               <iframe width="900" height="400" src="https://www.youtube-nocookie.com/embed/gEnmgBbI1Go" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
         </div>
      </section>
      <!-- ======= vedio-amazon end section ======= -->

      <!-- ======= Listing section ======= -->
      <section class="Listing">
         <div class="container">
            <div class="row d-flex align-items-center">
               <div class="col-lg-6">
                  <div class="e-content1">
                     <h2>Listing Fees</h2>
                     <p>No commissions. No relisting fee. No brokers. Just one simple fee to turn your excess stock into cash.</p>
                     <a href="#" class="btn-y">start listing now</a>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="listing-inner">
                     <div class="listing-img">
                     <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/scan.png">
                     </div>
                     <div class="listing-con">
                        <h3>single sku listing Fee $97</h3>
                     </div>
                  </div>
                  <div class="listing-p">
                     <p>listing your SKU (product) Untill it’s sold. fee is for single parent SKU (product) and also includes child/variations related to the parent SKU (such as color size Etc.)</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ======= Listing end section ======= -->

      <!-- ======= Get Ready section ======= -->
      <section class="get-ready">
         <div class="container">
            <div class="get-inner">
               <div class="get-left">
                  <h2>Ready to start selling?</h2>
                  <p>Browse hundreds of ready-to-list and already listed Amazon products with Buy My SKU.</p>
               </div>
               <div class="get-right d-flex justify-content-end">
                  <a href="#" class="btn-y">learn more</a>
               </div>
            </div>
         </div>
      </section>
      <!-- ======= Get Ready end section ======= -->

      <!-- ======= FAQ section ======= -->
      <section class="FAQ">
         <div class="container">
            <div class="faq-inner text-center">
               <h2>FAQs</h2>
            </div>
            <div class="accordion" id="accordionExample">
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                     <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                     Can I be anonymous as a seller?
                     </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <p>Yes, you can choose your own username, which shows on your listings and bidding. You do need to put in your real name and address when signing up, but they aren't shown to anyone until the transaction completes. If you have any further questions, please email us at hello@buymysku.com.</p>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                     Are there any commissions payable when you sell with Buy My SKU?
                     </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <p>No, there are no commissions or fees charged by Buy My SKU for a successful sale.</p>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                     What does it cost to sell on the platform?
                     </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <p>We only charge listing fees when you create a listing to sell. More information can be found on our PRICING page.</p>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingfour">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                     Are there any restrictions on what products can be listed for sale?
                     </button>
                  </h2>
                  <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <p>Yes. Products that are illegal or unsafe may not be listed for sale. Adult products may be listed without photos. If you are unsure please email us hello@buymysku.com. Buy My SKU reserves the right to make the final descision as to whether a product listing breaches these requirements.</p>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingfive">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                     Are there any restrictions on what products can be listed for sale?
                     </button>
                  </h2>
                  <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <p>Yes. Products that are illegal or unsafe may not be listed for sale. Adult products may be listed without photos. If you are unsure please email us hello@buymysku.com. Buy My SKU reserves the right to make the final descision as to whether a product listing breaches these requirements.</p>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingsix">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsix">
                     How do I collect payment when I've sold a listing?
                     </button>
                  </h2>
                  <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <p>No.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="get-right d-flex justify-content-center">
               <a href="#" class="btn-y">View All</a>
            </div>
         </div>
      </section>
      <!-- ======= FAQ END section ======= -->
      <!-- ======= Blog section ======= -->
      <section class="blogs">
         <div class="container">
            <div class="faq-inner text-center">
               <h2>Read Our Latest Blogs</h2>
            </div>
            <div class="testimonial__inner">
               <div class="testimonial-slider">
                  <div class="testimonial-slide">
                     <div class="testimonial_box">
                        <div class="testimonial_box-inner">
                           <div class="testimonial_box-top">
                              <div class="testimonial_box-icon">
                              <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/blog1.png">
                              </div>
                              <div class="blog-inner">
                                 <div class="testimonial_box-name">
                                    <span>by Admin | Jan 8, 2022 | Uncategorized</span>
                                    <h4>How do IPI and Storage Limits affect your Amazon business?</h4>
                                 </div>
                                 <div class="testimonial_box-text">
                                    <p>IPI and Storage Limits - What are these and how do they affect you as an Amazon Seller? As a relatively.........</p>
                                    <a href="#" class="read-more">Read More</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="testimonial-slide">
                     <div class="testimonial_box">
                        <div class="testimonial_box-inner">
                           <div class="testimonial_box-top">
                              <div class="testimonial_box-icon">
                              <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/blog2.png">
                              </div>
                              <div class="blog-inner">
                                 <div class="testimonial_box-name">
                                    <span>by Admin | Jan 8, 2022 | Uncategorized</span>
                                    <h4>How do IPI and Storage Limits affect your Amazon business?</h4>
                                 </div>
                                 <div class="testimonial_box-text">
                                    <p>IPI and Storage Limits - What are these and how do they affect you as an Amazon Seller? As a relatively.........</p>
                                    <a href="#" class="read-more">Read More</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="testimonial-slide">
                     <div class="testimonial_box">
                        <div class="testimonial_box-inner">
                           <div class="testimonial_box-top">
                              <div class="testimonial_box-icon">
                              <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/blog3.png">
                              </div>
                              <div class="blog-inner">
                                 <div class="testimonial_box-name">
                                    <span>by Admin | Jan 8, 2022 | Uncategorized</span>
                                    <h4>How do IPI and Storage Limits affect your Amazon business?</h4>
                                 </div>
                                 <div class="testimonial_box-text">
                                    <p>IPI and Storage Limits - What are these and how do they affect you as an Amazon Seller? As a relatively.........</p>
                                    <a href="#" class="read-more">Read More</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="testimonial-slide">
                     <div class="testimonial_box">
                        <div class="testimonial_box-inner">
                           <div class="testimonial_box-top">
                              <div class="testimonial_box-icon">
                              <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/blog1.png">
                              </div>
                              <div class="blog-inner">
                                 <div class="testimonial_box-name">
                                    <span>by Admin | Jan 8, 2022 | Uncategorized</span>
                                    <h4>How do IPI and Storage Limits affect your Amazon business?</h4>
                                 </div>
                                 <div class="testimonial_box-text">
                                    <p>IPI and Storage Limits - What are these and how do they affect you as an Amazon Seller? As a relatively.........</p>
                                    <a href="#" class="read-more">Read More</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="get-right d-flex justify-content-center">
               <a href="#" class="btn-y">View All</a>
            </div>
         </div>
      </section>
      <!-- ======= Blog end section ======= -->

      <!-- ======= Client logo section ======= -->
      <section class="client">
         <div class="container">
            <div class="row d-flex align-items-center">
               <div class="col-lg-4 col-md-4">
                  <div class="c-logo">
                  <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/cl1.png">
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 d-flex justify-content-center">
                  <div class="c-logo">
                  <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/cl2.png">
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 d-flex justify-content-end">
                  <div class="c-logo">
                  <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/cl3.png">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ======= Client logo end section ======= -->

      <!-- ======= footer section ======= -->
      <footer class="footer">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-3">
                  <div class="f-logo">
                     <a href="index.html" class="logo me-auto"><img src="images/logo.png" alt="" class="img-fluid" /></a>
                     <p>No part of this web page may be reproduced in any way without the prior written permission of Buy My SKU Limited. </p>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3">
                  <div class="footer-one">
                     <h5>Buy My Sku</h5>
                     <ul>
                        <a href="">
                           <li>Home</li>
                        </a>
                        <a href="">
                           <li>Fixed Price </li>
                        </a>
                        <a href="">
                           <li>Auctions </li>
                        </a>
                        <a href="">
                           <li>Blog </li>
                        </a>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3">
                  <div class="footer-one">
                     <h5>Other Links</h5>
                     <ul>
                        <a href="">
                           <li>Terms and Conditions</li>
                        </a>
                        <a href="">
                           <li>Privacy Policy </li>
                        </a>
                        <a href="">
                           <li>FAQs</li>
                        </a>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3">
                  <div class="footer-one">
                     <h5>CONTACT US</h5>
                     <ul>
                        <a href="">
                           <li><span><i class="fa-solid fa-envelope"></i></span>hello@buymysku.com</li>
                        </a>
                     </ul>
                     <h5 class="contact">FOLLOW US</h5>
                     <ul class="social">
                        <a href="">
                           <li><i class="fa-brands fa-facebook-f"></i></li>
                        </a>
                        <a href="">
                           <li><i class="fa-brands fa-youtube"></i></li>
                        </a>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="f-border"></div>
         <div class="copyright text-center">
            <div class="container">
               <p>©Copyright 2022 Buy My SKU Limited. All Rights Reserved.</p>
            </div>
         </div>
      </footer>
      <!-- ======= Footer end section ======= -->

      <!-- ======= Back to top button ======= -->

      <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-angle-up"></i></button>

      <!-- ======= Back to top  button  end ======= -->



      <!-- ======= JS Files ======= -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js'></script>
      <!-- ======= Main JS File ======= -->
      <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js"></script>
      
   </body>
</html>
    <!-- to get woocomerce  product name,image,price using wp_query  -->

    <script>
jQuery(document).ready(function($) {
    $('body').on('click', '.buy-now', function(event) {
        event.preventDefault();
        var productId = $(this).data('product-id'); //retrive data-product-id
        $.ajax({
            type: 'POST',
            url: '<?php echo admin_url('admin-ajax.php'); ?>', //ajax request
            data: {
                action: 'custom_add_to_cart',
                product_id: productId
            },
            success: function(response) {
                if (response === 'success') {
                    alert('Product added to cart successfully!');
                    window.location.href = '<?php echo esc_js(wc_get_cart_url()); ?>';
                } else {
                    alert('Error: Product could not be added to cart.');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert('Error: ' + thrownError);
            }
        });
    });
});
</script>








