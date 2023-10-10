<?php
    require "Model/Robot.php";

    // cara 1
    // $robot1 = new Robot(); 
    // $robot1 -> name = "Megatron";
    // $robot1 -> color = "blue-white-red";
    // $robot1 -> size = "Large";

    // $robot2 = new Robot(); 
    // $robot2 -> name = "Bumblebee";
    // $robot2 -> color = "black and yellow";
    // $robot2 -> size = "Medium";
    // var_dump($robot1); 
    // echo "<br>";
    // var_dump($robot2);

    // cara 2 menggunakan function
    $robot1 = new Robot(); 
    $robot1-> set_name("Rifki");
    $robot1-> set_color("Black");
    $robot1-> set_size("L");

    $robot2 = new Robot(); 
    $robot2-> set_name("Said");
    $robot2-> set_color("Blue");
    $robot2-> set_size("S");

    var_dump($robot1); 
    echo "<br>";
    var_dump($robot2);