import $ from 'jquery'

var slides = () => {
	$(window).load(function () {
		$('.flexslider').flexslider ()
	})
}
module.exports = slides