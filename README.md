# MP0613 - Server-Side Application Development (IntroPHP)

> **Course:** 2nd & Final Year - Higher Vocational Training in Web Application Development (DAW)  
> **School:** Stucom Pelai (Academic Year 2026/2027)  
> **Module:** MP0613 - Server-Side Application Development (*Desarrollo de aplicaciones en entorno servidor*)  
> **Purpose:** PHP Fundamentals Refresher before moving into Laravel  

---

## 📌 Overview

This repository contains a collection of introductory PHP exercises designed as a comprehensive refresher for **MP0613 (Server-Side Application Development)**. 

The primary objective of these exercises is to review fundamental PHP concepts learned during the 1st year of the Higher Vocational Training degree, establishing a solid foundation in core PHP syntax, control structures, data manipulation, forms, and sessions before transitioning to building modern web applications with **Laravel**.

### Key Learning Objectives:
- Master PHP syntax, variables, data types, and arithmetic formulas.
- Implement conditional logic, loops, and custom functions.
- Handle forms, GET and POST request methods, cookies, and PHP sessions (`$_SESSION`).
- Write structured, clean, and testable code validated against automated **PHPUnit** test suites.

---

## ⚙️ Requirements & Prerequisites

- **PHP**: 8.2 or higher
- **Composer**: Dependency manager for PHP

---

## 🚀 Getting Started

### 1. Clone the Repository
```bash
git clone https://github.com/Ignaciobrenas/MP0613_RA1RA2_IntroPHP.git
cd MP0613_RA1RA2_IntroPHP
```

### 2. Install Dependencies
Install PHPUnit and project dependencies via Composer:
```bash
composer install
```

---

## 🧪 Running Tests

Automated testing is configured using **PHPUnit**. All 50 exercises include unit test suites located in the `tests/` directory.

### Run All Unit Tests
```bash
./vendor/bin/phpunit
```
or explicitly targeting the `tests/` directory:
```bash
./vendor/bin/phpunit ./tests
```

### Run a Specific Unit Test
To test a single exercise (e.g., Exercise 01 or Exercise 50):
```bash
./vendor/bin/phpunit ./tests/P01_SandboxTest.php
./vendor/bin/phpunit ./tests/P50_AddToCartTest.php
```

### Run Tests with Detailed Debug Information
```bash
./vendor/bin/phpunit --debug --display-errors --display-deprecations
```

### Generate HTML Testdox Report
```bash
./vendor/bin/phpunit --testdox-html testdox.html
```

---

## 📸 Test Results & Verification

All 190 tests across all 50 exercises pass with 100% success (all green). Screenshots of test execution are stored in the `assets/` directory:

### PHPUnit Execution Summary
![PHPUnit All Tests Passing](<assets/.vendorbinphpunit .tests .png>)

### Test Suite Execution Screenshots
![PHPUnit Test Suite Result 1](<assets/testing 1.png>)

![PHPUnit Test Suite Result 2](<assets/testing 2.png>)

---

## 🎓 Author

- **Student:** Ignacio Breñas
- **Institution:** Stucom Pelai
- **Course:** DAW 2nd Year (2026/2027)
