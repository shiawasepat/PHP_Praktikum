<?php
//function declararion
function name($firstName, $lastName = 'defaultvalue') {
    return "$firstName $lastName";
}

//function call
echo name('Mike', 'Taylor');

//function call with named parameters (PHP 8)
name(firstName: 'Mike', lastName: 'Taylor'); // order can change
?>