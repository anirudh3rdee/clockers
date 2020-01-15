<?php 
/* Template Name: Why Clockers Template */
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
                                    <a href="<?php echo the_field('banner_why_clocker_button_link');?>"><button class="hero__btn"><?php echo the_field('banner_why_clocker_button_text');?></button></a>
                                </div>
                            </div>
                            <div class="hero__banner clockers__banner">
                                <div class="hero__banner--image clockers__banner-wrap">
                                    <img class="clockers__banner-img" src="<?php echo the_field('banner_why_clocker_right_image');?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php }?>
        
        <?php 
        $work_with_you_enable = get_field('work_with_you_enable');
        if($work_with_you_enable == 'Yes')
        {
        ?>
            <section class="team gradient-bg">
                <div class="container">
                    <div class="row">
                        <div class="team__wrapper ">
                            <div class="col-md-3">
                                <div class="team__image text-md-right">
                                    <img src="<?php echo the_field('work_with_you_left_image');?>">
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="team__descp ">
                                    <h4 class="team__descp--title title text-white">
                                        <?php echo the_field('work_with_you_title');?>
                                        <span class="title__text-underline">
                                            <?php echo the_field('work_with_you_underline_text');?></span>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php }?>
        
        <?php 
            $work_with_you_enable = get_field('work_with_you_enable');
            if($work_with_you_enable == 'Yes')
            {
        ?>
            <section class="native">
                <div class="container">
                    <div class="row">
                        <span class="native__bg-up-img"><img class="native__pattern-img"
                                src="<?php echo site_url();?>/wp-content/uploads/2019/11/Pattern07.png"></span>
                        <div class="native__wrapper">
                            <?php if( have_rows('work_with_experience_title') ): ?>
                               <?php while( have_rows('work_with_experience_title') ): the_row(); ?>
                                <?php if( get_row_layout() == 'work_with_experience_layout' ): ?>

                            <div class="native__descp ">
                                <h4 class="native__descp--title title">
                                     <?php the_sub_field('experience_start_text');?>  <span class="title__text-underline">
                                        <?php the_sub_field('experience_underline_text');?> </span> &nbsp;<?php the_sub_field('experience_end_text');?>
                                </h4>
                            </div>
                                <?php endif; ?>
                               <?php endwhile; ?>
                            <?php endif; ?>

                            <div class="row ">
                                <div class="native__peoples">
                                     <?php 
                            if( have_rows('digital_native_section') ):
                            while ( have_rows('digital_native_section') ) : the_row();
                            ?>
                                    <div class="native__peoples-sec">
                                        <img class="native__peoples-img" src="<?php the_sub_field('experienced_digital_team_img');?>">
                                        <h4 class="native__peoples-designation"><?php the_sub_field('digital_team_designation');?></h4>
                                        <p class="native__peoples-name"><?php the_sub_field('digital_team_title');?></p>
                                    </div>
                            <?php
                            endwhile;
                            else :
                                // no rows found
                            endif;
                            ?>
                                </div>
                            </div>
                         

                        </div>
                        <span class="native__bg-down-img"><img class="native__pattern-img"
                            src="<?php echo site_url();?>/wp-content/themes/clockers-child/assets/images/why-clockers/Pattern08.png"></span>
                    </div>
                </div>
            </section>
        <?php }?>

        <?php 
            $we_are_enable = get_field('we_are_enable');
            if($we_are_enable == 'Yes')
            {
        ?>
            <section class="about-clockers purple-bg">
                <div class="container">
                    <div class="row">
                            <span class="wc-wehave__patern-up"><img class="wc-wehave__pattern-img"
                                src="<?php echo site_url();?>/wp-content/themes/clockers-child/assets/images/why-clockers/Pattern1-1.png "></span>
                        <div class="about-clockers__wrapper">
                            <div class="about-clockers__descp ">
                                <h4 class="about-clockers__descp--title title text-white">
                                    <?php echo the_field('we_are_title');?>
                                </h4>
                            </div>
                            <div class="row weare">

                            <?php 
                                if( have_rows('we_are') ):
                                    $i = 0;
                                while ( have_rows('we_are') ) : the_row(); $i++;
                            ?>

                                <div class="col-lg-3 col-md-6 weare__column <?php if(($i % 2) == 0) { echo 'pt-130';}?>">
                                    <div class="weare__icon">
                                        <img class="weare__icon-img" src="<?php the_sub_field('we_are_icon_image')?>">
                                        <div class="weare__btn-wrapper">
                                        <?php $weare_buttonlink = trim( get_sub_field('we_are_button_link'));?>
                                            <a class="weare__btn" style="background-color:<?php the_sub_field('we_are_button_color')?>" <?php if( $weare_buttonlink != '' ){?> href="<?php the_sub_field('we_are_button_link')?>" <?php } ?>><?php the_sub_field('we_are_text')?></a>
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

                            <div class="about-clockers__descp wehave mt-20 ">
                                <h4 class="about-clockers__descp--title title text-white">
                                    <?php echo the_field('we_have_title');?>
                                </h4>
                            </div>
                            <div class="row weare">

                                <?php 
                                if( have_rows('we_have') ):
                                    $j = 0;
                                while ( have_rows('we_have') ) : the_row(); $j++;
                                 ?>
                                <div class="col-lg-3 col-md-6 weare__column <?php if(($j % 2) == 0) { echo 'pt-180';}?>">
                                    <div class="weare__icon">
                                        <img class="weare__icon-img" src="<?php the_sub_field('we_are_icon_image')?>">
                                        <div class="weare__btn-wrapper">
                                        <?php $we_are_link = trim( get_sub_field('we_are_link'));?>
                                            <a class="weare__btn" style="background-color:<?php the_sub_field('we_are_button_color');?>" <?php if( $we_are_link != '' ) {?> href="<?php the_sub_field('we_are_link')?>" <?php } ?>><?php the_sub_field('we_are_text')?></a>
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
                        <span class="wc-wehave__patern-down"><img class="wc-wehave__pattern-img"
                            src="<?php echo site_url();?>/wp-content/themes/clockers-child/assets/images/why-clockers/Pattern1-2.png "></span>
                    </div>
                </div>
            </section>
        <?php }?>
        
        <?php 
            $success_stories_enable = get_field('success_stories_enable');
            if($success_stories_enable == 'Yes')
            {
        ?>
            <section class="stories">
                <div class="container">
                    <div class="row">
                        <span><img class="stories__pattern"
                                src="<?php echo site_url();?>/wp-content/uploads/2019/11/Circle5x5_borderBlue.png"></span>
                        <div class="stories__title title">
                            <h2 class=" title__text"><?php echo the_field('why_clocker_success_stories_tittle');?><span
                                    class="title__text-underline">
                                    <?php echo the_field('why_clocker_succes_stories_underline_text');?></span></h2>
                        </div>
                        <div class="stories__videos b-videos">
                            <div class="b-videos__video-wrap">
                                <?php $get_poster = get_field('why_clocker_success_stories_video_poster');?>
                                <video class="b-videos__video" width="770" height="414" controls poster="<?php if($get_poster !=''){ echo $get_poster; }?>">
                                    <source
                                        src="<?php echo the_field('why_clocker_success_stories_video');?>"
                                        type="video/mp4">
                                </video>

                            </div>
                            <div class="stories__name">
                                <h4 class="stroies__name-text"><?php echo the_field('why_clocker_success_stories_name');?></h4>
                                <a href="<?php echo the_field('why_clocker_success_story_button_link');?>" class="btn stories__btn"> <?php echo the_field('why_clocker_success_story_button_text');?> <span class="stories__btn-img"><img
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
            $free_project_enable = get_field('free_project_enable');
            if($free_project_enable == 'Yes')
            {
        ?>
            <section class="scope">
                <div class="container">
                    <div class="row wc-scope__row">
                        <span class="scope__patern-up"><img class="wc-scope__pattern-up"
                                src="<?php echo site_url('wp-content/themes/clockers-child/assets/images/why-clockers/Pattern7-2.png')?>"></span>
                        <div class="scorp-wrapper">
                            <div class="clocker-scope__title ">
                                <?php if( have_rows('free_project_title') ): ?>
                                <?php while( have_rows('free_project_title') ): the_row(); ?>
                                <?php if( get_row_layout() == 'free_project_layout' ): ?>
                                <h2 class="scope__title-text title text-white text-center"><?php the_sub_field('free_project_start_text'); ?> <span
                                        class="title__text-underline">
                                        <?php the_sub_field('free_project_underline_text'); ?></span> <?php the_sub_field('free_project_end_text'); ?></h2>
                                <?php endif; ?>
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <div class="row ">
                                <div class="clocker-scope__btn">
                                    <a class="btn c-btn" href="<?php echo the_field('free_project_button_link');?>"> <?php echo the_field('free_project_button_text');?></a>
                                </div>
                            </div>
                        </div>
                        <span class="scope__patern-down"><img class="wc-scope__pattern-down"
                                src="<?php echo site_url();?>/wp-content/themes/clockers-child/assets/images/why-clockers/UI-Decor-Pattern-1.png "></span>
                    </div>
                </div>
            </section>
        <?php }?>

        </div>
        
<?php get_footer();?>