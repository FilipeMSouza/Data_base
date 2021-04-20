<?php

require 'connection.php';

use ConexaoPHPPostgres\connection as Connection;

$pdo = Connection::get()->connect();