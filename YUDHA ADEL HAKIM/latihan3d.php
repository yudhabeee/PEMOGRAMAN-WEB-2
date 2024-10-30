<?php
// Function to calculate factorial
function faktorial($a) {
    if ($a == 0) {
        return 1; // Base case: factorial of 0 is 1
    } else {
        return $a * faktorial($a - 1); // Recursive case
    }
}

// Display result
$number = 5;
echo "Faktorial dari $number = " . faktorial($number);
?>