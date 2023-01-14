<?php
$countries = array("USA", "Germany", "UK", "Australia");

/* The following example sorts the elements of the arrays in ascending order: */
sort($countries);
print_r($countries);

## Output
/**
    Array
    (
        [0] => Australia
        [1] => Germany
        [2] => UK
        [3] => USA
    )

 */

# ============

$myNum = array(141, 26, 324, 142, 251);
sort($myNum);
print_r($myNum);

/**
 *  Array
    (
        [0] => 26
        [1] => 141
        [2] => 142
        [3] => 251
        [4] => 324
    )

 */