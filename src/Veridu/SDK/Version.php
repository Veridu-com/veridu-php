<?php
/**
* SDK Version
*/

namespace Veridu\SDK;

class Version {
	/**
	* Major version
	*/
	const MAJOR = 0;

	/**
	* Minor version
	*/
	const MINOR = 3;

	/**
	* Revision version
	*/
	const REVISION = 3;

	/**
	* Returns the current version in the format MAJOR.MINOR.REVISION
	*
	* @return string
	*/
	public static function stringify() {
		return sprintf('%d.%d.%d', self::MAJOR, self::MINOR, self::REVISION);
	}

}