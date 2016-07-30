jQuery(function (jQuery) {
  // jQuery(document).ready(function () {
  // Menu Dropdown
  var menuDropdown = jQuery('button#menuDropdown')
  var menuDropdownUl = jQuery('ul#menuDropdownUl')
  menuDropdown.click(function () {
    menuDropdown.find('i#caretDown').toggleClass('hide')
    menuDropdown.find('i#caretUp').toggleClass('show-inline')
    menuDropdownUl.toggleClass('show-block')
    menuDropdownUl.toggleClass('hide')
  })
  menuDropdownUl.mouseleave(function () {
    menuDropdownUl.toggleClass('show-block')
    menuDropdownUl.toggleClass('hide')
    menuDropdown.find('i#caretDown').toggleClass('hide')
    menuDropdown.find('i#caretUp').toggleClass('show-inline')
  })
  // })
})
