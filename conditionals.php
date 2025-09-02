<?php
$condition = 10;
$condition2 = 5;
$name = "Pat";
$isActive = true;
$color = 'blue';

// If / elseif / else
if ($condition == 10) {
    echo 'condition 10<br>';
} elseif  ($condition == 5) {
    echo 'condition 5<br>';
} else {
    echo 'all other conditions';
}

// And condition = &&
echo "<br> And condition";
if ($condition === 10 && $condition2 === 5) {
    echo '<br> 10 and 5<br>';
}

// Or condition = ||
echo "<br> Or condition";
if ($condition === 10 || $condition2 === 5) {
    echo '<br>10 or 5<br>';
}

// One line return
if ($isActive) return 'Active';

// Null check
if (is_null($name)) {
    // do something...
}

// Compare same variable with multiple values
switch ($color) {
    case 'red':
        echo 'The color is red';
        break;
    case 'yellow':
        echo 'The color is yellow';
        break;
    case 'blue':
        echo 'The color is blue';
        break;
    default:
        echo 'The color is unknown';
}

// Match Expression (PHP 8)
$type = match($color) {
    'red' => 'danger',
    'yellow', 'orange' => 'warning',
    'green' => 'success',
    default => 'Unknown'
};

// Check if variable declare
isset($color['red']);  # true
?>