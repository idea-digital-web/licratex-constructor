
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="//cdn.jsdelivr.net/stickynavbar.js/1.3.0/jquery.stickyNavbar.min.js"></script>
<!-- Funcionalidad Flexslider -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/vendors/jquery.flexslider.js"></script>
<script>
  $(window).load(function () {
    $('.flexslider').flexslider ({
      controlNav: false,
      directionNav: true,
      prevText: "",
      nextText: ""
    })
  })
</script>
<!-- Funcionalidad Tipsy: estilos de title en los enlaces -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/vendors/jquery.tipsy.js"></script>
<script>
	$('.cart-contents').tipsy({gravity: 'se'})
</script>
<!-- Agregar span Ver detalles en el loop de productos -->
<script>
  $(window).load(function () {
    $('.woocommerce-LoopProduct-link').append('<span class="view-details">Ver detalles</span>')
  })
</script>
<script>
  $(window).load(function () {
    $('header.entry-header').find('h1.entry-title').append(
    `<div class='section-title__borderbottom'>
        <div class='borderbottom'></div>
        <div class='borderbottom'></div>
      </div>`
      )
    $('div.related.products').find('h2').append(
    `<div class='section-title__borderbottom'>
        <div class='borderbottom'></div>
        <div class='borderbottom'></div>
      </div>`
      )
    $('div.cross-sells').find('h2').append(
    `<div class='section-title__borderbottom'>
        <div class='borderbottom'></div>
        <div class='borderbottom'></div>
      </div>`
      )
  })
</script>
<!-- Agregar Sticky -->
<script>
  $(function () {
     $('.storefront-primary-navigation').stickyNavbar({
    activeClass: "sticky",
    sectionSelector: "scrollto",
    navOffset: 0,
    animDuration: 300,
    startAt: 0, // Stick the menu at XXXpx from the top
    easing: "easeInQuad",
    bottomAnimation: true,
    jqueryEffects: false,
    animateCSS: true,
    animateCSSRepeat: false,
    selector: "a",
    jqueryAnim: "fadeInDown", // jQuery effects: fadeIn, show, slideDown
    mobile: true
     });
});
</script>