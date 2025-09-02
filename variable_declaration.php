<!-- Variables Declaration -->
<?php
    $name = 'Mike'; // string
    $isActive = true; // boolean
    $number = 25; // integer
    $amount = 99.99; // float
    $fruits = ['apple', 'banana', 'orange']; // array
    const MAX_USERS = 50; // constant
    define('MIN_USERS', 50); // constant

    // Assign 'by reference' with &
    $name_2 = &$name_1;

    // Type conversion
    $age = (int)readline('Your age: ');
    echo 'Your age is' . (string)$age;

    echo gettype($age); // int

    echo is_int($age); // true
    echo is_float(12.5); // true
    echo is_string($name); // true
?>