<?php
//Cach 1
if (isset($_COOKIE['login']) && $_COOKIE['login'] == 'true') {
    header('Location: users.php');
    die();
}

require_once('../db/dbhelper.php');
require_once('../utils/utility.php');
require_once('./form-login.php');

//Cach 2
// $user = validateToken();
// if ($user != null) {
//     header('Location: users.php');
//     die();
// }

?>

<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <div class="container mt-30">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="text-center">Login Page</h2>
            </div>
            <div class="panel-body">
                <form method="post">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input required="true" type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input required="true" type="password" class="form-control" id="pwd" name="password">
                    </div>
                    <button class="btn btn-success">Login</button>
                </form>
            </div>
        </div>
    </div>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>