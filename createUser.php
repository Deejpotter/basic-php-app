<?php
require "config.php";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $new_user = array(
    "firstname" => $_POST['firstname'],
    "lastname"  => $_POST['lastname'],
    "email"     => $_POST['email']
  );

  $sql = sprintf(
    "INSERT INTO %s (%s) values (%s)",
    "users",
    implode(", ", array_keys($new_user)),
    ":" . implode(", :", array_keys($new_user))
  );

  $statement = $connection->prepare($sql);
  $statement->execute($new_user);
  echo "New record created successfully";
} catch (PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;