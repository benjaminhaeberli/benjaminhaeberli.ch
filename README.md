<div align="center">

 <p><img src="./thumbnail.png" width="800px" alt="Black and white photo of Benjamin Haeberli working on a computer."></p>

**Personal website built with [Kirby CMS](https://getkirby.com/) and designed by myself 🥳**

<sup>👀 Don't forget to <strong>buy a Kirby licence</strong> to use it legally 👀<sup>

[![Twitter](https://img.shields.io/twitter/follow/1benjam1?style=social)](https://twitter.com/1benjam1/)

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
3. `composer run server`

More details on [getkirby.com](https://getkirby.com/docs/guide/quickstart)

### Code quality

- `composer run analyze`
- `composer run fix`
- `composer run test`
- `npm run prettier:write`

More details in [composer.json](./composer.json) and [package.json](./package.json)

## Stack 🧠

#### Production

- [Kirby](https://getkirby.com/) → CMS

_Soon : TailwindCSS, [SEO tags](https://github.com/HashandSalt/kirby3-seo/blob/master/index.php), [Feed & Sitemap](https://github.com/bnomei/kirby3-feed), [Comments](https://github.com/sebastiangreger/kirby3-commentions), [Static Cache](https://github.com/bnomei/kirby3-staticache), [Content Security Policy Header](https://github.com/bnomei/kirby3-security-headers), [Rate Page](https://github.com/mauricerenck/rate-page), [Versions (from Panel)](https://github.com/lukasbestle/kirby-versions)_

#### Development

- [PHPStan](https://phpstan.org/) → PHP Static Analysis Tool
- [PHPCPD](https://phpqa.io/projects/phpcpd.html) → PHP Copy/Paste Detector
- [PHPCodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) → PHP Coding Standards Tokenizer
- [PHPUnit](https://phpunit.de/) → PHP Testing framework
- [PHPUnitWatcher ](https://github.com/spatie/phpunit-watcher) → Automatically run PHPUnit tests when source code changes
- [Ray](https://myray.app/) (optional) → debugging output
- [Prettier](https://prettier.io/) → Opinionated code formatter

_Soon : Laravel Mix or Vite_

#### Documentation

- [GitMoji](https://gitmoji.dev/) → Emoji guide for GIT commit messages
- [PHPDoc](https://docs.phpdoc.org/guide/references/phpdoc/basic-syntax.html) → Syntax used for PHP comments and type hinting.

## Bugs 🐛

- [x] ~~`Cannot redeclare dump()` : install [composer-include-files](https://github.com/funkjedi/composer-include-files) and add `prepend.php` in `includes_files` props~~

## Ideas 💡

- [x] ~~`Install` [vlucas/phpdotenv](https://github.com/vlucas/phpdotenv) and use it in `config/` files~~
- [ ] Install [rector/rector](https://github.com/rectorphp/rector), [laravel/pint](https://github.com/laravel/pint) and [pestphp/pest](https://github.com/pestphp/pest) like [openapi-php/client ](https://github.com/openai-php/client)
- [ ] Add a `"funding"` key _(Adyen or Stripe payment link)_ in [composer.json](https://getcomposer.org/doc/04-schema.md#funding) and [package.json](https://docs.npmjs.com/cli/v8/configuring-npm/package-json#funding)
- [ ] Dynamically display a list of all dependencies _(composer.sjon + package.json)_ with authors and licenses on a "Legal Notice" page

#### Useful articles

- [Where should you put logic code in Kirby CMS? - fvsch.com](https://fvsch.com/kirby-logic)
- [PHP code typing with Kirby CMS- fvsch.com](https://fvsch.com/kirby-typing)

---

<div align="center">

**This work is licensed under [GNU Affero General Public License v3.0](./LICENSE)**<br>
Kirby CMS is proprietary and you need to [buy a license](https://getkirby.com/buy) to use it.<br>
Others dependencies are under MIT, BSD-3-Clause and LGPL-2.1-only license.<br>

</div>
