<?php

namespace Veridu\SDK;

use Veridu\Common\Config;
/**
* Widget endpoint handling
*/
class Widget {
	/**
	* @var Config Config instance
	*/
	private $config;
	/**
	* @var string Session token
	*/
	private $session;
	/**
	* @var string Username identification
	*/
	private $username;

	/**
	* Base widget URL
	*/
	const BASE_URL = 'https://widget.veridu.com';

	/**
	* @param Config $config Config object with basic client configuration
	* @param string $session Session token
	* @param string $username Username identification
	*
	* @return void
	*/
	public function __construct(Config &$config, $session, $username) {
		$this->config = $config;
		$this->session = $session;
		$this->username = $username;
		//workaround for PHP 5.3
		if (!defined('PHP_QUERY_RFC1738'))
			define('PHP_QUERY_RFC1738', 1);
	}

	/**
	* Sets the basic client configuration
	*
	* @param Config $config Basic client configuration
	*
	* @return void
	*/
	public function setConfig(Config &$config) {
		$this->config = $config;
	}

	/**
	* Returns the current basic client configuration
	*
	* @return Config
	*/
	public function getConfig() {
		return $this->config;
	}

	/**
	* Sets session token
	*
	* @param string $value Token value
	*
	* @return void
	*/
	public function setSession($value) {
		$this->session = $value;
	}

	/**
	* Returns the session token
	*
	* @return string|null
	*/
	public function getSession() {
		return $this->session;
	}

	/**
	* Sets the username identification
	*
	* @param string $value Username identification
	*
	* @return void
	*/
	public function setUsername($value) {
		$this->username = $value;
	}

	/**
	* Returns the username identification
	*
	* @return string
	*/
	public function getUsername() {
		return $this->username;
	}

	/**
	* Returns a wiget endpoint full URL
	*
	* @param string $resource Resource URI
	* @param string|array $query Resource query string
	*
	* @return string
	*
	* @throws MissingUsername
	*/
	public function getEndpoint($resource, $query = null) {
		if (empty($this->username))
			throw new Exception\MissingUsername;
		$resource = trim($resource, '/');
		if (is_null($query))
			$query = "session={$this->session}";
		else if (is_array($query)) {
			$query['session'] = $this->session;
			$query = http_build_query($query, '', '&', PHP_QUERY_RFC1738);
		} else
			$query .= "&session={$this->session}";
		return sprintf("%s/%s/%s/%s/%s?%s", self::BASE_URL, $this->config->getVersion(), $resource, $this->config->getClient(), $this->username, $query);
	}

}