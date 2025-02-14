<?php
session_start();
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>School Supply Shop</title>
    </head>
    <body>
        <form action="order_subtotal.php" method="post">
            <h2>School Supply Shop</h2>
            <h4>Please input quantity for each product</h4>
            <p>
                Notebook: <input type="text" name="notebook"> <br>
                1 subject notebook | $2.50<br>
            </p>
            <p>
                Stapler: <input type="text" name="stapler"><br>
                1 hand stapler | $3.25 <br>
            </p>
            <p>
                Calculator: <input type="text" name="calculator"><br>
                1 scientific calculator | $8.50 <br>
            </p>
            <input type="submit"> 
        </form>

    </body>
</html>
