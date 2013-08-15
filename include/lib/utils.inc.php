<?php
// Make sure we are called from main.php
if (!defined('SECURITY'))
  die('use main.php');

function print_help() {
	echo "\nUsage: php main.php [-d] -c <coin> ";
	echo "\nHelp: -h shows this message";
	echo "\nExample: php main.php -c dmd";
	echo "\nExample with debug: php main.php -d -c str";
	echo "\n";
}

function print_header() {
	echo "\n|-------------------------------------------------------------|";
	echo "\n  PHP Client for superblocks v". VERSION;
	echo "\n  https://github.com/nicoschtein/superblocks-php";
	echo "\n  Find the next block reward of cryptocoins using superblocks";
	echo "\n  https://github.com/superblocks/superblocks";
	echo "\n|-------------------------------------------------------------|\n";
}

?>