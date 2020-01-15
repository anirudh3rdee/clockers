<?php 
/* Template Name: Privacy & Cookie Policy Template */

get_header();
?>

	<div class="main why-clockers privacy-policy">
            <div class="spacer"></div>

		<?php 
		$enable_pp_banner_section = get_field('enable_pp_banner_section');
		if($enable_pp_banner_section == 'Yes'){
		?>
            <section class="hero">
                <div class="container">
                    <div class="row">
                        <div class="hero__wrapper">
                            <div class=" hero__sec">
                                <div class="hero__text-holder">
                                    <h1 class="hero__title"><?php echo the_field('banner_pp_title');?></h1>

                                    <?php if( have_rows('banner_subtitle_pp') ): ?>
								    <?php while( have_rows('banner_subtitle_pp') ): the_row(); ?>
								    <?php if( get_row_layout() == 'banner_subtitle_layout' ): ?>

                                    <p class="hero__subtitle"><span class="bnanner__text-underline"><strong>
                                            <?php the_sub_field('pp_start_underline_text');?></strong></span>   <?php the_sub_field('pp_start_text');?></p>
									<?php endif; ?>
									<?php endwhile; ?>
									<?php endif; ?>
									
                                </div>
                            </div>
                            <div class="hero__banner clockers__banner">
                                <div class="hero__banner--image clockers__banner-wrap">
                                    <img class="clockers__banner-img" src="<?php echo the_field('banner_pp_right_image');?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
		<?php }?>
        

        <section class="privacy_page_text-block">
                <div class="container">
                    <div class="row">
                        <h1><?php the_field('page_title_pp');?></h1>
                        <p><?php the_field('page_content_pp');?></p>
                    </div>
                </div>
        </section>

            <section class="privacy_text-block">
                <div class="container">

                <?php if( have_rows('privacy_policy_points') ): ?>
                <?php while( have_rows('privacy_policy_points') ): the_row(); ?>
                <?php if( get_row_layout() == 'privacy_policy_layout' ): ?>

                    <div class="row">
                    <h3><?php the_sub_field('privacy_policy_points_title');?></h3>
                    <p><?php the_sub_field('privacy_policy_points_content');?></p>
                    </div>
                <?php endif; ?>
                <?php endwhile; ?>
                <?php endif; ?>
                   
                </div>
            </section>			
            
             <section class="privacy_text-block">
                <div class="container">
                    <div class="row">
                    <h3><?php the_sub_field('privacy_policy_points_title');?></h3>
                    <p><?php the_sub_field('privacy_policy_points_content');?></p>
                    </div>
                </div>
            </section>      

             <section class="privacy_text-block">
                <div class="container">
                    <div class="row">
                    <h3><?php the_sub_field('privacy_policy_points_title');?></h3>
                    <p><?php the_sub_field('privacy_policy_points_content');?></p>
                    </div>
                </div>
            </section>      

             <section class="privacy_text-block">
                <div class="container">
                    <div class="row">
                    <h3><?php the_sub_field('privacy_policy_points_title');?></h3>
                    <p><?php the_sub_field('privacy_policy_points_content');?></p>
                    </div>
                </div>
                <hr>
            </section>      
            
            <section class="privacy_page_text-block">
                <div class="container">
                    <div class="row">
                        <h1><?php the_field('cookies_policy_title');?></h1>
                        <?php the_field('cookie_policy_content');?>
                    </div>
                </div>
                <hr>
            </section>
            
            <section class="privacy_page_text-block">
                <div class="container">
                    <div class="row">
                        <h2><?php the_field('change_to_policy_title');?></h2>
                        <?php the_field('change_to_policy_content');?>
                    </div>
                </div>
            </section>
            <section class="privacy_page_text-block">
                <div class="container">
                    <div class="row">
                        <h2><?php the_field('contact_title');?></h2>
                        <?php the_field('contact_content');?>
                    </div>
                </div>
            </section>
        </div>

<?php get_footer();?>