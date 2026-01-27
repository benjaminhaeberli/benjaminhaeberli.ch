# Documentation Generator

Create a documentation file following the project convention.

## Input
$ARGUMENTS

## Instructions

1. Determine the document type from the request:
   - `feature` - New functionality
   - `fix` - Bug fix
   - `refactor` - Refactoring
   - `docs` - General documentation
   - `style` - UI/CSS changes
   - `perf` - Performance
   - `test` - Tests
   - `chore` - Maintenance

2. Generate filename: `YYMMDD_type_slug.md` (use today's date)

3. Determine location:
   - PRDs/specs/tasks go in `docs/tasks/`
   - Other docs go in `docs/`

4. Create the document with appropriate structure

5. Write in French unless English is specified
