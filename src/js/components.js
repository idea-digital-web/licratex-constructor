// Agregar span Ver detalles en el loop de productos
$(window).load(function () {
  $('.woocommerce-LoopProduct-link').append('<span class="view-details">Ver detalles</span>')
})

// Funcionalidad Tipsy: estilos de title en los enlaces
$(window).load(function () {
  $('.cart-contents').tipsy({gravity: 'se'})
})

// Funcionalidad Flexslider
$(window).load(function () {
  $('.flexslider').flexslider ({
    controlNav: false,
    directionNav: true,
    prevText: '',
    nextText: ''
  })
})

