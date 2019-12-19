<?php

if ( isset( $_POST['initChoice'] )
	&& intval( $_POST['initChoice'] )
	&& isset( $_POST['message'] )
	&& !empty( $_POST['message'] ) ) {

	$message_sanitized = filter_var( $_POST['message'], FILTER_SANITIZE_STRING );

	if ( strlen( $message_sanitized ) >= 1
		&& strlen( $message_sanitized ) <= 1000 ) {

		switch ( $_POST['initChoice'] ) {
			case '1':
				$init_choice = 'Musiikki';
				break;

			case '2':
				$init_choice = 'Ohjelmointi';
				break;

			case '3':
				$init_choice = 'No Javascript';
				break;

		}

		$msg = wordwrap( $message_sanitized, 70 );

		mail( "anton@valle.fi", "Viesti CV sivulta", $init_choice . "\n\r" . $msg );
		$response['response'] = "TRUE";

	} else {

		$response['response'] = "FALSE";

	}

	if ( $_POST['initChoice'] == 3 ) {

		header( "Location: http://www.antonvalle.fi/cv/?lang=" . $_POST['lang'] . "&thankyou=1" );

	} else {

		echo json_encode($response);
		die;

	}

} else {

	header( "Location: http://www.antonvalle.fi/cv/?lang=" . $_POST['lang'] . "&empty=1" );

}

?>