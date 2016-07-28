jQuery(function(jQuery) {
  jQuery(document).ready( function() {
    // Agregar borde en titulos
    var template = `<div class='section-title__borderbottom'>
    <div class='borderbottom'></div>
    <div class='borderbottom'></div>
    </div>`
    jQuery('header.entry-header').find('h1.entry-title').append(template)
    jQuery('section.storefront-product-section').find('h2.section-title').append(template)
    jQuery('main.site-main').find('h1.page-title').append(template)
    jQuery('.page-content').find('h2').append(template)
    jQuery('div.related.products').find('h2').append(template)
    jQuery('div.cross-sells').find('h2').append(template)
    jQuery('div.up-sells').find('h2').append(template)


    // Agregar estilos a title en enlaces
    jQuery('.cart-contents').tipsy({gravity: 'se'})

    // Customizar flexslider principal
    jQuery('.flexslider__principal').flexslider ({
      controlNav: false,
      directionNav: true,
      prevText: '',
      nextText: ''
    })

    // Customizar flexslider productos
    jQuery('.flexslider__products').flexslider({
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

    // Agregar VER DETALLES en productos
    jQuery('.woocommerce-LoopProduct-link').append('<span class="view-details">Ver detalles</span>')

    // Customizando StickyNavbar
    jQuery('.storefront-primary-navigation').stickyNavbar({
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
})