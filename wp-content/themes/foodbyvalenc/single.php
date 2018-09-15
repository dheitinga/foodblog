<?php wp_head(); ?>
<?php get_header(); ?>

<main role="main">
	<div class="container">
	  <div class="row justify-content-center">
	    <div class="col-lg-8 col-md-10 col-sm-12">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<!-- post thumbnail -->
						<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail(); // Fullsize image for the single post ?>
							</a>
						<?php endif; ?>
						<!-- /post thumbnail -->

						<?php the_content(); // Dynamic Content ?>

						<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

					</article>
					<!-- /article -->

				<?php endwhile; ?>

				<?php else: ?>

					<!-- article -->
					<article>

						<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

					</article>
					<!-- /article -->

				<?php endif; ?>
	    </div>
	  </div>
	</div>
</main>

<div id="particles-js"></div>
<?php get_footer(); ?>
