<?php
require "config.php";

try {
  $conn = new PDO("mysql:host=$host", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "CREATE DATABASE $dbname";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Database created successfully<br>";
  header("Location: index.php");
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
  header("Location: index.php");
}