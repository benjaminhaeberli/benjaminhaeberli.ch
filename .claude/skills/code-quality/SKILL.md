---
name: code-quality
description: Run code quality tools (Laravel Pint, PHPStan, Prettier) and fix issues. Use before commits or when code needs formatting/analysis. Commands available via Composer and NPM scripts.
---

# Code Quality

Run quality tools and fix code issues.

## Available Commands

### PHP Code Style (Laravel Pint)
```bash
# Fix code style
composer pint

# Check only (dry run)
composer fake:pint
```

**Config**: `pint.json` (if exists) or Laravel defaults

### PHP Static Analysis (PHPStan)
```bash
composer phpstan
```

**Config**: `phpstan.neon` (if exists)

### JavaScript/CSS Formatting (Prettier)
```bash
# Fix formatting
npm run prettier

# Check only
npm run prettier:check
```

**Config**: `.prettierrc` (if exists)

### Run All Tests
```bash
composer test
```

## Quick Reference

| Task | Command |
|------|---------|
| Fix PHP style | `composer pint` |
| Check PHP style | `composer fake:pint` |
| Analyze PHP | `composer phpstan` |
| Fix JS/CSS | `npm run prettier` |
| Check JS/CSS | `npm run prettier:check` |
| All checks | `composer test` |

## Workflow

### Before Commit
```bash
composer pint && npm run prettier
```

### Full Quality Check
```bash
composer test && npm run prettier:check
```

## Common PHPStan Issues

### Undefined Variable
```php
// Bad
echo $undefined;

// Good
$defined = 'value';
echo $defined;
```

### Type Mismatch
```php
// Add type hints
function process(string $input): string {
    return strtoupper($input);
}
```

### Kirby-specific
PHPStan may not understand Kirby's magic methods. Use `@phpstan-ignore-next-line` sparingly.

## Pint Style Rules

Laravel Pint enforces:
- PSR-12 coding standard
- Single blank line between methods
- No trailing whitespace
- Proper indentation (4 spaces)
- Short array syntax `[]`

## Best Practices

1. Run `composer pint` before every commit
2. Fix PHPStan errors, don't ignore them
3. Use `npm run prettier` for frontend files
4. Set up pre-commit hooks for automation
