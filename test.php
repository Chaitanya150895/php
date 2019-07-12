<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
}
?>
</body>
</html>