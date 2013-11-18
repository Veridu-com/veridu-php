<?php

namespace Veridu\HTTPClient\Exception;

use Veridu\Exception\Exception;

class EmptyResponse extends Exception {
	protected $message = 'Server response is empty.';
}