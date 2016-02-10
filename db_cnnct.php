<?php
///////////////
// BASE INFO //
///////////////
$db_host = 'localhost';
$db_user = 'root';
$db_pwd = 'root';
$database = 'DieWing_db';

// Connection Test
if (!mysql_connect($db_host, $db_user, $db_pwd))
    die("Can't connect to database");
if (!mysql_select_db($database))
    die("Can't select database");


?>