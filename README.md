Fastly PHP Client
====

Installation via Composer
-------------------------
The recommended method to install _Fastly-PHP_ is through [Composer](http://getcomposer.org).

1. Add ``fastly/fastly`` as a dependency in your project's ``composer.json``:

    ```json
        {
            "require": {
                "fastly/fastly": "dev-master"
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

Tests
---
Run tests with ``bin/phpspec run``

TODO
-----
docs
consistantly formatted docs