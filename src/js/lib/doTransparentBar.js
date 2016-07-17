window.onscroll = () => {
  doTransparentBar()
}

function doTransparentBar () {
  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
    document.getElementById('site-navigation').style.backgroundColor = 'rgba(30,30,30,0.5)'
  } else {
    document.getElementById('site-navigation').style.backgroundColor = '#1E1E1E'
  }
}
module.exports = doTransparentBar
