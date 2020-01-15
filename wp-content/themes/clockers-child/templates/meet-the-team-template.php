<?php 
/* Template Name: Meet the team Template */
get_header();
?>

	<div class="main why-clockers">
            <div class="spacer"></div>
                
		 <?php 
        $enable_meet_team_clocker = get_field('enable_meet_team_banner_section');
        if($enable_meet_team_clocker == 'Yes'){
        ?>
            <section class="hero">
                <div class="container">
                    <div class="row">
                        <div class="hero__wrapper">
                            <div class=" hero__sec">
                                <div class="hero__text-holder">
                                    <h1 class="hero__title"><?php echo get_field('banner_meet_team_title');?></h1>
                                    <p class="hero__subtitle"><?php echo get_field('banner_meet_team_subtitle');?></p>
                                    <div class="space-btn"></div>
                                </div>
                            </div>
                            <?php 
                            $banner_image = get_field('banner_meet_team_right_image');
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
            <?php 
            }
            $enable_meet_section = get_field('enable_section_section');
            if($enable_meet_section == 'Yes'){
            ?> 
            <section class="native meeting">
                <div class="container">
                    <div class="row">
                        <div class="native__wrapper">                                                                                           
                            <div class="native__descp ">
                                <h4 class="native__descp--title title"><?php echo get_field('team_heading');?></h4>
                            </div>
                                                                                           
                            <div class="row ">
                                <?php
                                if(get_field('members')):
                                    ?>
                                <div class="native__peoples">
                                 
                                    <?php while(the_repeater_field('members')): ?>
                                    <div class="native__peoples-sec">
                                        <img class="native__peoples-img" src="<?php the_sub_field('profile_photo'); ?>">
                                        <h4 class="native__peoples-designation"><?php the_sub_field('designation'); ?>
                                        </h4>
                                        <p class="native__peoples-name">
                                        <?php the_sub_field('full_name');?></p>
                                    </div>
                                    <?php endwhile; ?>
                                     
                                </div>
                            <?php endif;?>
                            </div>
                         

                        </div>
                    </div>
                </div>
            </section>
            <?php
            }
            $enable_other_section = get_field('enable_other_section');
            if($enable_other_section == 'Yes'){
            ?>
            <section class="scope meeting-work">
                <div class="container">
                    <div class="row wc-scope__row">
                        <div class="scorp-wrapper">
                            <div class="clocker-scope__title ">
                                <h2 class="scope__title-text title text-white text-center"><?php echo get_field('other_heading');?></h2>
                            </div>
                            <?php 
                            $other_section_image = get_field('other_section_image');
                            if( $other_section_image != '' ):
                            ?>
                            <div class="row">
                                <div class="meeting-work__img">
                                   <img class="img-fluid" src="<?php echo $other_section_image;?>" alt="">
                                </div>
                            </div>
                            <?php 
                        endif;?>
                        </div>
                    </div>
                </div>
            </section>
            <?php } ?>
       
		 
        </div>
        
<?php get_footer();?>