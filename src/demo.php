<?php

   class User {
       public $name;
       public $age;

       public function __construct($name, $age) {
           echo 'constructor goes brtttt.....';
       }
   }

   $user1 = new User();

   echo $user1->name;