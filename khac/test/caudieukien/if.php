<?php
 $number = 20;
 if($number % 2 == 0) {
     $result = "số chẵn";
 }
 $result = ($number % 2 == 0) ? "số chẵn" : "";
 echo $result;