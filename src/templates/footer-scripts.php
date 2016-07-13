
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/vendors/jquery.flexslider.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/vendors/jquery.tipsy.js"></script>
<!-- Funcionalidad Flexslider -->
<script type="text/javascript" charset="utf-8">
  $(window).load(function () {
    $('.flexslider').flexslider ()
  })
</script>
<!-- Funcionalidad Tipsy: estilos de title en los enlaces -->
<script>
	$('.cart-contents').tipsy({gravity: 'se'})
</script>
<!-- Agregar span ver detalles en el loop de productos -->
<script>
  $(window).load(function () {
    $('.woocommerce-LoopProduct-link').append('<span class="view-details">Ver detalles</span>')
  })
</script>