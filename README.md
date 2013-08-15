superblocks-php
===============

PHP client for [superblocks](https://github.com/superblocks/superblocks), automatization of last block hash lookup for a certain coin to display it's next block reward.

    localhost:~ Nico$ php main.php -h
    |-------------------------------------------------------------|
      PHP Client for superblocks v0.1
      https://github.com/nicoschtein/superblocks-php
      Find the next block reward of cryptocoins using superblocks
      https://github.com/superblocks/superblocks
    |-------------------------------------------------------------|
    Usage: php main.php [-d] -c <coin>
    Help: -h shows this message
    Example: php main.php -c dmd
    Example with debug: php main.php -d -c str
    
Configuration
-------------

Make a copy of `include/config/config.inc.dist.php`, modify accordingly and set the file name to `config.inc.php`.