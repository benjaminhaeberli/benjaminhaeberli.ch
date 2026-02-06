# Mise à jour des dépendances majeures

## Contexte

Le site utilise actuellement des versions qui nécessitent une mise à jour majeure pour bénéficier des dernières fonctionnalités et correctifs de sécurité.

**Versions actuelles**:

- Kirby CMS: 4.4.0
- Vite: 5.1.6
- Tailwind CSS: 3.4.1
- PHP: 8.3

**Versions cibles**:

- Kirby CMS: 5.x
- Vite: 7.x
- Tailwind CSS: 4.x
- PHP: 8.4

## Objectifs

- [ ] Mettre à jour Kirby CMS de la version 4 à la version 5
- [ ] Mettre à jour Vite de la version 5 à la version 7
- [ ] Évaluer et migrer vers Tailwind CSS 4 si possible
- [ ] Évaluer la compatibilité avec PHP 8.4

## Exigences

### Fonctionnelles

- Le site doit rester fonctionnel après chaque mise à jour
- Aucune régression visuelle
- Toutes les pages doivent s'afficher correctement

### Techniques

- Compatibilité avec l'hébergement Infomaniak
- Maintien des plugins Kirby existants (boost, staticache, sqlite-cachedriver)
- Compatibilité du plugin kirby-laravel-vite avec Vite 7

## Implémentation

### 1. Kirby 4 vers 5

**Fichiers concernés**:

- `composer.json` - Version Kirby
- `app/blueprints/**/*.yml` - Possible restructuration
- `resources/views/**/*.php` - API changes

**Guide de migration**: https://getkirby.com/docs/guide/updates/update-to-v5

**Points d'attention**:

- Vérifier la compatibilité des plugins
- Tester le Panel
- Vérifier les helpers et méthodes dépréciées

### 2. Vite 5 vers 7

**Fichiers concernés**:

- `package.json` - Version Vite
- `vite.config.js` - Possible ajustements config
- `resources/views/snippets/header.php` - Vite directives

**Points d'attention**:

- Compatibilité laravel-vite-plugin
- Config ESM
- Hot reload

### 3. Tailwind 3 vers 4

**Fichiers concernés**:

- `package.json` - Version Tailwind
- `tailwind.config.js` - Nouvelle syntaxe (CSS-based config)
- `resources/css/app.css` - Directives @tailwind
- `postcss.config.js` - Possible ajustements

**Points d'attention**:

- Nouvelle syntaxe de configuration (CSS-first)
- Changements dans les classes utilitaires
- Compatibilité des plugins custom (hocus variant)

### 4. PHP 8.4

**Fichiers concernés**:

- `composer.json` - Version PHP requise
- `.github/workflows/*.yml` - Version CI
- Hébergement Infomaniak

**Points d'attention**:

- Nouvelles fonctionnalités (property hooks, asymmetric visibility)
- Dépréciations
- Compatibilité extensions

## Étapes suggérées

1. **Backup** - Créer une branche dédiée `feature/upgrade-dependencies`
2. **Kirby 5** - Commencer par le CMS (impact majeur)
3. **Tests Kirby** - Valider toutes les pages et le Panel
4. **Vite 7** - Mettre à jour le bundler
5. **Tests build** - Valider le build et le hot reload
6. **Tailwind 4** - Migration si compatible
7. **Tests visuels** - Vérifier toutes les pages
8. **PHP 8.4** - Tester en local puis sur l'hébergement
9. **CI/CD** - Mettre à jour les workflows GitHub Actions

## Critères d'acceptation

- [ ] Kirby 5 installé et fonctionnel
- [ ] Panel accessible et opérationnel
- [ ] Vite 7 avec hot reload fonctionnel
- [ ] Build production sans erreur
- [ ] Tailwind 4 migré (ou justification si impossible)
- [ ] Aucune régression visuelle
- [ ] Tests CI passent
- [ ] Déploiement réussi sur Infomaniak

## Références

- [Kirby 5 Migration Guide](https://getkirby.com/docs/guide/updates/update-to-v5)
- [Vite 7 Changelog](https://vite.dev/blog/)
- [Tailwind CSS v4 Announcement](https://tailwindcss.com/blog/tailwindcss-v4)
- [PHP 8.4 New Features](https://www.php.net/releases/8.4/en.php)

## Risques

| Risque                           | Probabilité | Impact | Mitigation             |
| -------------------------------- | ----------- | ------ | ---------------------- |
| Plugin Kirby incompatible        | Moyenne     | Haut   | Vérifier avant upgrade |
| Régression CSS Tailwind          | Haute       | Moyen  | Tests visuels complets |
| laravel-vite-plugin incompatible | Basse       | Haut   | Vérifier releases      |

---

**Créé le**: 2025-01-28
**Priorité**: Haute
**Type**: feature
