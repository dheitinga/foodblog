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
 * @package WordPress
 * @subpackage foodbyvalenc
 * @since 1.0
 * @version 1.0
 */

?>

<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
	    // conditionizr.com
	    // configure environment tests
	    conditionizr.config({
	        assets: '<?php echo get_template_directory_uri(); ?>',
	        tests: {}
	    });
    </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">
			<?php get_header(); ?>

			<main role="main">
				<div class="container-fluid">
					<div class="row justify-content-center">
						<div class="col-lg-8 col-10">
							<?php if (have_posts()): while (have_posts()) : the_post(); ?>
								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if ( has_post_thumbnail()) : ?>
										<a class="featured" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<?php the_post_thumbnail(); ?>
										</a>
									<?php endif; ?>
									<?php the_content(); ?>

									<?php edit_post_link(); ?>
								</article>
							<?php endwhile; ?>

							<?php else: ?>

							<article>
								<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
							</article>

							<?php endif; ?>
						</div>
					</div>
				</div>
			</main>

			<?php get_footer(); ?>
		</div>
		<!-- /wrapper -->

		<a href="/" class="fixed-topleft"><i class="fa fa-home" aria-hidden="true"></i></a>
		<div id="particles-js"></div>
		<?php wp_footer(); ?>
	</body>
</html>
