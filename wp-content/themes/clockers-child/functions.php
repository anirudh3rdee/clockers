<?php 
add_action( 'wp_enqueue_scripts', 'clockers_child_enqueue_styles' );
function clockers_child_enqueue_styles() {
	  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );  
	  wp_enqueue_style( 'bootstrap-min', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css' ); 
	  wp_enqueue_script( 'jquery-lib', get_stylesheet_directory_uri() . '/assets/js/jquery.min.js', array(), '1.0.0', true );
	  wp_enqueue_script( 'bootstrap-min', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', true );
	  wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/assets/js/custom-js.js', array(), '1.0.0', true );

	/* Perticular Page Enqueue Css File */
	if ( is_page_template( 'templates/why-clockers-template.php' ) ) {
        wp_enqueue_style( 'why-clockers-css', get_stylesheet_directory_uri() . '/assets/css/why-clockers.css' );
    }
  if ( is_page_template( 'templates/how-we-work.php' ) ) {
        wp_enqueue_style( 'how-we-work-css', get_stylesheet_directory_uri() . '/assets/css/how-we-work.css' );
    }
  if ( is_page_template( 'templates/for-startups-template.php' ) ) {
        wp_enqueue_style( 'for-startups-css', get_stylesheet_directory_uri() . '/assets/css/for-startups.css' );
    }
  if ( is_page_template( 'templates/success-stories.php' ) ) {
        wp_enqueue_style( 'success-stories-css', get_stylesheet_directory_uri() . '/assets/css/success-stories.css' );
    }
  if ( is_page_template( 'templates/10x-template.php' ) ) {
        wp_enqueue_style( '10x-css', get_stylesheet_directory_uri() . '/assets/css/10x.css' );
  } 
  if ( is_page_template( 'templates/blogs-template.php' ) ) {
        wp_enqueue_style( 'blogs-css', get_stylesheet_directory_uri() . '/assets/css/blogs.css' );
    } 
  if ( is_page_template( 'templates/pricing-template.php' ) ) {
        wp_enqueue_style( 'pricing-css', get_stylesheet_directory_uri() . '/assets/css/pricing.css' );
    } 
    if ( is_page_template( 'templates/meet-the-team-template.php' ) ) {
        wp_enqueue_style( 'meet-the-team-css', get_stylesheet_directory_uri() . '/assets/css/meet-the-team.css' );
    }
    if ( is_page_template( 'templates/our-story-template.php' ) ) {
        wp_enqueue_style( 'our-story-css', get_stylesheet_directory_uri() . '/assets/css/our-story.css' );
    } 
    if ( is_page_template( 'templates/booking-template.php' ) ) {
		 wp_enqueue_style( 'wizard-css', get_stylesheet_directory_uri() . '/assets/css/wizard.css' );
        wp_enqueue_style( 'booking-css', get_stylesheet_directory_uri() . '/assets/css/book.css' );
       
         wp_enqueue_script( 'main-step-js', get_stylesheet_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
        wp_enqueue_script( 'jquery-steps-js', get_stylesheet_directory_uri() . '/assets/js/jquery.steps.js', array(), '1.0.0', true );
    }
    if ( is_page_template( 'templates/lets-talk-template.php' ) ) {
         wp_enqueue_style( 'wizard-css', get_stylesheet_directory_uri() . '/assets/css/wizard.css' );
        wp_enqueue_style( 'let-talk-css', get_stylesheet_directory_uri() . '/assets/css/lets-talk.css' );
       
         wp_enqueue_script( 'main-step-js', get_stylesheet_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
        wp_enqueue_script( 'jquery-steps-js', get_stylesheet_directory_uri() . '/assets/js/jquery.steps.js', array(), '1.0.0', true );
    }
    if( is_singular( 'post' ) ){
         wp_enqueue_style( 'single-blog-css', get_stylesheet_directory_uri() . '/assets/css/single-blog.css' );
    }
} 

/* Remove Guterburg Editor */
 add_filter('use_block_editor_for_post', '__return_false');


/* Call Redux Framework */
if ( ! class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/ReduxCore/framework.php' ) ) {
require_once(dirname( __FILE__ ) . '/ReduxCore/framework.php' );
}

if ( ! isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/ReduxCore/config.php' ) ) {
   require_once( dirname( __FILE__ ) . '/ReduxCore/config.php' );
}

/* Registered Nav Menu */
function register_top_header_menu() {
  register_nav_menu('header-top-menu',__( 'Header Top Menu' ));
  register_nav_menu('primary-menu',__( 'Primary Menu' ));
	register_nav_menu('mobile-menu',__( 'Mobile Menu' ));
  register_nav_menu('footer-1',__( 'Footer 1' ));
  register_nav_menu('footer-2',__( 'Footer 2' ));
  register_nav_menu('copyright_navigation',__( 'Copyright Navigation' ));
}
add_action( 'init', 'register_top_header_menu' );


/* Our custom post type Testimonial */
function create_posttype_testimonial() {
 
 add_post_type_support( 'testimonial', 'thumbnail' ); 
    register_post_type( 'testimonial',
        array(
            'labels' => array(
                'name' => __( 'Testimonial' ),
                'singular_name' => __( 'Testimonial' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'testimonials'),
        )
    );

}

add_action( 'init', 'create_posttype_testimonial' );

/*
 * Create a booking form shortcode
 */
function clockerBookingCusotmForm()
{
    ob_start();
    ?>
    <div class="book__form">
        <div class="book__form-wrapper">
            <div class="form__box">
                <form action="#" id="wizard" method="post" class="cloker_booking_form">
                    <!-- SECTION 1 -->
                    <h4></h4>
                    <section class="book__step-one">
                        <h3 class="top__heading">Firstly,
                            tell us about the business</h3>
                        <div class="form-row">
                            <div class="form-col">
                                <div class="group book__form-group">
                                    <input type="text" class="form-control inputText" required>
                                    <!-- <span class="bar"></span> -->
                                    <label class="book__label">Company Name</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-col">
                                <div class="group book__form-group">
                                    <input type="text" class="form-control inputText" required>
                                    <!-- <span class="bar"></span> -->
                                    <label class="book__label">Business Location</label>
                                </div>
                            </div>
                            <div class="form-col">
                                <div class="group book__form-group">
                                    <input type="text" class="form-control inputText" required>
                                    <!-- <span class="bar"></span> -->
                                    <label class="book__label">Development Stage</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-col">
                                <div class="group book__form-group">
                                    <input type="text" class="form-control inputText" required>
                                    <!-- <span class="bar"></span> -->
                                    <label class="book__label">Do you have an in house CTO or technical lead?</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-col">
                                <div class="group book__form-group">
                                    <input type="text" class="form-control inputText" required>
                                    <!-- <span class="bar"></span> -->
                                    <label class="book__label">When are you looking to get started?</label>
                                </div>
                            </div>
                        </div>
                        
                    </section>

                    <!-- SECTION 2 -->
                    <h4></h4>
                    <section>
                        <h3>Residential address</h3>
                        <div class="form-row">
                            <div class="form-col">
                                <label for="">
                                    Country
                                </label>
                                <div class="form-holder">
                                    <i class="zmdi zmdi-account-o"></i>
                                    <select name="" id="" class="form-control">
                                        <option value="united states" class="option">United
                                            States</option>
                                        <option value="united kingdom" class="option">United
                                            Kingdom</option>
                                        <option value="viet nam" class="option">Viet Nam
                                        </option>
                                    </select>
                                    <i class="zmdi zmdi-chevron-down"></i>
                                </div>
                            </div>
                            <div class="form-col">
                                <label for="">
                                    Street Address
                                </label>
                                <div class="form-holder">
                                    <i class="zmdi zmdi-pin"></i>
                                    <input type="text" class="form-control inputText">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-col">
                                <label for="">
                                    Apartment
                                </label>
                                <div class="form-holder">
                                    <i class="zmdi zmdi-home"></i>
                                    <input type="text" class="form-control inputText">
                                </div>
                            </div>
                            <div class="form-col">
                                <label for="">
                                    Town / City
                                </label>
                                <div class="form-holder">
                                    <i class="zmdi zmdi-pin-drop"></i>
                                    <input type="text" class="form-control inputText">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-col">
                                <label for="">
                                    County
                                </label>
                                <div class="form-holder">
                                    <i class="zmdi zmdi-pin"></i>
                                    <input type="text" class="form-control inputText">
                                </div>
                            </div>
                            <div class="form-col">
                                <label for="">
                                    Postcode / Zip
                                </label>
                                <div class="form-holder password">
                                    <i class="zmdi zmdi-eye"></i>
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- SECTION 3 -->
                    <h4></h4>
                    <section>
                        <h3 style="margin-bottom: 37px;">THANKYOU</h3>
                    </section>
                </form>
            </div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('clockerBookingCusotmForm', 'clockerBookingCusotmForm');

/*
 * Send Booking form data into Zapier
 *
 */
function sendBookingDataIntoZapier( $filedArray ){

    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://hooks.zapier.com/hooks/catch/5288395/o6d6lv6/",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => $filedArray,
      CURLOPT_HTTPHEADER => array(
        "Cache-Control: no-cache",
        "content-type: multipart/form-data"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

}

/*
 * Send Lets talk form data into Zapier
 *
 */
function sendLetsTalkDataIntoZapier( $filedArray ){

    $curl = curl_init();
    
        curl_setopt_array($curl, array(
      CURLOPT_URL => "https://hooks.zapier.com/hooks/catch/5288395/o6d6raw/",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => $filedArray,
      CURLOPT_HTTPHEADER => array(
        "Cache-Control: no-cache",
        "content-type: multipart/form-data"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

}

function clokerBookingFormData(){
    if( isset($_POST['companyName'], $_POST['businessLocation'],$_POST['developmentStage'],$_POST['technicalLead'],$_POST['getStarted'],$_POST['fullName'],$_POST['jobTitle'],$_POST['businessEmail'],$_POST['phoneNumber'],$_POST['clocker-nonce-val']) ){
        $companyName = trim( sanitize_text_field( $_POST['companyName'] ) );
        $businessLocation = trim( sanitize_text_field( $_POST['businessLocation'] ) );
        $developmentStage = trim( sanitize_text_field( $_POST['developmentStage'] ) );
        $technicalLead = trim( sanitize_text_field( $_POST['technicalLead'] ) );
        $getStarted = trim( sanitize_text_field( $_POST['getStarted'] ) );
        $fullName = trim( sanitize_text_field( $_POST['fullName'] ) );
        $jobTitle = trim( sanitize_text_field( $_POST['jobTitle'] ) );
        $businessEmail = trim( sanitize_text_field( $_POST['businessEmail'] ) );
        $phoneNumber = trim( sanitize_text_field( $_POST['phoneNumber'] ) );
        $subject = "Clockers Other Enquiry";
        $formHeading = "New Other Enquiry";
        $filedArray = array(
            'companyName' => $companyName,
            'businessLocation' => $businessLocation,
            'developmentStage' => $developmentStage,
            'technicalLead' => $technicalLead,
            'getStarted' => $getStarted,
            'fullName' => $fullName,
            'jobTitle' => $jobTitle,
            'businessEmail' => $businessEmail,
            'phoneNumber' => $phoneNumber,
        );
        if(isset($_POST['send_form_type']) && (trim($_POST['send_form_type']) == 'BookingData') ){
        	$subject ="Clockers Booking Enquiry";
        	$formHeading = "New Booking Enquiry";
            sendBookingDataIntoZapier( $filedArray );
        }else if(isset($_POST['send_form_type']) && (trim($_POST['send_form_type']) == 'letsTalkData') ){
        	$subject ="Clockers Lets Talk Enquiry";
        	$formHeading = "New Lets Talk Enquiry";

            sendLetsTalkDataIntoZapier( $filedArray );
        }
        

        $subject = $subject;
        $from = trim( get_option('admin_email') );
		$to = $from;
        $body = '<html><body>';
        $body .= '<h1 style="color:#ff6a13;">'.$formHeading.'</h1>';
        $body .= '<p>Company Name : '.$companyName.'</p>';
        $body .= '<p>Business Location : '.$businessLocation.'</p>';
        $body .= '<p>Development Stage : '.$developmentStage.'</p>';
        $body .= '<p>Do you have an in house CTO or technical lead? : '.$technicalLead.'</p>';
        $body .= '<p>When are you looking to get started?e : '.$getStarted.'</p>';
        $body .= '<p>Full Name : '.$fullName.'</p>';
        $body .= '<p>Job Title : '.$jobTitle.'</p>';
        $body .= '<p>Business Email : '.$businessEmail.'</p>';
         $body .= '<p>Phone Number : '.$phoneNumber.'</p>';
        $body .= '</body></html>';
		//$headers[] = array('Content-Type: text/html; charset=UTF-8');
       // $headers[] = 'From: Clockers <'.$from.'>';
        
        $headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
//$headers .= 'From: <'.$from.'>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

$mail_status = mail($to,$subject,$body,$headers); 
        //$mail_status = wp_mail( $to, $subject, $body, $headers );
        if( $mail_status ){
            
            
            echo json_encode( array('status' => 'success', 'message' => 'Thank you') );
            exit();
        }
        echo json_encode( array('status' => 'error', 'message' => 'Failed Request. Try Again!') );
        exit(); 

    }else{
        echo json_encode( array('status' => 'error', 'message' => 'Invailid Request') );
        exit();
    }
}
add_action('wp_ajax_cloker_booking_form_data', 'clokerBookingFormData');
add_action('wp_ajax_nopriv_cloker_booking_form_data', 'clokerBookingFormData');
function wpse27856_set_content_type(){
    return "text/html";
}
add_filter( 'wp_mail_content_type','wpse27856_set_content_type' );

/**
 * Added custom blog comment list THML
 *
 */
function mytheme_clocker_comment($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }
    ?>
    <<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
    <?php if ( 'div' != $args['style'] ) : ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
    <?php endif; ?>
    <div class="comment-author vcard">
        <?php /* this is where avatar is displayed */ ?>
        <div class="comment-author-img">
            <?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
        </div>
        <div class="comment-author-extra">
            <?php printf( __( '<cite class="fn">%s</cite> <span class="says">says:</span>' ), get_comment_author_link() ); ?>
             <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
                <?php
                printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)' ), '  ', '' );
                ?>
            </div>
        </div>
    </div>
    <?php if ( $comment->comment_approved == '0' ) : ?>
         <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
          <br />
    <?php endif; ?>

   

    <?php comment_text(); ?>

    <div class="reply">
        <?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
    </div>
    <?php if ( 'div' != $args['style'] ) : ?>
    </div>
    <?php endif;

}


add_filter( 'gettext', 'theme_change_comment_cookie_label', 20, 3 );
function theme_change_comment_cookie_label( $translated_text, $text, $domain ) {
    if ( is_singular() ) {
        switch ( $translated_text ) {
            case 'Save my name, email, and website in this browser for the next time I comment.' :
                $translated_text = __( 'Save my name and email for next time.', 'frontier' );
                break;
        }
    }
    return $translated_text;
}