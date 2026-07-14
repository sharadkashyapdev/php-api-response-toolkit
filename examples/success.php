<?php

declare(strict_types=1);

require_once __DIR__ . '/../src/Contract/ResponseInterface.php';
require_once __DIR__ . '/../src/Response/SuccessResponse.php';

use SharadKashyap\ApiResponse\Response\SuccessResponse;

$response = new SuccessResponse(
    message: 'User created successfully.',
    data: [
        'id' => 1,
        'name' => 'Sharad Kashyap',
    ],
    statusCode: 201,
);

echo $response->toJson();