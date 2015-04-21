'use strict';

jQuery( 'nav' ).before( '<button class="menu-toggle" role="button" aria-pressed="false"></button>' ); // Add toggles to menus
jQuery( 'nav .sub-menu' ).before( '<button class="sub-menu-toggle" role="button" aria-pressed="false"></button>' ); // Add toggles to sub menus

// Show/hide the navigation
jQuery( '.menu-toggle, .sub-menu-toggle' ).on( 'click', function() {
var $this = jQuery( this );
$this.attr( 'aria-pressed', function( index, value ) {
return 'false' === value ? 'true' : 'false';
});

$this.toggleClass( 'activated' );
$this.next( 'nav, .sub-menu' ).slideToggle( 'fast' );

});

var classNames = [];
if (navigator.userAgent.match(/(iPad|iPhone|iPod)/i)) classNames.push('device-ios');
if (navigator.userAgent.match(/android/i)) classNames.push('device-android');
 
var html = document.getElementsByTagName('html')[0];
 
if (classNames.length) classNames.push('on-device');
if (html.classList) html.classList.add.apply(html.classList, classNames);