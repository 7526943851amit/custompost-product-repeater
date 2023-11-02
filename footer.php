<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?php echo get_stylesheet_directory_uri();?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri();?>/assets/css/all.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri();?>/assets/css/slick.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri();?>/assets/fonts/fonts.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri();?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri();?>/assets/css/media.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/fav.png">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600;9..40,700;9..40,800&display=swap" rel="stylesheet">
    
	<?php wp_head();?>
</head>

<body <?php body_class('fixedheader_top');?>>
    <header class="header">
        <div class="container-fluid">
                <div class="row">
                   <div class="col-sm-2 col-xs-6">
                  <a href="<?php echo home_url();?>" class="logo"><img src="<?php echo get_field('header_logo','options');?>" alt=""></a>
               </div>
           
           <div class="col-sm-10 col-xs-6">
            <h1 class="mobile-menu" onclick="openNav()"><span><i class="fa fa-bars"></i></span></h1>
              <div class="navigation" id="mySidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                 <?php $menu = wp_get_menu_array('Mian Menu') ; 
				//echo '<pre>';print_r($menu);echo '</pre>';?>
                 <ul class="nav-sub-menu">
				 <?php 
				 
				 foreach($menu as $mh) 
				{ 
				 if(empty($mh['children'])) 
				 {
				 ?>
                   <li><a class="<?php if(str_replace('/','',$mh['url'])==str_replace('/','',get_permalink())){ echo 'active'; } ?>" href="<?php echo $mh['url']; ?>"><?php echo $mh['title']; ?></a></li>  
                    <?php
				}
					if(!empty($mh['children']))
					{
					?>				   
                   <li>
                    <a href="<?php echo $mh['url']; ?>"><?php echo $mh['title']; ?><span class="drop-arow"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/ar.png" alt=""></span></a>
                    <ul class="drop-down">
					<?php 
						$i=1;
								foreach($mh['children']  as $childm)
								{
						    ?>
                      <li><a href="<?php echo $childm['url']; ?>" class="<?php if(str_replace('/','',$childm['url'])==str_replace('/','',get_permalink())){ echo 'childactive'; } ?>"><?php echo $childm['title']; ?></a></li>
						<?php } ?>
                     </ul> 
                   </li> 
				<?php } }?>				   
                   <?php $button =  get_field('become_a_volunteer','options');?>
                  <li><a href="<?php echo $button['url'];?>" data-toggle="modal" data-target="#myModal"><?php echo $button['title'];?></a>
                  </li>
                 </ul>
              </div>
          </div>
        </div>   
      </div>
      </header>
