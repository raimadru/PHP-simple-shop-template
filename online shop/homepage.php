<!DOCTYPE html>
<!-- HOMEPAGE -->
<!-- After user logs in, he opens this homepage with the two options:
    1. Complete the test.
    2. Products with the possibility to choose some.
    When user adds something to the cart, the information is saved to COOKIES for 4 hours -->
<?php
$name = $_POST['name'];
$exp = time() + (14400 * 4);
setcookie("login", $name, $exp, '/');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Homepage</title>
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/homepage.css">
    </head>
    <body>

        <div class="cart">
            <nav>
                <a href="cart.php">My cart</a>
            </nav>
        </div>

        <div class="quiz">
            <h2>Take a quiz!</h2>
            <div>The quiz is about our online shop because we want
                to give all of the best to our customers.</div>

            <form action="testShop/question1-2.php" method="POST">
                <input type="submit" value="Start">
            </form>
        </div>

        <div class="products_display">
            <h2>Check out our products</h2>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <input type="submit" name="products" value="Our Products">
            </form>
        </div>
        <?php
        $Display = False;

        if (isset($_POST['products'])) {
            $Display = True;
        }

        if ($Display) {
            
        }
        ?>
        <?php
        $Display = False;

        if (isset($_POST['products'])) {
            $Display = True;
        }

        if ($Display) {
            ?>
            <div class="products_array">Choose your products from given variety:</div>
            <form action="cart.php" method="POST">

                <div class="product_type">
                    <p><input type="checkbox" name="product[]" value="Bike">Bike</p>
                    <p><input type="checkbox" name="product[]" value="Rolerskates">Rolerskates</p>

                    <p><input type="checkbox" name="product[]" value="Fruits">Fruits</p>
                    <p><input type="checkbox" name="product[]" value="Candy">Candy</p>
                    <p><input type="checkbox" name="product[]" value="Vegetables">Vegetables</p>
                    <p><input type="checkbox" name="product[]" value="Dumplings">Dumplings</p>

                    <p><input type="checkbox" name="product[]" value="Clay">Clay</p>
                    <p><input type="checkbox" name="product[]" value="Wood">Wood</p>
                </div>
                <br>

                <input type="submit" name="submit2" value="add to cart">
            </form>
            <?php
        }
        ?>   

    </body>
</html>