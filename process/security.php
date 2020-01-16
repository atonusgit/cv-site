<?php

/**
 *	Security
 *
 *	@author Anton Valle
 */

namespace antonCV;

class Security {

	private function setToken() {

		return bin2hex( random_bytes( 32 ) );

	}

	public function getToken( $key ) {

		if ( empty( $_SESSION[$key] ) ) {

		    $_SESSION[$key] = $this->setToken();

		}

		return $_SESSION[$key];

	}

}