<div align="center">
 <p><img src="./docs/assets/swibeco.png" width="250px" alt="Logo de Swibeco"></p>

**Personal website built with [KirbyCMS](https://getkirby.com/) and designed by myself.**

 </div>

[![License: GPL v3](https://img.shields.io/badge/License-GPLv3-blue.svg)](https://www.gnu.org/licenses/gpl-3.0)

## Get started 🔎

### Requirements

- [PHP](https://secure.php.net/manual/en/install.php) ^8.1
- [Composer](https://getcomposer.org/download/) >= 2.4.2
- [Node.js](http://nodejs.org/) >= 16.13
- [NPM](https://docs.npmjs.com/downloading-and-installing-node-js-and-npm) >= 8.19.2

### Install

```bash
composer install
npm install
php -S localhost:8000 kirby/router.php
```

More details on [getkirby.com](https://getkirby.com/docs/guide/quickstart)

## Stack 🧠

- [Kirby](https://getkirby.com/) → CMS

_Soon : TailwindCSS_

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

This work is licensed under [GNU General Public License v3.0](./README.md).
