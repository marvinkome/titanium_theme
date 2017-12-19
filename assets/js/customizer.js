/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );	
	
	// Footer Tagline.
	wp.customize( 'titanium_footer_tagline', function( value ) {
		value.bind( function( to ) {
			$( '.footer-tag' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title, .site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );	
	
	wp.customize( 'titanium_text_color', function( value ) {
		value.bind( function( to ) {
			$( ' li, p, .entry, .entry-summary, .entry-footer, caption, select option' ).css({
			    'color':to 
			});
		});
	});
	
	wp.customize( 'titanium_header_color', function( value ) {
		value.bind( function( to ) {
			$( 'h1, h2, h3, h5, h6, .entry-header, .entry h1, .entry h2, .entry h3, h4, .entry h4, .entry h5, h6, .entry h6, .navbar-brand, footer h4, aside h4' ).css({
			    'color':to 
			});
		});
	});
	
	wp.customize( 'titanium_link_color', function( value ) {
		value.bind( function( to ) {
			$( '.entry-header a, .entry a, .entry-footer a, .widget .tagcloud a, .commentbox a, footer a' ).css({
			    'color':to 
			});
		});
	});
	
	wp.customize( 'titanium_header_bg_color', function( value ) {
		value.bind( function( to ) {
			$( '.jumbotron' ).css({
			    'background-color':to 
			});
		});
	});
	
	wp.customize( 'titanium_button_color', function( value ) {
		value.bind( function( to ) {
			$( 'button, input[type=button], input[type=reset], input[type=submit], p.form-submit input[type=submit], .btn-custom, .btn-custom:hover, .btn-custom:focus, .btn-custom:active, .open > .dropdown-toggle.btn-info' ).css({
			    'color':to 
			});
		});
	});
	
	wp.customize( 'titanium_button_bg_color', function( value ) {
		value.bind( function( to ) {
			$( 'button, input[type=button], input[type=reset], input[type=submit], p.form-submit input[type=submit], .btn-custom, .btn-custom:hover, .btn-custom:focus, .btn-custom:active, .open > .dropdown-toggle.btn-info' ).css({
			    'background-color':to,
			    'border-color':to
			});
		});
	});
		
	wp.customize( 'titanium_article_color', function( value ) {
		value.bind( function( to ) {
			$( '.boxed, table td, table th, .pager-1' ).css({
			    'background-color':to
			});
		});
	});
	
	wp.customize( 'titanium_nav_color', function( value ) {
		value.bind( function( to ) {
			$( '.navbar-custom' ).css({
			    'background-color':to
			});
		});
	});
	
	wp.customize( 'titanium_nav_link_color', function( value ) {
		value.bind( function( to ) {
			$( '.navbar-custom .navbar-nav > li  a, .navbar-custom .navbar-brand' ).css({
			    'color':to
			});
		});
	});

	wp.customize( 'titanium_nav_dropdown_color', function( value ) {
		value.bind( function( to ) {
			$( '.navbar-custom .navbar-nav > .open> .dropdown-menu' ).css({
			    'background-color':to
			});
		});
	});
	
	wp.customize( 'titanium_nav_dropdown_icon_color', function( value ) {
		value.bind( function( to ) {
			$( '.navbar-custom .navbar-toggle .icon-bar' ).css({
			    'background-color':to
			});
		});
	});

	wp.customize( 'titanium_icon_color', function( value ) {
		value.bind( function( to ) {
			$( 'i.fa, .widget ul > li:before, .entry-meta i' ).css({
			    'color':to
			});
		});
	});	
	
	wp.customize( 'titanium_others_color', function( value ) {
		value.bind( function( to ) {
			$( '.pager-1 li > a, .excerpt' ).css({
			    'border-color':to
			});
			$( 'hr' ).css({
			    'background-color':to
			});
		});
	});

} )( jQuery );

