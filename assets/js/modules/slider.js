/**
 * The JavaScript for setting-up the slider
 */
var Slider = {
    
    slider: document.getElementsByClassName('entry-slider'),
    instance: null,
    init: function() {
        
        if( typeof tns !== 'undefined' ) {
            console.log('TNS');
            this.instance = tns({
                container: '.entry-slider', 
                controlsText: ['&lsaquo;', '&rsaquo;'], 
                lazyload: true, 
                lazyloadSelector: '.lazy', 
                navPosition: 'bottom'
            });
        } 

        // var lazy = slider.getElementsByClassName('lazy');

        // if( lazy.length > 0 && Slider.slider.length > 0 ) {
            
        //     setTimeout( function() {

        //         if(options.autoHeight) {
        //             maxHeight = slides[0].clientHeight;
        //         } else {
        //              maxHeight = Math.max.apply(null, slides.map(function () {
        //                 return $(this).height();
        //             }).get()); 
        //         }

        //         slider.closest('.tns-inner').height(maxHeight);

        //     }, 300);   

        // }
           
    }

};

module.exports = Slider;