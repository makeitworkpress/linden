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