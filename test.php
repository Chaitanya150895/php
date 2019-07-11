<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
$x=5; //global scope

function myTest(){
    //using x inside this function will generate this error
    echo "<p>Variable c inside function is: $x </p>";
}

myTest();

echo "<p>Variable x outside function is : $x</p>"
?>

</body>
</html>