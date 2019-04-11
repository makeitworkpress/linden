/**
 * The JavaScript for setting-up the slider
 */
var Slider = {
    slider: document.getElementsByClassName('entry-slider'),
    instance: null,
    init: function() {
        
        if( typeof tns !== 'undefined' ) {
            this.instance = tns({
                container: '.entry-slider', 
                controlsText: ['&lsaquo;', '&rsaquo;'], 
                lazyload: true, 
                lazyloadSelector: '.lazy', 
                navPosition: 'bottom'
            });
        }

        /**
         * Fixes a bug with a wrong slider height with lazy loaded images.
         */
        var lazy = this.slider[0].querySelectorAll('.lazy'),
            maxHeight = 570,
            slides = this.slider[0].querySelectorAll('.slide');

        if( lazy.length > 0 && slides.length > 0 ) {
            
            setTimeout( function() {

                maxHeight = Array.prototype.map.call(slides, function(n) {
                    if( n.clientHeight != n.clientWidth ) {
                        return n.clientHeight;
                    }
                }).filter( function(n) {
                    return n != null;
                }).reduce( function(a, b) {
                    return Math.max(a, b);
                });

                Slider.slider[0].style.maxHeight = maxHeight + 'px';

            }, 300);

        }
           
    }

};

module.exports = Slider;