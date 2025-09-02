<?php
//Array declaration can contain any types
$example = ['Mike', 50.2, true, ['10', '20']];

//Array declaration
$names = ['Mike', 'Peter', 'Shawn', 'John'];

// Direct access to a specific element
$name[1] //output Peter

// How to access an array in an array
$example[3][1] // 20

//add a element to an array
$names[] = 'Micheal';

// Array merge
$array3 = array_merge($array1, $array2);

// Merge with spreading operator (also work with associative array)
$array3 = [...$array1, ...$array2];

// Array Concat with Spread Operator
$names = ['Mike', 'Peter', 'Paul'];
$people = ['John', ...$names]; // ['John', 'Mike', 'Peter', 'Paul']

//Remove array entry:
unset($names['Peter']);

//Array to string
echo implode(', ', $names) //output Mike, Shawn, John, Micheal

// String to Array
$result = explode(',', $text); // ['Mike', 'Shawn', 'John']


//loop for each array entry
foreach($names as $name) { 
   echo 'Hello ' . $name;
}

// Number of items in a Array
echo count($names);  

//Associative array declaration (key => value):
$person = ['age' => 45, 'genre' => 'men'];

//Add to ass. array:
$person['name'] = 'Mike';

//loop ass. array key => value: 
foreach($names as $key => $value) { 
   echo $key . ' : ' . $value;
}

// Check if a specific key exist
echo array_key_exists('age', $person);

// Return keys
echo array_keys($person); // ['age', 'genre']

// Return values
echo array_values($person) // [45, 'men']

//Array filter (return a filtered array)
$filteredPeople = array_filter($people, function ($person) {
    return $names->active;
})

// Array map (return transform array):
$onlyNames = array_map(function($person) {
    return ['name' => $person->name];
}, $people)

# Search associative array
$items = [
        ['id' => '100', 'name' => 'product 1'],
        ['id' => '200', 'name' => 'product 2'],
        ['id' => '300', 'name' => 'product 3'],
        ['id' => '400', 'name' => 'product 4'],
    ];

# search all value in the 'name' column
$found_key = array_search('product 3', array_column($items, 'name'));
# return 2
?>