$(window).load(function () {
  var template = `<div class='section-title__borderbottom'>
      <div class='borderbottom'></div>
      <div class='borderbottom'></div>
    </div>`
  $('header.entry-header').find('h1.entry-title').append(template)
  $('main.site-main').find('h1.page-title').append(template)
  $('.page-content').find('h2').append(template)
  $('div.related.products').find('h2').append(template)
  $('div.cross-sells').find('h2').append(template)
})
