<?php
$dsn = "mysql:host=localhost;dbname=foot";
$username = "root";
$password = "";
$options = [];
$connection = new PDO($dsn, $username, $password, $options);
try {
    // return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);

    echo "connexion reussie";
} catch(PDOException $e){
    print "error :" . $e->getMessage();
    die();
}