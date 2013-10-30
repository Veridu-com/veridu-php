<?php

namespace Veridu\Common;

/**
* Basic client configuration
*/
class Config {
	/**
	* @var string Client unique ID
	*/
	private $client;
	/**
	* @var string Shared secret
	*/
	private $secret;
	/**
	* @var string API/Widget version to be used
	*/
	private $version;

	/**
	* @param string $client Client unique ID
	* @param string $secret Shared secret
	* @param string $version API/Widget version to be used
	*
	* @return void
	*/
	public function __construct($client, $secret, $version) {
		$this->client = $client;
		$this->secret = $secret;
		$this->version = $version;
	}

	/**
	* Returns the Client ID
	*
	* @return string
	*/
	public function getClient() {
		return $this->client;
	}

	/**
	* Returns the shared secret
	*
	* @return string
	*/
	public function getSecret() {
		return $this->secret;
	}

	/**
	* Returns the API/Widget version
	*
	* @return string
	*/
	public function getVersion() {
		return $this->version;
	}

}