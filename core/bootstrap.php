<?php

$app = [];

require 'core/Router.php';
require 'core/Request.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';

$app['config'] = require 'config.php';

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);