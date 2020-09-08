<?php
require "config.php";

try {
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $new_user = array(
    "username" => $_POST['updateUsername'],
    "firstname" => $_POST['updateFirstName'],
    "lastname"  => $_POST['updateLastName'],
    "password" => $_POST['updatePassword'],
    "favouriteColour" => $_POST['updateFavouriteColour']
  );

  
  $sql = "UPDATE users
            SET firstname = :firstname,
              lastname = :lastname,
              favouriteColour = :favouriteColour
            WHERE username = :username";

  $statement = $conn->prepare($sql);
  $statement->execute($new_user);
  header("Location: index.php");
  
} catch (PDOException $e) {
  header("Location: index.php");
  echo $sql . "<br>" . $e->getMessage();
}