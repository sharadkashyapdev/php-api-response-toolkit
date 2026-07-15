<?php

declare(strict_types=1);

namespace SharadKashyap\ApiResponse\Response;

use SharadKashyap\ApiResponse\Contract\ResponseInterface;

final readonly class ErrorResponse implements ResponseInterface
{
    public function __construct(
        private string $message,
        private int $statusCode = 500,
        private mixed $data = null,
    ) {
    }

    public function toArray(): array
    {
        return [
            'success' => false,
            'message' => $this->message,
            'data' => $this->data,
        ];
    }

    public function toJson(): string
    {
        return json_encode(
            $this->toArray(),
            JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR
        );
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}
