(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
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
