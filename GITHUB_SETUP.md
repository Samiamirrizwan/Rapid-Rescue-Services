# GitHub Publishing Guide — Rapid Rescue Services

This guide takes the project from a local folder to a new GitHub repository using Git commands.

## 1. Prepare the local folder

1. Download and extract `rapid-rescue-services-github-ready.zip` (or use the supplied folder if already extracted).
2. Open the extracted `rapid-rescue-services` folder. It should contain `README.md`, `.gitignore`, `admin/`, `user/`, `driver emts/`, `assets/`, and `SQL File/`.
3. Make sure you are in the project root—not one level above it and not inside `admin/`.
4. Review `.gitignore` and confirm that no production database exports, real user records, passwords, API keys, or private configuration files are present.

## 2. Create an empty GitHub repository

1. Sign in to GitHub and choose **New repository**.
2. Give it a clear name, for example `rapid-rescue-services`.
3. Add a short description, such as: `PHP and MySQL-based E-Ambulance Hiring and Request Management Portal`.
4. Choose Public or Private according to your sharing plan.
5. For an existing local project, create the GitHub repository **without** adding a README, `.gitignore`, or license. Those files are already prepared locally.
6. Create the repository and copy its HTTPS or SSH remote URL.

Before choosing Public, confirm that you have permission to publish the application code, design assets, photos, fonts, and every bundled third-party library. No project-wide license has been included because the redistribution rights were not established from the supplied files.

## 3. Initialize Git and create the first commit

Open Git Bash or a terminal in the project root and run:

```bash
git init
git branch -M main
git status
git add .
git status
git commit -m "Initial commit: Rapid Rescue Services"
```

Review the second `git status` output before committing. It should not show passwords, private database backups, personal data, or large project demonstration videos.

## 4. Connect the GitHub repository and push

Replace the sample URL with the remote URL copied from your own GitHub repository:

```bash
git remote add origin https://github.com/YOUR-USERNAME/rapid-rescue-services.git
git remote -v
git push -u origin main
```

For an SSH remote, use the SSH URL supplied by GitHub instead. GitHub may ask you to authenticate through a browser, Git Credential Manager, or your configured SSH key. Do not put a password or personal access token directly into the remote URL or source files.

## 5. Confirm the repository

Refresh the GitHub repository page and verify that:

- `README.md` appears on the repository home page.
- `DATABASE_SETUP.md` and this guide are present.
- The PHP source folders and schema-only SQL file are present.
- No sample passwords, personal records, real patient data, `.env` secrets, `.zip` backups, or large `.mp4` files have been committed.

## 6. Push future changes

After editing the project locally:

```bash
git status
git add .
git commit -m "Describe the changes made"
git push
```

Write commit messages that describe the actual change, for example:

```bash
git commit -m "Improve ambulance request validation"
```

## 7. Work with branches (recommended)

Create a feature branch before larger changes:

```bash
git switch -c feature/request-validation
```

When the work is ready:

```bash
git status
git add .
git commit -m "Add request validation"
git push -u origin feature/request-validation
```

Then open a Pull Request on GitHub to review and merge the changes into `main`.

## 8. Clone the repository onto another computer

```bash
git clone https://github.com/YOUR-USERNAME/rapid-rescue-services.git
cd rapid-rescue-services
```

Then follow [`DATABASE_SETUP.md`](DATABASE_SETUP.md) to create and import a separate local development database. Database records are not automatically included in Git when you commit the source code.

## 9. Common Git commands

| Command | Purpose |
|---|---|
| `git status` | See changed, staged, and untracked files. |
| `git add .` | Stage current changes. |
| `git add README.md` | Stage one selected file. |
| `git commit -m "message"` | Save a local commit. |
| `git log --oneline` | Review recent commits. |
| `git remote -v` | Check configured remotes. |
| `git pull` | Download and integrate remote changes. |
| `git push` | Upload committed local changes. |

## 10. If GitHub rejects a file because it is too large

GitHub blocks ordinary Git files larger than 100 MiB. This prepared package excludes the demonstration video, duplicate archived project copy, and nested ZIP/RAR design archives. Keep large videos and backup archives outside the repository, or use Git LFS only when there is a clear reason to version a large binary asset.

Do not try to solve a large-file rejection by merely adding the file to `.gitignore` after it has already been committed; it must also be removed from the Git index/history before the push can succeed.
