<?php
//Array declaration
$names = ['Mike', 'Peter', 'Shawn', 'John'];
echo $names[2];

$names[] = 'Mary';
echo implode(', ', $names);

$person = [
    'age' => 30,
    'gender' => 'male'
];

$person['name'] = 'Mike';

foreach ($person as $key => $value) {
    echo "$key: $value\n";
}