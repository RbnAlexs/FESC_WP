<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="https://i1.wp.com/www.enrique7mc.com/wp-content/uploads/2015/12/helloworld1.gif?fit=700%2C300&ssl=1" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="https://i1.wp.com/www.enrique7mc.com/wp-content/uploads/2015/12/helloworld1.gif?fit=700%2C300&ssl=1" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="https://i1.wp.com/www.enrique7mc.com/wp-content/uploads/2015/12/helloworld1.gif?fit=700%2C300&ssl=1" alt="Third slide">
		    </div>
		  </div>
		  
		</div>
		<script>
			$('.carousel').carousel({
			  interval: 4000
			})
		</script>
	</div>
</div>


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
