
<?php

function cardValidation($number) {
    $length = strlen($number);
    $prefix = substr($number, 0, 2);
    $firstDigit = substr($number, 0, 1);

    if ($length == 15 && ($prefix == "34" || $prefix == "37")) {
        return "AMEX";
    } elseif (($length == 13 || $length == 16) && $firstDigit == "4") {
        return "VISA";
    } elseif ($length == 16 && in_array($prefix, ["51", "52", "53", "54", "55"])) {
        return "MASTERCARD";
    } else {
        return false;
    }
}
?>


