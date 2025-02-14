<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: index.php");
    exit();
}

$total = $_SESSION['total'];
$name = $_POST['name'];
$card_number = $_POST['number'];
$expiration_date = $_POST['date'];
$security_code = $_POST['code'];

include "card_validation.php";
$card_type = cardValidation($card_number);
?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php if ($card_type): ?>
            <p>Your <?php echo $card_type; ?> ending with <?php
                echo
                substr($card_number, -4);
                ?> has been charged $<?php
                echo
                number_format($total, 2);
                ?></p>
        <?php else: ?>
            <p>Invalid card. Your transaction was unsuccessful. </p>
<?php endif; ?>

        <br>
        <a href="index.php">Shop Again</a>
    </body>
</html>
