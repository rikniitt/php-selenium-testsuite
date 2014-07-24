php-selenium-testsuite
======================

Basic php selenium end-to-end testsuite template.
You will need at least PHP (5.3.2+), Java runtime environment and [ant](http://ant.apache.org).

## Install

Run `ant install`. This will download [composer](https://getcomposer.org/doc/) and use it
to install [phpunit](http://phpunit.de/documentation.html) and
[phpunit-selenium](https://github.com/sebastianbergmann/phpunit-selenium). It will also download
[selenium server](http://www.seleniumhq.org/download/).

## Tests

Run `ant test`. This will start the selenium server before running tests and kill it
afterwards. Test reports are generated to folder *reports/*.


### Example tests

There are some example tests in folder *tests/features/*. Those will test the 'webapp' located
in folder *example_webapp/*. You can start it with `ant serve-example-app`, which uses
python's built in webserver.

