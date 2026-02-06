# Claude Code Configuration Plan

## Analyse de la Codebase

### Stack Technique

- **CMS**: Kirby 4.4.0 (flat-file CMS PHP)
- **PHP**: 8.3+
- **Frontend**: Tailwind CSS 3.4.1 + Vite 5.1.6
- **Outils qualité**: Laravel Pint (code style), PHPStan (analyse statique), Prettier

### Structure du Projet

```
app/                  # Blueprints Kirby, models, bootstrap
resources/            # Views (templates, snippets), CSS, JS
src/                  # Classes PHP (ValueObjects, helpers)
storage/              # Kirby core, plugins, content
public/               # Assets compilés par Vite
```

### Types de Pages

- `home` - Page d'accueil avec compétences, travaux, témoignages
- `blog` - Liste des articles
- `article` - Article individuel
- `default` - Page standard
- `error` - Page d'erreur
- `legal-notice` - Mentions légales

---

## Skills Proposés (7)

| Skill                | Description                                                   | Priorité |
| -------------------- | ------------------------------------------------------------- | -------- |
| `documentator`       | Créer des docs markdown dans /docs avec convention de nommage | Haute    |
| `kirby-template`     | Créer/modifier templates et snippets Kirby                    | Haute    |
| `kirby-blueprint`    | Créer/modifier blueprints YAML Kirby                          | Haute    |
| `tailwind-component` | Créer composants avec Tailwind CSS                            | Moyenne  |
| `code-quality`       | Exécuter Pint, PHPStan, Prettier                              | Moyenne  |
| `git-commit`         | Commits avec GitMoji                                          | Moyenne  |
| `deploy`             | Déployer via SSH/GitHub Actions                               | Basse    |

---

## Agents Proposés (5)

| Agent               | Description                                    | Utilisation                |
| ------------------- | ---------------------------------------------- | -------------------------- |
| `kirby-expert`      | Expert Kirby CMS pour architecture et patterns | Questions techniques Kirby |
| `frontend-builder`  | Développement frontend Tailwind + Vite         | Nouvelles features UI      |
| `php-reviewer`      | Review code PHP avec PHPStan/Pint              | Avant commit               |
| `task-planner`      | Créer des PRD dans docs/tasks                  | Nouvelles features         |
| `upgrade-assistant` | Assistance migrations/upgrades                 | Mises à jour dépendances   |

---

## Structure Finale

```
.claude/
├── PLAN.md                          # Ce fichier
├── settings.json                    # Permissions et config
├── commands/                        # Slash commands
│   ├── doc.md                       # /doc - Créer documentation
│   ├── quality.md                   # /quality - Vérifier qualité
│   └── commit.md                    # /commit - Commit GitMoji
└── skills/
    ├── skill-creator/               # Skill officiel Anthropic
    ├── documentator/                # Créer docs markdown
    ├── kirby-template/              # Templates Kirby
    ├── kirby-blueprint/             # Blueprints Kirby
    ├── tailwind-component/          # Composants Tailwind
    ├── code-quality/                # Qualité du code
    └── git-commit/                  # Commits GitMoji

docs/
├── tasks/
│   ├── default.md                   # Template PRD
│   ├── 260128_feature_upgrade-dependencies.md
│   └── 260128_feature_add-testimonial.md
└── [autres docs générés]

CLAUDE.md                            # Instructions principales
```

---

## Convention de Nommage des Documents

Format: `YYMMDD_type_nom-du-doc.md`

Types (inspirés de Conventional Commits):

- `feature` - Nouvelle fonctionnalité
- `fix` - Correction de bug
- `refactor` - Refactoring
- `docs` - Documentation
- `style` - Style/CSS
- `perf` - Performance
- `test` - Tests
- `chore` - Maintenance
