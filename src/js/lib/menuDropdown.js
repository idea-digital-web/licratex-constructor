jQuery(function (jQuery) {
  var menuDropdown = jQuery('button#menuDropdown')
  var menuDropdownUl = jQuery('ul#menuDropdownUl')
  menuDropdown.hover(function () {
    menuDropdown.find('i#caretDown').toggleClass('hide')
    menuDropdown.find('i#caretUp').toggleClass('show-inline')
    menuDropdownUl.toggleClass('show-block').css('transition', 'all 1.2s ease')
    menuDropdownUl.toggleClass('hide').css('transition', 'all 1.2s ease')
  })
  menuDropdownUl.mouseleave(function () {
    menuDropdownUl.toggleClass('show-block')
    menuDropdownUl.toggleClass('hide')
    menuDropdown.find('i#caretDown').toggleClass('hide')
    menuDropdown.find('i#caretUp').toggleClass('show-inline')
  })
})
