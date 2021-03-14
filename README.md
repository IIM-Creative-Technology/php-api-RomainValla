<h1 align="center">
Welcome
</h1>
<p align="center">
Framework : Laravel
</p>
<p align="left">
To see the project :
</p>


Install PHP (at least 7.4 version) and MySQL

Install [laragon] for Windows (https://laragon.org/) Install [mamp] for MacOS (https://www.mamp.info/)

Install a database reader such as TablePlus or SequelPro

Install [tableplus] for Windows (https://tableplus.com/) Install [mysequelpro] for MacOS (https://www.sequelpro.com/)

Install a client request tester such as Postman

Install [postman] (https://www.postman.com/downloads/)

Install Composer 1

https://getcomposer.org/

Clone the project
```
git clone https://github.com/IIM-Creative-Technology/php-api-RomainValla.git
```

Install the dependencies

Enter the cloned directory in your terminal :
```
cd php-api-RomainValla && composer install
```

Create a database named iim-laravel-romainvalla

Go on TablePlus or Sequel pro and create a database named api-laravel
Launch your Php with Laragon or Mamp
Launch the migrations and seeds
```
php artisan migrate
```


Launch the migrations and seeds
```
php artisan db:seed

Launch the app
```
php artisan serve
```
Launch the app
```
php artisan serve
```
Start testing routes on Postman

Login with admin accounts :

GET /api/auth/login
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
GET /classes
```

Create a class
```
POST /classes with parameters 'name', 'year'
```
Update a class
```
PUT /classes with parameters 'name', 'year'
```

Get student by class
```
GET /classes/{name}
```

<h1 align="center">
STUDENTS
</h1>


List of students
```
GET /students
```

Get a specific student
```
GET /students/{id}
```

Create a student
```
POST /students with parameters 'firstname','lastname','age','start_year','id_year'
```

Update a student
```
PUT /students/{id} with any or all of the post parameters
```

Delete a student
```
DELETE /students/{id}
```




<h1 align="center">
TEACHERS
</h1>


List of teachers
```
GET /teachers
```
Get a specific teacher
```
GET /teachers/{id}
```
Create a teacher
```
POST /teachers with parameters 'firstname','lastname','start_year'
```
Update a teacher
```
PUT /teachers/{id}
```


<h1 align="center">
COURSES
</h1>


List of courses
```
GET /courses
```
Get a specific course
```
GET /courses/{id}
```
Create a course
```
POST /courses with parameters 'name','start_at','end_at','promotion_id','teacher_id'
```
Update a course
```
PUT /courses/{id} with any or all of the post parameters
```

<h1 align="center">
GRADES
</h1>


List of scores
```
GET /scores
```
List of scores of a specific student
```
GET /scores/{id} with query parameter 'id_student'
```
List of scores of a specific student in a specific course
```
GET /scores/{id} with query parameter 'studentId', 'courseId'
```
Create a score for a student in a specific course
```
POST /scores with parameters 'score', 'student_id', 'course_id'
```
<p align="center">
Romain Valla
</p>
