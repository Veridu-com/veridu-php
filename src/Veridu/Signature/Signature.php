<?php

namespace Veridu\Signature;

/**
* Signature interface
*/
interface Signature {
	/**
	* Generates a content signature to be used as request payload
	*
	* @param string $client Client unique ID
	* @param string $secret Shared secret
	* @param string $version API/Widget version
	* @param string $method Request method
	* @param string $resource Full URL to resource
	*
	* @return string
	*/
	public function sign($client, $secret, $version, $method, $resource);

	/**
	* Returns the last nonce used
	*
	* @return string
	*/
	public function lastNonce();

}