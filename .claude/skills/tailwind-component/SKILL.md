---
name: tailwind-component
description: Create UI components with Tailwind CSS for this Kirby project. Use when building new visual components, styling elements, or working with the design system. Project uses Tailwind 3.4 with custom variants (hocus, group-hocus).
---

# Tailwind Component

Build UI components with Tailwind CSS for this project.

## Configuration

**File**: `tailwind.config.js`

### Custom Breakpoints

```
xs:  576px
sm:  640px
md:  768px
xmd: 896px
lg:  1024px
xl:  1280px
xxl: 1440px
2xl: 1536px
```

### Custom Variants

```css
hocus:       /* &:hover, &:focus */
group-hocus: /* .group:hover &, .group:focus & */
```

### Font Family

```
font-sans: Inter, Helvetica, system fonts
```

## Common Patterns

### Container Component

```php
<div class="w-full max-w-screen-lg mx-auto px-4 sm:px-8">
    <!-- Content -->
</div>
```

### Card/Item Component

```php
<article class="flex flex-col w-full gap-4 text-xs xs:w-80 sm:w-64">
    <div class="flex flex-col gap-2 text-slate-300">
        <!-- Content -->
    </div>
</article>
```

### Button Styles

```php
<!-- Primary -->
<a class="flex items-center px-4 py-2 font-bold rounded bg-gradient-to-r from-sky-500 to-indigo-500 hover:from-pink-500 hover:to-yellow-500">
    Button
</a>

<!-- Secondary -->
<a class="flex items-center px-4 py-2 font-bold border-2 rounded border-slate-50 hover:bg-slate-100 hover:border-slate-100 hover:text-slate-800">
    Button
</a>
```

### Section Header

```php
<div class="flex items-center gap-2">
    <h2 class="text-lg font-bold">Title</h2>
    <?= icon('lucide:icon', ['class' => 'text-sky-400']) ?>
</div>
```

### Image with Lazy Loading

```php
<img
    class="block object-cover w-12 h-12 rounded-full"
    src="<?= $image_src ?>"
    alt="Description"
    loading="lazy"
>
```

## Color Palette (Slate Theme)

- `text-slate-50` - Primary text (white-ish)
- `text-slate-300` - Secondary/muted text
- `bg-slate-800` - Background
- `border-slate-50` - Borders

### Accent Colors

- `text-sky-400` / `bg-sky-500` - Primary accent
- `text-indigo-400` / `bg-indigo-500` - Secondary accent
- `text-rose-400` - Heart/love elements
- `text-pink-500`, `text-yellow-500` - Hover gradients

### Gradient Animation

```php
<a class="bg-gradient-to-r from-sky-500 to-indigo-500 hover:from-pink-500 hover:to-yellow-500">
```

## Responsive Design

Mobile-first approach:

```php
<div class="text-sm sm:text-base md:text-lg">
    <!-- Text scales up -->
</div>

<div class="flex-col sm:flex-row">
    <!-- Stack on mobile, row on desktop -->
</div>
```

## Best Practices

1. Use mobile-first responsive design
2. Prefer utility classes over custom CSS
3. Use `gap-*` instead of margin for spacing
4. Add `loading="lazy"` to images
5. Use semantic HTML (article, section, nav)
6. Apply `hocus:` for combined hover/focus states
