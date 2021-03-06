Veridu PHP SDK
==============

[![Build Status](https://travis-ci.org/veridu/veridu-php.png?branch=master)](https://travis-ci.org/veridu/veridu-php)
[![Latest Stable Version](https://poser.pugx.org/veridu/veridu-php/v/stable.png)](https://packagist.org/packages/veridu/veridu-php)
[![Total Downloads](https://poser.pugx.org/veridu/veridu-php/downloads.png)](https://packagist.org/packages/veridu/veridu-php)

Installation
------------
This library can be found on [Packagist](https://packagist.org/packages/veridu/veridu-php).
The recommended way to install this is through [composer](http://getcomposer.org).

Edit your `composer.json` and add:

```json
{
    "require": {
        "veridu/veridu-php": "1.0"
    }
}
```

And install dependencies:

```bash
$ curl -sS https://getcomposer.org/installer | php
$ php composer.phar install
```

Code documentation
------------------
Latest code documentation can be found at [http://veridu.github.io/veridu-php](http://veridu.github.io/veridu-php).

Features
--------
 - PSR-0 compliant for easy interoperability
 - Easier way to access the resources(Session, Appplication, User, Hook, etc)

Examples
--------
Examples of basic usage are located in the [samples repository](https://github.com/veridu/samples).

Bugs and feature requests
-------------------------
Have a bug or a feature request? [Please open a new issue](https://github.com/veridu/veridu-php/issues).
Before opening any issue, please search for existing issues and read the [Issue Guidelines](https://github.com/necolas/issue-guidelines), written by [Nicolas Gallagher](https://github.com/necolas/).

Versioning
----------
This SDK will be maintained under the Semantic Versioning guidelines as much as possible.

Releases will be numbered with the following format:

`<major>.<minor>.<patch>`

And constructed with the following guidelines:

* Breaking backward compatibility bumps the major (and resets the minor and patch)
* New additions without breaking backward compatibility bumps the minor (and resets the patch)
* Bug fixes and misc changes bumps the patch

For more information on SemVer, please visit [http://semver.org/](http://semver.org/).

Tests
-----
To run the tests, you must install dependencies with `composer install --dev`.

