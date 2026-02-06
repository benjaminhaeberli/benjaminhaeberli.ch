# Mise à jour kirby-seo pour Kirby 5

## Contexte

Le plugin `benjaminhaeberli/kirby-seo` (v0.3.0) est actuellement incompatible avec Kirby 5 car `composer.json` contraint `getkirby/cms` à `^4.0.1`. Le site principal `benjaminhaeberli.ch` a migré vers Kirby 5.2.2, Vite 7, Tailwind 4 et PHP 8.4. Le plugin doit être mis à jour pour supporter Kirby 5 tout en maintenant la rétrocompatibilité Kirby 4.

## Objectifs

- [ ] Rendre le plugin compatible Kirby 5 (`getkirby/cms ^4.0.1 || ^5.0`)
- [ ] Mettre à jour le requirement PHP minimum à `^8.2` (minimum Kirby 5)
- [ ] Mettre à jour les dépendances de développement
- [ ] Vérifier que l'API Kirby utilisée est stable entre v4 et v5
- [ ] Publier une release compatible (v0.4.0)

## Architecture actuelle du plugin

### Structure

```
kirby-seo/
├── index.php                          # Point d'entrée (extensions Kirby)
├── composer.json                      # Dépendances
├── src/
│   ├── bootstrap.php                  # Define KIRBY_HELPER_DUMP
│   ├── KirbySeoInterface.php          # Interface publique
│   └── KirbySeo.php                   # Classe principale
├── snippets/
│   └── meta.php                       # Snippet seo/meta (balises HTML)
├── blueprints/fields/
│   ├── seo.yml                        # Blueprint fields/seo/meta (page-level)
│   └── site.yml                       # Blueprint fields/seo/site (site-level)
└── tests/                             # Tests Pest
```

### Extensions enregistrées (`index.php`)

```php
Kirby::plugin('benjaminhaeberli/kirby-seo', [
    'snippets' => [
        'seo/meta' => __DIR__ . '/snippets/meta.php',
    ],
    'blueprints' => [
        'fields/seo/meta' => __DIR__ . '/blueprints/fields/seo.yml',
        'fields/seo/site' => __DIR__ . '/blueprints/fields/site.yml',
    ],
]);
```

### Classe `KirbySeo` (src/KirbySeo.php)

Utilise les APIs Kirby suivantes :

- `Kirby\Cms\App`, `Kirby\Cms\Page`, `Kirby\Toolkit\A`
- `$kirby->site()->kirbyseositeobject()->toObject()`
- `$seoobject->kirbyseoimage()->toFile()?->crop(1200, 630)->url()`
- `$page->kirbyseoobject()->toObject()`
- `A::first(kirby()->language()->locale())`
- `site()->url()`

### Snippet `meta.php`

Utilise `Html::tag()` et la fonction `e()` pour générer conditionnellement les balises meta (title, description, keywords, robots, canonical, Open Graph, Twitter Card).

### Blueprints

- **`seo.yml`** (page) : `type: group` contenant un `type: object` avec champs `text`, `textarea`, `tags`, `url`
- **`site.yml`** (site) : similaire avec image, site title, Twitter handles

## Points de compatibilité Kirby 5

### API vérifiée (aucun changement cassant)

| API                             | Status K5 |
| ------------------------------- | --------- |
| `Kirby\Cms\App`                 | Stable    |
| `Kirby\Cms\Page`                | Stable    |
| `Kirby\Toolkit\A`               | Stable    |
| `$field->toObject()`            | Stable    |
| `$field->toFile()`              | Stable    |
| `$file->crop()`                 | Stable    |
| `Html::tag()`                   | Stable    |
| `e()` helper                    | Stable    |
| `kirby()->language()->locale()` | Stable    |
| `site()->url()`                 | Stable    |
| Blueprint `type: group`         | Stable    |
| Blueprint `type: object`        | Stable    |

### Points d'attention K5

- Le type `Kirby\Cms\Plugin` est déprécié en faveur de `Kirby\Plugin\Plugin` (n'affecte pas ce plugin, qui utilise `Kirby::plugin()`)
- Les champs nommés `version` ou `versions` sont désormais réservés (ce plugin n'en utilise pas)
- PHP 8.2 est le minimum pour Kirby 5 : le plugin doit monter de `^8.1` à `^8.2`
- Type hints plus stricts dans les classes core K5 : vérifier si `KirbySeo` extends quelque chose de core (non, c'est standalone)

## Implémentation

### 1. `composer.json`

```json
{
  "require": {
    "php": "^8.2",
    "getkirby/cms": "^4.0.1 || ^5.0",
    "getkirby/composer-installer": "^1.2.1",
    "funkjedi/composer-include-files": "^1.1"
  },
  "require-dev": {
    "laravel/pint": "^1.17",
    "pestphp/pest": "^3.0",
    "phpstan/phpstan": "^1.12",
    "rector/rector": "^1.0"
  }
}
```

**Changements :**

- `php` : `^8.1` → `^8.2`
- `getkirby/cms` : `^4.0.1` → `^4.0.1 || ^5.0`
- `pestphp/pest` : `^2.6.1` → `^3.0` (Pest 3 supporte PHP 8.2+)
- `phpstan/phpstan` : `^1.10.15` → `^1.12`
- `laravel/pint` : `^1.10` → `^1.17`
- `rector/rector` : `^0.19.0` → `^1.0`
- Supprimer `sempro/phpunit-pretty-print` (incompatible Pest 3)

### 2. `src/KirbySeo.php`

Aucun changement de logique nécessaire. Optionnellement :

- Ajouter des return types explicites si manquants
- Vérifier que `A::first(kirby()->language()->locale())` fonctionne en mode single-language (pas de `language()` disponible) et ajouter un fallback

### 3. Tests

- Mettre à jour les tests pour Pest 3
- Ajouter un test qui vérifie l'instanciation avec un mock Kirby 5
- Tester en mode single-language et multi-language

### 4. CI/CD

- Matrice PHP : `[8.2, 8.3, 8.4]`
- Tester avec Kirby 4 (`--prefer-lowest`) et Kirby 5 (`--prefer-stable`)

## Critères d'acceptation

- [ ] `composer install` résout avec `getkirby/cms ^5.0`
- [ ] `composer install` résout toujours avec `getkirby/cms ^4.0.1`
- [ ] `composer test` passe (Pest)
- [ ] `composer pint --test` passe
- [ ] `composer phpstan` passe
- [ ] Le snippet `seo/meta` génère les bonnes balises HTML
- [ ] Les blueprints `fields/seo/meta` et `fields/seo/site` fonctionnent dans le Panel K5
- [ ] Release v0.4.0 publiée

## Après la release

Réintégrer dans `benjaminhaeberli.ch` :

```bash
composer require benjaminhaeberli/kirby-seo:^0.4.0
```

Puis restaurer :

- `seo: fields/seo/meta` dans les blueprints (`home.yml`, `blog.yml`, `article.yml`, `legal-notice.yml`)
- `<?php snippet('seo/meta') ?>` dans `header.php` (remplacer les balises meta basiques)

---

**Créé le**: 2026-02-01
**Priorité**: Haute
**Type**: feature
