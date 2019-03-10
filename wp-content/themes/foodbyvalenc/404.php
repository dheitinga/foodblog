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
							<h1>404</h1>
							<h3><a href="<?php echo home_url(); ?>">Klik hier om terug te gaan naar home</a></h3>
						</div>
					</div>
				</div>
			</main>
		</div>
		<!-- /wrapper -->

		<div id="particles-js"></div>
		<?php wp_footer(); ?>
	</body>
</html>
