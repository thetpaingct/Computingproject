<?php
$email = $_POST['email'];
$password = $_POST['password'];
if($email && $password)
echo "Hello, you have provided <b>$email</b> as your login ID ",
"and your password is <b>$password</b>.";
else
echo "Login ID or password missing! ",
"Please <a href='index.php'>try again</a>.";
?>