<section class="post-thumbs">
	<div class="grid">
		<?php
			$count = 0;

			$arr = [
				'http://www.sydneycafes.com.au/wp-content/uploads/2016/11/thai-dish.jpg',
				'http://cphpost.dk/wp-content/uploads/2015/05/p20b.jpg',
				'https://2.bp.blogspot.com/-wwZRx2dNmnI/WMIVwU2ZfLI/AAAAAAAAC6I/REYmK5rCp2I7qOEgwariLFTfm8yvw1CoACLcB/s1600/DSC_0510.jpg',
				'https://static1.squarespace.com/static/5842e6a22994cab7bda9b0cd/t/5a6d3f4324a694fb9353fee0/1517109132131/IsaanDer_Hero_Native_facebook_1200x630_Poke.jpg?format=2500w',
				'http://4.bp.blogspot.com/-MMVkoEOdelc/TiG3YT77o_I/AAAAAAAAGOI/PNXUOKcMUO8/s1600/Pad%2BKaprao%2BCover.jpg',
				'http://i2.wp.com/www.foodrepublic.com/wp-content/uploads/2014/11/IMG_1348_0.jpg?resize=2448%2C2160',
				'https://i.pinimg.com/originals/a2/5b/19/a25b191dfc6ddc411058fc37ccd1c309.jpg'
			];
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
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<img src="<?php echo $arr[$count - 1] ?>" class="img-fluid" alt="">
									</a>
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

								<p><?php html5wp_excerpt(); // Build your custom callback length in functions.php ?></p>
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
