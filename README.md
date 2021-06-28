Fastly PHP Client [![Build Status](https://travis-ci.org/fastly/fastly-php.svg?branch=master)](https://travis-ci.org/fastly/fastly-php)
====

---

🌱 Coming soon: 1.0.0
---------------------

The current version of Fastly-PHP supports only a subset of the current Fastly API.  A new major release with significantly improved API coverage and comprehensive documentation is [now available as an alpha release on Packagist](https://packagist.org/packages/fastly/fastly#1.0.0-alpha1).  This is a **major breaking change** and will not be compatible with any code written for 0.x versions.

**We strongly recommend that you do not install alpha and beta releases on live production services.** No official support is provided for such releases.

---

Installation via Composer
-------------------------
The recommended method to install _Fastly-PHP_ is through [Composer](http://getcomposer.org).

1. Add ``fastly/fastly`` as a dependency in your project's ``composer.json``:

    ```json
        {
            "require": {
                "fastly/fastly": "~0.2"
            }
        }
    ```

2. Download and install Composer:

    ```bash
        curl -s http://getcomposer.org/installer | php
    ```

3. Install your dependencies:

    ```bash
        php composer.phar install --no-dev
    ```

4. Require Composer's autoloader

    Composer also prepares an autoload file that's capable of autoloading all of the classes in any of the libraries that it downloads. To use it, just add the following line to your code's bootstrap process:

    ```php
        <?php
        require 'vendor/autoload.php';

        $adapter = new GuzzleAdapter('api_key');
        $client = new Fastly($adapter);
    ```
You can find out more on how to install Composer, configure autoloading, and other best-practices for defining dependencies at [getcomposer.org](http://getcomposer.org).

You'll notice that the installation command specified `--no-dev`.  This prevents Composer from installing the various testing and development dependencies.  For average users, there is no need to install the test suite. If you wish to contribute to development, just omit the `--no-dev` flag to be able to run tests.

Example
---

```php
$adapter = new GuzzleAdapter('api_key');
$fastly = new Fastly($adapter);

$result = $fastly->send('GET', 'stats?from=1+day+ago');

$result = $fastly->purgeAll('some_service_id');

```
``$result`` is an instance of ``Psr\Http\Message\ResponseInterface``

Adapters
---
This packages uses [Guzzle](https://github.com/guzzle/guzzle) as the default http client.

To use a different http client an adapter class that implements implementing ``Fastly\Adapter\AdapterInterface`` should be provided.

Testing
---
There is a class provided in order to fake Fastly so it can be used for testing:
```php
$fastly = new FastlyFake();

$result = $fastly->send('GET', 'stats?from=1+day+ago');

$result = $fastly->purgeAll('some_service_id');

$fastly->getCall(0); // Will return array('send', 'GET', 'stats?from=1+day+ago', array())
$fastly->getCall(1); // Will return array('purgeAll', 'some_service_id', array());

```

Tests
---
Run tests with ``bin/phpspec run``

TODO
-----
docs
consistantly formatted docs

License
-----

This package uses the MIT License (MIT). Please see [`LICENSE`](LICENSE) for more information.
