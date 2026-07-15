<?php

declare(strict_types=1);

namespace SharadKashyap\ApiResponse\Tests\Response;

use PHPUnit\Framework\TestCase;
use SharadKashyap\ApiResponse\Response\SuccessResponse;

final class SuccessResponseTest extends TestCase
{
    public function testSuccessResponseExposesExpectedData(): void
    {
        $response = new SuccessResponse(
            message: 'User created successfully.',
            data: [
                'id' => 1,
                'name' => 'Sharad Kashyap',
            ],
            statusCode: 201,
        );

        self::assertSame(
            [
                'success' => true,
                'message' => 'User created successfully.',
                'data' => [
                    'id' => 1,
                    'name' => 'Sharad Kashyap',
                ],
            ],
            $response->toArray()
        );

        self::assertSame(201, $response->getStatusCode());
        self::assertSame('User created successfully.', $response->getMessage());

        self::assertJsonStringEqualsJsonString(
            '{"success":true,"message":"User created successfully.","data":{"id":1,"name":"Sharad Kashyap"}}',
            $response->toJson()
        );
    }
}
