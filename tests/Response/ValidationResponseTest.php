<?php

declare(strict_types=1);

namespace SharadKashyap\ApiResponse\Tests\Response;

use PHPUnit\Framework\TestCase;
use SharadKashyap\ApiResponse\Response\ValidationResponse;

final class ValidationResponseTest extends TestCase
{
    public function testValidationResponseExposesExpectedErrors(): void
    {
        $response = new ValidationResponse(
            errors: [
                'email' => [
                    'The email field is required.',
                    'The email must be valid.',
                ],
            ],
            message: 'Validation failed.',
            statusCode: 422,
        );

        self::assertSame(
            [
                'success' => false,
                'message' => 'Validation failed.',
                'errors' => [
                    'email' => [
                        'The email field is required.',
                        'The email must be valid.',
                    ],
                ],
            ],
            $response->toArray()
        );

        self::assertSame(422, $response->getStatusCode());
        self::assertSame('Validation failed.', $response->getMessage());

        self::assertJsonStringEqualsJsonString(
            '{"success":false,"message":"Validation failed.","errors":{"email":["The email field is required.","The email must be valid."]}}',
            $response->toJson()
        );
    }
}
