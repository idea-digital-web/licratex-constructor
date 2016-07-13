import modernizr from './vendors/modernizr.js'
import selectivizr from './vendors/selectivizr.js'
import showMenu from './lib/showMenu'

(() => {
  'use strict'

  document.addEventListener('DOMContentLoaded', onDOMLoad)

  function onDOMLoad () {
    modernizr()
    selectivizr()

// Variables Globales
    var menuDropdown = document.getElementById('menuDropdown')
    var menuDropdownUl = document.getElementById('menuDropdownUl')
    var span = document.createElement('span')
  }

// Menú
  menuDropdown.addEventListener('click', showMenu)
  menuDropdownUl.addEventListener('mouseleave', showMenu)
  menuDropdownUl.addEventListener('click', showMenu)
})()
