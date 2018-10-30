<?php get_header(); ?>
	<main role="content">
		<!-- section -->
		<div class="container">
			<div class="row">
				hola mundo!
			</div>
		</div>
		<section>

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
