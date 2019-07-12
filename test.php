<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>
<p>PHP Associative Arrays</p>
<?php

$age = array ("Peter" => "35", "Ben" => "37", "Joe" => "48");

foreach ($age as $x => $x_value) {
echo "Key=" .$x. ", Value=" .$x_value;
echo "<br>";
}
?>
</body>
</html>