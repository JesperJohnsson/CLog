[![License](https://poser.pugx.org/dlid/cdbyuml/license.svg)](https://packagist.org/packages/jejd14/clog)

# CLog
## About
A small class for logging information about classes and methods

##PHP Version
<pre><code>PHP >= 5.4.0</code></pre>

## Introduction
__Instantiate an object of CLog:__
<pre><code>$newClog = new \jejd14\clog\Clog();</code></pre>

__Or instantiate an object of CLog as a shared service within the [Anax](https://github.com/mosbth/Anax-MVC) framework:__
<pre><code>$di->setShared('log', function() {
    $log = new \jejd14\clog\CLog();
    return $log;
});</code></pre>

## Methods

1. timestamp ( $domain, $where, $comment = null) - *Log a event with a time.*
2. timestampAsTable () - *Print all timestamps to a table.*
3. pageLoadTime() - *Print page per load time.*
4. memoryPeak() - *Print memory peak.*

## Calling of Methods
To properly use the method timestamp listed above you can call it as follows
(Assuming you've set the service as a shared service in your frontcontroller)

__Inside a class that uses \Anax\DI\TInjectionAware:__
<pre><code>$this->log->timestamp(__CLASS__, __METHOD__, "A breif comment");</code></pre>

__In your frontcontroller:__
<pre><code>$app->log->timestamp(__CLASS__, __METHOD__, "A breif comment");</code></pre>

[CLASS](http://php.net/manual/en/language.constants.predefined.php) and [METHOD](http://php.net/manual/en/language.constants.predefined.php) are magic constants in PHP.

__To get all the timestamps as a table:__
<pre><code>$table = $app->log->timestampAsTable();</code></pre>

## Composer
You can add [clog](https://packagist.org/packages/jejd14/clog) to your composer.json file like this.

<pre><code>"require": {
  "jejd14/clog": "dev-master"
 }</code></pre>
 
## License
 MIT
