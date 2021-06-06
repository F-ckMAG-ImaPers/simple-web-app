<?php

require_once '/var/www/html/src/database.php';

$mysqli = getMysql();
$mysqli->query('CREATE TABLE IF NOT EXISTS counter (counter int);');