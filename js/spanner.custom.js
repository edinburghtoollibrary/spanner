(function () {
	"use strict";

	var handleClickMenuToggle, handleScrollMenuToggle, hasMenuOpen,
		bodyClass = document.body.classList;

	hasMenuOpen = function () {
		return bodyClass.contains('is-menu-active'); // open menu alredy active
	}

	handleClickMenuToggle = function (evt) {
		var isMenuTog = evt.target.classList.contains('menu-toggle'), // a click on toggle button
			isOffMenu = evt.target.closest('.site-main') !== null; // a click outside of the menu

		if (isMenuTog || (hasMenuOpen() && isOffMenu)) {
			bodyClass.toggle('is-menu-active');
			evt.target.blur();
		}
	};

	// TODO
	handleScrollMenuToggle = function (evt) {
		if (hasMenuOpen()) {
			if (evt.type === 'touchmove') {
				console.log( evt );
				//console.log( 'client', evt.changedTouches[0].clientX, evt.changedTouches[0].clientY );
			} else if (evt.type === 'scroll') {
				console.log( evt );
			}
			//bodyClass.toggle('is-menu-active');
		}
	};

	document.body.addEventListener('click', handleClickMenuToggle);
	//window.addEventListener('scroll', handleScrollMenuToggle);
	//window.addEventListener('touchmove', handleScrollMenuToggle);
})();
