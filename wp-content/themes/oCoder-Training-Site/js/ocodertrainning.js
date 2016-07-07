$( document ).ready(function() {
	
	function hideDiv(){

    if ($(window).width() >= 768) {
            return true;
    }
	return false;
	}

	if(hideDiv()==true){
		$('.search-box').css("display", "none");
		$( '.search-btn').click(function() {
		var $div = $('.search-box');
			if ($div.is(':visible')){

				$div.hide(200);

			}else{
				$div.show(200);
			}
		});

		$('.search-btn,.search-box').click(function ( e ) { e.stopPropagation(); });

		$(document).click(function() { 
			$('.search-box').hide();
		});
	} else{

	}
});