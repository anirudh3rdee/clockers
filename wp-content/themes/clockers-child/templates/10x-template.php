<?php 
/* Template Name: 10X Template */
get_header(); ?>


<div class="main why-clockers">
    <div class="spacer"></div>
    <?php 
    $enable_10x_banner_section = get_field('enable_10x_banner_section');
    if($enable_10x_banner_section == 'Yes'){
    ?>
    <section class="hero full-hero">
        <div class="container">
            <div class="row">
                <div class="hero__wrapper mb-0 tenx-logo">
                    <div class=" hero__sec">
                        <div class="hero__text-holder">
                            <h1 class="hero__title"><?php echo the_field('banner_10x_title');?></h1>
                            
                            <?php if( have_rows('banner_10x_subtitle') ): ?>
                            <?php while( have_rows('banner_10x_subtitle') ): the_row(); ?>
                            <?php if( get_row_layout() == 'banner_subtitle_layout' ): ?>
                            <p class="hero__subtitle"><?php the_sub_field('start_text');?> <span
                                    class="bnanner__text-underline">
                                    <?php the_sub_field('underline_text');?></span></p>
                            <?php endif; ?>
                            <?php endwhile; ?>
                            <?php endif; ?>
                            <div class="space-btn"></div>
                        </div>
                    </div>
                    <div class="hero__banner clockers__banner">
                        <div class="hero__banner--image clockers__banner-wrap">
                            <img class="clockers__banner-img" src="<?php echo the_field('banner_10x_right_image');?>">
                        </div>
                    </div>

                    <div class="logoslide logos-10x">
                        <p class="logoslide__heading"><?php echo the_field('delivered_title');?></p>
                        <div class="logoslide__wrapper">
                            
                            <?php 
                            if( have_rows('delivered_for_images') ):
                            while ( have_rows('delivered_for_images') ) : the_row();
                            ?>
                            <img class="logoslide__img" src="<?php the_sub_field('delivered_images');?>">
                            <?php 
                              endwhile;
                            else :
                            endif;
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php }?>
    
    <?php 
    $enable_are_you_scaling = get_field('enable_are_you_scaling');
    if($enable_are_you_scaling == 'Yes'){
    ?>
    <section class="tex-x__text-block bg-light">
        <div class="container">
            <div class="row">
                <div class="tex-x__text-block-wrapper">
                    <div class="row tex-x-block-wrapper">
                        <div class="col-md-8 offset-md-2">
                            <div class="tex-x__text-block-heading">
                                <?php if( have_rows('scaling_title') ): ?>
                                <?php while( have_rows('scaling_title') ): the_row(); ?>
                                <?php if( get_row_layout() == 'scaling_layout' ): ?>
                                <h4 class="tex-x-block__heading"><?php the_sub_field('scaling_start_text'); ?> <span class="title__text-underline"><?php the_sub_field('scaling_underline_text'); ?></span>
                                    <?php the_sub_field('scaling_end_Text'); ?></h4>
                                <?php endif; ?>
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php }?>
    
    <?php 
    $enable_hire_contract = get_field('enable_hire_contract');
    if($enable_hire_contract == 'Yes'){
    ?>
    <section class="terms-project purple-gradient">
        <div class="container">
            <div class="terms-project__wrapper">
                <div class="row">
                    <span class="terms-project__patern-up"><img class="terms-project__pattern-up"
                            src="<?php echo site_url();?>/wp-content/uploads/2019/11/Pattern7-2.png"></span>
                    <div class="row p-terms__wrapper">                                
                        <p class="p-term__dark mt30">
                            <?php echo the_field('hire_contract_first_title');?>
                        </p>
                        <p class="p-term__dark mb40">
                            <?php echo the_field('hire_contract_second_title');?>
                        </p>
                    </div>
                    <div class="row three-col">

                    <?php if( have_rows('process') ): ?>
                    <?php while( have_rows('process') ): the_row(); ?>
                    <?php if( get_row_layout() == 'process_layout' ): ?>
                        <div class="col-md-4">
                            <div class="three-col-wrapper">
                                <h4 class="three-col-text"><?php the_sub_field('process_title');?></h4>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php endwhile; ?>
                    <?php endif; ?> 
                           
                    </div>
                    <span class="terms-project__patern-down"><img class="terms-project__pattern-down"
                            src="<?php echo site_url();?>/wp-content/uploads/2019/11/Pattern7-1-1.png"></span>

                </div>
            </div>
        </div>
    </section>
    <?php }?>

    <section class="accordian__blog accordion-light">
        <div class="container">
            <div class="row">
                <div class="accorian__block-wrapper">
                    <div class="row accorian__block-row">
                        <div class="col-md-8 offset-md-2">
                                <div class="accordion" id="accordionExample">

                                    <?php 

                                    if( have_rows('accordion_content') ): ?>
                                    <?php $i = 1;while( have_rows('accordion_content') ): the_row();?>
                                    <?php if( get_row_layout() == 'accordion_layout' ): 
                                    ?>

                                        <div class="card">
                                          <div class="card-header" id="headingOne-<?php echo $i;?>">
                                              <button class="btn btn-link card-heading-btn" type="button" data-toggle="collapse" data-target="#collapseOne-<?php echo $i;?>" aria-expanded="true" aria-controls="collapseOne-<?php echo $i;?>">
                                            <h5 class="mb-0 card-heading-text">	
                                                <?php the_sub_field('accordion_title');?>
                                            </h5>
												  <img class="card-toggle open" src="<?php echo site_url();?>/wp-content/uploads/2019/11/Plus-2.png">
												  <img class="card-toggle close" src="<?php echo site_url();?>/wp-content/uploads/2019/11/Minus.png">
                                              </button>
										
                                          </div>
                                      
                                          <div id="collapseOne-<?php echo $i;?>" class="collapse" aria-labelledby="headingOne-<?php echo $i;?>" data-parent="#accordionExample">
                                            <div class="card-body">
                                              <?php the_sub_field('accordion_content');?>
                                            </div>
                                          </div>
                                        </div>
                                    <?php 
                                    endif; ?>
                                    <?php $i++; endwhile; ?>
                                    <?php endif; 
                                    ?>     
                                        
                                      </div>
                                      
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    
    <?php 
    $enable_real_software = get_field('enable_real_software');
    if($enable_real_software == 'Yes'){
    ?>
    <section class="scope">
        <div class="container">
            <div class="row wc-scope__row">
                <span class="scope__patern-up"><img class="wc-scope__pattern-up"
                        src="<?php echo site_url();?>/wp-content/uploads/2019/11/Pattern7-2.png"></span>
                <div class="scorp-wrapper">
                    <div class="clocker-scope__title ">
                        <h2 class="scope__title-text title text-white text-center"><?php echo the_field('real_software_title');?></h2>
                    </div>
                    <div class="row ">
                        <div class="clocker-scope__btn">
                            <a href="<?php echo the_field('real_software_button_link');?>" class="btn c-btn"> <?php echo the_field('real_software_button_text');?></a>
                        </div>
                    </div>
                </div>
                <span class="scope__patern-down"><img class="wc-scope__pattern-down"
                        src="<?php echo site_url();?>/wp-content/uploads/2019/11/UI-Decor-Pattern-1.png"></span>
            </div>
        </div>
    </section>
    <?php }?>

    <section class="stories">
        <div class="container">
            <div class="row">
                <span><img class="stories__pattern"
                        src="<?php echo site_url();?>/wp-content/uploads/2019/11/Circle5x5_borderBlue.png"></span>
                <div class="stories__title title">
                    <h2 class=" title__text"><?php echo the_field('success_stories_tittle');?> <span
                            class="title__text-underline">
                            <?php echo the_field('succes_stories_underline_text');?></span></h2>
                </div>

                <div class="stories__videos b-videos mb-0">
                    <div class="b-videos__video-wrap">
                        <?php $get_poster = get_field('success_stories_video_poster_image');?>
                        <video class="b-videos__video" width="770" height="414" controls poster="<?php if($get_poster !=''){ echo $get_poster; }?>">
                            <source
                                src="<?php echo the_field('success_stories_video');?>"
                                type="video/mp4">
                        </video>

                    </div>
                    <div class="stories__name">
                        <h4 class="stroies__name-text"><?php echo the_field('success_stories_name');?></h4>
                        <a href="<?php echo the_field('success_story_button_link');?>" class="btn stories__btn"> <?php echo the_field('success_story_button_text');?> <span class="stories__btn-img"><img
                                        src="<?php echo site_url();?>/wp-content/uploads/2019/11/arrow.png"></span></a>
                    </div>
                </div>
                <span><img class="stories__pattern-down"
                        src="<?php echo site_url();?>/wp-content/uploads/2019/11/Pattern3_gradient.png"></span>
            </div>
        </div>
    </section>
</div>	
        
<?php get_footer();?>