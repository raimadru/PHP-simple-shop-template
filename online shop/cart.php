<!DOCTYPE html>
<!-- CART -->
<!-- When user chooses the products, the information is saved into the file.
     When clicks the button he can see his chosen products. -->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cart</title>
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/cart.css">
    </head>
    <body>
        <div class="shopping_cart">
            <h4>Shopping cart items: </h4>
            <div class="items_display">
                <?php
                if (isset($_POST['submit2'])) {
                    if (!empty($_POST['product'])) {

                        foreach ($_POST['product'] as $product) {

                            $shoppingFile = fopen("cart_userid.txt", "a");

                            fwrite($shoppingFile, $product);
                            fclose($shoppingFile);

                            echo $product . "<br>";
                        }
                    } else {

                        echo "Shopping cart is empty.";
                    }
                }
                ?>
            </div>
            <div>
                <h4>You are almost done... What do you choose?</h4>
                <div>
                    <a href="homepage.php"><input type="submit" name="submit" value="Go back to homepage"></a>
                    <a href="#"><input type="submit" name="submit" value="Continue shopping!"></a>
                </div>
            </div>
        </div>
    </body>
</html>
