<?php
require "config.php";

try {
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $new_user = array(
    "firstname" => $_POST['updateFirstName'],
    "lastname"  => $_POST['updateLastName'],
    "email"     => $_POST['updateEmail']
  );

  $sql = sprintf(
    "INSERT INTO %s (%s) values (%s)",
    "$tableName",
    implode(", ", array_keys($new_user)),
    ":" . implode(", :", array_keys($new_user))
  );

  $statement = $conn->prepare($sql);
  $statement->execute($new_user);
  header("Location: index.php");
  echo "Record updated successfully";
} catch (PDOException $e) {
  header("Location: index.php");
  echo $sql . "<br>" . $e->getMessage();
}