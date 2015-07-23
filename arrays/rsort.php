<?php
// So.. rsort sort the array in reverse order

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
rsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}

/*
 output:

0 = orange
1 = lemon
2 = banana
3 = apple

 */

