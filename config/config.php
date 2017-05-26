<?php

$config = new myConfig();
$config->setPath('C:\xampp\htdocs\imperium');

$config->setDrive('pgsql');
$config->setHost('localhost');
$config->setPort(5432);
$config->setUser('postgres');
$config->setPassword('123');
$config->setDbname('dbclinica');
$config->setHash('md5');

$config->setUrl('http://localhost/imperium/www/');