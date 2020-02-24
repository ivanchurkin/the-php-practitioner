<?php

/** @var array $tasks */
$tasks = $app['database']->selectAll('tasks');

require 'views/index.view.php';