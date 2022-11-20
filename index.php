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
<h5>Заняття 15. Контроль типів під час роботи з об'єктами </h5>
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

//create an instance of the class Compare

echo "<hr />";
echo "<pre>",
"
    3.	Зробіть клас Employee, у якому будуть такі характеристики: name і surname. Нехай початкові значення цих властивостей передаватимуться параметром конструктор.
    4.	Зробіть геттери та сеттери для властивостей name та surname.
    5.	Нехай тепер третім параметром конструктора передаватиметься посада працівника, що є об'єктом класу Post. Вкажіть тип цього параметра у явному вигляді.
    6.	Зробіть те щоб посада працівника (тобто переданий об'єкт із посадою) записувалася у властивість post.
",
"</pre>";

//create an instance of the class Compare


echo "<hr />";

echo "<pre>",
"
    7.	Створити об'єкт класу Employee з посадою програміст. Під час його створення використовуйте один із об'єктів класу Post, створений нами раніше.
    8.	Виведіть на екран ім'я, прізвище, посаду та зарплату створеного працівника.
",
"</pre>";

//create an instance of the class Compare

echo "<hr />";

echo "<pre>",
"
    9.	Реалізуйте в класі Employee метод changePost, який змінюватиме посаду працівника на іншу. Метод повинен приймати параметр об'єкт класу Post. 
    Вкажіть у методі тип параметра, що приймається в явному вигляді.",
"</pre>";

//create an instance of the class EmployeeCollection

echo "<br />";


echo "<hr />";

echo "<pre>",
"
    10.	Зробіть клас Num, у якого будуть дві публічні статичні властивості: num1 та num2. 
    Запишіть у першу властивість число 2, а друге - число 3. Виведіть суму значень властивостей на екран.
",
"</pre>";

//create an instance of the class EmployeeCollectionMod


echo "<hr />";

echo "<pre>",
"
    11.	Зробіть клас Num, у якого будуть дві приватні статичні властивості: num1 та num2. 
    Нехай за умовчанням у властивості num1 зберігається число 2, а властивості num2 - число 3.
    12.	Зробіть у класі Num метод getSum, який виводитиме на екран суму значень властивостей num1 та num2.
",
"</pre>";

//create an instance of the class Employee6

echo "<br />";


echo "<hr />";
echo "<pre>",
"
    13.	Додайте до нашого класу Geometry метод, який буде знаходити об'єм кулі по радіусу.
    За допомогою цього методу виведіть на екран об'єм кулі з радіусом 10.",
"</pre>";

//create an instance of the class User12


echo "<hr />";

echo "<pre>",
"
    14.	Переробити методи класу ArraySumHelper на статичні.
    15.	Нехай дано масив із числами. За допомогою класу ArraySumHelper знайдіть суму квадратів елементів цього масиву.
",
"</pre>";

//create an instance of the class Employee19

echo "<hr />";
?>
</body>
</html>