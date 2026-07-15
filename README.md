# PHP API Response Toolkit

[![PHP Version](https://img.shields.io/badge/PHP-8.1%2B-blue)](https://www.php.net/)
[![License](https://img.shields.io/badge/license-MIT-green)](LICENSE)

A lightweight, framework-independent PHP library for creating consistent and standardized JSON API responses.

## Purpose

Provide a simple, reusable, and framework-independent way to generate consistent JSON API responses across PHP applications.

The goal of this library is to remove repetitive response formatting logic and provide a clean foundation for API development.

## Features

- Standard success responses
- Standard error responses
- Validation error responses
- HTTP status helpers
- Framework independent
- PSR-4 autoloading
- Lightweight and reusable
- Consistent JSON output structure

## Requirements

- PHP 8.1+

## Installation

Install using Composer:

```bash
composer require sharadkashyap/php-api-response-toolkit
```

## Usage

### Success Response

```php
<?php

use SharadKashyap\ApiResponse\Response\SuccessResponse;

$response = new SuccessResponse(
    'User created successfully',
    [
        'id' => 1,
        'name' => 'John'
    ]
);

echo $response->toJson();
```

Example output:

```json
{
    "success": true,
    "message": "User created successfully",
    "data": {
        "id": 1,
        "name": "John"
    }
}
```

### Error Response

```php
<?php

use SharadKashyap\ApiResponse\Response\ErrorResponse;

$response = new ErrorResponse(
    'User not found',
    404
);

echo $response->toJson();
```

## Development

Clone the repository:

```bash
git clone https://github.com/sharadkashyap/php-api-response-toolkit.git
```

Install dependencies:

```bash
composer install
```

## Quality Checks

Run unit tests:

```bash
vendor/bin/phpunit
```

Run static analysis:

```bash
vendor/bin/phpstan analyse
```

Check code formatting:

```bash
vendor/bin/php-cs-fixer fix --dry-run
```

## Project Structure

```text
src/
├── Contract/
├── Response/

tests/
└── Response/
```

## Contributing

Contributions are welcome.

Please read:

- [CONTRIBUTING.md](CONTRIBUTING.md)

before submitting a pull request.

## Security

For security-related issues, please read:

- [SECURITY.md](SECURITY.md)

Do not report security vulnerabilities through public issues.

## Project Status

This project is currently under active development.

The initial public release focuses on providing a lightweight,
framework-independent API response toolkit for PHP.

## License

MIT License