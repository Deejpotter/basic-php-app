<?php include "templates/header.php"; ?>

<section>
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

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <h2>Create</h2>
                <p>Enter your info to create a new user.</p>
            </div>
            <div class="col-md">
                <form class="" action="createUser.php" method="post">
                    <div class="form-group">
                        <label id="createUsernameLabel" for="createUsername">Username:</label>
                        <input type="text" name="createUsername" id="createUsername" class="form-control" placeholder="Coolusername" aria-describedby="createUsernameLabel">
                    </div>
                    <div class="form-group">
                        <label id="createFirstNameLabel" for="createFirstName">FirstName:</label>
                        <input type="text" name="createFirstName" id="createFirstName" class="form-control" placeholder="Sterog" aria-describedby="createFirstNameLabel">
                    </div>
                    <div class="form-group">
                        <label id="createLastNameLabel" for="createLastName">LastName:</label>
                        <input type="text" name="createLastName" id="createLastName" class="form-control" placeholder="Smithson" aria-describedby="createLastNameLabel">
                    </div>
                    <div class="form-group">
                        <label id="createEmailLabel" for="createEmail">Email:</label>
                        <input type="text" name="createEmail" id="createEmail" class="form-control" placeholder="sterog@someplace.com" aria-describedby="createEmailLabel">
                    </div>
                    <input class="btn btn-primary" type="submit" value="Create user">
                </form>
            </div>
        </div>
    </div>
</section>



<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form class="" action="updateUser.php" method="post">
                    <div class="form-group">
                        <label id="updateUsernameLabel" for="updateUsername">Username:</label>
                        <input type="text" name="updateUsername" id="updateUsername" class="form-control" placeholder="Coolusername" aria-describedby="updateUsernameLabel">
                    </div>
                    <div class="form-group">
                        <label id="updateFirstNameLabel" for="updateFirstName">FirstName:</label>
                        <input type="text" name="updateFirstName" id="updateFirstName" class="form-control" placeholder="Sterog" aria-describedby="updateFirstNameLabel">
                    </div>
                    <div class="form-group">
                        <label id="updateLastNameLabel" for="updateLastName">LastName:</label>
                        <input type="text" name="updateLastName" id="updateLastName" class="form-control" placeholder="Smithson" aria-describedby="updateLastNameLabel">
                    </div>
                    <div class="form-group">
                        <label id="updateEmailLabel" for="updateEmail">Email:</label>
                        <input type="text" name="updateEmail" id="updateEmail" class="form-control" placeholder="sterog@someplace.com" aria-describedby="updateEmailLabel">
                    </div>
                    <input class="btn btn-primary" type="submit" value="Update user">
                </form>
            </div>
            <div class="col-md-6">
                <h2>Update</h2>
            </div>
        </div>
    </div>
</section>


<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <h2>Find user</h2>
            </div>
            <div class="col-md">

            </div>
        </div>
    </div>
</section>


<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <h2>Delete user</h2>
            </div>
            <div class="col-md">

            </div>
        </div>
    </div>
</section>

<?php include "templates/footer.php"; ?>