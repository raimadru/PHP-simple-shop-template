<!DOCTYPE html>
<!-- TEST. 
     Question 5 -->

<html>
    <head>
        <meta charset="UTF-8">
        <title>Questions</title>
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="../css/quiz.css">
    </head>
    <body>
        <?php
        ?>

        <form action="thankyou.php" method="POST">
            <div class="questionField">Would recommend this online shop to a friend?</div>
            <div>1 - no, 2 - not sure,
                3 - no opinion, 4 - I think so, 5 - Yes</div>
            <input type="radio" name="question5" value="1">1<br>
            <input type="radio" name="question5" value="2">2<br>
            <input type="radio" name="question5" value="3">3<br>
            <input type="radio" name="question5" value="4">4<br>
            <input type="radio" name="question5" value="5">5<br>

            <input type="submit" name="submit" value="Submit">
        </form>

    </body>
</html>