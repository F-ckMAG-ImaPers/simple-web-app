<?php

function getMysql(): mysqli
{
	return new mysqli('mariadb', 'simple_user', 'simple_password', 'simple_app');
}

function addCounter(int $counter, mysqli $mysqli): bool
{
	$statement = $mysqli->prepare('INSERT INTO counter (counter) VALUE (?);');

	$statement->bind_param('i', $counter);

	return $statement->execute();
}

function getCurrentCounter(mysqli $mysqli): int
{
	$query = $mysqli->query('SELECT IFNULL(SUM(counter), 0) as currentCounterValue FROM counter;');
	return $query->fetch_assoc()['currentCounterValue'];
}