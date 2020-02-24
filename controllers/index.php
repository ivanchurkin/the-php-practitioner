<?php

/** @var array $users */
$users = $app['database']->selectAll('names');

require 'views/index.view.php';