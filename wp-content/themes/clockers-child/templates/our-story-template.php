<?php 
/* Template Name: Our Story Template */
get_header();
?>

	<div class="main why-clockers">
            <div class="spacer"></div>
                
		 <?php 
        $enable_our_story = get_field('enable_our_story_banner_section');
        if($enable_our_story == 'Yes'){
        ?>
            <section class="hero">
                <div class="container">
                    <div class="row">
                        <div class="hero__wrapper">
                            <div class=" hero__sec">
                                <div class="hero__text-holder">
                                    <h1 class="hero__title"><?php echo get_field('banner_our_story_title');?></h1>
                                    <p class="hero__subtitle"><?php echo get_field('banner_our_story_subtitle');?></p>
                                    <div class="space-btn"></div>
                                </div>
                            </div>
                            <?php 
                            $banner_image = get_field('banner_our_story_right_image');
                            if( $banner_image != '' ):
                            ?>
                            <div class="hero__banner clockers__banner">
                                <div class="hero__banner--image clockers__banner-wrap">
                                    <img class="clockers__banner-img" src="<?php echo $banner_image;?>">
                                </div>
                            </div>
                        <?php endif;?>
                        </div>
                    </div>
                </div>
            </section>
            <?php }
            $enable_first_section = get_field('enable_first_section');
            if($enable_first_section == 'Yes'){
            ?> 
            <section class="our-team">
                <div class="container">
                    <div class="our-team-wrapper">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="our-team__heading">
                                    <h3 class="our-team__heading-text"><?php echo get_field('left_content');?></h3>
                                </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="our-team__about">
                                        <p class="our-team__about-text"><?php echo get_field('right_content');?></h3>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php
            }
            $enable_second_section = get_field('enable_second_section');
            if( $enable_second_section == 'Yes'){
            ?>   
            <section class="scope">
                <div class="container">
                    <div class="row wc-scope__row">
                        <span class="scope__patern-up"><img class="wc-scope__pattern-up"
                                src="<?php echo site_url('/wp-content/uploads/2019/11/Pattern7-2.png');?>"></span>
                        <div class="scorp-wrapper">
                            <div class="clocker-scope__title ">
                                <h2 class="scope__title-text title text-white text-center"><?php echo get_field('second_s_heading');?></h2>
                            </div>
                            <div class="row ">
                                <div class="clocker-scope__btn">
                                    <a class="btn c-btn" href="<?php echo get_field('section_s_button_url');?>"><?php echo get_field('second_s_button_label');?></a>
                                </div>
                            </div>
                        </div>
                        <span class="scope__patern-down"><img class="wc-scope__pattern-down"
                                src="<?php echo site_url('/wp-content/uploads/2019/11/UI-Decor-Pattern-1.png');?>"></span>
                    </div>
                </div>
            </section>
            <?php
            }
            ?> 
        </div>
        
<?php get_footer();?>