<?php 
$names = "Pat";
$products = ["Apple", "Banana", "Orange"];
// Output & Input

    // Output
        echo "Hello, World!<br>";
        echo "My name is $names<br>";
        echo "My favorite fruits are: " . implode(", ", $products) . "<br>";
    
    // Debug output 
    var_dump($names);
    print_r($products);
    
    // Input from console
    $name = readline("What is your name: ");

    ?>