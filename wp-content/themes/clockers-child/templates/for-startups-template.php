<?php 
/* Template Name: For Startups Template */
get_header();
?>

	<div class="main why-clockers">
            <div class="spacer"></div>

		<?php 
		$enable_for_startups_banner_section = get_field('enable_for_startups_banner_section');
		if($enable_for_startups_banner_section == 'Yes'){
		?>
            <section class="hero">
                <div class="container">
                    <div class="row">
                        <div class="hero__wrapper">
                            <div class=" hero__sec">
                                <div class="hero__text-holder">
                                    <h1 class="hero__title"><?php echo the_field('banner_for_startups_title');?></h1>

                                    <?php if( have_rows('banner_subtitle_for_startup') ): ?>
								    <?php while( have_rows('banner_subtitle_for_startup') ): the_row(); ?>
								    <?php if( get_row_layout() == 'for_startup_layout' ): ?>

                                    <p class="hero__subtitle"><span class="bnanner__text-underline"><strong>
                                            <?php the_sub_field('for_startup_start_underline_text');?></strong></span>   <?php the_sub_field('for_startup_start_text');?></p>
									<?php endif; ?>
									<?php endwhile; ?>
									<?php endif; ?>
									<a href="<?php echo the_field('banner_for_startups_button_link');?>"><button
                                            class="hero__btn text-capitalize"><?php echo the_field('banner_for_startups_button_text');?></button></a>
                                </div>
                            </div>
                            <div class="hero__banner clockers__banner">
                                <div class="hero__banner--image clockers__banner-wrap">
                                    <img class="clockers__banner-img" src="<?php echo the_field('banner_for_startups_right_image');?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
		<?php }?>

		<?php 
		$digital_technology_enable = get_field('digital_technology_enable');
		if($digital_technology_enable == 'Yes'){
		?>
            <section class="statups__text-block bg-light">
                <div class="container">
                    <div class="row">
                        <div class="statups__text-block-wrapper">
                            <div class="row text-block-wrapper">
                                <div class="col-md-6">
                                    <div class="statups__text-block-heading">
                                        <h4 class="text-block__heading">
                                        <?php echo the_field('digital_technology_left_content');?>
                                        </h4>
                                    </div>
                                </div>
                                <div class="col-md-5 offset-md-1">
                                    <div class="statups__text-block-text">
                                        <p class="text-block__text"><?php echo the_field('digital_technology_right_content');?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
			<?php }?>
			
		<?php 
		$how_cto_enable = get_field('how_cto_enable');
		if($how_cto_enable == 'Yes'){
		?>
            <section class="startups__cto purple-gradient">
                <div class="container">
                    <div class="CTO__wrapper">
                        <div class="row">
                            <div class="col-md-4 CTO-col">
                                <span class="startups__cto-pattern"><img class="startups__pattern-img"
                                        src="<?php echo the_field('house_cto_left_image');?>"></span>
                            </div>
                            <div class="col-md-7 offset-md-1">
                                <div class="CTO__text-wrapper">
                                    <p class="CTO-text"><?php echo the_field('house_cto_right_title');?></p>
                                    <a href="<?php echo the_field('house_cto_button_link');?>"><button class="cto__btn c-btn"><?php echo the_field('house_cto_button_text');?></button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
			<?php }?>

		<?php 
		$what_we_value_enable = get_field('what_we_value_enable');
		if($what_we_value_enable == 'Yes'){
		?>
            <section class="value">
                <div class="container">
                    <div class="value__wrapper">
                        <span class="leading__patern-up"><img class="leading__pattern-img"
                                src="<?php echo site_url();?>/wp-content/uploads/2019/11/Group-1-1.png"></span>
                        <div class="row">
                            <div class="stories__title title">
                                <h2 class=" title__text"><?php echo the_field('what_we_value_title');?></h2>
                            </div>
                        </div>
                        <div class="strong-team__wrapper">

                        	<?php 
                        	$c = 0;
							$j = 0;
                        	if( have_rows('what_we_value_box_content') ):
						    while ( have_rows('what_we_value_box_content') ) : the_row();
						    $c++;
							$j++;
						    ?>

                            <div class="strong-team__box <?php if( $c == 3) { echo 'text-center mb-95'; }?> strong-box-<?php echo $j;?>">
                                <div class="strong-team__box-wrapper">
                                    <div class="strong-team__circle <?php if( $c == 3) { echo 'center'; }?> method__circle" style="background-color:<?php the_sub_field('what_we_value_circle_color');?>">
                                    </div>
                                    <div class="strong-team__desp">
                                        <h4 class="strong-team__desp-text"><?php the_sub_field('what_we_value_box_title');?></h4>
                                    </div>
                                </div>
                            </div>
                          	
                          	<?php 
                          	endwhile;
							else :
							    // no rows found
							endif;
							?>

                          
                           
                           
                        </div>
                        <span class="leading__patern-down"><img class="leading__pattern-img"
                                src="<?php echo site_url();?>/wp-content/uploads/2019/11/Group-1-1.png"></span>
                    </div>
                </div>
            </section>
            <?php }?>

			<?php 
			$lets_get_started_enable = get_field('lets_get_started_enable');
			if($lets_get_started_enable == 'Yes'){
			?>
            <section class="get-start bg-light">
                <div class="container">
                    <div class="get-started__wrapper">
                        <div class="row">
                            <div class="col-md-3 offset-md-1 pdr-0">
                                <div class="img__gert-started">
                                    <img src="<?php echo the_field('lets_get_started_left_image');?>" alt="">
                                </div>
                            </div>
                            <div class="col-md-5 pdl-0">
                                <div class="get-started__desp">
                                    <p class="get-start__text"><?php echo the_field('lets_get_started_right_top_text');?></p>
                                    <h4 class="get-start__heading"><?php echo the_field('lets_get_started_right_bottom_text');?></h4>
                                    <a href="<?php echo the_field('lets_get_started_button_link');?>"><button
                                            class="hero__btn get-start-btn text-capitalize"><?php echo the_field('lets_get_started_button_text');?></button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
			<?php }?>

			<?php 
			$technology_enable_copy = get_field('technology_enable_copy');
			if($technology_enable_copy == 'Yes'){
			?>
            <section class="technologies purple-bg">
                <div class="container">
                    <div class="row technologies__row">
                            <span class="technologies__patern-up"><img class="leading__pattern-img"
                                src="<?php echo site_url();?>/wp-content/uploads/2019/11/Group-1-1.png"></span>
                        <div class="technologies-wrapper">
                            <div class="technologies__title ">
                                <h2 class="technologies__title-text title text-white text-center"><?php echo the_field('technology_section_title');?></h2>
                            </div>
                            <div class="frontend">
                                <div class="frontend-heading">
                                    <h6 class="frontend-heading-text"><?php echo the_field('frontend_title');?></h6>
                                </div>
                                <div class="frontend__wrapper dispaly-all">
                                	<?php 
                                	if( have_rows('technologies_frontend') ):
								    while ( have_rows('technologies_frontend') ) : the_row();
								    ?>
                                    <img class="technologies-img" src="<?php the_sub_field('technologies_frontend_image');?>" alt="Frontend Technologies">
									<?php 
									endwhile;
									else :
									    // no rows found
									endif;
									?>
                                </div>
                            </div>
                            <div class="frontend backend">
                                <div class="frontend-heading">
                                    <h6 class="frontend-heading-text"><?php echo the_field('backend_title');?></h6>
                                </div>
                                <div class="backend__wrapper ">
                                    <div class="row technologies-row dispaly-all">
                                    <?php 
                                	if( have_rows('technologies_backend') ):
								    while ( have_rows('technologies_backend') ) : the_row();
								    ?>

                                        <img class="technologies-img" src="<?php the_sub_field('technologies_backend_image');?>"
                                            alt="Backend Technologies">
                                    <?php 
									endwhile;
									else :
									    // no rows found
									endif;
									?>    
                                    </div>

                                </div>
                            </div>
                            <div class="frontend mobile">
                                <div class="frontend-heading">
                                    <h6 class="frontend-heading-text"><?php echo the_field('mobile_title');?></h6>
                                </div>
                                <div class="backend__wrapper ">
                                    <div class="row technologies-row dispaly-all">
										<?php 
	                                	if( have_rows('technologies_mobile') ):
									    while ( have_rows('technologies_mobile') ) : the_row();
									    ?>
                                        <img class="technologies-img" src="<?php the_sub_field('technologies_mobile_image');?>"
                                            alt="Technology Mobile">
                                        <?php 
										endwhile;
										else :
										    // no rows found
										endif;
										?> 

                                    </div>
                                </div>
                            </div>
                            <div class="frontend DevOps">
                                    <div class="frontend-heading">
                                        <h6 class="frontend-heading-text"><?php echo the_field('devops_title');?></h6>
                                    </div>
                                    <div class="backend__wrapper ">
                                        <div class="row technologies-row dispaly-all">
											<?php 
		                                	if( have_rows('technologies_devops') ):
										    while ( have_rows('technologies_devops') ) : the_row();
										    ?>
                                            <img class="technologies-img" src="<?php the_sub_field('technologies_devops_image');?>"
                                                alt="Technologies DevOps">
                                     		<?php 
											endwhile;
											else :
											    // no rows found
											endif;
											?> 
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <span class="technologies__patern-down "><img class="leading__pattern-img"
                            src="<?php echo site_url();?>/wp-content/uploads/2019/11/Group-2-1.png"></span>
                    </div>
                </div>
            </section>
			<?php }?>
			
			<?php 
			$for_startups_success_stories_enable = get_field('for_startups_success_stories_enable');
			if($for_startups_success_stories_enable == 'Yes'){
			?>
            <section class="stories">
                <div class="container">
                    <div class="row">
                        <span><img class="stories__pattern"
                                src="<?php echo site_url();?>/wp-content/uploads/2019/11/Circle5x5_borderBlue-1.png"></span>
                        <div class="stories__title title">
                            <h2 class=" title__text"><?php echo the_field('for_startups_success_stories_tittle');?> <span
                                    class="title__text-underline">
                                    <?php echo the_field('for_startups_succes_stories_underline_text');?></span></h2>
                        </div>
                        <div class="stories__videos b-videos">
                            <div class="b-videos__video-wrap">
                                <?php $get_poster = get_field('for_startups_success_stories_poster');?>
                                <video class="b-videos__video" width="770" height="414" controls poster="<?php if($get_poster !=''){ echo $get_poster; }?>">
                                    <source
                                        src="<?php echo the_field('for_startups_success_stories_video');?>"
                                        type="video/mp4">
                                </video>

                            </div>
                            <div class="stories__name">
                                <h4 class="stroies__name-text"><?php echo the_field('for_startups_success_stories_name');?></h4>
                                <a href="<?php echo the_field('for_startups_success_story_button_link');?>" class="btn stories__btn"> <?php echo the_field('for_startups_success_story_button_text');?> <span class="stories__btn-img"><img
                                                src="<?php echo site_url();?>/wp-content/uploads/2019/11/arrow.png"></span></a>
                            </div>
                        </div>
                        <span><img class="stories__pattern-down"
                                src="<?php echo site_url();?>/wp-content/uploads/2019/11/Pattern3_gradient.png"></span>
                    </div>
                </div>
            </section>
			<?php }?>
			
			<?php 
			$for_startups_free_project_enable = get_field('for_startups_free_project_enable');
			if($for_startups_free_project_enable == 'Yes'){
			?>
            <section class="scope">
                <div class="container">
                    <div class="row wc-scope__row">
                        <span class="scope__patern-up"><img class="wc-scope__pattern-up"
                                src="<?php echo site_url();?>/wp-content/uploads/2019/11/Pattern7-2.png"></span>
                        <div class="scorp-wrapper">
                            <div class="clocker-scope__title ">
                            	<?php if( have_rows('free_project_for_startups_title') ): ?>
							    <?php while( have_rows('free_project_for_startups_title') ): the_row(); ?>
							    <?php if( get_row_layout() == 'free_project_layout' ): ?>
                                <h2 class="scope__title-text title text-white text-center"><?php the_sub_field('free_project_start_text');?>   <span class="title__text-underline">
                                        <?php the_sub_field('free_project_underline_text');?> </span> <?php the_sub_field('free_project_end_text');?></h2>
                                <?php endif; ?>
								<?php endwhile; ?>
								<?php endif; ?>
                            </div>
                            <div class="row ">
                                <div class="clocker-scope__btn">
                                    <a href="<?php echo the_field('free_project_for_startups_button_link');?>" class="btn c-btn"> <?php echo the_field('free_project_for_startups_button_text');?></a>
                                </div>
                            </div>
                        </div>
                        <span class="scope__patern-down"><img class="wc-scope__pattern-down"
                                src="<?php echo site_url();?>/wp-content/uploads/2019/11/UI-Decor-Pattern-1.png"></span>
                    </div>
                </div>
            </section>
			<?php }?>

        </div>

<?php get_footer();?>