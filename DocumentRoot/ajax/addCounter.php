<?php

require_once '../src/database.php';
require_once '../src/response.php';

$request = $_POST;
if (isValid($request)) {
	$counterValue = getCounterValueFromRequest($request);
	$mysqli = getMysql();
	$isAddCounterSuccess = addCounter($counterValue, $mysqli);

	echo ($isAddCounterSuccess ? createSuccessResponse() : createErrorResponse($mysqli->error));
}

function isValid(array $request): bool
{
	return array_key_exists('counter', $request) && is_numeric($request['counter']);
}

function getCounterValueFromRequest(array $request): int
{
	return (int) $request['counter'];
}