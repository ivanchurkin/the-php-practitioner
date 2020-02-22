<?php

require 'functions.php';

$task = [
    'title' => 'Do something',
    'due' => 'today',
    'assigned_to' => 'Ivan',
    'completed' => true
];

dd($task);

require 'index.view.php';