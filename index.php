<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Work for Lesson 15</title>
    <style>
        body {
            color: darkblue;
        }

        pre {
            color: black;
        }

        hr {
            background-color: crimson;
        }
    </style>
</head>
<body>
<h5>Заняття 15. Контроль типів під час роботи з об'єктами. Статичні методи в ООП на PHP </h5>
<hr>

<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\ArraySumHelper, App\Employee, App\Geometry, App\Num, App\NumMod, App\Post;

echo "<pre>",
"
    1.	Зробіть клас Post (посада), у якому будуть такі властивості, доступні лише читання: name і salary.
    2.	Створіть кілька об'єктів класу Post: програміст, водій менеджер.
",
"</pre>";

//create an instance of the class Post
$postProgrammer = new Post("Programmer", 5000);
echo "Post - " . $postProgrammer->getName() . ", Salary - " . $postProgrammer->getSalary()."<br />";
$postDriver = new Post("Driver", 3000);
echo "Post - " . $postDriver->getName() . ", Salary - " . $postDriver->getSalary()."<br />";
$postManager = new Post("Manager", 2000);
echo "Post - " . $postManager->getName() . ", Salary - " . $postManager->getSalary()."<br />";
echo "<hr />";
echo "<pre>",
"
    3.	Зробіть клас Employee, у якому будуть такі характеристики: name і surname. 
    Нехай початкові значення цих властивостей передаватимуться параметром конструктор.
    4.	Зробіть геттери та сеттери для властивостей name та surname.
    5.	Нехай тепер третім параметром конструктора передаватиметься посада працівника, що є об'єктом класу Post.
    Вкажіть тип цього параметра у явному вигляді.
    6.	Зробіть те щоб посада працівника (тобто переданий об'єкт із посадою) записувалася у властивість post.
    7.	Створити об'єкт класу Employee з посадою програміст. Під час його створення використовуйте один із об'єктів класу Post, створений нами раніше.
    8.	Виведіть на екран ім'я, прізвище, посаду та зарплату створеного працівника.
",
"</pre>";

//create an instance of the class Employee
$employee = new Employee("Alex", "Kent", $postProgrammer);
echo "employee : Name - " . $employee->getName() . ", Surname - " . $employee->getSurname() .
    ", Post - " . $employee->getPost()->getName() . ", Salary - " . $employee->getPost()->getSalary();

echo "<hr />";

echo "<pre>",
"
    9.	Реалізуйте в класі Employee метод changePost, який змінюватиме посаду працівника на іншу. Метод повинен приймати параметр об'єкт класу Post. 
    Вкажіть у методі тип параметра, що приймається в явному вигляді.",
"</pre>";

//create an instance of the class Employee
$employee = new Employee("Martin", "Eden", $postDriver);
echo "employee : Name - " . $employee->getName() . ", Surname - " . $employee->getSurname() .
    ", Post - " . $employee->getPost()->getName() . ", Salary - " . $employee->getPost()->getSalary();
echo "<br />";
//change the value of the $post property of an object using the method changePost()
$employee->changePost($postManager);
echo "employee : Name - " . $employee->getName() . ", Surname - " . $employee->getSurname() .
    ", Post - " . $employee->getPost()->getName() . ", Salary - " . $employee->getPost()->getSalary();

echo "<hr />";

echo "<pre>",
"
    10.	Зробіть клас Num, у якого будуть дві публічні статичні властивості: num1 та num2. 
    Запишіть у першу властивість число 2, а друге - число 3. Виведіть суму значень властивостей на екран.
",
"</pre>";

//assigning values to static properties of class Num
Num::$num1 = 2;
Num::$num2 = 3;
echo "Sum of property values num1 and num2 = " . Num::$num1 + Num::$num2;

echo "<hr />";

echo "<pre>",
"
    11.	Зробіть клас NumMod, у якого будуть дві приватні статичні властивості: num1 та num2. 
    Нехай за умовчанням у властивості num1 зберігається число 2, а властивості num2 - число 3.
    12.	Зробіть у класі Num метод getSum, який виводитиме на екран суму значень властивостей num1 та num2.
",
"</pre>";

//display the sum of the values of private static properties of the Num class using the static method getSum()
echo "Sum of property values num1 and num2 = " . NumMod::getSum();

echo "<hr />";
echo "<pre>",
"
    13.	Додайте до нашого класу Geometry метод, який буде знаходити об'єм кулі по радіусу.
    За допомогою цього методу виведіть на екран об'єм кулі з радіусом 10.",
"</pre>";

//Finding the volume of a ball with a radius of 10 using the static method getSphereVolume()
echo "Volume of a sphere with a radius of 10 = " . round(Geometry::getSphereVolume(10), 2);

echo "<hr />";

echo "<pre>",
"
    14.	Переробити методи класу ArraySumHelper на статичні.
    15.	Нехай дано масив із числами. За допомогою класу ArraySumHelper знайдіть суму квадратів елементів цього масиву.
",
"</pre>";

$arr = [2, 3, 4, 5];
print_r($arr);
echo "<br />";
//Finding the sum of squares of array elements using a static method getSum()
echo "Sum of squares of array elements = " . ArraySumHelper::getSum2($arr);
echo "<hr />";
?>
</body>
</html>