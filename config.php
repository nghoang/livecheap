<?php

//$con = mysql_connect("localhost","purejoy1_affi",")^mx$855Ee)T");
$con = mysql_connect("localhost","root","root");
if (!$con) die('Could not connect: ' . mysql_error());
mysql_select_db("livecheap");
//mysql_select_db("purejoy1_affiliate");
session_start();

require_once "functions.php";

error_reporting(E_ALL);
ini_set('display_errors', '1');

?>