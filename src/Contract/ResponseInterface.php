<?php

declare(strict_types=1);

namespace SharadKashyap\ApiResponse\Contract;

interface ResponseInterface
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(): array;

    public function toJson(): string;

    public function getStatusCode(): int;

    public function getMessage(): string;
}
