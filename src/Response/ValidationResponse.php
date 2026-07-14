<?php

declare(strict_types=1);

namespace SharadKashyap\ApiResponse\Response;

use SharadKashyap\ApiResponse\Contract\ResponseInterface;

final readonly class ValidationResponse implements ResponseInterface
{
    /**
     * @param array<string, list<string>> $errors
     */
    public function __construct(
        private array $errors,
        private string $message = 'Validation failed.',
        private int $statusCode = 422,
    ) {
    }

    public function toArray(): array
    {
        return [
            'success' => false,
            'message' => $this->message,
            'errors' => $this->errors,
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