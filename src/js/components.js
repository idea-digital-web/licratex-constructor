$(window).load(function () {
// Agregar Borde en Títulos y Subtítulos
  var template = `<div class='section-title__borderbottom'>
      <div class='borderbottom'></div>
      <div class='borderbottom'></div>
    </div>`
  $('header.entry-header').find('h1.entry-title').append(template)
  $('section.storefront-product-section').find('h2.section-title').append(template)
  $('main.site-main').find('h1.page-title').append(template)
  $('.page-content').find('h2').append(template)
  $('div.related.products').find('h2').append(template)
  $('div.cross-sells').find('h2').append(template)
  $('div.up-sells').find('h2').append(template)

// Funcionalidad Tipsy: estilos de title en los enlaces
  $('.cart-contents').tipsy({gravity: 'se'})

// Flexslider Principal
  $('.flexslider__principal').flexslider ({
    controlNav: false,
    directionNav: true,
    prevText: '',
    nextText: ''
  })

// Flexslider Productos
  $('.flexslider__products').flexslider({
    animation: 'slide',
    animationLoop: false,
    itemWidth: 200,
    itemMargin: 5,
    minItems: 4,
    maxItems: 4,
    controlNav: false,
    prevText: '',
    nextText: ''
  })

// Agregar span Ver detalles en el loop de productos
  $('.woocommerce-LoopProduct-link').append('<span class="view-details">Ver detalles</span>')

// Agregar Sticky Navbar
  $('.storefront-primary-navigation').stickyNavbar({
    activeClass: 'sticky',
    sectionSelector: 'scrollto',
    navOffset: 0,
    animDuration: 300,
    startAt: 0, // Stick the menu at XXXpx from the top
    easing: 'easeInQuad',
    bottomAnimation: true,
    jqueryEffects: false,
    animateCSS: true,
    animateCSSRepeat: false,
    selector: 'a',
    jqueryAnim: 'fadeInDown', // jQuery effects: fadeIn, show, slideDown
    mobile: true
  })
})
