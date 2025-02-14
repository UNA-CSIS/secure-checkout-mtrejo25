<?php
session_start();

$subtotal = $_SESSION['subtotal'];
$tax_rate = 0.095;
$tax = $subtotal * $tax_rate;
$total = $subtotal + $tax;
?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Tax</title>
    </head>
    <body>
        <form method="post" action="authentication.php">
            <h2>Product Total With Tax</h2>
            <p>Subtotal: $<?php echo number_format($subtotal, 2); ?></p>
            <p>Tax: $<?php echo number_format($tax, 2); ?></p>
            <p>Final Order Total: $<?php echo number_format($total, 2); ?></P> 

            <br>
            <a href="authentication.php">Proceed to Checkout</a> | 
            <a href="index.php">Continue Shopping</a>
    </body>
</html>
