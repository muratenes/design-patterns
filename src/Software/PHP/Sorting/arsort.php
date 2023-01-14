<?php

/**
 * arsort(), bir ilişkisel dizinin öğelerini değere göre azalan düzende sıralar.
 * Aşağıdaki örnek, bir ilişkisel diziyi değere göre azalan düzende sıralar.
 */

$ages = array("Mark" => "35", "Jeff" => "37", "Ivan" => "43");
arsort($ages);
print_r($ages);

/**
 * Array
 * (
 *      [Ivan] => 43
 *      [Jeff] => 37
 *      [Mark] => 35
 * )
 */