<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
define("GREETING", "Welcome to PHP");

function myTest(){

    echo GREETING;
}

myTest();

?>
</body>
</html>