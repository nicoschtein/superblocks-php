<?php
// Make sure we are called from main.php
if (!defined('SECURITY'))
  die('use main.php');
  
/**
 *
 * Valid coins
 * 
 * Space sepparated lowercase string
 * 
 **/
$config['coins'] = 'str dmd';

/**
 * Local wallets RPC configurations
 *
 * One set for every coin on $config['coins'].
 *
 * Must set $config['wallet']['_coin_'] to match an
 * element of $config['coins']
 * 
 * Example:
 *   _coin_    =  'btc'
 *   type      =  'http'
 *   host      =  'localhost:19334'
 *   username  =  'bitcoinrpc'
 *   password  =  'longpass'
 **/
 
$config['wallet']['str']['type'] = 'http';
$config['wallet']['str']['host'] = 'localhost:18217';
$config['wallet']['str']['username'] = 'starcoinrpc';
$config['wallet']['str']['password'] = '';

$config['wallet']['dmd']['type'] = 'http';
$config['wallet']['dmd']['host'] = 'localhost:17772';
$config['wallet']['dmd']['username'] = 'diamondcoinrpc';
$config['wallet']['dmd']['password'] = '';


?>