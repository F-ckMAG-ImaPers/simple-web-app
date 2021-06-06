<?php

require_once '../src/database.php';

$mysqli = getMysql();
$currentCounterValue = getCurrentCounter($mysqli);
echo $currentCounterValue;

