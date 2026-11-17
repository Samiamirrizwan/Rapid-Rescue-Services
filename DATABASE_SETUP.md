# Database Setup — Rapid Rescue Services

This guide covers a **local development database** and a separate **production-host database configuration**. The current application is built around MySQLi and a database name hard-coded in several PHP files.

> **Important:** production hosting and production readiness are different things. The current application uses MD5 password checks and contains SQL queries built from raw form input. Do not use it with real patient data or for live emergency dispatch until those issues have been fixed and the whole application has passed a professional security and operational review.

## 1. Requirements

- Apache with PHP enabled.
- PHP's `mysqli` extension enabled.
- MySQL or MariaDB.
- phpMyAdmin (optional, but convenient for importing the SQL file).

The original database export identifies MariaDB 10.4.28 and PHP 8.2.4 in its dump header. A matching local environment is a sensible baseline for reproducing the supplied project; compatibility with other versions should be tested before upgrading.

## 2. Which database file should I import?

Import this file:

```text
SQL File/rapid_rescue_final.sql
```

The file in this GitHub-ready package is **schema-only**. It creates the tables, indexes, and auto-increment settings, but deliberately excludes the original inserted rows. The original archive contained personal-looking contact details, account records, booking information, and appointment-related data, so those records have not been carried into the public repository.

## 3. Local development setup (XAMPP / WAMP / LAMP)

### Step 1 — Start the local services

Start Apache and MySQL from your local server control panel. Confirm that phpMyAdmin opens, commonly at `http://localhost/phpmyadmin/`.

### Step 2 — Create the development database

In phpMyAdmin:

1. Select **New**.
2. Create a database named exactly:

   ```text
   Rapid Rescue Final
   ```

3. Keep the default server collation unless your local setup requires a specific one.

The database name contains spaces because that is what the existing PHP source expects. If you choose a different name, update all five connection files listed below.

### Step 3 — Import the schema

1. Select the `Rapid Rescue Final` database.
2. Open the **Import** tab.
3. Choose `SQL File/rapid_rescue_final.sql`.
4. Start the import and confirm that the tables were created.

You can also import from a terminal with the MySQL client:

```bash
mysql -u root -p "Rapid Rescue Final" < "SQL File/rapid_rescue_final.sql"
```

For a default XAMPP installation where the local root account has no password, press Enter when prompted, or omit `-p` only in that isolated local environment:

```bash
mysql -u root "Rapid Rescue Final" < "SQL File/rapid_rescue_final.sql"
```

### Step 4 — Verify the PHP database connection

The database connection is duplicated in these five files:

```text
includes/dbconnection.php
admin/includes/dbconnection.php
user/includes/dbconnection.php
driver emts/includes/dbconnection.php
gallery/includes/dbconnection.php
```

The current source uses the following local defaults:

```php
$con = mysqli_connect("localhost", "root", "", "Rapid Rescue Final");
```

That matches a common default local XAMPP installation. Change the host, username, password, and database name in **all five files** if your local environment uses different values. Do not use a blank database password on an internet-facing server.

### Step 5 — Create local test accounts

The public SQL export intentionally contains no pre-created accounts. The application login pages read account rows from `tbladmin`, `tbldriver`, and `tbluser`. There is no complete working registration flow for every role in the supplied source.

For local development only, after importing the schema, you can create temporary accounts through phpMyAdmin's SQL tab. Replace every placeholder with values of your own:

```sql
-- Local development example only. The application currently checks MD5 hashes.
INSERT INTO tbladmin (AdminName, UserName, MobileNumber, Email, Password)
VALUES ('Local Admin', 'local_admin', 3000000000, 'admin@example.test', MD5('REPLACE_WITH_LOCAL_ONLY_PASSWORD'));

INSERT INTO tbldriver (AdminName, UserName, MobileNumber, Email, Password)
VALUES ('Local Driver', 'local_driver', 3000000001, 'driver@example.test', MD5('REPLACE_WITH_LOCAL_ONLY_PASSWORD'));

INSERT INTO tbluser (UserName, RealName, MobileNumber, Email, Password)
VALUES ('local_user', 'Local Test User', 3000000002, 'user@example.test', MD5('REPLACE_WITH_LOCAL_ONLY_PASSWORD'));
```

These examples exist only to let you test the existing legacy login logic locally. **Do not use MD5 for a real application or production account.** Before production, update the login and account-management code to use `password_hash()` when creating passwords and `password_verify()` when validating them, then migrate existing password records safely.

### Step 6 — Open the application

If you copied the project into `htdocs/rapid-rescue-services`, open:

```text
http://localhost/rapid-rescue-services/
```

Open the role-specific login pages as needed:

```text
http://localhost/rapid-rescue-services/admin/login.php
http://localhost/rapid-rescue-services/user/login.php
http://localhost/rapid-rescue-services/driver%20emts/login.php
```

The public tracker is a database-backed booking-status search. It does not show a live GPS position.

## 4. Production-host database setup (cPanel or managed hosting)

Use a separate database and database user for each deployment. Never point a public site at your local development database.

### Step 1 — Create a database and restricted database user

In your hosting panel (for example, cPanel → **MySQL Databases**):

1. Create a new database, such as `accountname_rapidrescue` (the hosting provider may automatically add an account prefix).
2. Create a dedicated database user with a strong, unique password.
3. Assign that user to this database with only the privileges the application requires. During initial setup, the host may recommend the standard privileges needed for table operations; avoid using the server's root account.
4. Record the exact database name, username, password, and database host supplied by the provider.

### Step 2 — Import the database schema

1. Open the production database in phpMyAdmin.
2. Import `SQL File/rapid_rescue_final.sql`.
3. Confirm that the expected tables exist.
4. Do not import a development database backup containing real patient, customer, or account information.

### Step 3 — Update all five connection files

Replace the local values in all five `includes/dbconnection.php` files with the hosting values:

```php
$con = mysqli_connect(
    "YOUR_DATABASE_HOST",
    "YOUR_DATABASE_USERNAME",
    "YOUR_DATABASE_PASSWORD",
    "YOUR_DATABASE_NAME"
);

if (!$con) {
    error_log("Database connection failed: " . mysqli_connect_error());
    http_response_code(500);
    exit("A database connection error occurred.");
}
```

Use the exact names from the hosting panel, including any account prefix. The values above are placeholders, not real credentials. Do not paste production passwords into README files, screenshots, Git commits, or public issues. A later improvement should move this configuration into one private configuration file or environment variables outside the public document root, rather than maintaining five copies.

### Step 4 — Apply deployment safeguards before public access

Before making the site public:

- Replace the current MD5 password logic with `password_hash()` / `password_verify()` and reset any accounts created during development.
- Replace raw SQL string concatenation with MySQLi prepared statements and bound parameters.
- Keep database credentials outside the public web root and restrict file permissions.
- Disable public error display; log errors privately.
- Enable HTTPS and review session-cookie settings.
- Remove any test accounts and non-synthetic records.
- Restrict administrative access and add appropriate authorization checks.
- Review file-upload endpoints and third-party vendor components.
- Back up the database securely and test restoration.
- Obtain a privacy, security, and operational review before storing personal or medical data.

**This project has not been certified for production ambulance dispatch.** It lacks verified live GPS tracking and contains legacy security weaknesses; it should not be used as an operational emergency-service platform in its current form.

## 5. Database troubleshooting

| Problem | What to check |
|---|---|
| `Connection Fail` | MySQL/MariaDB is running; host, username, password, and database name match. |
| `Unknown database` | The exact database has been created, including spaces or hosting prefix. |
| `Access denied` | The database user exists and has privileges on this database. |
| `Table doesn't exist` | The correct SQL file was imported into the selected database. |
| Login always fails | A row exists in the correct table (`tbladmin`, `tbldriver`, or `tbluser`) and its password matches the current MD5-based code. |
| Production works on one portal only | Confirm that all five duplicated connection files have identical production connection values. |

## 6. Schema changes

When changing the schema, update the SQL export and this guide in the same Git commit. Test the updated schema against a clean empty database before merging or deploying it.
