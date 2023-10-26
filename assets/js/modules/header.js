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