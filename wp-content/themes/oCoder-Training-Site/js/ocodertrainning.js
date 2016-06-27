$( document ).ready(function() {

    	function checkPosition() {
    	
		    if (window.matchMedia('(min-width:768px)').matches) {
		       return true;
		       
		    } else {
		        return false;
		    }
		}


		if(checkPosition()){
			 $( ".search-btn" ).click(function() {
	    	var $div = $('.search-box');
	  		if ($div.is(':visible')){

	  			$div.hide(200);

	  		}else{
	  			$div.show(200);
	  		}
			});

			$('.search-btn,.search-box').click(function(e) { e.stopPropagation(); });

			$(document).click(function() { 
				$('.search-box').hide();
			});
		}
		else{
			$('.search-box').css("display", "block");
		}

   
});