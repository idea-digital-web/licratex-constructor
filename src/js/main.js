import modernizr from './vendors/modernizr.js'
import selectivizr from './vendors/selectivizr.js'
import flexslider from './vendors/jquery.flexslider.js'
import showMenu from './lib/showMenu'

(() => {
  'use strict'

  document.addEventListener('DOMContentLoaded', onDOMLoad)

  function onDOMLoad () {
// Variables Globales
    var menuDropdown = document.getElementById('menuDropdown')
    var menuDropdownUl = document.getElementById('menuDropdownUl')
  }

// Menú
  menuDropdown.addEventListener('click', showMenu)
  menuDropdownUl.addEventListener('mouseleave', showMenu)
  menuDropdownUl.addEventListener('click', showMenu)
})()
