<?php
/**
* Basic URL handling
*/

namespace Veridu\Common;

class URL
{

    /**
    * Builds a full URL based on parameters
    *
    * @param string $baseURL Base URL
    * @param string|array $requestURI Request URI
    * @param string|array $queryString Query String
    *
    * @return string
    */
    public static function build($baseURL, $requestURI = null, $queryString = null)
    {
        $baseURL = rtrim($baseURL, '/');
        if (is_array($requestURI)) {
            $count = (count($requestURI) - 1);
            for ($i = 0; $i < $count; $i++) {
                $requestURI[$i] = trim($requestURI[$i], '/');
            }
            $requestURI[$count] = ltrim($requestURI[$count], '/');
            $requestURI = implode('/', $requestURI);
        } elseif (!empty($requestURI)) {
            $requestURI = ltrim($requestURI, '/');
        }
        if (empty($queryString)) {
            return "{$baseURL}/{$requestURI}";
        }
        if (is_array($queryString)) {
            $queryString = Compat::buildQuery($queryString);
        }
        $queryString = ltrim($queryString, '?');
        return "{$baseURL}/{$requestURI}?{$queryString}";
    }
}
