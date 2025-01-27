<?php

require_once("./pdoconnection.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

   
    $message = register($conn, $username, $password, $firstname, $lastname);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <form action="" method="post">
            <fieldset>
                <div>
                    <label for="username">Username</label>
                    <input type="text" name="username">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="text" name="password">
                </div>
                <div>
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname">
                </div>
                <div>
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname">
                </div>
                <div>
                    <button type="submit">Register</button>
                </div>
            </fieldset>
        </form>
   
        
   
</body>
</html>