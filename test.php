<!DOCTYPE html>
<?php
// set the expiration date to one hour ago
setcookie("user", "", time() - 3600);
?>
<html>
<body>

<?php
echo "Cookie 'user' is deleted.";
?>


<p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>

</body>
</html>