import modernizr from './vendors/modernizr.js'
import selectivizr from './vendors/selectivizr.js'
import components from './lib/components'

(() => {
  'use strict'

  document.addEventListener('DOMContentLoaded', onDOMLoad)

  function onDOMLoad () {
    modernizr()
    selectivizr()
    components()
  }
})()
