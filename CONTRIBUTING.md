# Contributing

Thank you for your interest in contributing to this project.

## Development Requirements

- PHP 8.2 or later
- Composer
- PHPUnit
- PHPStan
- PHP CS Fixer

## Setup

Clone the repository.

```bash
git clone https://github.com/sharadkashyapdev/php-api-response-toolkit.git
```

Install dependencies.

```bash
composer install
```

## Before submitting a Pull Request

Run all quality checks.

```bash
phpunit
```

```bash
phpstan analyse
```

```bash
php-cs-fixer fix --dry-run
```

## Coding Standards

- Follow PSR-12.
- Use strict types.
- Keep methods focused and readable.
- Write tests for new functionality.
- Keep public APIs backward compatible whenever possible.

## Pull Requests

Please ensure that:

- Tests pass.
- Static analysis passes.
- Code style passes.
- Documentation is updated when required.

Thank you for helping improve this project.