<?php

declare(strict_types=1);

namespace SharadKashyap\ApiResponse\Tests\Response;

use PHPUnit\Framework\TestCase;
use SharadKashyap\ApiResponse\Response\ErrorResponse;

final class ErrorResponseTest extends TestCase
{
    public function testErrorResponseExposesExpectedData(): void
    {
        $response = new ErrorResponse(
            message: 'Something went wrong.',
            statusCode: 500,
            data: [
                'code' => 'SERVER_ERROR',
            ],
        );

        self::assertSame(
            [
                'success' => false,
                'message' => 'Something went wrong.',
                'data' => [
                    'code' => 'SERVER_ERROR',
                ],
            ],
            $response->toArray()
        );

        self::assertSame(500, $response->getStatusCode());
        self::assertSame('Something went wrong.', $response->getMessage());

        self::assertJsonStringEqualsJsonString(
            '{"success":false,"message":"Something went wrong.","data":{"code":"SERVER_ERROR"}}',
            $response->toJson()
        );
    }
}
