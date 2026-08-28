# Student Registration System

## 1. Project Title

**Student Registration System**

A simple web-based student registration system developed using Laravel.

---

## 2. Introduction

The Student Registration System is a web application that allows users to register and manage student information.

This project was created as part of the Week 4 activity for Client-Server Technologies. It demonstrates how Laravel can be used to create a system with forms, database operations, validation, and CRUD functions.

---

## 3. Objectives

The objectives of this project are:

* To create a functional student registration system.
* To practice Laravel MVC architecture.
* To connect a Laravel application to a database.
* To create and manage student records.
* To apply form validation.
* To upload student profile pictures.
* To practice CRUD operations.
* To use Git and GitHub for version control.

---

## 4. System Features

The system includes the following features:

* Student Registration
* Student List
* Student Profile
* Edit Student Information
* Delete Student Record
* Form Validation
* Profile Picture Upload
* Success Flash Message
* Database Storage
* Responsive User Interface

---

## 5. Student Information

The registration form collects the following information:

* Student ID
* First Name
* Middle Name
* Last Name
* Email
* Mobile Number
* Date of Birth
* Gender
* Program
* Year Level
* Address
* Profile Picture

---

## 6. Technologies Used

* **Laravel**
* **PHP**
* **SQLite**
* **Blade**
* **Tailwind CSS**
* **HTML**
* **Git**
* **GitHub**
* **Visual Studio Code**

---

## 7. MVC Architecture

Laravel follows the MVC architecture.

### Model

The **Student Model** handles the student data and communicates with the database.

File:

```text
app/Models/Student.php
```

### View

The views are responsible for displaying the registration form, student list, and student profile.

Files are located in:

```text
resources/views/students/
```

### Controller

The **StudentController** handles the main operations of the system such as creating, viewing, updating, and deleting student records.

File:

```text
app/Http/Controllers/StudentController.php
```

### MVC Flow

```text
User
  ↓
Route
  ↓
Controller
  ↓
Model
  ↓
Database
  ↓
Controller
  ↓
View
  ↓
User
```

---

## 8. Database

The project uses **SQLite** as its database.

Database file:

```text
database/database.sqlite
```

Main table:

```text
students
```

The students table stores the registered student information.

### Students Table

```text
students
├── id
├── student_id
├── first_name
├── middle_name
├── last_name
├── email
├── mobile_number
├── date_of_birth
├── gender
├── program
├── year_level
├── address
├── profile_picture
├── created_at
└── updated_at
```

---

## 9. CRUD Operations

The system supports the basic CRUD operations.

### Create

Users can register a new student through the registration form.

### Read

Registered students can be viewed through the Student List and Student Profile.

### Update

Student information can be edited and updated.

### Delete

Student records can be deleted from the system.

---

## 10. Validation

The registration form uses Laravel validation to make sure that required information is provided.

Examples of validated fields include:

* Student ID
* First Name
* Last Name
* Email
* Mobile Number
* Date of Birth
* Gender
* Program
* Year Level
* Address
* Profile Picture

The email and Student ID are also stored as unique values in the database.

---

## 11. Flash Message

After successfully registering a student, the system displays a success notification:

**Student registered successfully!**

This helps the user know that the registration was completed successfully.

---

## 12. Project Structure

```text
week04-student-registration/
│
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── StudentController.php
│   │
│   └── Models/
│       └── Student.php
│
├── database/
│   ├── migrations/
│   │   └── create_students_table.php
│   │
│   └── database.sqlite
│
├── resources/
│   └── views/
│       └── students/
│           ├── create.blade.php
│           ├── index.blade.php
│           ├── show.blade.php
│           └── edit.blade.php
│
├── routes/
│   └── web.php
│
├── public/
│
├── storage/
│
├── tests/
│
├── README.md
├── artisan
├── composer.json
└── package.json
```

---

## 13. Screenshots

### Student Registration Form

*Add screenshot of the registration form here.*

```text
[ Insert Registration Form Screenshot ]
```

### Student List

*Add screenshot of the student list here.*

```text
[ Insert Student List Screenshot ]
```

### Student Profile

*Add screenshot of the student profile here.*

```text
[ Insert Student Profile Screenshot ]
```

### Database Table

*Add screenshot of the SQLite students table here.*

```text
[ Insert Database Screenshot ]
```

---

## 14. System Diagram

```text
              ┌─────────────────────┐
              │        USER         │
              └──────────┬──────────┘
                         │
                         ▼
              ┌─────────────────────┐
              │       ROUTES        │
              │     web.php         │
              └──────────┬──────────┘
                         │
                         ▼
              ┌─────────────────────┐
              │     CONTROLLER      │
              │ StudentController   │
              └──────────┬──────────┘
                         │
                         ▼
              ┌─────────────────────┐
              │       MODEL         │
              │      Student        │
              └──────────┬──────────┘
                         │
                         ▼
              ┌─────────────────────┐
              │      DATABASE       │
              │       SQLite        │
              │      students       │
              └──────────┬──────────┘
                         │
                         ▼
              ┌─────────────────────┐
              │        VIEW         │
              │   Blade Templates   │
              └─────────────────────┘
```

---

## 15. Git and GitHub

Git was used to track the development of the project.

The project is hosted on GitHub:

**Repository:**
https://github.com/augustcresencio1/week04-student-registration

The project should contain at least **10 meaningful Git commits** showing the development progress.

---

## 16. Conclusion

The Student Registration System demonstrates the basic use of Laravel in developing a web-based application.

Through this project, I was able to practice MVC architecture, routing, controllers, Blade views, database operations, validation, CRUD operations, file uploading, Git, and GitHub.

This project also helped me understand how different parts of a Laravel application work together to create a functional student registration system.
