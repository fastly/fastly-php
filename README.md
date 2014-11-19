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

        $client = new Fastly\API();
    ```
You can find out more on how to install Composer, configure autoloading, and other best-practices for defining dependencies at [getcomposer.org](http://getcomposer.org).

You'll notice that the installation command specified `--no-dev`.  This prevents Composer from installing the various testing and development dependencies.  For average users, there is no need to install the test suite. If you wish to contribute to development, just omit the `--no-dev` flag to be able to run tests.



Example
---

```php
$fastly = new Fastly\API();
$fastly->API_purge( 'http://example.com/page.html' );
```

TODO
-----
docs
consistantly formatted docs
rest of the API functions
unit test files
