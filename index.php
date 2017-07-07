<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php $args = array('post_type'=>"post", "posts_per_page" => 5);
			$query = new WP_Query($args);
			 ?>
			 <?php if (have_posts()) {
				 ?>
<div class="single-item">
				 <?php
	while (have_posts()) {
	the_post();
	?>
<div class="slide" style='background-image:url("<?php echo get_the_post_thumbnail_url(); ?>");height:400px;background-size:contain;background-repeat:no-repeat;background-position:center;'>
<figcaption><?php echo the_title(); ?></figcaption>
</div>
<?php
	}
	?>
</div>
	<?php
			 } ?>
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>





			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>
<script type="text/javascript">
	$('.single-item').slick();
</script

<?php
