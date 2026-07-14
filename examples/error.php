<?php

declare(strict_types=1);

require_once __DIR__ . '/../src/Contract/ResponseInterface.php';
require_once __DIR__ . '/../src/Response/ErrorResponse.php';

use SharadKashyap\ApiResponse\Response\ErrorResponse;

$response = new ErrorResponse(
    message: 'Something went wrong.',
    statusCode: 500,
    data: [
        'error' => 'Internal Server Error',
    ],
);

echo $response->toJson();