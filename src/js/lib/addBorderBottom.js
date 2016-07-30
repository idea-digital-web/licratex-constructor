jQuery(function (jQuery) {
  // jQuery(document).ready(function () {
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
  // })
})
