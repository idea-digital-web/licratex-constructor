<nav class="site-header_nav">
	<div class="site-header_nav--item site-header_nav--contact">
		<i class="fa fa-phone">
		</i>
		<span>0276-3435248 / 0424-1767436 </span>
	</div>
	<div class="site-header_nav--item site-header_nav--contact">
		<i class="fa fa-envelope-o">ventas@licratex.com
		</i>
		
	</div>
	<div class="site-header_nav--item site-header_nav--welcome">
		<span>
			<?php if ( is_user_logged_in() ) {?>
			<?php global $current_user; wp_get_current_user(); if ($current_user->user_firstname == true): ?>
			¡Bienvenido <?php echo ''. $current_user->user_firstname .'!'; else: ?>
			¡Bienvenido!<?php endif?>
		</span>
		<nav class="site-header_nav--welcome--dropdown">
			<button id="menuDropdown">
				<span>Mi Cuenta</span>
				<i class="fa fa-caret-down" aria-hidden="true" id="caretDown"></i>
				<i class="fa fa-caret-up hide" aria-hidden="true" id="caretUp"></i>
			</button>
			<ul id="menuDropdownUl" class="hide dropdown-menu">
				<?php if (current_user_can('administrator')): ?>
				<li><a id="itemPanel" href="<?php bloginfo('home');?>/wp-admin/"><i class="fa fa-tachometer" aria-hidden="true"></i>Escritorio</a></li>
				<?php endif ?>
				<li><a  id="itemPedidos" href="<?php bloginfo('home');?>/mi-cuenta/orders/"><i class="fa fa-shopping-basket" aria-hidden="true"></i>Pedidos</a></li>
				<li><a  id="itemEditar" href="<?php bloginfo('home');?>/mi-cuenta/edit-account/"><i class="fa fa-user" aria-hidden="true"></i>Editar</a></li>
				<li><a  id="itemEditar" href="<?php bloginfo('home');?>/mi-cuenta/edit-address/"><i class="fa fa-home" aria-hidden="true"></i>Direcciones</a></li>
				<li><a  id="itemCerrar" href="<?php echo wp_logout_url();?>" ><i class="fa fa-sign-out" aria-hidden="true"></i>Cerrar Sesión</a></li>
			</ul>
		</nav>
		<?php } else {?>
		<div class="site-header_nav--login">
			<a href="<?php bloginfo('home');?>/mi-cuenta" title="">
				<i class="fa fa-sign-in"></i>
				<i class="icon-signin"></i>Iniciar Sesión / Registrarse
			</a>
		</div>
		<?php };?>
	</div>
	<div class="site-header_nav--item site-header_nav--social">
		<a href="#" target="_blank"><i class="fa fa-facebook-official"></i></a>
		<a class="" href="#" target="_blank"><i class="fa fa-twitter"></i></a>
		<a class="" href="#" target="_blank"><i class="fa fa-instagram"></i></a>
	</div>
</nav>