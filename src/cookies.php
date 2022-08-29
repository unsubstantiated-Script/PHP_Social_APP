<?php

$name = "SomeName";
$value = 100;

//Setting the cookie to expire in a week
$expiration = time() + (60 * 60 * 24 * 7);
setcookie($name, $value, $expiration);


// Reading a cookie....



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
if (isset($_COOKIE['SomeName'])) {
    $aPerson = $_COOKIE['SomeName'];
    echo $aPerson;
} else {
    $aPerson = " ";
}
?>
    <h1>Cookies! </h1>
</body>
</html>