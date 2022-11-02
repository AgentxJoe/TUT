<?php

@define('DB_SERVER', 'localhost');
@define('DB_USERNAME', 'root');
@define('DB_PASSWORD', '');
@define('DB_NAME', '');
@define('PORT', '3306');
$moo = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, PORT);
// Check connection
if ($moo->connect_error) {
  // die("Connection failed: " . $conn->connect_error);
}
// ERROR: Could not connect. Only one usage of each socket address (protocol/network address/port) is normally permitted.

@set_time_limit(99999999999);
@ini_set('memory_limit', '-1');






?>