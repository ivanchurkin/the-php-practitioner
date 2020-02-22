<?php

$person = [
    'name' => 'Ivan',
    'age' => '26',
    'hair' => 'brown'
];

$person['birthday'] = '6 August 1993';

unset($person['hair']);

require 'index.view.php';