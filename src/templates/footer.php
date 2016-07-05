
<div>
	<picture>
		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-ferrenobrega-350x233.png" >
	</picture>
	<p>Somos una empresa joven, con actitud optimista y alto ímpetu de calidad servicio, avocados en la satisfacción plena de nuestros clientes.</p>
	<span class="cards hidden">
		<i class="fa fa-cc-paypal fa-3x"></i>
		<i class="fa fa-cc-amex fa-3x"></i>
		<i class="fa fa-cc-visa fa-3x"></i>
		<i class="fa fa-cc-mastercard fa-3x"></i>
	</span>
</div>
<div>
	<h2 style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/fondo-footer.png);
	background-repeat: no-repeat;
	background-position: center;
	background-size: 100%;
	padding-top: 10px;
	text-align: center;" >Categorías</h2>
	<div>
		<?php $cleanmenu = wp_nav_menu( array(
			'theme_location'	=> 'secondary-menu',  // footer-menu-uno
			'menu'	=> false,
			'container'	=> false,
			// 'link_before'	=> '<i class="fa fa-angle-right"></i> ',
			'items_wrap'	=> '%3$s',
			'depth'	=> 0,
			'echo'	=> false,
			) );
		echo str_replace( 'li', 'span', $cleanmenu );
		?>
	</div>
</div>
<div>
	<h2 style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/fondo-footer.png);
	background-repeat: no-repeat;
	background-position: center;
	background-size: 100%;
	padding-top: 10px;
	text-align: center;"  >
	Mensaje Directo
	</h2>
	<!-- Ferrenobrega -->
	<?php if (function_exists("add_formcraft_form")) { add_formcraft_form("[fc id='3'][/fc]"); } ?>
	<!-- Localhost -->
	<?php if (function_exists("add_formcraft_form")) { add_formcraft_form("[fc id='1'][/fc]"); } ?>
</div>
<div>
	<h2 style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/fondo-footer.png);
	background-repeat: no-repeat;
	background-position: center;
	background-size: 100%;
	padding-top: 10px;
	text-align: center;">
	Contáctenos
	</h2>
	<table>
		<tr>
			<td><span><i class="fa fa-phone"></i></span></td>
			<td> 0212-2152713 <br> 0414-3993475<br></td>
		</tr>
		<tr>
			<td><span><i class="fa fa-envelope"></i></span></td>
			<td style="font-size: 16px;"><a href="mailto:ferreterianobrega@gmail.com">ferreterianobrega@gmail.com</a></td>
		</tr>
	</table>
</div>