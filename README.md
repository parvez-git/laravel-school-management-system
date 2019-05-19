## Laravel School Management System (LSMS)

**LSM System** is a simple role based school management system.

### Installation
01. `git clone https://github.com/parvez-git/laravel-school-management-system.git`
02. `cd laravel-school-management-system`
03. `composer install`
04. `npm install`
05. `cp .env.example .env`
06. `php artisan key:generate`
07. `php artisan migrate`
08. `php artisan db:seed`
09. `php artisan serve`

### Packages
01. `spatie/laravel-permission`

### Credentials

To test application the database is seeding with users :

-   Admin : email = admin@demo.com, password = 12345678 and Role: Admin
-   Teacher : email = teacher@demo.com, password = 12345678 and Role: Teacher
-   Parent : email = parent@demo.com, password = 12345678 and Role: Parent
-   Student : email = student@demo.com, password = 12345678 and Role: Student
