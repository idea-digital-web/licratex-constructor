import $ from 'jquery'

var addViewDetails = () => {
  $(window).load(function () {
  var template = '<span class="view-details">Ver detalles</span>'
  $('li.product').find('a.woocommerce-LoopProduct-link').append(template)
  })
}
module.exports = addViewDetails
