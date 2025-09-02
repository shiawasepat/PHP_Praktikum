<?php
//function declararion
function name($firstName, $lastName = 'defaultvalue') {
    return "$firstName $lastName";
}

//function call
name('Mike', 'Taylor');

//function call with named parameters (PHP 8)
name(firstName: 'Mike', lastName: 'Taylor'); // order can change

// Closure function
Route::get('/', function () {
    return view('welcome');
});

// Arrow functions
Route::get('/', fn () => view('welcome'));


// Typed parameter and typed return
function displayFullName(string $first, string $last) : string {
    return "$first $last";
}

// Typed or null
function display(?string $name) {
    return $name ?? 'default';
}

// Union type (or)
function display(string|int $data) {
    return is_string($data) ? $data : (string)$data;
}

// Intersection type (and)
function count_and_interate(Iterator&Countable $value) {

}

// Return any type (mixed)
function logInfoMixed(string $info) : mixed {
    return $info;
}

// No return (void)
function logInfoVoid(string $info) : void {
    echo $info;
}
?>