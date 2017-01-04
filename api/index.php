<?php

require 'vendor/autoload.php';

Flight::route('/', function(){

         $numbers[0] = "one";
         $numbers[1] = "two";
         $numbers[2] = "three";
         $numbers[3] = "four";
         $numbers[4] = "five";

    Flight::json($numbers);
});

Flight::start();
