<?php

/**
 * ksort(), bir ilişkisel dizinin öğelerini anahtara(key) göre artan düzende sıralar.
 * Aşağıdaki örnek, bir ilişkisel diziyi anahtara göre artan düzende sıralar.
 */

$ages = array("Mark" => "35", "Jeff" => "37", "Ivan" => "43");
ksort($ages);
print_r($ages);

/**
 * Output : Array ( [Ivan] => 43 [Jeff] => 37 [Mark] => 35 )
 */