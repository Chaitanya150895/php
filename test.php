<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php

$favcolor = "red";

switch ($favcolor){
    case "red":
    echo "Your favorite color is red!";
    break;

    case "green":
    echo "Your favorite color is green!";
    break;

    case "blue":
    echo "Your favorite color is blue!";
    break;

    default:
    echo "Your favotite color is neither red, blue nor green";
}

?>
</body>
</html>