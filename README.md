# 🏢 PHP Supplier Management System

A professional Supplier Management Form built using **Core PHP, MySQL, Bootstrap 5, and jQuery (AJAX)**.

This project was developed as part of a PHP practical assessment to demonstrate backend development fundamentals, form handling, and AJAX-based submission without page refresh.

---

## 🚀 Project Overview

This application allows users to create and manage supplier information through a responsive web form.

The system demonstrates:

- Frontend UI development using Bootstrap
- Backend processing using PHP
- Secure database interaction using prepared statements
- AJAX form submission (without reloading the page)

---

## ✨ Features

- ✅ Two-column professional Bootstrap form layout
- ✅ All supplier fields included (as per requirement)
- ✅ Country, Currency, Pay Mode dropdowns
- ✅ Inactive Supplier checkbox
- ✅ AJAX-based form submission
- ✅ No page refresh on save
- ✅ MySQL database integration
- ✅ Secure prepared statements (SQL Injection prevention)
- ✅ Clean and simple folder structure

---

## 🛠️ Technologies Used

- **PHP (Core PHP)**
- **MySQL**
- **Bootstrap 5**
- **jQuery**
- **AJAX**
- **XAMPP (Apache + MySQL)**

---

## 📂 Project Structure

```
php_test/
│
├── index.php
├── save_supplier.php
├── db.php
├── ajax.js
└── database.sql
```

---

## 🗄️ Database Setup

### Step 1: Create Database

Open MySQL Workbench or phpMyAdmin and run:

```sql
CREATE DATABASE supplier_db;
USE supplier_db;
```

### Step 2: Create Suppliers Table

Run the SQL inside `database.sql` file (included in this project).

---

## ▶️ How to Run the Project

1. Install **XAMPP**
2. Start:
   - Apache
   - MySQL
3. Copy the project folder into:

```
C:\xampp\htdocs\
```

4. Open your browser and run:

```
http://localhost/php_test/
```

---

## 🔐 Security Implementation

This project uses:

- Prepared Statements (`mysqli_prepare`)
- Input handling through POST method
- Basic validation using required fields

This prevents SQL Injection attacks.

---

## 📌 Key Learning Outcomes

- Building responsive UI using Bootstrap
- Handling forms using AJAX
- Connecting PHP with MySQL
- Using prepared statements for security
- Structuring a simple PHP application
- Working with XAMPP development environment

---

## 📄 License

This project was developed for educational and assessment purposes.
