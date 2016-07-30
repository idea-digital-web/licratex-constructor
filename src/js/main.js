import jQuery from 'jquery'
import modernizr from './vendors/modernizr.js'
import selectivizr from './vendors/selectivizr.js'

(() => {
  'use strict'

  document.addEventListener('DOMContentLoaded', onDOMLoad)

  function onDOMLoad () {
    modernizr()
    selectivizr()
  }
})()
