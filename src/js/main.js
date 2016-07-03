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
    var caretUp = document.getElementById('caretUp')
    var caretDown = document.getElementById('caretDown')
    // var itemPrecios = document.getElementById('itemPrecios')
    // var itemPanel = document.getElementById('itemPanel')
    // var itemPedidos = document.getElementById('itemPedidos')
    // var itemEditar = document.getElementById('itemEditar')
    // var itemCerrar = document.getElementById('itemCerrar')
  }

// Menú
  menuDropdown.addEventListener('mouseover', showMenu)
  menuDropdownUl.addEventListener('mouseleave', showMenu)
  menuDropdownUl.addEventListener('click', showMenu)
  // itemPrecios.addEventListener('click', showMenu)
  // itemPanel.addEventListener('click', showMenu)
  // itemPedidos.addEventListener('click', showMenu)
  // itemEditar.addEventListener('click', showMenu)
  // itemCerrar.addEventListener('click', showMenu)
})()
