---
name: kirby-template
description: Create and modify Kirby CMS templates and snippets. Use when working with PHP templates in resources/views/templates/ or snippets in resources/views/snippets/. Handles Kirby's slot system, snippet includes, and template patterns.
---

# Kirby Template

Create and modify Kirby CMS templates and snippets for this project.

## Project Structure

```
resources/views/
├── templates/          # Page templates (match blueprint names)
│   ├── home.php
│   ├── blog.php
│   ├── article.php
│   ├── default.php
│   ├── error.php
│   └── legal-notice.php
└── snippets/
    ├── header.php
    ├── footer.php
    ├── partials/       # Reusable UI components
    │   ├── container.php
    │   ├── basic-section.php
    │   ├── review-item.php
    │   └── skill-item.php
    ├── blocks/         # Kirby blocks
    └── svg/            # SVG icons and logos
```

## Template Pattern

```php
<?php snippet('header') ?>

<main class="flex flex-col mt-8 sm:mt-24">
    <?php snippet('partials/container', slots: true, data: ['css' => 'to-reveal']) ?>
    <?php slot('content') ?>
        <!-- Content here -->
    <?php endslot() ?>
    <?php endsnippet() ?>
</main>

<?php snippet('footer') ?>
```

## Snippet with Slots

```php
<?php snippet('partials/container', slots: true, data: [
    'css' => 'to-reveal',
    'paddingTop' => 'pt-8',
    'fullsize' => true
]) ?>
<?php slot('content') ?>
    <!-- Slot content -->
<?php endslot() ?>
<?php endsnippet() ?>
```

## Snippet with Data

```php
<?php snippet('partials/basic-section', data: [
    'title' => 'Section Title',
    'logo' => icon('lucide:icon-name', ['class' => 'text-sky-400']),
    'items' => page()->itemsRefs()->toStructure(),
], slots: true) ?>
<?php endsnippet() ?>
```

## Common Patterns

### Icons (php-icons)

```php
<?= icon('lucide:heart', ['class' => 'text-rose-400']) ?>
```

### Translations

```php
<?= I18n::translate('actions.contact_me') ?>
```

### Page Data

```php
<?php foreach (page()->items()->toStructure() as $item) { ?>
    <?php snippet('partials/item', ['item' => $item]) ?>
<?php } ?>
```

### Kirby Fields

```php
<?= $page->title() ?>
<?= $page->text()->kirbytext() ?>
<?= $page->date()->toDate('d.m.Y') ?>
```

## CSS Classes

Use Tailwind CSS classes. Common patterns:

- `to-reveal` - ScrollReveal animation trigger
- `flex flex-col gap-*` - Flexbox layouts
- `text-slate-300` - Muted text color
- Responsive: `sm:`, `md:`, `lg:`, `xl:` prefixes

## Best Practices

1. Always use snippets for reusable components
2. Pass data via `data: []` parameter
3. Use slots for flexible content insertion
4. Keep templates minimal, logic in models/controllers
5. Use Tailwind utility classes
