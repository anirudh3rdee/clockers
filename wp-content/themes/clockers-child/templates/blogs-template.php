<?php 
/* Template Name: Blogs Template */
get_header();
?>

	<div class="main why-clockers">
            <div class="spacer"></div>
                
		 <?php 
        $enable_why_clocker = get_field('enable_why_clockers_banner_section');
        if($enable_why_clocker == 'Yes'){
        ?>
            <section class="hero">
                <div class="container">
                    <div class="row">
                        <div class="hero__wrapper">
                            <div class=" hero__sec">
                                <div class="hero__text-holder">
                                    <h1 class="hero__title"><?php echo the_field('banner_why_clocker_title');?></h1>
                                    <p class="hero__subtitle"><?php echo the_field('banner_why_clocker_subtitle');?></p>
                                    <div class="space-btn"></div>
                                </div>
                            </div>
                            <div class="hero__banner clockers__banner">
                            <?php $bwc_right_image = trim( get_field('banner_why_clocker_right_image') );
                            if( $bwc_right_image != '' ):
                            ?>
                                <div class="hero__banner--image clockers__banner-wrap">
                                    <img class="clockers__banner-img" src="<?php echo $bwc_right_image;?>">
                                </div>
                            <?php endif; ?>    
                            </div>
                        </div>
                    </div>
                </div>
            </section>
             
        <?php }?>
		
        <?php 
           $args = array(
                'post_type'        => 'post',
                'posts_per_page'   => -1,
                'post_status' => array('publish')
            );
            $query = new WP_Query( $args ); 
            if ( $query->have_posts() ) {
                $blog_index = 0;
                while ( $query->have_posts() ) {
                $query->the_post();
                $blog_id = get_the_ID();
                if ($blog_index % 2 == 0)
                {?>
                 <section class="blog-one bg-light">
                <div class="container">
                    <div class="blog-one__wrapper">
                        <div class="row blog__row">
                            <div class="blog-one__col">
                                <div class="blog-desp">
                                    <h3 class="blog-heading">
                                        <?php the_title();?>
                                    </h3>
                                    <p class="blog__about">
                                        <?php echo wp_trim_words( get_the_content(), 38, '...');?>
                                    </p>
                                    <h5 class="blog__note">
                                        in BLOG by <?php echo get_author_name();?> | <?php echo get_the_date();?>
                                    </h5>
                                    <a class="btn blog__btn" href="<?php echo  get_permalink();?>">Read to more <span class="stories__btn-img"><img
                                                src="<?php echo site_url('wp-content/uploads/2019/11/arrow.png');?>"></span></a>
                                </div>
                            </div>
                            
							 <?php
                                     $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                                     if ( $featured_img_url ) {
                                    ?>
                                    <div class=" blog-img__col ">
                                        <div class="blog-img">
                                            <img class="img-fluid blog-sec__img" src="<?php echo $featured_img_url;?>">
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
						
                        </div>
                    </div>
                </div>
            </section>   
                <?php }
                else
                {?>
                 <section class="blog-one bg-light">
                <div class="container">
                    <div class="blog-one__wrapper">
                        <div class="row blog__row">
									<?php
                                     $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                                     if ( $featured_img_url ) {
                                    ?>
                                    <div class="blog-img__col ">
                                        <div class="blog-img">
                                            <img class="img-fluid blog-sec__img" src="<?php echo $featured_img_url;?>">
                                        </div>
                                    </div>
                                <?php } ?>
						
                            <div class="blog-one__col right__text ">
                                <div class="blog-desp">
                                    <h3 class="blog-heading">
                                        <?php the_title();?>
                                    </h3>
                                    <p class="blog__about">
                                        <?php echo wp_trim_words( get_the_content(), 38, '...');?> 
                                    </p>
                                    <h5 class="blog__note">
                                        in BLOG by <?php echo get_author_name();?> | <?php echo get_the_date();?>
                                    </h5>
                                    <a class="btn blog__btn" href="<?php echo  get_permalink();?>">Read to more <span class="stories__btn-img"><img
                                                src="<?php echo site_url('wp-content/uploads/2019/11/arrow.png');?>"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                <?php
				}
					
                $blog_index = $blog_index + 1;
        ?>
                
            <?php

                    } // end while
                } // end if
            wp_reset_query();
            ?>
        </div>
        
<?php get_footer();?>