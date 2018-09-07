<section class="post-thumbs fade-in">
	<div class="row grid">
		<?php
			$count = 1;
		?>
		<?php if (have_posts()): while (have_posts()) : the_post(); $count++;?>

			<div class="col-lg-4 grid-item">
				<!-- article -->
				<article class="post-thumb" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="row">
						<div class="col-lg-12">
							<div class="post-thumb-image">
								<!-- post thumbnail -->
								<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
									</a>
								<?php else: ?>
									<?php if ($count % 2 == 0): ?>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<img src="https://via.placeholder.com/1000x1000" class="img-fluid" alt="">
										</a>
									<?php else: ?>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<img src="https://via.placeholder.com/1000x1300" class="img-fluid" alt="">
										</a>
									<?php endif; ?>
								<?php endif; ?>
								<!-- /post thumbnail -->
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12">
							<div class="post-thumb-content">
								<!-- post title -->
								<p><i class="date"><?php the_time('F j, Y'); ?></i></p>

								<h2>
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
								</h2>
								<!-- /post title -->

								<p><?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?></p>
							</div>
						</div>
					</div>
				</article>
				<!-- /article -->
			</div>

		<?php endwhile; ?>

		<?php else: ?>

			<div class="col-lg-12">
				<!-- article -->
				<article>
					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
				</article>
				<!-- /article -->
			</div>

		<?php endif; ?>
	</div>
</section>
