/**
 *	Make div elements appear on scroll
 *
 *	@author Anton Valle
 */

$('.appear-on-scroll').each( function() {

	$( this ).animate( {
		marginTop: '25px',
		opacity: '0'
	}, 300 )

} )

window.appearOnStartup = () => {

	if ( window.scrollY > 0 ) {

		$('.appear-on-scroll').each( function() {

			$( this ).animate( {
				marginTop: '0px',
				opacity: '1'
			}, 600 )

		} )

	}

}

window.appearOnScroll = () => {

	$('.appear-on-scroll').each( function() {

		var bottom_of_object = ( $( this ).offset().top + 20 )
		var bottom_of_window = $( window ).scrollTop() + $( window ).height()

		if ( bottom_of_window > bottom_of_object ) {

			$( this ).animate( {
				marginTop: '0px',
				opacity: '1'
			}, 600 )

		}

	} )

}