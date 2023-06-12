<div align="center">

 <p><img src="./thumbnail.png" width="800px" alt="Black and white photo of Benjamin Haeberli working on a computer."></p>

**Personal website built with [Kirby CMS](https://getkirby.com/) and designed by myself 🥳**

[![License GPL v3](https://img.shields.io/badge/license-AGPLv3-brightgreen.svg?color=192433)](./LICENSE)
[![GitHub Last Commit](https://img.shields.io/github/last-commit/benjaminhaeberli/benjaminhaeberli.ch?color=192433)](https://github.com/benjaminhaeberli/benjaminhaeberli.ch/commits/main)
[![GitHub Language](https://img.shields.io/github/languages/top/benjaminhaeberli/benjaminhaeberli.ch?color=192433)](https://github.com/benjaminhaeberli/benjaminhaeberli.ch/search?l=php)
[![GitHub Stars](https://img.shields.io/github/stars/benjaminhaeberli/benjaminhaeberli.ch?color=192433)](https://github.com/benjaminhaeberli/benjaminhaeberli.ch/stargazers)
[![Tests](https://github.com/benjaminhaeberli/benjaminhaeberli.ch/actions/workflows/tests.yml/badge.svg)](https://github.com/benjaminhaeberli/benjaminhaeberli.ch/actions/workflows/tests.yml)
[![SSH deploy 🚀](https://github.com/benjaminhaeberli/benjaminhaeberli.ch/actions/workflows/ssh-deploy.yml/badge.svg)](https://github.com/benjaminhaeberli/benjaminhaeberli.ch/actions/workflows/ssh-deploy.yml)

 </div>

## Getting started 🔎

### Requirements

- [PHP](https://secure.php.net/manual/en/install.php) ^8.1
- [Composer](https://getcomposer.org/download/) >= 2.4.2
- [Node.js](http://nodejs.org/) >= 16.13
- [NPM](https://docs.npmjs.com/downloading-and-installing-node-js-and-npm) >= 8.19.2

### Installation

1. `composer install`
2. `npm install`
3. Copy `.\.env.development.example` to `.\.env`
4. `npm run watch`
5. `composer serve`

More details on [getkirby.com](https://getkirby.com/docs/guide/quickstart)

### Code quality

- `composer coverage`
- `composer refacto`
- `composer lint`
- `composer test`
- `composer fix:composer`
- `npm run prettier:write`

More details in [composer.json](./composer.json) and [package.json](./package.json)

## CI/CD 🧙‍♂️

> Powered by GitHub Actions

### Dependabot (with auto-merge)

The `dependabot-auto-merge.yml` workflow in `.github\workflows` allow to auto-merge dependabot pull requests for for semver-minor & semver-patch updates.

### Deployment using FTP

The `main.yml` workflow in `.github\workflows` allow to deploy the theme using FTP. It upload only modified files and install PHP dependecies using `composer install`.

To use it, you need to configure those [Action secrets](https://docs.github.com/en/actions/security-guides/encrypted-secrets) :

| Name           | Value (example)         |
| -------------- | ----------------------- |
| `SSH_HOST`     | XXXX.ftp.infomaniak.com |
| `SSH_USERNAME` | nice_username           |
| `SSH_PASSWORD` | very_strong_password    |
| `SSH_DIR`      | sites/exports.nanou.ch/ |

An [Deploy key](https://docs.github.com/fr/authentication/connecting-to-github-with-ssh/managing-deploy-keys) needs to be created on the server, without passphrase :

```bash
cd ~/.ssh/
eval "$(ssh-agent -s)"
ssh-keygen -t ecdsa -b 521 -C "admin@benjaminhaeberli.ch"
ssh-add ~/.ssh/id_portfolio
```

And complete `./.ssh/known_hosts` with [GitHub's SSH key fingerprints](https://docs.github.com/en/authentication/keeping-your-account-and-data-secure/githubs-ssh-key-fingerprints)

```plaintext
github.com ssh-ed25519 AAAAC3NzaC1lZDI1NTE5AAAAIOMqqnkVzrm0SdG6UOoqKLsabgH5C9okWi0dh2l9GKJl
github.com ecdsa-sha2-nistp256 AAAAE2VjZHNhLXNoYTItbmlzdHAyNTYAAAAIbmlzdHAyNTYAAABBBEmKSENjQEezOmxkZMy7opKgwFB9nkt5YRrYMjNuG5N87uRgg6CLrbo5wAdT/y6v0mKV0U2w0WZ2YB/++Tpockg=
github.com ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABgQCj7ndNxQowgcQnjshcLrqPEiiphnt+VTTvDP6mHBL9j1aNUkY4Ue1gvwnGLVlOhGeYrnZaMgRK6+PKCUXaDbC7qtbW8gIkhL7aGCsOr/C56SJMy/BCZfxd1nWzAOxSDPgVsmerOBYfNqltV9/hWCqBywINIR+5dIg6JTJ72pcEpEjcYgXkE2YEFXV1JHnsKgbLWNlhScqb2UmyRkQyytRLtL+38TGxkxCflmO+5Z8CSSNY7GidjMIZ7Q4zMjA2n1nGrlTDkzwDCsw+wqFPGQA179cnfGWOWRVruj16z6XyvxvjJwbz0wQZ75XK5tKSb7FNyeIEs4TT4jk+S4dhPeAUC5y+bDYirYgM4GC7uEnztnZyaVWQ7B381AK4Qdrwt51ZqExKbQpTUNn+EjqoTwvqNj4kqx5QUCI0ThS/YkOxJCXmPUWZbhjpCg56i+2aB6CmK2JGhn57K5mj0MNdBXA4/WnwH6XoPWJzK5Nyu2zB3nAZp+S5hpQs+p1vN1/wsjk=
```

Be sure that PHP version ([see Infomaniak docs](https://www.infomaniak.com/fr/support/faq/2108/modifier-la-version-de-php-utilisee-en-cli-via-ssh)) is the same as required in `composer.json` ⚠️

Config files `./.bashrc` and `.profile` must also define the same PHP version :

```bash
export PATH=/opt/php8.1/bin:$PATH
```

## Directory structure 📁

- `assets/` - Images, JavaScript, and CSS files for the front-end
- `content/` - Content of the application (Kirby)
- `kirby/` - Kirby CMS code - _Managed by Composer_ (Kirby)
- `media/` - Public images and thumbnails, plugin and panel assets - _Managed by Kirby_ (Kirby)
- `site/` - Core of the application : templates, configuration, plugins and blueprints (Kirby)
- `src/` - Custom classes for the application (PHP)
- `tests/` - Automated tests with PHPUnit (PHP)

## Stack 🧠

### Production

- [Kirby](https://getkirby.com/) → CMS

#### Kirby Plugins

- [Static Cache by Kirby](https://github.com/getkirby/staticache) → Static Cache
- [Boost by Bnomei](https://github.com/bnomei/kirby3-boost/tree/main) → Cache Boost
- [SQLite Cache Driver by Bnomei](https://github.com/bnomei/kirby3-sqlite-cachedriver) → SQLite Cache Driver

### Development

- [PHPStan](https://phpstan.org/) → PHP Static Analysis tool
- [Laravel/Pint](https://github.com/laravel/pint) → Opinionated PHP code style fixer for minimalists built on top of [PHP-CS-Fixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer)
- [PHPUnit](https://phpunit.de/) & [PEST PHP](https://github.com/pestphp/pest) → PHP Testing tools
- [Rector](https://github.com/rectorphp/rector) → PHP automated refactoring and upgrades tool
- [Prettier](https://prettier.io/) → Opinionated code formatter

## Documentation 📒

- [GitMoji](https://gitmoji.dev/) → Emoji guide for GIT commit messages

### Useful articles

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
