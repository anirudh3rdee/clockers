<?php 

/* Template Name: Lets Talk Template */

get_header();

?>
<div class="main why-clockers">

            <div class="spacer"></div>
		 
            <section class="hero book_hero">
                <div class="container">
                    <div class="hero__wrapper book_hero__wrapper">
                        <div class="row">
                            <div class="col-md-5 book-hero__desc">
                                <div class="book-hero__text-holder">
                                    <h5 class="book__text"><?php echo get_field('banner_lettalk_title');?></h5>
                                    <p class="book__subtitle"><?php echo get_field('banner_lettalk_subtitle');?></p>
                                    <div class="space-btn"></div>
                                </div>
                            </div>
                            <div class="col-md-7 book__form">
								<div class="book__form--inner">
                                <div class="book__form-wrapper">
                                    <div class="form__box">
                                        <form action="#" method="post" id="wizard">
                                            <!-- SECTION 1 -->
                                            <h4></h4>
                                            <section class="book__step-one">
                                                <h3 class="top__heading">
                                                <?php echo get_field('first_step_heading');?>    
                                                </h3>
                                                <div class="form-row">
                                                    <div class="form-full-col form-compnay-error">
                                                        <div class="group book__form-group ">
                                                            <input type="text" class="form-control inputText companyName" name="companyName" required="">
                                                            <!-- <span class="bar"></span> -->
                                                            <label class="book__label">Company Name</label>
                                                        </div>
														 
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-col form-bl-error">
                                                        <div class="group book__form-group">
                                                            <input type="text" class="form-control inputText businessLocation" name="businessLocation" required="">
                                                            <!-- <span class="bar"></span> -->
                                                            <label class="book__label">Business Location</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-col form-ds-error">
                                                        <div class="group book__form-group">
                                                            <input type="text" class="form-control inputText developmentStage" name="developmentStage" required="">
                                                            <!-- <span class="bar"></span> -->
                                                            <label class="book__label">Development Stage</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-full-col form-td-error">
                                                        <div class="group book__form-group">
                                                            <input type="text" class="form-control inputText technicalLead" name="technicalLead" required="">
                                                            <!-- <span class="bar"></span> -->
                                                            <label class="book__label">Do you have an in house CTO or
                                                                technical lead?</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-full-col form-gs-error">
                                                        <div class="group book__form-group">
                                                            <input type="text" class="form-control inputText getStarted" name="getStarted" required="">
                                                            <!-- <span class="bar"></span> -->
                                                            <label class="book__label">When are you looking to get
                                                                started?</label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </section>

                                            <!-- SECTION 2 -->
                                            <h4></h4>
                                            <section class="book__step-one second-tab">
                                                <h3 class="top__heading">
                                                 <?php echo get_field('seconding_step_heading');
                                                 ?>   
                                                </h3>
                                                <div class="form-row">
                                                    <div class="form-full-col form-fn-error">
                                                        <div class="group book__form-group">
                                                            <input type="text" class="form-control inputText fullName" name="fullName" required="">
                                                            <!-- <span class="bar"></span> -->
                                                            <label class="book__label">Full Name</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-full-col form-jt-error">
                                                        <div class="group book__form-group">
                                                            <input type="text" class="form-control inputText jobTitle" name="jobTitle" required="">
                                                            <!-- <span class="bar"></span> -->
                                                            <label class="book__label">Job Title</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-full-col form-be-error">
                                                        <div class="group book__form-group">
                                                            <input type="text" class="form-control inputText businessEmail" name="businessEmail" required="">
                                                            <!-- <span class="bar"></span> -->
                                                            <label class="book__label">Business e-mail</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-full-col form-pn-error">
                                                        <div class="group book__form-group">
                                                            <input type="text" class="form-control inputText phoneNumber" name="phoneNumber" required="">
                                                            <!-- <span class="bar"></span> -->
                                                            <label class="book__label">Phone Number</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                        <div class="form-full-col">
                                                            <div class="group book__form-group">
                                                              <p class="fomr_note">Once you submit this information a member of our team will be in contact within the next 24 hours to book your session.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </section>

                                            <!-- SECTION 3 -->
                                            <h4></h4>
                                            <section class="book__step-one last-tab">
                                                <h3 class="top-heading"><?php echo get_field('thank_you_step_heading');
                                                ?></h3>
                                                <p class="welcome-note">
                                                <?php echo get_field('thanks_you_message');
                                                ?>    
                                                </p>
                                                <div class="button__form">
                                                    <a href="<?php echo get_field('success_story_page_url');
                                                ?>" class="form__button "><?php echo get_field('success_story_button_label');
                                                ?></a>
                                                </div>
                                            </section>
                                            <p style="display: none;">
                                            <input type="hidden" name="action" value="cloker_booking_form_data">
                                            <input type="hidden" name="send_form_type" value="letsTalkData">
                                            <input type="submit" name="submitBooking" id="submitBooking" value="Send" />
                                            <?php wp_nonce_field( 'clocker_nonce', 'clocker-nonce-val' ); ?>
                                            </p>
                                        </form>
                                    </div>
                                </div>
								</div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="book__pattern bg-light">
                <div class="container">
                        <span class="book-pattern__left">
                            <img class="bloog__pattern" src="<?php echo site_url('wp-content/uploads/2019/11/block-pattern.png');?>"></span>
                    <div class="row">
                        <div class="pattern__wrapper">
                        </div>
                    </div>
                    <span class="book-pattern__right">
                            <img class="bloog__pattern" src="<?php echo site_url('wp-content/uploads/2019/11/block-pattern.png');?>"></span>
                </div>
            </section>
         

        

         

        </div>

        

<?php get_footer();?>