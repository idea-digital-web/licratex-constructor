
<div class="site-footer__item">
	<h2>
	Nosotros
	</h2>
	<picture>
		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-footer.png" >
	</picture>
	<p>Somos una empresa joven, con actitud optimista y alto ímpetu de calidad servicio, avocados en la satisfacción plena de nuestros clientes.</p>
	<span class="cards hidden">
		<i class="fa fa-cc-visa fa-3x"></i>
		<i class="fa fa-cc-mastercard fa-3x"></i>
	</span>
</div>
<div class="site-footer__item">
	<h2>Categorías</h2>
	<?php wp_nav_menu(
			array(
			'theme_location' => 'primary',
			'container' => 'nav',
			'link_before'	=> '<i class="fa fa-angle-right"></i> ',
			'container_class' => 'site-footer__item--nav',
			'menu_class' => 'site-footer__item--nav-categories'
			)
		);
	?>
</div>
<div class="site-footer__item">
	<h2>
	Mensaje Directo
	</h2>
	<!-- IdeaDigital -->
	<?php if (function_exists("add_formcraft_form")) { add_formcraft_form("[fc id='3'][/fc]"); } ?>
	<!-- Localhost -->
	<?php if (function_exists("add_formcraft_form")) { add_formcraft_form("[fc id='1'][/fc]"); } ?>
</div>
<div class="site-footer__item">
	<h2>
	Contáctenos
	</h2>
	<div class="site-footer__item--contact">
		<i class="fa fa-phone"></i>
		<span>0212-2152713</span>
	</div>
	<div class="site-footer__item--contact">
		<i class="fa fa-phone-square"></i>
		<span>0414-3993475</span>
	</div>
	<div class="site-footer__item--contact">
		<i class="fa fa-envelope"></i><a href="mailto:correo@empresa.com">correo@empresa.com</a>
	</div>
</div>