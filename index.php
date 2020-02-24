<?php

/** @var $database QueryBuilder */
$database = require 'bootstrap.php';

$tasks = $database->selectAll('tasks');

require 'index.view.php';