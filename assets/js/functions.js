/***** Slider dimensions *****/
jQuery(document).ready(function ($){ 
	function footerPlacement(){
		$windowHeight = $(window).height();
		$wrapperHeight = $('#main').height();
		if ($windowHeight > $wrapperHeight) {
			$('#footer').css({'position': 'fixed', 'bottom' : 0 });
		}
	}
	footerPlacement();
}); 
//$(window).load(function() {
//	/* Loads portfolio entries with ajax */
//	$("a.caption").click(function(e) {
//		e.preventDefault();
//		$("a.caption").closest('article').removeClass('loading'); // Removes active class if a certain category has an active class
//		$(this).closest('article').addClass('loading');
//		// Load-in animations 
//		$('.ajax-load').fadeIn(777);
//		$('.loading .portfolio-header').fadeOut(777);
//		// Load content
//		var $url = $(this).attr("href") + " .portfolio-content";
//		$(".loading .ajax-load").load($url, function(response, status, xhr) {
//			if (status == "error") {
//				var msg = "Error: ";
//				$(".postbox").html(msg + xhr.status + " " + xhr.statusText);
//  			}
//			/* Initialize slider on loaded stuff */
//			 $('#slider').flexslider({
//				   animation: "slide",
//				   slideshowSpeed: 7000,
//				   smoothHeight: true,
//				   prevText: "&rsaquo;",          
//				   nextText: "&lsaquo;", 
//				   start: function(slider){
//					  $('#slider').removeClass('loading');
//				   }
//			 });
//		});
//		
//	});
//});