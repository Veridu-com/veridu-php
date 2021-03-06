<?php
/**
* Exception thrown when a HTTP method other than GET, POST, DELETE or PUT is used.
*/

namespace Veridu\API\Exception;

class InvalidMethod extends \Exception
{
    protected $message = 'Invalid fetch method.';
}
