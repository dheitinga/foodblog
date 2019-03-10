<!-- header -->
<header class="header clear" role="banner">
	<div class="container-fluid">
		<div class="row justify-content-center intro">
			<?php if (is_home()): ?>
				<h1>
					Hoi! Ik ben <span>Valencia</span>, <br />
					mijn passies zijn eten <br />
					en koken <br />
				</h1>
			<?php else: ?>
				<h1 class="text-center">
					<?php echo the_title(); ?>
				</h1>
			<?php endif; ?>
		</div>
	</div>
</header>
<!-- /header -->


<!-- nav -->
<!-- <nav class="nav" role="navigation">
	<?php //html5blank_nav(); ?>
</nav> -->
<!-- /nav -->
