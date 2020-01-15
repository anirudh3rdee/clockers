<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package clockers
 */

get_header();
?>
<div class="single-blog-featured">
<?php 
	$blog_id = get_the_ID();
	echo "<div class='single-blog-featured-bottom'>";
	echo "<h1>".get_the_title( $blog_id )."</h1>";
	echo "<span class='post-date'>".get_the_date('F d, Y',$blog_id )."</span>";
	echo "</div>";
?>
</div>
</div> <!-- Header blog wrapper end -->
	<div id="primary" class="content-area single-blog-clocker">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
			//the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>
			<div class="other-single-blogs">
				<div class="previous-blog">
				<?php
				$prev_post = get_adjacent_post(false, '', true);
				if(!empty($prev_post)) {
					echo '<a href="' . get_permalink($prev_post->ID) . '" title="' . $prev_post->post_title . '">' . $prev_post->post_title . '</a>';
					echo '<a href="' . get_permalink($prev_post->ID) . '" title="' . $prev_post->post_title . '"><div class="arrow_left"><img src="'.site_url().'/wp-content/uploads/2019/11/PreviousArrow.png"></div></a>';
				}
				?>
					
				</div>
				<div class="next-blog">
				<?php
				$next_post = get_adjacent_post(false, '', false);
				if(!empty($next_post)) {
					echo '<a href="' . get_permalink($next_post->ID) . '" title="' . $next_post->post_title . '">' . $next_post->post_title . '</a>'; 
					echo '<a href="' . get_permalink($next_post->ID) . '" title="' . $next_post->post_title . '"><div class="arrow_right"><img src="'.site_url().'/wp-content/uploads/2019/11/NextArrow.png"></div></a>'; 
				}
				?>
					
				</div>
				
			</div>
			<?php
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
