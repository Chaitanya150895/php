<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
function familyName($fname) {
    echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
?>
</body>
</html>