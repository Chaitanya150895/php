<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
$x=5;
$y=10;

function myTest(){
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];   
}

myTest();
echo $y; 
?>

</body>
</html>