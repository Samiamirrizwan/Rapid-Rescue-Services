# Rapid Rescue Services (RRS)

**A PHP & MySQL-Based E-Ambulance Booking and Request Management System**

Rapid Rescue Services (RRS) is a web-based ambulance booking and request management portal designed to simplify the process of requesting ambulance services and managing emergency transportation requests.

The application provides separate working environments for administrators, registered users, and Driver / EMT staff. Each module supports different responsibilities, from managing ambulance requests to reviewing assignments and updating service statuses.

This project was developed as a web application project and is suitable for academic demonstration, learning, and further development.

---

## Project Overview

The system is organized around three primary modules:

### 1. Administration Module
- Administrator login and dashboard.
- Ambulance and fleet record management.
- Review and management of ambulance requests.
- Ambulance assignment and request-status monitoring.
- Search, filtering, and reporting screens.
- Profile and website-content management.

### 2. User Module
- User login and dashboard.
- Profile management.
- Ambulance booking and request-related pages.
- Booking status and history views.
- Access to general ambulance service information.

### 3. Driver / EMT Module
- Driver / EMT login and dashboard.
- Assigned request and ambulance-related information.
- Request status and reporting pages.
- Driver profile and password-management screens.

## Project Documentation and Walkthrough

The project is accompanied by a written requirements document describing its objectives, functional requirements, non-functional requirements, and intended user roles.

**Written documentation:**  
[`docs/RRS-Project-Requirements.docx`](docs/RRS-Project-Requirements.docx)

The documentation covers:

- Project introduction and emergency-service context.
- Functional requirements for Admin, Users, and Driver / EMT personnel.
- Ambulance booking and dispatch-management requirements.
- Patient medical profile and emergency contact requirements.
- Ambulance tracking and status-update requirements.
- Common website features, including contact forms, feedback, gallery, and notifications.
- Non-functional requirements such as usability, security, compatibility, availability, and scalability.


## Technology Stack

| Layer | Technology |
|---|---|
| Backend | PHP |
| Database | MySQL / MariaDB |
| Database connectivity | MySQLi |
| Frontend | HTML, CSS, JavaScript |
| UI libraries | Bootstrap, jQuery, Font Awesome |
| Local development | XAMPP |
| Database management | phpMyAdmin |

The supplied database export records MariaDB 10.4.28 and PHP 8.2.4 in its original phpMyAdmin header. These are recorded environment versions, not a guarantee of compatibility with every newer release.

## Project Structure

```text
rapid-rescue-services/
│
├── admin/                   # Administration portal
├── user/                    # User portal
├── driver emts/             # Driver / EMT portal
├── gallery/                 # Gallery pages
├── includes/                # Shared PHP includes
├── assets/                  # CSS, JS, images and vendor assets
│
├── SQL File/
│   └── rapid_rescue_final.sql
│
├── docs/
│   ├── RRS-Project-Requirements.docx
│
├── index.php
├── about.php
├── contact.php
├── ambulance-tracking.php
├── booking-details.php
│
├── DATABASE_SETUP.md
├── GITHUB_SETUP.md
├── LICENSE.md
└── README.md
```

The demonstration video path is a planned location; add the actual media file before publishing the link.

## Getting Started

### Prerequisites

- PHP-enabled Apache web server.
- MySQL or MariaDB.
- XAMPP or an equivalent local development environment.
- Web browser.
- phpMyAdmin or MySQL command-line access.

### Installation

1. Download or clone the repository.
2. Place the project folder inside the web server's document root.
3. Create a database named `Rapid Rescue Final`.
4. Import the SQL file from `SQL File/rapid_rescue_final.sql`.
5. Review and update the database connection settings in the five existing PHP database-connection files.
6. Create your own development test accounts.
7. Start Apache and MySQL.
8. Open the application in your browser.

```text
http://localhost/rapid-rescue-services/
```

For detailed database configuration, see [`DATABASE_SETUP.md`](DATABASE_SETUP.md).

For Git initialization, remote repository configuration, and publishing instructions, see [`GITHUB_SETUP.md`](GITHUB_SETUP.md).

## Database Information

The repository contains a sanitized, schema-only database export.

The original sample records and personal information have been excluded from the public copy. Developers should create their own local test records.

The development and production-host database configuration procedures are explained separately in `DATABASE_SETUP.md`.

## Important Development Notes

- The existing Driver / EMT folder contains a space in its name. Preserve it unless all corresponding application references are updated.
- Database connection settings are repeated across five PHP files.
- The current login implementation uses MD5 password comparison. This should be migrated to PHP's `password_hash()` and `password_verify()` functions.
- Some SQL queries directly interpolate submitted form values. Prepared statements should replace these queries.
- Database credentials are hard-coded in multiple files and should be moved into secure environment-specific configuration.
- Driver / EMT registration has inconsistencies between its database connection approach and the supplied schema.
- The current tracking page performs booking-status lookup; it should not be represented as verified real-time GPS tracking.

## Production Readiness and Safety

This application is an academic and development prototype.

It must not be used as an operational emergency-dispatch platform or for storing actual patient information without substantial security, privacy, reliability, and functionality improvements.

Configuring a production database server does not, by itself, make the application production-ready.

## Future Improvements

Potential development improvements include:

- Centralized database configuration.
- Secure authentication and role-based authorization.
- Prepared SQL statements throughout the application.
- Real-time ambulance location integration.
- Improved request notifications.
- More complete Driver / EMT registration.
- Automated testing and validation.
- Responsive interface improvements.
- Audit logs and improved access control.

## Contributing

Contributions for educational and development purposes are welcome.

Before submitting changes:

1. Create a separate Git branch.
2. Test your changes against a fresh database import.
3. Keep credentials and real personal information out of commits.
4. Document changes to database tables and relationships.
5. Verify the Admin, User, and Driver / EMT modules.

## License

Please refer to [`LICENSE.md`](LICENSE.md) for the repository's usage and redistribution terms.

---

**Project:** Rapid Rescue Services  
**Category:** E-Ambulance Booking and Request Management  
**Backend:** PHP  
**Database:** MySQL / MariaDB
