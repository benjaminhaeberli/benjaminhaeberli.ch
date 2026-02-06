---
name: kirby-blueprint
description: Create and modify Kirby CMS blueprints (YAML configuration files). Use when defining page structures, fields, sections in app/blueprints/. Handles pages, site, users, and field blueprints.
---

# Kirby Blueprint

Create and modify Kirby CMS blueprints for this project.

## Project Structure

```
app/blueprints/
├── site.yml                    # Site-wide settings
├── pages/
│   ├── home.yml
│   ├── blog.yml
│   ├── article.yml
│   ├── default.yml
│   ├── error.yml
│   └── legal-notice.yml
├── fields/                     # Reusable field definitions
│   ├── references.yml
│   └── submenu.yml
└── users/
    └── default.yml
```

## Page Blueprint Structure

```yaml
title:
  en: Page Title
  fr: Titre de la page
icon: emoji

columns:
  - width: 7/12
    icon: text
    label: Content
    fields:
      fieldName:
        label: Field Label
        type: text

  - width: 5/12
    fields:
      submenu: fields/submenu
      seo: fields/seo/meta
```

## Common Field Types

### Text Fields
```yaml
title:
  label: Title
  type: text
  maxlength: 100

description:
  label: Description
  type: textarea
  maxlength: 300
```

### Structure (Repeatable)
```yaml
items:
  label: Items
  type: structure
  fields:
    name:
      label: Name
      type: text
      width: 1/3
    description:
      label: Description
      type: text
      width: 2/3
    url:
      label: URL
      type: url
```

### Extending Fields
```yaml
myField:
  extends: fields/references
```

### URL/Email
```yaml
website:
  label: Website
  type: url
  placeholder: 'https://example.com'

email:
  label: Email
  type: email
```

### Pages Reference
```yaml
navigation:
  label: Navigation
  type: pages
```

### Images
```yaml
image:
  label: Image
  type: files
  max: 1
  query: page.images
```

## Site Blueprint (site.yml)

```yaml
title: Content

options:
  changeTitle: true

columns:
  left:
    width: 1/2
    sections:
      pages:
        label: Pages
        status: all

  right:
    width: 1/2
    sections:
      global:
        type: fields
        fields:
          email:
            label: Email
            type: email
          linkedin:
            label: LinkedIn
            type: url
```

## Best Practices

1. Use `width` for field layout (1/2, 1/3, 2/3, etc.)
2. Extend common fields with `extends: fields/fieldname`
3. Add translations for labels: `label: { en: ..., fr: ... }`
4. Use meaningful icons for pages
5. Group related fields in columns/sections
6. Keep blueprints DRY with field extensions

## References

- [Kirby Blueprint Docs](https://getkirby.com/docs/reference/panel/blueprints)
- [Kirby Field Types](https://getkirby.com/docs/reference/panel/fields)
