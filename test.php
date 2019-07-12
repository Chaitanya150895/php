<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
function familyName($fname, $year) {
    echo "$fname Refsnes, Born in $year <br>";
}

familyName("Jani", "1945");
familyName("Hege", 1998);
familyName("Stale", "1979");
familyName("Kai Jim", "1994");
familyName("Borge", "1988");
?>
</body>
</html>