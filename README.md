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

## 11. Reflection

Validation is an important part of a student registration system because it helps make sure that the information entered by the user is complete and correct. Without validation, users could submit missing, incorrect, or invalid information that may cause problems in the database. Through this project, I learned that validation is necessary to maintain the quality and reliability of the data stored in the system.

One of the lessons I learned about handling user input is that every input should be checked before it is saved. In this project, Laravel validation was used to check required fields such as the student ID, name, email, mobile number, date of birth, gender, program, year level, and address. I also learned that different types of data need different validation rules to make sure that users enter information in the correct format.

Server-side validation is more reliable than client-side validation because it happens on the server before the data is processed or stored. Client-side validation is useful because it provides quick feedback to users, but it can be bypassed. Server-side validation provides an additional layer of security because the application checks the submitted data before accepting it. Because of this, web applications should not depend only on client-side validation.

Another important lesson from this project is file security. The system allows users to upload profile pictures, so uploaded files need to be checked before they are stored. In this project, the file type and file size are validated to help prevent invalid files from being uploaded. Proper file validation is important because unsafe file uploads can create security risks in web applications.

Registration systems are commonly used in real-world enterprise software. Schools use registration systems to manage student information, while companies use similar systems for employees, customers, members, and other users. These systems make it easier to collect, organize, update, and retrieve information. They also help reduce manual work and improve the accuracy of records.

Overall, this project helped me understand the importance of validation, secure input handling, and proper data management in web application development. I learned that creating a registration system is not only about making forms and saving data. Developers also need to consider security, data accuracy, usability, and maintainability when creating a reliable system.

---

## 12. References

Laravel. (n.d.). *Laravel documentation*. https://laravel.com/docs

PHP Documentation Group. (n.d.). *PHP manual*. https://www.php.net/docs.php

Oracle. (n.d.). *MySQL documentation*. https://dev.mysql.com/doc/

Tailwind Labs. (n.d.). *Tailwind CSS documentation*. https://tailwindcss.com/docs

MDN Web Docs. (n.d.). *MDN Web Docs*. https://developer.mozilla.org/

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
              │       web.php       │
              └──────────┬──────────┘
                         │
                         ▼
              ┌─────────────────────┐
              │      CONTROLLER     │
              │ StudentController   │
              └──────────┬──────────┘
                         │
                         ▼
              ┌─────────────────────┐
              │        MODEL        │
              │       Student       │
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

The project contains multiple meaningful Git commits showing the development progress.

---

## 16. Conclusion

The Student Registration System demonstrates the basic use of Laravel in developing a web-based application.

Through this project, I was able to practice MVC architecture, routing, controllers, Blade views, database operations, validation, CRUD operations, file uploading, Git, and GitHub.

This project also helped me understand how different parts of a Laravel application work together to create a functional student registration system.

---

## 17. Project Status

The Student Registration System is currently functional and ready for testing.
