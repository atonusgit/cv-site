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

	public function getToken() {

		if ( empty( $_SESSION['token'] ) ) {

		    $_SESSION['token'] = $this->setToken();

		}

		return $_SESSION['token'];

	}

}