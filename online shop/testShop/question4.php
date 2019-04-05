<!DOCTYPE html>
<!-- TEST. 
     Question 4 -->

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

        <form action="question5.php" method="POST">
            <div class="questionField">What do you think about the products we sell?</div>
            <div class="comment">1 - nothing, 2 - really poor variety,
                3 - it's okey, 4 - could be more products for minorities, 5 - a lot of things! Hard to choose</div>
            <input type="radio" name="question4" value="1">1<br>
            <input type="radio" name="question4" value="2">2<br>
            <input type="radio" name="question4" value="3">3<br>
            <input type="radio" name="question4" value="4">4<br>
            <input type="radio" name="question4" value="5">5<br>

            <input type="submit" name="submit" value="Submit">
        </form>
       
    </body>
</html>