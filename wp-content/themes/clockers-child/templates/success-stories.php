<?php 
/* Template Name: Success Stories Template */
get_header();
?>

	<div class="main why-clockers">
            <div class="spacer"></div>
            
            <?php 
            $enable_success_stories_banner_section = get_field('enable_success_stories_banner_section');
            if($enable_success_stories_banner_section == 'Yes')
            { ?>
            <section class="hero">
                <div class="container">
                    <div class="row">
                        <div class="hero__wrapper success-header">
                            <div class=" hero__sec">
                                <div class="hero__text-holder">
                                    <h1 class="hero__title"><?php echo the_field('banner_success_stories_title');?></h1>
                                    <p class="hero__subtitle"><?php echo the_field('banner_success_stories_subtitle');?></p>
									 <div class="space-btn"></div>
                                </div>
                            </div>
                            <div class="hero__banner clockers__banner">
                                <div class="hero__banner--image clockers__banner-wrap">
                                    <img class="clockers__banner-img" src="<?php echo the_field('banner_success_stories_right_image');?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php }?>
            
            <?php 
            $top_video_enable = get_field('top_video_enable');
            if($top_video_enable == 'Yes')
            { 
            if( have_rows('video_content') ):
                $i = 0;
            while( have_rows('video_content') ): the_row();
            if( get_row_layout() == 'top_video_layout' ):
            $i++; 
            if(($i % 2) != 0){
            ?>
            <section class="s-stories-block bg-light">
                <div class="container">
                    <div class="row">
                        <div class="sucess-srtory__wrapper">
                            <div class="row s-story__row">
                                <div class="col-md-6 video__description order2">
                                    <div class="s-story__text-wrapper">
                                        <h4 class="s-story__heading"><?php the_sub_field('top_video_title'); ?></h4>
                                        <p class="s-story__text"><?php the_sub_field('top_video_content'); ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 order1">
                                    <div class="s-story__video-wrapper">
                                        <div class="b-videos__video-wrap s-story__video-wrap">
                                        	<?php $get_poster = get_sub_field('video_poster_image_top');?>
                                            <video class="b-videos__video s-story-video" width="570" height="360"
                                                controls="" poster="<?php if($get_poster !=''){ echo $get_poster; }?>">
                                                <source
                                                    src="<?php the_sub_field('top_video_url'); ?>"
                                                    type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <?php 
            } else { 
            ?>
            <section class="s-stories-block">
                <div class="container">
                    <div class="row">
                        <div class="sucess-srtory__wrapper">
                            <div class="row s-story__row">
                                <div class="col-md-6 order1">
                                    <div class="s-story__video-wrapper">
                                        <div class="b-videos__video-wrap s-story__video-wrap">
                                        	<?php $get_poster1 = get_sub_field('video_poster_image_top');?>
                                            <video class="b-videos__video s-story-video" width="570" height="360"
                                                controls="" poster="<?php if($get_poster1 !=''){ echo $get_poster1; }?>">
                                                <source
                                                    src="<?php the_sub_field('top_video_url'); ?>"
                                                    type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 about__video pr-0 order2">
                                    <div class="s-story__text-wrapper">
                                        <h4 class="s-story__heading"><?php the_sub_field('top_video_title'); ?></h4>
                                        <p class="s-story__text"><?php the_sub_field('top_video_content'); ?> </p>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <?php  
            } 
            endif;
            endwhile; 
            endif;
            } ?>
            
            <?php 
            $we_spoke_enable = get_field('we_spoke_enable');
            if($we_spoke_enable == 'Yes'){
            if( have_rows('we_spoke_content') ):
            while( have_rows('we_spoke_content') ): the_row();
            if( get_row_layout() == 'we_spoke_layout' ):
            ?>

            <section class="scope-sec blue-gradient">
                <div class="container">
                        <div class="scope-sec__wrapper">
                                <div class="row scope-sec__row">
                                    <div class="col-md-3 offset-md-1 sucecc-scope-col text-center">
                                        <div class="scope-sec__img-wrap">
                                            <img class="scope-sec__pattern-img img-fluid" src="<?php the_sub_field('spoke_image');?>">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="scope-sec__text-wrapper">
                                            <p class="scope-sec-text"><?php the_sub_field('we_spoke_contents');?></p>
                                            <div class="scope-name">
                                                <p class="scope__name"><?php the_sub_field('we_spoke_name');?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
            </section>
            <?php 
            endif;
            endwhile; 
            endif;
            } ?>
            
            <?php 
            $bottom_video_enable = get_field('bottom_video_enable');
            if($bottom_video_enable == 'Yes')
            { 
            if( have_rows('video_content_bottom') ):
            while( have_rows('video_content_bottom') ): the_row();
            if( get_row_layout() == 'bottom_video_layout' ):
            $i++; 
            if(($i % 2) != 0){
            ?>
            <section class="s-stories-block bg-light">
                    <div class="container">
                        <div class="row">
                            <div class="sucess-srtory__wrapper">
                                <div class="row s-story__row">
                                    <div class="col-md-6 video__description order2">
                                        <div class="s-story__text-wrapper">
                                            <h4 class="s-story__heading"><?php the_sub_field('bottom_video_title');?></h4>
                                            <p class="s-story__text"><?php the_sub_field('bottom_video_content');?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order1">
                                        <div class="s-story__video-wrapper">
                                            <div class="b-videos__video-wrap s-story__video-wrap">
                                            	<?php $get_poster2 = get_sub_field('video_poster_image_bottom');?>
                                               <video class="b-videos__video s-story-video" width="570" height="360"
                                                controls="" poster="<?php if($get_poster2 !=''){ echo $get_poster2; }?>">
                                                <source
                                                    src="<?php the_sub_field('bottom_video_url'); ?>"
                                                    type="video/mp4">
                                            </video>
                                            </div>
                                        </div>
                                    </div>
    
                                </div>
                            </div>
    
                        </div>
                    </div>
                </section>
            <?php 
            } else { 
            ?>
            <section class="s-stories-block">
                <div class="container">
                    <div class="row">
                        <div class="sucess-srtory__wrapper">
                            <div class="row s-story__row">
                                <div class="col-md-6 order1">
                                    <div class="s-story__video-wrapper">
                                        <div class="b-videos__video-wrap s-story__video-wrap">
                                        	<?php $get_poster3 = get_sub_field('video_poster_image_bottom');?>
                                           <video class="b-videos__video s-story-video" width="570" height="360"
                                                controls="" poster="<?php if($get_poster3 !=''){ echo $get_poster3; }?>">
                                                <source
                                                    src="<?php the_sub_field('bottom_video_url'); ?>"
                                                    type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 about__video pr-0 order2">
                                    <div class="s-story__text-wrapper">
                                        <h4 class="s-story__heading"><?php the_sub_field('bottom_video_title');?></h4>
                                        <p class="s-story__text"><?php the_sub_field('bottom_video_content');?> </p>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <?php  
            } 
            endif;
            endwhile; 
            endif;
            } ?>

            <?php 
            $we_hired_enable = get_field('we_hired_enable');
            if($we_hired_enable == 'Yes'){
            if( have_rows('we_hired_content') ):
            while( have_rows('we_hired_content') ): the_row();
            if( get_row_layout() == 'we_hired_layout' ):
            ?>
            <section class="scope-sec gradient-blue">
                    <div class="container">
                            <div class="scope-sec__wrapper">
                                    <div class="row scope-sec__row">
                                        <div class="col-md-3 offset-md-1 sucecc-scope-col text-center">
                                            <div class="scope-sec__img-wrap">
                                                <img class="scope-sec__pattern-img img-fluid" src="<?php the_sub_field('hired_image');?>">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="scope-sec__text-wrapper">
                                                <p class="scope-sec-text"><?php the_sub_field('we_hired_contents');?></p>
                                                <div class="scope-name">
                                                    <p class="scope__name-white"><?php the_sub_field('we_hired_name');?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
            </section>
            <?php 
            endif;
            endwhile; 
            endif;
            } ?>

             <?php 
            $success_stories_free_project_enable = get_field('success_stories_free_project_enable');
            if($success_stories_free_project_enable == 'Yes'){
            ?>
            <section class="scope">
                <div class="container">
                    <div class="row wc-scope__row">
                        <span class="scope__patern-up"><img class="wc-scope__pattern-up"
                                src="<?php echo site_url();?>/wp-content/uploads/2019/11/Pattern7-2.png"></span>
                        <div class="scorp-wrapper">
                            
                            <?php 
                             if( have_rows('free_project_success_stories_title') ):
                             while( have_rows('free_project_success_stories_title') ): the_row();
                             if( get_row_layout() == 'free_project_layout' ):
                            ?>
                            <div class="clocker-scope__title ">
                                <h2 class="scope__title-text title text-white text-center"><?php the_sub_field('free_project_start_text');?> <span
                                        class="title__text-underline">
                                        <?php the_sub_field('free_project_underline_text');?></span> <?php the_sub_field('free_project_end_text');?></h2>
                            </div>
                            <?php 
                                endif;
                                endwhile; 
                                endif;
                            ?>
                            <div class="row ">
                                <div class="clocker-scope__btn">
                                    <a href="<?php echo the_field('free_project_success_stories_button_link');?>" class="btn c-btn"> 
                                        <?php echo the_field('free_project_success_stories_button_text');?>
                                    </a>
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