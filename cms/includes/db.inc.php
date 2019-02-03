<?php 
$host = 'localhost';
$user = 'root';
$password = '';
$dbn = 'cms';
$dsn = "mysql:host=$host;dbname=$dbn";
$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);