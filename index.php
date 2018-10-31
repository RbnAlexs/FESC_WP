<?php get_header(); ?>
<?php
	$args = array('post_type'   => 'Recetas','post_status' => 'publish', 'posts_per_page' => 5,);
	$banners = new WP_Query( $args );
	if( $banners->have_posts() ) : $count = $banners->found_posts;
?>
<div class="container">
	<div class="row">
  		<div id="carousel" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
			<?php for($i = 0; $i < $count ;  $i++) { ?>
                <li data-target="#carousel" data-slide-to="<?php echo $i; ?>" class="<?php echo ($i == 0) ? 'active' : ''?>"></li>
            <?php } ?>		  
          </ol>
		  <div class="carousel-inner">
		     <?php $i = 0; while($banners->have_posts()): $banners->the_post(); ?>
		    <div class="carousel-item <?php echo ($i == 0) ? 'active' : ''?>">
		    	<a href="<?php echo get_post_meta($post->ID , 'dropdown-metabox', true );?>">
		      		<img src="<?php echo get_the_post_thumbnail_url($post_id, 'full');?>" alt="">
		      	</a>
		    </div>
		    <?php $i++; endwhile; wp_reset_postdata(); ?>
		  </div>
                <a href="#carousel" class="carousel-control-prev" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a href="#carousel" class="carousel-control-next" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>		
        </div>
 	</div>
</div>
<?php
else :
  esc_html_e( 'No banners in the diving taxonomy!', 'text-domain' );
endif;
?>

	<main role="content">
		<!-- section -->
		<div class="container">
			<div class="row">
				hola mundo!
			</div>
			<section>

				<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

				<?php get_template_part('loop'); ?>

				<?php get_template_part('pagination'); ?>

			</section>
			<!-- /section -->		
		</div>
	</main>

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
