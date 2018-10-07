(function($) {
    $(document).ready(function(){
    	$(document).on('click','a[href^="#"]',function(e){
    		e.preventDefault();
    		 $('html, body').animate({
		        scrollTop: $( $(this).attr('href') ).offset().top - $('header.main-header').innerHeight() - 10
		    }, 500);
    	});
    });
})(jQuery);