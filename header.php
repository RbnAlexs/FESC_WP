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

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

			<!-- header -->
			<header class="header" role="banner">
				<div class="container">
					<div class="row justify-content-between logos-area">
						<div class="col">
							<a href="https://www.unam.mx/">
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo_unam.png" alt="Logo" class="logo-img">
							</a>
							<a href="http://www.cuautitlan.unam.mx/">
								<img src="<?php echo get_template_directory_uri(); ?>/img/fesc.png" alt="Logo" class="logo-img">
							</a>
						</div>
						<div class="col-5 logo-fesc">
							<a href="<?php echo home_url(); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo-cuautitltlan-00.png" alt="Logo" class="logo-img">
							</a>
						</div>
					</div>
					<!-- nav -->
					<nav class="nav row" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->
				</div>
			
					

					

			</header>
			<!-- /header -->
