<?php
require "config.php";

try {
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
  header("Location: index.php");
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  header("Location: index.php");
}
