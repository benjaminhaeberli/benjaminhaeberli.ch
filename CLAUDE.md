# Benjamin Haeberli - Portfolio

Site web personnel développé avec Kirby CMS.

## Stack

- **CMS**: Kirby 4.4.0 (flat-file PHP)
- **PHP**: 8.3+
- **CSS**: Tailwind 3.4.1
- **Build**: Vite 5.1.6
- **Qualité**: Laravel Pint, PHPStan, Prettier

## Structure

```
app/                  # Blueprints, models, bootstrap
├── blueprints/       # YAML configs (pages, fields, site)
└── models/           # Page models PHP

resources/            # Sources frontend
├── views/
│   ├── templates/    # Templates PHP (home, blog, article...)
│   └── snippets/     # Composants réutilisables
├── css/              # Styles (app.css + modules)
└── js/               # Scripts (app.js)

src/                  # Classes PHP custom
├── helpers.php       # Fonctions globales (icon, formatDate)
└── ValueObjects/     # Email, Url

storage/              # Géré par Kirby
├── kirby/            # Core CMS
├── plugins/          # Plugins Kirby
└── content/          # Contenu (gitignored)

public/               # Assets compilés (Vite)
docs/                 # Documentation
└── tasks/            # PRDs et specs
```

## Commandes

```bash
# Développement
npm run dev           # Vite dev server
npm run watch         # Vite watch mode
composer serve        # PHP built-in server

# Build
npm run build         # Build production

# Qualité
composer pint         # Fix PHP style
composer phpstan      # Analyse statique
npm run prettier      # Fix JS/CSS

# Update
composer core:update  # Update + validate + audit
```

## Patterns Kirby

### Template avec snippets
```php
<?php snippet('header') ?>
<main>
    <?php snippet('partials/container', slots: true) ?>
    <?php slot('content') ?>
        <!-- Contenu -->
    <?php endslot() ?>
    <?php endsnippet() ?>
</main>
<?php snippet('footer') ?>
```

### Blueprint structure
```yaml
fieldName:
  label: Label
  type: structure
  fields:
    name:
      type: text
```

### Icons (php-icons)
```php
<?= icon('lucide:heart', ['class' => 'text-rose-400']) ?>
```

## GitMoji

Ce projet utilise GitMoji pour les commits:
- :sparkles: feature
- :bug: fix
- :art: style
- :arrow_up: upgrade
- :memo: docs

---

## Skills Disponibles

| Skill | Usage |
|-------|-------|
| `documentator` | Créer docs dans /docs avec convention YYMMDD_type_nom.md |
| `kirby-template` | Créer/modifier templates et snippets |
| `kirby-blueprint` | Créer/modifier blueprints YAML |
| `tailwind-component` | Créer composants UI Tailwind |
| `code-quality` | Lancer Pint, PHPStan, Prettier |
| `git-commit` | Commits avec GitMoji |
| `skill-creator` | Créer de nouveaux skills |

## Slash Commands

- `/doc <description>` - Créer un document
- `/quality` - Vérifier la qualité du code
- `/commit <message>` - Commit avec GitMoji

## Conventions Documentation

**Format**: `YYMMDD_type_nom-du-doc.md`

Types: feature, fix, refactor, docs, style, perf, test, chore

## Fichiers Clés

- `vite.config.js` - Config Vite
- `tailwind.config.js` - Config Tailwind (breakpoints custom)
- `composer.json` - Dépendances PHP + scripts
- `package.json` - Dépendances NPM + scripts
- `app/blueprints/site.yml` - Config globale site
- `resources/views/templates/home.php` - Template principal
