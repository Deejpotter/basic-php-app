<?php include "templates/header.php"; ?>

<h1>Simple Database App</h1>

<form method="post">
    <h2>Create</h2>
    <label for="createFirstName">First Name</label>
    <input type="text" name="createFirstName" id="createFirstName">
    <label for="createLastName">First Name</label>
    <input type="text" name="createLastName" id="createLastName">
    <label for="createEmail">email address</label>
    <input type="email" name="createEmail" id="createEmail">
</form>

<form method="post">
    <h2>Read</h2>
</form>

<form method="post">
    <h2>Update</h2>
    <label for="updateFirstName">First Name</label>
    <input type="text" name="updateFirstName" id="updateFirstName">
    <label for="updateLastName">First Name</label>
    <input type="text" name="updateLastName" id="updateLastName">
    <label for="updateEmail">email address</label>
    <input type="email" name="updateEmail" id="updateEmail">
</form>

<form method="post">
    <h2>Delete</h2>
</form>

<?php include "templates/footer.php"; ?>