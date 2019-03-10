<main class="post-thumbs">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-10">
				<div class="grid">
					<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12 grid-sizer"></div>

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

					<?php endif; ?>
				</div>	
			</div>
		</div>
	</div>
</main>
