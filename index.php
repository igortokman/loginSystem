<?php

require_once 'core/init.php';

Config::get('mysql/db');

$user = DB::getInstance();
