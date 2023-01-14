<?php

/**
 * The following example sorts the elements of the $cars array in descending order:
 */

$countries = array("USA", "Germany", "UK", "Australia");
rsort($countries);
print_r($countries);

/* Output : USA,UK,Germany,Australia */

$myNum = array(141, 26, 324, 142, 251);
rsort($myNum);
print_r($myNum);

/* Output : 324,251.142.....26 Reverse Sorting */