<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php

$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count ($cars);

for($x = 0; $x < $arrlength; $x++){
    echo $cars [$x];
    echo "<br>";
}

?>
</body>
</html>