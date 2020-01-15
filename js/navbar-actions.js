/**
 *	Navbar visualization actions
 *
 *	@author Anton Valle
 */

var sections = $( 'section' )
var nav = $( 'nav' )
var navHeight = nav.outerHeight() + 20

window.updateNavbarActiveLink = ( e ) => {

	var currentPosition = $( e.currentTarget ).scrollTop()

	sections.each( function () {

		var top = $( this ).offset().top - navHeight
		var bottom = top + $( this ).outerHeight()

		if ( currentPosition >= top && currentPosition <= bottom ) {

			nav.find( 'a' ).removeClass( 'active' )
			sections.removeClass( 'active' )
			$( this ).addClass( 'active' )
			nav.find( 'a[href="#' + $( this ).attr( 'id' ) + '"]' ).addClass( 'active' )

		}

	} )

}

nav.find( 'a' ).on( 'click', ( e ) => {

	var id = $( e.currentTarget ).attr( 'href' )
	
	$( 'html, body' ).animate( {

		scrollTop: $( id ).offset().top - navHeight

	}, 500 )
	
	return false

} )

window.toggleNavbarShadow = () => {

	if ( document.body.scrollTop > 50 || document.documentElement.scrollTop > 50 ) {

		$( '#navbar' ).addClass( 'navbar-shadow' )
		$( '#navbar' ).addClass( 'bg-light' )

	} else {

		$( '#navbar' ).removeClass( 'navbar-shadow' )
		$( '#navbar' ).removeClass( 'bg-light' )

	}

}

var overTheTop = false

window.toggleNavbarCornerLogo = () => {

	if ( document.body.scrollTop > 50
		|| document.documentElement.scrollTop > 50 ) {

		if ( $( '#corner-logo').is( ':visible' )
			&& overTheTop == false ) {

			$( '#corner-logo' ).animate( {
				marginTop: '-30px',
				opacity: '0',
			}, 300, () => { 

				$( '#corner-logo' ).hide()
				$( '#corner-name' ).show()
				$( '#corner-name' ).animate( {
					marginBottom: '0px',
					opacity: '1',
				}, 300 )

			} )

		}

		overTheTop = true

	} else {

		if ( $( '#corner-name' ).is( ':visible' )
			&& overTheTop == true ) {

			$( '#corner-name' ).animate( {
				marginBottom: '-30px',
				opacity: '0',
			}, 300, () => { 

				$( '#corner-name' ).hide()
				$( '#corner-logo' ).show()
				$( '#corner-logo' ).animate( {
					marginTop: '0px',
					opacity: '1',
				}, 300 )

			} )

		}

		overTheTop = false

	}

}

var windowWidth = window.innerWidth

window.onresize = () => {

	if ( windowWidth != window.innerWidth ) {

		updateCanvas()

	}

}

$( document ).bind( 'touchmove', function () {

    $( "canvas" ).css( "-webkit-transform", "translatey(-" + $( window ).scrollTop() + "px)" )

} )

$( document ).bind( 'touchend', function () {

    $( "canvas" ).css( "-webkit-transform", "translatey(-" + $( window ).scrollTop() + "px)" )

} )

window.updateCanvas = () => {

	html2canvas( document.querySelector( "#content-wrapper" ), { y: 106, logging: false } ).then( canvas => {
		
		if ( document.getElementById( "canvas" ) ) {

			document.getElementById( "header-blur" ).removeChild( document.getElementById( "canvas" ) )

		}

		canvasDiv = document.getElementById( "header-blur" ).appendChild( canvas )
		canvasDiv.setAttribute( "id", "canvas" )
		$( "canvas" ).css( "-webkit-transform", "translatey(-" + $( window ).scrollTop() + "px)" )

	} )

}

$( '.nav-link' ).on( 'click', () => {

	if ( 992 > window.innerWidth ) {

		$( '.navbar-toggler' ).click()

	}

} )