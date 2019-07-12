<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $value) {
    echo "$value <br>";
}
?>
</body>
</html>