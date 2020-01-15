<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clockers
 */

?>

<!DOCTYPE html>
<html lang="en">
<?php global $redux_demo; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo get_bloginfo('title');?> | <?php echo get_bloginfo('description');?></title>
    <link rel="icon" href="<?php echo $redux_demo['fevicon']['url'];?>" type="image/gif" sizes="160x160">
<?php wp_head();?>
</head>

<body <?php body_class(); ?>>
	
    <div class="wrapper">
        <?php if(is_single()){
            $blog_id = get_the_ID();

            $thumbnail_url = get_the_post_thumbnail_url( $blog_id );
            echo "<div class='bg-wrapper' style='background-image:url(".$thumbnail_url.")'>";
            
        }?>
        <header class="nav" style="background-color: <?php echo $redux_demo['header-background-color']?>">
            <div class="container-fluid nav__container">

            	<?php 
            	$enable_top_stripe = $redux_demo['enable_top_stripe'];
            	if($enable_top_stripe == 1){
            	?>
                <div class="nav__top">
                    <ul class="nav__list">
                        <li class="nav__list-item">
                        	<?php 
                        	$language_translator = $redux_demo['enable_language_translator'];
                        	//var_dump($language_translator);
                        	if($language_translator == 1){
                        	?>
                        	<img class="nav__list-image" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/header/Uk@2x.png">
                        <?php } ?>
                        	<?php echo $redux_demo['top_header_phone_no'];?></li>
						<?php 
                        	$top_header_menu = $redux_demo['top_header_menu'];
                        	//var_dump($language_translator);
                        	if($top_header_menu == 1){

                        		wp_nav_menu( array( 
                        			'theme_location' => 'header-top-menu',
                        			'menu_class'      => 'nav__list-item', 
                        		) );
                        ?>	
                       
                        <?php } ?>
                    </ul>
                </div>
				<?php }?>

                <div class="nav__mainheader">
                    <div class="nav__wrapper">
                        <div class="nav__header">
                            <!-- Logo -->
                            <a href="<?php echo site_url();?>" class="logo nav__logo">
                                <?php 
                                    if($redux_demo['retina_logo']['url'] != ''){
                                ?>
                                <img class="logo__img retina_logo" src="<?php echo $redux_demo['retina_logo']['url'];?>" alt="Retina logo">
                                <?php } else { ?>
                                <img class="logo__img" src="<?php echo $redux_demo['site_logo']['url'];?>" alt="logo">
                                <?php } ?>
                            </a>
                            <!-- Mobile toggle -->
                            <button type="button" class="nav__icon-toggle" id="nav__icon-toggle">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="nav__icon-toggle-bar nav__icon-toggle-bar1"></span>
                                <span class="nav__icon-toggle-bar nav__icon-toggle-bar2"></span>
                                <span class="nav__icon-toggle-bar nav__icon-toggle-bar3"></span>
                            </button>
                        </div>
                        <!-- Navbar -->
                        <nav id="navbar-collapse" class="nav__wrap navbar-collapse">
                           
                                <?php 
                                	wp_nav_menu( array( 
                        			'theme_location' => 'primary-menu',
                        			'container' => 'ul',
    								'menu_class'=> 'nav__list nav__list-item'
                        		) );
                                ?>

                            <!-- end menu -->
                        </nav> <!-- end nav-wrap -->
                        <div class="nav__btn-holder nav--align-right">
                            <a href="<?php echo $redux_demo['header_btn_link'];?>" class=" nav__btn">
                                <?php echo $redux_demo['header_btn_text'];?>
                            </a>
                        </div>
                    </div> <!-- end flex-parent -->
                </div>
            </div>
        </header>
		
		<!-- mobile-header -->
		<div class="mobile__navbar " id="mySidenav" style="width: 0px;">
    <div class="side__logo logo">
        <a href="<?php echo site_url();?>" class="logo nav__logo">
            <?php if($redux_demo['retina_mobile_logo']['url'] != ''){ ?>
            <img class="logo__img retina_mobile_logo"
                src="<?php echo $redux_demo['retina_mobile_logo']['url'];?>" alt="Retina Mobile logo">
            <?php } else { ?>
            <img class="logo__img mobile_logo"
                src="<?php echo $redux_demo['mobile_logo']['url'];?>" alt="Mobile logo">
            <?php } ?>
        </a>
    </div>

    <nav id="navbar-collapse" class="nav__wrap-mobile-view navbar-collapse">
        <ul class="nav__list nav__list--menu">          
        <?php 
            wp_nav_menu( array( 
                'theme_location' => 'mobile-menu',
                'container' => 'ul',
                'menu_class'=> 'nav__list nav__list-item'
            ) );
        ?>

        </ul> <!-- end menu -->
    </nav> <!-- end nav-wrap -->
    <div class="side__bottom-nav">
        <ul class="side-info">
            <li class="side-info__list text-orange"><?php echo $redux_demo['footer_top_text'];?></li>
            <li class="side-info__list"><?php echo $redux_demo['footer_top_email'];?></li>
            <li class="side-info__list"><?php echo $redux_demo['footer_top_phone'];?></li>
        </ul>
    </div>

</div>