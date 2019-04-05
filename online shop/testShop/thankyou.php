<!DOCTYPE html>
<!-- TEST -->

<html>
    <head>
        <meta charset="UTF-8">
        <title>Questions</title>
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="/css/quiz.css">
    </head>
    <body>
       
        <?php
        // Data from input fields goes into SQL database:

        $a = $_POST['question1'];
        $b = $_POST['question2'];
        $c = $_POST['question3'];
        $d = $_POST['question4'];
        $e = $_POST['question5'];

        $average = ($a * 5 + $b * 5 + $c * 5 + $d * 5 + $e * 5) / 5;
        ?>
        <div class="answers_thankyou">Thank you for participating in our survey!
        <br>
        <!-- Prints out evaluation -->
        The final evaluation you gave is: 
            <?php
            print_r($average);

            // Connection
            $data = mysqli_connect('localhost', 'student', 'student', 'onlineshop');

            if ($data === false) {
                die('Could not connect to MySQL: ' . mysqli_connect_error());
            }

            $name = $_POST['name'];
            $user_id = "SELECT id FROM `users` WHERE name='" . $_COOKIE['login'] . "'";

            $query = "INSERT INTO evaluation (user_id, average) 
                                    VALUES ($user_id, $average)";

            if (mysqli_query($data, $query)) {
                echo "Successful";
            } else {
                echo "Error" . mysqli_error($data);
            }
            mysqli_close($data);
            ?>
            
        <input type="submit" name="submit" value="to homepage">
        </div>
        
    </body>
</html>

