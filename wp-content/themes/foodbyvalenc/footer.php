<section class="footer footer-big">
	<div class="container-fluid">
	  <div class="row justify-content-center">
				<?php if (is_home()): ?>
					<div class="col-lg-8 col-10 text-center">
						<h1>Volg mij op instagram</h1>
						<a href="https://www.instagram.com/foodbyvalenc" target="_blank"><i class="fab fa-4x fa-instagram"></i></a>
					</div>
				<?php else: ?>
					<div class="col-lg-8 col-10">
						<?php comments_template(); ?>
					</div>
				<?php endif; ?>
	  </div>
	</div>
</section>
<!-- footer -->
<footer class="footer footer-small text-center" role="contentinfo">
	<!-- copyright -->
	<p class="copyright">
		&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>.
	</p>
	<!-- /copyright -->
</footer>
<!-- /footer -->
