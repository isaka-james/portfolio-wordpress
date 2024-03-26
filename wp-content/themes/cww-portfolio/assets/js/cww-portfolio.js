jQuery(document).ready(function ($) {
    "use strict";
    var _doc = document;

    var hasCounter = $('.cww-about-section .count-item-wrapp').length;
    if( hasCounter != 0 ){
        $('.count-val').counterUp({
            delay: 10,
            time: 1000
        });
    }


    var hasGallery = $('.cww-portfolio-section.gallery').length;
    if( hasGallery != 0 ){
        $('.cww-portfolio-section ul li a').magnificPopup({
        	type:'image',
        	gallery: {
    		    enabled: true
    		  },
    		  zoom: {
    			    enabled: true,
    			}

        });
    }

    $(".site-header .main-navigation").onePageNav({
        currentClass: 'current',
        changeHash: false,
        scrollSpeed: 850,
        scrollThreshold: 0.5,
            
    });

    var hasCTA = $('.cww-cta-section').length;
    if( hasCTA != 0 ){
        $('.cww-cta-section').jarallax({
            speed: 0.2
        });
    }

    /**
     *  Mobile Menu Toggle
     * 
     */ 
     $('body').on('click keypress','#mob-toggle-menu-button', function(e) {
        e.preventDefault();
        $(this).toggleClass('is-opened');
        $('header.site-header').toggleClass('is-opened');
        $('body').toggleClass('modal-window-active');
     })





        

    _doc.addEventListener( 'keydown', function( event ) {
        var toggleTarget, modal, selectors, elements, menuType, bottomMenu, activeEl, lastEl, firstEl, tabKey, shiftKey;
            
        if ( _doc.body.classList.contains( 'modal-window-active' ) ) {
            toggleTarget = '.site-header .menu-wrapp';
            selectors = 'input, a, button';
            modal = _doc.querySelector( toggleTarget );
            elements = modal.querySelectorAll( selectors );
            elements = Array.prototype.slice.call( elements );
            if ( '.menu-modal' === toggleTarget ) {
                menuType = window.matchMedia( '(min-width: 1000px)' ).matches;
                menuType = menuType ? '.expanded-menu' : '.mobile-menu';
                elements = elements.filter( function( element ) {
                    return null !== element.closest( menuType ) && null !== element.offsetParent;
                } );
                elements.unshift( _doc.querySelector( '.mob-toggle-menu-button' ) ); 
                bottomMenu = _doc.querySelector( '.menu-last-focus-item' );
                if ( bottomMenu ) {
                    bottomMenu.querySelectorAll( selectors ).forEach( function( element ) {
                        elements.push( element );
                    } );
                }
            }

            lastEl      = elements[ elements.length - 1 ];
            firstEl     = elements[0];
            activeEl    = _doc.activeElement;
            tabKey      = event.keyCode === 9;
            shiftKey    = event.shiftKey;

            if ( ! shiftKey && tabKey && lastEl === activeEl ) {
                event.preventDefault();
                firstEl.focus();
            }

            if ( shiftKey && tabKey && firstEl === activeEl ) {
                event.preventDefault();
                lastEl.focus();
            }
        }
    } );


});