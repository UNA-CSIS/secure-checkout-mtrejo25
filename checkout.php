<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: index.php");
    exit();
}

include "card_validation.php";
include "test_input.php";

$name = isset($_POST['name']) ? test_input($_POST['name']) : '';
$card_number = isset($_POST['number']) ? test_input($_POST['number']) : '';
$expiration_date = isset($_POST['date']) ? test_input($_POST['date']) : '';
$security_code = isset($_POST['code']) ? test_input($_POST['code']) : '';

$subtotal = $_SESSION['subtotal'];
$tax_rate = 0.095;
$tax = $subtotal * $tax_rate;
$total = $subtotal + $tax;

$_SESSION['total'] = $total;

if ($card_number) {
    $card_type = cardValidation($card_number);
}
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Checkout</title>
    </head>
    <body>
        <h2>Checkout</h2>
        <p>Amount to charge: $<?php echo number_format($total, 2); ?> </p> 
        <form action="thankyou.php" method="post">
            Name on Card: <input type="text" name="name"><br>
            Card Number <input type="text" name="number"><br> 
            Expiration Date[mm/yy]: <input type="text" name="date"><br> 
            Security Code: <input type="text" name="code"><br> 
            <input type="submit" value="submit"> 
        </form>




    </body>
</html>
