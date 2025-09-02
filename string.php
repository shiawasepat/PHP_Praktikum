<?php
// String can use single quote
$name = 'Mike';
// or double quote
$name = "Mike";
$email = "mike@example.com";
$text = "  Hello World  ";

// Double quote string can escape characters \n = new line  \t = tab  \\ = backslash
echo "Hello Mike\nHello David<br>";

// Double quote string can do interpolation
echo "Hello $name <br>";

// string length
echo strlen($name);

// Remove space(s) before and after
echo trim($text);
// Convert to lowercase / uppercase
echo strtolower($email);
echo strtoupper($name);

?>