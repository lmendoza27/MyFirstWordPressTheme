<!DOCTYPE html>
<html <?php language_attributes(); ?> style="margin-top: 0px !important;" > 
<head>
    <meta charset="<?php bloginfo("charset") ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <!-- Aún no logro ver por qué no funciona --> 
<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="custom-header" rel="home">
		<img src="<?php esc_url(header_image()); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr(get_bloginfo( 'title' )); ?>">
	</a>
<?php endif;  ?>
<header class="cf">
		  <nav class="header-computer">
			    <!--<h1 class="logo">market-wp.com</h1>-->
            
                <h1 class="logo">    <?php echo esc_html(get_bloginfo('name')); ?></h1>
                <div class="opciones-menu">
                <?php 

               
                wp_nav_menu(
                        array(
                            "menu" => 'menu-principal'
                        )
                    ); ?>
                </div>

		  </nav>

          <nav class="header-mobile">
          <?php 

               
wp_nav_menu(
        array(
            "menu" => 'menu-principal'
        )
    ); ?>
</nav>           
<!-- https://developer.wordpress.org/resource/dashicons/ -->
<a id="nav-toggle">
<span class="dashicons dashicons-menu"></span>
</a>

	</header>


