## Invoice Management System

A project based on Invoice Management System built with Laravel.
It includes modules for managing Customers, Products, and Invoices with proper relationships, validations, and CRUD functionality.

### Features

- Laravel Breeze authentication
- Manage Customers, Products, and Invoices
- Eloquent relationships between models
- Auto-calculated invoice totals
- Soft deletes for invoices
- Form Request validation
- Email notification sent to customers on invoice creation

### Entities & Relationships

- Customer: has many invoices
- Product: belongs to many invoices
- Invoice: belongs to one customer, includes one or more products

### Tech Stack

- Laravel 12
- Breeze (Authentication)
- MySQL
- Blade Templates