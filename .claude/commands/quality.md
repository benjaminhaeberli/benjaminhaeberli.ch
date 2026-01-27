# Code Quality Check

Run code quality tools on the project.

## Instructions

1. Run PHP code style check:
   ```bash
   composer pint
   ```

2. Run PHP static analysis:
   ```bash
   composer phpstan
   ```

3. Run Prettier for JS/CSS:
   ```bash
   npm run prettier
   ```

4. Report any issues found and suggest fixes

5. If all checks pass, confirm the code is ready for commit
