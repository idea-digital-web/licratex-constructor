var menuDropdownUl = document.getElementById('menuDropdownUl')
var caretUp = document.getElementById('caretUp')
var caretDown = document.getElementById('caretDown')

var showMenu = () => {
  menuDropdownUl.classList.toggle('show-block')
  caretUp.classList.toggle('show-inline')
  caretDown.classList.toggle('hide')
}
module.exports = showMenu
