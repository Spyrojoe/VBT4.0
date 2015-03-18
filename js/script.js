$(document).ready(function(){

	var viewHeight;
	var colPaddingTop;

	setHeaderHeight(viewHeight, colPaddingTop);

	window.addEventListener('resize', setHeaderHeight);

	function setHeaderHeight(height, topPadding){
		height = $(window).outerHeight();
		topPadding = $(".sidebar").css("padding-top");
		parseFloat(topPadding);
		paddingComp = height - parseFloat(topPadding);
		$(".sidebar, main").height(height - parseFloat(topPadding));
		console.log("Window height is " + height);
		console.log("Sidepar top padding is " + parseFloat(topPadding));
		console.log("Padding comensation is " + paddingComp);
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