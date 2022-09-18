<div align="center">
 <p><img src="./thumbnail.png" width="800px" alt="Black and white photo of Benjamin Haeberli working on a computer."></p>

**Personal website built with [KirbyCMS](https://getkirby.com/) and designed by myself 🥳**

[![Twitter](https://img.shields.io/twitter/follow/1benjam1?style=social)](https://twitter.com/1benjam1/)

[![License GPL v3](https://img.shields.io/badge/license-GPLv3-brightgreen.svg?color=192433)](./LICENSE)
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
- `composer run test-watch`
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
- [PHPUnit](https://phpunit.de/)
- [PHPUnitWatcher ](https://github.com/spatie/phpunit-watcher) → Automatically run PHPUnit tests when source code changes
- [Ray](https://myray.app/) (optional) → debugging output
- [Prettier](https://prettier.io/) → Opinionated code formatter

_Soon : Laravel Mix or Vite, PestPHP (replace PHPUnit)_

---

This work is licensed under [GNU General Public License v3.0](./LICENSE).
