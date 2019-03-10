<main class="post-thumbs grid-padding">
	<div class="grid">
		<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12 grid-sizer"></div>

		<?php
			$count = 0;

			$arr = [
				'http://www.sydneycafes.com.au/wp-content/uploads/2016/11/thai-dish.jpg',
				'http://cphpost.dk/wp-content/uploads/2015/05/p20b.jpg',
				'http://i2.wp.com/www.foodrepublic.com/wp-content/uploads/2014/11/IMG_1348_0.jpg?resize=2448%2C2160',
				'https://2.bp.blogspot.com/-wwZRx2dNmnI/WMIVwU2ZfLI/AAAAAAAAC6I/REYmK5rCp2I7qOEgwariLFTfm8yvw1CoACLcB/s1600/DSC_0510.jpg',
				'http://4.bp.blogspot.com/-MMVkoEOdelc/TiG3YT77o_I/AAAAAAAAGOI/PNXUOKcMUO8/s1600/Pad%2BKaprao%2BCover.jpg',
				'http://i2.wp.com/www.foodrepublic.com/wp-content/uploads/2014/11/IMG_1348_0.jpg?resize=2448%2C2160',
				'https://i.pinimg.com/originals/a2/5b/19/a25b191dfc6ddc411058fc37ccd1c309.jpg',
				'https://2.bp.blogspot.com/-wwZRx2dNmnI/WMIVwU2ZfLI/AAAAAAAAC6I/REYmK5rCp2I7qOEgwariLFTfm8yvw1CoACLcB/s1600/DSC_0510.jpg'
			];
		?>
		<?php if (have_posts()): while (have_posts()) : the_post(); $count++; ?>

			<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12 grid-item">
				<div class="grid-item--content">
					<!-- article -->
					<article class="post-thumb" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="row">
							<div class="col-lg-12">
								<div class="post-thumb-image">
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">


										<?php
											if ( has_post_thumbnail()) {
												the_post_thumbnail();
											} else {
												print '<img src="' . $arr[$count - 1] . '" class="img-responsive" />';
											}
										?>
									</a>
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
				</div>
				<!-- /article -->
			</div>

		<?php endwhile; ?>

		<?php //get_template_part( 'partials/pagination' ); ?>

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
</main>
