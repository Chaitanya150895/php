<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>
<p>PHP Associative Arrays</p>
<?php

$age = array ("Peter" => "35", "Ben" => "37", "Joe" => "48");
echo "Peter is" .$age['Peter']. "years old." .'<br>';
echo "Ben is" .$age['Ben']. "years old." .'<br>';
echo "Joe is" .$age['Joe']. "years old.";

?>
</body>
</html>