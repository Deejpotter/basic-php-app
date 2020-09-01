<?php include "templates/header.php"; ?>

<h1>Simple Database App</h1>

<form action="createDB.php" method="post">
    <button type="submit">Create Database</button>
</form>

<form action="createTable.php" method="post">
    <button type="submit">Create Table</button>
</form>

<form action="createUser.php" method="post">
    <h2>Create</h2>
    <label for="createFirstName">First Name</label>
    <input type="text" name="createFirstName" id="createFirstName">
    <label for="createLastName">First Name</label>
    <input type="text" name="createLastName" id="createLastName">
    <label for="createEmail">email address</label>
    <input type="email" name="createEmail" id="createEmail">
    <button type="submit">Create User</button>
</form>

<form method="post">
    <h2>Read</h2>
</form>

<form action="updateUser.php" method="post">
    <h2>Update</h2>
    <label for="updateFirstName">First Name</label>
    <input type="text" name="updateFirstName" id="updateFirstName">
    <label for="updateLastName">First Name</label>
    <input type="text" name="updateLastName" id="updateLastName">
    <label for="updateEmail">email address</label>
    <input type="email" name="updateEmail" id="updateEmail">
    <button type="submit">Update User</button>
</form>

<form method="post">
    <h2>Delete</h2>
</form>

<?php include "templates/footer.php"; ?>