<?php 
/* Template Name: Terms & Conditions Template */
get_header();
?>

	<div class="main why-clockers term-condition">
            <div class="spacer"></div>

		<?php 
		$enable_tc_banner_section = get_field('enable_t&c_banner_section');
		if($enable_tc_banner_section == 'Yes'){
		?>
            <section class="hero">
                <div class="container">
                    <div class="row">
                        <div class="hero__wrapper">
                            <div class=" hero__sec">
                                <div class="hero__text-holder">
                                    <h1 class="hero__title"><?php echo the_field('banner_t&c_title');?></h1>

                                    <?php if( have_rows('banner_subtitle_t&c') ): ?>
								    <?php while( have_rows('banner_subtitle_t&c') ): the_row(); ?>
								    <?php if( get_row_layout() == 'banner_subtitle_layout' ): ?>

                                    <p class="hero__subtitle"><span class="bnanner__text-underline"><strong>
                                            <?php the_sub_field('t&c_start_underline_text');?></strong></span>   <?php the_sub_field('t&c_start_text');?></p>
									<?php endif; ?>
									<?php endwhile; ?>
									<?php endif; ?>
									
                                </div>
                            </div>
                            <div class="hero__banner clockers__banner">
                                <div class="hero__banner--image clockers__banner-wrap">
                                    <img class="clockers__banner-img" src="<?php echo the_field('banner_t&c_right_image');?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
		<?php }?>
        

        <section class="terms_page_text-block ">
                <div class="container">
                    <div class="row">
                        <h1><?php echo the_field('page_title_t&c');?></h1>
                        <p><?php echo the_field('page_content_t&c');?></p>
                    </div>
                </div>
        </section>

            <section class="terms_text-block ">
                <div class="container">

                <?php if( have_rows('terms_points') ): ?>
                <?php while( have_rows('terms_points') ): the_row(); ?>
                <?php if( get_row_layout() == 'terms_points_layout' ): ?>

                    <div class="row">
                    <h3><?php the_sub_field('terms_points_title');?></h3>
                    <p><?php the_sub_field('terms_points_content');?></p>
                    </div>
                <?php endif; ?>
                <?php endwhile; ?>
                <?php endif; ?>
                   
                </div>
            </section>			

        </div>

<?php get_footer();?>