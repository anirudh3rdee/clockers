<?php 
/* Template Name: How We Work Template */
get_header();
?>

	 <div class="main why-clockers">
        
    <?php 
    $enable_how_we_work_banner_section = get_field('enable_how_we_work_banner_section');
    if($enable_how_we_work_banner_section == 'Yes'){?>
        <section class="hero">
                <div class="container">
                    <div class="row">
                        <div class="hero__wrapper">
                            <div class=" hero__sec">
                                <div class="hero__text-holder">
                                    <h1 class="hero__title"><?php echo the_field('banner_how_we_work_title');?></h1>
                                    <p class="hero__subtitle"><?php echo the_field('banner_how_we_work_subtitle');?></p>
                                    <a href="<?php echo the_field('banner_how_we_work_button_link');?>"><button class="hero__btn"><?php echo the_field('banner_how_we_work_button_text');?></button></a>
                                </div>
                            </div>
                            <div class="hero__banner clockers__banner">
                                <div class="hero__banner--image clockers__banner-wrap">
                                    <img class="clockers__banner-img" src="<?php echo the_field('banner_how_we_work_right_image');?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php } ?>
        
        <?php 
    $four_boxes_enable = get_field('four_boxes_enable');
    if($four_boxes_enable == 'Yes'){?>
            <section class="bonus we-work__bonus bg-white">
                <div class="container">
                    <div class="row">
                        <div class="bonus__wrapper">
                            <div class="row bonus__cardwrapper">
                            
                            <?php if( have_rows('four_boxes_content') ): ?>
                            <?php while( have_rows('four_boxes_content') ): the_row(); ?>
                            <?php if( get_row_layout() == 'four_boxes_layout' ): ?>
                                <div class="col-md-3 bonus__col">
                                    <div class="card card--border-bottom" style="border-bottom-color:<?php the_sub_field('four_boxes_border_bottom_color'); ?>">
                                        <div class="card__img">
                                            <img class="work__image-img"
                                                src="<?php the_sub_field('four_boxes_image'); ?>">
                                        </div>
                                        <div class="card__spacer"></div>
                                        <h4 class="card__desp text-capitalize card__desp text-capitalize--capital"><?php the_sub_field('four_boxes_title'); ?></h4>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php endwhile; ?>
                            <?php endif; ?>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
         <?php } ?>
        
          <?php 
    $six_points_enable = get_field('six_points_enable');
    if($six_points_enable == 'Yes'){?>

            <section class="works how-we-work bg-white">
                <div class="container">
                    <div class="row">
                        <div class="works__box work shadow-box">

                        <?php if( have_rows('six_points_content') ): ?>
                        <?php while( have_rows('six_points_content') ): the_row(); ?>
                        <?php if( get_row_layout() == 'six_points_layout' ): ?>
                            <div class="col-md-4">
                                <div class="work__content">
                                    <div class="work__image">
                                        <img class="work__image-img"
                                            src="<?php the_sub_field('six_point_image'); ?>">
                                    </div>
                                    <h4 class="work__heading"><?php the_sub_field('six_point_title'); ?></h4>
                                    <p class="work__text"><?php the_sub_field('six_point_content'); ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php endwhile; ?>
                        <?php endif; ?>

                        </div>

                    </div>
                </div>
            </section>
            <?php } ?>
            
             <?php 
		    $industry_leading_enable = get_field('industry_leading_enable');
		    if($industry_leading_enable == 'Yes'){?>
            <section class="about-clockers leading purple-bg">
                <div class="container">
                    <div class="row">
                        <span class="leading__patern-up"><img class="leading__pattern-img"
                                src="<?php echo site_url();?>/wp-content/uploads/2019/11/Right.png"></span>
                        <div class="leading__wrapper">
                            <div class="about-clockers__descp ">
                                <h4 class="about-clockers__descp--title title text-white text-center">
                                    <?php echo the_field('industry_leading_title');?>
                                </h4>
                            </div>
                            <div class="methods">

                                <?php
                                    if( have_rows('industry_leading_content') ):
                                    while ( have_rows('industry_leading_content') ) : the_row(); $counter++;
                                ?>

                                <div class="method__box <?php if( $counter % 2 == 0 ){ echo 'pt-130';}?>">
                                    <div class="method__box-wrapper">
                                        <div class="method__circle" style="background-color:<?php the_sub_field('circle_color');?>"></div>
                                        <div class="method__desp">
                                            <h4 class="method__desp-text"><?php the_sub_field('leading_title');?></h4>
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
                        </div>
                        <span class="leading__patern-down"><img class="leading__pattern-img"
                                src="<?php echo site_url();?>/wp-content/uploads/2019/11/Left.png"></span>
                    </div>
                </div>
            </section>
            <?php } ?>
			
			<?php 
		    $enable_message_from = get_field('enable_message_from');
		    if($enable_message_from == 'Yes'){?>
            <section class="stories">
                <div class="container">
                    <div class="row">
                        <div class="stories__title title">
                        	<?php if( have_rows('message_from_title') ): ?>
						    <?php while( have_rows('message_from_title') ): the_row(); ?>
						    <?php if( get_row_layout() == 'message_from_layout' ): ?>

                            <h2 class=" title__text"><?php the_sub_field('message_from_start_text');?> <span class="title__text-underline">
                                    <?php the_sub_field('message_from_underline_text');?></span> <?php the_sub_field('message_from_end_text');?></h2>
                            <?php endif; ?>
							<?php endwhile; ?>
							<?php endif; ?>

                        </div>
                        <div class="stories__videos b-videos we-work__video">
                            <span><img class="we-work__stories-pattern-up"
                                    src="<?php echo site_url();?>/wp-content/uploads/2019/11/Circle5x5_borderBlue-1.png"></span>
                            <div class="b-videos__video-wrap we-work__videos-wrapper">
                                <?php $get_poster = get_field('message_from_video_poster');?>
                                <video class="b-videos__video we-work__video-video" width="187" height="187" controls poster="<?php if($get_poster !=''){ echo $get_poster; }?>">
                                    <source
                                        src="<?php echo the_field('message_from_video_url');?>"
                                        type="video/mp4">
                                </video>

                            </div>
                            <span><img class="we-work__stories-pattern-down"
                                    src="<?php echo site_url();?>/wp-content/uploads/2019/11/Pattern3.png"></span>
                        </div>

                    </div>
                </div>
            </section>
			<?php } ?>
			
			<?php 
		    $work_with_us_enable = get_field('work_with_us_enable');
		    if($work_with_us_enable == 'Yes'){?>
            <section class="scope">
                <div class="container">
                    <div class="row wc-scope__row">
                        <span class="we-work-scope__patern-up"><img class="wc-scope__pattern-up"
                                src="<?php echo site_url();?>/wp-content/uploads/2019/11/UI-Decor-Pattern-1.png"></span>
                        <div class="scorp-wrapper">
                            <div class="clocker-scope__title ">
							<?php if( have_rows('work_with_us_content') ): ?>
					    	<?php while( have_rows('work_with_us_content') ): the_row(); ?>
					        <?php if( get_row_layout() == 'work_with_us_layout' ): ?>
                                <h2 class="scope__title-text title text-white text-center"><?php the_sub_field('work_with_us_start_text');?> <span class="title__text-underline"><?php the_sub_field('work_with_us_underline_text');?> <span> <?php the_sub_field('work_with_us_end_text');?></h2>
                            <?php endif; ?>
						    <?php endwhile; ?>
							<?php endif; ?>   
                                	
                            </div>
                            <div class="row ">
                                <div class="clocker-scope__btn">
                                    <a href="<?php echo the_field('work_with_us_button_link');?>"><button class="btn c-btn"> <?php echo the_field('work_with_us_button_text');?></button></a>
                                </div>
                            </div>
                        </div>
                        <span class="we-work-scope__patern-down"><img class="wc-scope__pattern-down"
                                src="<?php echo site_url();?>/wp-content/uploads/2019/11/UI-Decor-Pattern-1.png"></span>
                    </div>
                </div>
            </section>
			<?php } ?>
			
			<?php 
		    $how_we_work_success_stories_enable = get_field('how_we_work_success_stories_enable');
		    if($how_we_work_success_stories_enable == 'Yes'){?>
            <section class="stories">
                <div class="container">
                    <div class="row">
                        <span><img class="stories__pattern"
                                src="<?php echo site_url();?>/wp-content/uploads/2019/11/Circle5x5_borderBlue.png"></span>
                        <div class="stories__title title">
                            <h2 class=" title__text"><?php echo the_field('how_we_work_success_stories_tittle');?> <span
                                    class="title__text-underline">
                                    <?php echo the_field('how_we_work_succes_stories_underline_text');?></span></h2>
                        </div>
                        <div class="stories__videos b-videos">
                            <div class="b-videos__video-wrap">
                                <?php $get_poster = get_field('how_we_work_success_stories_video_poster');?>
                                <video class="b-videos__video" width="187" height="187" controls poster="<?php if($get_poster !=''){ echo $get_poster; }?>">
                                    <source
                                        src="<?php echo the_field('how_we_work_success_stories_video');?>"
                                        type="video/mp4">
                                </video>

                            </div>
                            <div class="stories__name">
                                <h4 class="stroies__name-text"><?php echo the_field('how_we_work_success_stories_name');?></h4>
                                <a href="<?php echo the_field('how_we_work_success_story_button_link');?>" class="btn stories__btn"> <?php echo the_field('how_we_work_success_story_button_text');?><span class="stories__btn-img"><img
                                                src="<?php echo site_url();?>/wp-content/uploads/2019/11/arrow.png"></span></a>
                            </div>
                        </div>
                        <span><img class="stories__pattern-down"
                                src="<?php echo site_url();?>/wp-content/uploads/2019/11/Pattern3_gradient.png "></span>
                    </div>
                </div>
            </section>
			<?php } ?>
			
			<?php 
		    $how_we_work_free_project_enable = get_field('how_we_work_free_project_enable');
		    if($how_we_work_free_project_enable == 'Yes'){?>
            <section class="scope">
                <div class="container">
                    <div class="row wc-scope__row">
                        <span class="scope__patern-up"><img class="wc-scope__pattern-up"
                                src="<?php echo site_url();?>/wp-content/uploads/2019/11/Pattern7-2.png"></span>
                        <div class="scorp-wrapper">
                            <div class="clocker-scope__title ">
                            	<?php if( have_rows('free_project_how_we_work_title') ): ?>
							    <?php while( have_rows('free_project_how_we_work_title') ): the_row(); ?>
							    <?php if( get_row_layout() == 'free_project_layout' ): ?>

                                <h2 class="scope__title-text title text-white text-center"><?php the_sub_field('free_project_start_text');?> <span
                                        class="title__text-underline">
                                        <?php the_sub_field('free_project_underline_text');?> </span>  <?php the_sub_field('free_project_end_text');?></h2>
                                 <?php endif; ?>
								<?php endwhile; ?>
								<?php endif; ?>    
                            </div>
                            <div class="row ">
                                <div class="clocker-scope__btn">
                                    <a href="<?php echo the_field('free_project_how_we_work_button_link');?>" class="btn c-btn"> <?php echo the_field('free_project_how_we_work_button_text');?></a>
                                </div>
                            </div>
                        </div>
                        <span class="scope__patern-down"><img class="wc-scope__pattern-down"
                                src="<?php echo site_url();?>/wp-content/uploads/2019/11/UI-Decor-Pattern-1.png"></span>
                    </div>
                </div>
            </section>
            <?php } ?>
	
    </div>
        
<?php get_footer();?>