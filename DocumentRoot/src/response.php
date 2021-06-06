<?php

function createErrorResponse(string $message): string
{
	return json_encode([
		'status' => false,
		'message' => $message
	]);
}

function createSuccessResponse(): string
{
	return json_encode([
		'status' => true,
	]);
}