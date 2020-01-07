<?php
 class Student {

     public  function getInfo() {
         echo "<br>" . __METHOD__;
     }
 }

 class Teacher {

 }


 class Course {

 }


 // cách 1 :

$anh = new Student();

 $hung=new Teacher();

 $php=new Course();

 //cách 2 quy tên class và tên phương thức thành biếtn


$className1 = "Studemt";
$huong = new $className1();

$className2 = "Teacher";
$minh = new $className2();

$className3 = "Course";
$hoc = new $className3;

$methodName1 = "getInfo";
$minh->$methodName1();
