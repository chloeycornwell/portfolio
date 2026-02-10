<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Validation</title>
</head>
<body>

<?php

// check if the value exists and is numeric
if (!empty($_POST['number']) && is_numeric($_POST['number'])) {

    $number = $_POST['number'];

    // print the number
    echo "You entered: $number<br>";

    // check if number is less than 10
    if ($number < 10) {
        echo "Your number is less than 10.";
    } else {
        echo "Your number is greater or equal to 10.";
    }

} else {
    echo "Please go back and enter a number.";
}

?>

</body>
</html>


