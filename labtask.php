<?php
$nums = "123, 160, 62, 153, 345, 128, 387, 825, 666, 614, 723, 163, 811, 176, 732, 628, 722, 733, 755, 765, 794, 613, 627";

// Convert the string to an array
$nums_array = explode(',', $nums);

// Initialize variables
$tot_num = 0;
$nums_array_length = count($nums_array);

// Calculate the total sum of the numbers
foreach ($nums_array as $num) {
    $tot_num += $num;
}

// Display the sum of the numbers
echo "Sum of Numbers is: " . $tot_num . "<br>";

// Calculate the average
$avg_num = $tot_num / $nums_array_length;

// Display the average
echo "Average Number is: " . $avg_num . "<br>";

// Sort the array in ascending order
sort($nums_array);

// Display the five lowest numbers
echo "List of Five Lowest Numbers:<br>";
for ($i = 0; $i < 5; $i++) {
    echo $nums_array[$i] . ", ";
}
echo "<br>";

// Display the five highest numbers
echo "List of Five Highest Numbers:<br>";
for ($i = ($nums_array_length - 5); $i < $nums_array_length; $i++) {
    echo $nums_array[$i] . ", ";
}
?>
