<?php

require 'connection.php';

use ConexaoPHPPostgres\Connection as Connection;

$pdo = Connection::get()->connect();