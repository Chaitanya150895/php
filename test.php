<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
$x=5;
$y=10;

function mytest(){
    global $x, $y;
    $y = $x + $y;

    
}
echo $y.'<br>';


mytest();
echo $y; 
?>

</body>
</html>