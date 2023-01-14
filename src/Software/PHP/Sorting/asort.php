<?php

/**
 * asort(), bir ilişkisel dizinin öğelerini değere göre artan
 * düzende sıralar. Aşağıdaki örnek,
 * bir ilişkisel diziyi değere göre artan düzende sıralar.
 */


$ages = array("Mark" => "35", "Jeff" => "37", "Ivan" => "43");
asort($ages);
print_r($ages);

/**
 * Output :
 * Array
 * (
 * [Mark] => 35
 * [Jeff] => 37
 * [Ivan] => 43
 * )
 */


$jobs = ['murat' => 'Software Developer', 'ahmet' => 'Dentist'];
asort($jobs);
print_r($jobs);