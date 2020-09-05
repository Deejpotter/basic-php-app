<?php include "templates/header.php"; ?>

<!-- Hero section -->
<section id="hero-section">
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <h1 class="display-3">Simple Database App</h1>
            <p>Click below to create database and table before the app will work</p>
            <form action="init.php" method="post">
                <input class="btn btn-primary" type="submit" value="Initialise database">
            </form>
        </div>
    </div>
</section>


<!-- Create section -->
<section id="create-section" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <h2>Create</h2>
                <p>Enter your info to create a new user.</p>
            </div>
            <div class="col-md">
                <!-- Form should submit the details and create a new user in the database -->
                <form class="" action="createUser.php" method="post">
                    <div class="form-group">
                        <label id="createUsernameLabel" for="createUsername">Username:</label>
                        <input type="text" name="createUsername" id="createUsername" class="form-control" placeholder="Sterogrules" aria-labelledby="createUsernameLabel">
                    </div>
                    <div class="form-group">
                        <label id="createFirstNameLabel" for="createFirstName">FirstName:</label>
                        <input type="text" name="createFirstName" id="createFirstName" class="form-control" placeholder="Sterog" aria-labelledby="createFirstNameLabel">
                    </div>
                    <div class="form-group">
                        <label id="createLastNameLabel" for="createLastName">LastName:</label>
                        <input type="text" name="createLastName" id="createLastName" class="form-control" placeholder="Smithson" aria-labelledby="createLastNameLabel">
                    </div>
                    <div class="form-group">
                        <label id="createPasswordLabel" for="createPassword">Password:</label>
                        <input type="password" name="createPassword" id="createPassword" class="form-control" placeholder="x6h27YT5&" aria-labelledby="createPasswordLabel">
                    </div>
                    <input class="btn btn-primary" type="submit" value="Create user">
                </form>
            </div>
        </div>
    </div>
</section>

<hr>

<!-- Read section -->
<section id="read-section" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <form action="readUser.php">
                    <div class="form-group">
                        <label id="readUsernameLabel" for="readUsername">Username:</label>
                        <input type="text" name="readUsername" id="readUsername" class="form-control" placeholder="Sterogrules" aria-labelledby="readUsernameLabel">
                    </div>
                    <input class="btn btn-primary" type="submit" value="Create user">
                </form>
            </div>
            <div class="col-md">
                <h2>Find user</h2>

            </div>
        </div>
</section>

<hr>

<!-- Update section -->
<section id="update-section" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Update</h2>
            </div>
            <div class="col-md-6">
                <form class="" action="updateUser.php" method="post">
                    <div class="form-group">
                        <label id="updateUsernameLabel" for="updateUsername">Username:</label>
                        <input type="text" name="updateUsername" id="updateUsername" class="form-control" placeholder="Sterogrules" aria-labelledby="updateUsernameLabel">
                    </div>
                    <div class="form-group">
                        <label id="updateFirstNameLabel" for="updateFirstName">FirstName:</label>
                        <input type="text" name="updateFirstName" id="updateFirstName" class="form-control" placeholder="Sterog" aria-labelledby="updateFirstNameLabel">
                    </div>
                    <div class="form-group">
                        <label id="updateLastNameLabel" for="updateLastName">LastName:</label>
                        <input type="text" name="updateLastName" id="updateLastName" class="form-control" placeholder="Smithson" aria-labelledby="updateLastNameLabel">
                    </div>
                    <input class="btn btn-primary" type="submit" value="Update user">
                </form>
            </div>
        </div>
    </div>
</section>

<hr>

<!-- Delete section -->
<section id="delete-section" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="form-group">
                    <label id="deleteUsernameLabel" for="deleteUsername">Username:</label>
                    <input type="text" name="deleteUsername" id="deleteUsername" class="form-control" placeholder="Sterogrules" aria-labelledby="deleteUsernameLabel">
                </div>
                <input class="btn btn-primary" type="submit" value="delete user">
            </div>
            <div class="col-md">
                <h2>Delete user</h2>
            </div>
        </div>
    </div>
</section>

<?php include "templates/footer.php"; ?>