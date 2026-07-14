<?php

declare(strict_types=1);

require_once __DIR__ . '/../src/Contract/ResponseInterface.php';
require_once __DIR__ . '/../src/Response/ValidationResponse.php';

use SharadKashyap\ApiResponse\Response\ValidationResponse;

$response = new ValidationResponse(
    errors: [
        'email' => [
            'The email field is required.',
        ],
        'password' => [
            'Password must be at least 8 characters.',
        ],
    ],
);

echo $response->toJson();