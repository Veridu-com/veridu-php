<?php

namespace Veridu\HTTPClient;

/**
* Abstract Client implementation
*/
abstract class AbstractClient implements HTTPClient {
	/**
	* @var array Stores headers name/values
	*/
	protected $headers = array();
	/**
	* @var string User-Agent to be sent on each request
	*/
	protected $userAgent = 'StreamClient';

	/**
	* Prepares the headers to be set by the client
	*
	* @return array
	*/
	protected function prepareHeaders() {
		$headers = array();
		foreach ($this->headers as $header => $value)
			$headers[] = "{$header}: {$value}";
		return $headers;
	}

	/**
	* {@inheritDoc}
	*/
	public function setHeader($header, $value) {
		$this->headers[$header] = $value;
	}

	/**
	* {@inheritDoc}
	*/
	public function unsetHeader($header) {
		unset($this->headers[$header]);
	}

	/**
	* {@inheritDoc}
	*/
	public function getHeader($header) {
		if (isset($this->headers[$header]))
			return $this->headers[$header];
		return null;
	}

	/**
	* {@inheritDoc}
	*/
	public function setUserAgent($value) {
		$this->userAgent = $value;
	}
}