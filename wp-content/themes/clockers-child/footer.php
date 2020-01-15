<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clockers
 */

global $redux_demo;
?>

<footer class="footer">
	<span class="footer__patern-up"><img class="footer__pattern-img" src="<?php echo site_url();?>/wp-content/uploads/2019/11/Pattern3_grey.png "></span>
    <div class="container">
        <div class="row footer__wrapper">
            <div class="col-md-4">
                <div class="footer__logo logo">
                    <a href="<?php echo site_url();?>" class="logo nav__logo">
                        <img class="logo__img" src="<?php echo $redux_demo['footer_logo']['url'];?>" alt="Footer logo">
                    </a>
                </div>
                <div class="card__spacer"></div>
                <div class="footer__para">
                    <p class="footer__para-text"><?php echo $redux_demo['footer_logo_text'];?></p>
                    <a href="<?php echo $redux_demo['footer_logo_button_link'];?>"><button class="btn footer__btn"><?php echo $redux_demo['footer_logo_button_text'];?></button></a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="footer_desp">
                    <ul class="ftr-info">
                        <li class="ftr-info__list text-orange"><?php echo $redux_demo['footer_top_text'];?></li>
                        <li class="ftr-info__list"><?php echo $redux_demo['footer_top_email'];?></li>
                        <li class="ftr-info__list"><?php echo $redux_demo['footer_top_phone'];?></li>
                    </ul>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="ftr-menu__wrapper">
                                <ul class="ftr-menu__wrapper-info">
                                    <li class="ftr-menu__wrapper--list text-orange">Clockers</li>
                                    <?php 
                                     wp_nav_menu( array( 
                                        'theme_location' => 'footer-1',
                                        'container' => 'ul',
                                        'menu_class'=> 'ftr-menu__wrapper-info'
                                    ) );
                                    ?>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="ftr-menu__wrapper">
                                <ul class="ftr-menu__wrapper-info">
                                    <li class="ftr-menu__wrapper--list text-orange">Company</li>
                                    <?php 
                                     wp_nav_menu( array( 
                                        'theme_location' => 'footer-2',
                                        'container' => 'ul',
                                        'menu_class'=> 'ftr-menu__wrapper-info'
                                    ) );
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="ftr-menu__wrapper">
                                <ul class="ftr-menu__wrapper-info">
                                    <li class="ftr-menu__wrapper--list text-orange">Visit Us</li>
                                    <li class="ftr-menu__wrapper--list"><?php echo $redux_demo['footer_visit_us'];?></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="ftr-menu__wrapper">
                                <ul class="ftr-menu__wrapper-info">
                                    <li class="ftr-menu__wrapper--list text-orange">Follow Us</li>
                                    <li class="ftr-menu__wrapper--list custom_linkdin"><a href="<?php echo $redux_demo['footer_linkdin'] ?>" target="_blank">LinkedIn</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="bottom-footer">
            <div class="container">
                <div class="row">
                    <ul class="btm-menu">
                        <li class="btm-menu__list ml-0"><?php echo $redux_demo['footer_copyright'];?></li>
                        <li class="btm-menu__list light-fonts"><?php echo $redux_demo['footer_company_number'];?></li>

                        <?php 
                        $copyright_menus = $redux_demo['copyright_menus'];
                        if($copyright_menus == 1){
                        ?>
                        <li class="btm-menu__list">
                               <?php 
                                     wp_nav_menu( array( 
                                        'theme_location' => 'copyright_navigation',
                                        'container' => 'ul',
                                        'menu_class'=> 'terms'
                                    ) );
                                ?>

                        </li>
                    <?php }?>
                    
                    </ul>
                </div>
            </div>
        </div>
</footer>

</div>
<?php wp_footer(); ?>

</body>
</html>





