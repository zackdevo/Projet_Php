<?php
$db_user = "zack";
$db_passwd = "Soleil1234!";
$db_host = "localhost";
$db_port = "3306";
$db_name = "shareview";
$db_dataSourceName = "mysql:host=$db_host;port=$db_port;dbname=$db_name";

$PDO = new PDO($db_dataSourceName, $db_user, $db_passwd);
$PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
