<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package clockers
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
	<h2 class="comments-title">Leave a comment</h2>
	<div class="show_top_comment clocker_blog_comment">Show 10 Comments</div>
	<div class="hide_top_comment clocker_blog_comment">Hide Comments</div>
	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<!-- <h2 class="comments-title"> -->
			<?php
			//$clockers_comment_count = get_comments_number();
			// if ( '1' === $clockers_comment_count ) {
			// 	printf(
					 
			// 		esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'clockers' ),
			// 		'<span>' . get_the_title() . '</span>'
			// 	);
			// } else {
			// 	printf(  
				 
			// 		esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $clockers_comment_count, 'comments title', 'clockers' ) ),
			// 		number_format_i18n( $clockers_comment_count ),
			// 		'<span>' . get_the_title() . '</span>'
			// 	);
			// }
			?>
		<!-- </h2> -->
		<!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			// wp_list_comments( array(
			// 	'style'      => 'ol',
			// 	'short_ping' => true,
			// ) );
                
			wp_list_comments( 'type=comment&callback=mytheme_clocker_comment' );
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'clockers' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().
		$fields =  array(

	  'author' =>
	    '<p class="comment-form-author">' .
	    '<input id="author" required="" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
	    '" size="30" />'.'<label for="author">' . __( 'Name', 'domainreference' ) .
	    ( $req ? '<span class="required">*</span>' : '' ) . '</label></p>',

	  'email' =>
	    '<p class="comment-form-email">' .
	    '<input id="email" required="" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
	    '" size="30" />'.'<label for="email">' . __( 'Email', 'domainreference' ) .
	    ( $req ? '<span class="required">*</span>' : '' ) . '</label></p>',

	  'url' =>
	    '<p class="comment-form-url"><label for="url">' . __( 'Website', 'domainreference' ) . '</label>' .
	    '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
	    '" size="30" /></p>',
	);
	$comments_args = array(
        // change the title of send button
        'fields' => $fields,
        'label_submit'=>'Submit',
        
        
          
);

	comment_form( $comments_args );
	?>

</div><!-- #comments -->
