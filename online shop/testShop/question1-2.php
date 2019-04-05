<!DOCTYPE html>
<!-- TEST. 
     Questions 1 and 2 -->

<html>
    <head>
        <meta charset="UTF-8">
        <title>Questions</title>
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="../css/quiz.css">
    </head>
    <body>
        <?php
        
        $DisplayForm = True;

        if (isset($_POST['submit'])) {
            $DisplayForm = False;
        }

        if ($DisplayForm) {
            ?>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <div class="questionField">How satisfied are you with the delivering time?</div>
                <div class="comment">1 - never, 2 - I don't know,
                    3 - sometimes, 4 - mostly, 5 - everytime!</div>
                <input type="radio" name="question1" value="1">1<br>
                <input type="radio" name="question1" value="2">2<br>
                <input type="radio" name="question1" value="3">3<br>
                <input type="radio" name="question1" value="4">4<br>
                <input type="radio" name="question1" value="5">5<br>

                <input type="submit" name="submit" value="Submit">
            </form>
            <?php
        } else {
            ?>
            <?php
            $DisplayForm = False;

            if (isset($_POST['submit'])) {
                $DisplayForm = True;
            }

            if ($DisplayForm) {

                
                ?>

                <form action="question3.php" method="POST">
                    <div class="questionField">What do you think about online shopping?</div>
                    <div class="comment">1 - nothing, 2 - overrated,
                        3 - I like it but I don't buy online, 4 - I prefer online shopping than other, 5 - I love online shopping</div>
                    <input type="radio" name="question2" value="1">1<br>
                    <input type="radio" name="question2" value="2">2<br>
                    <input type="radio" name="question2" value="3">3<br>
                    <input type="radio" name="question2" value="4">4<br>
                    <input type="radio" name="question2" value="5">5<br>

                    <input type="submit" name="submit" value="Submit">
                </form>
                <?php
            }
            ?>

        </body>
    </html>
    <?php
}