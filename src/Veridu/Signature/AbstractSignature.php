<?php

namespace Veridu\Signature;

/**
* Abstract signature implementation
*/
abstract class AbstractSignature implements Signature {
	/**
	* @var string An arbitrary string, to identify the request.
	*/
	protected $nonce = null;

	/**
	* {@inheritDoc}
	*/
	public function lastNonce() {
		return $this->nonce;
	}

}