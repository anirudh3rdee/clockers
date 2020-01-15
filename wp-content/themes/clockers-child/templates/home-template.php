<?php 
/* Template Name: Home Template */
get_header();
?>

	<div class="main">
		<div class="spacer"></div>

		<?php 
			$enable_banner_section = get_field('enable_banner_section');
			if($enable_banner_section == 'Yes'){
		?>
        <section class="hero full-hero">
            <div class="container">
                <div class="row">
                    <div class="hero__wrapper">
                        <div class=" hero__sec">
                            <div class="hero__text-holder">
                                <h1 class="hero__title"><?php echo the_field('banner_title');?></h1>
                                <p class="hero__subtitle hide"><?php echo the_field('banner_subtitle');?></p>
								<p class="hero__subtitle mobile-view"><?php echo the_field('banner_subtitle_mobile');?></p>
                                <a href="<?php echo the_field('banner_button_link');?>"><button class="hero__btn"><?php echo the_field('banner_button_text');?></button></a>
                            </div>
                        </div>
                        <div class="hero__banner">
                            <div class="hero__banner--image">
                                <img src="<?php echo the_field('banner_right_image');?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="logoslide">
                        <p class="logoslide__heading"><?php echo the_field('startup_title');?></p>
                        <div class="logoslide__wrapper">
                         
                            <?php
								if( have_rows('startup_images') ):
								    while ( have_rows('startup_images') ) : the_row();
								        $getstartup_images = get_sub_field('who_trust_us_images');
							?>
							<img class="logoslide__img" src="<?php echo $getstartup_images;?>">
							
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
        </section>
		<?php }?>
        
        <section class="ourclients">
            <div class="container">
                <div class="row">
                    <span><img class="ourclients__pattern" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/backgrounds/Pattern2_purple.png"></span>
                    <div class="ourclients__title title">
                        <h2 class="title__text ">
                            <?php echo the_field('client_section_title');?>
                        </h2>
                    </div>
                    <div class="box">

                    	<?php 
							$args = array( 'post_type' => 'testimonial', 'order'=>'DESC' ,'posts_per_page' => 3 );
						    $loop = new WP_Query( $args );
						    while ( $loop->have_posts() ) : $loop->the_post();
						    $testimonial_id = get_the_ID();
						    $testimonial_title = get_the_title();
						    $testimonial_content = get_the_content();
						    $testimonial_img = get_the_post_thumbnail_url();
						?>

                        <div class="box__shadow">
                            <div class="box__iconsec">
                                <img class="box_icon" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/clients/QuotationMark.png">
                            </div>
                            <div class="box__description">
                                <p class="box__description-text"><?php echo $testimonial_content;?></p>
                            </div>
                            <div class="box__bottom">
                                <h2 class="box__item"><?php echo $testimonial_title;?></h2>
                                <img src="<?php echo $testimonial_img;?>">
                            </div>
                        </div>
                        
                        <?php   
						    endwhile;
                            wp_reset_postdata();
						?>

                    </div>
                    <span><img class="ourclients__pattern-down" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/backgrounds/Pattern2.png "></span>
                </div>
            </div>
        </section>

        <?php 
            $enable_where_you_are = get_field('enable_where_you_are');
            if($enable_where_you_are =='Yes'){
        ?>
        <section class="products">
            <div class="container">
                <div class="row">
                    <div class="products__title title">
                        <h2 class=" title__text title__text--white"><?php echo the_field('where_you_are_title');?> <span class="title__text-underline"><?php echo the_field('where_you_are_underline_text');?></span></h2>
                    </div>
                      <?php if (have_rows('where_you_are_top_section')) : ?>
                        <?php while (have_rows('where_you_are_top_section')) : the_row(); ?>
                        <?php if (get_row_layout() == 'top_section_layout') : ?>

                    <div class="products__detail">

                        <div class="col-md-6">
                            <div class="products__image products__image--gradient">
                          <?php $image_left = get_sub_field('top_section_left_image');?>
                            <img src="<?php echo $image_left;?>" />
                              
                             
                            </div>
                        </div>
                       
                        <div class="col-md-6">
                            <div class="products__descp">
                                <h4 class="products__descp--title">
                                    <?php the_sub_field('top_section_title'); ?>
                                </h4>
                                <span class="products__descp--underline"></span>
                                <p class="products__descp-text"><?php the_sub_field('top_section_content');?></p>
                                
                                <a href="<?php the_sub_field('top_section_button_link');?>"><button class="products__btn c-btn"><?php the_sub_field('top_section_button_text');?></button></a>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endwhile ;?>
                    <?php endif; ?>

                </div>
                <div class="row p-row">

                    <?php if (have_rows('where_you_are_bottom_section')) : ?>
                    <?php while (have_rows('where_you_are_bottom_section')) : the_row(); ?>
                    <?php if (get_row_layout() == 'bottom_section_layout') : ?>

                    <div class="products__detail">

                        <div class="col-md-6 products__detail-des">
                            <div class="products__descp">
                                <h4 class="products__descp--title">
                                    <?php the_sub_field('bottom_section_title');?> 
                                </h4>
                                <span class="products__descp--underline"></span><p class="products__descp-text"><?php the_sub_field('bottom_section_content');?> </p>
                                <a href="<?php the_sub_field('bottom_section_button_link');?>"><button class="products__btn c-btn"><?php the_sub_field('bottom_section_button_text');?> </button></a>
                            </div>
                        </div>


                        <div class="col-md-6 products__detail-img">
                            <div class="products__image products__image--gradient">
                                <?php $image_right = get_sub_field('bottom_section_right_image');?>
                                <img src="<?php echo $image_right;?>">
                            </div>
                        </div>

                    </div>
                    <?php endif; ?>
                    <?php endwhile ;?>
                    <?php endif; ?>

                </div>
            </div>
        </section>
        <?php }?>

        <section class="team">
            <div class="container">
                <div class="row">
                    <div class="team__wrapper">
                        <div class="col-md-4">
                            <div class="team__image">
                                <img src="<?php echo the_field('team_left_image');?>">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="team__descp">
                                <p class="team__descp-text"><?php echo the_field('team_top_title');?></p>
                                <h4 class="team__descp--title">
                                    <?php echo the_field('team_bottom_title');?><span class="title__text-underline">
                                        <?php echo the_field('team_bottom_underline_text');?></span>
                                </h4>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        

        <section class="works">
            <div class="container">
                <div class="row">
                    <div class="works__title">
                        <h4 class="works__title-text"><?php echo the_field('how_does_it_works_title');?></h4>
                        <span class="works__pattern"><img class="works__pattern-img"
                                src="<?php echo get_stylesheet_directory_uri();?>/assets/images/backgrounds/Pattern3.png"></span>
                    </div>

                    <div class="works__box work">
                        <?php if (have_rows('how_does_it_works')) : ?>
                        <?php while (have_rows('how_does_it_works')) : the_row(); ?>
                        <?php if (get_row_layout() == 'how_does_it_works_layout') : ?>

                        <div class="col-md-4">
                            <div class="work__content">
                                <div class="work__image">
                                    <?php $work_image = get_sub_field('work_image');?>
                                    <img class="work__image-img" src="<?php echo $work_image;?>">
                                </div>
                                <h4 class="work__heading"><?php the_sub_field('work_title');?></h4>
                                <p class="work__text"><?php the_sub_field('work_content');?></p>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php endwhile ;?>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </section>

        <section class="bonus">
            <div class="container">
                <div class="row">
                    <span><img class="bonus__pattern" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/backgrounds/Decor_pattern1_Right.png "></span>
                    <div class="bonus__wrapper">
                        <div class="bonus__title">
                            <h4 class="bonus__title-text"><?php echo the_field('you_will_get_title');?></h4>
                        </div>
                        <div class="row bonus__cardwrapper">
                            
                        <?php if (have_rows('you_will_get_box')) : ?>
                        <?php while (have_rows('you_will_get_box')) : the_row(); ?>
                        <?php if (get_row_layout() == 'you_will_get_box_layout') : ?>

                            <div class="col-md-3 bonus__col">
                                <div class="card card--border-bottom" style="border-bottom-color:<?php the_sub_field('you_will_get_box_bottom_border_color');?>">
                                    <div class="card__img">
                                       <?php $you_will_get_box_image = get_sub_field('you_will_get_box_image');?>
                                    <img class="work__image-img" src="<?php echo $you_will_get_box_image;?>">
                                    </div>
                                    <div class="card__spacer"></div>
                                    <h4 class="card__desp"><?php the_sub_field('you_will_get_box_title');?></h4>
                                </div>
                            </div>

                        <?php endif; ?>
                        <?php endwhile ;?>
                        <?php endif; ?>    
                        
                        </div>
                    </div>
                    <span><img class="bonus__pattern-down" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/backgrounds/Decor_pattern1_Left.png "></span>
                </div>
            </div>
        </section>

        <section class="stories">
            <div class="container">
                <div class="row">
                        <span><img class="stories__pattern" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/backgrounds/Circle5x5_borderBlue.png "></span>
                    <div class="stories__title title">
                        <h2 class=" title__text"><?php echo the_field('success_stories_tittle');?><span class="title__text-underline"> <?php echo the_field('succes_stories_underline_text');?></span></h2>
                    </div>
                    <div class="stories__videos b-videos">
                        <div class="b-videos__video-wrap">                          
                           <?php $get_poster = get_field('success_stories_video_poster');?>
                            <video class="b-videos__video" width="770" height="414" controls poster="<?php if($get_poster !=''){ echo $get_poster; }?>"> 
                                <source src="<?php echo the_field('success_stories_video');?>" type="video/mp4">
                            </video>

                        </div>
                        <div class="stories__name">
                            <h4 class="stroies__name-text"><?php echo the_field("success_stories_name");?></h4>
                            <a href="<?php echo the_field("success_story_button_link");?>"><button class="btn stories__btn"> <?php echo the_field('success_story_button_text');?> <span class="stories__btn-img"><img
                                        src="<?php echo get_stylesheet_directory_uri();?>/assets/images/clients/arrow.png"></span></button></a>
                        </div>
                    </div>
                    <span><img class="stories__pattern-down" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/backgrounds/Pattern3_gradient.png "></span>
                </div>
            </div>
        </section>

        <section class="scope">
            <div class="container">
                <div class="row">
                    <div class="scope__title">
                        <h2 class="scope__title-text"><?php echo the_field('project_scoping_title');?></h2>
                    </div>
                </div>
                <div class="row scope__desp desp-wrapper">
                    <div class="col-md-6">
                        <div class="desp-wrapper__item">
                            <p class="desp-wrapper__item-text">
                                <?php echo the_field('project_scoping_left_content');?>
                            </p>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="desp-wrapper__item">
                            <h4 class="desp-wrapper__heading"><?php echo the_field('project_scoping_right_content_title');?></h4>
                            <p class="desp-wrapper__item-text">
                                <?php echo the_field('project_scoping_right_content');?>
                            </p>
                        </div>
                    </div>
                    <div class="desp-wrapper__btn">
                        <a href="<?php echo the_field('project_scoping_button_link');?>"><button class="btn c-btn"> <?php echo the_field('project_scoping_button_text');?></button></a>
                    </div>
                </div>
            </div>
        </section>

    </div>
        
<?php get_footer();?>