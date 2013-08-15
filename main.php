<?php
define("SECURITY", "caro");
define("VERSION", "0.1");

define("BASEPATH", "./");

// Our include directory for additional features
define('INCLUDE_DIR', BASEPATH . 'include');

// Our config directory
define('CONFIG_DIR', INCLUDE_DIR . '/config');

// Our class directory
define('CLASS_DIR', INCLUDE_DIR . '/classes');

// Our lib directory
define('LIB_DIR', INCLUDE_DIR . '/lib');

// Our class directory
define('SUPERBLOCKS_DIR', BASEPATH . '../superblocks/bin');

// Include our configuration (holding defines for the requires)
if (!include_once(CONFIG_DIR . '/config.inc.php')) die('Unable to load configuration');

require_once(CLASS_DIR . '/bitcoin.class.php');
require_once(LIB_DIR . '/utils.inc.php');



// Print header
	print_header();

// Get command line args
$opts = getopt("hdc:");
$coin = strtolower($opts["c"]);

if (isset($opts["h"])) {
	print_help();
} else {
	if (in_array($coin, explode(" ",$config['coins']))) {
		echo "Coin is " . strtoupper($coin);
		
		$bitcoin = new BitcoinClient($config['wallet'][$coin]['type'], $config['wallet'][$coin]['username'], $config['wallet'][$coin]['password'], $config['wallet'][$coin]['host']);
		if (!$bitcoin->can_connect()) die('Cannot connect to Coind\n');

		$lastBlockNumber = $bitcoin->getblockcount();
		$lastBlockHash = $bitcoin->getblockhash($lastBlockNumber);
		$script = SUPERBLOCKS_DIR . '/getnextblockreward-'.$coin . ' ' . $lastBlockHash;
		if (isset($opts["d"])) {
			$script .= ' 1';
		}  
		$output = shell_exec($script);
		echo "\nLast Block Number is ". $lastBlockNumber;
		echo "\nLast Block Hash is ". $lastBlockHash;
		echo "\nNext Block Reward is ". $output;
	} else {
		echo "\nInvalid -c arg value: ". $coin;
		print_help();
	}
}
?>