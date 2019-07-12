<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>
<?php
$x = 75; 
$y = 25;
 
function addition() { 
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
}
 
addition(); 
echo $z; 
?>
</body>
</html>