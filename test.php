<html>
<body>

<?php

$name = $_POST['name'];
$email =  $_POST["email"];

echo "Welcome";

echo "<br>";

if ($name == "") {
    echo "Please Enter the Name<br>";
    // echo strrchr("$name","world");
}
else {
    echo $_POST["name"]; 
}

echo "<br>";

if ($email == "") {
    echo "Please Enter the Email";
}
else {
    echo $_POST["email"]; 
}


?>

</body>
</html>