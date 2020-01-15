<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package clockers
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			//the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>

	</header><!-- .entry-header -->

	<?php 
	if ( ! is_singular() ) :
		clockers_post_thumbnail();
	endif;
	 ?>

	<div class="entry-content">
		<?php
		the_content();
		// the_content( sprintf(
		// 	wp_kses(
		// 		/* translators: %s: Name of current post. Only visible to screen readers */
		// 		__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'clockers' ),
		// 		array(
		// 			'span' => array(
		// 				'class' => array(),
		// 			),
		// 		)
		// 	),
		// 	get_the_title()
		// ) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'clockers' ),
			'after'  => '</div>',
		) );
		?>
	</div>
	<div class="blog-author-detail">
		<hr>
		<?php  $post_author = $post->post_author;?>
		<div class="img-div">
			<img src="<?php echo esc_url( get_avatar_url( $post_author ) ); ?>" />
		</div>
		<div class="img-para">
			<p class="written-para">WRITTEN BY</p>
			<p class="admin-para"><?php echo get_the_author();?></p>
			<p class="cfo-para"><?php echo get_the_author_meta( 'description', $post_author );?></p>
		</div>
		<hr>
	</div>
	<!-- .entry-content -->

	<!-- <footer class="entry-footer">
		<?php //clockers_entry_footer(); ?>
	</footer> -->
	<!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
