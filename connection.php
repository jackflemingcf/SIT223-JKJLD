<?php

$host = "localhost";
$user = "id17689661_admin";
$password = "}1Mt{t4QM4C}~A^>";
$dbname = "id17689661_projectdb";

$dsn = "mysql:host=". $host. ";dbname=". $dbname;

//connection

$con = new PDO($dsn, $user, $password);
$con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

?>