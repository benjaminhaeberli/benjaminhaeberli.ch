---
name: git-commit
description: Create git commits following GitMoji convention used in this project. Use when committing changes with appropriate emoji prefixes. Reference gitmoji.dev for emoji guide.
---

# Git Commit

Create commits with GitMoji convention.

## GitMoji Reference

| Emoji | Code | Usage |
|-------|------|-------|
| :sparkles: | `:sparkles:` | New feature |
| :bug: | `:bug:` | Bug fix |
| :art: | `:art:` | Code style/format |
| :recycle: | `:recycle:` | Refactoring |
| :zap: | `:zap:` | Performance |
| :memo: | `:memo:` | Documentation |
| :lipstick: | `:lipstick:` | UI/Style |
| :wrench: | `:wrench:` | Configuration |
| :heavy_plus_sign: | `:heavy_plus_sign:` | Add dependency |
| :heavy_minus_sign: | `:heavy_minus_sign:` | Remove dependency |
| :arrow_up: | `:arrow_up:` | Upgrade dependency |
| :arrow_down: | `:arrow_down:` | Downgrade dependency |
| :fire: | `:fire:` | Remove code/files |
| :truck: | `:truck:` | Move/rename files |
| :construction: | `:construction:` | Work in progress |
| :white_check_mark: | `:white_check_mark:` | Add tests |
| :green_heart: | `:green_heart:` | Fix CI |
| :lock: | `:lock:` | Security fix |
| :rotating_light: | `:rotating_light:` | Fix linter warnings |
| :globe_with_meridians: | `:globe_with_meridians:` | Internationalization |
| :pencil2: | `:pencil2:` | Fix typo |
| :rewind: | `:rewind:` | Revert changes |
| :twisted_rightwards_arrows: | `:twisted_rightwards_arrows:` | Merge branches |
| :package: | `:package:` | Build/package |
| :alien: | `:alien:` | External API changes |
| :see_no_evil: | `:see_no_evil:` | Update .gitignore |

## Commit Message Format

```
:emoji: Short description (imperative mood)
```

### Examples
```
:sparkles: add user authentication
:bug: fix login redirect loop
:art: format code with pint
:arrow_up: update kirby to 4.5
:memo: add API documentation
:lipstick: update button hover styles
:recycle: refactor template helpers
```

## Workflow

1. Stage changes: `git add <files>`
2. Create commit with GitMoji prefix
3. Keep message concise (< 72 chars)
4. Use imperative mood ("add" not "added")

## Recent Project Commits

```
:art: code style
:art: pint
:arrow_up: npm/composer update
:green_heart: fix ci
:fire: remove kirby debugbar
```

## Best Practices

1. One emoji per commit
2. Atomic commits (one logical change)
3. Use English for commit messages
4. Reference issue numbers when relevant: `:bug: fix #123`
5. Run quality checks before committing
