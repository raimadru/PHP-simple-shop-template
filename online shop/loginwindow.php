<!DOCTYPE html>
<!-- LOGIN PAGE -->
<!-- when user clicks on fields and submits the form:
    1. If the account is already created - he can complete the test -> opens new page for making the test.
    2. If user needs new account, he creates it:
                    - the new data goes into the database and next time he logs inabilities 
                      the data will let him to complete the test -->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/login.css">
    </head>
    <body>
        <h2>Welcome to our online shop!</h2>
        <h4>Login and start the shopping!<h4>
        <?php
        if (isset($_POST['name']) and isset($_POST['password'])) {
            
            // Connect:
            $conn = mysqli_connect('localhost', 'student', 'student', 'onlineshop');
            if (!$conn) {
                die('Could not connect to MySQL: ' . mysqli_connect_error());
            }

            $name = $_POST['name'];
            $password = $_POST['password'];
            // Checking if the values are existing in the database or not:
            $query = "SELECT * FROM `users` WHERE name='$name' and password='$password'";

            $result = mysqli_query($conn ,$query) or die(mysql_error());
            $count = mysqli_num_rows($result);

            // If the posted values are equal to the database values, then session will be created for the user:
            if ($count == 1) {
                $_SESSION['name'] = $name;
                header("Location: homepage.php");
                exit;
            } else {
                // If the login credentials doesn't match, he will be shown with an error message.
                echo "Invalid Login Credentials.";
            }
        }
        ?>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div> 
                <p>Username:</p> <input type="text" name="name" required>
            </div>
            <div>
                <p>Password:</p> <input type="text" name="password" required> 
            </div>
            <input type="submit" name="loginToTest" value="login">
        </form>
    </body>
</html>
