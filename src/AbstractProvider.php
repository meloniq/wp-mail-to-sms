<?php
namespace Meloniq\WpSendSms;

abstract class AbstractProvider {

	/**
	 * Send SMS.
	 *
	 * @param string $to      Recipient phone number.
	 * @param string $message Message to send.
	 *
	 * @return array
	 */
	abstract public function send( string $to, string $message ) : array;

	/**
	 * Get provider ID.
	 *
	 * @return string
	 */
	abstract protected function get_id() : string;

	/**
	 * Get provider name.
	 *
	 * @return string
	 */
	abstract protected function get_name() : string;

	/**
	 * Get option.
	 *
	 * @param string $name Option name.
	 *
	 * @return mixed
	 */
	protected function get_option( string $name ) {
		$option_name = 'wpss_' . $this->get_id() . '_' . $name;

		return get_option( $name );
	}

}
