<?php

namespace Veridu\HTTPClient;

/**
* HTTP Client interface
*/
interface HTTPClient {

	/**
	* Sets a header value
	*
	* @param string $header Header name
	* @param string $value Header value
	*
	* @return void
	*/
	public function setHeader($header, $value);

	/**
	* Unsets a header value
	*
	* @param string $header Header name
	*
	* @return void
	*/
	public function unsetHeader($header);

	/**
	* Returns a header value
	*
	* @param string $header Header name
	*
	* @return string|null Header value
	*/
	public function getHeader($header);

	/**
	* Sets the User-Agent property
	*
	* @param string $value User-Agent value
	*
	* @return void
	*/
	public function setUserAgent($value);

	/**
	* Performs a HTTP GET on a given URL
	*
	* @param string $url Full URL to resource
	*
	* @return string Request response
	*
	* @throws ClientFailed
	* @throws EmptyResponse
	*/
	public function GET($url);

	/**
	* Performs a HTTP POST on a given URL
	*
	* @param string $url Full URL to resource
	* @param string|array $data Request payload
	*
	* @return string Request response
	*
	* @throws ClientFailed
	* @throws EmptyResponse
	*/
	public function POST($url, $data = null);

	/**
	* Performs a HTTP DELETE on a given URL
	*
	* @param string $url Full URL to resource
	* @param string|array $data Request payload
	*
	* @return string Request response
	*
	* @throws ClientFailed
	* @throws EmptyResponse
	*/
	public function DELETE($url, $data = null);

	/**
	* Performs a HTTP PUT on a given URL
	*
	* @param string $url Full URL to resource
	* @param string|array $data Request payload
	*
	* @return string Request response
	*
	* @throws ClientFailed
	* @throws EmptyResponse
	*/
	public function PUT($url, $data = null);

}