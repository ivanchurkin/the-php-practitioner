<?php

/** @var QueryBuilder $db */
$db = App::get('database');

$users = $db->selectAll('names');

require 'views/index.view.php';