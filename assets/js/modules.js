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