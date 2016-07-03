var menuDropdown = document.getElementById('menuDropdown')
var menuDropdownUl = document.getElementById('menuDropdownUl')
var caretUp = document.getElementById('caretUp')
var caretDown = document.getElementById('caretDown')
var itemPanel = document.getElementById('item-panel')
var itemPedidos = document.getElementById('item-pedidos')
var itemEditar = document.getElementById('item-editar')
var itemCerrar = document.getElementById('item-cerrar')

var showMenu = () => {
  menuDropdownUl.classList.toggle('show-block')
  caretUp.classList.toggle('show-inline')
  caretDown.classList.toggle('hide')
}
module.exports = showMenu
