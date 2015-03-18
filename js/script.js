$(document).ready(function(){

	var viewHeight;

	setHeaderHeight(viewHeight);

/*
	$(window).resize(function(){
		setHeaderHeight(viewHeight);
		console.log("window resized");
	});
*/

	window.addEventListener('resize', setHeaderHeight);

	function setHeaderHeight(height){
		height = $(window).outerHeight();
		$("header").height(height);
	}

	function debounce(func, wait, immediate){

		var timeout;

		return function(){

			var context = this;
			args = arguments;

			clearTimeout(timeout);

			timeout = setTimeout(function(){
				timeout = null;
				if (!immediate){
					func.apply(context, args);
				}
			}, wait);
			if (immediate && !timeout){
				func.apply(context, args);
			}
		}
	}

});