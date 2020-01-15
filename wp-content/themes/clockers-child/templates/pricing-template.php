<?php 
/* Template Name: Pricing Template */
get_header();
?>

	<div class="main why-clockers">
            <div class="spacer"></div>

		<?php 
        $enable_pricing_banner_section = get_field('enable_pricing_banner_section');
        if($enable_pricing_banner_section == 'Yes'){
        ?>
            <section class="hero">
                <div class="container">
                    <div class="row">
                        <div class="hero__wrapper">
                            <div class=" hero__sec">
                                <div class="hero__text-holder">
                                	<?php if( have_rows('banner_pricing_title') ): ?>
		                            <?php while( have_rows('banner_pricing_title') ): the_row(); ?>
		                            <?php if( get_row_layout() == 'banner_title_layout' ): ?>
                                    <h1 class="hero__title"><?php the_sub_field('start_text'); ?>
                                    <span class="title__text-underline"><?php the_sub_field('underline_text'); ?></span></h1>
                                    <?php endif; ?>
		                            <?php endwhile; ?>
		                            <?php endif; ?>
                                    <p class="hero__subtitle"><?php echo the_field('banner_pricing_subtitle'); ?></p>
                                    <div class="space-btn"></div>
                                </div>
                            </div>
                            <div class="hero__banner clockers__banner">
                                <div class="hero__banner--image clockers__banner-wrap">
                                    <img class="clockers__banner-img" src="<?php echo the_field('banner_pricing_right_image');?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
		<?php }?>
		
		<?php 
        $enable_pricing_section = get_field('enable_pricing_section');
        if($enable_pricing_section == 'Yes'){
        ?>
            <section class="pricing-list bg-light ">
                <div class="container">
                    <div class="row">
                        <div class="pricing-list__wrapper">
                            <div class="row pricing-list__row">
								
								<?php
									if( have_rows('pricing_table') ):
								    while ( have_rows('pricing_table') ) : the_row();
								?>

                                <div class="col-md-4">
                                    <div class="pricing-list__box" style="border-color:<?php the_sub_field('border_color');?>">
                                        <div class="pricing-list__detail">
                                            <h5 class="pricing-list__heading">
                                                <?php the_sub_field('title');?>
                                            </h5>
                                            <h4 class="pricing-list__rate">
                                                <?php the_sub_field('price');?>
                                            </h4>
                                            <hr>
                                            <p class="pricing-list__desc"><?php the_sub_field('content');?></p>
                                            <h5 class="desp__heading">You Receive</h5>
                                            <ul class="pricing-list__listing">
                                            	<?php
													if( have_rows('list') ):
												    while ( have_rows('list') ) : the_row();
												?>
                                                <li class="pricing-list__li"><img class="tick-img"
                                                        src="<?php echo site_url();?>/wp-content/uploads/2019/11/tick.png"><?php the_sub_field('point_list');?></li>
                                                <?php
				                                endwhile;
												else :
												endif;
												?>
                     
                                            </ul>
                                            <p class="list__short_note"><?php echo the_sub_field('list__short_note');?></p>
                                        </div>
                                        <div class="pricing-btn__wrapper c-btn">
                                            <a href="<?php the_sub_field('button_link');?>" class="pricing-btn "><?php the_sub_field('button_text');?></a>
                                        </div>
                                    </div>
                                </div>

                               <?php
                                endwhile;
								else :
								endif;
								?>

                            
                            </div>
                        </div>
                    </div>
                </div>
            </section>
		<?php }?>

		<?php 
        $enable_logo_branding_section = get_field('enable_logo_branding_section');
        if($enable_logo_branding_section == 'Yes'){
        ?>
            <section class="pricing-grig bg-light ">
                <div class="container">
                    <div class="row">
                        <div class="pricing-grid__wrapper">
                            <div class="row pricing-grid__row">
                                <div class=" col-md-4 pricing-grid__one">
                                    <h5 class="pricing-grid__heading">
                                            <?php echo the_field('section_1_title');?>
                                    </h5>
                                    <h4 class="pricing-grid__rate">
                                           <?php echo the_field('section_1_price');?>
                                    </h4>
                                    <div class="pricing-btn__wrapper c-btn">
                                        <a href="<?php echo the_field('section_1_button_link');?>" class="pricing-btn "><?php echo the_field('section_1_button_text');?></a>
                                    </div>
                                </div>
                                <div class="col-md-4 pricing-grid__two">
                                    <p class="pricing-grid__desc"><?php echo the_field('section_1_content');?></p>
                                    </p>
                                </div>
                                <div class="col-md-4 pricing-grid__three">
                                    <ul class="pricing-grid__listing">
                                    	<?php
											if( have_rows('section_1_list') ):
										    while ( have_rows('section_1_list') ) : the_row();
										?>
                                        <li class="pricing-grid__li"><img class="tick-img"
                                                src="<?php echo site_url();?>/wp-content/uploads/2019/11/tick.png"><?php the_sub_field('point_lists');?></li>
                                        
											<?php
				                                endwhile;
												else :
												endif;
											?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
		<?php }?>
		
		<?php 
        $enable_mobile_application = get_field('enable_mobile_application');
        if($enable_mobile_application == 'Yes'){
        ?>
            <section class="pricing-grig bg-light ">
                    <div class="container">
                        <div class="row">
                            <div class="pricing-grid__wrapper">
                                <div class="row pricing-grid__row">
                                    <div class=" col-md-4 pricing-grid__one">
                                        <h5 class="pricing-grid__heading">
                                                <?php echo the_field('section_2_title');?>
                                        </h5>
                                        <div class="pricing-btn__wrapper c-btn">
                                            <a href="<?php echo the_field('section_2_button_link');?>" class="pricing-btn "><?php echo the_field('section_2_button_text');?></a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pricing-grid__two">
                                        <p class="pricing-grid__desc"><?php echo the_field('section_2_content');?></p>
                                         
                                    </div>
                                    <div class="col-md-4 pricing-grid__three">
                                        <ul class="pricing-grid__listing">
                                            <?php 
											if( have_rows('section_2_list') ):
										    while ( have_rows('section_2_list') ) : the_row();
											?>
                                            <li class="pricing-grid__li"><img class="tick-img"
                                                    src="<?php echo site_url();?>/wp-content/uploads/2019/11/tick.png"><?php the_sub_field('point_lists_section_2');?></li>
                                            <?php
				                                endwhile;
												else :
												endif;
											?> 	  
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
			<?php }?>
			
			<?php 
	        $enable_custom_software = get_field('enable_custom_software');
	        if($enable_custom_software == 'Yes'){
	        ?>
			<section class="pricing-grig bg-light ">
                <div class="container">
                    <div class="row">
                        <div class="pricing-grid__wrapper">
                            <div class="row pricing-grid__row">
                                <div class=" col-md-4 pricing-grid__one">
                                    <h5 class="pricing-grid__heading">
                                            <?php echo the_field('section_3_title');?>
                                     </h5>
                                    <div class="pricing-btn__wrapper c-btn">
                                        <a href="<?php echo the_field('section_3_button_link');?>" class="pricing-btn "><?php echo the_field('section_3_button_text');?></a>
                                    </div>
                                </div>
                                <div class="col-md-4 pricing-grid__two">
                                    <p class="pricing-grid__desc"><?php echo the_field('section_3_content');?></p>
                                     
                                </div>
                                <div class="col-md-4 pricing-grid__three">
                                    <ul class="pricing-grid__listing">
                                    	<?php 
											if( have_rows('section_3_list') ):
										    while ( have_rows('section_3_list') ) : the_row();
											?>
                                        <li class="pricing-grid__li"><img class="tick-img"
                                                src="<?php echo site_url();?>/wp-content/uploads/2019/11/tick.png"><?php the_sub_field('point_lists_section_3');?></li>
                                        	<?php
				                                endwhile;
												else :
												endif;
											?> 
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
			<?php }?>
			
			<?php 
	        $enable_magento_ecommerce = get_field('enable_magento_ecommerce');
	        if($enable_magento_ecommerce == 'Yes'){
	        ?>
            <section class="pricing-grig bg-light ">
                <div class="container">
                    <div class="row">
                        <div class="pricing-grid__wrapper">
                            <div class="row pricing-grid__row">
                                <div class=" col-md-4 pricing-grid__one">
                                    <h5 class="pricing-grid__heading">
                                            <?php echo the_field('section_4_title');?>
                                    </h5>
                                    <div class="pricing-btn__wrapper c-btn">
                                        <a href="<?php echo the_field('section_4_button_link');?>" class="pricing-btn "><?php echo the_field('section_4_button_text');?></a>
                                    </div>
                                </div>
                                <div class="col-md-4 pricing-grid__two">
                                    <p class="pricing-grid__desc"><?php echo the_field('section_4_content');?></p>
                                     
                                </div>
                                <div class="col-md-4 pricing-grid__three">
                                    <ul class="pricing-grid__listing">
										<?php 
											if( have_rows('section_4_list') ):
										    while ( have_rows('section_4_list') ) : the_row();
											?>
                                        <li class="pricing-grid__li"><img class="tick-img"
                                                src="<?php echo site_url();?>/wp-content/uploads/2019/11/tick.png"><?php the_sub_field('point_lists_section_4');?></li>
                                    	<?php
			                                endwhile;
											else :
											endif;
										?>    
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
			<?php }?>

			<?php 
	        $enable_book_a_free_project = get_field('enable_book_a_free_project');
	        if($enable_book_a_free_project == 'Yes'){
	        ?>
            <section class="scope">
                <div class="container">
                    <div class="row wc-scope__row">
                        <span class="scope__patern-up"><img class="wc-scope__pattern-up"
                                src="<?php echo site_url();?>/wp-content/uploads/2019/11/Pattern7-2.png"></span>
                        <div class="scorp-wrapper">
                            <div class="clocker-scope__title ">
								<?php if( have_rows('title') ): ?>
		                            <?php while( have_rows('title') ): the_row(); ?>
		                            <?php if( get_row_layout() == 'book_a_project_layout' ): ?>
                                <h2 class="scope__title-text title text-white text-center"><?php the_sub_field('start_text');?> <span
                                        class="title__text-underline">
                                        <?php the_sub_field('underline_text');?> </span> <?php the_sub_field('end_text');?></h2>
								<?php endif; ?>
	                            <?php endwhile; ?>
	                            <?php endif; ?>
                            </div>
                            <div class="row ">
                                <div class="clocker-scope__btn">
                                    <a href="<?php echo the_field('button_link');?>" class="btn c-btn"> <?php echo the_field('button_text');?></a>
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