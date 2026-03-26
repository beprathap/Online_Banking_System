# Internet Banking System - KANYARASI

A web-based Internet Banking System built with PHP and MySQL. The system supports three user roles: Admin, Staff, and Client, each with dedicated portals.

## Features

### Admin Portal
- Dashboard with financial overview
- Manage clients, staff, and accounts
- Approve/manage account openings
- Deposit, withdrawal, and transfer management
- Financial reporting (deposits, withdrawals, transfers)
- Loan management
- System settings

### Staff Portal
- Dashboard
- Add and manage clients
- Open and manage bank accounts
- Handle deposits, withdrawals, and transfers
- Balance enquiries
- Financial reporting

### Client Portal
- Self-registration and login
- Account dashboard
- Deposit, withdraw, and transfer funds
- View transaction history (deposits, withdrawals, transfers)
- Balance enquiries
- Loan overview
- Manage account openings

## Tech Stack

- **Backend:** PHP
- **Database:** MySQL
- **Frontend:** HTML, CSS, Bootstrap, JavaScript

## Project Structure

```
Online_Banking_System/
├── index.php           # Entry point
├── admin/              # Admin portal
├── staff/              # Staff portal
├── client/             # Client portal
├── dist/               # Shared assets
└── DATABASE FILE/      # SQL dump (internetbanking.sql)
```

## Setup

1. Install PHP and MySQL (or use XAMPP/MAMP)
2. Import `DATABASE FILE/internetbanking.sql` into your MySQL server
3. Configure database credentials in:
   - `admin/conf/config.php`
   - `staff/conf/config.php`
   - `client/conf/config.php`
4. Serve the project root with a PHP-compatible web server
5. Visit `http://localhost/` in your browser

## Default Login Credentials

| Role  | Email            | Password  |
|-------|------------------|-----------|
| Admin | admin@mail.com   | test@123  |
| Staff | staff@mail.com   | test@123  |

> **Note:** Change default credentials before deploying to production.
