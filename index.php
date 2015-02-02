<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(-1);

require 'vendor/autoload.php';

$af = new Affirm\Affirm();
$af2 = new Affirm\Affirm();
// var_dump($af->is('This', 'is')->values());
// var_dump($af2->is('This')->not()->endsWith('is'));
// var_dump($af->values());
// echo '1';
// echo ctype_digit(5);
// echo (bool) 'true';

$newVar = 1;
var_dump($af->is(1)->sameType(1));
// var_dump(array_key_exists('newVar', get_defined_vars()));


// var_dump($af->are(1, 'The', 'Pes')->number());

// var_dump(is_infinite(INF));
