<?php
// Perform basic arithmetic operations
$num1 = 10;
$num2 = 5;

echo "Addition: " . ($num1 + $num2) . "<br>";
echo "Subtraction: " . ($num1 - $num2) . "<br>";
echo "Multiplication: " . ($num1 * $num2) . "<br>";
echo "Division: " . ($num1 / $num2) . "<br>";


for ($i = 1; $i <= 10; $i++) {
    echo "Number: $i<br>";
}


$fruits = array("Apple", "Banana", "Cherry", "Date");

echo "Fruits List:<br>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}


$number = 7;

if ($number % 2 == 0) {
    echo "$number is an even number.";
} else {
    echo "$number is an odd number.";
}
?>
