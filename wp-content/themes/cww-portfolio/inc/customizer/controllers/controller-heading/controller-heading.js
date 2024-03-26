( function ( $ ) {
    'use strict';
    wp.addHeadingAccordion = {
        init: function () {
            this.handleToggle();
        },
        handleToggle: function () {
            $( '.customize-control-cww-portfolio-customizer-heading.accordion .add-customizer-heading' ).on( 'click', function () {
                var accordion = $( this ).closest( '.accordion' );
                $( accordion ).toggleClass( 'expanded' );
                return false;
            } );
        },
    };

    $( document ).ready(
        function () {
            wp.addHeadingAccordion.init();
        }
    );



} )( jQuery );