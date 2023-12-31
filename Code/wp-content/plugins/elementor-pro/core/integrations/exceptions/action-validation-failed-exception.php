<?php

namespace ElementorPro\Core\Integrations\Exceptions;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Action_Validation_Failed_Exception extends Exception_Base {

	protected function format_message( $message ) {
		return sprintf(
			'Action `%s` failed validation: %s',
			$this->action,
			$message
		);
	}
}
