---
name: documentator
description: Create documentation files in /docs folder with proper naming convention (YYMMDD_type_name.md). Use this skill when creating technical documentation, feature specs, PRDs, or any project documentation. Types follow Conventional Commits: feature, fix, refactor, docs, style, perf, test, chore.
---

# Documentator

Create clean, structured markdown documentation in the `/docs` folder.

## Naming Convention

**Format**: `YYMMDD_type_nom-du-doc.md`

**Example**: `260128_feature_user-authentication.md`

### Types (Conventional Commits)

| Type       | Usage                    |
| ---------- | ------------------------ |
| `feature`  | New functionality        |
| `fix`      | Bug fix documentation    |
| `refactor` | Code refactoring notes   |
| `docs`     | General documentation    |
| `style`    | UI/CSS changes           |
| `perf`     | Performance improvements |
| `test`     | Test documentation       |
| `chore`    | Maintenance tasks        |

## Document Structure

### For PRD/Tasks (docs/tasks/)

```markdown
# [Feature Name]

## Context

Brief description of why this is needed.

## Objectives

- [ ] Objective 1
- [ ] Objective 2

## Requirements

### Functional

- Requirement 1
- Requirement 2

### Technical

- Technical constraint 1

## Implementation Notes

Technical guidance for implementation.

## Acceptance Criteria

- [ ] Criteria 1
- [ ] Criteria 2

## References

- Link to related docs
```

### For Technical Docs (docs/)

```markdown
# [Title]

## Overview

Brief description.

## Details

Main content with code examples.

## Related

- Links to related files/docs
```

## Workflow

1. Determine document type from content/request
2. Generate filename: `YYMMDD_type_slug.md`
3. Create in appropriate folder:
   - `/docs/tasks/` for PRDs, features specs, task definitions
   - `/docs/` for general documentation
4. Use appropriate template structure
5. Write concise, actionable content

## Best Practices

- Keep documents focused and concise
- Use code blocks with language hints
- Link to related source files with line numbers
- Use checkboxes for actionable items
- Write in French (project language) unless specified
