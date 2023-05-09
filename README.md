<div align="center">

 <p><img src="./thumbnail.png" width="800px" alt="Black and white photo of Benjamin Haeberli working on a computer."></p>

**Personal website built with [Kirby CMS](https://getkirby.com/) and designed by myself 🥳**

[![License GPL v3](https://img.shields.io/badge/license-AGPLv3-brightgreen.svg?color=192433)](./LICENSE)
[![GitHub Last Commit](https://img.shields.io/github/last-commit/benjaminhaeberli/benjaminhaeberli.ch?color=192433)](https://github.com/benjaminhaeberli/benjaminhaeberli.ch/commits/main)
[![GitHub Language](https://img.shields.io/github/languages/top/benjaminhaeberli/benjaminhaeberli.ch?color=192433)](https://github.com/benjaminhaeberli/benjaminhaeberli.ch/search?l=php)
[![GitHub Stars](https://img.shields.io/github/stars/benjaminhaeberli/benjaminhaeberli.ch?color=192433)](https://github.com/benjaminhaeberli/benjaminhaeberli.ch/stargazers)

 </div>

## Get started 🔎

### Requirements

- [PHP](https://secure.php.net/manual/en/install.php) ^8.1
- [Composer](https://getcomposer.org/download/) >= 2.4.2
- [Node.js](http://nodejs.org/) >= 16.13
- [NPM](https://docs.npmjs.com/downloading-and-installing-node-js-and-npm) >= 8.19.2

### Installation

1. `composer install`
2. `npm install`
3. Copy `.\.env.development.example` to `.\.env`
5. `npm run watch`
6. `composer run server`

More details on [getkirby.com](https://getkirby.com/docs/guide/quickstart)

### Code quality

- `composer run analyze`
- `composer run fix`
- `composer run test`
- `npm run prettier:write`

More details in [composer.json](./composer.json) and [package.json](./package.json)

## Directory structure 📁

- `assets/` - Images, JavaScript, and CSS files for the front-end
- `content/` - Content of the application (Kirby)
- `docs/` - Technical documentation
- `kirby/` - Kirby CMS code - _Managed by Composer_ (Kirby)
- `media/` - Public images and thumbnails, plugin and panel assets - _Managed by Kirby_ (Kirby)
- `site/` - Core of the application : templates, configuration, plugins and blueprints (Kirby)
- `src/` - Custom classes for the application (PHP)
- `tests/` - Automated tests with PHPUnit (PHP)

## Stack 🧠

### Production

- [Kirby](https://getkirby.com/) → CMS

#### Kirby Plugins
- [Kirby 3 Content Security Policy Header](https://github.com/bnomei/kirby3-security-headers) → Security Plugin

### Development

- [PHPStan](https://phpstan.org/) → PHP Static Analysis tool
- [PHPCPD](https://phpqa.io/projects/phpcpd.html) → PHP Copy/Paste Detector
- [PHPCodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) → PHP Coding Standards Tokenizer
- [PHPUnit](https://phpunit.de/) → PHP Testing framework
- [PHPUnitWatcher ](https://github.com/spatie/phpunit-watcher) → Automatically run PHPUnit tests when source code changes
- [Ray](https://myray.app/) (optional) → debugging output
- [Rector](https://github.com/rectorphp/rector) → PHP automated refactoring and upgrades tool
- [Prettier](https://prettier.io/) → Opinionated code formatter

### Documentation

- [GitMoji](https://gitmoji.dev/) → Emoji guide for GIT commit messages
- [PHPDoc](https://docs.phpdoc.org/guide/references/phpdoc/basic-syntax.html) → Syntax used for PHP comments and type hinting.

## Bugs 🐛

- [x] ~~`Cannot redeclare dump()` : install [composer-include-files](https://github.com/funkjedi/composer-include-files) and add `prepend.php` in `includes_files` props~~

# Docs 📒

- [Kirby : passing variables to snippets](https://getkirby.com/docs/guide/templates/snippets#passing-variables-to-snippets)
- [Where should you put logic code in Kirby CMS? - fvsch.com](https://fvsch.com/kirby-logic)
- [PHP code typing with Kirby CMS- fvsch.com](https://fvsch.com/kirby-typing)
- [Tailwind : customizing colors](https://tailwindcss.com/docs/customizing-colors)
- [Tailwind default config](https://github.com/tailwindlabs/tailwindcss/blob/master/stubs/defaultConfig.stub.js)

<div align="center">

**This work is licensed under [GNU Affero General Public License v3.0](./LICENSE)**<br>
Kirby CMS is proprietary and you need to [buy a license](https://getkirby.com/buy) to use it in production.<br>
Others dependencies are under MIT, BSD-3-Clause and LGPL-2.1-only license.<br>

</div>
