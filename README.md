<h1 align="center">
Welcome
</h1>
<p align="center">
Framework : Laravel
</p>



1. Install PHP and MySQL

1. Install MAMP for MacOS

1. Install TablePlus for the database

1. Install Postman to test API

1. Install Composer

1. Clone the project
```
git clone https://github.com/IIM-Creative-Technology/php-api-RomainValla.git
```

Install the dependencies

Enter the cloned directory in your terminal :
```
cd php-api-RomainValla && composer install
```

7. Create a database named iim-laravel-romainvalla

7. Launch the migrations and seeds

```
php artisan migrate
```

9. Launch the seeds

```
php artisan db:seed
```

10. Launch the app

```
php artisan serve
```

11. Start testing routes on Postman

Login with admin accounts :

```
GET 127.0.0.1:8000/api/auth/login
```

Use one of emails in users database

with the password :

```
password
```


<h1 align="center">
CLASSES
</h1>

List of classes

```
GET 127.0.0.1:8000/classes
```

Create a class
```
POST 127.0.0.1:8000/classes with parameters 'name', 'year'
```
Update a class
```
PUT 127.0.0.1:8000/classes with parameters 'name', 'year'
```

Get student by class
```
GET 127.0.0.1:8000/classes/{name}
```

<h1 align="center">
STUDENTS
</h1>


List of students
```
GET 127.0.0.1:8000/students
```

Get a specific student
```
GET 127.0.0.1:8000/students/{id}
```

Create a student
```
POST 127.0.0.1:8000/students with parameters 'firstname','lastname','age','start_year','id_year'
```

Update a student
```
PUT 127.0.0.1:8000/students/{id} with any or all of the post parameters
```

Delete a student
```
DELETE 127.0.0.1:8000/students/{id}
```




<h1 align="center">
TEACHERS
</h1>


List of teachers

```
GET 127.0.0.1:8000/teachers
```

Get a specific teacher

```
GET 127.0.0.1:8000/teachers/{id}
```

Create a teacher

```
POST 127.0.0.1:8000/teachers with parameters 'firstname','lastname','start_year'
```

Update a teacher

```
PUT 127.0.0.1:8000/teachers/{id}
```


<h1 align="center">
COURSES
</h1>


List of courses

```
GET 127.0.0.1:8000/courses
```

Get a specific course

```
GET 127.0.0.1:8000/courses/{id}
```

Create a course

```
POST 127.0.0.1:8000/courses with parameters 'name','start_at','end_at','promotion_id','teacher_id'
```

Update a course

```
PUT 127.0.0.1:8000/courses/{id}
```

<h1 align="center">
GRADES
</h1>


List of grades

```
GET 127.0.0.1:8000/grades
```

List of grades of a specific student

```
GET 127.0.0.1:8000/grades/{id} with query parameter 'id_student'
```

List of grades of a specific student in a specific course

```
GET 127.0.0.1:8000/grades/{id}
```

Create a grade for a student in a specific course

```
POST 127.0.0.1:8000/grades with parameters 'grade', 'id_score', 'id_course'
```

<p align="center">
Romain Valla
</p>
