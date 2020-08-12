(function(){function r(e,n,t){function o(i,f){if(!n[i]){if(!e[i]){var c="function"==typeof require&&require;if(!f&&c)return c(i,!0);if(u)return u(i,!0);var a=new Error("Cannot find module '"+i+"'");throw a.code="MODULE_NOT_FOUND",a}var p=n[i]={exports:{}};e[i][0].call(p.exports,function(r){var n=e[i][1][r];return o(n||r)},p,p.exports,r,e,n,t)}return n[i].exports}for(var u="function"==typeof require&&require,i=0;i<t.length;i++)o(t[i]);return o}return r})()({1:[function(require,module,exports){
// Add toggle module

// Add tinyslider

var Linden = {
    modules: {
        header: require('./modules/header'),
        slider: require('./modules/slider')
    },
    init: function() {
        for( var key in this.modules ) {
            this.modules[key].init();
        }
    }
};

/**
  * Fires after our Dom content has loaded
  */
document.addEventListener("DOMContentLoaded", function() {
    'use strict';
    Linden.init();
});
},{"./modules/header":2,"./modules/slider":3}],2:[function(require,module,exports){
/**
 * The JavaScript for regulating our header
 */
var Header = {
    hamburgerMenu: document.getElementsByClassName('hamburger-menu'),
    header: document.getElementById('header'),
    init: function() {
        this.hamburger();
    },
    // Handles the hamburger menu
    hamburger: function() {

        if( Header.hamburgerMenu.length == 0  ) {
            return;
        }

        Header.hamburgerMenu[0].addEventListener('click', function(event) {
            event.preventDefault();

            var icon = Header.hamburgerMenu[0].getElementsByTagName('i')[0];

            icon.classList.toggle('icon-bars');
            icon.classList.toggle('icon-times');

            Header.header.classList.toggle('header-open');

        });

    }

};

module.exports = Header;
},{}],3:[function(require,module,exports){
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
},{}]},{},[1]);
