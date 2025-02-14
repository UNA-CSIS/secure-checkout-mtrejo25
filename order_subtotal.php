<?php
session_start();

$num_notebook = filter_input(INPUT_POST, "notebook", FILTER_VALIDATE_INT) ?? 0;
$num_stapler = filter_input(INPUT_POST, "stapler", FILTER_VALIDATE_INT) ?? 0;
$num_calculator = filter_input(INPUT_POST, "calculator", FILTER_VALIDATE_INT) ?? 0;

$notebook = $num_notebook * 2.50;
$stapler = $num_stapler * 3.25;
$calculator = $num_calculator * 8.50;
$subtotal = $notebook + $stapler + $calculator;

$_SESSION['subtotal'] = $subtotal;
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Subtotal</title>
    </head>
    <body>
        <form action="tax_calc.php" method="post">
            <h2>Order Summary</h2>
            <?php
            echo "Your current order total is: \$" . number_format($subtotal, 2);
            ?>
            <br>
            <br>
            <a href="tax_calc.php"> Proceed with Purchase </a> |
            <a href="index.php">Continue Shopping</a>

        </form>
    </body>
</html>
