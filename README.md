# Rapid Rescue Services (RRS)

**A PHP and MySQL-based E-Ambulance Hiring and Request Management Portal**

Rapid Rescue Services (RRS) is a web-based ambulance hiring portal built to make it easier for people to submit ambulance requests and follow the progress of those requests. It also provides separate working areas for administrators and Driver / EMT staff to manage ambulance-related records and request statuses.

This repository contains the PHP application, its front-end assets, and a schema-only MySQL database export. It is a legacy academic/project implementation and should be treated as a development prototype—not as a certified emergency-dispatch or patient-care system.

## What the project includes

### Public website

- Home page with an ambulance-hiring request form.
- About, contact, and gallery pages.
- Ambulance request lookup using a booking number, patient name, or relative contact number.
- Booking details and request-status display.

### Admin area

- Administrator sign-in and dashboard.
- Ambulance records and fleet information management.
- Request review and ambulance assignment.
- Request status views, search, and reports.
- Admin profile and page-content management screens.

### User area

- User sign-in and dashboard.
- User profile and password-management screens.
- Ambulance request and booking-related pages.
- Request status and history views.

### Driver / EMT area

- Driver / EMT sign-in and dashboard.
- Assigned request and ambulance-related screens.
- Request status and reporting pages.
- Driver profile and password-management screens.

> **Tracking scope:** the supplied public tracking page searches existing booking records and displays their recorded status. The inspected implementation does not provide verified live GPS coordinates or a live ambulance map. GPS functionality appears in the requirements document, but should be treated as a future requirement rather than a currently confirmed feature.

## Technology stack

| Layer | Technology |
|---|---|
| Server-side | PHP |
| Database | MySQL / MariaDB |
| Database access | MySQLi |
| Front-end | HTML, CSS, JavaScript |
| UI libraries | Bootstrap, jQuery, Font Awesome and bundled vendor assets |
| Local server | Apache with PHP and MySQL/MariaDB (for example, XAMPP) |

The supplied SQL export records MariaDB **10.4.28** and PHP **8.2.4** in its original phpMyAdmin dump header. These are the environment versions recorded by the export, not a guarantee that every newer PHP or database version has been tested.

## Project structure

```text
rapid-rescue-services/
├── admin/                  # Administration portal
├── user/                   # User portal
├── driver emts/            # Driver / EMT portal
├── gallery/                # Gallery pages
├── includes/               # Shared public-site PHP includes
├── assets/                 # CSS, JavaScript, images and front-end vendors
├── SQL File/
│   └── rapid_rescue_final.sql  # Schema-only database export
├── docs/
│   └── RRS-Project-Requirements.docx
├── index.php               # Public landing page
├── about.php
├── contact.php
├── ambulance-tracking.php
├── booking-details.php
├── DATABASE_SETUP.md
├── GITHUB_SETUP.md
└── README.md
```

### Project Documentation Video

[Watch the Rapid Rescue Services Walkthrough](docs/media/rapid-rescue-services-demo.mp4)


## Getting started

1. Install a local PHP + Apache + MySQL/MariaDB environment, such as XAMPP.
2. Copy this repository folder into your web server's document root (for XAMPP, usually `htdocs`).
3. Create a MySQL database using the exact name **`Rapid Rescue Final`**. The current PHP connection files use this database name.
4. Import [`SQL File/rapid_rescue_final.sql`](SQL%20File/rapid_rescue_final.sql) using phpMyAdmin or the MySQL command line.
5. Check the database settings in all five `includes/dbconnection.php` files. For the default local XAMPP setup, the source currently expects host `localhost`, user `root`, and an empty password.
6. Create local test accounts as described in [`DATABASE_SETUP.md`](DATABASE_SETUP.md). The original seeded account records have deliberately been removed from this public repository copy.
7. Open the project in your browser, for example: `http://localhost/rapid-rescue-services/`.

For full development and production-host database steps, see **[DATABASE_SETUP.md](DATABASE_SETUP.md)**. For creating the GitHub repository and pushing this project with Git, see **[GITHUB_SETUP.md](GITHUB_SETUP.md)**.

## Important setup notes

- The folder name used in the current code for the Driver / EMT portal contains a space: `driver emts`. Keep that folder name unchanged unless you also update every reference to it.
- Database connection settings are repeated in five PHP files. Update all five consistently when changing database credentials.
- The published SQL file is schema-only. It preserves the table definitions and indexes but does not include the original sample records, user details, booking records, or password hashes.
- There is no ready-made public admin account in this repository. Create your own local test account using the development-only instructions in `DATABASE_SETUP.md`.

## Known limitations and production-readiness

This codebase is a starting point for learning, demonstration, or further development. A review of the supplied source files found several items that should be addressed before any public or production deployment:

- Login logic uses **MD5** for password comparison. MD5 is not suitable for storing passwords. Migrate authentication to PHP's `password_hash()` and `password_verify()`.
- Several database queries build SQL strings directly from submitted form values. Replace these with prepared statements to reduce SQL-injection risk.
- Database credentials are hard-coded in multiple connection files. Move secrets into environment-specific configuration outside the public web root and never commit production credentials.
- Registration is not complete across all roles. In particular, the Driver / EMT registration script references a PDO connection and a `drivers` table that do not match the supplied MySQLi connection and schema; do not rely on it as-is.
- The tracking page is a booking-status lookup, not a verified real-time GPS tracking service.
- The bundled database export was sanitized for public sharing. Real patient, contact, or booking data must never be placed in a public repository.

**Do not use this project to dispatch real ambulances, make clinical decisions, or store real patient information until it has been substantially refactored, security-tested, privacy-reviewed, and validated by qualified emergency-service and healthcare professionals.** Configuring a production database server alone does not make the application production-ready.

## Contributing

For personal learning or project development, create a branch for your changes, keep credentials and real user data out of Git, and document any changes to the database schema. Before submitting changes, test the public booking flow and each portal against a fresh local database import.

## License

No project-wide open-source license is included. Confirm that you own or have permission to redistribute the application code, images, fonts, and bundled third-party libraries before publishing the repository publicly. A repository without an explicit license does not grant general permission to reuse its contents.
