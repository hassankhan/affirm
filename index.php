<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(-1);

require 'vendor/autoload.php';

$af = new Affirm\Affirm();
echo $af->is('asd')->regexp();
echo '1';
// echo ctype_digit(5);
